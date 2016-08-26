<?php
$tableau = array('mot','petit','chocolat','nuage','extraordinaire','grande');
$grand = strlen($tableau[0]);
$indexGrand = 0;
print_r($tableau);
echo'<br>';

for($j=0; $j < count($tableau); $j++){

	for ($i=1; $i < count($tableau)-$j; $i++){

		if ($grand > strlen($tableau[$i])) {
			$mot = $tableau[$i];
			$tableau[$i] = $tableau[$i -1];
			$tableau[$i -1] = $mot;

		} else {
			$grand = strlen($tableau[$i]);	
		}
	}
	$grand = strlen($tableau[0]);
}
print_r($tableau);
?>

