# Sistema de Restaurante — Base MVC (Registro / Login / Home)

Proyecto base en PHP con arquitectura MVC simple, pensado para ir creciendo
poco a poco. Variables y nombres de archivos en español.

## Estructura

```
index.php                        -> redirige a vistas/login.php
basedatos.sql                    -> script para crear la base de datos

modelos/
  Conexion.php                   -> abre la conexión PDO
  Usuario.php                    -> registrar(), buscarPorCorreo(), validarLogin()

controladores/
  registrocontrolador.php        -> procesa el formulario de registro
  logincontrolador.php           -> procesa el formulario de login
  salircontrolador.php           -> cierra la sesión

vistas/
  registro.php                   -> formulario de registro
  login.php                      -> formulario de login
  inicio.php                     -> página protegida tras iniciar sesión

publico/
  css/estilos.css                -> estilos base (reemplázalo por el tuyo)
  imagenes/                      -> aquí van tus imágenes
```

## Instalación con XAMPP

1. Copia la carpeta `proyecto-restaurante` dentro de `htdocs`.
2. Inicia **Apache** y **MySQL** en el panel de XAMPP.
3. Ve a `http://localhost/phpmyadmin`, pestaña **SQL**, y pega el contenido
   de `basedatos.sql`. Ejecútalo.
4. Revisa `modelos/Conexion.php` — por defecto usa `root` sin contraseña,
   que es lo normal en XAMPP.
5. Abre `http://localhost/proyecto-restaurante/index.php`.

## Cómo poner tu propio CSS

Todo el HTML usa clases simples y genéricas (`.cabecera`, `.formulario`,
`.boton-primario`, `.tarjeta`, etc. — la lista completa está comentada
al inicio de `publico/css/estilos.css`). Para aplicar tu propio diseño:

- Opción rápida: reemplaza el contenido de `publico/css/estilos.css` por
  tu propio CSS, enganchando tus estilos a esas mismas clases.
- Opción segura: deja `estilos.css` como está y agrega un segundo
  `<link>` con tu hoja de estilos en cada vista, después del primero,
  para ir sobrescribiendo poco a poco.

## Cómo sigue creciendo el proyecto

Cuando quieras agregar un módulo nuevo (por ejemplo "Productos" o
"Pedidos"), sigue el mismo patrón:

1. Crea la tabla en `basedatos.sql`.
2. Crea el modelo en `modelos/` con sus métodos (guardar, listar, etc).
3. Crea el controlador en `controladores/` que reciba el formulario y
   llame al modelo.
4. Crea la vista en `vistas/` con el HTML/formulario correspondiente.

## Notas de seguridad

Este proyecto ya incluye lo básico:
- Contraseñas encriptadas con `password_hash()` / `password_verify()`.
- Consultas preparadas con PDO (evita inyección SQL).
- `htmlspecialchars()` al mostrar datos del usuario.

Antes de producción, te recomiendo además:
- Protección CSRF en los formularios.
- Validación de correo más estricta y límites de intentos de login.
