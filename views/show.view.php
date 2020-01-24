<p><b><?=$name?></b></p>
<p><?=$description_short?></p>
<p>He describes him/herself...</p>
<p class="text-primary"><?=$description?></p>
<p><b>Writes articles for <?=$hourly_rate?>$ per hour.</b></p>
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
<div class="row justify-content-center">
<div class="col-sm-6">
    <div class="card bg-light">
<form method="POST" action="/comment/store">
    <input type="hidden" name="copywriter_id" value="<?=$id?>"
    <p>Name:</p>
    <input type="text" name="name" class="form-control">
    <p>Comment:</p>
    <input type="text" name="body" class="form-control">
    <p>Show some love!</p>
    <button type="submit" class="btn btn-primary">Comment!</button>
</form>
</div>
</div>
</div>