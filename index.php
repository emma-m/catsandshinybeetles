<!DOCTYPE html>
<html>
<head>
    <title>cats & shiny beetles</title>
    <link href="style.css" rel="stylesheet">
</head>

<?php
$cat_pics = scandir('/images/gallery/cats');
$shiny_beetle_pics = scandir('/images/gallery/beetles');
$cat_and_shiny_beetle_pics = scandir('/images/gallery/both');
?>

<body>
    <main>
        <div>
            <h1>
                cats &<br>shiny beetles
            </h1>
            <div id="filters">
                <span>cats</span>
                <span>beetles</span>
            </div>
        </div>
    </main>
</body>

</html>