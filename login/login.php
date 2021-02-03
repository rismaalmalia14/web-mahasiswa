<?php

@session_start();
include "koneksi.php";
if (@$_session['mahasiswa']||@$_sesion['operator']){
    header("location:index.php");
}else

?>