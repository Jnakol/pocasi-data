<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;

class Main extends BaseController
{
    public function index()
    {
        $bundesland = new Bundesland();
        $zeme = $bundesland->findAll();
        //var_dump($zeme);
        $data = [
            "zeme" => $zeme
        ];
        echo view('zeme', $data);
    }
}
