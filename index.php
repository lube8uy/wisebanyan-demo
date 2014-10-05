<?php

//Minibootstrap
include_once 'vendor/autoload.php';
define(ROOT_PATH, dirname(__FILE__) );
session_start();

use Towerhousestudio\AB\Test;

//Select homepage test variation
$homepageTest = Test::read('homepage');

//Render view
include "views/advisor_page.php";


