<?php
require_once 'header.php';
?>
<body>

<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-primary text-white sidebar">
    <div class="sidebar-heading text-center py-4 fw-bold">
      APP SEKOLAH
    </div>
    <div class="list-group list-group-flush">
      <?php
        require_once 'sidebar.php'
      ?>
    </div>
  </div>

  <!-- Page Content -->
  <div id="page-content-wrapper" class="w-100">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white shadow-sm px-4">
      <span class="navbar-text fw-semibold">Dashboard</span>
      <div class="ms-auto">
        <span class="me-3">Admin</span>
        <button class="btn btn-sm btn-danger">Logout</button>
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
