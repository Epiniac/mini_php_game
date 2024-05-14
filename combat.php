<?php

class Combat {
	/** @var array<Personnage> */
	public array $joueurs = [];

	/**
	 * Cette methode ajoute un / des joueurs au combat
	 *
	 * @param Personnage[] $joueurs Les joueur à ajouter au combat
	 */
	function prendrePart(Personnage ...$joueurs) {
		foreach ($joueurs as $j) {
			$this->joueurs[]=$j
		}
	}

	function abandonner(Personnage $qqun) {
		
	}
