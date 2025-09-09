<?php 
class hewan 
{
    private $jenis;
    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }
    
    public function getJenis()
    {
        return $this->jenis;
    }
} 

class Kambing extends Hewan {}
class Harimau extends Hewan {}
class Singa extends Hewan {}

$kambing = new Kambing();
$kambing->setJenis('herbivora</br>');
echo $kambing->getJenis();

$harimau = new Harimau();
$harimau->setJenis('karnivora</br>');
echo $harimau->getJenis();

$singa = new Singa();
$singa->setJenis('mamalia');
echo $singa->getJenis();
?>