<?php include("values.php") ?>
<footer id="customFooter">
    <!--    <p class="copyright">&copy; 2016, The Advice Shop.</p>-->
    <p class="copyright">&copy; <?php echo date("Y") . " " . $bad_site_name ?>.</p>
    <!-- used php date function to get current year and used $site_name var in values.php for name -->
    <p class="user"><?php
        // echo $_SESSION['blah']; // demo undefined variable
        if (isset($_SESSION['username'])) {
            echo "invalid username, try again buddy";
        } else {
            echo "(Not logged in)";
        }
        ?></p>
</footer>

