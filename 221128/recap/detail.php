<?php
require 'data.php';

$id = 0;
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
}

$movie = $movies[0];
if (isset($movies[$id])) {
    $movie = $movies[$id];
}

?>
<html>

<body>
    <h1>
        <?php
        echo $movie[0];
        ?>
    </h1>
    <figure>
        <img src="<?php echo $movie[2] ?>" width='100%' style="
    object-fit: cover;" />
    </figure>
    <h3>
        <?php
        echo $movie[1];
        ?>
    </h3>
</body>

</html>