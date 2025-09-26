<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWICE Updates</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-100 via-yellow-50 to-pink-200 min-h-screen">

    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-44xl font-bold text-center text-pink-600 mb-10">
            🎤 TWICE PROFILE 🎤
        </h1>

        <!-- Members Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            
            <!-- Nayeon -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed127716f6a9fa1c6ce06f8/master/w_960,c_limit/Nayeon.jpg" alt="Nayeon"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Nayeon</h2>
                <p class="text-gray-600">Position: Lead Vocalist, Lead Dancer, Center, Face of the Group</p>
                <p class="text-gray-600">Birthday: September 22, 1995</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Jeongyeon -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed127a66f6a9fa1c6ce06fc/master/w_960,c_limit/Jeongyeon.jpg" alt="Jeongyeon"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Jeongyeon</h2>
                <p class="text-gray-600">Position: Lead Vocalist</p>
                <p class="text-gray-600">Birthday: November 1, 1996</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Momo -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed127fd6f6a9fa1c6ce06fe/master/w_960,c_limit/Momo.jpg" alt="Momo"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Momo</h2>
                <p class="text-gray-600">Position: Main Dancer, Sub Vocalist, Sub Rapper</p>
                <p class="text-gray-600">Birthday: November 9, 1996</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Sana -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed12816023f6b89155fca02/master/w_960,c_limit/Sana.jpg" alt="Sana"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Sana</h2>
                <p class="text-gray-600">Position: Sub-Vocalist</p>
                <p class="text-gray-600">Birthday: December 29, 1996</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Jihyo -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed127db1605cc104384d10f/master/w_960,c_limit/Jihyo.jpg" alt="Jihyo"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Jihyo</h2>
                <p class="text-gray-600">Position: Leader, Main Vocalist</p>
                <p class="text-gray-600">Birthday: February 1, 1997</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Mina -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed127df1605cc104384d111/master/w_960,c_limit/Mina.jpg" alt="Mina"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Mina</h2>
                <p class="text-gray-600">Position: Main Dancer, Sub Vocalist</p>
                <p class="text-gray-600">Birthday: March 24, 1997</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Dahyun -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed127b41605cc104384d10d/master/w_960,c_limit/Dahyun%20REAL.jpg" alt="Dahyun"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Dahyun</h2>
                <p class="text-gray-600">Position: Lead Rapper, Sub Vocalist</p>
                <p class="text-gray-600">Birthday: May 28, 1998</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Chaeyoung -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed127966f6a9fa1c6ce06fa/master/w_960,c_limit/Chaeyoung.jpg" alt="Chaeyoung"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Chaeyoung</h2>
                <p class="text-gray-600">Position: Main Rapper, Sub Vocalist</p>
                <p class="text-gray-600">Birthday: April 23, 1999</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>
            </div>

            <!-- Tzuyu -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <img src="https://assets.teenvogue.com/photos/5ed128186f6a9fa1c6ce0700/master/w_960,c_limit/Tzuyu.jpg" alt="Tzuyu"
                     class="w-40 h-40 mx-auto rounded-full object-cover mb-4">
                <h2 class="text-xl font-bold text-pink-500">Tzuyu</h2>
                <p class="text-gray-600">Position: Lead Dancer, Sub Vocalist, Visual, Maknae</p>
                <p class="text-gray-600">Birthday: June 14, 1999</p>
                <p class="text-gray-600">Debut: Oct 20, 2015</p>

            </div>

        </div>

        <!-- Back button -->
        <div class="mt-10 text-center">
            <a href="dashboard.php" 
               class="bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600">
                ⬅ Back to Dashboard
            </a>
        </div>
    </div>

</body>
</html>