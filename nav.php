<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <?php 
	$activePage = basename($_SERVER['PHP_SELF'], ".php");
	?>
	<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
	<li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php">About</a></li>
	<li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact</a></li>
	
    </ul>
    <button class="btn btn-danger navbar-btn">Button</button>
  </div>
</nav>