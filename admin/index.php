<?php
require('../app/app.php');

echo APP_NAME;

/* echo __FILE__; */ //C:\xampp\htdocs\mvc_php_simple\admin\index.php THIS ISSHOWN IN BROWSER

view('admin/index', get_terms()); 