<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'fdb1029.awardspace.net');
    define('LOCALHOST', 'fdb1029.awardspace.net');
    define('DB_USERNAME', '4321697_root');
    define('DB_PASSWORD', '4321697_root');
    define('DB_NAME', '4321697_root');
    

    //3. Execute Query and Save Data in Database
   
    $conn = mysqli_connect('fdb1029.awardspace.net', '4321697_root', '4321697_root', '4321697_root'); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting Database
?>