<?php
//Geçti/Kaldı Uygulaması

$students = array(
        array("fullName" => "Mehmet", "score1" => "60", "score2" => "80"),
        array("fullName" => "Ayşe", "score1" => "80", "score2" => "50"),
        array("fullName" => "Veli", "score1" => "40", "score2" => "50")
);

foreach ($students as $student) {
    $average = ($student["score1"] + $student["score2"]) / 2;
    if ($average >= 60) {
        $result = "Passed";
    }
    else {
        $result = "Failed";
    }
    echo "Name Surname: " . $student["fullName"] . "<br>";
    echo "Score 1: " . $student["score1"] . "<br>";
    echo "Score 2: " . $student["score2"] . "<br>";
    echo "Average: " . $average . "<br>";
    echo "Result: " . $result;
    echo "<br><br><hr><br>";
}

/*Name Surname: Mehmet
Score 1: 60
Score 2: 80
Average: 70
Result: Passed*/


?>