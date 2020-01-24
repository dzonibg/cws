<h5 class="card-title">Comments about our copywriters</h5>

<?php
foreach ($data as $comment) {
    echo '<p class="text-primary">' . $comment->body . '</p>';
}