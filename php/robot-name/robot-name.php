<?php
class Robot
{
    private $name;
    
    public function __construct() {
        $this->name = $this->newName();
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function reset() {
        $this->__construct();
    }
    
    // create unique random robo name such as RX837 or BC811
    private function newName() {
        return substr(str_shuffle(implode(range('A', 'Z'))), 0, 2) . substr(((double)microtime() * 1000000), -3);
    }
}
