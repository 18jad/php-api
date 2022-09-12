<?php  
    if(isset($_GET["string"])) {
        $string = $_GET["string"];
        $reversed_string = strrev($string);
        $ispalindrome = false;

        if($string == $reversed_string) {
            $ispalindrome = true;
        }

        $result = [
            "string" => $string,
            "palindrome" => $ispalindrome, 
            "result" => $ispalindrome ? "this string is palindrome." : "this string is not palindrome.",
        ];

        echo json_encode($result);
    } else {
        echo json_encode(["error" => "string is not defined."]);
    }
?>