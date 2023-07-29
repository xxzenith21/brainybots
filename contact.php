<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="styles/contact.css" rel="stylesheet"/>
  <title>CONTACT US</title>
  <link rel="shortcut icon" href="images/brain_icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Home Page</title>

  <script>
    window.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector("form");
        form.addEventListener("submit", function() {
            alert("Your Message has been submitted.");
        });
    });
</script>
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
            <li><a class="home-link" href = "home.php">BACK TO HOME</a></li>
           
        </ul>
    </div>
</nav>

<!-- pinalitan ko class name  -->
<article>
<div class="contact-content">
  <h1>Contact Us</h1><br>
  <h2>We would love to hear from you!</h2><br><br>
  <p>Thank you for visiting our website and for your interest in contacting us. 
    We appreciate your feedback, suggestions, and inquiries and are always looking for ways to improve our website to better meet your needs..</p> <br>
  <p>
    If you have a question about our content, a technical issue with the website, or a business proposal, we are here to assist you. 
    Please take a moment to fill out our contact form, which you can find below, and we will respond to your message as soon as possible.</p><br>
  <p>

    Our contact form is quick and easy to use. Simply provide your full name, contact information, email address, subject, and message, and click submit. 
    We will receive your message and do our best to respond within 24-48 hours. You can also use this form to share your thoughts on our website or to report any issues you have encountered while browsing.</p><br>
  <p>
    In addition to our contact form, you can also reach us by email at @brainybots@gmail.com, or via telephone number 733-3352. Stay up-to-date with the latest news and information and send us direct messages.</p><br>
  <p>We look forward to hearing from you and thank you for choosing our website as a valuable source of information. Your feedback helps us improve and deliver the best possible experience for our visitors.</p><br><br>
    <form action="#" method="post">
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

    <label for="contactNumber">Contact Number (format: 09XX-XXX-XXXX):</label>
    <input type="tel" id="contactnumber" name="contactnumber" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <input type="submit" value="Submit">
  </form>
  <p id="submittedMessage">Your message has been submitted. Thank you for contacting us!</p>
  <div class="contact">
    <h3>Contact Information</h3>
    <p>Email: <a href="mailto:brainybots@gmail.com">brainybots@gmail.com</a></p>
    <p>Phone: 733-3352</p>
  </div>
</div>
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
    </div>
</footer>

</body>
</html>