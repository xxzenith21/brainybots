<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="styles/home.css" rel="stylesheet"/>
  <title>HOME</title>
  <link rel="shortcut icon" href="images/brain_icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Home Page</title>
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
            <li><a href = "home.php" class="light">HOME</a></li>
            <li><a href = "about.php">About</a></li>
            <li><a href = "tools.php">AI Tools</a></li>
            <li><a href = "blog.php">Blog</a></li>
            <li><a href = "account.php">Account</a></li>
            <li><a href = "login.php">Login</a></li>
            <li><a href = "signup.php">Sign Up</a></li>
        </ul>
    </div>
</nav>


<article id = "home">
  <header>
      <br/>
      <div class = "greet">
          <h3 style = "display: inline-block;">Brainy Bots!</h3>
          <h1>A Comprehensive Guide <br>
              to Essential AI <br>
              Technologies Used to <br>
              Empower Workflows</h1>
      </div>
  </header>
</article>


<article class = "description" id = "home">
  <div class = "description-content reveal">
    <div class="background"> 
      <p>Brainy Bots: A Comprehensive Guide to Essential AI Technologies Used to Empower Workflows is a webpage that aims to inform
      individuals and businesses about the various AI technologies that can be utilized to enhance workflows. Artificial Intelligence,
      or AI, is a technology that enables machines to perform tasks that typically require human intelligence. The applications of AI ,
      are vast ranging from healthcare to finance and education. One common application of AI is for online tools,
      which are accessible software applications that utilize AI algorithms to perform specific tasks.
      
      <br>
      <br>
      AI online tools can be utilized by students, businesses, and individuals to leverage AI technology without the need for in-house 
      development. These tools can simplify tasks, improve productivity, and enhance overall performance. The available AI online tools 
      are numerous, ranging from language translation, plagiarism checkers, financial analysis, and time management tools, among others. 
      They are designed to empower workflows by automating routine tasks, optimizing decision-making processes, and enhancing overall efficiency.
      
      
      <br>
      <br>
      It is important to keep up to date with the latest AI technologies and how they can be implemented to improve workflows due to the vast range 
      of applications for AI. Whether you're a student seeking research assistance or a business looking to automate data analysis, AI online tools 
      provide solutions that can aid in achieving goals. By utilizing AI technology, individuals and businesses can streamline their workflows, reduce 
      manual labor, and prioritize more important tasks, leading to improved performance and overall success. However, as with any new technology, there 
      are concerns regarding the use of AI online tools, particularly related to privacy and security risks. It is crucial to consider these risks and take 
      appropriate measures to protect sensitive data and prevent misuse of technology. Despite these concerns, AI online tools have the potential to transform 
      workflows and enhance efficiency in a variety of industries, making it worthwhile to explore and utilize this technology.
      </p>
  </div>
  <div class="background">
    <div class="box">
      <p>AI online tools offer valuable support to students by providing assistance in various areas such as research and writing, language learning, virtual tutoring, personalized study plans, and academic schedule management.
      </p>
    </div>
    <div class="box">
      <p>AI online tools bring significant benefits to businesses by offering customer support, automating data analysis, streamlining processes, personalizing marketing efforts, and improving supply chain management.
      </p>
    </div>
    <div class="box">
      <p>AI online tools benefit individuals by aiding in personal finance, time management, virtual assistance, language translation, creativity, content recommendations, and wellness through fitness and nutrition planning.
        </p>
    </div>
  </div>
  </div>

  <div class="video-container">
    <h2>"10 USEFUL AI TOOLS YOU'LL ACTUALLY WANT TO USE"</h2><br>
    <video controls muted>
      <source src="images/aitools.mp4" type="video/mp4">
    </video>
  </div>
</article>


<div class="share-content">
<div class="share-title">
  <p> Like what you see? Help us by sharing the website!</p>
</div>


  <a href="https://www.facebook.com/sharer/sharer.php?u=brainybots.com&quote=This+website+has+all+the+AI+Tools+I+need!"> 
    <img class="share-icon" src="images/fb.png" alt="fb logo">
  </a>

  <a href="https://twitter.com/intent/tweet?text=This+website+has+all+the+AI+Tools+I+need!+%E2%86%92+brainybots.com">
    <img class="share-icon" src="images/twt.png" alt="twitter logo">
  </a>

  <a href="https://www.instagram.com/?caption=This+website+has+all+the+AI+Tools+I+need!+%E2%86%92+brainybots.com">
    <img class="share-icon" src="images/ig.png" alt="ig logo">
  </a>

</div>


      
      

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

<script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script>
            $(window).scroll(function(){
                if($(window).scrollTop ( ) ) {
                    $("nav").addClass("black");
                }else{
                    $("nav").removeClass("black")
                }
            });
        </script>

</body>
</html>

