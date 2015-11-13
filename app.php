<?php

require('lib/meekrodb.2.3.class.php');

/* INCLUDE CUSTOM CLASSES */

require('yearbook/pupil.class.php');
require('yearbook/pupilauth.class.php');
require('yearbook/author.class.php');

/* FINISH CUSTOM CLASSES */

session_start();
    
DB::$user = 'root';
DB::$password = 'h471999';
DB::$dbName = 'yearbook';


if(PupilAuth::isLoggedIn()) {
    $User = new Pupil();
    $User->setWithRollNumber($_SESSION['pupilrolenumber']);
}