<?php

function do_redir($origPrangeId, $origHairId) {
    $url = get_redir_url($origPrangeId, $origHairId);
    header('Location:'. $url);
    die();
};

function get_redir_url($origPrangeId, $origHairId) {
    if(NULL === $origPrangeId) {
        $origPrangeId = get_prange_id();
    }
    if(NULL === $origHairId) {
        $origHairId = get_haircut_id();
    }

    return "http://" . $_SERVER['HTTP_HOST'] . "/index.php?prange_id=$origPrangeId&hair_id=$origHairId";
};