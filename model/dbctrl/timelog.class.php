<?php
class TimeLog extends xPDOObject {
    public function set($k, $v= null, $vType= '') {
        if($k == 'start_datetime'){
            if(!$this->get('start_datetime')){
                return parent::set($k, $v , $vType);
            } else {
                return true;
            }
        } else {
            return parent::set($k, $v , $vType);
        }
    }
}