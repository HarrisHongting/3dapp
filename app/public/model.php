<?php
// Include the necessary files
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../controllers/ModelController.php';
require_once __DIR__ . '/../models/Model.php';
require_once __DIR__ . '/../../database/Database.php';

use App\Controllers\ModelController;

// Get the ID parameter from the query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Create a new instance of the ModelController
$modelController = new ModelController();

// Get the X3D definition for the given ID
$modelController->show($id);
