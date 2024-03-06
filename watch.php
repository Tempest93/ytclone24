<?php
$hideNav = true;
    require_once('includes/header.php');

    if(!isset($_GET["id"])) {
        ErrorMessage::show("No ID passed into page");
    }

    $video = new Video($con, $_GET["id"]);
    $video->incrementViews();

   
?>


    <video controls autoplay onended="showUpNext()">
        <source src= "<?php echo $video->getFilePath();?>"
        type="video/mp4">
    </video>
</div>

<script>
    initVideo("<?php echo $video->getId(); ?>", "<?php echo $userLoggedIn; ?>");
</script>