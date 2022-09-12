<?php  
    if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        $calculated_result = pow($a, 3) + $b * $c - $a / $b;

        $result = [
            "operation" => "$a^3 + $b*$c - $a/$b",
            "calculated_operation" => $calculated_result,
        ];

        echo json_encode($result);
    } else {
        echo json_encode(["error" => "All variables are required."]);
    }
?>