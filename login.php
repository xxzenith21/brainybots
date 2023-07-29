<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="shortcut icon" href="images/brain_icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>


  <body>
    <nav>
      <div class = "logo">
          <p style="margin-right: 5px;">
              <img src="images/brain_icon.png" alt="image" style="float:left; padding-right:15px; width: 50px;">
              Brainy
          </p>

          <p style = "color: white;">Bots!</p>
      </div>
      
      <div class = "container">
          <ul>
              <li><a href = "home.php">BACK TO HOME</a></li>
          </ul>
      </div>
    </nav>    

    <article>
    <header>
      <br/>
      <div class="login-box">
        <div class="login-title">
          <h2>Login</h2>
        </div>
        <div class="login-form">
          <!-- Add "id" attribute to the login form -->
          <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <center>
              <input type="submit" value="Login">
            </center>
          </form>
        </div>
        <div class="login-link">
          Don't have an account? <a href="signup.php">Sign up</a>
        </div>
      </div>
    </header>
  </article>
  
  <!-- Include your JavaScript code for AJAX handling -->
  <script src="components/enter.js"></script>
</body>
</html>