<?php

include "../../model/model.php";

class keretaControl
{

    public $model;

    function __construct()
    {
        $this->model = new model();
    }
    function indexKereta()
    {
        $data = $this->model->selectAllKereta();
        include "tampil_kereta.php";
    }
}
