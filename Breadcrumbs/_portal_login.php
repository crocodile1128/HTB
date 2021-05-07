"<?php
require_once 'authController.php'; 
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
<body class="bg-dark text-white">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 form-div">
                <div class="alert alert-danger">
                    <p class="text-dark">Restricted domain for: <span class='text-danger'><?=$IP?></span><br> Please return <a href="../">home</a> or contact <a href="php/admins.php">helper</a> if you think there is a mistake.</p>
                </div>
                <h3 class="text-center">Login <i class="fas fa-lock"></i></h3>
                <form action="login.php" method="post">
                    <?php if(count($errors)>0):?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach?>
                    </div>
                    <?php endif?>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control form-control-lg">
                    </div>
\t\t\t\t\t
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                    
                    <input value="0" name="method" style="display:none;">

                    <div class="form-group"> 
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>

                    <p class="text-center">Dont have an account? <a href="signup.php">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
</body>
</html>
"