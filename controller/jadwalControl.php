<?php
include '../../../model/model.php';

class jadwalControl
{
    public $model;

    function __construct()
    {
        $this->model = new model();
    }

    function indexAdmin()
    {
        $data = $this->model->selectAll();

    }

    function viewSelect(){
        $data = $this->model->selectJadwal();
        include "jadwal.php";

    }
}
