<html>
   <head>
     <title>essai 1:une page php </title>
   </head>
   <body>
     <center>
     <h1>Une page php generee dynamiquement</h1>
     <h2>
<?php
     $maintenant=time();
     echo date("j/m/y, H:i:s",$maintenant);
?>
     </h2>
     <br>
 

   <table border="1">
     <tr>
       <td>cellule(1,1)</td>
       <td>cellule(1,2)</td>
     </tr>
     <tr>
       <td>cell</td>
       <td>ce</td>
     </tr>
</table>

<table border="0">
   <tr>
     <td>une image</td>
     <td><img border="0" src="/Bureau/Capture d’écran 2018-08-05 à 19.22.0 width="80" height="95"></td>
   </tr>
</table>

<form action="cible.php" method="POST" enctype="multipart/form-data">
<table border="0">
   <tr>
     <td>etes-vous marie</td>
     <td>
       <input type="radio" value="oui" name="r1">oui
       <input type="radio" value="non" name="r1">non
     </td>
   </tr>

   <tr>
     <td>case a crocher</td>
     <td> 
       <input type="checkbox" name="c1" value="un">1
       <input type="checkbox" name="c1" value="deux">2
     </td>
   </tr>
   <tr>
     <td>champ de saisie</td>
     <td>
       <input type="text" name="txtsaisie" size="20" value="qq mots">
     </td>
   </tr>

    <tr>
     <td>mot de passe</td>
     <td>
       <input type="password" name="txtMdp" size="20" value="unmdp">
     </td>
   </tr>
   <tr>
     <td>boite de saisie</td>
     <td>
       <textarea rows="2" name="areasaisie" cols="20">
ligne1
ligne2
ligne3
</textarea>
     </td>
   </tr>
   
   <tr>
     <td>combo</td>
     <td>
       <select size="1" name="cmbvaleurs">
         <option>choix1</option>
	 <option>choix2</option>
       </select>
     </td>
   </tr>	 

   <tr>
     <td>liste a choix</td>
     <td>
         <select size="3" name="lst1">
           <option selected>liste1</option>
	   <option>liste2</option>
	   <option>liste3</option>
	  </select>
     </td>
    </tr>

   <tr>
     <td>choix multiples</td>
     <td>
       <select size="3" name="lst2" multiple>
	 <option selected>l</option>
	 <option selected>22</option>
	 <option>lfjdaof</option>
	</select>
     </td>
   </tr>

   <tr>
     <td>bouton</td>
     <td>
       <input type="button" value="effacer" name="cmdeffacer" onclick=effacer()>
      </td>
   </tr>

   <tr>
     <td>bouton2</td>
     <td>
        <input type="submit" value="envoyer" name="cmdrenoyer">
     </td>
   </tr>

   <tr>
      <td>retablir</td>
      <td>
        <input type="reset" value="retablir" name="cmdretablir">
      </td>
    </tr>


   <tr>
     <td>formulaire</td>
     <td>
     <input type="file" name="monfichier">
     </td> 
  </tr>


</table>
<input type="hidden" name="secret" value="unevaluer">

</form>

</body>
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                }
        }
}
?>
</html>
