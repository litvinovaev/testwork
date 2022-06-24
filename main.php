<?php

//фруктовый сад
class Orchard
{
    public $appleAmount;
    public $pearAmount;

    public function __construct($appleAmount, $pearAmount)
    {
        $this->appleAmount = $appleAmount;
        $this->pearAmount = $pearAmount;
    }
}

class Apples
{
    public $apples;
    public $id;
    public function __construct()
    {
        $this->id = substr(md5(rand()), 0, 3);
        $this->apples = rand(40, 50);
    }
}

class Pears
{
    public $pears;
    public $id;

    public function __construct()
    {
        $this->id = substr(md5(rand()), 0, 3);
        $this->pears = rand(0, 20);
    }
}

class Container
{
    public $allApples;
    public $allPears;
    public $orchard;
    public function __construct()
    {
        $this->orchard = new Orchard(10, 15);
    }

    public function returnApples()
    {
        for ($i = 0; $i < $this->orchard->appleAmount; $i++) {
            $newApple = new Apples();
            $this->allApples += $newApple->apples;
        }
        echo 'собрано яблок: ' . $this->allApples;
    }
    public function returnPears()
    {
        for ($i = 0; $i < $this->orchard->pearAmount; $i++) {
            $newPear = new Pears();
            $this->allPears += $newPear->pears;
        }
        echo 'собрано груш: '. $this->allPears;
    }
}

$garden = new Container();
echo  $garden->returnApples(). '.<br>';
echo  $garden->returnPears(). '.<br>';
