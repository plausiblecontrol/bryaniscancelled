<?php 
include 'haircuts.php';
include 'prange.php';
$prange = get_prange();
$haircut = get_haircut();

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
    <img class=prange src=\"$haircut\">";
?>

refresh for another sick do
