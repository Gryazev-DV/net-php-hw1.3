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

foreach ($continents as $continent => $animals) {
	foreach ($animals as $animalKey => $animal) {
		echo $continent . ' - ' . $animal . PHP_EOL;	
	}
}
