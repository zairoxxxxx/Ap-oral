<?php
    
    include "../modele/bd.inc.php";
    include "../controleur/connexion.php";
    include "../vue/pied.html";
    include "../vue/entete.html";
    
    $mysqli = mysqli_connect("localhost:3306", "root", "", "ap2eme");
    if(isset($_POST["numC"])){
    if(empty($_POST['numC'])){
        echo "";
    }
    else{
    $resultat = mysqli_query($mysqli,"SELECT * FROM client WHERE numClient like '%" . $_POST["numC"]. "%'") or die("Erreur au niveau de la requête");
    if($resultat){
        echo"<h1< Résultat de la recherche : </h1><br>";
        $nbClient = mysqli_num_rows($resultat);
        if($nbClient > 0){
        echo "<table class='table table-hover' border ='1'>
            <tr class='table-primary'>
            <th scope='row'>Numéro client</th>
            <th scope='row'>Nom du client</th>
            <th scope='row'>Prénom du client</th>
            <th scope='row'>Raison Sociale</th>
            <th scope='row'>Siren</th>
            <th scope='row'>codeApe </th>
            <th scope='row'>Teléphone</th>
            <th scope='row'>Adresse</th>
            <th scope='row'>Mail</th>
            <th scope='row'>Durée Deplacement</th>
            <th scope='row'>Distance(km)</th>
            <th scope='row'>Contrat de maintenance</th>
            <th scope='row'> idAgence </th>
            </tr>";

        while($row = mysqli_fetch_array($resultat)){
            echo "<tr><br>";
            echo "<td>".$row['numClient'] . "</td>";
            echo "<td>".$row['nomClient'] . "</td>";
            echo "<td>".$row['prenomClient'] . "</td>";
            echo "<td>".$row['raisonSocialeClient'] . "</td>";
            echo "<td>".$row['sirenClient'] . "</td>";
            echo "<td>".$row['codeApeClient'] . "</td>";
            echo "<td>".$row['telClient'] . "</td>";
            echo "<td>".$row['adresseClient'] . "</td>";
            echo "<td>".$row['mailClient'] . "</td><br>";
            echo "<td>".$row['dureeDeplacementClient'] . "</td>";
            echo "<td>".$row['distanceKmClient'] . "</td>";
            echo "<td>".$row['contratmaintenance'] . "</td>";
            echo "<td>".$row['idAgence'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        }else{
            echo "<p> Aucun résultat ne correspond à votre recherche.</p>";
        }
    }else{
        echo "erreur dans l'exécution de la requête.<br>";
        echo "Message d'erreur : " . mysql_error($mysqli);
    }
    }
    }

    if (isset($_POST["nomC"])){
    if(empty($_POST['nomC'])){
        echo "";
    }
    else{
    $resultat = mysqli_query($mysqli,"SELECT * FROM client WHERE nomClient like '%" . $_POST["nomC"]. "%'") or die("Erreur au niveau de la requête");
    if($resultat){
        echo"<h1< Résultat de la recherche : </h1><br>";
        $nbClient = mysqli_num_rows($resultat);
        if($nbClient > 0){
            echo "<table class='table table-hover' border ='1'>
            <tr class='table-primary'>
            <th scope='row'>Numéro client</th>
            <th scope='row'>Nom du client</th>
            <th scope='row'>Prénom du client</th>
            <th scope='row'>Raison Sociale</th>
            <th scope='row'>Siren</th>
            <th scope='row'>codeApe </th>
            <th scope='row'>Teléphone</th>
            <th scope='row'>Adresse</th>
            <th scope='row'>Mail</th>
            <th scope='row'>Durée Deplacement</th>
            <th scope='row'>Distance(km)</th>
            <th scope='row'>Contrat de maintenance</th>
            <th scope='row'> idAgence </th>
            </tr>";
    
            while($row = mysqli_fetch_array($resultat)){
                echo "<tr><br>";
                echo "<td>".$row['numClient'] . "</td>";
                echo "<td>".$row['nomClient'] . "</td>";
                echo "<td>".$row['prenomClient'] . "</td>";
                echo "<td>".$row['raisonSocialeClient'] . "</td>";
                echo "<td>".$row['sirenClient'] . "</td>";
                echo "<td>".$row['codeApeClient'] . "</td>";
                echo "<td>".$row['telClient'] . "</td>";
                echo "<td>".$row['adresseClient'] . "</td>";
                echo "<td>".$row['mailClient'] . "</td><br>";
                echo "<td>".$row['dureeDeplacementClient'] . "</td>";
                echo "<td>".$row['distanceKmClient'] . "</td>";
                echo "<td>".$row['contratmaintenance'] . "</td>";
                echo "<td>".$row['idAgence'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            }else{
                echo "<p> Aucun résultat ne correspond à votre recherche.</p>";
            }
    }else{
        echo "erreur dans l'exécution de la requête.<br>";
        echo "Message d'erreur : " . mysqli_error($mysqli);
    }
    }
    }

    if (isset($_POST["prenomC"])){
    if(empty($_POST['prenomC'])){
        echo "";
    }
    else{
    $resultat = mysqli_query($mysqli,"SELECT * FROM client WHERE prenomClient like '%" . $_POST["prenomC"]. "%'") or die("Erreur au niveau de la requête");
    if($resultat){
        echo"<h1< Résultat de la recherche : </h1><br>";
        $nbClient = mysqli_num_rows($resultat);
        if($nbClient > 0){
            echo "<table class='table table-hover' border ='1'>
            <tr class='table-primary'>
            <th scope='row'>Numéro client</th>
            <th scope='row'>Nom du client</th>
            <th scope='row'>Prénom du client</th>
            <th scope='row'>Raison Sociale</th>
            <th scope='row'>Siren</th>
            <th scope='row'>codeApe </th>
            <th scope='row'>Teléphone</th>
            <th scope='row'>Adresse</th>
            <th scope='row'>Mail</th>
            <th scope='row'>Durée Deplacement</th>
            <th scope='row'>Distance(km)</th>
            <th scope='row'>Contrat de maintenance</th>
            <th scope='row'> idAgence </th>
            </tr>";
    
            while($row = mysqli_fetch_array($resultat)){
                echo "<tr><br>";
                echo "<td>".$row['numClient'] . "</td>";
                echo "<td>".$row['nomClient'] . "</td>";
                echo "<td>".$row['prenomClient'] . "</td>";
                echo "<td>".$row['raisonSocialeClient'] . "</td>";
                echo "<td>".$row['sirenClient'] . "</td>";
                echo "<td>".$row['codeApeClient'] . "</td>";
                echo "<td>".$row['telClient'] . "</td>";
                echo "<td>".$row['adresseClient'] . "</td>";
                echo "<td>".$row['mailClient'] . "</td><br>";
                echo "<td>".$row['dureeDeplacementClient'] . "</td>";
                echo "<td>".$row['distanceKmClient'] . "</td>";
                echo "<td>".$row['contratmaintenance'] . "</td>";
                echo "<td>".$row['idAgence'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            }else{
                echo "<p> Aucun résultat ne correspond à votre recherche.</p>";
            }
    }else{
        echo "erreur dans l'exécution de la requête.<br>";
        echo "Message d'erreur : " . mysqli_error($mysqli);
    }
    }
    function updateClient(){
        $mysqli = mysqli_connect("localhost:3306", "root", "", "ap2eme");

    }
    }

?>