<section class="content-header">
    <div class='container-fluid'>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <div class="w-50">
                <h1 class="h3 mb-0 text-gray-800">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Ajout d'une nouvelle maladie</span>
                </h1>
                
            </div>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="w-50 d-flex justify-content-end">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fas fa-fw fa-hospital-alt"></i><a href="?requette=dashboard">Accueil</a></li>
                <li class="breadcrumb-item"><i class="fas fa-fw fa-disease"></i><a href="?requette=liste-maladie">Maladies</a></li>
                <li class="breadcrumb-item"><i class="fas fa-fw fa-disease"></i><a href="?requette=ajout-maladie">Ajouter un maladies</a></li>
                </ol>
            </nav>
        </div>

    </div>
</section>


<section class="content">

    <div class="container-fluid">


        <div class="col-md-11 d-flex justify-content-end text-end">
            <a href="?requette=liste-maladie" class="btn btn-success">Consulter la liste des maladies</a>
        </div>
        
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

                <form class="form-horizontal" action="?requette=ajout-maladie-traitement" method="POST">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nommal" class="col-sm-2 col-form-label">Nom de la maladie: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nommal" id="nommal"
                                    placeholder="Veuillez entrer le nom de la maladie"
                                    value="<?= (isset($donnees["nommal"]) && !empty($donnees["nommal"])) ? $donnees["nommal"] : ""; ?>"
                                >


                                <span class="text-danger">

                                    <?php
                                    if (isset($erreurs["nommal"]) && !empty($erreurs["nommal"])) {
                                        echo $erreurs["nommal"];
                                    }

                                    ?>

                                </span>
                            </div>
                        </div>
                        
                    </div>

                    <div class="card-footer">
                        <button type="reset" class="btn btn-danger">Annuler</button>
                        <button type="submit" class="btn btn-primary  float-right">Enregistrer une maladie</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</section>