<?php

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
    'https://i.imgur.com/s8XuS2C.png',
    'https://cdn140.picsart.com/283701075009211.png?r1024x1024',
    'https://i.dlpng.com/static/png/462176_preview.png',
    'https://i0.wp.com/freepngimages.com/wp-content/uploads/2015/11/long-brown-curly-hair-transparent-backgroundpng.png?w=765',
    'http://www.trumpshair.com/images/hairs/hair_1.png',
    'https://i.redd.it/pycc3dli9jsx.png',
    'https://clipartsworld.com/images/girl-with-pigtails-clipart-45.png',
    'https://cdn130.picsart.com/294449133015211.png?r240x240'
];

function get_haircut_id($excludeId = NULL) {
    global $haircuts;
    $randId = array_rand($pranges, 1);
    while($randId == $excludeId) {
        $randId = array_rand($haircuts, 1);
    }
    return $randId;
}

function get_haircut($haircutId) {
    global $haircuts;

    return $haircuts[$haircutId];
};