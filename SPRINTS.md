# Planificación ágil SCRUM para el desarrollo en 1 mes
> Aquí se propone un plan de desarrollo dividido en 5 sprints, cada uno de una semana, siguiendo SCRUM.

## Sprint 1: Setup Inicial y Estructura Base
_Duración: 1 semana_
> Objetivo: Crear la estructura básica del proyecto y configurar el entorno de desarrollo.
Tareas:
Instalación de XAMPP y configuración del servidor.
Crear el esquema de la base de datos en MySQL.
Definir la estructura de carpetas y archivos.
Configurar rutas básicas del proyecto.
Documentación inicial (README).
## Sprint 2: Registro e Inicio de Sesión
_Duración: 1 semana_
> Objetivo: Implementar el registro e inicio de sesión de usuarios.
### Tareas:
Crear la vista para el registro y login de usuarios (HTML5, CSS3).
- Implementar lógica en PHP para validar y registrar usuarios.
- Establecer conexión con la base de datos (MySQL).
- Verificación de cuentas existentes y manejo de sesiones (PHP).
## Sprint 3: Gestión de Pedidos
_Duración: 1 semana_
> Objetivo: Permitir que los usuarios puedan crear pedidos y que los administradores gestionen los mismos.
### Tareas:
- Crear la vista para gestionar pedidos (clientes y administrador).
- Implementar la lógica para registrar pedidos.
- Validar y confirmar pedidos (control de estado de pedidos).
- Crear la relación entre clientes, pedidos y estado de confirmación.
## Sprint 4: Sistema de Entrega y Navegación del Repartidor
_Duración: 1 semana_
> Objetivo: Crear el flujo de entrega y manejo de repartidores.
### Tareas:
- Implementar la lógica de asignación de pedidos a repartidores.
- Crear vistas para que el repartidor confirme la recogida y entrega de pedidos.
- Integrar Google Maps API para el sistema de navegación.
- Generar notificaciones automáticas para repartidores y clientes.
## Sprint 5: Confirmación de Entrega y Finalización del Pedido
_Duración: 1 semana_
> Objetivo: Implementar la confirmación de la entrega y el cierre del ciclo de pedido.
### Tareas:
- Desarrollar las vistas y lógica para la confirmación de entrega por parte de repartidores y clientes.
- Implementar notificaciones para la administradora sobre pedidos finalizados.
- Actualización del registro de pedidos completados.
Pruebas finales de todo el sistema.
