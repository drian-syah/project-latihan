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
