<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Station;

class Main extends BaseController
{
    public function index(){
        $bundesland = new Bundesland();
        $zeme = $bundesland->findAll();
        //var_dump($zeme);
        $data = [
            "zeme" => $zeme
        ];
        echo view('zeme', $data);
    }
/**
 * @param $id - ID země
 * 
 * 
 */
    public function stanice($id){
        $bundesland = new Bundesland();
        $zeme = $bundesland->find($id);
        $station = new Station();
        $stanice = $station->where('bundesland', $id)->findAll();
        var_dump($zeme);
        var_dump($stanice);

    }
}
