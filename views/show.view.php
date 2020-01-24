<p><b><?=$name?></b></p>
<p><?=$description_short?></p>
<p>He describes him/herself...</p>
<p class="text-primary"><?=$description?></p>
<p>People say about him/her:</p>
<?php //var_dump($extra);
foreach ($extra as $comment) { ?>
    <p><b><?=$comment->name?> says:</b></p>
    <p><?=$comment->body?></p>
<?php }