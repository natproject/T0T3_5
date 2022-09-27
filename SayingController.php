<?php

/* require_once "../model/SayingModel.php";
require_once "../view/SayingView.php"; */
class SayingController
{
    public function saying($n)
    {
        $sayingModel = new SayingModel();
        $getSaying = $sayingModel->SayingModel($n);
        $view = new SayingView();
        $view->sayingView("El refran es. ", $getSaying);
    }
}
