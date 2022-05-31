<?php

namespace Judikael\PhpChainOfResponsibilityDesignPattern;

use Judikael\PhpChainOfResponsibilityDesignPattern\Utils\ComponentAbstract;

class Legume extends ComponentAbstract
{
    public $list = array("ail", "artichaut", "asperge", "asperge blanche", "asperge verte", "aubergine", "bette", "betterave rouge", "brocoli", "carotte", "catalonia", "celeri", "chou", "chou blanc", "chou de bruxelles", "chou frise", "chou romanesco", "chou rouge", "chou-chinois", "chou-fleur", "chou-rave", "cima di rapa", "citrouille", "concombre", "courge", "courgette", "cresson", "endive", "epinard", "fenouil", "haricot", "laitue", "laitue romaine", "mache", "mais", "navet", "oignon", "panais", "patisson", "oignon", "petit oignon blanc", "petit pois", "poireau", "pois mange-tout", "poivron", "pomme de terre", "potimarron", "potiron", "radis", "radis long", "rhubarbe", "salsifis", "topinambour");
    public $plats = array("une soupe", "un gratin", "une cuisson vapeur", "une salade en entrée");

    public function handle($request)
    {
        if(in_array($request, $this->list))
        {
            $plat = array_rand($this->plats);
            echo "Nous allons cuisiner ".$this->plats[$plat]." avec le légume: ".$request.PHP_EOL;
            return true;
        }
        if(!empty($this->nextComponent))
        {
            return $this->nextComponent->handle($request);
        }
        return false;
    }
}
