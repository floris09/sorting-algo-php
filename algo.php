<?php

$reeks = [6,2,10,4,3,6,9,5,13,7,4,2,5];		//	Getallen Reeks
$for_count = 0;			//	Counter voor de for-loops
$while_count = 0;		//	Counter voor de while-loops
$swap_count = 0;		//	Counter voor de swaps

function swap($n){		// 	Swap functie accepteert de index van een getal uit de reeks
	global $reeks;			//	Zorg dat de $reeks array in deze functie aan te passen is
	global $swap_count;	//	Zorg dat de $swap_count in deze functie aan te passen is

	$temp = $reeks[$n-1];	//	Sla index n-1 op in tijdelijke variabele
	$reeks[$n-1] = $reeks[$n];	//	Overschrijf index n-1 met index n
	$reeks[$n] = $temp;	// Overschrijf index n met de tijdelijke variabele(n-1)

	$swap_count++; // 	Counter voor swaps + 1
}



for($n = 1; $n < count($reeks); $n++){	//	Startend vanaf index 1 tot einde van de reeks
	$for_count++;		//	Counter voor for-loops + 1

	$substract = 0;		//	Variabele om de index die geswapped moet worden te verminderen

	while($reeks[$n - $substract] < $reeks[$n-1-$substract]){ // Terwijl n kleiner is dan n-1
		swap($n - $substract);	//	Wissel n om met n-1
		$substract++;	//	Variabele om index te verminderen +1

		$while_count++;	//	Counter voor while-loops +1
		if($n - $substract == 0){ break; }	//	Als de index op -1 komt, stop de while loop
	}

}

print_r($reeks);
echo '<br>';
echo "for loops: " . $for_count . "<br>";
echo "while loops: " . $while_count . "<br>";
echo "swaps: " . $swap_count;

?>
