<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/ABSEN KARYAWAN.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/stylelogin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login</title>
</head>

<body>
    @if (Session::has('delete'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.error("{{ Session::get('delete') }}");
        </script>
    @endif
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="/PostLogin" method="post" role="form">
                @csrf
                <img src="{{ asset('/assets/img/i.png') }}" alt="main_logo">
                <h1>Login</h1>
                <span>Use your username password</span>
                <input type="username" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button class="btn mt-3">Login</button>
                <a href="/" class="hidden" id="login">Back</a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">

                <div class="toggle-panel toggle-right">
                    <h1>Hello, User!</h1>
                    <p>Login with your personal details to use all of site features</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/plugins/script.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
