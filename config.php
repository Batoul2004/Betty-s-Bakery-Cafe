
<?php
define("db_SERVER", "localhost");
define("db_USER","id22252387_batoulnoureddine");
define("db_PASSWORD","CSCI390_project");
define("db_DBNAME", "id22252387_projectdb");
$con = mysqli_connect(db_SERVER,db_USER,db_PASSWORD,db_DBNAME);

if (!$con)
{   
    echo '<script type="text/javascript"> alert("Error connecting the server ". mysqli_connect_error()) </script>';

} 
?>