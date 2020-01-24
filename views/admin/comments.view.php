<ul>
<?php
foreach ($data as $comment) { ?>
    <li>#<?=$comment->id?> - <?=$comment->body?> - Approved: <?=$comment->approved?>
        <?php if($comment->approved == 0) { ?> <a href="/comment/approve/<?=$comment->id?>">Approve</a> <?php } ?>
    </li>

<?php }
?>
</ul>