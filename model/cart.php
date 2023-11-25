<?php
function tong() {
    $i = 0;
    $tong = 0;
    foreach ($_SESSION['giohang'] as $cart) {
        extract($cart);
        $thanhtien = $price * $soluong;
        $tong += $thanhtien;
    }
   return $tong;
}

function insert_cart($iddh,$idsp,$name,$img,$price,$soluong){
        $sql = "insert into cart (iddh,idsp,name,img,price,soluong) values ('$iddh','$idsp','$name','$img','$price','$soluong')";
        pdo_execute($sql);
}

