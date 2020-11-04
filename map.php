<?php include './parts/head.php'; ?>
<?php include './parts/header.php';

ini_set('display_errors','on');
error_reporting(E_ALL);

ini_set('display_errors','on');
error_reporting(E_ALL);

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
        // The marker, positioned at Uluru
        const marker2 = new google.maps.Marker({
            position: uluru,
            map: map,
        });
        <?php foreach ($positions as $position){ ?>
        const marker = new google.maps.Marker({
            position:{lat: <?php echo $position["lat"] ?>, lng: 135.1231},
            map: map,
        });
        <?php } ?>
    }
</script>
<div id="map"></div>
<?php foreach ($positions as $position){ echo $position["lat"];}?>
</body>
</html>