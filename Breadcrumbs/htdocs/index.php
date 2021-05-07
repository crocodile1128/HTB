<?php session_start();
?>
<html lang="en">
    <head>
        <title>Library</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/all.css">
    </head>

    <nav class="navbar navbar-default justify-content-end">
        <div class="navbar-header justify-content-end">
            <button type="button" class="navbar-toggle btn btn-outline-info p-3 m-3" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-hamburger"></i></button>
        </div>

        <div class="collapse navbar-collapse justify-content-end mr-5">
             <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-right" href="#"><i class="fas fa-home"></i> Home</a></li>
            </ul> 
        </div>
    </nav>
    <body class="bg-dark text-white">
        <main class="container-fluid">
            <div class="container-fluid bg-dark text-center pt-5" id="start">
                <div class="container-fluid">
                    <h1 id="main-title">Library</h1>
                    <hr style="background-color:white;" class="w-50 mb-5">
                </div>
                <div class="container-fluid pt-5">
                    <a class="btn-outline-orange" href="php/books.php">Check books.</a>
                </div>
            </div>
        </main>
        <?php include "includes/footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src='js/main.js'></script>
    </body>


</html>
