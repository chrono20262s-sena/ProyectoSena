<body id="page-top">

<!-- Overlay for mobile sidebar -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- ═══════════════════════════════════════════════════════
     WRAPPER
════════════════════════════════════════════════════════════ -->
<div id="">

  <!-- ── SIDEBAR ─────────────────────────────────────── -->
  <nav id="sidebar">
    <!-- Brand -->
    <div class="sidebar-brand">
      <div class="brand-icon">
        <img src="../publico/imagenes/logo" alt="">
      </div>
      <div class="brand-name">CHR<span>O</span>NO</div>
    </div>

    <!-- Navigation -->
    <div class="sidebar-nav" style="overflow-y:auto; flex:1;">

      <div class="sidebar-section-label">Principal</div>

      <a href="../../../chronoweb/vistas/dashboard.php" class="nav-item-link active">
        <span class="nav-icon"><i ></i></span>
        Dashboard
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-receipt"></i></span>
        Pedidos
        <span class="nav-badge">12</span>
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-chair"></i></span>
        Mesas
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-file-invoice-dollar"></i></span>
        Facturación
      </a>

      <div class="sidebar-section-label">Operaciones</div>

      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-utensils"></i></span>
        Menú Digital
      </a>
      <a href="../vistas/verproductos.php" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-boxes"></i></span>
        Inventario
        <span class="nav-badge">3</span>
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-users"></i></span>
        Clientes
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-star"></i></span>
        Reseñas
      </a>

      <div class="sidebar-section-label">Administración</div>

      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-chart-bar"></i></span>
        Reportes de Ventas
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-user-shield"></i></span>
        Usuarios
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-cog"></i></span>
        Configuración
      </a>
    </div>

    <!-- Footer user -->
    <div class="sidebar-footer">
      <div class="user-chip">
        <div class="user-avatar">AD</div>
        <div class="user-info">
          <div class="user-name">Admin Chrono</div>
          <div class="user-role">Administrador</div>
        </div>
        <i class="fas fa-ellipsis-v" style="color:var(--text-dim); font-size:12px;"></i>
      </div>
    </div>
  </nav>
  <!-- ── END SIDEBAR ──────────────────────────────────── -->

  <!-- ── CONTENT WRAPPER ─────────────────────────────── -->
  <div id="content-wrapper">

    <!-- ── TOPBAR ─────────────────────────────────────── -->
    <nav id="topbar">
      <button id="sidebarToggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Search -->
      <div class="topbar-search">
        <i class="fas fa-search search-icon"></i>
        <input type="text" placeholder="Buscar pedidos, mesas, clientes…">
      </div>

      <!-- Date -->
      <span class="topbar-date" style="display:flex;">
        <i class="fas fa-calendar-alt me-2" style="color:var(--mauve);"></i>
        <span id="topbarDate"></span>
      </span>

      <div class="topbar-right">
        <!-- Notifications -->
        <a href="#" class="topbar-btn">
          <i class="fas fa-bell"></i>
          <span class="topbar-badge"></span>
        </a>
        <!-- Orders alert -->
        <a href="#" class="topbar-btn">
          <i class="fas fa-fire"></i>
          <span class="topbar-badge"></span>
        </a>
        <div class="topbar-divider"></div>
        <!-- User -->
        <div class="user-avatar" style="cursor:pointer; font-size:12px;">AD</div>
      </div>
    </nav>
    <!-- ── END TOPBAR ────────────────────────────────── -->
  </div>

</div>

<!-- ── END WRAPPER ────────────────────────────────── -->

<!-- Scroll to top -->
<button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Bootstrap 5 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
