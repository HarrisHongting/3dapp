<?php

namespace App\Controllers;

use App\Models\Model;

class ModelController
{
    public function show($id)
    {
        $model = new Model();
        $x3d_defs = $model->getAll();
        $x3d_def = $model->getOne($id);

        $pageTitle = $x3d_def['title'];
        $logo = "3D Viewer";

        require_once '../views/header.php';
        require_once '../views/model.php';
        require_once '../views/footer.php';
    }

    public function showJson($id)
    {
        $model = new Model();
        $x3d_def = $model->getOne($id);

        require_once '../views/model.json.php';
    }

    public function index()
    {
        $model = new Model();
        $x3d_defs = $model->getAll();

        $pageTitle = "3D Viewer";
        $logo = "3D Viewer";

        require_once '../views/header.php';
        require_once '../views/index.php';
        require_once '../views/footer.php';
    }
}
