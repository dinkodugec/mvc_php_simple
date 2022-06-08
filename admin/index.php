<?php
session_start();
require('../app/app.php');

ensure_user_is_authenticated();


/* echo __FILE__; */ //C:\xampp\htdocs\mvc_php_simple\admin\index.php THIS ISSHOWN IN BROWSER

view('admin/index', Data::get_terms()); 