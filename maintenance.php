<!DOCTYPE html>
<html>
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
            
            <h2>Maintenance - Phase 5</h2>
            <img src="./img/maintenance.jpg">
            <p>
                Now that the code has been deployed, it needs to be maintained. This includes bug fixes, design changes, and adaptation. Bugs occur in every
                application and when they're discovered they need to be squashed. Design changes can be feature requests or design changes that didn't work as
                intended. Adaptation occurs when the current code isn't functioning as intended. An example can be third party API's that have been changed or 
                feature deprecation happens. The application needs to be maintained to function properly.
            </p>
            
            <p>
                After maintenance the life cycle begins again with design. If a new feature is to be added, a new design phase and following phases are needed.
            </p>
               
            <h3>
                <a href="./design.php">Phase 1</a>
            </h3>
        </div>
        
        <footer>
            <h5>Information about the software development lifecycle can be found here</h3>
            <a href="https://www.tutorialspoint.com/sdlc/sdlc_overview.htm">SDLC Overview</a>
        </footer>
    </body>
    <!-- closing body -->

</html>