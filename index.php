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
$first_word_arr = []; //масив первых слов
$second_word_arr = []; //масив вторых слов

foreach ($continents_animal as $continent => $animals) { //перебираем страны
	echo "<h2>$continent</h2>";
	$animals_str = implode(', ', $animals);
	echo $animals_str;
	foreach ($animals as $animal) {
        $words_arr = explode(" ", $animal);
        if (count($words_arr) == 2) {
            $double_name_arr[] = $animal;
            $first_word_arr[] = $words_arr[0];
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
foreach ($second_word_arr as $last) {
    $first = array_shift($first_word_arr);
    $second = array_shift($second_word_arr);
    echo $first . ' ' . $second .'<br>';
}

?>

