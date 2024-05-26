<header>
    <nav>
        <ul>
            <li><a href="/index.php?page=home">Accueil</a></li>
            <li><a href="/index.php?page=about">À propos</a></li>
            <li><a href="/index.php?page=contact">Contact</a></li>
            <li><a href="/index.php?page=login">Login</a></li>

            <?php if (isset($_SESSION['isLogged'])){ ?> 
            <li class="nav-item">
                <!-- <span>Connecté en tant que : <?php echo $_SESSION['isLogged']; ?></span> -->
                <form method="POST" action="/index.php?page=logout">
                        <button type="submit" name="deconnexion">Déconnexion</button>
                        <?php
                    } ?>
                </form> 
            </li>
        </ul>
    </nav>
</header>
