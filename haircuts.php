<?php

function get_haircut() {
    $haircuts = [
        'https://i.pinimg.com/originals/61/bf/a8/61bfa8258dc2c55193a19d16985726aa.png',
        'https://i.imgur.com/MGnUcxs.png',
        'https://i.imgur.com/xKLae88.png',
        'https://i.imgur.com/BZWWxnH.png',
        'https://i.imgur.com/DKjiITa.png',
        'https://i.imgur.com/FsoFPs9.png',
        'https://i.imgur.com/Eq2ul9p.png',
        'https://i.imgur.com/g7yuRxz.png',
        'https://i.imgur.com/3K1GfkI.png',
        'https://i.imgur.com/12ijgRi.png',
        'https://i.imgur.com/5bbWHUC.png',
        'https://i.imgur.com/66PgbWm.png',
        'https://i.imgur.com/s8XuS2C.png'
    ];

    $randIndex = array_rand($haircuts, 1);

    return $haircuts[$randIndex];
};