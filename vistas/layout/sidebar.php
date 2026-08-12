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
        <img src="../publico/imagenes/logo.svg" alt="">
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
      <a href="seepersonal.php" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-user-shield"></i></span>
        Usuarios
      </a>
      <a href="#" class="nav-item-link">
        <span class="nav-icon"><i class="fas fa-cog"></i></span>
        Configuración
      </a>
    </div>

    <!-- Footer user -->
   <?php
$nombre = $_SESSION["usuario_nombre"];
$rol = $_SESSION["usuario_rol"];

// Obtener iniciales
$palabras = explode(" ", trim($nombre));
$iniciales = "";

foreach ($palabras as $palabra) {
    if (!empty($palabra)) {
        $iniciales .= strtoupper(substr($palabra, 0, 1));
    }
}
?>

<div class="sidebar-footer">
    <div class="user-chip">
        <div class="user-avatar">
            <?= htmlspecialchars($iniciales) ?>
        </div>

        <div class="user-info">
            <div class="user-name">
                <?= htmlspecialchars($nombre) ?>
            </div>

            <div class="user-role">
                <?= htmlspecialchars($rol) ?>
            </div>
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
      <div class="user-avatar" style="cursor:pointer; font-size:12px;">
            <?= htmlspecialchars($iniciales) ?>
      </div>
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


<script>
  /* ── DATE ───────────────────────────────────────── */
  const now = new Date();
  const opts = { weekday:'long', year:'numeric', month:'long', day:'numeric' };
  const dateStr = now.toLocaleDateString('es-CO', opts);
  document.getElementById('topbarDate').textContent = dateStr;
  document.getElementById('headerDate').textContent = dateStr;

  /* ── SIDEBAR TOGGLE ─────────────────────────────── */
  function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').classList.toggle('visible');
  }
  function closeSidebar() {
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('visible');
  }

  /* ── SCROLL TO TOP ───────────────────────────────── */
  const scrollBtn = document.getElementById('scrollTop');
  window.addEventListener('scroll', () => {
    scrollBtn.classList.toggle('visible', window.scrollY > 200);
  });

  /* ── CHARTS ─────────────────────────────────────── */
  Chart.defaults.color = '#64748b';
  Chart.defaults.font.family = "'Inter', sans-serif";

  // Revenue Area Chart
  const revenueCtx = document.getElementById('revenueChart').getContext('2d');

  const gradientFill = revenueCtx.createLinearGradient(0, 0, 0, 280);
  gradientFill.addColorStop(0, 'rgba(189,142,137,.25)');
  gradientFill.addColorStop(1, 'rgba(189,142,137,.01)');

  new Chart(revenueCtx, {
    type: 'line',
    data: {
      labels: ['1 Jun','3 Jun','5 Jun','7 Jun','9 Jun','11 Jun','13 Jun','15 Jun','17 Jun','19 Jun','21 Jun','23 Jun','25 Jun','27 Jun','29 Jun'],
      datasets: [{
        label: 'Ingresos',
        data: [820000, 940000, 1100000, 980000, 1250000, 1400000, 1320000, 1580000, 1470000, 1690000, 1820000, 1750000, 2100000, 1960000, 2280000],
        borderColor: '#BD8E89',
        backgroundColor: gradientFill,
        borderWidth: 2,
        tension: 0.4,
        fill: true,
        pointRadius: 4,
        pointBackgroundColor: '#BD8E89',
        pointBorderColor: '#111827',
        pointBorderWidth: 2,
        pointHoverRadius: 6,
      }]
    },
    options: {
      maintainAspectRatio: false,
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: '#1a2234',
          titleColor: '#f1f5f9',
          bodyColor: '#94a3b8',
          borderColor: 'rgba(189,142,137,.3)',
          borderWidth: 1,
          padding: 12,
          callbacks: {
            label: ctx => ' $' + ctx.parsed.y.toLocaleString('es-CO')
          }
        }
      },
      scales: {
        x: {
          grid: { display: false },
          border: { display: false },
          ticks: { maxTicksLimit: 7, font: { size: 11 } }
        },
        y: {
          grid: { color: 'rgba(255,255,255,.04)', drawBorder: false },
          border: { display: false, dash: [4, 4] },
          ticks: {
            maxTicksLimit: 5,
            font: { size: 11 },
            callback: v => '$' + (v / 1000000).toFixed(1) + 'M'
          }
        }
      }
    }
  });

  // Category Doughnut Chart
  const catCtx = document.getElementById('categoryChart').getContext('2d');
  new Chart(catCtx, {
    type: 'doughnut',
    data: {
      labels: ['Platos Fuertes', 'Bebidas', 'Postres'],
      datasets: [{
        data: [55, 25, 20],
        backgroundColor: ['#BD8E89', '#7F6269', '#1d2d4a'],
        hoverBackgroundColor: ['#c99e9a', '#8f7279', '#243554'],
        borderWidth: 3,
        borderColor: '#111827',
        hoverBorderColor: '#111827',
      }]
    },
    options: {
      maintainAspectRatio: false,
      cutout: '76%',
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: '#1a2234',
          titleColor: '#f1f5f9',
          bodyColor: '#94a3b8',
          borderColor: 'rgba(189,142,137,.3)',
          borderWidth: 1,
          padding: 12,
          callbacks: { label: ctx => ' ' + ctx.label + ': ' + ctx.parsed + '%' }
        }
      }
    }
  });

  /* ── ACTIVE NAV HIGHLIGHT ───────────────────────── */
  document.querySelectorAll('.nav-item-link').forEach(link => {
    link.addEventListener('click', function(e) {
      document.querySelectorAll('.nav-item-link').forEach(l => l.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>