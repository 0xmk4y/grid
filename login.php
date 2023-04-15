
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<?php
    // Start session
    session_start();

    // Set up database connection
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pass = 'pass123';
    $db_name = 'library';
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get username and password from login form
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    // Query database to check if username and password match
    $query = "SELECT is_admin FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows
    if (mysqli_num_rows($result) == 1) {
        $is_admin = $result->fetch_assoc()["is_admin"];
        if ($is_admin == 1) {
            // User is an admin
            $_SESSION['username'] = $uname;
            $_SESSION['is_admin'] = $is_admin;

            header('Location: ./admin/actions/index.php');
        } else {
            // User is not an admin
            $_SESSION['username'] = $uname;
            $_SESSION['is_admin'] = $is_admin;
            header('Location: book.php');
            
        }
    } else {
        // Authentication failed, show error message
        echo "Invalid username or password";
    }

    // Close database connection
    mysqli_close($conn);
?>

<style>
        *{
        margin: 0;
        padding: 0;
    }
    .img-container{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        max-width: 1200px;
        margin: 0 auto;
        gap: 10px;
        grid-auto-rows: minmax(200px, auto);margin-top: 30px;
    }
    /* .img-container >*{
        background-color: aquamarine;
        padding: 30px;
    } */
    .container{
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        max-width: 1200px;
        margin: 0 auto;
        /* gap: 10px; */
        grid-auto-rows: minmax(200px, auto);
        /* background-color: aquamarine; */
    }
    .container >*{
        /* background-color: blueviolet; */
        padding: 30px;
    }
    .welcome{
        grid-column: 1/9;
        grid-row: 1/3;
        /* background-image: url('img/header/header.jpg'); */
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        
    }
    .account{
        grid-column: 1/9;
        grid-row: 3/6;
        /* background-image: url(img/release/bg-lib.jpg); */
    }
    .latest{
        grid-column:1/9;
        grid-row: 6/8;
    }
    .footer{
        grid-column: 1/9;
        background-color: rgba(12, 11, 11,.6);
    }
</style>
<body>
    <div class="container">
        <!-- welcome page start-->
        <div class="welcome" id="welcome">
            <nav>
                <div>
                    <img src="img/logo.png" alt="image">
                </div>
                <ul class="pages">
                    <a href="index.html"><li><h3>Home</h3></li></a>
                    <a href=""><li><h3>Books</h3></li></a>
                    <a href="contact.php"><li><h3>Contact</h3></li></a>
                </ul>
            </nav>
            <div class="motto">
                <h1 style="text-align: center; font-family: 'Lilita One', cursive; font-size: 50px; color: rgb(251, 251, 252);">Online learning Anytime, Anywhere!</h1>
            </div>

        </div>
        <!-- welcome end -->


        <!-- create account start-->
        <div class="account" id="account">
            <div class="form">
                <h3>Sign In</h3>
                <form action="" method="post">
                    <div class="input">
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="username" name="username">
                    </div>

                    <div class="input">
                        <label for="password">Password</label>
                        <input type="text" id="password" placeholder="password" name="password">                       
                    </div>
                    <div class="input">
                        <button type="submit">Sign In</button>
                    </div>
                    <div class="registered">
                        <p>Do not have an account?<a href="index.php">sign up</a></p>
                    </div>
                </form>
            </div>


        </div>
        <!-- create account end -->


        


        <!-- footer start -->
        <div class="footer" id="footer">
            <footer>
                <div class="about">
                    <h3>About libraria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quae officia quibusdam eveniet?</p>
                </div>
                <div class="qlink">
                    <h3>Quick links</h3>
                    <ul>
                        <a href="#welcome"><li>> Welcome</li></a>
                        <a href="#account"><li>> SignUp</li></a>
                    </ul>
                </div>
                <div class="timing">
                    <h3>Opening</h3>
                    <ul>
                        <a href="#"><li>Monday - Sunday</li></a>
                        <a href="#"><li>6am - 10pm</li></a>
                    </ul>
                </div>
            </footer>

        </div>
        <!-- footer end -->
    </div>
    
    
</body>
</html>