<?php
namespace Judikael\PhpChainOfResponsibilityDesignPattern\Utils;

abstract class ComponentAbstract implements HandlerInterface
{
    public $nextComponent;

    public function handle($request)
    {
        if($request != null)
        {
            echo "Votre saisie: ".$request.PHP_EOL;
        }
        elseif($this->nextComponent != null)
        {
            return $this->nextComponent->handle($request);
        }
        else
        {
            echo "Veuillez renseigner une information ".PHP_EOL;
            return false;
        }
        return true;
    }

    /**
     * @param mixed $next
     */
    public function setIngredient($next)
    {
        $this->nextComponent = $next;

        return $this->nextComponent;
    }
}
