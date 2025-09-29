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
                Twice Gallery🤩
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/d579915db9354604bf4c3c6419ea438f-2-2.%2000_00%20%E1%84%82%E1%85%A1%E1%84%8B%E1%85%A7%E1%86%AB0120250806070143669.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/bdc9f357056d4adca2cec5a069b0be08-2-3.%2000_00%20%E1%84%8C%E1%85%A5%E1%86%BC%E1%84%8B%E1%85%A7%E1%86%AB0220250806070144864.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/6ee90f4a2a9449c985d803b540e165ae-2-4.%2000_00%20%E1%84%86%E1%85%A9%E1%84%86%E1%85%A90120250806070145286.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/78e82b4b17c948c993f60e89bd35afb0-2-5.%2000_00%20%E1%84%89%E1%85%A1%E1%84%82%E1%85%A10120250806070146149.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/82fca09e77ac40a8a1f781f0a33efae3-2-4.%2000_00%20%E1%84%86%E1%85%A9%E1%84%86%E1%85%A90220250806070145714.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/aa4b070000c342d183fd40c423f1ea9f-2-6.%2000_00%20%E1%84%8C%E1%85%B5%E1%84%92%E1%85%AD0220250806070147305.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/996418b6533e49b7b6059d4ca28c9374-2-7.%2000_00%20%E1%84%86%E1%85%B5%E1%84%82%E1%85%A101.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/7d94e6c8c55b45608d481a5bf4a9e6e6-2-8.%2000_00%20%E1%84%83%E1%85%A1%E1%84%92%E1%85%A7%E1%86%AB0120250806070148599.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/62a3031c4ddb4f87b5c5158843cef1a3-2-9.%2000_00%20%E1%84%8E%E1%85%A2%E1%84%8B%E1%85%A7%E1%86%BC0120250806070149522.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="https://lv2-cdn.azureedge.net/twice/b4a4ba2ba54a4fc5989aa9d8836aef1a-2-10.%2000_00%20%E1%84%8D%E1%85%B3%E1%84%8B%E1%85%B10120250806070150306.jpg"
                        class="w-40 h-40 mx-auto rounded-whole object-cover mb-4">
                </div>
            </div>
        </div>

    </body>

</html>