<?php

namespace Judikael\PhpChainOfResponsibilityDesignPattern;

use Judikael\PhpChainOfResponsibilityDesignPattern\Utils\ComponentAbstract;

class Poisson extends ComponentAbstract
{
    public $list = array("anchois", "bar", "cabillaud", "saumon", "truite", "sardine", "thon", "daurade", "dorade", "vivaneau", "eglefin", "eperlan", "hareng", "lieu", "lotte", "maquereau", "merlan", "rouget");
    public $sauces = array("sauce moutarde à l'ancienne", "sauce hollandaise", "sauce vierge");
    public function handle($request)
    {
        if(in_array($request, $this->list))
        {
            $sauce = array_rand($this->sauces);
            echo "Nous allons cuisiner le poisson \"".$request."\" en ".$this->sauces[$sauce].PHP_EOL;
            return true;
        }
        if(!empty($this->nextComponent))
        {
            return $this->nextComponent->handle($request);
        }
        return false;
    }
}
