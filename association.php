<?php include './parts/head.php'; ?>
<?php include './parts/header.php'; ?>

<?php

$typemap= filter_input(INPUT_GET, "typemap");

$bdd = new PDO('mysql:host=localhost;dbname=workshop2020', 'root', '');


$reponse = $bdd->query('SELECT * FROM reseaudeproximite ');

$reponse->execute();

$datas =$reponse->fetchAll();

$re = $bdd->prepare("SELECT type from reseaudeproximite GROUP BY type");

$re->execute();

$types = $re->fetchAll();
?>




    <div class="search">
        <a href="contact.php"> <button>Soumettre un contact</button> </a>
        <input type="search" id="site-search">
        <button id="button-search">Rechercher</button>
    </div>



    <!--<form action="" method="POST">
        <h3 id="filtre_title">Filtre par catégories</h3>
        <div class="filtrecheck">
            <div id="Environnement">
                <input type="radio" value="Association environnement" name="filtre" >
                <label id="Environnement_label">Environnement</label>
            </div>
            <div id="Reparation">
                <input type="radio" value="Pour vos vélos" name="filtre">
                <label id="Reparation_label">Réparation (vélo)</label>
            </div>
            <div id="Maraicher">
                <input type="radio" value="Maraîchers" name="filtre">
                <label id="Maraicher_label">Maraicher</label>
            </div>
            <div id="Producteurs">
                <input type="radio" value="Producteurs locaux" name="filtre">
                <label id="Producteurs_label">Producteurs locaux</label>
            </div>
            <input type="button" name="rafrachir" id="rafraichir" value="Rafraichir">
        </div>
    </form>-->

    <form action="association.php">
        <select name="typemap">

            <?php foreach ($types as $type){ ?>
                <option <?php if ($typemap=="$type[0]"){ echo "selected"; } ?>> <?php echo $type[0] ?> </option>
            <?php } ?>

        </select>
        <input type="submit" class="btn right" value="Valider">
    </form>


    <div class="liste_asso">
        <?php
        echo '<table>
                <tr>
                    <th>Nom</th>
                    <th>Mail</th>
                    <th>Tel</th>
                    <th>Adresse</th>
                    <th>lien</th>
                    <th>Description</th>
                </tr>
                <tr>';
        foreach ($datas as $data) {
            if($typemap == $data['type'])
                echo '<td>' . $data['nom'] . '</td>
                     <td>' . $data['mail'] . '</td>
                     <td>' . $data['tel'] . '</td>
                     <td>' . $data['adresse'] . '</td>
                     <td>' . $data['lien'] . '</td>
                     <td>' . $data['description'] . '</td>
                    </tr>';
        }
        echo '</table>';
        ?>
    </div>

    </body>
    </html>

<?php include './parts/footer.php'; ?>