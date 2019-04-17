<?php require("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Home</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php"); ?>
<?php include("inc_nav.php"); ?>
<?php include("values.php"); ?>
<h2>Advisors</h2>
<div id="content">
  <p>You want only the very best advice, so we have only the best advisors...</p>
</div>
<p>&nbsp;</p>
<section id="features" class="clearfix">
    <div id="first">
    <h2>Gandhi</h2>
        <a href="<?php echo $gandhi_url ?>">
            <img class="img-circle" src="images/Gandhi_250.jpg" height="250" alt="Gandhi"></a>
            <blockquote>Many sage words...</blockquote>
    </div>
    <div id="second">
        <h2>Dalai Lama</h2>
        <a href="<?php echo $dalai_lama_url ?>">
            <img class="img-circle" src="images/Dalai_250.jpg" height="250" alt="Dalai Lama"></a>
        <blockquote>Seek the happiness...</blockquote>
    </div>
    <div id="third">
    <h2>Vanilla Ice</h2>
        <a href="<?php echo $vanilla_ice_url ?>">
            <img class="img-circle" src="images/VanillaIce_250.jpg" height="250" alt="Vanilla Ice"></a>
        <blockquote>Stop. Collaborate and listen.</blockquote>
    </div>
</section>
<?php include("inc_footer.php"); ?>
</body>
</html>
