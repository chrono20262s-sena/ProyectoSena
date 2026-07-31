<?php require '../modelos/exigirsesion.php'; 
      require'layout/heade.php';
      require'layout/sidebar.php';

?>


    <main class="contenido-principal">
        <section class="bloque-bienvenida">
            <h2>Bienvenido a tu panel</h2>
            <p>
                Desde aquí podrás administrar pedidos, mesas, inventario, productos,
                clientes, empleados, caja, reportes y mucho más. Este es el punto de
                partida de tu sistema — a partir de esta vista puedes empezar a
                construir los módulos de tu restaurante.
            </p>
        </section>

        <section class="bloque-tarjetas">
            <div class="tarjeta">
                <h3>Pedidos</h3>
                <p>Gestiona los pedidos de tus clientes en tiempo real.</p>
            </div>
            <div class="tarjeta">
                <h3>Inventario</h3>
                <p>Controla el stock de tus productos e insumos.</p>
            </div>
            <div class="tarjeta">
                <h3>Facturación</h3>
                <p>Genera facturas y lleva el control de tu caja.</p>
            </div>
            <div class="tarjeta">
                <h3>Reportes</h3>
                <p>Consulta estadísticas y el rendimiento de tu negocio.</p>
            </div>
        </section>
    </main>

<?php require'layout/footer.php' ?>

