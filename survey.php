<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="styles/survey.css" rel="stylesheet"/>
  <link rel="shortcut icon" href="images/brain_icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>USER SURVEY</title>

  <script>
    window.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector("form");
        form.addEventListener("submit", function() {
            alert("Your Response has been submitted. Thank you for taking the time to complete this survey. Your feedback is valuable to us and will help us improve the Brainy Bots website.");
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
            <li><a href = "home.php">BACK TO HOME</a></li>
           
        </ul>
    </div>
</nav>

<article>
  <div class="survey-content">
    <h1>User Survey</h1><br>
    <h2>We would appreciate your feedback on the Brainy Bots website. Please take a few minutes to complete this survey.</h2><br>

      <form action="#" method="post">
        
        <p>1. How did you hear about the Brainy Bots website?</p>
        <input type="checkbox" id="social-media" name="hear-about[]" value="Social media">
        <label for="social-media">Social media</label><br>
        <input type="checkbox" id="search-engine" name="hear-about[]" value="Search engine">
        <label for="search-engine">Search engine</label><br>
        <input type="checkbox" id="referral" name="hear-about[]" value="Referral from a friend or colleague">
        <label for="referral">Referral from a friend or colleague</label><br>
        <input type="checkbox" id="other" name="hear-about[]" value="Other">
        <label for="other">Other (please specify)</label>
        <input type="text" id="other-text" name="hear-about-other"><br>
    
        <p>2. What was your reason for visiting the Brainy Bots website?</p>
        <input type="checkbox" id="learn-more" name="visit-reason" value="To learn more about AI technologies">
        <label for="learn-more">To learn more about AI technologies</label><br>
        <input type="checkbox" id="access-resources" name="visit-reason" value="To access educational resources on AI">
        <label for="access-resources">To access educational resources on AI</label><br>
        <input type="checkbox" id="real-world" name="visit-reason" value="To get insights into real-world use cases of AI">
        <label for="real-world">To get insights into real-world use cases of AI</label><br>
        <input type="checkbox" id="connect-users" name="visit-reason" value="To connect with other users and exchange ideas">
        <label for="connect-users">To connect with other users and exchange ideas</label><br>
        <input type="checkbox" id="other" name="visit-reason" value="Other">
        <label for="other">Other (please specify)</label>
        <input type="text" id="other-text" name="visit-reason-other"><br>

        <p>3. On a scale of 1-5, how satisfied were you with your experience on the Brainy Bots website?</p>
        <input type="radio" name="experience" value="1">1 (not satisfied at all)<br>
        <input type="radio" name="experience" value="2">2<br>
        <input type="radio" name="experience" value="3">3<br>
        <input type="radio" name="experience" value="4">4<br>
        <input type="radio" name="experience" value="5">5 (very satisfied)<br>

        <p>4. How would you rate the quality of information provided on the Brainy Bots website?</p>
        <input type="radio" name="quality" value="excellent">Excellent<br>
        <input type="radio" name="quality" value="good">Good<br>
        <input type="radio" name="quality" value="fair">Fair<br>
        <input type="radio" name="quality" value="poor">Poor<br>
        <input type="radio" name="quality" value="very poor">Very poor<br>

        <p>5. How would you rate the visual design of the Brainy Bots website?</p>
        <input type="radio" name="design" value="excellent">Excellent<br>
        <input type="radio" name="design" value="good">Good<br>
        <input type="radio" name="design" value="fair">Fair<br>
        <input type="radio" name="design" value="poor">Poor<br>
        <input type="radio" name="design" value="very poor">Very poor<br>

        <p>6. How likely are you to recommend the Brainy Bots website to a friend or colleague?</p>
        <input type="radio" name="recommend" value="very likely">Very likely<br>
        <input type="radio" name="recommend" value="somewhat likely">Somewhat likely<br>
        <input type="radio" name="recommend" value="neutral">Neutral<br>
        <input type="radio" name="recommend" value="somewhat unlikely">Somewhat unlikely<br>
        <input type="radio" name="recommend" value="very unlikely">Very unlikely<br>

        <p>7. Did you find what you were looking for on the Brainy Bots website?</p>
        <input type="radio" name="found" value="everything">Yes, I found everything I was looking for<br>
        <input type="radio" name="found" value="some">I found some of what I was looking for<br>
        <input type="radio" name="found" value="not found">No, I did not find what I was looking for<br>

        <p>8. Did the Brainy Bots website help you better understand AI technologies and their potential benefits?</p>
        <input type="radio" name="understand" value="very helpful">Yes, it was very helpful<br>
        <input type="radio" name="understand" value="somewhat helpful">It was somewhat helpful<br>
        <input type="radio" name="understand" value="not helpful">No, it did not help me understand AI technologies and their potential benefits<br>

        <p>9. Which of the following best describes your occupation?</p>
        <input type="radio" name="occupation" value="business">Business owner/manager<br>
        <input type="radio" name="occupation" value="IT">IT professional/developer<br>
        <input type="radio" name="occupation" value="student">Student/researcher<br>
        <input type="radio" name="occupation" value="public">General public<br>
        <input type="radio" name="occupation" value="other">Other (please specify):
        <input type="text" name="occupation-other"><br>

      <br>
      <label class="fb-label" for="message">Feedback:   </label>
      <textarea id="message" name="message"></textarea>
      <br>
      <input class="submit-button" type="submit" size="20" maxlength="100" value="Submit">
    </form>
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