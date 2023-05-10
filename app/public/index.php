<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../controllers/ModelController.php';
require_once __DIR__ . '/../models/Model.php';
require_once __DIR__ . '/../../database/Database.php';

use App\Controllers\ModelController;

$controller = new ModelController();

$controller->index();
