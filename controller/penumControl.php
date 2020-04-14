<?php

include "../../../model/model.php";

class penumControl
{

    public $model;

    function __construct()
    {
        $this->model = new model();
    }
    function indexPenum()
    {
        $data = $this->model->selectAllPenum();
        include "tampil_penum.php";
    }
}
