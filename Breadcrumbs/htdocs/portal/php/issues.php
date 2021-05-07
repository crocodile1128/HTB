<?php session_start();
$LOGGED_IN = false;
if(isset($_SESSION['loggedIn'])){
    $LOGGED_IN = true;
    require '../db/db.php';
}
else{
    header("Location: ../auth/login.php");
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
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/all.css">
    </head>

    <nav class="navbar navbar-default justify-content-end">
        <div class="navbar-header justify-content-end">
            <button type="button" class="navbar-toggle btn btn-outline-info p-3 m-3" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-hamburger"></i></button>
        </div>

        <div class="collapse navbar-collapse justify-content-end mr-5">
             <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-right" href="../index.php"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link text-right" href="#"><i class="fa fa-check" aria-hidden="true"></i> Issues</a></li>
                <li class="nav-item"><a class="nav-link text-right" href="users.php"><i class="fa fa-user" aria-hidden="true"></i> User Management</a></li>
                <li class="nav-item"><a class="nav-link text-right" href="files.php"><i class="fa fa-file" aria-hidden="true"></i> File Management</a></li>
                <li class="nav-item"><a class="nav-link text-right" href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </div>
    </nav>
    <body class="bg-dark">
        <main class="main">
            <div class="row justify-content-center">
                <div class="col-sm-1 col-lg-6 mt-5">
                    <h1 class="text-center text-white">Issues<h1>
                    <?php 
                        include '../includes/issuesController.php';
                        if($data !== NULL){?>
                        <table class="table table-dark mx-2" id="noteTable">
                            <thead>
                                <tr class="my-5">
                                    <th scope="col">ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Description</th>
                                    <th scope="col" class="text-center">Nuke it</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                        foreach($data as $d){
                                            echo '<tr class="my-5" id='.$d['id'].'>';
                                            echo '<td scope="row">'.$d['id'].'</td>';
                                            if($d['title'] === "URGENT"){
                                                echo '<td scope="row" class="text-warning">'.$d['title'].'</td>';
                                            }
                                            else{
                                                echo '<td scope="row">'.$d['title'].'</td>';
                                            }
                                            if($d['title'] === "URGENT"){
                                                echo '<td scope="row" class="text-warning">'.$d['description'].'</td>';
                                            }
                                            else{
                                                echo '<td scope="row">'.$d['description'].'</td>';
                                            }
                                            
                                        ?>
                                            <th scope="row" class="text-center">
                                                <button class="btn btn-danger p-2 mx-auto" onclick='alert("Awaiting apporval")'>
                                                    <i class="fas fa-radiation"></i>
                                                </button>
                                            </th>
                                        <?php } ?>
                                </tr>
                                </tbody>
                    <?php
                         } else{
                             echo '<hr class="bg-white w-50">';
                             echo '<h5 id="statMessage" class="text-center text-white">Nothing to display now.</h5>';
                         }
                         
                    ?>
                    </table>
                </div>
            </div>
        </div>
        </main>

        <?php include "../includes/footer.php"; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script type="text/javascript" src='../js/sixtimes.js'></script>
    </body>


</html>
