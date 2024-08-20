<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR Code Scanner - Pramuka Indonesia</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto p-4 bg-white shadow-md rounded-lg border-t-4 border-[#543310]">
        <h1 class="text-3xl font-bold text-center mb-6 text-[#543310] ">Scan disini yaa...</h1>

        <div id="alert" class="hidden p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
            Qrcode Tidak Valid, Harap Cek Kembali
        </div>

        <div class="scanner-container mb-6">
            <div id="reader" class="w-full h-64 bg-gray-200 rounded-lg"></div>
        </div>
        <button class="w-full bg-[#543310] text-white py-2 rounded hover:bg-green-700 transition duration-200"
            onclick="window.history.back()">Kembali</button>
    </div>

    <div id="modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full relative">
            <button id="closeModal"
                class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">✕</button>
            <h2 class="text-2xl mb-4">Input No HP</h2>
            <form id="form">
                <input type="hidden" id="qrcode_id" name="qrcode_id">
                <div class="mb-4">
                    <label for="no_hp" class="block text-gray-700">No HP:</label>
                    <input type="text" id="no_hp" name="no_hp" class="w-full p-2 border rounded">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="submitForm"
                        class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition duration-200">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal for Error -->
    <div id="errorModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full relative">
            <button id="closeErrorModal"
                class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">✕</button>
            <h2 class="text-2xl mb-4 text-red-600">Terjadi Kesalahan</h2>
            <p id="errorMessage" class="text-gray-700"></p>
        </div>
    </div>

    <!-- Modal for Warning -->
    <div id="warningModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full relative">
            <button id="closeWarningModal"
                class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">✕</button>
            <h2 class="text-2xl mb-4 text-yellow-600">Hai</h2>
            <p id="warningMessage" class="text-gray-700"></p>
        </div>
    </div>

    <!-- Modal for Success -->
    <div id="successModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full relative">
            <button id="closeSuccessModal"
                class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">✕</button>
            <h2 class="text-2xl mb-4 text-green-600">Success</h2>
            <p id="successMessage" class="text-gray-700"></p>
        </div>
    </div>

    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // console.log(`Code matched = ${decodedText}`, decodedResult);
            $.ajax({
                url: '{{ route('scan') }}',
                method: 'POST',
                data: {
                    id: decodedText,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('AJAX response:', response);
                    if (response.code == 200) {
                        // qrcode data
                        // console.log('Valid QR Code:', response.data);
                        $('#qrcode_id').val(decodedText);
                        $('#modal').removeClass('hidden');
                    } else {
                        // munculkan alert tailwind dengan text "Qrcode Tidak Valid, Harap Cek Kembali"
                        $('#alert').removeClass('hidden');
                        setTimeout(function() {
                            $('#alert').addClass('hidden');
                        }, 5000); // Alert akan hilang setelah 5 detik
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', error);
                    // $('#alert').removeClass('hidden');
                    // setTimeout(function() {
                    //     $('#alert').addClass('hidden');
                    // }, 5000); // Alert akan hilang setelah 5 detiku
                }
            });
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
            // $('#alert').removeClass('hidden');
            // setTimeout(function() {
            //     $('#alert').addClass('hidden');
            // }, 5000); // Alert akan hilang setelah 5 detik
        }

        $('#submitForm').on('click', function() {
            var no_hp = $('#no_hp').val();
            var qrcode_id = $('#qrcode_id').val();

            console.log(no_hp, qrcode_id);
            $.ajax({
                url: "{{ route('scan.tambah') }}",
                method: 'POST',
                data: {
                    no_hp: no_hp,
                    qrcode_id: qrcode_id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Form submission response:', response);
                    $('#modal').addClass('hidden');

                    if (response.code == 404) {
                        $('#errorMessage').text(response.data);
                        $('#errorModal').removeClass('hidden');
                    } else if (response.code == 11) {
                        $('#warningMessage').text(response.data);
                        $('#warningModal').removeClass('hidden');
                    } else if (response.code == 200) {
                        $('#successMessage').text(response.data);
                        $('#successModal').removeClass('hidden');
                        // setTimeout(function() {
                        //     $('#successModal').addClass('hidden');
                        // }, 5000);
                    }

                },
                error: function(xhr, status, error) {
                    console.error('Form submission error:', error);
                    alert('An error occurred while submitting the form.');
                }
            });
        });

        $('#closeModal').on('click', function() {
            $('#modal').addClass('hidden');
        });

        $('#closeErrorModal').on('click', function() {
            $('#errorModal').addClass('hidden');
        });

        $('#closeWarningModal').on('click', function() {
            $('#warningModal').addClass('hidden');
        });

        $('#closeSuccessModal').on('click', function() {
            $('#successModal').addClass('hidden');
        });

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</body>

</html>
