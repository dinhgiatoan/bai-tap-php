<?php

$dau_vao = "hoc lap trinh php va hoc lap trinh web";
$dem = substr_count($dau_vao, "hoc");
echo "hoc : ".$dem." lan";echo "\n";

$dem = substr_count($dau_vao, "lap");
echo "lap : ".$dem." lan"; echo "\n";

$dem = substr_count($dau_vao, "trinh");
echo "trinh : ".$dem." lan";echo "\n";

$dem = substr_count($dau_vao, "php");
echo "php : ".$dem." lan";echo "\n";

$dem = substr_count($dau_vao, "va");
echo "va : ".$dem." lan";echo "\n";

$dem = substr_count($dau_vao, "web");
echo "web : ".$dem." lan";


?>