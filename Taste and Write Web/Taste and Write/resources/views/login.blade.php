<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/phone.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tablet.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}" />
  </head>
  <body>
    <section class="login-section">
      <div class="login-container">
        <h2>Login</h2>
        <form id="login-form" class="login-form">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required />

          <button type="submit" class="login-btn">Log In</button>
        </form>
        <p>Don't have an account? <a href="/register">Sign up</a></p>
      </div>
    </section>

    <script>
      // Fungsi untuk menangani login
      const loginForm = document.getElementById('login-form');

      loginForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Ambil data pengguna dari LocalStorage
        let users = JSON.parse(localStorage.getItem('users')) || [];

        // Cari user yang cocok dengan email dan password
        const user = users.find(user => user.username === username && user.password === password);


        if (user) {
          // Simpan status login (misalnya sebagai tanda bahwa user sedang login)
          localStorage.setItem('isLoggedIn', 'true');
          localStorage.setItem('loggedInUser', JSON.stringify(user));

          // Redirect ke halaman utama (home)
          alert("Login successful!");
          window.location.href = "/index";  // Ganti ini dengan halaman utama
        } else {
          alert("Invalid username or password!");
        }
      });
    </script>
  </body>
</html>
