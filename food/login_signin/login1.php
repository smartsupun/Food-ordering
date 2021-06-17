<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https:ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/signin-login.js"></script>

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/mobster.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
    <div class="login container-fluid">
        <div class="login-wrapper row">
            <div class="col-md-6 wow fadeInUp">
                <form class="login-form jumbotron" id="login-form">
                    <div class="login-heading">
                        <h4>Log In</h4>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="input-group mb-3"  >
                        <input type="password" class="form-control" placeholder="Password"
                        id="login-password">

                        <span class="input-group-text" id="login-show-password">
                        <i class="fas fa-eye-slash" id="login-eye-slash"></i>
                        <i class="fas fa-eye" style="display: none;" id="login-eye"></i>
                        </span>
                    </div>
                    <div class="login-forgot-password">
                        <a href="" style="color: #d35f17;">
                        forgot password?
                        </a>
                    </div>
                    
                    <div class="login-btns">
                        <button type="submit" id="login-submit" class="btn btn-primary">Submit</button>
                        <a href="signin.php" id="login-signin" class="btn btn-primary">Sign In</a>
                    </div>

                    
                </form>
            </div>
            
            <div class="col-md-6 wow fadeInDown login-image-div"><img  src="./images/login.png" class="floating-animate login-image" alt="" style="width: 600px;" srcset=""></div>
        </div>
    </div>
    

</body>

</html>


<script src="js/wow.min.js"></script>

<script src="js/mobster.js"></script>
<script src="js/jquery.min.js"></script>