<?php

echo ("Welke operatie wil je uitvoeren? (+, -, %)") . PHP_EOL;


$operatie = readline ("");
if ($operatie == "*") {
	echo ("'*' is geen geldige operatie "); exit();
}
echo ("Eerste getal?") . PHP_EOL;
$first = readline("");

if(is_numeric($first) && $first > 0 && $first == round($first, 0));
 else {
 	echo "$first is geen getal"; exit();
}

echo ("Tweede getal") . PHP_EOL;
$second = readline ("");

if(is_numeric($second) && $second > 0 && $second == round($second, 0));
 else {
 	echo "$second is geen getal"; exit();
}

if ($operatie == "+") {
	echo ($first + $second);
} elseif ($operatie == "-") {
	echo ($first - $second);
} elseif ($operatie == "%") {
	echo ($first % $second);
} 
