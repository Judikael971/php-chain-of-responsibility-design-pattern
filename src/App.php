<?php

namespace Judikael\PhpChainOfResponsibilityDesignPattern;

class App
{
	public function __construct(){
		$this->createUI();
	}

	public function createUI(){
		$ingredient = readline("Veuillez saisir l'ingrédient à cuisiner: ");
		$cuisine = new Cuisine();
		$cuisine->setIngredient(new Viande())
			->setIngredient(new Poisson())
			->setIngredient(new Fruit())
			->setIngredient(new Legume());

		$cuisine->cooking($ingredient);
	}
}
