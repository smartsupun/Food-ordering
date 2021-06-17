<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   <div class="container-fluid">
     <div class="row">
        <div class="col-md-3"></div>
        
        <div class="col-md-6">
        <form class="login-form jumbotron" method="post" action="login1.php" id="login-form">
                    <div class="login-heading">
                        <h4>Password Reset</h4>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" required class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="input-group mb-3"  >
                        <input type="password" name="password" required class="form-control" placeholder="Password"
                        id="login-password">

                        <span class="input-group-text" id="login-show-password">
                        <i class="fas fa-eye-slash" id="login-eye-slash"></i>
                        <i class="fas fa-eye" style="display: none;" id="login-eye"></i>
                        </span>
                    </div>
                    <div>
                     <?php 
                        if(isset($response)){
                            echo "<h6 style='color:red;text-align:center'>$response</h6>";
                        }else{
                            echo "<h6 style='text-align:center'></h6>";
                        }
                     ?>
                    </div>
                    <!-- <div class="login-forgot-password">
                        <a href="" style="color: #d35f17;">
                        forgot password?
                        </a>
                    </div> -->
                    
                    <div class="login-btns">
                        <input type="submit"  id="login-submit" class="btn btn-primary" title="Reset" name="login" />
                        <!-- <a href="signin.php" id="login-signin" class="btn btn-primary">Sign In</a> -->
                    </div>
                </form>
        </div>
        
        <div class="col-md-3"></div>
     </div>
   </div>
</body>
</html>