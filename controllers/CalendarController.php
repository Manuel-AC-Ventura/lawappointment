<?php
class CalendarController extends Controller{
    public function schedule(){
        $data = array();

        

        $this->loadTemplate('calendar', $data);
    }
}