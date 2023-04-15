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
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The form has been submitted, so run the code here
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pass = 'pass123';
    $db_name = 'library';
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "connected";
    $sql = "SELECT `username`, `email`, `password`, `phone_number` FROM `users`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . $row["username"]. " - Email: " . $row["email"]. " - Password: " . $row["password"]. " - Phone Number: " . $row["phone"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

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
    .wel{
        display: flex;
        justify-content: center;
        align-items: center;
        height:500px;
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
            <div class="wel">
            <table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John Doe</td>
				<td>johndoe@example.com</td>
				<td>555-1234</td>
				<td>password1</td>
			</tr>
			<tr>
				<td>Jane Smith</td>
				<td>janesmith@example.com</td>
				<td>555-5678</td>
				<td>password2</td>
			</tr>
			<tr>
				<td>Bob Johnson</td>
				<td>bjohnson@example.com</td>
				<td>555-9101</td>
				<td>password3</td>
			</tr>
			<tr>
				<td>Samantha Lee</td>
				<td>samlee@example.com</td>
				<td>555-1212</td>
				<td>password4</td>
			</tr>
			<tr>
				<td>David Kim</td>
				<td>dkim@example.com</td>
				<td>555-2323</td>
				<td>password5</td>
			</tr>
			<tr>
				<td>Emily Chen</td>
				<td>echen@example.com</td>
				<td>555-3434</td>
				<td>password6</td>
			</tr>
		</tbody>
	</table>
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