<?php

use ism\lib\Role;
use ism\lib\Session; ?>
<nav class="navbar navbar-expand-sm navbar-light bg-info mt-1 mb-4">
    
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parametre</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php if (!Role::estConnect()) : ?>
                        <a class="dropdown-item" href="<?php path('security/login') ?>">Connexion</a>
                    <?php endif ?>
                    <?php if (Role::estConnect()) : ?>
                        <a class="dropdown-item" href="<?php path('security/logout') ?>">Deconnexion</a>
                    <?php endif ?>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <?php if (Role::estConnect()) : ?>
                <li class="nav-item">
                    <?= Session::getSession("user_connect")["nom"];
                    ?>
                </li>
            <?php endif ?>

        </ul>

    </div>
</nav>