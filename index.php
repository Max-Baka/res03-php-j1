<?php
/*$nb = 42;
$str = '42';
$nbstr = ($nb);

echo $nb;
echo $str;
echo $nbstr;*/

/*$nb_tab = [33, 34, 4, 2.2, 5.6];
print_r($nb_tab); 
$moto = ["Yam", "Honda", "Kawa","Ducati"];
print_r($moto);*/

/*$animal = [
    "species" => "Chien",
    "name" => "Sonic",
    "age" => "13",
    ];
    print_r($animal);*/
    
   /* $data = 42;
    $float = (float)$data;
    print_r($float);
    
    $str = (string)$float;
    print_r($str);*/
    
    /*$animals = ["Chat", "Chien", "Lapin", "Souris"];
    
    foreach($animals as $animal)
{
    echo "$animal\n";
    echo "<br>";
}*/
   /* $numbers = [28, 32, 44, -67, 18, 24, -98];
    
    for($i = 0; $i < count($numbers); $i++)
{
   if($numbers[$i]<0){
       echo "$numbers[$i]";
       echo "<br>";
   }
   
}*/

/*$user = [
    "firstName" => "Barack",
    "lastName" => "Obama"
];
echo "Je suis $user[firstName] $user[lastName], le 44ème président des USA.."
*/

$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];
foreach($users as $user)
{
    echo "{$user["firstName"]} {$user["lastName"]}";
    echo "<br>";
}
?>