<?php

$pranges = [
    'https://i.imgur.com/V42eWe4.png',
    'https://i.imgur.com/PWQJRuB.jpg',
    'https://i.imgur.com/kevgrSY.jpg',
    'https://i.imgur.com/PKqssSh.jpg',
    'https://i.imgur.com/bVvLemm.jpg'
];

function get_prange_id($excludeId = NULL) {
    global $pranges;
    $randId = array_rand($pranges, 1);
    while($randId == $excludeId) {
        $randId = array_rand($pranges, 1);
    }
    return $randId;
}

function get_prange($prangeId) {
    global $pranges;

    return $pranges[$prangeId];
};