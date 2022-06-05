<?php
require('app/app.php');


$data = get_data();

$title = 'hello, php';

$view_bag = [];

$view_bag['title'] = 'This is the Title';


view('index', $data);