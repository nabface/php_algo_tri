<?php
	$tableau = array("nuage", "mot", "word", "really big word", "little word", "little", "big",  "extraordinaire", "chocolat", "petit", "grand");
	echo "Entrée :";
	print_r($tableau);
	echo "<br /><br />";
	$grand = strlen($tableau[0]);

	for ($i = 1 ; $i < count($tableau) ; $i++) {
		$j = $i;
		while(strlen($tableau[$j]) < strlen($tableau[$j-1])) {
			$mot = $tableau[$j];
			$tableau[$j] = $tableau[$j - 1];
			$tableau[$j - 1] = $mot;
			$j--;
		}
	}
	echo "<br />Sortie :";
	print_r($tableau);

?>
