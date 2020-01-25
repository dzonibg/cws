<?php
foreach ($data as $cw) { ?>

    <p>
        Name: <?=$cw->name?>
        <a href="/admin/edit_copywriter/<?=$cw->id?>">Edit</a>
    </p>

<?php }