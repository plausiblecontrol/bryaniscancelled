<?php

function do_redir($origPrangeId, $origHairId) {
    if(!$origPrangeId) {
        $origPrangeId = get_prange_id();
    }
    if(!$origHairId) {
        $origHairId = get_haircut_id();
    }
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/index.php?prange_id=$origPrangeId&hair_id=$origHairId");
};