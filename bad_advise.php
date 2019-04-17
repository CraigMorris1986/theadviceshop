<?php include("functions.php");
include("values.php"); ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $bad_site_name ?> - Home</title> <!-- made the site name a variable in values.php for reuse -->
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
<?php
//include( "inc_header.php" );
include("custom_header.php");
include( "inc_nav.php" ); ?>
<section id="content">
    <h2>Welcome to <?php echo $bad_site_name ?> </h2>

    <p><strong>You need advice. Tough luck there buddy.</strong>.</p>
    <p>These days, it's impossible to <em>really</em> succeed. So don't even try.</p>

    <p>What we do and who we do it for is <strong>none</strong> of your business. If you want advise we got some floating around here somewhere. </p>

    <p><a href="bad_advisors.php">Just ask our experts.</a></p>

    <h3>Services</h3>
    <p><img src="images/womanHeadset.jpg" alt="" width="310" height="200"
            class="rightImage"/>For all advice related to:</p>
    <ul>
        <!--        <li>Learning</li>-->
        <!--        <li>Relationships</li>-->
        <!--        <li>Technology</li>-->
        <!--        <li>Coffee</li>-->
        <!--        <li>and so much more...</li>-->
        <?php make_list_items($bad_services) ?>
        <!-- function uses a foreach loop to make html <li> items from an array -->
    </ul>

</section>
<?php include("custom_footer.php"); ?>
</body>
</html>