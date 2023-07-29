<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="UTF-8">
</style>
  <link href="styles/blog.css" rel="stylesheet"/>
  <title>BLOG</title>
  <link rel="shortcut icon" href="images/brain_icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <li><a href="home.php">HOME</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="tools.php">AI Tools</a></li>
        <li><a href="blog.php" class="light">Blog</a></li>
        <li><a href="account.php">Account</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <main>

    <div class="search-box">
      <input type="text" id="search-input" placeholder="Search...">
      <button onclick="search()">Search</button>
    </div>
  
    <script>
      function search() {
        var query = document.getElementById("search-input").value;
        var content = document.getElementsByClassName("content-box")[0];
        var regex = new RegExp(query, "gi");
        var highlightedContent = content.innerHTML.replace(/<span class="highlighted">(.*?)<\/span>/gi, '$1'); // Remove existing highlights
        highlightedContent = highlightedContent.replace(regex, '<span class="highlighted">$&</span>'); // Apply new highlights
        content.innerHTML = highlightedContent;
    
        var firstHighlightedElement = document.querySelector(".highlighted");
        if (firstHighlightedElement) {
          var yOffset = -50; // Adjust the offset to control the scroll position
          var y = firstHighlightedElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
          window.scrollTo({ top: y, behavior: 'smooth' });
        }
      }
    </script>
    
    
<style>
  .highlighted {
    background-color: yellow;
    font-weight: bold;
  }
</style>

    
    <div class="content-box">
    <section>
      <ul>
        <li><a1 href="#">Amazon to focus on using AI to speed up delivery services</a1></li>
      </ul>
      <div class="image-container">
        <figure>
          <img src="images/amzn.jpg" alt="amzn-logo">
        </figure>
            </div>
      <p>Amazon has said that it will be focusing on using artificial intelligence (AI) to speed up delivery services, aiming to minimize the distance between its products and customers, the media reported on Monday.
        The Vice President of Customer Fulfillment and Global Operations Services for North America and Europe at Amazon, Stefano Perego, shed light on the remarkable ways in which the company harnesses the power of AI to revolutionize its logistics operations, highlighting transportation as one area, specifically in mapping and route planning, taking into account variables like the weather, reports CNBC.
        Another area he highlighted is when customers search for products on Amazon to help them find the right goods.
        "I think one area that we consider key in order to lower cost to serve is on inventory placement," Perego was quoted as saying.
        "So now, I'm pretty sure you're familiar with the vast selection we offer to our customers. Imagine how complex is the problem of deciding where to place that unit of inventory. And to place it in a way that we reduce distance to fulfill to customers, and we increase speed of delivery," he added.
        Moreover, the report said that the tech giant has been focusing on a "regionalization" effort to ship products to customers from warehouses near them rather than from elsewhere in the country.

        <br>
        <br>

        However, doing so necessitates the use of technology capable of analyzing data and patterns in order to forecast which products will be
        in demand and where.This is where artificial intelligence comes in. If a product is closer to customers, Amazon will be able to provide same-day or next-day delivery, similar to what its Prime subscription service provides.
        Amazon also employs robotics in its fulfillment centers to assist with repetitive tasks like lifting heavy packages. According to the company, robotics handles 75% of Amazon customer orders, the report said.
        Meanwhile, Amazon has launched a new immersive shopping experience called "Amazon Anywhere," which will allow users to buy physical products in games and apps.
        The service introduces Amazon's online marketplace into the world of video games and mobile apps, starting with Niantic's new real-world augmented reality game Peridot.
        
        <br>
        <br>
      <p>Source: <a href="https://www.thestatesman.com/business/amazon-to-focus-on-using-ai-to-speed-up-delivery-services-1503181740.html">https://www.thestatesman.com/business/amazon-to-focus-on-using-ai-to-speed-up-delivery-services-1503181740.html</a></p>
      </p><br><br>
      <section> 
        <ul>
        <li><a1 href="#">impactsAI</a1></li>
        </ul>
        <div class="image-container">
        <figure>
          <img src="images/artin.jpg" alt="ai logo">
        </figure>
      </div>
      <p>
                <h2> Current understandings about the impact of AI on work</h2><br><br>
                While much of the public and policy debate about AI and work has tended to oscillate 
                between fears of the 'end of work' and reassurances that little will change in terms 
                of overall employment, evidence suggests that neither of these extremes is likely. However, 
                there is consensus that AI will have a disruptive effect on work, with some jobs being lost, 
                others being created, and others changing.
        <br>
        <br>
                Over the last five years, there have been many projections of the numbers of jobs likely to be 
                lost, gained, or changed by AI technologies, with varying outcomes and using various timescales 
                for analysis.
        <br>
        <br>
                Most recently, a consensus has begun to emerge from such studies that 10-30% of jobs in the UK 
                are highly automatable. Many new jobs will also be created. However, there remain large uncertainties 
                about the likely new technologies and their precise relationship to tasks. Consequently, it is difficult 
                to make predictions about which jobs will see a fall in demand and the scale of new job creation.<br><br>
        <br>
        <br>
                <h2>  The impact of AI on work: implications for individuals, communities, and societies</h2><br><br>
                Advances in AI technologies are contributing to new products and services across industries - from robotic 
                surgery to debt collection - and offer many potential benefits for economies, societies, and individuals.
                Advances in AI technologies are contributing to new products and services across industries - from robotic 
                surgery to debt collection - and offer many potential benefits for economies, societies, and individuals.
                With this potential, come questions about the impact of AI technologies on work and working life, and renewed 
                public and policy debates about automation and the future of work.
                Building on the insights from the Royal Society's Machine Learning study, a new evidence synthesis by the Royal 
                Society and the British Academy draws on research across disciplines to consider how AI might affect work. It 
                brings together key insights from current research and policy debates - from economists, historians, sociologists, 
                data scientists, law and management specialists, and others - about the impact of AI on work, with the aim of 
                helping policymakers to prepare for these.<br><br>
        <br>
        <br>
                <h2> Implications for individuals, communities, and societies</h2><br><br>
                Despite this uncertainty, evidence from previous waves of technological change - including the Industrial Revolution 
                and the advent of computing - can provide evidence and insights to inform policy debates today.
                Studies of the history of technological change demonstrate that, in the longer term, technologies contribute to increases 
                in population-level productivity, employment, and economic wealth. However, such studies also show that these population-level 
                benefits take time to emerge, and there can be periods in the interim where parts of the population experience significant disbenefits. 
                In the context of the British Industrial Revolution, for example, studies show that wages stagnated for a period despite output per 
                worker increasing. In the same period, technological changes enabled or interacted with large population movements from land to cities, 
                ways of working at home and in factories changed, and there were changes to the distribution of income and wealth across demographics.
                Evidence from historical and contemporary studies indicates that technology-enabled changes to work tend to affect lower-paid and 
                lower-qualified workers more than others. For example, in recent years, technology has contributed to a form of job polarisation that has
                 favoured higher-educated workers, while reducing the number of middle-income jobs, and increasing competition for non-routine manual labour.
                This type of evidence suggests there are likely to be significant transitional effects as AI technologies begin to play a bigger role in the 
                workplace, which cause disruption for some people or places. One of the greatest challenges raised by AI is therefore a potential widening of inequality.<br><br>
  <br>
  <br>
                <h2> The role of technology in changing patterns of work and employment</h2><br><br>
                The extent to which technological advances are overall a substitute for human workers depends on a balance of forces. Productivity growth, the number 
                of jobs created as a result of growing demand, movement of workers to different roles, and emergence of new jobs linked to the new technological landscape 
                all influence the overall economic impact of automation by AI technologies. Concentration of market power can also play a role in shaping labour's income share, 
                competition, and productivity.
                So, while technology is often the catalyst for revisiting concerns about automation and work, and may play a leading role in framing public and policy debates, 
                it is not a unique or overwhelming force. Non-technological factors - including political, economic, and cultural elements - will contribute to shaping the impact 
                of AI on work and working life.<br><br>
  <br>
  <br>
                <h2> Policy responses and 'no regrets' steps</h2><br><br>
                In the face of significant uncertainties about the future of work, what role can policymakers play in contributing to the careful stewardship of AI technologies?
                At workshops held by the Royal Society and British Academy, participants offered various suggestions for policy responses to explore, focused around:
                <p><br><br>
                •	Ensuring that the workers of the future are equipped with the education and skills they will need to be 'digital citizens' (for example, through teaching key concepts 
                in AI at primary school-level, as recommended in the Society's Machine Learning report);
                <p>
                •	Addressing concerns over the changing nature of working life, for example with respect to income security and the gig economy, and in tackling potential biases from 
                algorithmic systems at work;
                <p>
                •	Meeting the likely demand for re-training for displaced workers through new approaches to training and development; and
                •	Introducing measures to share the benefits of AI across communities, including by supporting local economic growth.
                </p>
                While it is not yet clear how potential changes to the world of work might look, active consideration is needed now about how society can ensure that the increased use 
                of AI is not accompanied by increased inequality. At this stage, it will be important to take 'no regrets' steps, which allow policy responses to adapt as new implications 
                emerge, and which offer benefits in a range of future scenarios. One example of such a measure would be in building a skills-base that is prepared to make use of new AI technologies.
                Through the varying estimates of jobs lost or created, tasks automated, or productivity increases, there remains a clear message: AI technologies will have a significant impact 
                on work, and their effects will be felt across the economy. Who benefits from AI-enabled changes to the world of work will be influenced by the policies, structures, and institutions 
                in place. Understanding who will be most affected, how the benefits are likely to be distributed, and where the opportunities for growth lie will be key to designing the most effective. <br><br>
                interventions to ensure that the benefits of this technology are broadly shared.
  
        <br>
        <br>
        <p>Source: <a href="https://royalsociety.org/blog/2018/09/the-impact-of-ai-on-work/">https://royalsociety.org/blog/2018/09/the-impact-of-ai-on-work/</a></p>
        </p>
      </div>
      
      <!-- Add this section inside each blog post -->
<div class="comment-section">
  <h3>Comments</h3>
  <div id="comments">
    <!-- Display comments here using JavaScript -->
  </div>
  <form id="comment-form">
    <input type="text" id="comment-name" placeholder="Name">
    <textarea id="comment-content" placeholder="Your comment"></textarea>
    <button type="button" onclick="submitComment()">Submit</button>
  </form>
</div>

<script>
  function submitComment() {
    var name = document.getElementById("comment-name").value;
    var content = document.getElementById("comment-content").value;

    if (!name || !content) {
      alert("Please fill in both Name and Comment fields.");
      return;
    }

    var commentSection = document.getElementById("comments");
    var commentDiv = document.createElement("div");
    commentDiv.classList.add("comment");
    commentDiv.innerHTML = '<strong>' + name + ':</strong> ' + content;

    var deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.classList.add("delete-button");
    deleteButton.onclick = function () {
      commentSection.removeChild(commentDiv);
    };

    commentDiv.appendChild(deleteButton);
    commentSection.appendChild(commentDiv);

    document.getElementById("comment-name").value = "";
    document.getElementById("comment-content").value = "";
  }
</script>

<style>
  .comment {
    margin-bottom: 10px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
  }
</style>
<div class="read-more-container">
    <section class="read-more">
      <h2>Read More</h2>
      <ul>
        <li><a href="https://builtin.com/artificial-intelligence/ai-tools">AI Tools - BuiltIn</a></li>
        <li><a href="https://www.techradar.com/best/best-ai-tools">Best AI Tools - TechRadar</a></li>
        <li><a href="https://zapier.com/blog/best-ai-productivity-tools/">Best AI Productivity Tools - Zapier</a></li>
      </ul>
    </section>
  </div>
    </main>
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
  </body>
  </html>    