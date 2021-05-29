<?php
$conf = 'api';
$fileHtml = $conf == 'api' ? '/taller_final/api.php' : '/taller_final/web.php';
require_once dirname(__DIR__) . $fileHtml;
