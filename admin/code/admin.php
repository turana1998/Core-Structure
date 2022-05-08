<?php

session_start();
ob_start();
require_once '../db.php';

$db=new DBConnection;
require_once 'crud.php';