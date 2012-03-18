<?php
if(isset($_GET['action'])){
$action=$_GET['action'];
}else{
$action='index';
}

$myFile=$action.'.php';

include('core/'.$myFile);
