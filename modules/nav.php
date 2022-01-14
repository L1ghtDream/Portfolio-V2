<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php"><i class="mdi mdi-xml"></i>Light<span>Dream</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="mdi mdi-menu"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link <?php if($page == 'home'){ echo 'active'; }?>" aria-current="page" href="index.php">Home</a>
        <a class="nav-link <?php if($page == 'projects'){ echo 'active'; }?>" href="projects.php">Projects</a>
        <a class="nav-link <?php if($page == 'degrees'){ echo 'active'; }?>" href="degrees.php">Degrees</a>
        <a class="nav-link <?php if($page == 'contact'){ echo 'active'; }?>" href="contact.php">Contact</a>
      </div>
    </div>
  </div>
</nav>