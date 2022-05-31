<?php

namespace Judikael\PhpChainOfResponsibilityDesignPattern;

use Judikael\PhpChainOfResponsibilityDesignPattern\Utils\ComponentAbstract;

class Fruit extends ComponentAbstract
{
    public $list = array("pomme", "pasteque", "abricot", "peche", "poire", "mangue", "ananas", "kiwi", "figue", "framboise", "myrtille", "melon", "raison", "mûre", "fraise", "cassis", "groseille", "prune", "cerise", "pamplemousse", "clementine", "orange", "citron", "lime", "banane", "anone", "papaye", "litchi", "jacquier", "goyave", "pitaya", "mangouste", "kaki", "noix de coco", "noisette", "noix", "amande", "noix de cajou", "pistache", "noix de macadam", "marron", "chataigne", "fruit de la passion", "carambole", "avocat", "tamarin", "nefle", "grenade", "datte", "coing", "amelanche", "jujube", "durian", "durion", "kiwano", "corossol", "longane", "tomate", "tomate cerise");
    public $patisseries = array("une tarte", "un gateau", "une glace", "une salade de fruit");

    public function handle($request)
    {
        if(in_array($request, $this->list))
        {
            $patisserie = array_rand($this->patisseries);
            echo "Nous allons faire ".$this->patisseries[$patisserie]." avec le fruit suivant: ".$request.PHP_EOL;
            return true;
        }
        if(!empty($this->nextComponent))
        {
            return $this->nextComponent->handle($request);
        }
        return false;
    }
}
