<ul>
<?php
foreach ($data as $comment) { ?>
    <li>#<?=$comment->id?> - <?=$comment->body?></li>

<?php }
?>
</ul>