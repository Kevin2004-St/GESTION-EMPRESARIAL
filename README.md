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

## GESTOR EMPRESARIAL

Gestor Empresarial es un sistema de información diseñado para facilitar la administración de diversos procesos empresariales como la gestión de clientes, ventas, productos, entre otros módulos que se pueden integrar fácilmente.

Este proyecto nace como una iniciativa personal con el objetivo de aplicar buenas prácticas de desarrollo y crear una solución que, aunque sea de origen académico o autodidacta, tenga la calidad suficiente para ser implementada en un entorno empresarial real.

Actualmente, el sistema cuenta con un módulo de clientes totalmente funcional, y se encuentra en constante desarrollo para incorporar nuevas funcionalidades que amplíen su utilidad y cobertura.


## TECNOLOGIAS USADAS

El desarrollo de Gestor Empresarial se basa en un stack tecnológico sencillo pero robusto, ideal para aplicaciones web dinámicas y escalables. Las tecnologías utilizadas son:

PHP – Lenguaje principal del backend, usando el framework Laravel para estructurar el proyecto.

Blade – Motor de plantillas de Laravel, usado para la creación de las vistas.

JavaScript (JS) – Para la interacción dinámica en el frontend.

CSS – Estilos personalizados para una interfaz moderna y clara.

PostgreSQL – Sistema de gestión de base de datos relacional, utilizado para almacenar toda la información del sistema.


## MODULOS IMPLEMENTADOS 

Módulo de Clientes

Módulo de Productos

Módulo de Categroias

Validación de formularios: Se valida el ingreso correcto de los datos.

Alertas de éxito: Mensajes visuales que confirman las acciones realizadas.

## MODOLOS EN DESARROLLO

PROXIMAMENTE VENTAS



## FUNCIONALIDADES

Autenticación de usuarios (Login y Logout):
Sistema de inicio y cierre de sesión, por ahora usando una autenticacion basica con verificacion de identidad por correo electronico, el enfoque tiene la siguientes caracteristicas: Contraseña cifrada, verificacion de email, autenticacion de un solo factor, trasmisión vía TLS, en el futuro se plantea mejorar a implementar 2FA(doble factor de autenticacion)

Ademas de limitar intentos de login para prevenir fuerza bruta

CRUD de Clientes:
Permite crear, visualizar, actualizar y eliminar registros de clientes.
Incluye validación de formularios y alertas automáticas de confirmación.

Sidebar dinámico:
Menú lateral colapsable que permite navegar entre módulos. Resalta la sección activa y se adapta según la vista actual.

Generación de reportes (en desarrollo):
Se implementará próximamente la funcionalidad para generar reportes en PDF de los datos almacenados, empezando por los clientes.


## DETALLES TECNICOS

Sidebar dinámico con estados activos:
El sistema cuenta con una barra lateral que adapta su estado según la ruta actual, mostrando los submenús desplegados automáticamente y resaltando el enlace activo.

Alertas animadas de éxito:
Las operaciones exitosas como crear, editar o eliminar muestran alertas temporales con transiciones suaves, mejorando la experiencia del usuario.

Autenticacion de un solo factor(1FA) (Por ahora)
Agregamos esta capa de confianza adiconal, ademas de las contraseñas encriptadas, asegurando que el email ingresado realmente pertenece al usuario. Empleamos Mailtrap para pruebas via TLS

## CONTROLADORES

ClienteController (TERMINADO)

ProductoController (TERMINADO)

CategoriaController (TERMINADO)

CONTROLADORES AUTH (PARA AUTENTICACION-- EN PROCESO)

## ARCHIVOS DEL PROYECTO

resources/views/components/sidebar.blade.php
Componente Blade que contiene la lógica y estructura del menú lateral dinámico.

public/js/sidebar.js
Script que gestiona el comportamiento de apertura y cierre del sidebar.

resources/views/layouts/app.blade.php
Plantilla principal donde se incluye el layout general y los mensajes de alerta.

public/js/alerta.js
Script que permite que las alertas de éxito desaparezcan con transición.

routes/web.php
Archivo donde se definen las rutas web del sistema.

app/Http/Controllers/ClienteController.php
Controlador encargado de la lógica CRUD del módulo de clientes.


## AUTOR

KEVIN STIVEN FERNANDEZ PEINADO