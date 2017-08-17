<?php

$continents = [
  'Africa' => [
    'Elephantidae',
    'Giraffa camelopardalis',
    'Hippotigris',
    'Panthera leo',
    'Tropicranus albocristatus'
  ],
  'Australia' => [
    'Tachyglossus aculeatus',
    'Canis dingo',
    'Macropus',
    'Phascolarctos cinereus',
    'Bufo marinus'
  ]
];

/*foreach ($continents as $continent => $animals) {
	foreach ($animals as $animalKey => $animal) {
		echo $continent . ' - ' . $animal . PHP_EOL;	
	}
}*/

$new_array = [];

foreach ($continents as $continent => $animals) {
	for ($i=0; $i < count($animals); $i++) {
		if (substr_count($animals[$i], ' ') == 1 ) {
			$new_array[] = $animals[$i];
		}
	}
}

echo '<pre>';
print_r($new_array);
echo '</pre>';