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
            
            <h2>Design - Phase 3</h2>
            <img src="./img/design.png" alt="Design">
            <p>
               Design can be viewed as a lower level planning phase where classes, definitions and api structures are defined.
               A team can use this phase to go over finer details that were not discussed in the planning phase. After this
               phase is complete, the team should have a sound proof concept going into implementation.
            </p>
            
            <h2>Implementation - Phase 4</h2>
            <img src="./img/implement.jpg" alt="Implementation">
            <p>
               Implementation is where the actual programming begins. There will be pseudo code along the way to prove a concept, but
               this phase is programming everything that the other three phases designed. After success deployment comes maintenance.
            </p>
            
            <h3>
                <a href="./maintenance.php">Phase 5</a>
            </h3>
        </div>
        
        <footer>
            <h5>Information about the software development lifecycle can be found here</h5>
            <a href="https://www.tutorialspoint.com/sdlc/sdlc_overview.htm">SDLC Overview</a>
        </footer>
    </body>
    <!-- closing body -->

</html>