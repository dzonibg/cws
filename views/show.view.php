<p><b><?=$name?></b></p>
<p><?=$description_short?></p>
<p>He describes him/herself...</p>
<p class="text-primary"><?=$description?></p>
<p>People say about him/her:</p>
<div class="card">
<?php //var_dump($extra);
foreach ($extra as $comment) { ?>
    <p><b><?=$comment->name?> says:</b></p>
    <p><?=$comment->body?></p>
<?php }
?>
</div>
<p><b>Have something to say about <?=$name?>?</b></p>
<form method="POST" action="/comment/store">
    <input type="hidden" name="copywriter_id" value="<?=$id?>"
    <p>Name:</p>
    <input type="text" name="name">
    <p>Comment:</p>
    <input type="text" name="body">
    <button type="submit">Comment!</button>

</form>