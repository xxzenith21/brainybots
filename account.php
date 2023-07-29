<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "brainybots");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

function updateUserDetails($conn, $username, $name, $email, $gender) {
    $sql = "UPDATE accounts SET name = '$name', email = '$email', gender = '$gender' WHERE username = '$username'";
    return $conn->query($sql);
}

$username = "";
$name = "";

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    $sql = "SELECT username, name FROM accounts WHERE id = $userId";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $name = $row['name'];
    } else {

    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["gender"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    if (updateUserDetails($connection, $username, $name, $email, $gender)) {

        $response = array(
            "username" => $username,
            "name" => $name,
            "email" => $email,
            "gender" => $gender
        );
        echo json_encode($response);
        exit();
    } else {

        $response = array(
            "error" => "Error updating user details."
        );
        echo json_encode($response);
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="styles/account.css" rel="stylesheet"/>
  <title> USER ACCOUNT</title>
  <link rel="shortcut icon" href="images/brain_icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="components/account.js"></script>
</head>

<body>
  <nav>
    <div class="logo">
      <p style="margin-right: 5px;">
        <img src="images/brain_icon.png" alt="image" style="float:left; padding-right:15px; width: 50px;">
        Brainy
      </p>
      <p style="color: white;">Bots!</p>
    </div>
    
    <div class="container">
      <ul>
        <li><a href="home.php">BACK TO HOME</a></li>
      </ul>
    </div>
  </nav>    



  <article id="start">
    <header style="margin-bottom: 10%">
      <div class="account-box">
        <div class="account-title">
          <h2>User Information</h2>
        </div>
<div class="user">
  <img id="profile-image" src="images/default.jpg">
  <input type="file" id="profile-picture-input" accept="image/*" style="display: none;">
  <button onclick="openFilePicker()">Upload Profile Picture</button>
</div>

<script>
  function openFilePicker() {
    document.getElementById("profile-picture-input").click();
  }

  document.getElementById("profile-picture-input").addEventListener("change", function () {
    const fileInput = this;
    if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        document.getElementById("profile-image").setAttribute("src", e.target.result);
      };

      reader.readAsDataURL(fileInput.files[0]);
    }
  });
</script>

        <br><br>
        <br><br>

          <div class="account-form">
          <form id="accDetails" method="post">
            <label for="name">Name</label>
            <input type="text" class="input" id="accName" name="name" value="<?php echo $name ?>" required>
                                              
            <label for="username">Username</label>
            <input type="text" class="input" id="accUser" value="<?php echo $username ?>" disabled>
                                              
            <label for="gender">Gender</label>
            <select name="gender" id="accGender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
                                                              
            <label for="email">Email</label>
            <input type="text" class="input" id="accEmail" name="email" value="">
           
            <center>
              <input type="submit" value="Update" id="updateBtn">
            </center>
          </form>
        </div>
      </div>
    </header>
  </article>
  
  <footer>
    <div class="footer-columns">
      <div class="footer-column">
        <div class="foot-1">
          <ul>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="survey.php">User Survey</a></li>
            <li><a href="guide.php">User Guide</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-column">
        <div class="foot-2">
          <ul>
            <li><a href="faq.php">FAQs</a></li>
            <li><a href="socials.php">Socials</a></li>
            <li><a href="team.php">About the team</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.getElementById("accDetails").addEventListener("submit", function(event) {
        event.preventDefault();
        
        document.getElementById("updateBtn").disabled = true;

        const formData = new FormData(event.target);
      
        fetch("account.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Update the user information on the page
            document.getElementById("accUser").value = data.username;
            document.getElementById("accGender").value = data.gender;
            document.getElementById("accEmail").value = data.email;
            alert("User details updated successfully!");

            // Enable the "Update" button after successful update
            document.getElementById("updateBtn").disabled = false;
        })
        .catch(error => {
            alert("Error updating user details. Please try again.");

            // Enable the "Update" button after an error occurs
            document.getElementById("updateBtn").disabled = false;
        });
    });
  </script>

</body>
</html>
