<?php
class HomeController extends Controller{
    public function index(){
        $data = array();

        $this->loadTemplate('home', $data);
    }
}