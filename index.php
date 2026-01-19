<!DOCTYPE html>
<html>
<head>
    <title>cats & shiny beetles</title>
    <link href="style.css" rel="stylesheet">
</head>

<?php
$cat_pics = get_dir_images('images/gallery/cats');
$shiny_beetle_pics = get_dir_images('images/gallery/beetles');
$cat_and_shiny_beetle_pics = get_dir_images('images/gallery/both');
?>

<body>
    <header>
        <h1>
            cats & <br>shiny beetles
        </h1>
        <div id="filters">
            <div id="cats" class="filter active" onclick="javascript:shuffle(this)"><span>cats</span></div>
            <div id="beetles" class="filter active" onclick="javascript:shuffle(this)"><span>beetles</span></div>
            <div id="both" class="filter active" onclick="javascript:shuffle(this)"><span>cats + beetles</span></div>
        </div>
    </header>
    <main>
        <div id="img-grid">
            <?php
                $pics = $cat_pics;
                $type = 'cats';
                require 'gallery-images.php';
                $pics = $shiny_beetle_pics;
                $type = 'beetles';
                require 'gallery-images.php';
                $pics = $cat_and_shiny_beetle_pics;
                $type = 'both';
                require 'gallery-images.php';
            ?>
        </div>
    </main>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/6.1.0/shuffle.min.js" integrity="sha512-r8mIpk3ypCMwNxH6srRZGbjHQlOFt3Mq2vrZ/iymx6g9JUqTeVavofeX6gbrxAC74X5HmBy5gxyhCm6OiXrM0Q==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
<script src="scripts.js" defer></script>
</html>

<?php
    function get_dir_images($dir) {
        return array_diff(scandir($dir), array('.', '..'));
    }
?>
