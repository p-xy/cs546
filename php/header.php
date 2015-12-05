<!--  header.php
      header structure
      Erich
-->

<div class="header-wrap">
  <?php require_once('../includes/Common.php') ?>

  <div class="header">
    <nav class="nav-main">
      <ul>
        <li><a href="../home.php">Home</a></li>
        <li><a href="../about.php">About</a></li>
        <li class="airports">
            <?php Common::airport_nav_dropdown(); ?>
        </li>
        <li>
          <a href="./register.php">Register</a>
          |
          <a href="./login.php">Login</a>
        </li>
        <li><a href="protected_page.php">My Page</a></li>
      </ul>
    </nav>
  </div>
</div>
