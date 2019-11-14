<?php 
include 'redir.php';
include 'haircuts.php';
include 'prange.php';

$origPrangeId = $_GET['prange_id'] ?? NULL;
$origHairId = $_GET['hair_id'] ?? NULL;
if(!$origPrangeId || !$origHairId) {
    do_redir($origPrangeId, $origHairId);
} else {
    $prange = get_prange($origPrangeId);
    $haircut = get_haircut($origHairId);
    
    echo "
    <style>
        .prange {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 800;
            height: 800;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    
        img.resize {
            width:800;
            height:800;
          }
    </style>
        <img class=prange src=\"$prange\">
        <img class=prange src=\"$haircut\">
        <center>
            <form action=\"index.php\">
                <input type=\"submit\" value=\"Random Do\">
            </form>
        </center>";
};
?>
