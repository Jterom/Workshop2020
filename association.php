<?php include './parts/head.php'; ?>
<?php include './parts/header.php'; ?>

<div class="search">
    <input type="search" id="site-search">
    <button id="button-search">Search</button>
</div>

<h3 id="filtre_title">Filtre par catégories</h3>
<div class="filtrecheck">
    <div id="Environnement">
        <input type="checkbox" id="Environnement_check">
        <label id="Environnement_label">Environnement</label>
    </div>
    <div id="Reparation">
        <input type="checkbox" id="Reparation_check">
        <label id="Reparation_label">Réparation (vélo)</label>
    </div>
    <div id="Maraicher">
        <input type="checkbox" id="Maraicher_check">
        <label id="Maraicher_label">Maraicher</label>
    </div>
    <div id="Producteurs">
        <input type="checkbox" id="Producteurs_check">
        <label id="Producteurs_label">Producteurs locaux</label>
    </div>
    <div id="BioCoop">
        <input type="checkbox" id="BioCoop_check">
        <label id="BioCoop_label">BioCoop</label>
    </div>
    <button>Rafraichir</button>
</div>


<div class="liste_asso">
</div>




</body>
</html>

<?php include './parts/footer.php'; ?>