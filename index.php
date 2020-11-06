<?php include './parts/head.php'; ?>
<?php include './parts/header.php'; ?>

<div class="title">
    <h1>Les solutions durables nantaises !</h1>
    <p>Le site dédié à la transition écologique, près de chez vous.</p>
</div>
<div class="resume_map">
    <h2 id="title">Nantes d’hier à aujourd’hui :</h2>
    <p id="resume">


        Progressivement la ville de Nantes s’est imposée comme ville connectée et écologique.<br>

        <br>Cette transformation s’est accompagnée par une modification des modes de vie.<br>
        Au cœur du paysage urbain, composts et potagers solidaires, se sont progressivement implantés.<br>
        Le télétravail s’est généralisé. Enfin, la circulation à vélo a été favorisée par plusieurs dispositifs.<br>

        <br>A travers cette carte, visualisez la transformation nantaise !
    </p>
    <figure>
        <img id="map_today" src="src/ressources/carte1.png" alt="Nantes aujourd'hui" >
        <figcaption>Nantes aujourd'hui</figcaption>
    </figure>
    <figure>
        <img id="map_tomorrow" src="src/ressources/carte2.png" alt="Nantes demain">
        <figcaption>Nantes demain</figcaption>
    </figure>
</div>

<div class="around_you">
    <h2>Autour de vous:</h2>
    <p>Afin de vous accompagner dans vos nouveaux modes de vie, nous avons concentré ici, les indispensables de votre quotidien.</p>
</div>

<div class="lien">
    <a href="map.php?typemap=bicloo">
        <h4 id="velo_title">Nantes à vélo :</h4>
        <p id="velo_resume">grâce au bicloo, empruntez les pistes cyclables. </p>
        <img src="src/ressources/velo.jpg" id="velo_img">
    </a>
    <a href="map.php?typemap=Parc">
        <h4 id="potager_title">Potagers partagés & solidaires :</h4>
        <p id="potager_resume">venez profiter des fruits et légumes cultivés dans votre quartier.</p>
        <img src="src/ressources/potager.jpg" id="potager_img">
    </a>
    <a href="map.php?typemap=Composteur">
        <h4 id="compost_title">Réduisez vos déchets :</h4>
        <p id="compost_resume">   localisez les composts, près de chez vous. </p>
        <img src="src/ressources/compost.jpg" id="compost_img">
    </a>
</div>

<div class="all_actors">
    <h5 id="actors_title">Accédez à notre <a href="association.php" style="text-decoration: none;color: #222222">réseau de proximité :</a> </h5>
        <ul>
        <li>- associations environnementales</li>
        <li>- pros du vélo</li>
        <li>- maraîchers et producteurs locaux</li>
    </ul>
</div>
</body>
</html>

<?php include './parts/footer.php'; ?>