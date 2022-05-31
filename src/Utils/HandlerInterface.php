<?php
namespace Judikael\PhpChainOfResponsibilityDesignPattern\Utils;

interface HandlerInterface
{
    public function handle($request);

    public function setIngredient($handler);
}
