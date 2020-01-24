<ul class="nav">
    <li class="nav-item">
        <a class="nav-link " href="/">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/comment">Comments</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin">Admin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if(AdminController::isAdmin() == false) echo 'disabled';?> " href="/admin/logout" tabindex="-1" aria-disabled="true">Log out</a>
    </li>
</ul>