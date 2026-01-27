<?php
require_once 'header.php';
?>
<body>

<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <?php
        require_once 'sidebar.php'
      ?>

  <!-- Page Content -->
  <div id="page-content-wrapper" class="w-100 py-4">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white shadow-sm px-4">
      <!-- <span class="navbar-text fw-semibold">Dashboard</span> -->
      <div class="ms-auto">
        <div class="nav-item dropdown">
  <a class="nav-link dropdown-toggle d-flex align-items-center gap-3"
     href="#" role="button" data-bs-toggle="dropdown">

    <img src=""
         class="rounded-circle bg-secondary"
         width="40" height="40">

    <div class="d-none d-lg-block">
      <p class="mb-0 fw-semibold">Drians IT</p>
      <small class="text-muted">Admin</small>
    </div>
  </a>

  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Profile</a></li>
    <li><a class="dropdown-item" href="#">Logout</a></li>
  </ul>
</div>

      </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid py-4">
      <!-- ISI HALAMAN -->
    </div>

  </div>
</div>

<?php
require_once 'footer.php';
?>
