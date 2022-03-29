<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 include_once("../racine.php");
 include_once RACINE.'/service/EtudiantService.php';
 update();
}
function update(){
 extract($_POST);
 $es = new EtudiantService();
 //insertion d’un étudiant
 $es->update($o);
 //chargement de la liste des étudiants sous format json
 header('Content-type: application/json');
 echo json_encode($es->findAllApi());
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

