<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
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

    // Get user input from form
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $passwd = $_POST['password'];
    $is_admin = $_POST['is_admin'];
    // $is_admin = 0; // set is_admin to 0 by default for new users

    // Use prepared statement to insert user data
    $stmt = $conn->prepare("INSERT INTO `users` (`username`, `email`, `phone`, `password`, `is_admin`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $uname, $email, $phone, $passwd, $is_admin);

    if ($stmt->execute()) {
        echo "<script>alert('New user created successfully')</script>";
    } else {
        echo "<script>alert('Error: ".$stmt->error."')</script>";
    }

    // Close database connection
    mysqli_close($conn);
?>

<style>
    .container{
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        max-width: 1200px;
        margin: 0 auto;
        gap: 10px;
        grid-auto-rows: minmax(100px, auto);
        background-color: rgba(0, 0, 0,.8);
    }
    .container >*{
         /* padding: 10px; */
         /* background-color: aqua; */
    }
    header{
        grid-column: 1/9;
    }
    nav{
        grid-column: 1/4;
        grid-row: 2/7;
    }
    main{
        grid-column: 4/9;
        grid-row: 2/7;
    }
    footer{
        grid-column: 1/9;
        grid-row: 7/9;
    }
</style>
<body>
    <div class="container">

        <!-- header start -->
        <header style="background-color: rgb(32, 31, 31);">
            <div>
                <div class="logo">
                    <img src="../../img/logo.png" alt="img">
                </div>

                <div class="right">
                    <img src="../../img/header/user-logo.svg" alt="logo" style="height: 50px; border-radius: 30px;">
                    <p>Admin</p>
                    <a href="../../logout.php">logout</a>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- nav start -->
        <nav>
            <ul>
                <li><a href="users.php">View users</a></li>
                <li><a href="adduser.php">Create new user</a></li>
                <li><a href="deluser.php">Delete user</a></li>
                <li><a href="view-books.php">View Books</a></li>
                <li><a href="add-books.php">Add Books</a></li>
            </ul>
        </nav>
        <!-- nav end -->

        <!-- main starting -->
        <main>
            <div class="welcome">
               <div class="addusers">
                <form action="" method="post"> 
                    <label for="username">username</label>
                    <input type="text" name="username">

                    <label for="email">email</label>
                    <input type="text" id="email" name="email">

                    <label for="phone">phone</label>
                    <input type="text" id="phone" name="phone">

                    <label for="password">password</label>
                    <input type="text" id="password" name="password">

                    <label for="is_admin">is_admin</label>
                    <input type="number" id="is_admin" name="is_admin">

                    <button type="submit" >Add user</button>


                </form>
               </div>
            </div>
        </main>
        <!-- main ending -->

        <footer>
            <div>
                <p>Library Management System</p>
            </div>
        </footer>
    </div>
</body>
</html>