<?php

// I. Wprowadzenie Danych (Tworzenie Tablicy Startowej)
$dane_bazowe = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];
echo "<h2>I. Wprowadzenie Danych (Tworzenie Tablicy Startowej)</h2>";
echo "<b>zad 1.1</b> -> Tablica dane_bazowe: ";
print_r($dane_bazowe);
echo "<br><br>";


// II. Część Podstawowa: Funkcje Modyfikujące i Odczytujące
function odczytaj_komorke($tablica, $numer) {
    return $tablica[$numer];
}

function zmien_komorke($tablica, $numer, $nowa_wartosc) {
    $tablica[$numer] = $nowa_wartosc;
    return $tablica;
}

echo "<h2>II. Część Podstawowa: Funkcje Modyfikujące i Odczytujące</h2>";

// Zadanie 2.1 – odczyt 5. komórki
echo "<b>zad 2.1</b> -> Zawartość 5. komórki: " . odczytaj_komorke($dane_bazowe, 4) . "<br>";

// Zadanie 2.2 – zmiana 7. komórki
$dane_bazowe = zmien_komorke($dane_bazowe, 6, 12);
echo "<b>zad 2.2</b> -> Tablica po zmianie 7. komórki: ";
print_r($dane_bazowe);
echo "<br><br>";


// III. Część Średniozaawansowana: Przepisywanie i Sumowanie Tablic

function skopiuj_tablice($zrodlo) {
    $kopia = [];
    foreach ($zrodlo as $element) {
        $kopia[] = $element;
    }
    return $kopia;
}

function sumuj_indeksy($tablica1, $tablica2) {
    $suma = [];
    for ($i = 0; $i < count($tablica1); $i++) {
        $suma[] = $tablica1[$i] + $tablica2[$i];
    }
    return $suma;
}

function odwroc_kolejnosc_i_przepisz($zrodlo) {
    $nowa = [];
    for ($i = count($zrodlo) - 1; $i >= 0; $i--) {
        $nowa[] = $zrodlo[$i];
    }
    return $nowa;
}

echo "<h2>III. Część Średniozaawansowana: Przepisywanie i Sumowanie Tablic</h2>";

// Zadanie 3.1 – kopiowanie
$tablica_kopia = skopiuj_tablice($dane_bazowe);
echo "<b>zad 3.1</b> -> Tablica tablica_kopia: ";
print_r($tablica_kopia);
echo "<br>";

// Zadanie 3.2 – sumowanie indeksów
$tablica_sum = sumuj_indeksy($dane_bazowe, $tablica_kopia);
echo "<b>zad 3.2</b> -> Tablica tablica_sum: ";
print_r($tablica_sum);
echo "<br>";

// Zadanie 3.3 – odwrócenie kolejności
$tablica_kopia = odwroc_kolejnosc_i_przepisz($dane_bazowe);
echo "<b>zad 3.3</b> -> Tablica tablica_kopia: ";
print_r($tablica_kopia);
echo "<br><br>";


// IV. Część Rozszerzona: Analiza (Dodatkowe Funkcje)
function oblicz_srednia($tablica) {
    return array_sum($tablica) / count($tablica);
}

function znajdz_maksimum($tablica) {
    return max($tablica);
}

echo "<h2>IV. Część Rozszerzona: Analiza (Dodatkowe Funkcje)</h2>";

// Zadanie 4.1 – średnia
echo "<b>zad 4.1</b> -> Średnia tablicy dane_bazowe: " . oblicz_srednia($dane_bazowe) . "<br>";

// Zadanie 4.2 – maksimum
echo "<b>zad 4.2</b> -> Największa wartość w tablicy tablica_sum: " . znajdz_maksimum($tablica_sum) . "<br><br>";

// Zadanie z wykładu: Operacje na Tablicach (PHP)
echo "<h2>Zadanie z wykładu: Operacje na Tablicach (PHP)</h2>";

$tab1 = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];

// Krok 1: Inicjalizacja i odczyt
echo "<b>Krok 1</b> -> Tablica tab1: ";
print_r($tab1);
echo "<br>Zawartość 5. komórki: " . $tab1[4] . "<br>";

// Krok 2: Modyfikacja danych
$tab1[6] = 12;
echo "<b>Krok 2</b> -> Tablica po zmianie 7. komórki: ";
print_r($tab1);
echo "<br>";

// Krok 3: Kopiowanie
$tab2 = $tab1;
echo "<b>Krok 3</b> -> Tablica tab2: ";
print_r($tab2);
echo "<br>";

// Krok 4: Sumowanie indeksów
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
echo "<b>Krok 4</b> -> Tablica tab3: ";
print_r($tab3);
echo "<br>";

// Krok 5: Odwrócenie kolejności
$tab2 = [];
for ($i = count($tab1) - 1; $i >= 0; $i--) {
    $tab2[] = $tab1[$i];
}
echo "<b>Krok 5</b> -> Tablica tab2: ";
print_r($tab2);
echo "<br>";
?>
