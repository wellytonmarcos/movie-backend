<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class MovieController extends BaseController
{
    use ResponseTrait;
    public function getAll()
    {
        try{
            $movieModel = model('App\Models\MovieModel');
            $movies = $movieModel->findAll();
            return $this->respond($movies);
        }
        catch(Exception $e){

        }
    }

    public function create(){
        try {
            $movieModel = model('App\Models\MovieModel');
            $movies = $movieModel->insert($this->request->getJSON());
            return $this->respond(['status' => true, 'message' => 'Filme cadastrado com sucesso!','data' => $movies]);
        } catch (Exception $e) {
            return $this->respond(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}
