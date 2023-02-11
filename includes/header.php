<?php  
require 'config/config.php';

if(isset($_SESSION['username'])){
    $userLoggedIn = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username='$userLoggedIn'";
    $userDetails = mysqli_query($con,$query);
    $userName = mysqli_fetch_assoc($userDetails);
}else {
    header("location:register.php");
}

?>

<html>
<head>
	<title>Welcome to infobot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/41e5f9059a.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="container-fluid top_header shadow-sm">
           <span class="login_header">Infobot</span>
           <a href="#">
            
           </a>
           <a href="includes/handlers/logout.php">
            <i class="i fa-solid fa-arrow-right-from-bracket fa-2x"></i>
           </a>
           <a>
            <i class="i fa-solid fa-gear fa-2x"></i>
           </a>
           <a>
            <i class="i fa-solid fa-user-group fa-2x"></i>
           </a>
           <a>
            <i class="i fa-regular fa-bell fa-2x"></i>
           </a>
           <a>
            <i class="i fa-regular fa-envelope fa-2x"></i>
        </a>
           <a>
            <i class="i fa-solid fa-house fa-2x"></i>
           </a>
           <a>
            <?php echo $userName['username']; ?>
           </a>
        </div>
    </nav>
