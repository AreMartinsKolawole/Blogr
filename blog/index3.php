<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>Login | Blogr</title>
</head>

<body>
    <div name="container">
        <div class="body">
            <div class="navbar">
                <div class="nav-img">
                    <h1><i class="fa fa-grav" aria-hidden="true"></i> Blogr</h1>
                </div>
                <div class="nav-links">
                    <li><a href="./index.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                </div>

            </div>
            <div class="main">
                <div id="login" class="content">
                    <h1>Login in.</h1>
                    <h5>Create an account. <a href="./index.php">Sign up</a></h5>

                    <form action="./login.php" method="post">
                        <div class="dwn">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <input type="email" name="email" placeholder="Email" required><br>
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <input id="move" type="checkbox" value="true"> Remeber me(Optional).
                        <div class="submit">
                            <button><i class="fa fa-sign-in" aria-hidden="true"></i> Login in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="forl" class="middle">
            <h2>Supported Browsers</h2>
            <div class="con">
                <div class="image">
                    <img src="./images/browser.png" alt="image">
                </div>
            </div>

        </div>

        
        <div class="fitter">
            <p>35,000 + ALREADY DOWNLOADED IT.</p>
            <h4>Stay up-to-date to our service.</h4>
            <div class="links">
                <a title="08145351803" href="#"><i class="fa fa-address-book" aria-hidden="true"></i> CONTACT</a>
                <hr>
                <a href="#"><i class="fa fa-bullseye" aria-hidden="true"></i> FEATURES</a>
                <hr>
                <a href="#"><i class="fa fa-book" aria-hidden="true"></i> ABOUT</a>

            </div>
        </div> 
    </div>
</body>
</html>