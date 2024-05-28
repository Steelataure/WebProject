
<div class="hero_area">
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/index.php?page=home">
            <span>WebRunners</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/index.php?page=home">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/index.php?page=about">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/index.php?page=service">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/index.php?page=price">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/index.php?page=contact">Contact</a>
              </li>
              <li class="nav-item">
              <?php if (!isset($_SESSION['isLogged'])): ?>
                
                <a class="nav-link" href="/index.php?page=login">Login</a>
                <?php endif ?>
                  </li>
                  <?php if (isset($_SESSION['isLogged'])){ ?>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></a>
                          <div class="dropdown-menu" aria-labelledby="profileDropdown">
                              <a class="dropdown-item" href="/index.php?page=profile">Profile</a>
                              <a class="dropdown-item" href="/index.php?page=settings">Settings</a>
                              <a class="dropdown-item" href="/index.php?page=logout">Logout</a>
                          </div>
                      </li>
                  <?php } ?>

            </ul>
          </div>
        </nav>
      </div>
    </header>