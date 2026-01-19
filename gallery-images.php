<?php foreach ($pics as $pic) { ?>
    <img src="images/gallery/<?= $type ?>/<?= $pic ?>" class="gallery-img <?= $type ?>" data-groups='["<?= $type ?>"]'>
<?php } ?>