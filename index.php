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
// check if form has been submitted
if (!empty($_POST)) {
    // use to process signup
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $passwd = $_POST['password'];

    // Setup database server
    $servername = "localhost";
    $username = "admin";
    $password = "pass123";
    $dbname = "library";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    $is_admin = 0;
    // Use prepared statement to insert user data
    $stmt = $conn->prepare("INSERT INTO `users` (`username`, `email`, `phone`, `password`, `is_admin`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $uname, $email, $phone, $passwd, $is_admin);

    if ($stmt->execute()) {
        echo "<script>alert('new account created sucessfully')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $conn->close();
}
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
                    <a href="#"><li><h3>Home</h3></li></a>
                    <a href="book.php"><li><h3>Books</h3></li></a>
                    <a href="contact.php"><li><h3>Contact</h3></li></a>
            </nav>
            <div class="motto">
                <h1 style="text-align: center; font-family: 'Lilita One', cursive; font-size: 50px; color: rgb(251, 251, 252);">Online learning Anytime, Anywhere!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe impedit eos voluptatibus nostrum quibusdam et, incidunt harum reiciendis aspernatur praesentium.</p>
            </div>

        </div>
        <!-- welcome end -->


        <!-- create account start-->
        <div class="account" id="account">
            <div class="form">
                <h3>Create Account</h3>
                <form action="" method="post">
                    <div class="input">
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="username" name="username">
                    </div>

                    <div class="input">
                        <label for="email">Email</label>
                        <input type="text" id="email" placeholder="email" name="email">
                    </div>
                    <div class="input">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" placeholder="phone" name="phone">
                    </div>

                    <div class="input">
                        <label for="password">Password</label>
                        <input type="text" id="password" placeholder="password" name="password">                       
                    </div>
                    <div class="input">
                        <button type="submit">Sign up</button>
                    </div>
                    <div class="registered">
                        <p>Already have an account?<a href="login.php">sign in</a></p>
                    </div>
                </form>
            </div>


        </div>
        <!-- create account end -->


        <!-- latest release start -->
        <div class="latest" id="latest">
            <div class="release">
               <h2>Checkout our latest release</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consequatur sunt ea vero, iste impedit sed corporis culpa provident in facilis qui blanditiis doloremque iure totam! Est tempora porro laboriosam!</p>
            </div>

            <div class="img-container">
                <div>
                    <img class="img" src="img/release/category-filter-img-01.jpg" alt="">
                </div>
                <div>
                    <img class="img" src="img/release/category-filter-img-02.jpg" alt="">
                </div>
                <div>
                    <img class="img" src="img/release/category-filter-img-03.jpg" alt="">
                </div>
                <div>
                    <img class="img" src="img/release/category-filter-img-04.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- latest release end -->


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
                        <a href="#latest"><li>> latest release</li></a>
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