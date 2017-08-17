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

$two_words_animals = [];   // массив со всеми животными из двух слов
$two_words_animals1 = [];  // массив с первыми словами
$two_words_animals2 = [];  // массив со вторыми словами


//  ищу животных из двух слов
foreach ($continents as $continent => $animals) {
	for ($i=0; $i < count($animals); $i++) {
		if (substr_count($animals[$i], ' ') == 1 ) {
			$two_words_animals[] = $animals[$i];
		}
	}
}

echo '<pre>';
print_r($two_words_animals);
echo '</pre>';

$string = implode(' ', $two_words_animals);  // преобразовал массив в строку
echo $string;

$array = explode(' ', $string); 						 // из строки в массив по одному слову
echo '<pre>';
print_r($array);
echo '</pre>';

for ($i = 0; $i < count($array); $i+=2) {    // первое слово животного в массив
	$two_words_animals1[] = $array[$i]; 
}

echo '<pre>';
shuffle($two_words_animals1);
print_r($two_words_animals1);
echo '</pre>';

for ($i = 1; $i < count($array); $i+=2) {    // второе слово животного в массив
	$two_words_animals2[] = $array[$i]; 
}

echo '<pre>';
shuffle($two_words_animals2);
print_r($two_words_animals2);
echo '</pre>';

$result = [];																 // итовый массив с фантастическими животными

for ($i = 0; $i < count($two_words_animals1); $i++) {
	$result[$i] = $two_words_animals1[$i] . ' ' . $two_words_animals2[$i];
}

echo '<pre>';
print_r($result);
echo '</pre>';

