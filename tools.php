<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>BRAINY BOTS!!</title>
        <link rel="shortcut icon" href="images/brain_icon.png">
        <link href="styles/tools.css" rel="stylesheet"/>
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        </style>
    </head>
    <body>
        <nav class="first-nav">
            <div class = "logo">
                <p style="margin-right: 5px;">
                    <img src="images/brain_icon.png" alt="image" style="float:left; padding-right:15px; width: 50px;">
                    Brainy
                    
                </p>
                <p style = "color: white;">Bots!</p> 
        </div>
                
                
                
            <div class = "container">
                
                <ul>
                    <li>  
                    <div class="search-box">
      <input type="text" id="search-input" placeholder="Search...">
      <button onclick="search()">Search</button>
    </div>

                    </li>
                    <li><a href = "home.php">HOME</a></li>
                    <li><a href = "about.php">About</a></li>
                    <li><a href = "tools.php" class="light">AI Tools</a></li>
                    <li><a href = "blog.php">Blog</a></li>
                    <li><a href = "account.php">Account</a></li>
                    <li><a href = "login.php">Login</a></li>
                    <li><a href = "signup.php">Sign Up</a></li>
                    
                    
                </ul>
                        
            </div>
        </nav>
        
        <script>
  function search() {
    var query = document.getElementById("search-input").value;
    var content = document.getElementsByClassName("content-box")[0];
    var regex = new RegExp(query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'), "gi");
    var highlightedContent = content.innerHTML.replace(/<span class="highlighted">(.*?)<\/span>/gi, '$1'); // Remove existing highlights
    
    var walker = document.createTreeWalker(content, NodeFilter.SHOW_TEXT, null, false);
    var node;
     
    while ((node = walker.nextNode())) {
      var parent = node.parentNode;
      var text = node.textContent;
      var replacedText = text.replace(regex, '<span class="highlighted">$&</span>');
      
      if (replacedText !== text) {
        var wrapper = document.createElement('span');
        wrapper.innerHTML = replacedText;
        parent.replaceChild(wrapper, node);
      }
    }

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
        
        <nav class="second-nav">
            <div class = "container">
                <ul>
                    <li><a href = "#start" class = "active">START</a></li>
                    <li><a href = "#chatgpt">ChatGPT</a></li>
                    <li><a href = "#grammarly">Grammarly</a></li>
                    <li><a href = "#quillbot">Quillbot</a></li>
                    <li><a href = "#designs">Designs.ai</a></li>
                    <li><a href = "#uizard">Uizard</a></li>
                    <li><a href = "#wolfram">WolframAlpha</a></li>
                    <li><a href = "#perplexity">Perplexity</a></li>
                    <li><a href = "#nightcafe">Nightcafe</a></li>
                    <li><a href = "#jasper">Jasper.AI</a></li>
                    <li><a href = "#tome">Tome.app</a></li>
                </ul>
            </div>
        </nav>
        
        <article id = "start">
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

            <div class="content-box">
        <article class = "chatgpt" id = "chatgpt">
            <div class = "chatgpt-content reveal">
                <h3><a href="https://chat.openai.com/chat" style="color: rgb(255, 255, 255);">CHATGPT</a></h3>
                <img src="https://assets.hongkiat.com/uploads/what-is-chatgpt/ChatGPT.jpg" alt="ChatGPT online platform that provides a conversational interface " title="chatgpt.jpg">
                <p><a href="https://assets.hongkiat.com/uploads/what-is-chatgpt/ChatGPT.jpg">https://assets.hongkiat.com/uploads/what-is-chatgpt/ChatGPT.jpg</a></p>
                    <h2>WHAT IS CHATGPT?</h2>
            <p>
                    ChatGPT stands for "Chat Generative Pre-trained Transformer".<br><br>
                    ChatGPT has rapidly emerged as one of the most significant technological launches since the original Apple iPhone in 2007. The chatbot is now the fastest-growing 
                    consumer app in history, attracting 100 million users in just two months. However, it is also an ever-evolving AI shapeshifter, which can be confusing and overwhelming.<br><br>
                
                    ChatGPT is an AI chatbot built on a family of large language models (LLMs) called GPT-3, with OpenAI now announcing the availability of the next-gen GPT-4 models. 
                    These models can understand and generate human-like responses to text prompts as they've been trained on vast amounts of data.<br><br>
                
                    For instance, ChatGPT's most original GPT-3.5 model was trained on 570GB of text data from the internet, such as books, articles, websites, and social media, allowing it to create responses that appear like "a friendly and intelligent robot."<br><br>
                
                    ChatGPT is an AI-powered natural language processing tool that enables users to have human-like conversations with the chatbot, which can assist them in tasks like composing emails, essays, and code.<br><br>
                
                    This capability to generate human-like and frequently accurate responses to an extensive range of questions is the reason ChatGPT is the fastest-growing app of all time, attracting 100 million users in 
                    only two months. Its capacity to produce essays, articles, and poetry has only contributed to its appeal (and sparked controversy in education).<br><br><br>
            </p>
                    <h2>WHO CREATED CHATGPT?</h2>
                    <img src="images/openai.webp" alt="OpenAI"><br><br>
            <p>
                    The creators of ChatGPT are OpenAI, an artificial intelligence research laboratory that consists of OpenAI Inc, a non-profit, and Open AI Limited Partnership (OpenAI LP), a for-profit subsidiary. OpenAI 
                    originally created GPT in 2018, which was the first version of what would eventually become ChatGPT. 
                <br>
                <br>
                    In the following years, GPT-2 and GPT-3 were released, with ChatGPT being launched in 2022. In addition to ChatGPT, OpenAI is also known for creating other AI models like DALL-E and DALL-E 2. 
                <br>
                <br>    
                    The main goal of OpenAI is to develop "friendly AI" that benefits humanity. Notable founders of OpenAI include Elon Musk, Peter Thiel, Sam Altman, Reid Hoffman, Jessica Livingston, and Ilya Sutskever..
                <br>
                <br>
                <br>
            </p>
                    <h2>HOW DOES CHATGPT WORK?</h2>
            <p>    
                    In essence, ChatGPT works by utilizing natural language processing (NLP) technology that enables it to understand and respond to human language. It leverages OpenAI's large language models (LLMs), which 
                    include the latest GPT-3 and GPT-4 models, to analyze text prompts or questions entered by users. These models have been trained on a vast amount of text data from the internet, which enables ChatGPT to 
                    generate a response that is meant to be human-like and relevant to the input. 
                <br>
                <br>
                    ChatGPT's primary objective is to predict the next word in a sentence based on its training data. The chatbot accomplishes this by passing user input through its AI model, which generates a response based 
                    on the information provided and how it fits into its training data. The process involves a combination of deep learning algorithms, natural language processing, and generative pre-training, resulting in 
                    ChatGPT's ability to produce remarkably human-like responses to text questions. Stephen Wolfram's blog post provides a more in-depth look into how large language   
                <br>
                <br>
                <br>
            </p>
                    <h2>HOW TO USE CHATGPT?</h2>
                
            <p>    In order to use ChatGPT, you must first access the chatbot through one of the platforms it is available on, which includes its official website, social media platforms like Twitter and Discord, and third-party 
                    apps and websites. There is currently no official ChatGPT app, so you will need to access it through a web browser on your computer, tablet, or smartphone. Once you access the website, you will need to create 
                    an account, after which you can use ChatGPT for free.
                <br>
                <br>
                    To use ChatGPT, simply type a prompt or question in the text box at the bottom of the screen and hit the paper airplane icon to submit it. You can ask ChatGPT to write a story or answer a question, for example.
                     ChatGPT's response will appear in real time as if it is being typed by a human. Once it has finished, you can provide feedback on the response using the thumbs up and down buttons.
            </p>
                <br>
                <br>
                <br>
                    <h2>WHAT CAN YOU USE CHATGPT FOR?</h2>
            <p>    
                    In order to use ChatGPT, you must first access the chatbot through one of the platforms it is available on, which includes its official website, social media platforms like Twitter and Discord, and third-party 
                    apps and websites. There is currently no official ChatGPT app, so you will need to access it through a web browser on your computer, tablet, or smartphone. Once you access the website, you will need to create 
                    an account, after which you can use ChatGPT for free.
                <br>
                <br>
                    To use ChatGPT, simply type a prompt or question in the text box at the bottom of the screen and hit the paper airplane icon to submit it. You can ask ChatGPT to write a story or answer a question, for example.
                    ChatGPT's response will appear in real time as if it is being typed by a human. Once it has finished, you can provide feedback on the response using the thumbs up and down buttons.
                </p>
                <br>
            <p>
                <h2>WHY IS CHATGPT IMPORTANT?</h2>
            <p> ChatGPT is important because it represents a significant advancement in artificial intelligence (AI) technology. It is a language model that uses deep learning algorithms to understand and generate human-like language responses. ChatGPT's ability to understand and generate natural language makes it a valuable tool for a variety of applications, including customer service, 
                education, and healthcare. ChatGPT can engage in conversations with people, answer questions, and provide information, making it a useful resource for those seeking answers or assistance.<br><br>
                Additionally, ChatGPT's potential to learn and adapt to new information is significant. As more people interact with ChatGPT, it can learn from those interactions and improve its responses. This means that ChatGPT has the potential to become even more useful over time. Its ability to learn and adapt also has implications for the future of AI technology, as it demonstrates 
                the potential for AI to become more human-like in its behavior and interactions.
            </p>
                <br>
                <br>
                <br>
                <h2>WHAT IS THE DIFFERENCE BETWEEN CHATGPT AND A SEARCH ENGINE?</h2>
            <p> The primary difference between ChatGPT and a search engine is their approach to answering questions. A search engine relies on a keyword-based search to return relevant results. In contrast, ChatGPT uses natural language processing to understand the meaning behind a question and generate a response that is more human-like. This means that ChatGPT can handle more complex queries 
                and engage in more natural conversations than a search engine.<br><br>
                Another key difference is that ChatGPT can learn and adapt to new information, while a search engine is limited by its indexing of web pages. This means that ChatGPT has the potential to provide more personalized responses and adapt to the user's specific needs over time. Additionally, ChatGPT's ability to engage in conversations allows for a more natural and interactive experience for the user.
            </p>
                <br>
                <br>
                <br>
                <h2>WHAT ARE CHATGPT'S LIMITATIONS?</h2>
            <p> While ChatGPT represents a significant advancement in AI technology, it still has limitations. One of the most significant limitations is its reliance on existing data to generate responses. This means that ChatGPT may not always provide accurate or unbiased information, as it is limited by the quality and quantity of data it has been trained on. 
                Additionally, ChatGPT may struggle with understanding the context or nuance of certain questions, which can lead to incorrect or incomplete responses.<br><br>
                Another limitation is its inability to understand emotions or social cues, which can result in inappropriate or insensitive responses. ChatGPT is also limited by its inability to perform physical tasks or interact with </p>
                <br>
                <br>
                <br>
                <h2>CAN I CHAT WITH CHATGPT?</h2>
            <p> Yes, you can chat with ChatGPT. There are several platforms and applications that allow users to interact with ChatGPT, including chatbots and messaging apps. These interactions can range from simple queries and requests to more complex conversations. ChatGPT's ability to engage in natural language conversations makes it a valuable resource for those seeking information or assistance.<br><br>
                However, it is important to note that ChatGPT is not a perfect replacement for human interaction. While it can provide useful information and engage in conversations, it lacks the emotional intelligence and empathy that are often necessary in certain situations. Additionally, its reliance on existing data means that it may not always provide accurate or unbiased information.</p>
                <br>
                <br>
                <br>
                <h2>WHY ARE SOME PEOPLE WORRIED ABOUT CHATGPT?</h2>
            <p> ChatGPT is a powerful tool that has the potential to revolutionize the way people interact with technology. However, this same potential has caused concern among some people who worry about the unintended consequences of such advanced technology. One of the primary concerns is the potential for ChatGPT to be used for malicious purposes, such as spreading misinformation or manipulating public opinion.<br><br>
                With its ability to generate human-like responses, ChatGPT could be used to create fake news stories, generate deepfake videos, or impersonate real people in online interactions. This has raised concerns about the impact of ChatGPT on the integrity of information online and the potential for it to be used to manipulate people's opinions.<br><br>
                Another concern is the ethical implications of ChatGPT's ability to replace human jobs. As ChatGPT and other AI technologies become more advanced, they have the potential to replace jobs traditionally performed by humans. This could have significant economic and social implications, particularly for those in low-skilled or routine-based jobs.<br><br>
                Furthermore, there are concerns about the privacy and security implications of interacting with ChatGPT. As users engage with ChatGPT, they are providing data that can be used for various purposes, including targeted advertising or surveillance. There is a risk that this data could be misused or hacked, leading to privacy breaches or other security concerns.<br><br>
                Overall, while ChatGPT has the potential to be a valuable tool for a variety of applications, there are valid concerns about its impact on society. It is important for developers, policymakers, and users to consider these implications and work towards responsible and ethical use of AI technology to ensure that the benefits of ChatGPT are realized without causing harm to individuals or society as a whole.</p>

            </p>
            </div>
        </article>

        <article class = "grammarly" id = "grammarly">
            <div class = "grammarly-content reveal">
                <h3><a href="https://www.grammarly.com/" style="color: rgb(255, 255, 255);">GRAMMARLY</a></h3>
                <img src="images/grammarly.jpeg" alt="Grammarly user interface"><br><br>
                <h2>WHAT IS GRAMMARLY?</h2>
                <p>Grammarly helps people communicate with confidence across devices and platforms. Their AI-powered suggestions appear wherever you write, coaching over 30 million people and 50,000 teams every day to improve the correctness, clarity, engagement, and delivery of their writing. Grammarly Premium elevates communication for individual students and professionals, 
                    Grammarly Business drives organizations of all sizes to accelerate business results, and Grammarly for Developers empowers builders to enhance the communication experience for their end users.<br><br>
                    Grammarly team members use advanced machine learning to break new ground in natural language processing that analyzes written sentences to understand context and tone. They operate with a remote-first hybrid work model, meaning they primarily work from home and meet for in-person collaboration at their hubs in San Francisco, New York, Vancouver, Berlin, and Kyiv, 
                    or in a shared workspace in Krakow, as conditions allow. Grammarly is one of TIME’s 100 Most Influential Companies, one of Fast Company’s Most Innovative Companies in AI, a member of the Forbes Cloud 100, and one of Inc.’s Best Workplaces. </p>
                <br>
                <br>
                <br>
                    <h2>GRAMMARLY HISTORY</h2>  
                    <img src="images/gcreator.webp" alt="Grammarly Founders"><br><br>
                <p> Grammarly was founded in July 2009 by Alex Shevchenko, Max Lytvyn, and Dmytro Lider. The software program itself is furnished by Grammarly, Inc. and is headquartered in San Francisco, CA. Grammarly also has offices in Vancouver, New York City, and Kyiv.<br><br>
                    The company released its initial software program as a paid subscription product and an online editor. The goal was to help students with their writing, helping people learn the basic building blocks of the English language.<br><br>
                    A success, Grammarly’s investors attracted the attention of experienced businessman, Brad Hoover in 2011. He became CEO. Hoover helped the initial founders distill the program into a framework that guided everything they did moving forward. He says the company has been profitable almost “since inception”.<br><br>
                    Grammarly eventually grew to include a browser extension that could correct basic spelling and grammar issues. The browser extension was released in 2015, leading to an explosion in the average number of daily users. Today, the company employs </p>
                <br>
                <br>
                <br>
            <h2>GRAMMARLY HISTORY TIMELINE</h2>  
            <img src="https://images.ctfassets.net/1e6ajr2k4140/6s523PVEu31rgD9cZVoU2E/2ce192b0d17a4888ece3dabc83919176/Updated_About_Us.svg" alt="A chronological record of Grammarly's history" title="grammarly.jpeg">
            <p><a href="https://images.ctfassets.net/1e6ajr2k4140/6s523PVEu31rgD9cZVoU2E/2ce192b0d17a4888ec3dabc83919176/Updated_About_Us.svg">https://images.ctfassets.net/1e6ajr2k4140/6s523PVEu31rgD9cZVoU2E/2ce192b0d17a4888ece3dabc83919176/Updated_About_Us.svg</a></p>
            <ul>
                <li>In 2009, Grammarly was founded</li>
                <li>In 2010, Grammarly released its editor./li>
                <li>In 2011, current CEO Brad Hoover joined Grammarly.</li>
                <li>In 2013, Grammarly was named on the Inc 500 list. It also released a Microsoft Office add-in.</li>
                <li>In 2014, Grammarly was a Crunchie finalist.</li>
                <li>In 2015, Grammarly released many of its popular extensions for browsers like Chrome.</li>
                <li>In 2016, Grammarly began acquiring mainstream recognition for its grammar checker capabilities. 
                    It was featured by many publications including Lifehacker and PC World.</li>
                <li>In 2017, Grammarly completed its first funding round for $110 million. 
                    That same year, it released its virtual mobile keyboard on Android and iOS, receiving praise from many reviewers.</li>
                <li>In 2018, Grammarly released a version directly compatible with Google Docs. Instead of copying and pasting their documents into a separate window, 
                    users have access to an optimized version of Grammarly for Google Docs. It also began offering Grammarly discounts for users.</li>
                <li>In 2019, Grammarly completed a $90 million seed round with investors, securing its tech unicorn status. It also released a tone detector. 
                    This feature enables users to optimize their articles, blog posts and emails for an intended audience i.e. formal, casual etc. The company also increased its spending on YouTube advertising. 
                    Grammarly also announced plans for a business version of its grammar checker.</li>
                <li>In 2020, Grammarly released a business version of its software, and a version for iPad. This version supports a custom style guide and extended collaboration. 
                    It also rolled out an advanced AI writing assistant that automatically corrects your writing with a click.<br><br>
                    The company released advanced editing tools and a sidebar for Google Docs users. The company also invested in Docugami’s seed round. Docugami provides AI software for creating documents to businesses.<br><br>
                    Grammarly also provided support for Microsoft Word and Outlook. Techradar also listed it as one of the best Mac apps for home workers.</li>
                <li>In 2021, Grammarly switched to a work from home model for its employees. It also reported that 30,000 teams are using Grammarly Business.<br><br>
                    The company released a software developer kit or SDK beta that enables developer to embed automated text editing into any web app. Rob Brazier, head of product at Grammarly told Techcrunch:<br><br>
                    “Literally in just a couple lines of HTML, [developers] can add Grammarly’s assistance to their application, and they get a native Grammarly experiences available to all of their users without the users needing to install or register Grammarly,”</li>
            </ul>
            <br>
            <br>
            <br>
            <h2>GRAMMARLY VALUATION TODAY</h2> 
            <p>Grammarly has raised over $200 million in funding to date. According to a Techcruch report, Grammarly raised over $90 million during its second round of funding, in 2019. With over 20 million users, that placed the company at a valuation of approximately one billion dollars.<br><br>
                Three years is a long time in the SaaS world. Its userbase and feature set has widely grown since then. For example, the company has rolled out Grammarly Business as well as an AI-powered writing assistant. It has also invested heavily in paid advertising.<br><br>
                Today, according to PrivCo and some Crunchbase statistics, the valuation of Grammarly sits somewhere between one and ten billion dollars.</p>
                <br>
                <br>
                <br>
            <h2>GRAMMARLY AVAILABILITY</h2>
            <p>Grammarly has expanded to include Windows, Linux, Android, iOS, and World Wide Web operating systems such as Google Chrome, Firefox, and Safari.<br><br>
                Grammarly has expanded its capabilities during the past few years as a freemium program, offering services on multiple operating systems. Since its initial release, Grammarly has expanded to include Windows, Linux, Android, iOS, and World Wide Web operating systems such as Google Chrome, Firefox, and Safari.<br><br>
                While users can still paste documents directly into the Grammarly text box window by visiting the Grammarly site directly, the program has grown to include automatic detection of text boxes, allowing users to optimize their documents without having to paste their work into the Grammarly text box.</p>
                <br>
                <br>
                <br>
            <h2>THE LATEST GRAMMARLY FEATURES</h2>
            <p>Grammarly has also worked to sharpen its support on sites with a variety of writing styles, such as casual work on Google Docs or writing targeted to business professionals on LinkedIn. There is also an add-in option for Microsoft Office, available on Microsoft Word for Windows and Mac.<br><br>
                In addition, there is a Grammarly Editor available online with desktop applications, allowing users to steer away from any distracting tabs. You still need to use the internet to access the desktop application. The application provides alerts when you need to change with your writing, offering automated suggestions as you go.<br><br>
                Grammarly has also released a Grammarly Keyboard for Android and iPhone users, along with an integrated editor and keyboard experience for the iPad.</p>
                <br>
                <br>
                <br>
            <h2>THE DIFFERENCES BETWEEN GRAMMARLY FREE AND GRAMMARLY PREMIUM</h2>
            <img src="/images/grammarp.png" alt="Grammarly Subscription">
            <p>The focuses of Grammarly have always been engagement, clarity, correctness, and delivery. This includes the free and premium plans. Components of the free plan include:</p>
                <ul>
                    <li>The free plan offers an automated spell-checker.</li>
                    <li>The program offers rewrites for conciseness.</li>
                    <li>Grammarly free provides help with sentence structure assistance.</li>
                    <li>The free version catches punctuation issues.</li> 
                </ul>

            <p>Grammarly Premium includes all of the features above with a number of other benefits. Premium plan components include:</p>
                <ul>
                    <li>The premium plan provides automatic sentence rewrites.</li>
                    <li>Grammarly premium offers assistance with vocabulary suggestions.</li>
                    <li>The premium version comes with access to an automated plagiarism checker.</li>
                </ul> 
            
            <p>The plagiarism detection program automatically checks the internet for anything that resembles the work being written. Then, the overall assignment is given a percentage value that corresponds to the amount of work that closely resembles other pages found on the internet. 
            That way, writers can correct these issues before they get penalized for plagiarism on publication.<br><br>
            Grammarly premium costs $29.95 per month or $59.95 per quarter. The Grammarly business plan is priced differently depending on the size of the company. Many educational institutions take advantage of Grammarly as well.</p>
            <br>
            <br>
            <br>
                <h2>WHO SHOULD USE GRAMMARLY</h2>
                <p>There are several types of writers who should use Grammarly. A few examples of people who should use Grammarly include:</p>
                <ul>
                    <li>If you are a student looking for help catching spelling, grammar, and punctuation issues in your writing, Grammarly can automate this process for you</li>
                    <li>Students and professional writers who are looking to avoid plagiarizing someone else’s work should take advantage of the premium plagiarism checker offered by Grammarly.</li>
                    <li>Business professionals should use the Grammarly Business plan to keep their emails and messages concise, professional, and stylistically correct.</li>
                    <li>Anyone who is looking for an automated grammar checker that is easy to use should take advantage of Grammarly’s intuitive features and services. </li>
                </ul> 
    
            </div>
        </article>   

        <article class = "quillbot" id = "quillbot">
            <div class = "quillbot-content reveal">
                <h3><a href="https://quillbot.com/" style="color: rgb(255, 255, 255);">QUILLBOT</a></h3>
                <img src="images/quillbot1.jpg" alt="Quillbot user interface"><br><br>
                <h2>WHAT IS QUILLBOT?</h2>
                <p>QuillBot is an all-in-one AI writing tool that combines different editing features to help users create clear and concise sentences. Quillbot's accurately designed AI helps to paraphrase your text in a matter of seconds. 
                    Used by millions of writers, students and professionals worldwide, Quillbot is the tool to consider for your paraphrasing needs. It’s been around since 2017, amassing over 50 million users worldwide since then.<br><br>
                    Modern AI technology is used in QuillBot's toolkit to make writing effortless. Based on the idea that information acquisition and application are more significant than the mechanics of writing, 
                    QuillBot aims to automate these crucial actions in order to improve your language. You may now concentrate on what you write rather than how you should write it.
                    <br>
                    <br>
                    <br>
                <h2>WHO CREATED QUILLBOT?</h2> 
                <img src="images/rohan.png" alt="Rohan Gupta"><br><br>
                <p>The CEO and Co-Founder of QuillBot, an innovative NLP firm with millions of users, is Rohan Gupta. The man has a B.S. both an M.S. and in Finance. from the University of Illinois at Urbana-Champaign in Computer Science. 
                    He is enthusiastic about transforming the world, philosophy, and technology.</p>
                    <br>
                    <br>
                    <br>
                <h2>QUILLBOT'S AVAILABILITY</h2> 
                <p>QuillBot is primarily web-based, but it is also available as an extension on Microsoft Word, Google Chrome, and Google Docs. The easiest way to use Quillbot is to visit the Quillbot site, log in and open up its web app. 
                    Then, select the right feature from Quillbot, paste or upload your text and get to work. Alternatively, you can install a Chrome plugin or a Microsoft Word plugin and scan text as you write online or in Word.</p>
                    <br>
                    <br>
                    <br>
                <h2>INSTALLING QUILLBOT ON MICROSOFT WORD</h2> 
                <p>The installation procedure is not that difficult.</p>
                    <ol>
                        <li>Be sure to sign into Word.</li>
                        <li>Choose Add-ins from the Insert tab.</li>
                        <li>Choose the Office Store button</li>
                        <li>Choose the Add button after searching for QuillBot.</li>
                        <li>Go back to Insert and choose QuillBot from My Add-ins.</li>
                        <li>Lastly, open QuillBot from the tab you just established and log in with your credentials.</li>
                    </ol>
                    <br>
                    <br>
                    <br>
                <h2>SETTING UP QUILLBOT ON GOOGLE CHROME</h2> 
                <p>It works the same way as installing a typical extension on Google Chrome. Choose Add to Chrome after conducting a search for QuillBot in the Chrome Web Store. On the QuillBot website, you may also click Google Chrome under the extension page. You'll be sent straight to the Web Store page.<br><br>
                    The Chrome extension's great feature is that it also functions with other Chromium-based browsers. Hence, it ought to operate just fine if you use Brave, Vivaldi, or even the newest version of Microsoft Edge.</p>
                    <br>
                    <br>
                    <br>
                <h2>QUILLBOT PRICING</h2> 
                <img src="/images/quillbotp.png" alt="Quillbot Subscription">
                <h5>Free Subscription</h5>
                <p>The free plan of Quillbot provides some basic paraphrasing and summarizing capabilities and comes with a character limit. </p>
                <h5>Premium Subscription</h5>
                <p>QuilMlbot's premium version must be purchased in order to be used effectively. The Quillbot premium programs are simple to understand:</p>
                    <ul>
                        <li>Monthly fee for a premium subscription is $20.</li>
                        <li>Subscriptions purchased annually or semi-annually are eligible for discounts.</li>
                        <li>At $20 per month, the plagiarism detector examines 20 pages (about 250 words).</li>
                        <li>Cost of 25 extra pages: $7.45</li> 
                        <li>During 72 hours after making a purchase, you are eligible for a 10% money-back guarantee.</li>
                    </ul>
                    <br>
                    <br>
                    <br>
                <h2>QUILLBOT'S FEATURES</h2> 
                <h5>Paraphraser</h5>
                <img src="images/paraphraser.jpg" alt="Quillbot Paraphraser user interface">

                <p>The main draw of QuillBot for most users is paraphrasing. It rephrases sentences, just as the name implies. It allows you to rearrange phrases both partially and completely without altering the sense of the original text. 
                    The first two editing modes are Standard and Fluency, and there are seven total. Later on in this essay, we'll go into more detail about them. Also, the program opens with the Paraphraser option selected by default, making it simple to access. 
                    Just paste the information or enter the sentence(s) you wish to reword in the left textbox when it has been opened. A button to upload a corrected version of the complete document is also there. Just click Rephrase once the text has been entered into the textbox. 
                    Depending on the Quill-mode you choose, the AI will adjust the material, and the outcome will appear on the right. A Synonym bar is also included with Paraphraser. You have control over how many modifications the AI may make to the text thanks to this useful function. 
                    The outcome will be closer to the original text's meaning the lower the bar, and vice versa. From low to high, there are four points. With the exception of Fluency mode, when it is on the first dot, the tool is always on the second dot.</p>
                    <br>
                    <h5>Summarizer</h5>
                <img src="images/summarizer.jpg" alt="Quillbot Summarizer user interface">
                <p>Long paragraphs are condensed or made as dense as feasible using QuillBot's Summarizer.
                    It accomplishes this using two functions. a Key Sentences option that breaks down the key sentences into bullet points. 
                    a paragraph mode that cuts out the extraneous text and produces a paragraph with greater coherence.<br><br>
                    For articles, papers, and other document types, both functions are applicable.
                    Both methods are equivalent to using the Paraphraser. Copy the material, type it, or upload it first. Choose Summarize in your preferred method.<br><br>
                    Also, you may choose the summary's depth. You may select whether you want a shorter or longer summary by changing the Summary length.
                    The sweet spot in this situation is positioned in the center. A lengthier summary has more fluff than a shorter one, which is false.</p>
                    <br>
                <h5>Grammar Checker</h5>
                <img src="images/grammar.jpg" alt="Quillbot Grammar Checker user interface">
                <p>You can correct errors in the findings of the Summarizer and Paraphraser by using Grammar Checker.
                    The program operates in the same way as standard grammar checkers. It corrects grammatical, punctuation, and spelling mistakes.
                    The outcomes of the other qualities are not fixed by it either. The Checker also functions as a word processing program with several heading and stylistic options.<br><br>
                    There are all four orientations as well (left, center, right, justify).
                    Also, you may quickly and easily correct any errors by using the Repair All Mistakes button.
                    Finally, by clicking the Download symbol in the bottom right-hand corner, you may download your work into an MS Word document.</p>
                    <br>
                <h5>Citation Generator</h5>
                <img src="images/citation.jpg" alt="Quillbot Citation user interface">
                <p>Citing sources in one's writing is a common need for academics, authors, and writers in general. It doesn't matter if it's a book, essay, or presentation.
                    Users may quickly construct citations with a link or book title using QuillBot's Citation Generator.<br><br>
                    The application automatically pulls the page's essential information, including the title, author(s) name, and published date, when you enter the link or title.
                    It asks you to manually enter the data when the information is not accessible.<br><br>
                    Once you're done, click Save Citation, and the Generator will generate a comprehensive citation in accordance with the predefined format. The function supports the APA, MLA, and Chicago formatting standards.
                    You can also make several citations and separately copy the findings that are created. By downloading them as an MS Word document, you may export them all at once.</p>
                    <br>
                <h5>Plagiarism Checker</h5>
                <img src="images/plagiarism.jpg" alt="Quillbot Plagiarism user interface">  
                <p>For academicians and essayists, the Quillbot plagiarism checker performs superbly. Fundamentally, authors of essays can upload or paste them into the plagiarism analyzer. The process of scanning an essay takes some time. 
                    Next Quillbot displays a report showing if the author accidentally (or knowingly!) plagiarized. As an alternative, a student might utilize this program to locate any omitted citations and prevent unintentional plagiarism.<br><br>
                    On a per-page basis, the plagiarism detector operates. 5,000 words or the first 20 pages are included with a monthly membership. You will then need to purchase more pages. Past plagiarism scans are always available to you without further cost.</p>
                <br>
                <h5>Co-writer</h5>
                <img src="images/cowriter.jpg" alt="Quillbot Co-writer user interface">
                <p>All of the aforementioned tools are combined into one writing project using the beta tool known as The Cowriter. Choose a topic first, then use the Research tab to look for information on it.<br><br>
                    Then Quillbot displays related web stuff. A writer can use these sources in their writing, sum up or paraphrase other authors' works, and properly credit them. 
                    Imagine it as a content spinner driven by AI. Whilst it won't aid with SEO, it is comparable to how a content optimization tool like Clearsope functions.</p>
                    <br>
                <h5>Translator</h5>
                <img src="images/translator.jpg" alt="Quillbot Translator user interface"> 
                <p>Quillbot has recently launched a robust new translator. This tool not only helps language learners to translate complex texts, but also allows them to compare languages side-by-side, 
                    enabling them to comprehend the subtleties of sentence structure, word choice, and verb conjugation. With over 30 languages supported, including French, Spanish, German, Ukrainian, and Japanese, 
                    QuillBot's innovative AI-powered tools can help users make sense of idioms and other language idiosyncrasies that frequently puzzle language learners.<br><br>
                    According to Rohan Gupta, QuillBot's co-founder and CEO, "QuillBot, and especially our translator, was born out of our own personal experiences and challenges of requiring accessible assistance 
                    to understand how to write well, while also preserving the original intent. We are dedicated to bridging cultural gaps and facilitating a deeper and more relatable comprehension of text, as well 
                    as guiding users through the most difficult aspects of writing and aiding them in honing their skills."
                </p>

            </div>
        </article>

        <article class = "designs" id = "designs">
            <div class = "designs-content reveal">
                <h3><a href="https://designs.ai/" style="color: rgb(255, 255, 255);">DESIGNS.AI</a></h3>
                <img src="/images/designai.jpg" alt="DESIGN.AI user interface"><br><br>
                <h2>WHAT IS DESIGNS.AI?</h2>
                <p>The Designs.ai is an all-in-one design solution that brings together the power of AI and the creativity of human designers. Whether you're looking to create logos, social media graphics, and more. <br><br>
                    One of the key benefits of Designs.ai can assist by generating unique design concepts. This feature can help you come up with fresh ideas for your designs, whether you're working on a new logo or a social media post. 
                    It can also suggest color palettes and fonts that work well together, taking the guesswork out of design. It also offers the expertise of human designers. These designers can provide guidance and advice to help you 
                    create designs that truly reflect your brand and your vision.  The human designers at Designs.ai are there to help.<br><br>
                    Designs.ai is a web-based platform that utilizes its own AI technology to provide easy access to design tools for everyone. This means that users with little or no design experience can create impressive marketing portfolios
                    in a short amount of time, thanks to the platform's intuitive interface and AI-powered features. By using Designs.ai, users can overcome the barriers of traditional design methods and create high-quality designs effortlessly.</p>
                    <br>
                    <br>
                    <br>
                <h2>WHO CREATED DESIGNS.AI?</h2>
                <img src="images/warren.jpg" alt="Warren Leow">
                <p>The company was founded in Jan. 2019 by Warren Leow, who is an experienced entrepreneur and AI expert. He is the CEO of Designs.ai and the Interim, Group CEO of Inmagine Group. He previously worked at Amazing Fables as the Founder. 
                    He attended The London School of Economics and Political Science.<br><br>
                    The platform leverages artificial intelligence and machine learning algorithms to provide various design solutions. It has a range of tools for creating logos, generating brand names, designing websites, creating social media posts, and more. 
                    The AI-powered tools are designed to simplify the design process, making it more accessible to everyone, including small businesses and individuals.<br><br>
                    Designs.ai uses a combination of natural language processing, image recognition, and other AI technologies to power its tools. The platform's AI algorithms are trained on vast datasets of design and branding information, enabling them to generate 
                    high-quality designs that match a user's preferences and requirements.<br><br>
                    Overall, Designs.ai is an exciting example of how AI is transforming the design and branding industry, making it easier and more efficient for businesses and individuals to create high-quality designs and build strong brands.
                    <br>
                    <br>
                    <br>
                <h2>WHAT ARE THE TOOLS THEY OFFER?</h2>
                <p>Designs.ai is a complete design solution that provides users with a range of tools to create stunning graphics, videos, logos, and mockups. By using these tools, users can save valuable time and resources compared to traditional design methods. 
                    Moreover, Designs.ai offers additional features to help in the design process, such as collaboration tools for team projects and integration options to access brand assets quickly. Overall, Designs.ai is an easy-to-use platform that provides diverse design options and functionalities to simplify the design process. <br><br>
                    Designs.ai offers several key features such as:</p>
                    
                    <ol>
                        <li>Logo Maker: This tool allows users to quickly and easily create a custom logo and branding kit without any design experience.</li>
                        <img src="/images/dlogo.png" alt="Logo Maker">
                        <li>Video Maker: Using unique text-to-video technology and voiceover options, users can create professional-looking videos with ease.</li>
                        <img src="/images/dvideo.png" alt="Video Maker">
                        <li>Design Maker: This tool provides users with the ability to design various items, including posters, greeting cards, menus, brochures, and more, 
                            either from scratch or by utilizing the available templates.</li>
                        <img src="/images/dmaker.png" alt="Design Maker">
                        <li>Speech Maker: With this feature, users can generate a voiceover for their script and adjust the tone and pitch to fit their needs.</li>
                        <img src="/images/dspeech.png" alt="Speech Maker">
                    </ol>

                <p>In addition to its main features, Designs.ai provides users with assistive tools to enhance their designs. These tools include:</p>
                    <ol>
                    <li>Font Pairer: This tool helps users find the perfect matching fonts for their designs, ensuring a cohesive and professional look.</li>
                    <img src="/images/gfont.png" alt="Font Pairer">
                    <li>Color Matcher: With this tool, users can easily find complementary colors for their designs, enhancing the visual appeal of their creations.</li>
                    <img src="/images/gcolor.png" alt="Color Matcher">
                    <li>Graphic Maker: This tool allows users to create graphics using highly customizable templates, allowing them to personalize their designs according to their needs.</li>
                    <img src="/images/ggraphic.png" alt="Graphic Maker">
                    </ol>
                <p>Overall, Designs.ai offers a range of tools that can assist users in creating high-quality designs and content with minimal effort and time. 
                    These assistive tools can help users elevate the quality of their plans and create more visually appealing content.</p>
                    <br>
                    <br>
                    <br>
                <h2>HOW DOES DESIGNS.AI HELP AGENCIES AND FREELANCERS?</h2>
                <p>Designs.ai utilizes creative automation to enable agencies and freelancers to concentrate on client engagement, ideation, and strategy, by automating time-consuming design tasks. 
                    This enables quicker turnaround and higher volume creation across multiple channels. Furthermore, Designs.ai's collaboration feature enables agencies and freelancers to simplify 
                    client communication, allowing them to share their work-in-progress instantly for feedback and approval. Overall, Designs.ai helps agencies and freelancers to increase their 
                    productivity and efficiency, while also enhancing their ability to collaborate with clients effectively. Click here to learn more about our agency offerings.</p><br><br>
                
                <h2>ARE MY DESIGNS.AI CREATIONS LICENSED FOR COMMERCIAL USED?</h2>
                <p>All finished projects made with our creative AI tools can be distributed to promote and advertise your business. You may also resell your creations as a service to clients. 
                    However, you cannot sell, distribute, or license individual assets found within the platform.</p>
                    <br>
                    <br>
                    <br>
                <h2>WHO CAN USED DESIGNS.AI?</h2>
                <p>Designs.ai can be used by anyone who needs graphic design tools and wants to create professional-looking designs quickly and affordably. 
                    Some specific groups of people who may benefit from using Designs.ai include:</p>
                    <ol>
                        <li>Small business owners who need to create logos, business cards, and other branding materials.</li>
                        <li>Marketers who need to create ads, social media posts, and other promotional materials</li>
                        <li>Freelance designers who want to streamline their workflow and create designs faster</li>
                        <li>Individuals who need to create designs for personal projects, such as invitations or resumes.</li>
                        </ol>
                <p>Overall, Designs.ai is designed to be user-friendly and accessible to anyone, regardless of their design experience or background.</p>
                    <br>
                    <br>
                    <br>
                <h2>WHAT ARE THE ADVANTAGEs AND DISADVANTAGEs OF DESIGNS.AI?</h2>
                <h5>Advantages of using Designs.ai include:</h5>
                    <ul>
                        <li>AI-powered design tools that allow users to create professional-looking designs quickly and easily.</li>
                        <li>A wide range of design templates and assets to choose from, including logos, business cards, and mockups.</li>
                        <li>Flexible subscription plans that cater to different user needs and budgets.</li>
                        <li>User-friendly interface and intuitive design tools that require no prior design experience.</li> 
                        <li>Ability to save time and money compared to hiring a professional designer or using expensive design software.</li>
                    </ul>

                <h5>Disadvantages of using designs.ai may include:</h5>
                    <ul>
                        <li>Limited customization options compared to designing from scratch or using professional design software.</li>
                        <li>Limited options for integrating designs with other software or platforms.</li>
                        <li>Dependence on AI and automation, which may not always produce the desired result or require human intervention.</li>
                        <li>Limited availability of customer support, especially for free and pay-per-use users.</li>
                        <li>Potential risk of similarity or copyright infringement if users do not carefully review the designs they create.</li>
                    </ul>
                    <br>
                    <br>
                    <br>
                <h2>WHAT ARE THE DIFFERENT SUBSCRIPTION YOU CAN USED?</h2>
                <img src="/images/designsp.png" alt="Designs.ai Subscription">
                <p>Designs.ai offers different subscription plans that users can choose from depending on their needs. These plans including a free plan, 
                    paid subscription plans include the Basic, Pro, and Enterprise / Agency plan.<br><br>
                    Here is a breakdown of the pricing plans for Designs.ai, along with the potential cost savings when choosing between monthly and annual subscriptions:</p>
                    <br>
                <h5>Free</h5>
                <p>For individuals who want to try out the Designs.ai tools<br>
                    $0</p>
                <h5>Basic</h5>
                <p>For individual, students, and marketers that need quick, easy projects<br>
                    $19/Month<br>
                    $228/annum</p>
                <h5>Pro</h5>
                <p>For entrepreneurs and small teams that need advanced editing and professional templates<br>
                    $49/Month<br>
                    $588/annum</p>
                <h5>Enterprise/Agency</h5>
                <p>For large teams and agencies that need unified branding at scale and collaboration</p>
            </div>
        </article>

        <article class = "uizard" id = "uizard">
            <div class = "uizard-content reveal">
                <h3><a href="https://uizard.io/" style="color: rgb(255, 255, 255);">UIZARD</a></h3>
                <img src="/images/uizard.png" alt="Uizard"><br><br>
                <br>
                <br>
                <br>
                <h2>WHAT IS UIZARD?</h2>
                <p>Uizard is a rapid prototyping tool used for transforming your wireframes into prototypes automatically, create custom style guides, export as Sketch files, download frontend code, and iterate as fast as possible. 
                    It breaks away the problem and time to transform the low-fidelity wireframe into a high-fidelity wireframe.Uizard uses computer vision and machine learning algorithms to transform the wireframe images captured from a hand-drawn sketch into high-fidelity mockups.
                    It has a built-in style guide system which is three by default (Simple mockup, Cozy and Adventurous) to customize components in the UI and also a prototype engine to build an interactive user flow.</p>
                <br>
                <br>
                <br>
                <h2>WHO CREATED UIZARD?</h2>
                <img src="/images/uizardf.webp" alt="Uizard Founders">
                <p>Founded in 2017 and launched out of beta in February, Uizard, the brainchild of Florian van Schreven, Henrik Haugbølle, Ioannis Sintos, and Tony Beltramelli, offers an AI-powered design tool that helps customers create mobile apps, websites, and desktop software. The platform automatically turns hand-drawn sketches and wireframes into editable screens, changing the style of a projects while preserving what Beltramelli calls their “information hierarchy.”</p>
                <p>“Up until now, we’ve been an engineering-first company — we’ve turned machine learning research into an AI-powered product, we on-boarded early signups into a private beta, identified our target market, and optimized our product accordingly,” Beltramelli told in an interview via email. “Now that our model works, we can accelerate growth and scale customer acquisition. The funds will therefore primarily be used to assemble our commercial and marketing team.”</p>
                <br>
                <br>
                <br>
                <h2>HOW DOES UIZARD WORKS?</h2>
                <p>Uizard utilizes artificial intelligence (AI) to facilitate the design process. Here's a high-level overview of how Uizard works:</p>
                <p>Input: Users can provide input to Uizard in various ways. This includes uploading images of hand-drawn sketches or wireframes, importing existing design files, or starting from scratch using the platform's design tools.</p>
                <p>AI Processing: Once the input is provided, Uizard's AI algorithms analyze the content, identify design elements, and interpret user intentions. The AI technology understands the structure of the design, such as buttons, text, images, and their relationships.</p>
                <p>Conversion and Editing: Uizard converts the input into a digital design by recreating and organizing the elements based on the AI analysis. Users can then edit and refine the design using Uizard's intuitive interface. They can add, modify, or remove elements, adjust layouts, and apply various styles and interactions.</p>
                <p>Collaboration: Uizard offers collaboration features that enable multiple users to work together on a design project. Team members can review, comment, and provide feedback on the designs, facilitating effective collaboration and iteration.</p>
                <p>Prototyping: Uizard allows users to create interactive prototypes by defining clickable areas, transitions, and animations. This enables users to simulate the user experience and test the functionality of their designs.</p>
                <p>Export and Integration: Once the design is finalized, users can export their designs to popular design software such as Sketch, Figma, or Adobe XD. This facilitates seamless integration with existing design workflows and further development processes.</p>
                <p>Through this AI-driven approach, Uizard aims to simplify and accelerate the design process, making it more accessible and efficient for both designers and non-designers alike.</p>
                <br>
                <br>
                <br>
                <h2>HOW TO USE UIZARD?</h2>
                <p>You can start using Uizard by following the steps below:</p>
                <p>Step 1: Go to https://app.uizard.io and log in with your account using either your phone or laptop. Using your phone here allows you to capture your hand-drawn sketches created by following the guidelines provided by Uizard.</p>
                <p>Step 2: Create a new prototype on Uizard.</p>
                <p>Step 3: Enter the information about your prototype i.e the name, device, and choose your preferred Uizard style guides.</p>       
                <p>All set! The prototype project has been created, now upload the hand-drawn sketches into the wireframe folder created which include the prototype name, the description, the author and contributors.</p>
                <p>Step 4: Upload the hand-drawn sketches captured with your phone.</p>
                <p>Step 5: Prototyping is possible in Uizard using the prototype engine which allows you to prototype your wireframe so you can be able to present your idea quickly and iterate as early as possible.</p>
                <p>Step 6: Edit Tab- Editing of elements in Uizard is still limited to replacing of elements with another. As you can below that the UI has changed from the previous one you created above.</p>
                <p>Step 7: Comments- The comment feature enables the contributor available in your project the ability to comment on any part of the prototype you are creating in Uizard which is as seamless as that of Google docs or Figma.</p>
                <p>Step 8: Play the prototype to preview your user flow of the wireframe.</p>
                <p>Step 9: Export prototype — you can generate Sketch files that can be imported into your favourite design tools and frontend code automatically from your wireframes which are available as HTML & CSS, React or Android.</p>
                <p>Step 10: Sharing prototype- Click on the share button in the top left in Uizard, there will be a pop-up that allows you to enable sharing the link so you can share with your colleagues or families.</p>
                <br>
                <br>
                <br>
                <h2>WHAT CAN YOU USE UIZARD FOR?</h2>
                <p>Whether you're a UI design pro or just starting out, Uizard is here to transform your workflow with rapid, collaborative, easy-to-use design. With Uizard's intuitive interface, you can bring your vision to life in a matter of minutes, not hours, regardless of your level of design experience or expertise. Uizard will even help you save precious time and resource, allowing you to focus on the things that really matter.</p>
                <br>
                <br>
                <br>
                <h2>HOW TO GET STARTED?</h2>
                <p>You've signed up to Uizard, you've got an army of great UI design ideas waiting in the rafters, but what comes next? Once you've signed into Uizard for the first time and completed your onboarding tasks, you are ready to get started with your first project. In the interface, simply click 'Create new project' to advance through to the 'create' screen.</p>
                <p>Here you have a few options. You can click 'Start with AI magic', 'Start from scratch', or, if you know exactly what you want to design or you at least know what niche you are designing for, you can select one of Uizard's pre-made UX/UI design templates.</p>
                <p>Templates are a great way to save time and get inspiration and Uizard offers multi-screen templates for both app and website design. Each template comes with all the must-have screens and UI design components baked in (including the core user click journeys to really help you demonstrate how your prospective users would navigate through your design).</p>
                <p>Have a browse through the embedded Uizard template prototype below to get a feel of what to expect when you use one (clickable links flash in blue). It's also worth remembering that Uizard templates are 100% customizable, meaning you can easily put your own spin on things with branding, UI themes, or additional screens.</p>
                <br>
                <h3>STARTING A PROJECT FROM SCRATCH</h3>
                <p>Starting a project from scratch gives you a completely blank canvas to bring your vision to life. To start a project from scratch, simply navigate to the 'create' screen, select your device of choice (either web, mobile, or tablet) and click start from scratch.</p>
                <br>
                <h3>UNDERSTANDING THE UIZARD LAYOUT</h3>
                <p>Ok, so you've opened a template or opened a blank project, now it's time for the fun to begin. Before we dive into the detail though, it's important to get a bit of an understanding of how the Uizard interface works (spoiler: it's really simple and easy).</p>
                <p>At its heart, Uizard is an easy-to-use, drag-and-drop editor and has been tailor-made for rapid and collaborative workflows. On the left, you can find Uizard's pre-made components library, as well as individual UI elements such as text blocks, image blocks, buttons, and icons.</p>
                <p>On the right, you can find Uizard's screen management, notes, and settings. To edit specific elements in your project, you can simply click on them to bring up Uizard's intuitive design menu. Here, you can edit the size, shape, style, and layout of any component or block.
                    Using Uizard really is that easy... components on the left, editing and settings on the right.</p>
                <br>
                <h3>HOW TO COLLABORATE IN UIZARD?</h3>
                <p>Before you dive in, it might be a good idea to invite your team for some real-time collaboration. To invite your teammates, simply click on the sharing button found in the top right-hand corner of the Uizard app.</p>
                <p>Once here, the sharing menu will pop up, and all you need to do is type in the email address of the person you want to share your project with and click send. They will then be invited to log in and join your project or sign up to Uizard for free if they've not already done so. You can even choose whether you want to give them edit access or simply allow them to view your project and leave comments.</p>
                <p>Speaking of comments, leaving feedback on your design or opening conversations to your team is super easy with Uizard's notes system. Click the notes button found in the right-hand nav of the interface to activate feedback mode. Once activated, you can click anywhere on the canvas in front of you to leave a note for your team.</p>
                <br>
                <h3>EDITING YOUR UIZARD DESIGN</h3>
                <p>Ok, so you’ve opened a template or created a blank project and invited your team, now it's time to edit your project to make it your own. Uizard has everything you need to create, edit, and iterate your design, as well as work across varying levels of fidelity.</p>
                <br>
                <h3>ADDING UIZARD COMPONENTS</h3>
                <p>Adding components to Uizard is quick and easy. Simply visit the menu on the left-hand side of the interface. You can use Uizard's category menu to find what you are looking for, type what you need in the search bar, or simply scroll through the library until inspiration strikes.</p>
                <br>
                <h3>ADDING INDIVIDUAL ELEMENTS</h3>
                <p>As well as composite components, Uizard also empowers you to drag and drop individual elements such as buttons, icons, images, and text boxes.</p>
                <br>
                <br>
                <br>
                <h2>WHY UIZARD IS IMPORTANT?</h2>
                <p>Uizard is important for several reasons:</p>
                <p>Simplifying the Design Process: Uizard's AI-powered technology simplifies and automates certain aspects of the design process. It reduces the time and effort required to create digital designs by converting hand-drawn sketches into digital assets and providing intuitive design tools that don't require extensive coding or design skills.</p>
                <p>Accessibility for Non-designers: Uizard makes design more accessible to non-designers who may not have expertise in design software or coding. It allows individuals with minimal design experience to create visually appealing and interactive prototypes, empowering them to bring their ideas to life without relying heavily on technical resources.</p>
                <p>Faster Iteration and Prototyping: Uizard enables designers to rapidly iterate and prototype their designs. The AI technology and intuitive interface facilitate quick adjustments, experimentation, and refinements, helping designers iterate on their ideas and gather feedback at a faster pace.</p>
                <p>Collaboration and Feedback: Uizard supports collaboration features that foster effective teamwork. Designers and team members can work together on a design project, review and provide feedback, and iterate on designs collaboratively. This streamlines the feedback and iteration process, leading to better design outcomes.</p>
                <p>Integration with Existing Workflows: Uizard allows seamless integration with popular design software like Sketch, Figma, and Adobe XD. This enables designers to export their designs and continue working with their preferred tools or hand off designs to developers, ensuring smooth transitions between design and development phases.</p>
                <p>Democratizing Design: By simplifying and democratizing the design process, Uizard empowers individuals and businesses to create better user experiences. It reduces barriers to entry and promotes innovation, enabling more people to participate in the design and prototyping of digital products.</p>
                <p>In summary, Uizard is important because it enhances accessibility, efficiency, collaboration, and iteration in the design process. It empowers designers and non-designers alike, enabling them to create compelling user interfaces and prototypes with ease.</p>
                <br>
                <br>
                <br>
                <h2>UIZARD FEATURES</h2>
                <img src="/images/uizardf.png" alt="Uizard Features">
                <p>Whether you are looking to use AI to generate editable mockups from simple screenshots, or you want to transform your hand-drawn wireframes into digital designs, Uizard is here to make your design journey faster and easier than ever before. From app design to UI creation and web page mockups, anything is possible!</p>
                <br>
                <h3>CONVERT SCREENSHOTS TO EDITABLE MOCKUPS</h3>
                <p>Looking to adapt the design of a popular website or app for your own project? Maybe you're a startup creating a holiday home listing business and you want to create a UI mockup of the next Airbnb? Uizard’s AI screenshot converter is the tool for you!</p>
                <p>Upload screenshots to Uizard and let the AI magic unfold as your images are transformed into editable mockups in a matter of seconds. You can use screen grabs of your favorite apps, websites, and UIs and make them your own in next to no time.</p>
                <br>
                <h3>GENERATE TEXT FOR DESIGNS WITH SIMPLE PROMPTS</h3>
                <p>Creating the right copy for your designs can be tricky. Even if you are working on an early iteration of your UI mockup, it's important to get the right text in place to demonstrate both your user flows as well as the general tone of voice and syntax of your messaging. The last thing you need when you're testing your design with stakeholders is repetitive copy or, heaven forbid, lorum ipsem text in the place of actual content.</p>
                <p>Whether you are working on placeholders, CTA text, or titles and subtitles for the various screens of your app or web design, getting the perfect creative text has never been so easy. Make wrestling with your messaging a thing of the past with Uizard’s AI Text Assistant. To get started, all you have to do is type in some relevant prompt words and let Uizard's Design Assistant do the hard work.</p>
                <br>
                <h3>GENERATE UI THEMES FROM IMAGES OR URLS</h3>
                <p>Want to overhaul the entire theme of your website or mobile app design? Maybe you want to copy the general theme of a popular competitor or market leader as a cognitive hack to instantly conjure up a sense of familiarity with your audience. Then Uizard's theme generation features are the perfect solution for you.</p>
                <p>Uizard uses powerful deep-learning algorithms to generate beautiful design themes from the images you upload. Photos, screenshots, mood boards… regardless of where you get inspiration from, Uizard can generate a matching UX/UI theme in next to no time.</p>
                <p>Uizard's AI design tools can even extract colors, stylization, typography, and other components from any app screenshot, meaning you can transfer a design style from one project to another with just a few clicks of a button.</p>
                <br>
                <h3>TRANSFORM HAND-DRAWN SKETCHES INTO WIREFRAMES</h3>
                <p>Whether you scribble your app ideas down on a whiteboard, in a notebook, or on a scrap of paper, transforming your idea into a UX/UI prototype has never been so easy. Sign up to Uizard for free and scan in your hand-drawn wireframes to instantly transform them into editable digital designs.</p>
                <p>Uizard's wireframe mode even allows you to take control over the level of fidelity of your design, meaning you can switch between low fidelity and higher fidelity with the flick of the switch, giving you complete control over the design and iteration process.</p>
                <br>
                <h3>GENERATE ATTENTION HEATMAPS TO ANALYZE YOUR USER FLAWS</h3>
                <p>Struggling to understand how your users might interact with your app design? Wondering where to place core CTAs to ensure a smooth user journey from discovery to your primary target action? Then bring the power of generative AI into your workflow with Uizard's AI heatmap functionality.</p>
                <p>It doesn't matter whether you want to review the general structure of your design, analyze specific CTAs, or develop an understanding of how to advance your design through the next stage of iteration, you can use Uizard to generate attention heatmaps to predict the areas of your project where users will focus their attention the most.</p>
                <br>
                <h3>UNLEASH YOUR CREATIVE POTENTIAL WITH THE POWER OF AI DESIGN</h3>
                <p>Whether you are a design whiz who has been through the ideation and iteration stages multiple times, or you're a founder with a brand-new idea that you can't wait to bring to life, Uizard is the perfect AI design tool to help you with your design flow. Scan in your wireframes, conjure up the perfect placeholder text, analyze your user flows... the possibilities are endless.</p>
                <br>
                <br>
                <h2>UIZARD'S SUBSCRIPTION</h2>
                <img src="/images/uizardp.png" alt="Uizard Subscription">
                <p>Uizard offers subscription plans for its design platform.</p>       
                <p>The pricing for Uizard starts at $12.0 per user per month. Uizard has 2 different plans:</p> 
                
                <h5>Pro</h5>
                <p>Pro at $12.00 per user per month.</p>
                <h5>Enterprise</h5>
                <p>Enterprise at $39.00 per user per month.</p>
                <h5>Free</h5>
                <p>Uizard also offers a Free Plan with limited features.</p>
            </div>
        </article>    

        <article class = "wolfram" id = "wolfram">
            <div class = "wolfram-content reveal">
                <h3><a href="https://www.wolframalpha.com/" style="color: rgb(255, 255, 255);">WOLFRAM ALPHA</a></h3>
                <img src="/images/wolfram.png" alt="Wolfram Alpha"><br><br><br>
                        <h2>WHAT IS WOLFRAM ALPHA?</h2>
                <p> Stephen Wolfram founded Wolfram Research, the company behind Wolfram Alpha, a computational knowledge engine that provides users with comprehensive information and data on various topics. Unlike traditional search engines such 
                    as Google that return links to web pages, Wolfram Alpha generates answers from its vast database of curated and computed knowledge, using natural language processing and machine learning algorithms to comprehend user queries and 
                    deliver relevant and accurate results. Wolfram Alpha is capable of addressing complex questions in mathematics, science, engineering, and many other domains, making it a popular choice for students, researchers, professionals, and 
                    anyone seeking factual information. Since its inception in 2005, Wolfram Alpha has been continuously developed, and its goal is to present specific facts rather than a list of hyperlinks, making it a pioneer in semantic search technology, 
                    similar to Google's Knowledge Graph that was further advanced with the Hummingbird Update.</p>
                    <br> 
                    <br>
                    <br>
                    <h2>WHO CREATED WOLFRAM APLHA?</h2>      
                    <img src="/images/stephenwolf.jpg" alt="Stephen Wolf">        
                <p> Wolfram Alpha was created by Stephen Wolfram, a physicist, and mathematician, who also founded the company behind the search engine, Wolfram Research. Wolfram Alpha was first launched in 2009, and since then, it has become a popular tool 
                    for accessing computational knowledge across various domains. With its vast database of curated and computed knowledge and the use of natural language processing and machine learning algorithms, Wolfram Alpha can answer complex queries 
                    and provide comprehensive information and data to its users.</p>
                <p>     <br>
                        <br>
                        <br>
                        <h2>HOW TO USE WOLFRAM ALPHA</h2><br>
                <p> To use Wolfram Alpha, you can follow the steps outlined below:<br><br>
                        <br>
                        1.	Launch your web browser and visit the Wolfram Alpha website at www.wolframalpha.com.<br><br>
                        2.	Type in your query or question in the search box provided and either hit the Enter key on your keyboard or click the "Go" button.<br><br>
                        3.	Wolfram Alpha will generate a results page that provides answers to your query. The results may include text, tables, graphs, and other visualizations, depending on the type of query.<br><br>
                        4.	You can refine your query or customize your results using the options and menus available on the results page. For instance, you can change the units of measurement or select a different type of visualization.<br><br>
                        5.	You can also download and install Wolfram Alpha's mobile app for iOS and Android devices to access its features while on the go.<br><br>
                        6.	Furthermore, Wolfram Alpha provides various features that you can access using specific commands. For example, you can type "plot sin(x)" to generate a plot of the sine function or "compare GDP of US and China" to compare the GDP of the United States and China.<br><br>
                        Wolfram Alpha is a versatile tool that can be used for education, research, data analysis, and problem-solving, among other purposes. Its natural language processing and computational capabilities make it a powerful resource for generating answers and insights on various topics.<br><br>
                </p>
                <br>
                <br>
                <p>
                    <h2>HOW DOES WOLFRAM ALPHA WORK?</h2> 
                <p>To generate answers to user queries, Wolfram Alpha utilizes a combination of natural language processing, computational algorithms, and curated data. Unlike traditional search engines that rely on keyword matching, Wolfram Alpha attempts to understand the intent behind the user's question.
                    The search engine boasts a vast database of curated and computed data that covers a wide range of domains such as math, science, engineering, and more. This data is structured in a way that allows Wolfram Alpha to generate answers to a wide range of questions, from basic calculations to complex queries.
                    Wolfram Alpha employs natural language processing and machine learning algorithms to analyze the syntax and semantics of the user's query, enabling it to understand the question's meaning. After comprehending the query, the search engine uses computational algorithms optimized to deliver quick and precise results.
                    These algorithms perform diverse tasks such as arithmetic calculations, data analysis, and visualization, enabling users to obtain answers to their queries quickly and accurately. Wolfram Alpha's ability to generate specific results from a user's query rather than a list of hyperlinks is what sets it apart from traditional search engines.
                </p>
                <br>
                <br>
                <br>

                    <h2>WHAT CAN YOU USE WOLFRAM ALPHA FOR?</h2> 
                <p>                   Wolfram Alpha offers a variety of applications, including:
                •	Education: Wolfram Alpha can be a helpful tool for students in numerous subjects, such as mathematics, physics, and chemistry. It can produce step-by-step solutions to problems and provide visualizations to enhance comprehension.
                •	Research: Wolfram Alpha can provide information on a range of topics, such as scientific data, historical events, and cultural phenomena. It can support researchers in analyzing data, creating models, and discovering insights.
                •	Data analysis: Wolfram Alpha can analyze and visualize data sets, generate statistical summaries, and execute calculations on data. It can also perform operations on matrices and vectors and help to comprehend complex systems.
                •	Problem-solving: Wolfram Alpha can be useful in solving intricate problems in various fields, including engineering, finance, and physics. It can create optimized solutions, offer alternative approaches, and aid in decision-making.
                •	Personal productivity: Wolfram Alpha can serve as a personal assistant for tasks such as calculating nutritional values, converting units, and examining social media profiles.

                </p>
                <br>
                <br>
                <br>
                    <h2> WHY WOLFRAM ALPHA IMPORTANT?</h2> 
                <p>Wolfram Alpha is an essential tool as it offers an efficient means of generating answers and insights across multiple domains. With its ability to understand natural language queries and generate accurate and relevant results, it is a valuable resource for students, researchers, professionals, and individuals seeking solutions to complex problems.
                    Wolfram Alpha's computational and analytical capabilities make it a valuable asset in fields such as science, engineering, finance, and more. It aids in data analysis, creating models, generating optimized solutions, and assisting in decision-making.
                    Furthermore, Wolfram Alpha's curated data sets and computational algorithms provide a dependable and authoritative source of information on various topics. Its extensive database spans diverse domains, such as mathematics, science, engineering, among others. Also, its ability to provide real-time answers and insights enhances personal productivity and problem-solving.
                    
                </p>
                <br>
                <br>
                <br>
                <h2>FEATURES</h2> 
                <p>Wolfram Alpha is a versatile search engine that offers numerous features to its users. One of its most prominent features is its ability to perform complex calculations. Wolfram Alpha can handle simple and advanced calculations, including algebra, trigonometry, number theories, and physical calculations. It can also calculate financial operations, making it useful for professionals in finance and related fields.
                    Another feature of Wolfram Alpha is its ability to provide users with information on the nutritional values of different foods. By entering the name of a food, users can get a detailed breakdown of its nutritional values in the form of tables and graphics.
                    The search engine also offers the ability to calculate orbits and convert units of measure and time differences. Wolfram Alpha can convert dimensions and display different time zones, making it a useful tool for those who need to work with data from different parts of the world.
                    Wolfram Alpha provides structured results on a variety of topics, including educational institutions, sociodemographic data, materials, culture and media, and geographical facts and institutions. The search engine can also evaluate Facebook profiles, allowing users to analyze their own profile in terms of reach, links to other users, and likes.
                    Additionally, Wolfram Alpha offers the option to compare different aspects, persons, countries, or issues. It can also analyze images and files uploaded by users. Wolfram Alpha covers a wide range of topics, and users can find examples and more information on its website, wolframalpha.com.<br><br>
                    <img src="/images/wolfram.png" alt="Wolfram Features"> <br><br>
                    <img src="/images/wolf1.png" alt="Wolfram Features"> <br><br>
                    <img src="/images/wolf2.png" alt="Wolfram Features"> <br><br>
                    <img src="/images/wolf3.png" alt="Wolfram Features"> <br><br>
                <br>
                <br>
                <br>
                </p>
                    <h2>WOLFRAM ALPHA SUBSCRIPTION</h2> 
                    <img src="/images/wolfp.png" alt="Wolfram Subscription"> <br><br>
                <p> Wolfram Alpha offers both free and paid subscriptions. The free version allows users to access basic features and functionality, such as computations, conversions, and definitions. However, some advanced features, including step-by-step solutions, data downloads, and extended computation time, are only available with a paid subscription.
                    The paid subscription, called Wolfram Alpha Pro, offers additional features and benefits, including more computation time, access to expert-level knowledge, and customizable visualizations. The subscription is available on a monthly or annual basis, and the cost varies depending on the type of subscription and the user's location.
                    Students and educators may be eligible for discounted or free access to Wolfram Alpha Pro through their institution.
                </p>

                    <h5>Basic</h5>
                <p> -Personalized experience with customizable settings. (Does not include step-by-step solutions)<br>
                    - free with sign-in </p>   

                    <h5>Pro</h5>
                <p> -	Enhanced features with step-by-step solutions, increased computation time and calculator Web Apps<br>
                    -	$5.00 per month<br>
                    -	billed $60.00 annually<br>
                    -	Save $27.00 per year </p>   
                    
                    <h5>Pro Premium</h5>
                <p> -	Complete access to all features and priority customer support<br>
                    -	$8.25 per month<br>
                    -	billed $99.00 annually </p>

    
                <br>
                <br>
                <p>
            </div>
        </article>

        <article class = "perplexity" id = "perplexity">
            <div class = "perplexity-content reveal">
                <h3><a href="https://www.perplexity.ai/" style="color: rgb(255, 255, 255);">PERPLEXITY.AI</a></h3>
                <img src="/images/perplexity.png" alt="Perplexity.AI"><br><br><br>
            
                    <h2>WHAT IS PERPLEXITY.AI?</h2>
                <p>Aravind Srinivas and his team launched Perplexity AI, a question-answering engine powered by OpenAI API on January 20, 2023. The website is free to use and doesn't require registration or display ads. It offers 
                    accurate and detailed responses to complex questions using large language models, and combines search and chat functions. Perplexity AI provides a link to the source of information in a footnote, allowing users
                    to verify the accuracy of the answer and avoid misinformation. The engine is powered by OpenAI GPT-3 and large language models, which give it an edge over traditional search engines by providing direct and sourced
                    answers through advanced AI technology. Its promotional tagline is "LLM-powered products for search."
                </p>
                <br>
                <br>
                <br>
                
                    <h2>WHO CREATED PERPLEXITY.AI </h2>
                    <img src="/images/andy.jpg" alt="Andy Konwinski"><br><br>
                <p>A team consisting of experts from OpenAI, Meta, Quora, and Databrick, led by Aravind Srinivas, Denis Yarats, Johnny Ho, and Andy Konwinski, launched Perplexity AI in August 2022 with the aim of surpassing ChatGPT in chatbot technology. Perplexity AI, similar to ChatGPT, utilizes machine learning and Natural Language Processing to provide users with comprehensive responses to their queries. NLP is a component of machine learning that allows computers to understand and process human language, and it has various applications, including translation, chatbots, and voice assistants. Unlike ChatGPT, Perplexity AI has a dedicated mobile application that enables easy access on the go without any registration.
                </p>
                <br>
                <br>
                <br>
                   <h2>HOW DOES PERPLEXITY.AI WORK?</h2>
                <p> Perplexity.AI is a question-answering engine that uses large language models to provide accurate and detailed responses to complex questions. It combines search and chat functions and is powered by OpenAI GPT-3 
                    and other large language models, which enable it to provide direct and sourced answers through advanced AI technology. To use Perplexity.AI, users do not need to register or display ads and can access it for free 
                    through its website.The engine works by taking a user's question and using machine learning and natural language processing to analyze the question's context and generate a response. It utilizes large language
                    models that have been trained on vast amounts of data, enabling it to provide accurate and detailed answers. Perplexity.AI also provides a link to the source of information in a footnote, allowing users to verify 
                    the accuracy of the answer and avoid misinformation.
                </p>
                <br>
                <br>
                <br>
                    <h2>HOW TO USE PREPLEXITY.AI? </h2><br>
                <p>Perplexity AI can be easily accessed through its website or by downloading its iPhone app from the App Store. For PC users, simply follow the steps below to use it:<br><br>
                    1.	Open your web browser and search for "perplexity.ai."<br><br>
                    2.	Once the website loads, enter your queries in the "Ask anything..." section.<br><br>
                    3.	After entering your queries, you can review the answers and view the citations or sources of the answers.<br><br>
                    4.	You can also ask for follow-up questions to your initial queries.<br><br>
                <br>
                <br>
                    If you want to use Perplexity AI on your iPhone, follow these steps:<br><br>
                    1.	Download and open the Perplexity app from the App Store.<br><br>
                    2.  Type your question in the search bar at the bottom of the screen.<br><br>
                    3.	Tap on the blue arrow icon to feed your question to the AI chatbot tool.<br><br>
                    4.	Perplexity AI will provide an answer to your query along with the sources from where it gathered the information.<br><br><br>
                    <br>
                    For Android users, there is no dedicated app available on Google Play Store as of yet. However, you can still use Perplexity AI on your Android device by following these steps:<br><br>
                    1.	Open your Android browser and visit the Perplexity AI website.<br><br>
                    2.	Type your question in the search box and tap on the next arrow icon from your keyboard.<br><br>
                    3.	Perplexity AI will provide an answer to your query along with sources links.<br><br>
                    4.	You can type in more questions in the "Ask a follow-up" search bar below if you have any additional queries.<br><br>
                </p>
        
                    <br>
                    <br>
                        <h2>WHAT CAN YOU USE PERPLEXITY.AI FOR?</h2>
                    <p> •	Responding to Frequently Asked Questions: Perplexity AI can assist with answering frequently asked questions and even provide a "Popular Now" section tailored to your location and previous searches. While it is not specifically designed for this purpose, it can generate content for common queries.<br><br>
                        •	Summarizing Texts: In addition to generating content Perplexity AI can also summarize it. It offers a feature that allows users to view answers in either a concise or detailed format. The tool scrapes data from various websites to provide users with brief and accurate answers.<br><br>
                        •	Research: Perplexity AI can be a valuable tool for gathering information for research projects. The platform uses citations and references to sources, making it a reliable resource for researchers.<br><br>
                        •	Forecasting and Web Scraping Tool: Perplexity AI has access to the internet and can provide weather forecasts. It can also be used to scrape websites for information on various topics.<br><br>
                        •	Customer Service: Many businesses use Perplexity AI as part of their customer service to provide quick responses to customers' inquiries. Its use of large language models like GPT allows it to analyze and provide relevant answers to customer questions.<br><br>
                        •	Personal Assistant: Perplexity AI can also serve as a personal assistant for everyday tasks. Simple questions such as finding directions, checking the weather, or searching for a recipe can be answered quickly and efficiently.<br><br>
                        
                    </p>
                        <br>
                        <br>
                            <h2>WHY PERPLEXITY.AI IMPORTANT?</h2>
                    <p>       Perplexity.AI is important for several reasons. Firstly, it offers a fast and efficient way to answer queries and questions from a diverse range of fields. This saves time and effort for individuals and businesses that require a quick answer to their inquiries.
                            Secondly, it offers reliable and accurate information by generating content from multiple sources and citing references. This makes it an excellent research tool, especially for students and professionals in various fields.
                            Thirdly, it has the potential to revolutionize customer service by providing quick and accurate answers to customers' queries. This improves customer satisfaction and loyalty. Moreover, it has a feature that allows it to summarize text, which is helpful for people who need to quickly understand the key points of a lengthy document or article.
                            
                        </p>
      
                            <br>
                            <br>

                            <h2>FEATURES</h2>
                            <img src="/images/perf.png" alt="Perplexity Features">
                            <p> Perplexity AI offers a chatbot interface for its search engine, just like ChatGPT and Microsoft Bing. However, it stands out with its unique and exciting features, some of which are listed below:<br><br>
                                •	It provides citations to the results of the queries, which adds to its reliability as a source of information.<br><br>
                                •	Users do not need to create an account to access it, making it a secure and private platform for users who value privacy.<br><br>
                                •	It supports the Chrome extension, allowing users to access the search engine directly from their browser. Additionally, it is now available on iPhones, making it more accessible to a wider range of users.<br><br>
                                •	It uses Bird SQL, a Twitter interface that allows users to search for tweets that mention specific keywords, expanding its functionality beyond just web search.<br><br>
                                •	It can help users summarize texts, either in a concise or detailed manner, depending on their needs. This feature can be particularly useful for researchers or students who need to condense large amounts of information.<br><br>
                                •	Its voice command feature allows users to ask queries using their voice, although this feature is currently only available on iPhone.<br><br>
                                •	It can connect to the Internet to provide information about the weather and product recommendations, expanding its utility beyond just web search.<br><br>
            
                            </p>
                            <br>
                            <br>
                                <h2>PERPLEXITY.AI SUBSCRIPTION</h2>
                            <p>    Perplexity AI is currently a free platform and does not offer any premium plans or paid features for its users. This means that all users have access to the same features and capabilities, without the need for any paid subscriptions or upgrades. Additionally, there are no hidden fees or charges for using Perplexity AI, making it a cost-effective and accessible option for anyone looking for a reliable search engine and chatbot interface.
                                
                            </p>
            </div>
        </article>


        <article class = "nightcafe" id = "nightcafe">
            <div class = "nightcafe-content reveal">
                <h3><a href="https://nightcafe.studio/" style="color: rgb(255, 255, 255);">NIGHTCAFE</a></h3>
                <img src="/images/nightcafe.png" alt="NightCafe Studio"><br><br><br>
                <p>
                    <h2>WHAT IS NIGHTCAFE?</h2>
                    <p>The NightCafe Studio offers an art generation tool that uses AI technology to create various types of artwork and transform photos into stunning digital art pieces with ease. Utilizing
                     multiple AI art generation methods, NightCafe provides artists with digital art and NFTs that surpass the quality of their original photographs.
                    By using powerful and expensive GPUs, NightCafe reduces the rendering time and allows users to create more art pieces efficiently. Consequently, users can complete their digital art
                     projects within seconds. With NightCafe, artists retain the full copyright ownership of their generated photos, giving them complete control over their creations, whether they choose to make them public or not.
                </p>
                <br>
                <br>
                    <h2>WHO CREATED NIGHTCAFE?</h2>
                    <img src="/images/angus.jpg" alt="Angus Russell">
                    <p>Angus Russell created NightCafe in November 2019, and it has gained popularity for its ability to print art. With NightCafe, you can input your own images, select a style, and obtain stunning results.
                    The advancement of generative AI models is transforming modern technology, particularly in image recognition and text searches, where AI's ability to analyze existing data is already established. With 
                    its creative capabilities, generative AI models like NightCafe are heralding a significant technological shift that eliminates the need for projectors and stands to create images.
                    AI-enhanced generative models such as NightCafe are not only analyzing data but also creating it. This has implications for how visual art is approached in terms of business and ethics. NightCafe is a 
                    highly addictive tool that produces impressive results, but it should be used with caution.
                </p>
                <br>
                <br>
                    <h2>HOW DOES NIGHTCAFE WORK? </h2>
                   <p> NightCafe AI platform offers two options for users to create AI-generated art. The first option, called neural-style transfer, was the platform's initial strategy. To generate AI art using 
                    this method, users are required to input a photo and select a "style" image for the AI to replicate.
                    NightCafe AI platform offers two options for users to create AI-generated art. The first option, called neural-style transfer, was the platform's initial strategy. To generate AI art using 
                    this method, users are required to input a photo and select a "style" image for the AI to replicate. The second option is called GAN (Generative Adversarial Network), which involves training 
                    the AI to generate completely original images, rather than replicating a style image. This allows for more creative control over the artwork. NightCafe's GAN model is based on StyleGAN, a
                     popular GAN model used for generating realistic images.
                </p>
                <br>
                <br>
                    <h2>HOW TO USE NIGHTCAFE?</h2>
                   <p> If you want to use NightCafe, an AI art generator, follow these steps:</p>
                    <p> •	Access the NightCafe tool online by visiting their website and clicking on the “create” button. You will then be directed to either log into your existing account or create an instant temporary account.</p>
                    <p> •	Choose a model from the several options offered, such as Stable Diffusion, OpenAI DALL-E 2, Coherent (CLIP-Guided Diffusion), Artistic (VQGAN+CLIP), and Style Transfer.</p>
                    <p> •	Input your text prompt, describing what you want the AI to create, in as much detail as possible.</p>
                    <p> •	Choose a preset style from the many options offered, or enter advance mode to create your own styles, use and/or modify the presets, and use multiple prompts and prompt weights.</p>
                    <p> •	Select the number of images you want to create and the credits you want to use.</p>
                    <p> •	Generate your AI art piece, then edit, add to a collection, buy a print, share, or publish it. You can also see all of your “Creation Settings.”</p>
                    <p> •	Participate in the NightCafe community by sharing your art piece on social media and tag NightCafe to receive feedback from other users and earn credits that can be used to generate more art pieces.</p>
                </p>
                <br>
                <br>
                <p>
                    <h2>WHAT CAN YOU USE NIGHTCAFE FOR?</h2>
                    <p>NightCafe Creator can be used for various purposes. Here are some examples:</p>
                   <p> •	Art creation: With the help of NightCafe Creator, anyone can create beautiful and unique art in a matter of minutes. Whether you're an artist, designer, or just someone who enjoys creating art, NightCafe can help you bring your ideas to life.</p>
                   <p> •	Digital marketing: NightCafe Creator can be used to create visually appealing content for social media, blogs, and websites. By using the app, you can create unique images that stand out and grab the attention of your audience.</p>
                   <p> •	Personalization: NightCafe Creator can be used to create personalized art for yourself or your loved ones. You can use text prompts such as names, dates, or special messages to create one-of-a-kind artworks that make great gifts.</p>
                   <p> •	Education: NightCafe Creator can be used as a tool for education. Teachers can use the app to create visual aids for their lectures or to engage students in creative activities. Students can also use the app to create artworks that represent their ideas or concepts.</p>
                </p>
                <br>
                <p>
                <h2>WHY NIGHTCAFE IMPORTANT?</h2>
                <p>NightCafe is important because it demonstrates the power of AI in the creative field and opens up new possibilities for artistic expression. The app allows users to create unique pieces of art that would not have been possible without the use of AI technology. 
                It also offers an accessible platform for people who may not have the resources or skills to create traditional forms of art, allowing them to explore their creativity and share their work with others.<br>
                <br>
                Moreover, NightCafe can be used for various purposes, such as creating personalized art for home decor, designing digital marketing materials, or even generating artwork for video games and animations. The app's ability to create images based on text prompts also has potential applications in fields such as advertising, 
                where marketers could create custom visuals based on the content of their campaigns.</p>

            </p>
            <br>
            <p>
            <h2>NIGHTCAFE FEATURES</h2>
            <p> •	AI-based image generation from text: Nightcafe Creator uses advanced AI technology to automatically generate images based on the user's input text prompts. This innovative feature makes it easy for users to create unique artwork without any prior design skills.</p>
            <p> •	Multiple image styles: Nightcafe Creator offers a vast collection of image styles to choose from, catering to different tastes and preferences. Users can select their preferred style to create personalized artwork.</p>
            <p> •	Batch image creation: With Nightcafe Creator, users can generate multiple artworks in one go, saving them time and effort. This feature is ideal for those who need to create many images quickly.</p>
            <p> •	Custom image editing: After generating AI images, users can modify and edit them to suit their individual preferences. Nightcafe Creator allows users to add filters, adjust colors, and make other edits as needed.</p>
            <p> •	Printing options: Nightcafe Creator offers users the option to print their artwork. After generating and editing their images, users can order prints, which will be delivered to their doorstep.</p>
            <p> •	Image style conversion: Nightcafe Creator makes it easy for users to change the style of an image. This feature is particularly useful for users who want to try out different styles and see how their artwork would look like in different aesthetics.</p>
        </p>
        <img src="/images/night1.png" alt="NightCafe"><br><br>
        <img src="/images/night2.png" alt="NighCafe"><br><br>
        <br>
        <p>
        <h2>NIGHTCAFE SUBSCRIPTION</h2>
        <img src="/images/nightsub.png" alt="NightCafe Subscription"><br><br>
        <h5>Free</h5>
           <p>-$0/month</p>
           <p>-Single image</p>
           <p>-Slower processing</p>
           <p>-Low resolution</p>
           <br><br>
        <h5>Beginner</h5>
            <p>-$4.79/month</p>
            <p>-1,240 images/month</p>
            <p>-No ads</p>
            <p>-Credits roll-over & never expire</p>
            <p>-Advanced public search</p>
            <p>-Search your own private creations</p>
            <p>-PRO badge on your profile</p>
            <p>-Tip other creators</p>
            <p>-Earn topups and badges as normal</p>
            <p>-Pause, delay or cancel any time</p>
            <br><br>
        <h5>Hobbyist</h5>
            <p>-$7.99/month</p>
            <p>-1,640 images/month</p>
            <p>-No ads</p>
            <p>-Credits roll-over & never expire</p>
            <p>-Advanced public search</p>
            <p>-Search your own private creations</p>
            <p>-PRO badge on your profile</p>
            <p>-Tip other creators</p>
            <p>-Earn topups and badges as normal</p>
            <p>-Pause, delay or cancel any time</p>
            <br><br>
        <h5>Enthusiast</h5>
            <p>-$15.99/month</p>
            <p>-2,840 images/month</p>
            <p>-No ads</p>
            <p>-Credits roll-over & never expire</p>
            <p>-Advanced public search</p>
            <p>-Search your own private creations</p>
            <p>-PRO badge on your profile</p>
            <p>-Tip other creators</p>
            <p>-Earn topups and badges as normal</p>
            <p>-Pause, delay or cancel any time</p>
            <br><br>
        <h5>Artist</h5>
            <p>-$39.99/month</p>
            <p>-6,440 images/month</p>
            <p>-No ads</p>
            <p>-Credits roll-over & never expire</p>
            <p>-Advanced public search</p>
            <p>-Search your own private creations</p>
            <p>-PRO badge on your profile</p>
            <p>-Tip other creators</p>
            <p>-Earn topups and badges as normal</p>
            <p>-Pause, delay or cancel any time</p>
        </p>
        </div>
        </article>      

        <article class = "jasper" id = "jasper">
            <div class = "jasper-content reveal">
                <h3><a href="https://www.jasper.ai/" style="color: rgb(255, 255, 255);">JASPER.AI</a></h3>
                <img src="/images/jasper.png" alt="Jasper.AI"><br><br><br>
                
                        <h2> WHAT IS JASPER.AI? </h2>
                <p>     Jasper.ai is an AI-powered writing tool that can generate marketing copy, such as blog posts, product descriptions, ad copy, social media captions, and company bios. It offers a wide selection of templates for different scenarios,
                         making it easier to create content without starting from scratch. The tool is particularly useful for marketers and businesses of all sizes.<br><br>
                        Jasper AI is a software development company that was established in 2020 and is located in Austin, Texas. They recently introduced Jasper Chat, which has generated excitement since it builds on the success of OpenAI's ChatGPT.<br><br>
                        The platform leverages GPT-3 technology to produce human-like copy for various types of content, including landing pages, social media ads, emails, and blog posts. The team behind Jasper AI has grown to over 80 members and is dedicated 
                        to improving the platform to the point where it can streamline the writing process in various roles or replace them entirely.<br><br>
                        Jasper AI can produce written content in 26 languages, including English, Portuguese, and Japanese, making it a versatile tool for businesses worldwide. The platform has earned numerous industry accolades and boasts a rating of 4.9/5 from over 3,000 reviews across the web.<br>
                </p>
                <br>
                <br>
              
                        <h2>WHO CREATED JASPER.AI?</h2>
                        <img src="/images/dave'.webp" alt="Dave Rogenmoser">
                <p>     Jasper AI was founded by Dave Rogenmoser, Chris Hull, and John Phillip Morgan in Austin, Texas, and launched in January 2021. Initially called Jarvis, the application serves as an AI copywriter capable of generating written text within seconds. 
                        It relies on OpenAI's artificial intelligence models, allowing it to generate not only written content but also art.<br><br>
                        This application is a game-changer, transforming the digital content creation process by accelerating and enhancing the production of SEO-friendly copy. As a result, bloggers, copywriters, and marketing managers can benefit from Jasper AI's powerful capabilities, simplifying their workflow.
                </p>
                <br>
                <br>
                        <h2>HOW DOES JASPER.AI WORK?</h2>
                <p> Jasper AI is a multifaceted conversational AI platform that offers businesses the ability to develop chatbots, voice assistants, and virtual agents that engage customers in a natural and intuitive way. Its advanced Natural Language Processing (NLP) and Machine Learning (ML) algorithms allow it to understand user intent and offer relevant responses.<br><br>
                    In addition to being a conversational AI platform, Jasper AI is also a copywriting software that leverages artificial intelligence and natural language processing to produce written content. Formerly known as Jarvis, Jasper AI can analyze written content and provide feedback on areas that need improvement. <br><br>
                    To create written content, Jasper AI uses a large amount of data, and an algorithm reassembles content related to the input you provide. Jasper AI was founded in January 2021 and has already amassed over 70,000 customers.
                    
                </p>
                <br>
                <br>
                    <h2>HOW TO USE JASPER.AI?</h2>
                <p> To use Jasper AI, follow these steps:<br><br>
                    1.	Visit the Jasper AI website and create an account.<br> <br>
                    2.	Select the type of content you want to generate, such as blog posts, social media posts, product descriptions, or company bios.<br> <br>
                    3.	Choose from the many templates available for that type of content.<br><br>
                    4.	Customize the template by providing the necessary information, such as product details, company information, or keywords.<br><br>
                    5.	Click the "Generate" button to produce the AI-generated content.<br><br>
                    6.	Review the generated content and make any necessary edits or revisions.<br><br>
                    7.	Download or export the content in the desired format.<br><br>
                    
                </p>
                <br>
                <br>
                        <h2>WHAT CAN YOU USE JASPER.AI FOR?</h2>
                         
                <p>     Jasper AI can be used for a variety of purposes, including:
                        •	Generating marketing copy - Jasper AI can create written content for various marketing materials, such as blog posts, social media captions, product descriptions, and company bios.
                        •	Enhancing SEO - Jasper AI can generate SEO-friendly content by using targeted keywords and phrases, helping businesses rank higher in search engine results and drive more traffic to their websites.
                        •	Improving writing skills - Jasper AI can analyze written content and provide feedback on areas that need improvement, such as grammar, syntax, and tone.
                        •	Saving time and resources - Jasper AI can automate the process of generating written content, saving businesses time and resources that can be used elsewhere.
                        •	Supporting multilingual content creation - Jasper AI can generate content in 26 languages, making it a valuable tool for businesses with a global reach.
                        
                        </p>

                        <br>
                <br>
                        <h2>WHY JASPER.AI IMPORTANT?</h2>
                        
                <p>     Jasper AI is an important tool for content creators, writers, and businesses who need to produce high-quality content consistently. Jasper AI uses machine learning algorithms to analyze and understand natural language, allowing it to generate human-like responses to queries.
                        One of the key benefits of Jasper AI is that it can help writers save time by automating many of the tedious tasks associated with writing, such as researching topics, generating outlines, and optimizing content for search engines. This frees up writers to focus on more creative aspects of their work, such as crafting compelling narratives and engaging with their audience.
                        Another important feature of Jasper AI is its ability to provide feedback on the quality of written content. By analyzing factors such as readability, tone, and style, Jasper AI can identify areas for improvement and suggest changes that can help writers create more engaging and effective content.

                        </p>
                <br>
                <br>
        
                        <h2>FEATURES</h2>
                <p> •	Text and image AI generation: Jasper.ai can generate both text and images using artificial intelligence. It can create written content for various marketing materials, such as blog posts, social media captions, product descriptions, and company bios.<br> <br>
                    •	Integration with Grammarly and other Chrome extensions: Jasper.ai can be integrated with third-party tools such as Grammarly and other Chrome extensions to help improve the quality of the generated content.<br> <br>
                    •	Revision history: Jasper.ai has a revision history feature that allows users to access and restore previous versions of their work.<br> <br>
                    •	Auto-save: Jasper.ai has an auto-save feature that saves the work automatically, ensuring that no progress is lost in the event of a power outage or system crash.<br> <br>
                    •	Document sharing: Jasper.ai allows users to share documents with others, making collaboration and feedback easier.<br> <br>
                    •	Multi-user login: Jasper.ai allows multiple users to log in and work on a document simultaneously, making it ideal for team projects.<br> <br>
                    •	Plagiarism checker: Jasper.ai has a built-in plagiarism checker that ensures the generated content is original and not copied from other sources.<br> <br>
                    •	Brand voice customization: Jasper.ai allows users to customize the generated content to match their brand's voice, style, and tone. This ensures that the generated content is consistent with the brand's messaging and image.<br> <br>
                </p>
                <img src="/images/jasper1.webp" alt="Jasper.AI"><br><br>
                <img src="/images/jasper2.png" alt="Jasper.AI"><br><br>
                <img src="/images/jasper3.png" alt="Jasper.AI"><br><br>
                <br>
                <br>
                        <h2>JASPER.AI SUBSCRIPTION</h2>
                        <img src="/images/jaspersub.png" alt="Jasper Subscription"><br><br>
                        
                        <h5>Creator</h5>
                <p>     -	Freelancers, Marketers, and entrepreneurs who are ready to apply Generative AI to automate their daily work in their personalized Brand Voice. <br>
                        -	$39/month <br>
                        -	Everything in Free, plus: <br>
                        -	Unlimited* words generated by AI <br>
                        -	1 seat <br> 
                        -	50+ templates <br>
                        -	1 Brand Voice <br>
                        -	50 memories <br>
                        </p>
                <br>
                        <h5>Teams</h5>
                <p>     -	Small marketing teams who need to generate, create, and repurpose content for multiple campaigns for business outcomes. <br>
                        -	$99/month <br>
                        -	Everything in Creator, plus: <br>
                        -	Unlimited* words generated by AI <br>
                        -	3 seats. Each additional seat is $49/month when billed yearly. <br>
                        -	Documents & Workflows <br>
                        -	3 Brand Voices <br>
                        -	150 memories <br> </p>
                        <br>
                         <h5>Business</h5>
                <p>     -	Departments and organizations who need a secure, scalable, and customizable AI platform that meets technical needs and aligns your team. <br>
                        -	Custom Pricing <br>
                        -	Everything in Teams, plus: <br>
                        -	Unlimited* words generated by AI <br>
                        -	For teams who need 10+ seats with SSO <br>
                        -	Trusted by 100,000+ innovative companies worldwide <br>
                        -	Unlimited number of Brand Voices <br>
                        -	Unlimited memories <br>
                        </p>

            </div>
        </article>   

        <article class = "tome" id = "tome">
            <div class = "tome-content reveal">
                <h3><a href="https://tome.app/" style="color: rgb(255, 255, 255);">TOME.APP</a></h3>
                <img src="/images/tome.png" alt="Tome.App"><br><br><br>
                <p>
                        <h2>WHAT IS TOME.APP?</h2>
                    <p>Tome.app is a game-changer in the world of presentations. With its AI-powered features and intuitive drag-and-drop interface, this application makes it easy to transform any speech into a captivating story through storytelling.
                    Available on both the web and iOS, Tome offers a variety of classic options, such as adding visuals or text with just one click, making the creation process effortless and streamlined. In summary, Tome.app is a revolutionary new 
                    app for creating effective presentations through storytelling. It offers several key features such as AI-powered slide creation, automatic formatting, intuitive drag-and-drop operation and classic options like adding visuals or text with just one click.

                </p>
                <br>
                <br>
                <p>
                        <h2>WHO CREATED TOME.APP? </h2><br>
                        <img src="/images/tomefounder.webp" alt="Tome.App Founders"><br><br>
                        <b>Keith Peiris- Co-Founder and CEO at Tome</b><br>

                        <p>Keith Peiris is a Co-Founder and CEO at Tome (2020) and an Entrepreneur In Residence at Greylock (2020). In 2019, they were the Head of Product at Citizen, where they helped the company 10X its active users, reach #1 in the News category of the iOS App Store, 
                        and scale the largest contact tracer in the US. Keith also helped redesign the product for mainstream usage, hired the product management team (0-6), and briefly ran recruiting + HR. In 2018, they were Head of Product at Glossier, Inc. From 2016-2011, they were 
                        the Messaging & Camera AR Product Lead at Instagram, where they grew Instagram Direct more than 10X to 500M monthly active users. At Facebook (2011-2007), they were Manager of Product Management and worked on Predictive Search and Notifications, Graph Search, 
                        Facebook For Android, and the Rotational Product Management Program. Keith also founded and advised the University of Waterloo's nanorobotics team and helped them win the 2011 & 2013 NIST Mobile Microrobotics Challenge with their magnetically levitating 300 micron 
                        soccer playing robot. Keith Peiris attended the University of Waterloo from 2006 to 2011, graduating with a Bachelor of Applied Science (BASc) in Nanotechnology Engineering.</p>
                        
                        <b>Henri Lirian- Co-Founder, CPO at Tome</b><br>

                        <p>Henri Liriani is a Co-Founder and CPO of Tome, a position they have held since 2020. Previously, they were the Head of Product, Messenger Human Interfaces at Facebook from 2014-2020, where they led the Human Interfaces group and built the core messaging experience 
                        for "Lightspeed." Henri was also the Product Design Manager, Messenger Business, and Product Designer, Messenger at Facebook. Before that, Henri was Co-Founder of Craaave from 2013-2014. Prior to that, they were Senior Designer at Perfect, Inc from 2011-2013, and 
                        Visual Designer at Enhanced Labs from 2007-2011. Henri Liriani attended Boston College from 2011 to 2013, where they studied Islamic Political Philosophy & Arabic.
                </p>
                <br>
                <br>
                <p>
                        <h2>HOW DOES TOME.APP WORK?</h2>
                        <p>Tome.app is a great tool for making presentations that are compelling. It includes AI-powered slide generation, which makes use of artificial intelligence to create slides automatically from input from the user. Additionally, it offers automated formatting features 
                        that apply design aspects like font, colour, and space to make presentations seem polished and aesthetically attractive. Additionally, the app supports simple drag-and-drop functionality, making it simple to add and alter slides' elements. Additionally, it simplifies
                         and streamlines the production process by providing standard choices like adding images or text with a single click. Overall, Tome.app is a great tool for easily making presentations that are aesthetically beautiful and engaging thanks to its AI-powered slide design and automated formatting features.

                </p>
                <br>
                <br>

                <p>
                    <h2>HOW TO USE TOME.APP?</h2>
                    <p>Tome AI delivers a very basic and simple user experience, just like other AI solutions. You must first establish an account on the official website after visiting it. You also have the choice to go with Google and open an account, according to the developers. You will initially receive 500 credits after registering your account, and you may earn more by sharing your link with friends to refer them to Tome AI. You will be greeted with a dashboard with a few pre-made templates after providing all the information requested. To construct your presentation, take the following actions:</p>
                    <p>1.	The "Create" button is located in the upper right corner of your screen.</p>
                    <p>2.	In the "Create a presentation about..." area, type the subject of your presentation.</p>
                    <p>3.	Your presentation will be prepared after a brief delay.</p>
                    <p>4.	Either try again or stick with the presentation.</p>
                    <p>5.	Return to your dashboard where it will be waiting for you if you want to retain it.</p>
                    
                </p>
                <br>
                <br>
                <p>
                    <h2>TOME.APP FEATURES </h2>
                    <p>Together, these features make it easy for users to create visually appealing and engaging presentations that will capture the attention of their audience. Additionally, the time-saving features of Tome.app can help users to focus more on crafting their message and story, which will further enhance audience engagement.</p>
                    <p>Tome.app uses the power of AI to generate professional quality images that can be used in presentations. One of the key tools used by Tome.app for this function is DALL-E, an AI-based image generator developed by OpenAI.</p>
                    <p>DALL-E allows Tome.app to generate images using keywords or phrases describing what is to be represented in the image. For example, if a user enters the keyword “cat” into Tome.app, DALL-E can generate an image of a cat using advanced machine learning techniques.</p>
                    <p>By using DALL-E, Tome.app can not only generate professional quality images, but also ensure that the generated images match the theme of the presentation and are consistent with the user’s message. This allows Tome.app users to create visually appealing and professional presentations in record time.</p>
                    <p>Finally, Tome.app allows live and interactive integration of content from the Internet. This feature allows users to embed any type of content from the Internet, all in one place. Users can also embed their favorite tools such as Figma live to show their existing work as a connected part of their story.</p>
                    <b>According to the official website, here are its features:</b>
                    <p>• Templates</p>
                    <p>• Build a powerful story with any type of content<br>
                    Your narrative deserves more than text and images. Easily share a prototype, add 3D renderings, trim a video, or embed live content from the web to make your point more compelling.
                    <p>• Frictionless creation meets magic design.<br>
                    Focus on your idea, and Tome will take care of the rest. Drag-and-drop creation, responsive pages, and one-click themes mean you don't waste time aligning content or applying brand colors.<br><br>
                    <p>• Live, interactive content from the web.<br>
                    Embed anything from the web, in one place. Live integrations with your favorite tools like Figma let you showcase your existing work as a connected part of your story.<br><br>
                    <p>• Video narration that brings your story to life.<br>
                    Native video recording lets you talk through a nuanced point or simply add a personal touch to your story, even async.
                </p>
                <img src="/images/template1.png" alt="Tome.App"><br><br>
                <img src="/images/template1].png" alt="Tome.App"><br><br>
                <img src="/images/template2.png" alt="Tome.app"><br><br>
                <br>
                <br>
                </p>
                <h2>TOME.APP SUBSCRIPTION</h2><br>
                <img src="/images/tomesub.png" alt="Tome.App Subscription"><br><br>
                <b>Plans for any kind of storyteller.</b>
                <h5>Free</h5>
                <p>The perfect plan to get started with Tome. Free forever. Start for free.</p>
                <b>Tome creation </b>
                <p>•	Unlimited for individuals</p>
                <p>•	Limited creation for 2+ people</p>
                <b>AI compute credits</b>
                <p>•	500 AI credits upon sign-up</p>
                <h5>Pro</h5>
                <p>For power creators and teams of all sizes. $8. Per person/month billed annually or $10 billed monthly. Get Pro.</p>
                <b>Tome creation Unlimited</b>
                <p>•	Unlimited for individuals</p>
                <p>•	Unlimited for workspaces</p>
                <b>AI compute credits UnlimitedUnlimited</b>
                <p>•	Unlimited for individuals</p>
                <p>•	Unlimited for workspaces</p>
                <b>Everything in free, plus:</b>
                <p>•	Export to PDF</p>
                <p>•	Turn off Tome branding</p>
                <p>•	Custom logos</p>
                <p>•	Priority support</p>
                <h5>Enterprise</h5>
                <p>For organizations that need advanced controls. Get in touch</p>
                <b>Tome creation Unlimited</b>
                <p>•	Unlimited for individuals</p>
                <p>•	Unlimited for workspaces</p>
                <b>AI compute credits UnlimitedUnlimited</b>
                <p>•	Unlimited for individuals</p>
                <p>•	Unlimited for workspaces</p>
                <b>Everything in free, plus:</b>
                <p>•	Custom tile integrations</p>
                <p>•	White-glove template setup</p>
                <p>•	Workspace templates Coming Soon</p>
                <p>•	Custom fonts Coming Soon</p>
                <p>•	Custom sub-domains Coming Soon</p>
                <p>•	Advanced analytics Coming Soon</p>
                <p>•	Single sign-on & SAML Coming Soon</p>
                <p>•	Dedicated CSM & more Coming Soon</p>

            </div>
        </article>
                </div>
        
        <div class="card">
            <h3>References</h3>
            <ul class="columns">
            <li><a href="https://www.youtube.com/watch?v=fLh0ZaLfPjk">YouTube Video</a></li>
            <li><a href="https://openai.com/blog/chatgpt-plus">CHATGPT</a></li>
            <li><a href="https://en.wikipedia.org/wiki/ChatGPT">ChatGPT Wikipedia</a></li>
            <li><a href="https://chat-gpt.com/">CHATGPT Website</a></li>
            <li><a href="https://www.howtogeek.com/871065/chatgpt-how-to-use-the-ai-chatbot-for-free/">CHATGPT How-To Geek</a></li>
            <li><a href="https://www.digitaltrends.com/computing/how-to-use-openai-chatgpt-text-generation-chatbot/">CHATGPT Digital Trends</a></li>

            <li><a href="https://www.grammarly.com/about">GRAMMARLY</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Grammarly">Grammarly Wikipedia</a></li>
            <li><a href="https://www.thebalancemoney.com/grammarly-proofreading-and-grammar-checker-review-2062231">Grammarly Review</a></li>
            <li><a href="https://www.grammarly.com/blog/how-does-grammarly-work/">How Does Grammarly Work?</a></li>
            <li><a href="https://financesonline.com/how-does-grammarly-work-a-comprehensive-guide/">Grammarly Comprehensive Guide</a></li>

            <li><a href="https://quillbot.com/">QUILLBOT</a></li>
            <li><a href="https://www.pcguide.com/apps/what-is-quillbot/">What is QuillBot?</a></li>
            <li><a href="https://becomeawritertoday.com/quillbot-review/">QuillBot Review</a></li>
            <li><a href="https://www.onlinemarketingconnect.com/what-is-quillbot-how-to-use-it/">How to Use QuillBot</a></li>
            <li><a href="https://mywplife.com/software/quillbot-review/">QuillBot Review by MyWPLife</a></li>

            <li><a href="https://designs.ai/en/about-us">DESIGN.AI</a></li>
            <li><a href="https://kripeshadwani.com/designsai-review/">Design.ai Review</a></li>
            <li><a href="https://www.aitoolmate.com/designs-ai/">Design.ai on AI Toolmate</a></li>
            <li><a href="https://designs.ai/pricing">Design.ai Pricing</a></li>
            <li><a href="https://speechson.com/blog/en/designs-ai/">Design.ai Blog</a></li>

            <li><a href="https://uizard.io/">UIZARD</a></li>
            <li><a href="https://www.feedough.com/the-design-tool-for-non-designers-uizard-startup-review/">Uizard Startup Review</a></li>
            <li><a href="https://uizard.io/autodesigner/">Uizard AutoDesigner</a></li>
            <li><a href="https://uizard.io/pricing/">Uizard Pricing</a></li>
            <li><a href="https://www.aitoolmate.com/uizard/">Uizard on AI Toolmate</a></li>

            <li><a href="https://www.wolframalpha.com/">WOLFRAM ALPHA</a></li>
            <li><a href="https://en.wikipedia.org/wiki/WolframAlpha">Wolfram Alpha Wikipedia</a></li>
            <li><a href="https://computer.howstuffworks.com/internet/basics/wolfram-alpha.htm">HowStuffWorks - Wolfram Alpha</a></li>
            <li><a href="https://en.ryte.com/wiki/Wolfram_Alpha">Ryte - Wolfram Alpha</a></li>
            <li><a href="https://www.techradar.com/reviews/wolfram-alpha-search-engine">TechRadar - Wolfram Alpha Review</a></li>

            <li><a href="https://www.perplexity.ai/">PERPLEXITY</a></li>
            <li><a href="https://decrypt.co/126127/review-perplexity-ai-the-chatbot-stepping-up-to-challenge-chatgpt">Perplexity AI Review by Decrypt</a></li>
            <li><a href="https://www.pcguide.com/apps/perplexity-ai/">Perplexity AI on PCGuide</a></li>
            <li><a href="https://aioptimistic.com/what-is-perplexity-ai/">What is Perplexity AI?</a></li>
            <li><a href="https://aitoolmall.com/chatbot/perplexity-ai/">Perplexity AI on AI Toolmall</a></li>

            <li><a href="https://nightcafe.studio/">NIGHCAFE</a></li>
            <li><a href="https://creativeais.com/nightcafe-studio-guide/">Nightcafe Studio Guide</a></li>
            <li><a href="https://www.digitbin.com/what-is-nightcafe-ai/">What is Nightcafe AI?</a></li>
            <li><a href="https://dataconomy.com/2022/10/12/nightcafe-ai-image-generator-creator-how/">Nightcafe AI Image Generator</a></li>
            <li><a href="https://nightcafe.studio/blogs/info/is-nightcafe-free">Is Nightcafe Free?</a></li>

            <li><a href="https://www.jasper.ai/free-trial?_from=ads&fp_sid=1-b-082b49b7e7d1107cb40c2d7597a427e0">JASPER.AI</a></li>
            <li><a href="https://blog.hubspot.com/marketing/jasper-ai">Jasper AI Blog</a></li>
            <li><a href="https://zapier.com/blog/jasper-ai/">Jasper AI on Zapier Blog</a></li>
            <li><a href="https://www.bitcatcha.com/research/jasper-ai-review/">Jasper AI Review by Bitcatcha</a></li>
            <li><a href="https://www.digitaltrends.com/computing/jasper-ai-chatgpt-alternative/">Jasper AI as a ChatGPT Alternative</a></li>

            <li><a href="https://tome.app/">TOME.APP</a></li>
            <li><a href="https://dataconomy.com/2023/01/25/what-is-tome-ai-how-to-presentation-slides/">Tome AI & Presentation Slides</a></li>
            <li><a href="https://ai.plainenglish.io/revolutionizing-presentations-a-look-at-tome-app-the-ai-powered-storytelling-app-18f5b27d711a">Tome App - AI-Powered Storytelling</a></li>
            <li><a href="https://www.ghacks.net/2023/02/21/what-is-tome-ai-everything-you-need-to-know/">Tome AI Everything You Need to Know</a></li>
            <li><a href="https://saasreviews.org/ai-content-writing/tome-app-ai-review/">Tome App Review by Saas Reviews</a></li>
        </ul>
    </div>


        <footer>
            <p>Braint Bots. All rights reserved 2023</p>
        </footer>


    </body>
</html>