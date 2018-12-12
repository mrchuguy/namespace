<?php
namespace core\controllers;
use core\models\Main as core_models_Main;
use core\View;
/**
 * main class
 */
abstract class Main {
    /**
     *
     * @var Model
     */
    protected $model;
    /**
     *
     * @var View
     */
    protected $view;
    
    public function __construct() {
        $this->view = new View();
	$this->model = new core_models_Main();
    }
    abstract public function index();
}
