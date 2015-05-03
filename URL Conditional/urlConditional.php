<?php
/**
 * Created by PhpStorm.
 * User: RichardL33
 * Date: 4/20/15
 * Time: 11:22 AM
 */

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

?>

<?php
$curPageURL = curPageURL();
if ($curPageURL == "http:// <-- YOUR URL --> "){
    ?>

    <!-- DO SOMETHING -->

<?php } ?>