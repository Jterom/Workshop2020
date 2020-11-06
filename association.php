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



    <a href="contact.php"><button class="soumettre-un-contact">Soumettre un contact</button></a>


<div class="container-form-association">
    <form action="association.php">
        <select name="typemap" class="form-control-lg">

            <?php foreach ($types as $type){ ?>
                <option <?php if ($typemap=="$type[0]"){ echo "selected"; } ?>> <?php echo $type[0] ?> </option>
            <?php } ?>

        </select>
        <input type="submit" class="btn right" value="Valider">
    </form>
</div>



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