<p><a href="/admin/add_copywriter">Add a new copywriter</a></p>
<?php
foreach ($data as $cw) { ?>

    <p>
        Name: <?=$cw->name?>
        <a href="/admin/edit_copywriter/<?=$cw->id?>">Edit</a>
        <a href="/admin/delete_copywriter/<?=$cw->id?>"><red>Delete</red></a>
    </p>

<?php }