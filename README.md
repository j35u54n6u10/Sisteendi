# Sisteendi
Sistema de entregas digitalizada a través de la gestión de facturas

```console
/Sisteendi
│
├── /public
│   ├── /css
│   │   ├── styles.css         # Archivos de estilos CSS globales
│   └── /js
│       ├── app.js             # JavaScript principal del lado del cliente
│   └── /img
│       ├── logo.png           # Logotipo y otros archivos de imagen
│
├── /views
│   ├── header.php             # Cabecera común del sitio
│   ├── footer.php             # Pie de página común
│   ├── home.php               # Página de inicio
│   ├── register.php           # Registro de clientes
│   ├── login.php              # Inicio de sesión de clientes
│   ├── orders.php             # Página para gestionar pedidos
│   └── delivery.php           # Página de confirmación de entrega
│
├── /controllers
│   ├── DeliveryController.php # Lógica para la gestión de repartidores y entrega
│   ├── OrdersController.php   # Lógica de negocio relacionada con los pedidos
│   └── UserController.php     # Lógica de negocio para la gestión de usuarios
│
├── /models
│   ├── Orders.php             # Modelo de datos para pedidos
│   ├── User.php               # Modelo de datos para usuarios
│   └── Delivery.php         # Modelo de datos para repartidores
│
├── /config
│   ├── db.php                 # Configuración de la base de datos (MySQL)
│   ├── routes.php             # Definición de rutas para el proyecto
│   └── config.php             # Configuración general del proyecto
│
├── /database
│   ├── migrations             # Archivos para las migraciones de la base de datos
│   ├── seeds                  # Archivos para inicializar datos
│   └── sisteendi.sql          # Exportación de la base de datos MySQL
│
├── index.php                  # Página de inicio principal
├── login.php                  # Página de inicio de sesión
├── register.php               # Página de registro de clientes
└── README.md                  # Documentación del proyecto
```

## Explicación de la estructura:
- public: Aquí se almacenan los archivos accesibles públicamente, como los CSS, JavaScript y las imágenes.
- views: Contiene las vistas de la aplicación (las páginas web) como el inicio de sesión, registro, gestión de pedidos, confirmación de entrega, etc.
- controllers: Aquí están los controladores, que gestionan la lógica del servidor para los pedidos, usuarios, y repartidores.
- models: Contiene los modelos que interactúan con la base de datos. Cada modelo representa una tabla en la base de datos (como pedidos, usuarios, repartidores).
- config: Configuración de la base de datos y rutas del proyecto.
- database: Archivos SQL y scripts relacionados con la creación, migración, o inicialización de la base de datos.