<?php
$titre = "profile";
    require("header.php");
?>
<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="photo.png" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Editer le profile</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">"Le nom"</h4><i class="fas fa-map-marker-alt mr-2"></i>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"></h5><small class="text-muted"> <i class="fas fa-image mr-1"></i></small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"></h5><small class="text-muted"> <i class="fas fa-user mr-1"></i></small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"></h5><small class="text-muted"> <i class="fas fa-user mr-1"></i></small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Les questions posées</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Question 1</p>
                    <p class="font-italic mb-0">Question 2</p>
                    <p class="font-italic mb-0">Question 3</p>
                </div>
            </div>
            
        </div>
    </div>
    <?php
        require("./db/db.php");
        $co = connexionBdd();
        $utilisateur = $co->query("SELECT * FROM utilisateurs");
        while ($donnees = $utilisateur->fetch())
        {
        echo($donnees["mot_de_passeUtilisateur"]);
        }
        $utilisateur->closeCursor();
    ?>
</div>
</body>
</html>