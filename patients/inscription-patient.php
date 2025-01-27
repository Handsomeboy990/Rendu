<?php
$liste_medicaments = get_liste_medicaments();
?>


<section class="content-header">
    <div class='container-fluid'>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <div class="w-50">
                <h1 class="h3 mb-0 text-gray-800">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Ajout d'un nouveau patient</span>
                </h1>
            </div>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="w-50 d-flex justify-content-end">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fas fa-fw fa-hospital-alt"></i><a href="?requette=dashboard">Accueil</a></li>
                <li class="breadcrumb-item"><i class="fas fa-fw fa-hospital-user"></i><a href="?requette=patient-dashboard">Patients</a></li>
                <li class="breadcrumb-item"><i class="fas fa-fw fa-user-plus"></i><a href="?requette=inscription-patient">Ajouter un patient</a></li>
                </ol>
            </nav>
        </div>

    </div>
</section>


<section class="content">

    <div class="container-fluid">

        <div class="card card-outline card-primary bg-transparent mt-5">

            <div class="card-body">
                <?php

                if (isset($message["statut"]) && 0 == $message["statut"]) {

                    ?>
                    <div class="alert alert-warning" role="alert">
                        <?= $message["message"]; ?>
                    </div>
                    <?php

                } else if (isset($message["statut"]) && 1 == $message["statut"]) {

                    ?>
                    <div class="alert alert-success" role="alert">
                        <?= $message["message"];?>
                    </div>
                    <?php

                }

                ?>

                <form action="?requette=inscription-patient-traitement" method="POST">

                    <div class="row">

                        <div class="col-sm-12">

                            <div class="col-sm-12 mb-3">
                                <h2 class="d-flex justify-content-center mb-5">Informations Générales du Patient</h2>
                            </div>
                            <div class="form-label col-sm-12 mb-3">
                                <label for="nom_patient" class="col-form-label">Nom<span class="text-danger">*</span></label>
                                
                                <div class="input-group">
    
                                    <input type="text" required= "required" class="form-control" name="nom_patient" id="nom_patient" placeholder="Veuillez entrer le nom du patient" value="<?= (isset($donnees["nom_patient"]) && !empty($donnees["nom_patient"])) ? $donnees["nom_patient"] : ""; ?>">
        
        
                                    <div class="input-group-append">

                                        <div class="input-group-text">

                                            <span class="fas fa-user"></span>

                                        </div>

                                    </div>
                                </div>
                            
                            
                                <span class="text-danger">

                                    <?php
                                    if (isset($erreurs["nom_patient"]) && !empty($erreurs["nom_patient"])) {
                                        echo $erreurs["nom_patient"];
                                    }

                                    ?>

                                </span>
                            
                            </div>


                            <div class="form-label col-sm-12 mb-3">
                                <label for="prenom_patient" class="col-form-label">Prénom(s)<span class="text-danger">*</span></label>
                               
                                <div class="input-group">
                                
                                    <input type="text" class="form-control" name="prenom_patient" id="prenom_patient" required= "required" placeholder="Veuillez entrer le prénom du patient" value="<?= (isset($donnees["prenom_patient"]) && !empty($donnees["prenom_patient"])) ? $donnees["prenom_patient"] : ""; ?>">
                            
                                    <div class="input-group-append">

                                        <div class="input-group-text">

                                            <span class="fas fa-user"></span>

                                        </div>

                                    </div>

                                </div>
                                <span class="text-danger">

                                    <?php
                                    if (isset($erreurs["prenom_patient"]) && !empty($erreurs["prenom_patient"])) {
                                        echo $erreurs["prenom_patient"];
                                    }

                                    ?>

                                </span>
                            
                            </div>
                            
                            <!-- <div class="form-label">
                                <label id="name-label" class="label-inscription">Prénom</Name></label>
                                <input type="text"  id="name" placeholder ="Prénom du patient" required>
                            </div> -->

                            <!-- <div class="form-label">
                                <label for="sexe_patient" class="col-sm-2 col-form-label">Sexe</label>
                                <input type="radio" name="sexe_patient" value="M" >Masculin   
                                
                                <input type="radio" name="sexe_patient" value="F" style="margin-left: 10px;">Féminin
                            </div> -->

                            <!-- Le champs sexe -->
                            <div class="col-sm-12 mb-3">

                                <label for="inscription-sexe_patient">

                                    Sexe:

                                    <span class="text-danger">*</span>

                                </label>

                                <div class="form-group clearfix">


                                    <div class="input-group">
                                        <select name="sexe_patient" required="required" title ="Selectionner le sexe du patient" class="form-control" placeholder="Selectionner le sexe du patient">

                                            <option   value="">Selectionner sexe</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Féminin</option>
                                        </select>

                                        
                                        <div class="input-group-append">

                                            <div class="input-group-text">

                                                <span class="fas fa-venus-mars"></span>

                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <span class="text-danger">

                                    <?php

                                    if (isset($erreurs["sexe_patient"]) AND !empty($erreurs["sexe_patient"])) {
                                        echo $erreurs["sexe_patient"];
                                    }

                                    ?>

                                </span>

                            </div>

                            <!-- Le champs date de naissance -->
                            <div class="col-sm-12 mb-3">

                                <label for="inscription-date_naissance_patient">

                                    Date de naissance:

                                    <span class="text-danger">*</span>

                                </label>

                                <div class="input-group mb-3">

                                    <input type="date" name="date_naissance_patient" required id="inscription-date_naissance_patient" class="form-control"
                                        placeholder="Entrer la date de naissance"
                                        value="<?= (isset($donnees["date_naissance_patient"]) AND !empty($donnees["date_naissance_patient"])) ? $donnees["date_naissance_patient"] : ""; ?>"
                                        required>

                                    
                                    <div class="input-group-append">

                                        <div class="input-group-text">

                                            <span class="fas fa-baby"></span>

                                        </div>

                                    </div>
                               
                               
                                </div>

                                <span class="text-danger">

                                    <?php


                                    if (isset($erreurs["date_naissance_patient"]) AND !empty($erreurs["date_naissance_patient"])) {
                                        echo $erreurs["date_naissance_patient"];
                                    }

                                    ?>

                                </span>

                            </div>

                            <div class="form-label col-sm-12 mb-3">
                                <label for="allergie" class="col-form-label">Allergie(s)<span class="text-danger">*</span></label>
                                
                                <div class="input-group">
                                    
                                <?php if ((isset($liste_medicaments) && !empty($liste_medicaments))) {

                                    ?>
                                    <select name="allergie" id="allergie"  class="form-control" required="required" title ="Selectionner l'(es) allergie(s) du patient" placeholder="Selectionner l'(es) allergie(s) du patient">

                                        <option   value="Néant">Aucun</option>
                                        <?php

                                        foreach ($liste_medicaments as $medicament) {
                                        ?>

                                        <option value="<?= (isset($donnees["nommed"]) && !empty($donnees["nommed"])) ? $donnees["nommed"] : ""; ?><?= $medicament["nommed"]; ?>"> <?= (isset($donnees["nommed"]) && !empty($donnees["nommed"])) ? $donnees["nommed"] : ""; ?><?= $medicament["nommed"]; ?> </option>
                                    
                                        <?php
                                        }

                                        ?>

                                <?php                    
                                }
                                ?> 

                                    <input style="display:none ;">                                
                                    <div class="input-group-append">

                                        <div class="input-group-text">

                                            <span class='bx bxs-injection'></span>

                                        </div>

                                    </div>

                  </div>
                                <span class="text-danger">

                                    <?php
                                    if (isset($erreurs["allergie"]) && !empty($erreurs["allergie"])) {
                                        echo $erreurs["allergie"];
                                    }

                                    ?>

                                </span>
                            
                            </div>



                        </div>
                        
                        

                    </div>

                    <div class="row mt-3 card-footer">

                        <div class="col-6">

                            <button type="reset" class="btn btn-danger btn-block">Annuler</button>

                        </div>

                        <div class="col-6">

                            <button type="submit" class="btn btn-success btn-block">Ajouter patient</button>

                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>

</section>