<?php
namespace Judikael\PhpChainOfResponsibilityDesignPattern;

use Judikael\PhpChainOfResponsibilityDesignPattern\Utils\ComponentAbstract;

class Cuisine extends ComponentAbstract
{
    protected $ingredient;

    public function cooking($ingredient)
    {
        $this->ingredient = $ingredient;
        $result = "";
        if(!empty($this->nextComponent))
        {
            $result = $this->nextComponent->handle($ingredient);
        }
        if(!empty($result))
        {
            echo "La cuisson est lancée, veuillez vous installer, nous allons vous servir...".PHP_EOL;
            return true;
        }
        echo "Désolé, mais nous n'avons aucune recette à proposer pour cet ingrédient.".PHP_EOL;
        return false;
    }
}
