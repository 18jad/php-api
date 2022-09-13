<?php
if (isset($_GET["date"])) {
    $date = $_GET["date"];
    $christmas_day = 'December 25';

    // convert to unix timestamp to check difference
    $date_time = strtotime($date);
    $christmas_time = strtotime($christmas_day);

    // check how many days left
    $days_left = ceil(($christmas_time - $date_time) / 60 / 60 / 24);

    // check if its christmas
    $isChristmas = ($days_left == 0) ? true : false;

    $result = [
        "date" => $date,
        "christmas_day" => $christmas_day,
        "date_unix" => $date_time,
        "christmas_unix" => $christmas_time,
        "isChristmas" => $isChristmas,
        "days_left" => $days_left,
        "description" => $isChristmas ? "IT'S CHRISTMAS ALREADY WOOHOO, LET'S CELEBRATE" : "$days_left" . ($days_left > 1 ? " days " : " day ") . "left for christmas!",
    ];

    echo json_encode($result);
} else {
    echo json_encode(['error' => 'No date provided.']);
}
