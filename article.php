<?php
if (isset($_GET['id'])) {
    require __DIR__ . '/class/DB.php';
    require __DIR__ . '/class/View.php';

    $db = new DB();

    $query = 'SELECT * FROM News WHERE id=:id';


    $view = new View();
    var_dump($db->query($query, [':id' => $_GET['id']]));
    $asd = $view->assign('news', $db->query($query, [':id' => $_GET['id']]));

    $view->display(__DIR__ . '/template/template.php');
} else {
    header("HTTP/1.0 404 Not Found");
    die();
}