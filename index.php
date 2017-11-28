<?php

$continents_animal = [
	'Eurasia' => ['Brown bear', 'Siberian tiger'],
	'Africa' => ['Giraffe', 'African elephant'],
	'North America' => ['Mountain goat', 'Raccoon'],
	'South America' => ['Maned wolf', 'Pampas deer'],
	'Australia' => ['Tasmanian devil'],
	'Antarctica' => ['Weddell seal']
];

$double_name_arr = [];
$magic_continents_animal = []; //масив первых слов
$second_word_arr = []; //масив вторых слов
$words_arr = [];

foreach ($continents_animal as $continent => $animals) { //перебираем страны
	echo "<h2>$continent</h2>";
	$animals_str = implode(', ', $animals);
	echo $animals_str;
	foreach ($animals as $animal) {
        $words_arr = explode(" ", $animal);
        if (count($words_arr) == 2) {
            $double_name_arr[] = $animal;
            $magic_continents_animal[$continent][] = $words_arr[0];
            $second_word_arr[] = $words_arr[1];
        }
    }
}

echo '<h2>Массив из двух слов</h2>';
foreach ($double_name_arr as $item) { //перебираем животных внутри страны
    echo "$item<br>";
}

shuffle($second_word_arr);
echo '<h2>Выдуманные животные</h2>';
foreach ($magic_continents_animal as $continent => $first_words) { //перебираем страны с выдуманными животными
	echo "<h2>$continent</h2>";
$temp_magic_animals = []; //масив для новых животных континента
	foreach ($first_words as $magic_animal) { //перебериаем массив первых слов в континенте
			$second = array_shift($second_word_arr);
			$magic_animal = $magic_animal . ' ' . $second;
			$temp_magic_animals[] = $magic_animal;
	}
echo implode(', ', $temp_magic_animals);
}

?>