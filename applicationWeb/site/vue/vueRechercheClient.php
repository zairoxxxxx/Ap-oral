<?php
    $titre = "Recherche d'un client";
    include "../vue/entete.html.php";
    include "../vue/pied.html";
?>

<body>
    <center>
<form action="../controleur/rechercheClient.php" method="POST" style="width:40%;">
    <div class="form-group">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="idIntervention" placeholder="Entrez le nom complet du client'" name="numC" requiered>
            <label for="floatingInput">Numéro du client: </label>
        </div>
        <div style="text-align:center;">
            <input class="btn btn-primary" type="submit" value = "Valider" style=" width:30%;">
        </div><br>
    </div>

    <div class="form-group">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="idIntervention" placeholder="Entrez le nom complet du client'" name="nomC" requiered>
            <label for="floatingInput">Nom du client : </label>
        </div>
        <div style="text-align:center;">
            <input class="btn btn-primary" type="submit" value = "Valider" style=" width:30%;">
        </div><br>
    </div>

    <div class="form-group">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="idIntervention" placeholder="Entrez le prenom complet du client'" name="prenomC" requiered>
            <label for="floatingInput">Prenom du client : </label>
        </div>
        <div style="text-align:center;">
            <input class="btn btn-primary" type="submit" value = "Valider" style=" width:30%;">
        </div>
    </div>

</form>
    </center>
</body>