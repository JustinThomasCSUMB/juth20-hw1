<!DOCTYPE html>
<html lang=en-us>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8"/>
        <title> Justin Thomas: CST336 HW1</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Justin Thomas HW1 - SDLC </h1>
        </header>
        <hr>
        
        <nav>
            <a href="index.php">Home</a>
            <a href="planning.php">Planning</a>
            <a href="design.php">Design</a>
            <a href="maintenance.php">Maintenance</a>
        </nav>
        <br/>
        
        <div id="content">
            <h1>Software Development Life Cycle</h1>
            <article>
            <h2>Planning - Phase 1</h2>
            <img src="./img/planning.jpg" alt="Planning">
            <p>
                Often times planning is overlooked which can cause wasted time later in development. This phase allows
                the team to vizualize, conceptualize, and theorize the workflow. This phase can be considered a high level
                overview before the nitty gritty is discussed.
            </p>
            </article>
            <h2>Analysis - Phase 2</h2>
            <img src="./img/analysis.jpg" alt="Analysis">
            <p>
                After the team has a good understanding of how the project will function and flow, the team works together
                in the analysis phase to try and find possible holes or areas that were overlooked. When working with
                SaaS products, this phase can be crutial to understand how each service tier will function.
            </p>
            
            <h3>
                <a href="./design.php">Phase 3</a>
            </h3>
            
        </div>
        
       <footer>
            <h5>Information about the software development lifecycle can be found here</h5>
            <a href="https://www.tutorialspoint.com/sdlc/sdlc_overview.htm">SDLC Overview</a>
        </footer>
    </body>
    <!-- closing body -->

</html>