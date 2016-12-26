<?php

require __DIR__ . '/class/DB.php';
require __DIR__ . '/class/View.php';

$db = new DB();

$query = 'SELECT * FROM News ORDER BY id DESC';



$view = new View();

$view->assign('news', $db->query($query, []));

$view->display(__DIR__ . '/template/template.php');