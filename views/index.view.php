<h5 class="card-title">Welcome to our copywriting page!</h5>
<p class="card-text">We encourage you to pick someone of our big copywriters list if you're in need for some quality articles.</p>


<div class="row">
<?php
    foreach ($data as $cw) { ?>
    <div class="col-sm-4">
        <div class="card bg-light">
            <div class="card-header">
                <?=$cw->name?>
            </div>
            <div class="card-body">
                <p>  <?=$cw->description_short?> </p>
                <p>Hourly rate: <?=$cw->hourly_rate?>$</p>
                <a href="/index/show/<?=$cw->id?>" class="btn btn-primary">View more</a>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
