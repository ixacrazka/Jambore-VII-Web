<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAMBORE</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        
        <!-- Form -->
        <form action="{{ url('/login') }}" method="POST">
            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter your email address" required>
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Login
            </button>
        </form>
        
        <!-- Additional Links -->
        <div class="mt-4 text-center">
            <a href="#" class="text-sm text-blue-500 hover:text-blue-700">Forgot Password?</a>
            <span class="text-gray-400 mx-2">|</span>
            <a href="#" class="text-sm text-blue-500 hover:text-blue-700">Create Account</a>
        </div>
    </div>

</body>
</html>
