
 <?php

    $sname = "localhost";
    $email = "root";
    $passwd = "";

    $db_name = "blogr_db";

    $conn = mysqli_connect($sname, $email, $passwd, $db_name);


    if (isset($_POST['email']) && isset($_POST['password'])) {

        $emai = ($_POST['email']);
        $psw = ($_POST['password']);

        if (empty($emai)) {
            header("location: index3.php?error = User name is required");
            exit();
        } else if (empty($psw)) {
            header("location: index3.php?error = Password is required");
            exit();
        } else {
            $sql =
                "SELECT * 
                FROM users
                 WHERE email = '$emai'
                  AND passwrd = '$psw'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)) {
                header("location:home.php");
                exit();
            }
        }
    }
    header("location: index3.php?error = Wrong data");




    ?>