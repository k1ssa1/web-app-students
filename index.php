<!DOCTYPE html>
<?php
include_once './racine.php';
?>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ajout des étudiants</title>

 <style>
     body {
         background-color: orange;
         font-family: sans-serif;
     }

     input {
         margin: 10px 5px 10px;
     }

     .btn{
         background-color:whitesmoke;
         padding: 5px 10px;
         border-radius: 10px;
         color: salmon;
         font-weight: bold;
         border: 2px solid salmon;
         width: 120px;
         font-family: sans-serif;
         transition: 0.5s;
        
     }

     .btn:hover{
         background-color: salmon;
         transition: 0.7s;
         color: white;
     }

     fieldset {
         padding: 20px;
         margin: 20px 50px 40px;
         border: 4px solid white;
         color: white;
         font-weight: bold;
         background-color: darkorange
     }

     .result {
         background-color: darkorange;
         padding: 40px;
         margin: 20px 310px 10px;
         border: 4px orange solid;
         outline: 2px solid salmon;
        
     }

     h1{
         text-align: center;
         color: white;
         font-family: sans-serif;
     }

     h3{
         text-align: center;
         font-family: sans-serif;
         color: whitesmoke;
     }

         
   

 </style>

 </head>
 <body>
     <h1>Bienvenu(e) cher(e) étudiant(e)</h1>
 <form method="GET" action="controller/addEtudiant.php">
 <fieldset>
 <legend>Veuillez ajouter un nouvel étudiant ici</legend>
 <table border="0">
 <tr>
 <td>Nom</td>
<td><input type="text" name="nom" value="" /></td>
 </tr>
 <tr>
 <td>Prenom</td>
<td><input type="text" name="prenom" value="" /></td>
 </tr>
<tr>
 <td>Ville</td>
<td>
 <select name="ville">
 <option value="Rabat">Rabat</option>
 <option value="Marrakech">Marrakech</option>
 <option value="Casablanca">Casablanca</option>
<option value="Agadir">Agadir</option>
<option value="Hoceima">Hoceima</option>
 </select>
 </td>
 </tr>
<tr>
 <td>Sexe </td>
<td>
 M<input type="radio" name="sexe" value="homme" />
F<input type="radio" name="sexe" value="femme" />
 </td>
 </tr>
 <tr>
 <td></td>
<td>
 <input class="btn" type="submit" value="Envoyer" />
<input class="btn" type="reset" value="Annuler" />
 </td>
 </tr>

 </table>
 </fieldset>
 </form>
 <table border="1" class='result'>
 <h3> Liste des étudaint(e)s </h3>    
 <thead >
 <tr>
 <th style="padding: 10px 20px;font-family: sans-serif;background-color: salmon; color:white">ID</th>
<th  style="padding: 10px 20px;font-family: sans-serif;background-color: salmon; color:white"">Nom</th>
<th  style="padding: 10px 20px;font-family: sans-serif;background-color: salmon; color:white"">Prenom</th>
<th  style="padding: 10px 20px;font-family: sans-serif;background-color: salmon; color:white"">Ville</th>
<th  style="padding: 10px 20px;font-family: sans-serif;background-color: salmon; color:white"">Sexe</th>
<th  style="padding: 10px 20px;font-family: sans-serif;background-color: salmon; color:white"">Supprimer</th>
<th  style="padding: 10px 20px;font-family: sans-serif;background-color: salmon; color:white"">Modifier</th>
 </tr>
 </thead>
 <tbody>
 <?php
 include_once RACINE . '/service/EtudiantService.php';
 $es = new EtudiantService();
 foreach ($es->findAll() as $e) {
 ?>
<tr>
 <td style="text-align: center; padding: 5px" ><?php echo $e->getId(); ?></td>
<td style="text-align: center; padding: 5p"><?php echo $e->getNom(); ?></td>
<td style="text-align: center; padding: 5p"><?php echo $e->getPrenom(); ?></td>
<td style="text-align: center; padding: 5p"><?php echo $e->getVille(); ?></td>
<td style="text-align: center; padding: 5p"><?php echo $e->getSexe(); ?></td>
<td style="text-align: center; padding: 5p">
 <a href="controller/deleteEtudiant.php?id=
<?php echo $e->getId(); ?>">Supprimer</a> </td>
 <td style="text-align: center; padding: 5p"><a href="updateEtudiant.php">Modifier</a></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </body>
</html>