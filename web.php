<?php
$fileHtml = "";
if (!empty($_GET['page'])) {
    $view = !empty($_GET['view']) ? $_GET['view'] : 'list';
    $fileHtml = "/taller_final/views/$_GET[page]/$view.php";
} else {
    $fileHtml = '/taller_final/views/welcome.php';
}
require_once dirname(__DIR__) . $fileHtml;