<?php
require_once dirname(__DIR__) . '/utils/model_util.php';
require_once dirname(__DIR__) . '/db/conexion_db.php';
require_once  dirname(__DIR__) . '/models/model.php';
require_once dirname(__DIR__) . '/models/entradas.php';
require_once dirname(__DIR__) . '/models/personas.php';
require_once dirname(__DIR__) . '/models/objetos_inv.php';
require_once dirname(__DIR__) . '/models/salidas.php';
require_once dirname(__DIR__) . '/controllers/base_controller.php';
require_once dirname(__DIR__) . '/controllers/entradas_controller.php';
require_once dirname(__DIR__) . '/controllers/personas_controller.php';
require_once dirname(__DIR__) . '/controllers/objetos_inv_controller.php';
require_once dirname(__DIR__) . '/controllers/salidas_controller.php';
use controllers\EntradasController;
use controllers\PersonasController;
use controllers\ObjetosController;
use controllers\SalidasController;