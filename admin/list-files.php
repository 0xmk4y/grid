<?php
// $dir = "upload/";


// if (is_dir($dir)){
//   if ($dh = opendir($dir)){
//     while (($file = readdir($dh)) !== false){
//       if($file != '.' && $file != '..') {
//         echo $file . "<br>";
//       }
//     }
//     closedir($dh);
//   }
// }

// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','admin');
define('DB_PASS','pass123');
define('DB_NAME','grid_lms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>

