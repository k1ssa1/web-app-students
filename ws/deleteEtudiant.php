<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 include_once("../racine.php");
 include_once RACINE.'/service/EtudiantService.php';
 delete();
}
function delete(){
extract($_GET);
$es = new EtudiantService();
$es->delete($es->findById($id));
 //chargement de la liste des étudiants sous format json
 echo json_encode($es->findAllApi());
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

