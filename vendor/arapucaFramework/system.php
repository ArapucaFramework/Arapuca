<?php

namespace ArapucaFramework;

class System{
    private $_url;
    private $_controller;
    private $_action;

    public function __construct(){
        $this->setUrl($_GET);
        $this->setController();
        $this->setAction();
    }
    public function setUrl($url){
        $this->_url = $url;
    }
    public function getUrl(){
        return $this->_url;
    }
    public function setController(){
        $this->_controller = empty($this->_url['controller']) ? "index" : $this->_url['controller'];
    }
    public function getController(){
        return $controller;
    }
    public function setAction(){
        $this->_action = empty($this->_url['action']) ? "index" : $this->_url['action'];
    }
    public function getAction(){
        return $action;
    }

    public function run(){
        $controller = 'App\\Controllers\\'. $this->_controller . 'Controller';
        $action = $this->_action;
        $instancia = new $controller();
        $instancia->$action();

    }

}