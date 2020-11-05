<?php include './parts/head.php'; ?>
<?php include './parts/header.php';

$typemap= filter_input(INPUT_GET, "typemap");

$db = new PDO("mysql:host=localhost" . ";dbname=workshop2020", "root", "");


$r = $db->prepare("select * from Position ");

$r->execute();

$re = $db->prepare("SELECT type from Position GROUP BY type");

$re->execute();

$positions = $r->fetchAll();

$types = $re->fetchAll();



?>
<script>

    function initMap() {

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: { lat: 47.212728, lng: -1.555596 },
        });
        <?php
        $i =0;
        foreach ($positions as $position){
        if ($position["type"]==$typemap){
        $i++
        ?>
        const marker<?php echo $i?> = new google.maps.Marker({
            position:{lat: <?php echo $position["lat"] ?>, lng:<?php echo $position["lng"] ?>},
            map: map,
        });
        <?php }}?>
    }
</script>
<div id="map"></div>
<div class="container-form-map">
    <form action="map.php">
        <select name="typemap" class="form-control-lg" >

            <?php foreach ($types as $type){ ?>
                <option <?php if ($typemap=="$type[0]"){ echo "selected"; } ?>> <?php echo $type[0] ?> </option>
            <?php } ?>

        </select>
        <input type="submit" class="btn right" value="Valider">
    </form>
</div>

</body>
</html>