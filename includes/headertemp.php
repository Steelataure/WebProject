
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
              <?php if (!isset($_SESSION['isLogged'])){ ?>
                <a class="nav-link" href="/index.php?page=login">Login</a>
                <?php } else{?>
                  <a class="nav-link" href="/index.php?page=login"><?php echo $_SESSION['username']; ?></a> 
                </li>

                <li class="nav-item">
                <i class="fa-solid fa-right-from-bracket"><a class="nav-link" href="/index.php?page=logout">Logout</a></i>
              </li>
                        <?php
                    } ?>
                </form> 
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>



    
