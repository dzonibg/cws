<form method="POST" action="/admin/create_copywriter" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Copywriter name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" placeholder="A long description about a copywriter">
    </div>
    <div class="form-group">
        <label for="description_short">Short description</label>
        <input type="text" name="description_short" class="form-control" placeholder="Small sentence that shows the interests">
    </div>
    <div class="form-group">
        <label for="hourly_rate">Hourly rate in $</label>
        <input type="text" name="hourly_rate" class="form-control" placeholder="How much does he charge per hour?">
    </div>
    <div class="custom-file">
        <label for="image">Image</label>
        <input type="file" class="custom-file-input" name="image" id="image">
        <label class="custom-file-label" for="image">An image of a copywriter.</label>
    </div>
    <br><br><br>
        <button class="btn btn-primary" type="submit">Submit form</button>
</form>