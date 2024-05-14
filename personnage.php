<?php
include './combat.php';

 class Personnage {
    public string $nom;
    public int $pv =100;

    public function __construct(string $nom) {
        $this->$nom = $nom;
    }

    const CHOIX = [
    	"attaquer",
	"fuir"
    ];

    function attaquer(Personnage $qqdautre){
	$qqdautre -> pdv -= rand(0,50); 
    }

    function fuir(Combat $c): bool{
	if(rand(0,1)){
		$c -> abandonner($this);
		return True;
	}	
	else{
		return False;
	}
    }

    function effectuerTour(Combat $c) {
	while(
		!in_array{
			$choix = readLine('Que souhaitez-vous faire ? '
				. PHP_EOL . '1. Attaquer'
				. PHP_EOL . '2. Fuir');
			[1,2]
		}    	
	){
		switch($choix) {
			case 1:
				$choix = -1;
				while(!isset($combat->joueurs[$choix])) {
					echo 'Qui souhaitez-vous attaquer ? ' . PHP_EOL;
					foreach ($combat->$joueurs as $key->$joueur){
						echo $key . ':' . $joueur->nom . PHP_EOL;
					}
					$choix = readLine();
				}
				$cible = $combat->$joueur 
		}
	}

}
