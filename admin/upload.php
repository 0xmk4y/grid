<?php
$tile = $_POST['title'];
$author = $_POST['author'];
$b_edition = $_POST['edition'];


// Setup database server
$servername = "localhost";
$username = "admin";
$password = "pass123";
$dbname = "Books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo $tile." ".$author." ".$b_edition;
$sql = "INSERT INTO shelve (Title, Author, b_edition)
VALUES ($title, $author, $b_edition)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


//Now auploading the file 

  if(isset($_FILES['fileToUpload'])) {
    $target_dir = "./upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

     //Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
     //Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
     //Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    //Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
     //if everything is ok, try to upload file
    } else {
          echo ".....";
        if (move_uploaded_file($_FILES["fileToUpload"]["name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            echo "Name: " . $title . "<br>";
            echo "Author: " . $author . "<br>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
  }
?>
