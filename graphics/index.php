<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TWICE Login Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-yellow-200 min-h-screen flex items-center justify-center">

        <div class="bg-white bg-opacity-95 p-8 rounded-2xl shadow-lg w-full max-w-md">
            <h1 class="text-3xl font-bold text-center text-pink-600 mb-6">Welcome ONCE 💖</h1>

            <form action="register.php" method="POST" class="space-y-4">
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter Your Name" minlength="6" maxlength="15" required
                        class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required
                        class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create Password" minlength="6" maxlength="15" required
                        class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <button type="submit" 
                    class="w-full bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-600 transition">
                    Register
                </button>
            </form>
        </div>

    </body>
</html>