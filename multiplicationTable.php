<?php
	
	$table = [100][100];
	for ($i = 1; $i <= 100; $i++ ){
		for($j = 1; $j <= 100; $j++){
			$table[$i][$j] = $i * $j;
		}
	}

	$headers="<thead><tr>";

	foreach($table as $key => $element){
	   $headers.= "<th>$key</th>";
	  }
	$headers.= "</tr></thead>";

	$out = "";
	$out .= "<tbody>";
	$headers="<table><thead><tr>";
	foreach($table as $key => $element){
	  $headers.= "<th>$key</th>";
	  $out .= "<tr>";
	  foreach($element as $subk => $subel){
	      $out .= "<td>$subel</td>";
	  }
	  $out .= "</tr>";
	}
	$out .="</tbody><table>";
	$headers.= "</tr></thead>";

	echo $headers;
	echo $out;

?>