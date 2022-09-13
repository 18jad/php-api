<?php
if (isset($_POST["password"])) {
    $password = $_POST["password"];
    $length_strength = "low";
    $characters_strength = [
        "uppercase" => "no",
        "lowercase" => "no",
        "numbers" => "no",
        "special_characters" => "no",
    ];
    $strengthness_score = 0;
    $overall_strengthness = "very low";

    // check password length
    if (strlen($password) >= 12 && strlen($password) < 14) {
        $length_strength = "medium";
        $strengthness_score++;
    } else if (strlen($password) >= 14) {
        $length_strength = "high";
        $strengthness_score += 2;
    }

    // check if password contains at least 1 uppercase
    if (preg_match('/[A-Z]/', $password)) {
        $characters_strength["uppercase"] = "yes";
        $strengthness_score++;
    }

    // check if password contains at least 1 lowercase
    if (preg_match('/[a-z]/', $password)) {
        $characters_strength["lowercase"] = "yes";
        $strengthness_score++;
    }

    // check if password contains at least 1 digit
    if (preg_match('/[0-9]/', $password)) {
        $characters_strength["numbers"] = "yes";
        $strengthness_score++;
    }

    // check if password contains at least 1 special_characters
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
        $characters_strength["special_characters"] = "yes";
        $strengthness_score++;
    }

    // determine password strengthness based on score
    switch ($strengthness_score) {
        case 2:
            $overall_strengthness = "low";
            break;
        case 3:
            $overall_strengthness = "medium";
            break;

        case 4:
            $overall_strengthness = "medium";
            break;

        case 5:
            $overall_strengthness = "strong";
            break;

        case 6:
            $overall_strengthness = "very strong";
            break;
    }

    $result = [
        "password" => $password,
        "length_strength" => $length_strength,
        "characters_strength" => $characters_strength,
        "strengthness_score" => $strengthness_score,
        "overall_strengthness" => $overall_strengthness,
    ];

    echo json_encode($result);
}
