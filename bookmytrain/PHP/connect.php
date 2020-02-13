<?php

// Hostname
define ( 'DB_HOST', 'localhost' );
// Username
define ( 'DB_USER', <<user name of database>> );
// Password
define ( 'DB_PASSWORD', << password >> );
// Databse Name
define ( 'DB_DB', << database name>> );


$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);



?>