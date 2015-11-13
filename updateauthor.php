<?php

require('app.php');

if(!$Auth->isLoggedIn()) {
    exit;
}