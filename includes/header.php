<?php

    require("functions.php");

?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <?php if(connecter()) { ?>
                <a href="#" > Me déconnecter </a>
            <?php } else { ?>
                <a href="#" > Me connecter </a>

    </div>
</nav>