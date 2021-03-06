<?php

if(isset($_POST["submit"]))
{
    $arg = array($_POST["nom"], $_POST["resume"], $_POST["description"], $_POST["mesure"]);
    App\App::getDB()->prepare("INSERT INTO ingredients (nom, resume, description, unitemesure) VALUES (?, ?, ?, ?)",$arg ,'', true, false);

    $image1 = file_get_contents($_FILES['image1']['tmp_name']);
    $image2 = file_get_contents($_FILES['image2']['tmp_name']);
    $image3 = file_get_contents($_FILES['image3']['tmp_name']);
    $arg = array($_POST["pourcentagealcool"], $_POST["prixlitre"], $_POST["cotesur5"],$image1,$image2 ,$image3);
    App\App::getDB()->prepare("INSERT INTO boissons (pourcentagealcool, prixlitre, cotesur5, image1, image2, image3, idingredient) VALUES (?, ?, ?, ?, ?, ?, (SELECT idingredient FROM ingredients ORDER BY idingredient DESC LIMIT 1))",$arg ,'', true, false);

    switch($_POST["categorie"])
    {
        case 'biere':
            $arg = array($_POST["type"], $_POST["pays"], $_POST["couleur"]);
            App\App::getDB()->prepare("INSERT INTO bieres (type, paysorigine,couleur, idingredient) VALUES (?, ?, ?, (SELECT idingredient FROM ingredients ORDER BY idingredient DESC LIMIT 1))",$arg ,'', true, false);
            break;
        case 'alcoolfort':
            App\App::getDB()->insert("INSERT INTO ALCOOLSFORTS VALUES ((SELECT idingredient FROM INGREDIENTS ORDER BY idingredient DESC LIMIT 1))");


    }
}

?>
<div id="content">

    <!-- page-banner
        ================================================== -->
    <div class="section-content page-banner error-page-banner">
        <div class="container">
            <h1>Encodage de données</h1>
        </div>

    </div>

    <!-- contact section
        ================================================== -->
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Ingrédient</h1>
                    <form action="?p=encodage" method="post">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" placeholder="Nom" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Résumé</label><br>
                            <textarea cols="120" placeholder="Le résumé" name="resume" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label><br>
                            <textarea col="120" placeholder="La description" name="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Unité de mesure</label><br>
                            <select class="form-control" name="mesure">
                                <option>l</option>
                                <option>cl</option>
                                <option>gr</option>
                                <option>pincées</option>
                                <option>cuillère à café</option>
                                <option>cuillère à soupe</option>
                            </select>
                        </div>
                        <input type="hidden" name="categorie" value="simple">
                        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer"><br><br>
                    </form>
                </div>

                <div class="col-md-4">
                    <h1>Bière</h1>
                    <form action="?p=encodage" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" placeholder="Nom" >
                        </div>
                        <div class="form-group">
                            <label>Résumé</label><br>
                            <textarea cols="120" placeholder="Le résumé" name="resume" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label><br>
                            <textarea col="120" placeholder="La description" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Type</label><br>
                            <input type="text" class="form-control" name="type" placeholder="Type">
                        </div>
                        <div class="form-group">
                            <label>Pays d'origine</label><br>
                            <input type="text" class="form-control" name="pays" placeholder="Pays">
                        </div>
                        <div class="form-group">
                            <label>Couleur</label><br>
                            <input type="text" class="form-control" name="couleur" placeholder="Couleur">
                        </div>
                        <div class="form-group">
                            <label>Unité de mesure</label><br>
                            <select class="form-control" name="mesure">
                                <option>l</option>
                                <option>cl</option>
                                <option>gr</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pourcentage d'alcool</label><br>
                            <input type="text" class="form-control" name="pourcentagealcool" placeholder="Pourcentage d'alcool">
                        </div>
                        <div class="form-group">
                            <label>Prix au litre</label><br>
                            <input type="text" class="form-control" name="prixlitre" placeholder="Prix au litre">
                        </div>
                        <div class="form-group">
                            <label>Cote sur 5</label><br>
                            <input type="text" class="form-control" name="cotesur5" placeholder="Cote sur 5">
                        </div>
                        <div class="form-group">
                            <label>Image 1</label><br>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                            <input type="file" class="form-control" name="image1" placeholder="Image 1 (max 1 Mo)">
                        </div>
                        <div class="form-group">
                            <label>Image 2</label><br>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                            <input type="file" class="form-control" name="image2" placeholder="Image 2 (max 1 Mo)">
                        </div>
                        <div class="form-group">
                            <label>Image 3</label><br>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                            <input type="file" class="form-control" name="image3" placeholder="Image 3 (max 1 Mo)">
                        </div>

                        <input type="hidden" name="categorie" value="biere">
                        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer"><br><br>
                    </form>
                </div>
                
                <div class="col-md-4">
                    <h1>Alcool fort</h1>
                    <form action="?p=encodage" method="post">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label>Résumé</label><br>
                            <textarea cols="120" placeholder="Le résumé" name="resume" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label><br>
                            <textarea col="120" placeholder="La description" name="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Unité de mesure</label><br>
                            <select class="form-control" name="mesure">
                                <option>l</option>
                                <option>cl</option>
                                <option>gr</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pourcentage d'alcool</label><br>
                            <input type="text" class="form-control" name="pourcentagealcool" placeholder="Pourcentage d'alcool">
                        </div>
                        <div class="form-group">
                            <label>Prix au litre</label><br>
                            <input type="text" class="form-control" name="prixlitre" placeholder="Prix au litre">
                        </div>
                        <div class="form-group">
                            <label>Cote sur 5</label><br>
                            <input type="text" class="form-control" name="cotesur5" placeholder="Cote sur 5">
                        </div>
                        <div class="form-group">
                            <label>Image 1</label><br>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                            <input type="file" class="form-control" name="image1" placeholder="Image 1 (max 1 Mo)">
                        </div>
                        <div class="form-group">
                            <label>Image 2</label><br>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                            <input type="file" class="form-control" name="image2" placeholder="Image 2 (max 1 Mo)">
                        </div>
                        <div class="form-group">
                            <label>Image 3</label><br>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                            <input type="file" class="form-control" name="image3" placeholder="Image 3 (max 1 Mo)">
                        </div>
                        <input type="hidden" name="categorie" value="alcoolfort">
                        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer"><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>