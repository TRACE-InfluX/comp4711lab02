<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<p>You should consider getting a
			<?php

        // Load files
        $f_adjectives = fopen("adjectives", "r");
        $f_colours = fopen("colours", "r");
        $f_nouns = fopen("nouns", "r");

        // Create Arrays
        $adjectives = array();
        $colours = array();
        $nouns = array();

        // Load Strings into Arrays
        while (!feof($f_adjectives)) {
          array_push($adjectives, fgets($f_adjectives));
        }

        while (!feof($f_colours)) { 
          array_push($colours, fgets($f_colours)); 
        }

        while (!feof($f_nouns)) { 
          array_push($nouns, fgets($f_nouns)); 
        } 

        // Pick random colour and print
        $index = rand(0, sizeof($adjectives) - 1);
        echo $adjectives[$index];
        echo " ";

        $index = rand(0, sizeof($colours) - 1);
        echo $colours[$index];
        echo " ";

        $index = rand(0, sizeof($nouns) - 1);
        echo $nouns[$index];
        echo " ";

			?>
			for a pet.</p>
    </body>
</html>
