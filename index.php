<?php 
include 'redir.php';
include 'haircuts.php';
include 'prange.php';

$origPrangeId = $_GET['prange_id'] ?? NULL;
$origHairId = $_GET['hair_id'] ?? NULL;

if(NULL === $origPrangeId || NULL === $origHairId) {
    do_redir($origPrangeId, $origHairId);
} else {
    $prange = get_prange($origPrangeId);
    $haircut = get_haircut($origHairId);
    $newPrangeId = get_prange_id($origPrangeId);
    $newHaircutId = get_haircut_id($origHairId);
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
            top: 55%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        img.resize {
            width:800;
            height:800;
        }

        body {
            background: black;
        }

        h1, h2, h3 {
            color: white;
        }
    </style>

    <center><h1> BRYAN IS CANCELLED </h1></center>
    <center>
        <form action=\"index.php\">
            <input type=\"submit\" value=\"Random combo please!\">
        </form>
        <form action=\"index.php\">
            <input type=\"hidden\" id=\"hair_id\" name=\"hair_id\" value=\"$origHairId\">
            <input type=\"hidden\" id=\"prange_id\" name=\"prange_id\" value=\"$newPrangeId\">
            <input type=\"submit\" value=\"New face please!\">
        </form>
        <form action=\"index.php\">
            <input type=\"hidden\" id=\"prange_id\" name=\"prange_id\" value=\"$origPrangeId\">
            <input type=\"hidden\" id=\"hair_id\" name=\"hair_id\" value=\"$newHaircutId\">
            <input type=\"submit\" value=\"New hair please!\">
        </form>
        <div>
            <img class=prange src=\"$prange\">
            <img class=prange src=\"$haircut\">
        </div>
    </center>";
}

?>
