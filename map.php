<?php include './parts/head.php'; ?>
<?php include './parts/header.php';

$db = new PDO("mysql:host=localhost" . ";dbname=wordpress2020", "root", "root");


$r = $db->prepare("select * from Position ");

$r->execute();

$positions = $r->fetchAll();



?>
<script>

    function initMap() {

        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
        });
        <?php
            $i =0;
        foreach ($positions as $position){
            $i++
            ?>
        const marker<?php echo $i?> = new google.maps.Marker({
            position:{lat: <?php echo $position["lat"] ?>, lng:<?php echo $position["lng"] ?>},
            map: map,
        });
        <?php } ?>
    }
</script>
<div id="map"></div>
</body>
</html>