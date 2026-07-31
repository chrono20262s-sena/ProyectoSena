<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CHRONO — Dashboard</title>
  <link rel="stylesheet" href="../../css/style.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Chart.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

 
</head>
<body id="page-top">

<!-- Overlay for mobile sidebar -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- ═══════════════════════════════════════════════════════
     WRAPPER
════════════════════════════════════════════════════════════ -->
<div id="wrapper">

  <!-- ── SIDEBAR ─────────────────────────────────────── -->
  <nav id="sidebar">
    <!-- Brand -->
    <div class="sidebar-brand">
      <div class="brand-icon">
        <i class="fas fa-hourglass-half"></i>
      </div>
      <div class="brand-name">CHR<span>O</span>NO</div>
    </div>

    <!-- Navigation -->
    <div class="sidebar-nav" style="overflow-y:auto; flex:1;">

      <div class="sidebar-section-label">Principal</div>

      <a href="#" class="nav-item-link active">
        <span class="nav-icon"><i class="fas fa-chart-line"></i></span>
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
      <a href="#" class="nav-item-link">
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

    <!-- ── MAIN CONTENT ──────────────────────────────── -->
    <div id="content">

      <!-- Page Header -->
      <div class="page-header">
        <div>
          <div class="page-title">Dashboard</div>
          <div class="page-subtitle">Vista general del restaurante · <span id="headerDate"></span></div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn-outline"><i class="fas fa-download"></i> Exportar</button>
          <button class="btn-chrono"><i class="fas fa-plus"></i> Nuevo Pedido</button>
        </div>
      </div>

      <!-- ── STAT CARDS ──────────────────────────────── -->
      <div class="row g-3 mb-4">

        <div class="col-xl-3 col-md-6">
          <div class="stat-card">
            <div class="stat-card-header">
              <div class="stat-label">Ventas Hoy</div>
              <div class="stat-icon-wrap" style="background:rgba(189,142,137,.15);">
                <i class="fas fa-coins" style="color:var(--mauve);"></i>
              </div>
            </div>
            <div class="stat-value">$2,847</div>
            <div class="stat-delta up">
              <i class="fas fa-arrow-up"></i> +12.4% <span>vs ayer</span>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="stat-card">
            <div class="stat-card-header">
              <div class="stat-label">Pedidos Activos</div>
              <div class="stat-icon-wrap" style="background:var(--blue-dim);">
                <i class="fas fa-fire" style="color:var(--blue);"></i>
              </div>
            </div>
            <div class="stat-value">24</div>
            <div class="stat-delta up">
              <i class="fas fa-arrow-up"></i> +3 <span>última hora</span>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="stat-card">
            <div class="stat-card-header">
              <div class="stat-label">Mesas Ocupadas</div>
              <div class="stat-icon-wrap" style="background:var(--amber-dim);">
                <i class="fas fa-chair" style="color:var(--amber);"></i>
              </div>
            </div>
            <div class="stat-value">8 / 14</div>
            <div class="stat-delta" style="color:var(--amber);">
              <i class="fas fa-circle" style="font-size:8px;"></i> 57% <span>ocupación</span>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="stat-card">
            <div class="stat-card-header">
              <div class="stat-label">Clientes Atendidos</div>
              <div class="stat-icon-wrap" style="background:var(--green-dim);">
                <i class="fas fa-users" style="color:var(--green);"></i>
              </div>
            </div>
            <div class="stat-value">143</div>
            <div class="stat-delta up">
              <i class="fas fa-arrow-up"></i> +8.1% <span>vs semana pasada</span>
            </div>
          </div>
        </div>

      </div>
      <!-- ── END STAT CARDS ──────────────────────────── -->

      <!-- ── CHARTS ROW ──────────────────────────────── -->
      <div class="row g-3 mb-4">

        <!-- Area Chart: Ventas -->
        <div class="col-xl-8">
          <div class="chart-card h-100">
            <div class="card-head">
              <div>
                <div class="card-title">Ingresos del Mes</div>
                <div class="card-subtitle">Ventas diarias en COP</div>
              </div>
              <div class="d-flex gap-2">
                <button class="card-action">Semana</button>
                <button class="card-action" style="color:var(--mauve);">Mes</button>
                <button class="card-action">Año</button>
              </div>
            </div>
            <div class="card-body-pad">
              <div class="chart-area">
                <canvas id="revenueChart"></canvas>
              </div>
            </div>
          </div>
        </div>

        <!-- Doughnut: Fuentes de Ingreso -->
        <div class="col-xl-4">
          <div class="chart-card h-100">
            <div class="card-head">
              <div>
                <div class="card-title">Categorías de Venta</div>
                <div class="card-subtitle">Distribución por tipo</div>
              </div>
              <button class="card-action"><i class="fas fa-ellipsis-v"></i></button>
            </div>
            <div class="card-body-pad">
              <div class="chart-pie">
                <canvas id="categoryChart"></canvas>
              </div>
              <div class="d-flex flex-column gap-2 mt-4">
                <div class="legend-item">
                  <span class="legend-dot" style="background:var(--mauve);"></span>
                  Platos fuertes &nbsp;<strong class="ms-auto">55%</strong>
                </div>
                <div class="legend-item">
                  <span class="legend-dot" style="background:var(--prune);"></span>
                  Bebidas &nbsp;<strong class="ms-auto">25%</strong>
                </div>
                <div class="legend-item">
                  <span class="legend-dot" style="background:var(--navy-mid);"></span>
                  Postres &nbsp;<strong class="ms-auto">20%</strong>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- ── END CHARTS ──────────────────────────────── -->

      <!-- ── BOTTOM ROW: Orders + Tables ────────────── -->
      <div class="row g-3 mb-4">

        <!-- Pedidos recientes -->
        <div class="col-xl-8">
          <div class="chart-card">
            <div class="card-head">
              <div>
                <div class="card-title">Pedidos Recientes</div>
                <div class="card-subtitle">Últimos 10 pedidos</div>
              </div>
              <a href="#" class="btn-outline" style="font-size:12px; padding:6px 14px;">Ver todos</a>
            </div>
            <div style="overflow-x:auto;">
              <table class="chrono-table">
                <thead>
                  <tr>
                    <th># Pedido</th>
                    <th>Mesa</th>
                    <th>Items</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Hora</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span style="color:var(--mauve); font-weight:600;">#0091</span></td>
                    <td>Mesa 3</td>
                    <td>4 items</td>
                    <td class="fw-700">$68,500</td>
                    <td><span class="badge-status badge-open">Activo</span></td>
                    <td class="text-muted-chrono fs-12">10:42 AM</td>
                  </tr>
                  <tr>
                    <td><span style="color:var(--mauve); font-weight:600;">#0090</span></td>
                    <td>Mesa 7</td>
                    <td>2 items</td>
                    <td class="fw-700">$34,000</td>
                    <td><span class="badge-status badge-ready">En cocina</span></td>
                    <td class="text-muted-chrono fs-12">10:38 AM</td>
                  </tr>
                  <tr>
                    <td><span style="color:var(--mauve); font-weight:600;">#0089</span></td>
                    <td>Mesa 1</td>
                    <td>6 items</td>
                    <td class="fw-700">$112,000</td>
                    <td><span class="badge-status badge-paid">Pagado</span></td>
                    <td class="text-muted-chrono fs-12">10:21 AM</td>
                  </tr>
                  <tr>
                    <td><span style="color:var(--mauve); font-weight:600;">#0088</span></td>
                    <td>Mesa 9</td>
                    <td>3 items</td>
                    <td class="fw-700">$45,000</td>
                    <td><span class="badge-status badge-paid">Pagado</span></td>
                    <td class="text-muted-chrono fs-12">10:05 AM</td>
                  </tr>
                  <tr>
                    <td><span style="color:var(--mauve); font-weight:600;">#0087</span></td>
                    <td>Domicilio</td>
                    <td>5 items</td>
                    <td class="fw-700">$87,500</td>
                    <td><span class="badge-status badge-open">Activo</span></td>
                    <td class="text-muted-chrono fs-12">09:58 AM</td>
                  </tr>
                  <tr>
                    <td><span style="color:var(--mauve); font-weight:600;">#0086</span></td>
                    <td>Mesa 12</td>
                    <td>1 item</td>
                    <td class="fw-700">$18,000</td>
                    <td><span class="badge-status badge-paid">Pagado</span></td>
                    <td class="text-muted-chrono fs-12">09:45 AM</td>
                  </tr>
                  <tr>
                    <td><span style="color:var(--mauve); font-weight:600;">#0085</span></td>
                    <td>Mesa 5</td>
                    <td>3 items</td>
                    <td class="fw-700">$52,000</td>
                    <td><span class="badge-status badge-closed">Cerrado</span></td>
                    <td class="text-muted-chrono fs-12">09:30 AM</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Estado de Mesas -->
        <div class="col-xl-4">
          <div class="chart-card">
            <div class="card-head">
              <div>
                <div class="card-title">Estado de Mesas</div>
                <div class="card-subtitle">Planta en tiempo real</div>
              </div>
            </div>
            <div class="card-body-pad">
              <!-- Legend -->
              <div class="d-flex gap-3 mb-3 flex-wrap">
                <div class="legend-item"><span class="legend-dot" style="background:var(--green);"></span> Libre</div>
                <div class="legend-item"><span class="legend-dot" style="background:var(--mauve);"></span> Ocupada</div>
                <div class="legend-item"><span class="legend-dot" style="background:var(--amber);"></span> Reservada</div>
              </div>
              <div class="mesa-grid">
                <div class="mesa-chip ocupada"><div class="mesa-num">1</div><div class="mesa-label">Ocupada</div></div>
                <div class="mesa-chip libre"><div class="mesa-num">2</div><div class="mesa-label">Libre</div></div>
                <div class="mesa-chip ocupada"><div class="mesa-num">3</div><div class="mesa-label">Ocupada</div></div>
                <div class="mesa-chip reservada"><div class="mesa-num">4</div><div class="mesa-label">Reserva</div></div>
                <div class="mesa-chip ocupada"><div class="mesa-num">5</div><div class="mesa-label">Ocupada</div></div>
                <div class="mesa-chip libre"><div class="mesa-num">6</div><div class="mesa-label">Libre</div></div>
                <div class="mesa-chip ocupada"><div class="mesa-num">7</div><div class="mesa-label">Ocupada</div></div>
                <div class="mesa-chip libre"><div class="mesa-num">8</div><div class="mesa-label">Libre</div></div>
                <div class="mesa-chip libre"><div class="mesa-num">9</div><div class="mesa-label">Libre</div></div>
                <div class="mesa-chip ocupada"><div class="mesa-num">10</div><div class="mesa-label">Ocupada</div></div>
                <div class="mesa-chip reservada"><div class="mesa-num">11</div><div class="mesa-label">Reserva</div></div>
                <div class="mesa-chip ocupada"><div class="mesa-num">12</div><div class="mesa-label">Ocupada</div></div>
                <div class="mesa-chip libre"><div class="mesa-num">13</div><div class="mesa-label">Libre</div></div>
                <div class="mesa-chip libre"><div class="mesa-num">14</div><div class="mesa-label">Libre</div></div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- ── END BOTTOM ROW ──────────────────────────── -->

      <!-- ── INVENTORY + REVIEWS ROW ────────────────── -->
      <div class="row g-3">

        <!-- Inventario crítico -->
        <div class="col-xl-6">
          <div class="chart-card">
            <div class="card-head">
              <div>
                <div class="card-title">Inventario Crítico</div>
                <div class="card-subtitle">Items con stock bajo</div>
              </div>
              <span style="font-size:11px; background:var(--red-dim); color:var(--red); padding:4px 10px; border-radius:99px; font-weight:600;">
                <i class="fas fa-exclamation-triangle me-1"></i> 3 alertas
              </span>
            </div>
            <div class="card-body-pad d-flex flex-column gap-3">

              <div>
                <div class="d-flex justify-content-between mb-2">
                  <span style="font-size:13px; font-weight:500;">Carne de Res</span>
                  <span style="font-size:12px; color:var(--red);">12 kg / 50 kg</span>
                </div>
                <div class="progress-chrono">
                  <div class="progress-fill" style="width:24%; background: linear-gradient(90deg, var(--red), #ff8080);"></div>
                </div>
              </div>

              <div>
                <div class="d-flex justify-content-between mb-2">
                  <span style="font-size:13px; font-weight:500;">Vino Tinto (botella)</span>
                  <span style="font-size:12px; color:var(--amber);">8 / 30 uds</span>
                </div>
                <div class="progress-chrono">
                  <div class="progress-fill" style="width:27%; background: linear-gradient(90deg, var(--amber), #ffd580);"></div>
                </div>
              </div>

              <div>
                <div class="d-flex justify-content-between mb-2">
                  <span style="font-size:13px; font-weight:500;">Salmón Fresco</span>
                  <span style="font-size:12px; color:var(--red);">3 kg / 20 kg</span>
                </div>
                <div class="progress-chrono">
                  <div class="progress-fill" style="width:15%; background: linear-gradient(90deg, var(--red), #ff8080);"></div>
                </div>
              </div>

              <div>
                <div class="d-flex justify-content-between mb-2">
                  <span style="font-size:13px; font-weight:500;">Harina de Trigo</span>
                  <span style="font-size:12px; color:var(--green);">18 kg / 25 kg</span>
                </div>
                <div class="progress-chrono">
                  <div class="progress-fill" style="width:72%;"></div>
                </div>
              </div>

              <div>
                <div class="d-flex justify-content-between mb-2">
                  <span style="font-size:13px; font-weight:500;">Aceite de Oliva</span>
                  <span style="font-size:12px; color:var(--green);">6 L / 10 L</span>
                </div>
                <div class="progress-chrono">
                  <div class="progress-fill" style="width:60%;"></div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Últimas reseñas -->
        <div class="col-xl-6">
          <div class="chart-card">
            <div class="card-head">
              <div>
                <div class="card-title">Reseñas Recientes</div>
                <div class="card-subtitle">Opiniones de clientes</div>
              </div>
              <div style="display:flex; align-items:center; gap:6px;">
                <span style="font-size:20px; font-weight:800; color:var(--text-primary);">4.7</span>
                <div>
                  <div style="color: var(--amber); font-size:12px;">★★★★★</div>
                  <div style="font-size:10px; color:var(--text-dim);">128 reseñas</div>
                </div>
              </div>
            </div>
            <div class="card-body-pad d-flex flex-column gap-3">

              <div style="background:var(--surface-2); border-radius:var(--radius-sm); padding:14px;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div style="width:28px; height:28px; background:linear-gradient(135deg,var(--mauve),var(--prune)); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; color:white;">MR</div>
                  <div>
                    <div style="font-size:12.5px; font-weight:600;">María Rodríguez</div>
                    <div style="font-size:11px; color:var(--amber);">★★★★★</div>
                  </div>
                  <span style="margin-left:auto; font-size:11px; color:var(--text-dim);">Hace 2h</span>
                </div>
                <p style="font-size:12.5px; color:var(--text-muted); margin:0; line-height:1.5;">Excelente servicio y comida deliciosa. El sistema de pedidos fue muy rápido.</p>
              </div>

              <div style="background:var(--surface-2); border-radius:var(--radius-sm); padding:14px;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div style="width:28px; height:28px; background:linear-gradient(135deg,#3b82f6,#1d4ed8); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; color:white;">JL</div>
                  <div>
                    <div style="font-size:12.5px; font-weight:600;">Juan López</div>
                    <div style="font-size:11px; color:var(--amber);">★★★★<span style="color:var(--text-dim);">★</span></div>
                  </div>
                  <span style="margin-left:auto; font-size:11px; color:var(--text-dim);">Hace 5h</span>
                </div>
                <p style="font-size:12.5px; color:var(--text-muted); margin:0; line-height:1.5;">Muy buen ambiente. El menú digital es muy intuitivo y fácil de usar.</p>
              </div>

              <div style="background:var(--surface-2); border-radius:var(--radius-sm); padding:14px;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div style="width:28px; height:28px; background:linear-gradient(135deg,var(--green),#166534); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; color:white;">CP</div>
                  <div>
                    <div style="font-size:12.5px; font-weight:600;">Carolina Pérez</div>
                    <div style="font-size:11px; color:var(--amber);">★★★★★</div>
                  </div>
                  <span style="margin-left:auto; font-size:11px; color:var(--text-dim);">Ayer</span>
                </div>
                <p style="font-size:12.5px; color:var(--text-muted); margin:0; line-height:1.5;">La facturación fue rápida y sin errores. Volveré sin duda.</p>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- ── END INVENTORY + REVIEWS ─────────────────── -->

    </div>
    <!-- ── END MAIN CONTENT ──────────────────────────── -->

    <!-- Footer -->
    <footer class="chrono-footer">
      <span>© 2026 CHRONO — Software de Gestión para Restaurantes · Paula Duque & Andrés Morales</span>
      <span>v1.0.0</span>
    </footer>

  </div>
  <!-- ── END CONTENT WRAPPER ───────────────────────── -->

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

</body>
</html>