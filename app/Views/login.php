<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoSecure Login - Login dengan Keamanan Lokasi</title>
    <meta name="description" content="Login ke akun Anda dengan keamanan tambahan berbasis lokasi. Dapatkan perlindungan superior dengan GeoSecure.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen p-4">
    <div class="animsition">
        <div class="flex flex-col lg:flex-row bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden w-full max-w-6xl">
            <div class="relative hidden lg:flex lg:w-1/2 bg-dark-100 p-12 text-white items-center justify-center">
                <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://imgs.search.brave.com/e0Wl2PGfvmSCrr_KAJbOOomwdCeT1OmDV1yC0c60xxQ/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly90aHVt/YnMuZHJlYW1zdGlt/ZS5jb20vYi90aGFp/bGFuZC1tYXAtcGlu/LWNsb3NldXAtc2hv/dC1tYWxheXNpYS1w/dXNoLTM1ODA0MDQz/LmpwZw');"></div>
                <div class="relative z-10 text-center">
                    <div id="loadingSubmit"class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-2">Welcome to <strong class="text-blue-300">GeoSecure Login</strong></h2>
                        <p class="text-white">Struktur login menggunakan sistem geolocation</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 p-8 sm:p-12 md:p-16 flex items-center justify-center">
                <div id="loginCard" class="w-full max-w-sm">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-2">Login</h2>
                    <div id="showNotif"></div>
                    <form id="formLogin" class="space-y-6">
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Username</label>
                            <input type="text" id="username" name="username"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" autocomplete="username">
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                            <input type="password" id="password" name="password"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" autocomplete="current-password">
                        </div>

                        <button type="submit" id="loginSubmit"
                            class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors shadow-lg">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>



</html>
<script src="https://cdn.tailwindcss.com"></script>
<script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                },
            }
        }
    }

    $(function() {
        var notif        = $('#showNotif');
        var loading      = $('#loadingSubmit')
        var parent       = $('.animsition');
        var form         = $('#formLogin');
        var login_button = $('#loginSubmit');
        var loadingHTML  = $("<center>" +
                             "<img src='<?= base_url('public/images/loading.gif') ?>' alt='loading element'>" +
                             "</center>");
        let latitude;
        let longitude;
        let intervalState;
        let addressip;
        let x

        parent.animsition({
            inClass             : "fade-in",
            outClass            : "fade-out",
            inDuration          : 1500,
            outDuration         : 800,
            linkElement         : ".animsition-link",
            loading             : true,
            loadingParentElement: "body",
            loadingClass        : "animsition-loading",
            browser: [
                "animation-duration",
                "-webkit-animation-duration"
            ],
            overlay             : false,
            overlayClass        : "animsition-overlay-slide",
            overlayParentElement: "body",
        });
    })


    $(document).ready(function() {
        form.on('submit',function(e) {
            e.preventDefault();
            var user = $('#username').val();
            var pass = $('#pass').val();
            

        })
    });
</script>