<?php
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    // My user is root in phpadmin , my_db is name of db
    // Check connection
    // CHECK : http://localhost/web_mysqli/admincp/config/config.php
    if ($mysqli -> connect_errno) {
      echo "Ket noi MySQL loi :  " . $mysqli -> connect_error;
      exit();
}
?>