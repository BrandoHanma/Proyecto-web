# Gaming Store

## Descripción
Gaming Store es una página web de comercio electrónico especializada en productos para gamers. La plataforma ofrece una experiencia de usuario completa, desde la gestión de cuentas hasta la exploración de productos y la interacción con contenido relacionado con el gaming.

## Características principales
- Sistema de autenticación de usuarios (login, crear cuenta, recuperar contraseña)
- Página de inicio tipo landing con:
  - Productos más vendidos
  - Categorías de productos
  - Últimos blogs
  - Sección "Acerca de nosotros"
  - Formulario de contacto

## Capturas de pantalla
### Interfaz de usuario
![Login](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/1(1).png) 
![Login-Registro](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/2(1).png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/3(1).png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/4.png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/5.png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/6.png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/7.png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/8.png)

### Base de datos
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/9.png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/10.png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/11.png)
![Formulario de ](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/12.png)

### Código
## Estructura del login
![Formulario de 22](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/22.png)

1. **Declaración del tipo de documento**:
   - Se incluye la declaración del tipo de documento HTML y la estructura básica.

2. **Sección `<head>`**:
   - Contiene metadatos, el título, un enlace a una fuente de Google y un enlace a la hoja de estilos CSS.

3. **Cuerpo (`<body>`)**:
   - Se aplica estilo inline para un cursor personalizado.

4. **Estructura principal (`<main>`)**:
   - Contiene:
     - Un contenedor general.
     - Una "caja trasera" con dos secciones:
       - **a.** Para iniciar sesión.
       - **b.** Para registrarse.

5. **Contenedor para formularios**:
   - Formulario de inicio de sesión con campos para correo y contraseña.
   - Formulario de registro con campos para nombre, correo, usuario y contraseña.

6. **Recuperación de contraseña**:
   - Enlace para la recuperación de contraseña en el formulario de registro.

7. **Scripts**:
   - Script JavaScript enlazado al final del `<body>`.
     
Esta estructura proporciona un diseño funcional para las secciones de inicio de sesión y registro, facilitando la interacción del usuario con formularios y opciones de recuperación de contraseña.

## Proceso de registro de usuario
![Formulario de 14](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/14.png)

1. **Conexión a la base de datos**: Se incluye un archivo de conexión a la base de datos.

2. **Verificación de datos**: Se verifica si se han enviado todos los datos requeridos (nombre completo, contraseña, email y usuario) a través de POST.

3. **Comprobación de datos completos**:
   - Si los datos están completos:
     - Se sanitizan los datos para prevenir inyecciones SQL.
     - La contraseña se hashea por seguridad.

4. **Verificación de unicidad**:
   - Se verifica si el email ya está registrado en la base de datos:
     - Si existe, se muestra un mensaje de error y se redirige al usuario.
   - Se verifica si el nombre de usuario ya está en uso:
     - Si existe, se muestra un mensaje de error y se redirige al usuario.

5. **Inserción de usuario**:
   - Si el email y el usuario son únicos, se prepara una consulta SQL para insertar el nuevo usuario:
     - Se utiliza una consulta preparada para mayor seguridad.
     - Se insertan los datos del usuario en la base de datos.
   
6. **Manejo de inserción**:
   - Si la inserción es exitosa:
     - Se muestra un mensaje de éxito y se redirige al usuario a la página de login.
   - Si hay un error, se muestra un mensaje de error y se redirige de vuelta.

7. **Manejo de errores**:
   - Si hay un error en la preparación de la consulta SQL, se muestra un mensaje de error.
   - Si los datos POST no están completos inicialmente, se muestra un mensaje pidiendo al usuario que complete todos los campos.

8. **Cierre de conexión**: Finalmente, se cierra la conexión a la base de datos.

Este código nos permite crear un usuario de forma segura.

## Recuperar Contraseña
![Formulario de 13](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/13.png)

1. **Conexión a la base de datos**: Se incluye un archivo de conexión a la base de datos.

2. **Verificación de datos**: Se verifica si se han enviado todos los datos requeridos (nombre completo, nueva contraseña, email y usuario) a través de POST.

3. **Comprobación de datos completos**:
   - Si los datos están completos:
     - Se sanitizan los datos para prevenir inyecciones SQL.
     - La nueva contraseña se hashea por seguridad.

4. **Consulta SQL**:
   - Se prepara una consulta SQL para verificar si existe un usuario con los datos proporcionados.
   - Si se encuentra un usuario que coincide:
     - Se prepara otra consulta para actualizar la contraseña.
     - Si la actualización es exitosa, se muestra un mensaje de éxito y se redirige al usuario a la página de login.
     - Si hay un error en la actualización, se muestra un mensaje de error y se redirige a la página de nueva contraseña.
   - Si no se encuentra un usuario que coincida Se muestra un mensaje indicando que los datos no coinciden y se redirige a la página del login.

5. **Manejo de errores**:
   - Si hay errores en la preparación de las consultas SQL, se muestran mensajes de error apropiados.
   - Si los datos POST no están completos inicialmente, se muestra un mensaje pidiendo al usuario que complete todos los campos.

6. **Cierre de conexión**: Finalmente, se cierra la conexión a la base de datos.

Este código utiliza consultas preparadas para mayor seguridad contra inyecciones SQL.
## Estructura de Recuperar contraseña

![Formulario de 23](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/23.png)

1. **Declaración del tipo de documento**:
   - Se incluye la declaración del tipo de documento HTML5.

2. **Sección `<head>`**:
   - Se establece la codificación de caracteres a UTF-8.
   - Se configura la vista para dispositivos móviles, permitiendo que la página sea responsiva.
   - Se define el título de la página que aparece en la pestaña del navegador.
   - Se enlaza una hoja de estilos CSS externa para dar formato a la página.

3. **Cuerpo (`<body>`)**:
   - Se incluye un estilo interno que cambia el cursor del mouse a una imagen personalizada (`cursor.png`).

4. **Estructura principal (`<main>`)**:
   - Contiene:
     - Un contenedor trasero vacío (`<div class="caja__trasera">`).
     - Un contenedor para el formulario de recuperación de contraseña.

5. **Formulario de recuperación de contraseña**:
   - Se define un formulario que envía los datos a `db/recovery_acc.php` usando el método POST.
   - Incluye un título (`<h2>`) que indica que es para recuperar la contraseña.
   - Se añaden campos de entrada para:
     - Nombre completo.
     - Correo electrónico.
     - Nombre de usuario.
     - Nueva contraseña.
   - Todos los campos son requeridos para poder enviar el formulario.
   - Se incluye un botón para enviar el formulario y actualizar la contraseña.
     
Este código nos permite recuperar nuestra contraseña en caso de haberla olvidado.

## Estructura del Index
![Formulario de 18](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/18.png)
![Formulario de 19](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/19.png)
![Formulario de 20](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/20.png)
![Formulario de 21](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/21.png)
1. **Declaración del tipo de documento**:
   - Se incluye la declaración del tipo de documento y la estructura básica HTML.

2. **Encabezado (`<head>`)**:
   - Contiene metadatos, el título de la página y un enlace a la hoja de estilos.

3. **Cuerpo (`<body>`)**:
   - Se aplica estilo inline para el cursor personalizado.

4. **Barra de navegación**:
   - Incluye un logo y enlaces de menú.

5. **Sección hero**:
   - Presenta un título, un subtítulo y un botón de llamada a la acción.

6. **Sección de categorías**:
   - Contiene imágenes y títulos para PCs, consolas y accesorios.

7. **Sección de productos destacados**:
   - Muestra imágenes, descripciones y precios de los productos.

8. **Sección de blogs recientes**:
   - Presenta artículos y enlaces a publicaciones recientes.

9. **Sección "Acerca de nosotros"**:
   - Incluye una imagen y un texto descriptivo sobre la empresa.

10. **Pie de página**:
    - Ofrece información de contacto y enlaces a redes sociales.

11. **Scripts**:
    - Se incluyen al final del documento, incluyendo Font Awesome y un script personalizado.

Esta estructura proporciona una base sólida para una página web, organizando el contenido de manera clara y accesible, y mejorando la experiencia del usuario.

## Configuración de eventos
![Formulario de 15](https://github.com/BrandoHanma/Proyecto-web/blob/7ead06edbc94d14103c19ff74d6b8541a70d6804/pruebas/24.png)

1. **Event listeners**:
   - Se añaden event listeners a los botones de inicio de sesión y registro.
   - Se añade un event listener al evento `resize` de la ventana.

2. **Selección de elementos del DOM**:
   - Se seleccionan varios elementos del formulario y contenedores usando `querySelector`.

3. **Función `anchoPage()`**:
   - Ajusta la disposición de los elementos según el ancho de la ventana.
   - Si el ancho es mayor a 850px, muestra ambas cajas traseras.
   - Si es menor, ajusta la visualización para un diseño más compacto.

4. **Función `iniciarSesion()`**:
   - Maneja la visualización cuando se hace clic en "Iniciar Sesión".
   - Ajusta los estilos y la posición de los elementos según el ancho de la ventana.

5. **Función `register()`**:
   - Maneja la visualización cuando se hace clic en "Registrarse".
   - También ajusta los estilos y la posición de los elementos según el ancho de la ventana.

Este código está diseñado para una interfaz de usuario que alterna entre formularios de inicio de sesión y registro en la misma pagina.

## Implementación de desplazamiento suave
![Formulario de 16](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/15.png)

1. **Esperar a que el DOM esté completamente cargado**:
   - Se asegura que el código se ejecute una vez que todo el contenido del DOM esté disponible.

2. **Selección de elementos**:
   - Se seleccionan todos los elementos con la clase `scroll-link`.

3. **Añadir event listeners**:
   - Se añade un event listener de clic a cada enlace seleccionado.

4. **Definición de la función `smoothScroll`**:
   - Previene el comportamiento predeterminado del enlace.
   - Calcula la posición de destino y la distancia a recorrer.
   - Inicia una animación de desplazamiento suave.

5. **Animación del desplazamiento**:
   - Se utiliza `requestAnimationFrame` para animar el desplazamiento.
   - Se implementa una función de aceleración cúbica para un efecto más natural.
   - El desplazamiento se realiza durante 1000 ms (1 segundo).

Este código permite crear un efecto de desplazamiento suave al hacer clic en enlaces de la página, mejorando la experiencia del usuario al navegar entre secciones.

![Formulario de 16](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/16.png)
![Formulario de 17](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/17.png)
## Proceso de inicio de sesión
1. **Inicio de sesión PHP**:
   - Se inicia la sesión PHP y se conecta a la base de datos.

2. **Verificación de la solicitud**:
   - Se verifica si la solicitud es de tipo POST.

3. **Sanitización y validación**:
   - Se sanitizan y validan los datos de entrada (email y contraseña).
   - Se comprueba que los campos no estén vacíos.

4. **Consulta SQL**:
   - Se prepara y ejecuta una consulta SQL segura para buscar el usuario por email.

5. **Verificación del usuario**:
   - Si encuentra el usuario:
     - Se verifica la contraseña usando `password_verify()`.
     - Si es correcta, se inicia sesión y se redirige al índice.
     - Si es incorrecta, se muestra un error y se redirige al login.
   - Si no encuentra el usuario, se muestra un error de email no registrado.

6. **Manejo de errores**:
   - Si los campos están vacíos, se muestra un error pidiendo completarlos.
   - Si el método de solicitud no es POST, se redirige al login.

Este proceso implementa un sistema de inicio de sesión seguro que valida las credenciales del usuario y proporciona retroalimentación adecuada en caso de errores.

## Tecnologías utilizadas
- HTML
- CSS
- PHP
- JavaScript
- MySQL
- XAMPP

## Requisitos previos
- XAMPP instalado y configurado en tu sistema.
- MYSQL instalado.
- Backup de la base de datos proporcionada.
  
## Instalación y ejecución
1. Clona o descarga el repositorio en tu máquina local.
2. Asegúrate de tener XAMPP y MYSQL instalado en tu sistema.
3. Coloca los archivos del proyecto en la carpeta `htdocs` de tu instalación de XAMPP.
4. Inicia los servicios de Apache y MySQL en XAMPP.
5. Importa la base de datos proporcionada en el archivo SQL a tu servidor MySQL.
6. Accede al proyecto a través de tu navegador web utilizando la URL local correspondiente (por ejemplo, `http://localhost/Proyecto-web`).


## Contribución
Actualmente, este proyecto no está abierto a contribuciones externas.

## Licencia
Este proyecto no tiene una licencia específica asignada.
