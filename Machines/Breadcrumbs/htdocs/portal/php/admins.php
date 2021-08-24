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
                <li class="nav-item"><a class="nav-link text-right" href="../auth/login.php"><i class="fas fa-lock"></i> Login</a></li>
        </div>
    </nav>

    <body class="bg-dark">
        <main class="main">
            <div class="row justify-content-center">
                <div class="col-sm-1 col-lg-6 mt-5">
                    <h1 class="text-center text-white">Current Helpers<h1>
                    <table class="table table-dark mx-2" id="noteTable">
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td><span class="text-warning">Alex</span></td>
                            <td><span class="text-secondary">Offline</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-warning">Emma</span></td>
                            <td><span class="text-secondary">Offline</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-warning">Jack</span></td>
                            <td><span class="text-danger">Snoozing</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-warning">John</span></td>
                            <td><span class="text-success">Active</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-warning">Lucas</span></td>
                            <td><span class="text-secondary">Offline</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-warning">Olivia</span></td>
                            <td><span class="text-success">Active</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-warning">Paul</span></td>
                            <td><span class="text-success">Active</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-warning">William</span></td>
                            <td><span class="text-danger">Snoozing</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <p class="text-center text-danger"><i class="fas fa-exclamation-circle"></i> Helper contact information and position are not publicly available. Kindly refer to the contact sheet given to you during orientation.</p>
        </div>
        </main>

        <?php include "../includes/footer.php"; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script type="text/javascript" src='../js/sixtimes.js'></script>
    </body>


</html>
