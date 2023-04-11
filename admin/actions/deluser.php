<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
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
                <h2>Welcome to admin dashboard</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat facere deleniti modi laboriosam?</p>
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