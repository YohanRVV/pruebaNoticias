# Prueba de Noticias
Puedes visitar la página web subida a un hosting en este enlace: https://yohanrvv18.alwaysdata.net/

Este es un proyecto simple de prueba que muestra noticias en la página principal, estas son obtenidas desde la base de datos.
Además en el menú superior están 2 vinculos, uno para periodistas y otro para noticias, todo esto también traído desde la base de datos.

---

## Página Periodistas
En la página periodistas puedes visualizar la cantidad de periodistas almacenados en la base de datos, puedes editar los nombre como también eliminarlos.
## Página Noticias

En la página de noticias puedes visualizar todas las noticias creadas y ver el periodista que las creó. Además de poder editarlas, crear nuevas, como también eliminarlas.

---

> **Nota sobre la gestión de periodistas y noticias:**
>
> En este sistema, se ha implementado una estructura de base de datos que permite una gestión eficiente de periodistas y noticias. Sin embargo, para manejar las situaciones en las que un periodista ya no debe estar activo pero ha publicado noticias, se ha diseñado un enfoque especial:
>
> - **Periodistas Activos e Inactivos:** Los periodistas pueden estar en dos estados: activo o inactivo. Esto se controla a través del campo `activo` en la tabla `periodistas`. Un periodista inactivo no se elimina completamente de la base de datos para mantener la integridad de las noticias que ha publicado.
>
> - **Gestión de Eliminación:** Al eliminar un periodista, en lugar de borrarlo directamente de la tabla `periodistas`, se cambia su estado a inactivo (`activo = 0`). Esto se hace para preservar la relación entre las noticias publicadas y el periodista que las creó.
>
> - **Tabla `periodistas_eliminados`:** Para llevar un registro de los periodistas que han sido marcados como inactivos, se crea una entrada correspondiente en la tabla `periodistas_eliminados`. Esta tabla almacena la información esencial del periodista, pero lo aisla de las operaciones activas del sistema.
>
> - **Integridad de las Noticias:** A pesar de que un periodista esté inactivo, las noticias que ha creado permanecen en el sistema. Esto asegura que no haya pérdida de información y que la integridad de los datos históricos se mantenga intacta.
>
> - **Creación y Edición de Noticias:** Durante la creación de noticias, solo los periodistas activos aparecen en la lista de selección. Sin embargo, si se edita una noticia asociada a un periodista inactivo, la información original se mantiene, respetando el historial de publicaciones.
>
> Este enfoque asegura que la gestión de periodistas y noticias sea coherente, manteniendo la integridad de la base de datos y permitiendo un registro histórico adecuado de las actividades en el sistema.

---

## Instalación

1. Clona este repositorio en tu máquina local.
2. Configura un servidor web (por ejemplo, Apache) y asegúrate de que PHP esté instalado.
3. Crea una base de datos MySQL y configura las credenciales en `includes/db.php`.
4. Importa la estructura de la base de datos desde el archivo `database.sql`.
5. En el footer está el script para google analitycs, por lo que debes colocar tu código de seguimiento donde dice `CODIGO_SEGUIMIENTO`.
6. Abre un navegador y navega a la URL de tu servidor local para acceder al proyecto.


