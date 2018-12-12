<?php
namespace controllers;
use core\controllers\Main as core_contr_Main;
use models\Articles;
class Main extends core_contr_Main{
    public function __construct() {
	parent::__construct();
	$this->model = new Articles();
    }
    public function index(){	 
	$this->view->articles = $this->model->get_all();
	$this->view->page='index';
        $this->view->render();
    }
}
