## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Emprex - Gestor Empresarial

**Emprex** es un sistema de información diseñado para facilitar la administración de procesos empresariales, como la gestión de clientes, ventas, productos y más. Los módulos son flexibles e integrables según las necesidades del negocio.

Este proyecto nace como una iniciativa personal para aplicar buenas prácticas de desarrollo, orientadas a crear una solución que, aunque de origen académico/autodidacta, tenga la calidad necesaria para su implementación en entornos reales.


## TECNOLOGIAS USADAS

## Tecnologías utilizadas

- **PHP** – Lenguaje principal del backend, usando el framework Laravel.
- **Blade** – Motor de plantillas de Laravel para las vistas.
- **JavaScript** – Para la interacción dinámica en el frontend.
- **CSS** – Estilos personalizados para una interfaz moderna.
- **PostgreSQL** – Base de datos relacional robusta.


## MODULOS IMPLEMENTADOS 

- Módulo de Clientes
- Módulo de Productos
- Módulo de Categorías
- Validación de formularios
- Alertas visuales de éxito


## MODOLOS EN DESARROLLO

- Módulo de Ventas (próximamente)
- Generación de reportes PDF (Funcional para modulos finalizados)


## Funcionalidades destacadas

- **Autenticación de usuarios (Login/Logout):**
  - Verificación por correo electrónico.
  - Contraseñas cifradas.
  - Transmisión vía TLS.
  - En proceso: Implementación de autenticación en dos pasos (2FA).

- **Notificaciones personalizadas:**
  - Envío de correos para verificación de cuenta.
  - Personalización del diseño de los correos.
  - Prevención de ataques de fuerza bruta.

- **CRUD de en los modulos:**
  - Crear, leer, actualizar y eliminar registrosd.
  - Validación de campos y alertas animadas.

- **Sidebar dinámico:**
  - Menú lateral colapsable.
  - Enlace activo resaltado automáticamente.

- **Generación de reportes (en desarrollo, pero funcional para modulos finalizados):**
  - Exportación en PDF de datos por módulo.


## Detalles técnicos

- Sidebar con detección de ruta actual.
- Alertas temporales con animaciones suaves.
- Autenticación por correo electrónico usando Mailtrap.
- Contraseñas cifradas con Laravel Hash.


## Controladores

- `ClienteController` (Finalizado)
- `ProductoController` (Finalizado)
- `CategoriaController` (Finalizado)
- `PdfController` (Reportes - En desarrollo, Funcional para los modulos finalizados)
- `Auth` (En proceso)


## Estructura de archivos relevantes

**Vistas y componentes**
- `resources/views/components/sidebar.blade.php`
- `resources/views/layouts/app.blade.php`

**Scripts**
- `public/js/sidebar.js`
- `public/js/alerta.js`

**Controladores**
- `app/Http/Controllers/ClienteController.php`
- `app/Http/Controllers/ProductoController.php`
- `app/Http/Controllers/CategoriaController.php`
- `app/Http/Controllers/PdfController.php`

**Notificaciones**
- `app/Notifications/*`

**Rutas**
- `routes/web.php`


## Autor

Kevin Stiven Fernández Peinado  
Desarrollador de software – Proyecto personal
https://github.com/Kevin2004-St
