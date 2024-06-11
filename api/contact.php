<?php
header("Content-Type: application/json");

$data = [
    "whatsNum" => "+201211383010",
    "fbPage" => "https://www.facebook.com/share/hphrT9t1ygfZVh5Y/?mibextid=qi2Omg",
    "instaPage" => "https://www.instagram.com/ahmed.osama.383?igsh=OGQ5ZDc2ODk2ZA==",
];

echo json_encode($data);
