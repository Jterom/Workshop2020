<?php include './parts/head.php'; ?>
<?php include './parts/header.php'; ?>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("input[type='button']").click(function(){
            var val = $("input[name='filtre']:checked").val();
            if(val){
                alert("votre langage de programmation préféré est : " + val);
            }
        });

    });
</script>

    <script>
        $("input[type=radio][name=filtre]").change(function() {
            if($(this).val() == 'Association environnement') {

            }else if($(this).val() == 'value2') {
                // Traitement si deuxième case cochée
            }
        });

    </script>




<div class="search">
    <a href="contact.php"> <button>Soumettre un contact</button> </a>
    <input type="search" id="site-search">
    <button id="button-search">Rechercher</button>
</div>



<form action="" method="POST">
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
</form>


<div class="liste_asso">
    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=workshop2020', 'root', '');
        $reponse = $bdd->query('SELECT * FROM reseaudeproximite ');

        echo '<table>
                <tr>
                    <th>Nom</th>
                    <th>Mail</th>
                    <th>Tel</th>
                    <th>Adresse</th>
                    <th>Description</th>
                    <th>lien</th>
                </tr>
                <tr>';
        while ($data= $reponse->fetch()) {
            echo '<td>' . $data['nom'] . '</td>
                 <td>' . $data['mail'] . '</td>
                 <td>' . $data['tel'] . '</td>
                 <td>' . $data['adresse'] . '</td>
                 <td>' . $data['description'] . '</td>
                 <td>' . $data['lien'] . '</td>
                </tr>';
        }
        echo '</table>';
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
</div>

</body>
</html>

<?php include './parts/footer.php'; ?>