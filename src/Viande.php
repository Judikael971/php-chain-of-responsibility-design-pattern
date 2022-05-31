<?php

namespace Judikael\PhpChainOfResponsibilityDesignPattern;

use Judikael\PhpChainOfResponsibilityDesignPattern\Utils\ComponentAbstract;

class Viande extends ComponentAbstract
{
    public $list = array("boeuf", "veau", "porc", "agneau", "mouton", "chevre", "cheval", "sanglier", "biche");
    public $plats = array("un roti", "une sauce à l'échalotte", "une sauce au poivre", "une sauce au vin");

    public function handle($request)
    {
        if(in_array($request, $this->list))
        {
            $plat = array_rand($this->plats);
            echo "Nous allons cuisiner ".$this->plats[$plat]." avec la viande de ".$request.PHP_EOL;
            return true;
        }
        if(!empty($this->nextComponent))
        {
            return $this->nextComponent->handle($request);
        }
        return false;
    }
}
