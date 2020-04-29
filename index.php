<?php
/*
        DYNAMIC INCLUSION PAGE
    */
session_start();

ob_start();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'accueil';
}

/*
* AUTOLOADER
*/
require 'app/Autoloader.php';
app\Autoloader::register();

?>
<!-- SITE START -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- HEADER -->
    <!-- INCLUDE HEADER PAGE -->
    <?php require('./includes/head.php'); ?>
</head>

<body>
    <!-- BODY -->
    <!-- INCLUDES NAVBAR PAGE -->
    <?php
    require('./includes/navbar.php');

    ?>
    <main>
        <!-- MAIN -->
        <?php
        /*
            CALL DYNAMIC PHP PAGE
        */
        $file = "./pages/" . $p . ".php";
        if (file_exists($file)) {
            require($file);
        } else {
            $file = "./pages/back/" . $p . ".php";
            if(file_exists($file)){
                require($file);
            } else {
                echo 'Oops an error has occured !';
            }
        }
        ?>
        <!-- END MAIN -->
    </main>
    <!-- END BODY -->
    <script src="https://rwf.s3.ruralwebfactory.fr/G2/GROUPE-2/remy/webmag-agency/includes/js/jquery.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script defer src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

    <?php
    /**
     * CALL DYNAMIC JS FILE
     */
    $jsfile = "./includes/js/" . $p . ".js";
    if (file_exists($jsfile)) {
        echo '<script defer src="' . $jsfile . '"></script>';
    }
    ?>
    <script defer src="./includes/js/navbar.js"></script>
</body>
<footer class="page-footer bg-color-secondary">
    <!-- FOOTER START -->
    <!-- INCLUDE FOOTER PAGE -->
    <?php require('./includes/footer.php'); ?>
    <!-- END FOOTER -->
</footer>

</html>
<!-- SITE END -->