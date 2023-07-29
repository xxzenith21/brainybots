<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SIGN UP PAGE</title>
    <link rel="stylesheet" type="text/css" href="styles/signup.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="shortcut icon" href="images/brain_icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="components/validation.js"> </script>
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
    <article id = "start">
      <header>
            <div class="signup-box">
              <div class="signup-title">
                <h2>Sign Up</h2>
              </div>
              <div class="signup-form">
                <form id="signupForm" onsubmit="submitForm(event)">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" required>

                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" required>

                  <label for="confirm-password">Confirm Password</label>
                  <input type="password" id="confirm" name="confirm" required>
                    <center>
                      <input type="submit" value="Sign Up">
                    </center>
                </form>
              </div>
              <div class="signup-link">
                Already have an account? <a href="login.php">Log in</a>
              </div>
            </div>
      </header>
      </article>
  </body>
</html>