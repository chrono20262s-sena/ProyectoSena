<?php require '../modelos/exigirsesion.php';
      require'layout/heade.php';
      require'layout/sidebar.php'
 ?>



    <!-- ── MAIN CONTENT ──────────────────────────────── -->
    <div id="content" class="content">

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


</body>
</html>