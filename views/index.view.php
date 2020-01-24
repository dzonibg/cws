<?php
?>
List of copywriters:
<?php
//echo $data[0]->name;
?>

<ul>
<?php
    foreach ($data as $cw) { ?>
    <li><?=$cw->name?></li>
        <a href="/index/show/<?=$cw->id?>">Show</a>
    <?php } ?>
</ul>
