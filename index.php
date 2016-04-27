<?php
    session_start();

    if(!isset($_SESSION['lang']))
    {
            $_SESSION['lang'] = "sr";
    }

    if(isset($_POST['lang']))
    {
            $_SESSION['lang'] = $_POST['lang'];
    }
?>

<?php include 'translation.php'; ?>
<?php include 'views/index.php'; ?>