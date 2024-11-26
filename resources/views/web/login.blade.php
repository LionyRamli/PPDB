<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | SMK CINTA KASIH TZU CHI</title>
    <link rel="icon" href="{{ asset('img/noimg.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/app1.css') }}" />

</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="" onsubmit="return validateLogin()">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="nama_admin" id="nama_admin">
                        <label for="nama_admin">Nama Admin</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                    </div>
                    <button type="submit">Log in</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        function validateLogin() {
            // Ambil nilai input username dan password
            var username = document.getElementById('nama_admin').value;
            var password = document.getElementById('password').value;

            // Periksa apakah username dan password sesuai dengan yang diharapkan
            if (username === 'liony' && password === '2007') {
                // Jika sesuai, alihkan ke halaman dashboard (gantilah 'dashboard.blade.php' dengan URL yang sesuai)
                window.location.href = "{{route('web.admin')}}";
                return false; // Agar form tidak benar-benar di-submit
            } else {
                // Jika tidak sesuai, tampilkan pesan kesalahan atau lakukan tindakan lain sesuai kebutuhan
                alert('Username or password is incorrect');
                return false; // Agar form tidak benar-benar di-submit
            }
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
