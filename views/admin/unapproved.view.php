<ul>
    <?php
    foreach ($data as $comment) { ?>
        <li><b>#<?=$comment->id?> - <?=$comment->body?></b> made by <b><?=$comment->name?></b> - Approved: <?=$comment->approved?>
            <?php if($comment->approved == 0) { ?> <a href="/comment/approve/<?=$comment->id?>">Approve</a> <?php } ?>
        </li>

    <?php }
    ?>
</ul>