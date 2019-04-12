<?php 

class RemoteControl {
    public $height;
    private $width;
    private $numButtons;
    private $model;

    public function __construct($m) {
        $this->model = $m;
    }

    public function turnOn() {
        echo "The TV has been turned on";
    }

    public function turnOff(){
        echo "The TV has been turned off";
    }
    public function setHeight($h) {
        $this->height = $h;
    }
    public function getHeight() {
        return $this->height;
    }
    public function setWidth($w) {
        $this->width = $w;
    }
    public function getWidth() {
        return $this->width;
    }
}

$rc1 = new RemoteControl('rc001');
$rc1->turnOn();
echo '<br/>';
$rc1->turnOff();

$rc1->height = 11;
echo '<br/>';
echo $rc1->height;
$rc1->setWidth(4);
echo '<br/>';
echo $rc1->getWidth();

echo '<br/>';
print_r ($rc1);

$rc2= new RemoteControl('rc002');
$rc2->height = 20;
$rc2->setWidth(5);
echo '<br/>';
print_r($rc2);





?>