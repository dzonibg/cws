<ul>
<?php
foreach ($data as $comment) { ?>
    <li>#<?=$comment->id?> - <?=$comment->body?> - Approved: <?=$comment->approved?>
        <a href="/comment/approve/<?=$comment->id?>">Approve</a>
    </li>

<?php }
?>
</ul>