<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Data;
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
 */
    public function stanice($id){
        $bundesland = new Bundesland();
        $zeme = $bundesland->find($id);
        $station = new Station();
        $stanice = $station->where('bundesland', $id)->findAll();
        $data = [
            "zeme" => $zeme,
            "stanice" => $stanice
        ];
        echo view('stanice', $data);
    }
/**
 * @param $id - ID stanice
 * 
 */
    public function data($id){
        $station = new Station();
        $stanice = $station->find($id);
        $dataModel = new Data();
        $dataPocasi = $dataModel->where('Stations_ID', $id)->orderBy('date', 'DESC')->paginate(25);
        $pager = $dataModel->pager;
        $data = [
            "pager" => $pager,
            "stanice" => $stanice,
            "dataPocasi" => $dataPocasi
        ];
        echo view('data', $data);

    }
}
