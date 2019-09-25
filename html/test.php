<?php
database="sakila"
host=
user="root"
pass="varMyDBPass"
$dbh = new PDO("mysql:dbname={$database};host={$host}", $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (!$dbh) {
    echo'<font color="red">unable to connect to database</font>';
} 
else{echo "connection established";}

?>
