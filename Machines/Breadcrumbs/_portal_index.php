"<?php session_start([
    'cookie_lifetime' => 86400,
]);
$LOGGED_IN = false;
if(isset($_SESSION['loggedIn'])){
    $LOGGED_IN = true;
}
else{
    header("Location: login.php");
    die();
}
?>
<html lang="en">
    <head>
        <title>Binary</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="assets/css/all.css">
    </head>

    <nav class="navbar navbar-default justify-content-end">
        <div class="navbar-header justify-content-end">
            <button type="button" class="navbar-toggle btn btn-outline-info p-3 m-3" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-hamburger"></i></button>
        </div>

        <div class="collapse navbar-collapse justify-content-end mr-5">
             <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-right" href="#"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link text-right" href="php/issues.php"><i class="fa fa-check" aria-hidden="true"></i> Issues</a></li>
                <li class="nav-item"><a class="nav-link text-right" href="php/users.php"><i class="fa fa-user" aria-hidden="true"></i> User Management</a></li>
                <li class="nav-item"><a class="nav-link text-right" href="php/files.php"><i class="fa fa-file" aria-hidden="true"></i> File Management</a></li>
\t\t\t\t<li class="nav-item"><a class="nav-link text-right" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul> 
        </div>
    </nav>

    <body class="bg-dark text-white">
        <main class="container">
            <div class="row text-center">
                <div class="col-md">
                    <h1 id="main-title"><span class="text-danger main-title">Binary</span>  Ltd.</h1>
                    <h3>Dashboard</h3>
                    <hr style="background-color:white;" class="w-50 mb-5">
                    <h5><?php    
                        echo "User: <b>".$_SESSION['username']."</b><br>";
                    ?></h5>
                    <h5><?php    
                        echo "Role: <b>".$_SESSION['role']."</b><br>";
                    ?></h5>
                </div>
            </div>
            <div class="row text-center pt-5">
                <div class="col-md">
                    <a class="btn-outline-orange mx-2" href="php/issues.php">Check tasks</a>
                    <button type="button" onclick="alert('Disabled for economical reasons')" class="btn-outline-orange mx-2">Order pizza</button>
                    <a class="btn-outline-orange mx-2" href="php/users.php">User management</a>
                    <a class="btn-outline-orange mx-2" href="php/files.php">File management</a>
                </div>
            </div>
        </main>
        <?php include "includes/footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src='assets/js/main.js'></script>
    </body>


</html>
"