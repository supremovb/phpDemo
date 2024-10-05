<?php





function computeFare($fareAmount, $discount) {
    $totalFare = $fareAmount * ($discount/100);
    return $totalFare;
}

//$displayValue = computeFare(2,2);
echo computeFare(200,20);


/*
function showName($name, $number) {
    echo "HELLO THERE, ".$name.", your total amount due is ".$number;
}

$amount = 3500;
//$username = "apogi";\



showName("Jphn Doe", $amount);

*/



/*
$indexArray = ["John Doe", "BSIT", "jdoetest@gmail.com", "Bacoor, Cavite"];
echo $indexArray[3];

$student = ["name" => "John Doe",
            "course" => "BSIT",
            "email" => "jdoe@gmail.com",
            "address" => "Bacoor, Cavite"];

            foreach($student as $row) {
                echo $row."<br>";
            }

    
    $student["Address"] = "Bacoor, Cavite";
    $student["name"] = "Jonathan Doe"; // update name
    echo json_encode($student);

*/

















//$_POST["username"];
//$_POST["password"];
/*
$color = array();
//            0        1      2        3
$color = ["green", "blue", "red", "black"];

//echo json_encode($color)."<br>";
//unset($color[3]);
//echo json_encode($color)."<br>";

$data = ["John Doe", "69", "Bacoor, Cavite", "BSIT", "07332857435"];
echo json_encode($data);
*/
/*
//echo $color[2];

//$color[] = "black";
*/

// echo $color;
// echo json_encode($color);


//$color[0] = "yellow";
//echo json_encode($color);
?>