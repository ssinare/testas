<?php

/*
Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. Tiems masyvo nariams, 
kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), priskirkite reikšmę “A”. Likusiems
 nariams priskirkite reikšmę “B”. Masyvą atspausdinkite naršyklės lange naudodami funkciją 
 print_r();
 */
echo '<br>';
echo '<br>1. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo '<pre>';
$masyvas = [];
foreach(range(0, 100) as $i) {
          if ($i % 10 == 0){
            $masyvas[$i]='A';
          }
          else {
            $masyvas[$i]='B';
          }
}            
print_r($masyvas);
echo '<br>';

/*
Pakeiskite pirmąjame uždavinyje sukurtą masyvą. Visas masyvo reikšmes (“A” ir “B”)
pakeiskite masyvais, kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10. Naujai 
sukurtų masyvų reikšmes užpildykite atitinkamai “A” arba “B” stringais (pagal tai
kokią raidę keičiate į masyvą). Masyvą atspausdinkite naršyklės lange naudodami 
funkciją print_r();
*/
echo '<br>';
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo '<pre>';

foreach($masyvas as $i => $value) {
    $mazas = [];
    foreach(range(1, rand(3, 10)) as $j) {
        $mazas[] = $value;
    }
        $masyvas[$i] = $mazas;
}            
print_r($masyvas);
echo '<br>';

/*
Pakeiskite antrame uždavinyje sukurtą masyvą. Visus antro lygio masyvus pailginkite
 iki 10 elementų. Papildomai sukurtų elementų reikšmes užpildykite “C” stringais. 
 Jeigu masyvo ilgis jau yra 10, tai tokio masyvo keisti nereikia. Masyvą atspausdinkite 
 naršyklės lange naudodami funkciją print_r(). 
Papildomai: Suskaičiuokite kiek gautame masyve yra “A”, “B” ir “C” reikšmių ir rezultatą
 atspausdinkite.

*/
echo '<br>';
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo '<pre>';

foreach($masyvas as $i => $value) {
    foreach(range(1, 10-count($value)) as $j) {
           $masyvas[$i][] = 'C'; 
           // $value[] = 'C';      
    }
}  
print_r($masyvas);
echo '<br>';   

$a=0;
$b=0;
$c=0;
foreach($masyvas as $i => $value) {
    //$raides = [];
    foreach($value as $j => $value1) {
        //$raides = $value;
        //if($value1 = 'A') {
        if($masyvas[$i][$j] === 'A') {
       // if($value[$j] = 'A') {
            $a++;
        }
        elseif($masyvas[$i][$j] === 'B') {
            $b++;
        }
        else {
            $c++;
        }
    }
}
print_r($masyvas[99][4]);
echo '<br>'; 
echo "A raidziu yra $a, B raidziu yra $b, C raidziu yra $c";



// foreach($masyvas as $i => &$value) {
//     if (count($value) == 10) {
//         continue;
//     }
//     foreach(range(1, 10 - count($value)) as $j ) {
//        $value[] = 'C';
//     }
// }       
// print_r($masyvas);
// echo '<br>';

