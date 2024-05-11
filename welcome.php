<?php

    session_start();
    require_once("LineLogin.php");

    if(!isset($_SESSION['profile'])){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Login PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<?php require_once ("nav.php")?>

<div class="container">
    <div class="bg-light p-5 rounded">
        <?php 
            if (isset($_SESSION['profile'])){
                $profile =$_SESSION['profile'];
            }
        ?>
        <h1>Welcome <?php echo $profile->name; ?></h1>
        <p class="lead">Your Email: <?php echo $profile->email;?></p>
        <img src="<?php echo $profile->picture ?>" class="rounded" alt="profile picture">
    </div>
</div>


    
</body>
</html>