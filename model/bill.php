<?php
function taodonhang($tongdonhang,$ten,$diachi,$tel,$email,$madh){
    $sql = "insert into donhang(tongdonhang,hoten,diachi,tel,email,madh) values ('$tongdonhang','$ten','$diachi','$tel','$email','$madh')";
    $listdonhang = pdo_execute_returnid($sql);
    return $listdonhang;
}