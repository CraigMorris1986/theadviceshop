<?php require("dbconnect.php"); ?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $bad_site_name ?> - Advisers</title>
        <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
    </head>

    <body>
    <?php include("custom_header.php"); ?>
    <?php include("inc_nav.php"); ?>
    <?php include("values.php"); ?>
    <h2>Advisors</h2>
    <div id="content">
        <p>You want some advise? Oh, I'll give you some advise...</p>
    </div>
    <p>&nbsp;</p>
    <section id="features" class="clearfix">
        <div id="first">
            <h2>Adolf "Mein Furer" Hitler</h2>
            <a href="<?php echo $hitler_url ?>">
                <img class="img-circle" src="images/Adolf_Hitler_Berghof-1936.jpg" height="250" alt="Gandhi"></a>
            <blockquote>If you tell a big enough lie and tell it frequently enough, it will be believed..</blockquote>
        </div>
        <div id="second">
            <h2>Joesph "For the Motherland" Stalin</h2>
            <a href="<?php echo $stalin_url ?>">
                <img class="img-circle" src="images/440px-Stalin_Full_Image.jpg" height="250" alt="Dalai Lama"></a>
            <blockquote>Death is the solution to all problems.</blockquote>
        </div>
        <div id="third">
            <h2>Vlad "Dracula" the Third</h2>
            <a href="<?php echo $vlad_url ?>">
                <img class="img-circle" src="images/Vlad_Tepes_002.jpg" height="250" alt="Vanilla Ice"></a>
            <blockquote>I vant to suck your blood bleh bleh...</blockquote>
        </div>
    </section>
    <?php include("custom_footer.php"); ?>
    </body>
    </html>
<?php
