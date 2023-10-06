<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemas | Login</title>

    <link rel="stylesheet" href="/asset-login/login.css">

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.0/dist/js/uikit-icons.min.js"></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    <div class="container d-flex align-items-center" style="height: 100vh">
        <div class="row w-100">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <form action="" class="form_main">
                    <p class="heading">Login</p>

                    <div class="inputContainer">
                        <input type="email" class="inputField" id="username" placeholder="Email">
                    </div>

                    <div class="inputContainer">
                        <input type="password" class="inputField" id="password" placeholder="Password">
                    </div>


                    <button id="button">Submit</button>
                    <a class="forgotLink" href="{{ route('register') }}">Belum punya akun? Register!</a>
                </form>

            </div>
            <div class="col-lg-6 col-image">
                <img class="w-100 img-register" src="/login-avatar.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>
