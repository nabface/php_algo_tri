<?php
	$tableau = array("nuage", "mot", "word", "really big word", "little word", "little", "big",  "extraordinaire", "chocolat", "petit", "grand");
	echo "Tableau d'entrée :";
	print_r($tableau);
	echo "<br /><br />";
	$grand = strlen($tableau[0]);

	for ($i = 1 ; $i < count($tableau) ; $i++) {
		if ($grand > strlen($tableau[$i])) {
			$mot = $tableau[$i];
			$tableau[$i] = $tableau[$i - 1];
			$tableau[$i - 1] = $mot;
			$autre_grand = strlen($tableau[0]);
			if ($i > 2) {
				for ($j = 1 ; $j < $i ; $j++) {
					if($autre_grand > strlen($tableau[$j])) {
						$mot = $tableau[$j];
						$tableau[$j] = $tableau[$j - 1];
						$tableau[$j - 1] = $mot;
					}
					else {
						$autre_grand = strlen($tableau[$j]);
					}
					echo "tableau dans la double boucle :";
					print_r($tableau);
					echo"<br />";
				}
			}
			echo "<br />";
		}
		else {
			$grand = strlen($tableau[$i]);
		}
		echo "tableau dans la boucle";
		print_r($tableau);
		echo "<br />";
	}

	echo "<br /> Tableau de sortie :";
	print_r($tableau);

?>
