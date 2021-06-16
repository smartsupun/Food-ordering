<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https:ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/signin.js"></script>


    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/mobster.css">

</head>

<body>
    <div class="login container-fluid">
        <div class="login-wrapper row">
        <div class="col-md-6 wow fadeInLeft login-image-div"><img
                    src="./images/pngfind.com-pizzaiolo-png-3304643.png" class="floating-animate login-image"
                    alt="" style="width: 500px;" srcset=""></div>
            <div class="col-md-6 wow zoomIn form-signin">
                <form class="login-form jumbotron" id="login-form">
                    <div class="login-heading">
                        <h4>Sign In</h4>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="signin-input">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="signin-input" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="signin-input" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="signin-input" placeholder="Re-Enter Password">
                    </div>
                    <div class="login-forgot-password">
                        
                        <div class="form-group">
                            <p style="margin: 0;" class="form-text text-muted">If forget password? </p>
                            <input type="password" class="form-control" id="signin-input" placeholder="What is your pet name?">
                        </div>
                    </div>
                    <!-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                    <div class="login-btns">
                        <button type="submit" id="login-submit" class="btn btn-primary">Create Account</button>
                        
                        <a href="login1.php" id="login-signin" class="btn btn-primary">Log In</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>


</body>

</html>


<script src="js/wow.min.js"></script>

<script src="js/mobster.js"></script>
<script src="js/jquery.min.js"></script>