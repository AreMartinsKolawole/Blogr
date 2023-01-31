<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>Home | Blogr</title>
</head>

<body>
    <div name="container">
        <div class="body">
            <div class="navbar">
                <div class="nav-img">
                    <h1><i class="fa fa-grav" aria-hidden="true"></i> Blogr</h1>
                </div>
                <div class="nav-links">
                </div>

            </div>
            <div class="main">
                <div class="content">
                    <h3>START FOR FREE</h3>
                    <h1>Create new account.</h1>
                    <h5>Already A Member? <a href="./index3.php">Login in</a></h5>

                    <form action="./signup.php" method="post">
                        <div class="top">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="fname" placeholder="First Name" required>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                        <div class="dwn">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <input type="email" name="email" placeholder="Email" required><br>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input type="tel" name="number" placeholder="Phone number" required><br>
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="top">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <input type="text" name="day" placeholder="DOB - day/month/year" required>
                            <input type="text" name="city" placeholder="City" required><br>
                        </div>
                        <input id="move" type="checkbox" name="cbox" value="true"> I agree to the terms and conditions.
                        <div class="submit">
                            <button><i class="fa fa-plus-circle" aria-hidden="true"></i> Create account</button>
                        </div>
                    </form>
                </div>

                <div class="side-img">
                    <img src="./images/bg-pattern-circles.svg" alt="images">
                </div>
            </div>




        </div>

        <div class="middle">
            <h4>Download the extension</h4>
            <p> Blogr password manager got more browsers in the pipeline. 
                Blogr offers extra safeguard your Master Password from being compromised.</p>

            <div class="box">

                <div id="f" class="row">
                    <img src="./images/chrome.jpg" alt="chrome">
                    <p>Minimum version 62</p>
                    <button><i class="fa fa-download" aria-hidden="true"></i> Add & Install Extension</button>
                </div>

                <div id="s" class="row">
                    <img src="./images/firefox.png" alt="firefox">
                    <p>Minimum version 55</p>
                    <button><i class="fa fa-download" aria-hidden="true"></i> Add & Install Extension</button>
                </div>

                <div id="t" class="row">
                    <img src="./images/opera.png" alt="opera">
                    <p>Minimum version 46</p>
                    <button><i class="fa fa-download" aria-hidden="true"></i> Add & Install Extension</button>
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







</body>

</html>