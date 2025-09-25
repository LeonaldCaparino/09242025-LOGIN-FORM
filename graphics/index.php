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

            <!-- Tabs -->
            <div class="flex mb-4 justify-center">
                <button onclick="showForm('login')" class="px-4 py-2 bg-pink-500 text-white rounded-l">Login</button>
                <button onclick="showForm('register')" class="px-4 py-2 bg-gray-200 rounded-r">Register</button>
            </div>

            <!-- ✅ Login Form -->
            <form id="loginForm" action="login.php" method="POST" class="space-y-4">
                <div>
                    <label>Email</label>
                    <input type="email" name="email" required class="w-full border px-3 py-2 rounded" />
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required class="w-full border px-3 py-2 rounded" />
                </div>
                <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded">Login</button>
            </form>

            <!-- ✅ Register Form (hidden by default) -->
            <form id="registerForm" action="register.php" method="POST" class="space-y-4 hidden">
                <div>
                    <label>Full Name</label>
                    <input type="text" name="name" required class="w-full border px-3 py-2 rounded" />
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" required class="w-full border px-3 py-2 rounded" />
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" minlength="6" required class="w-full border px-3 py-2 rounded" />
                </div>
                <button type="submit" class="w-full bg-green-500 text-white py-2 rounded">Register</button>
            </form>
        </div>

        <script>
        function showForm(type) {
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('registerForm').classList.add('hidden');
            if (type === 'login') document.getElementById('loginForm').classList.remove('hidden');
            if (type === 'register') document.getElementById('registerForm').classList.remove('hidden');
        }
        </script>
    </body>
</html>