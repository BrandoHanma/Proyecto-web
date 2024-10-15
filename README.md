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
   - Si no se encuentra un usuario que coincida:
     - Se muestra un mensaje indicando que los datos no coinciden y se redirige a la página de nueva contraseña.

5. **Manejo de errores**:
   - Si hay errores en la preparación de las consultas SQL, se muestran mensajes de error apropiados.
   - Si los datos POST no están completos inicialmente, se muestra un mensaje pidiendo al usuario que complete todos los campos.

6. **Cierre de conexión**: Finalmente, se cierra la conexión a la base de datos.

Este código utiliza consultas preparadas para mayor seguridad contra inyecciones SQL.
![Formulario de 14](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/14.png)
![Formulario de 15](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/15.png)
![Formulario de 16](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/16.png)
![Formulario de 17](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/17.png)
![Formulario de 18](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/18.png)
![Formulario de 19](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/19.png)
![Formulario de 20](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/20.png)
![Formulario de 21](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/21.png)
![Formulario de 22](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/22.png)
![Formulario de 23](https://github.com/BrandoHanma/Proyecto-web/blob/49d2504912399abc7c8eb7b7e95f0a7445dcbd5e/pruebas/23.png)

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
