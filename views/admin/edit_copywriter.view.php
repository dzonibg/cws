<p>Editing a copywriter named <?=$name?></p>
<form method="POST" action="/admin/update_copywriter/<?=$id?>">
    <div class="form-group">
        <label for="name">Name (not a good idea currently since it's linked to imgs)</label>
        <input type="text" name="name" class="form-control" disabled value="<?=$name?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" value="<?=$description?>">
    </div>
    <div class="form-group">
        <label for="description_short">Short description</label>
        <input type="text" name="description_short" class="form-control" value="<?=$description_short?>">
    </div>
    <div class="form-group">
        <label for="hourly_rate">Hourly rate in $</label>
        <input type="text" name="hourly_rate" class="form-control" value="<?=$hourly_rate?>">
    </div>
    <br><br><br>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>