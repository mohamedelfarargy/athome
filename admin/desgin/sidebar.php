 <!-- Sidebar -->
 <ul class="sidebar navbar-nav">
      <li class="nav-item  <?php if($page == 'index'){echo'active';} ?>">
        <a class="nav-link" href="index.php">
        <i class="fa fa-home" aria-hidden="true"></i>
          <span>Home</span>
        </a>
      </li>
      <?php
      $id = $_SESSION['login'];
      $Select_priv = $connect->query("SELECT * FROM users WHERE id='$id'");
      $row_priv = $Select_priv->fetch_assoc();
      ?>
      <li class="nav-item <?php if($page == "users"){echo"active";}?>">
        <a class="nav-link" href="users.php">
        <i class="fa fa-users" aria-hidden="true"></i>
          <span>Users</span>
        </a>
      </li>
      <li class="nav-item <?php if($page == "product"){echo"active";}?>">
        <a class="nav-link" href="products.php">
        <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Products</span>
        </a>
      </li>
      <li class="nav-item <?php if($page == "message"){echo"active";}?>">
        <a class="nav-link" href="massage.php">
        <i class="icon-envelope"></i>
        <span>Message</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a>
          <a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.php">404 Page</a>
          <a class="dropdown-item" href="blank.php">Blank Page</a>
        </div>
      </li>
      <li class="nav-item <?php if($page == "charts"){echo"active";} ?>">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item <?php if($page == "tables"){echo"active";} ?>">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>
