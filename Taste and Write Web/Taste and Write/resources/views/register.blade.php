<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tablet.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}" />
  </head>

  <body>
    <section class="register-section">
      <div class="register-container">
        <h2>Create an Account</h2>
        <form id="register-form" class="register-form">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required />
                   
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required />
          
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required />
          
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required />
          
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required />
          
          <button type="submit" class="register-btn">Sign Up</button>
        </form>
        <p>Already have an account? <a href="/login">Log in</a></p>
      </div>
    </section>
  </body>
</html>
