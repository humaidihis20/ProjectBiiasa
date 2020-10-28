<?php //kondisional
	$a = 10;
	$b = 20;
	$c = 30;
	$d = 10;

	if ($a == $d) {
		echo "Nilai $a sama dengan nilai $d";

		}else{
			echo "Nilai $a tidak sama dengan nilai $d";
		}
		echo "</br>";

	if ($b != $c) {
		echo "Nilai $b tidak sama dengan nilai $c";
		}else{
			echo "Nilai $b sama dengan nilai $c";
	}
		echo "</br>";
	if ($a > $c) {
		echo "Nilai $a lebih besar nilai $c";
		}else{
			echo "Nilai $a tidak lebih besar nilai $c";
	}
		echo "</br>";
	if ($a >= $d) {
		echo "Nilai $a lebih besar atau sama dengan nilai $d";
		}else {
			echo "Nilai $a tidak lebih besar atau sama dengan nilai $d";
	}
?>