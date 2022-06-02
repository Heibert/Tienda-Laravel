# Indice
- [Configuracion de entorno](#configuracion-de-entorno)
- [Descarga tu proyecto](#descarga-tu-proyecto)
- [Configura el proyecto](#configura-tu-proyecto)
- [Guardar en GitHub](#guarda-en-github)
# <p align="center">Configuracion de entorno</p>
### 1. Borra tu proyecto local
### 2. Verificación de PHP 
En la consola escribe **php -v**
> Si el resultado es **8.0** o mayor todo es correcto, en caso de no serlo reinstala **XAMPP**
### 3. Verifica tu version de GitHub
En la consola escribe **git --version** 
> Tu version deberia ser superior a **2.2**
### 4. Verificar MYSQL
Abre XAMPP y enciende MYSQL 
> En caso de error ve a **config/my.ini** y cambia sus **port=XXXX** por otros
### 5. Verifica tu version de Composer
En la consola escribe **composer --version**
### 6. Revisa las credenciales del equipo
Abre el *Administrador de credenciales* y revisa si tu cuenta de GitHub esta abierta.
> En caso de no estar otra **ELIMINALA**
# <p align="center">Descarga tu proyecto</p>
### 1. Ingresa a tu directorio
En la consola escribe **cd** ***Tu directorio*** y deberias quedar ubicado en el
> Por ejemplo *cd C:\Users\APRENDIZ\Documents\Heibert*
### 2. Clona tu proyecto
En la consola escribe **git clone** ***Tu directorio de GitHub***
> Por ejemplo **git clone https://github.com/Heibert/PHP2465903.git**
### 3. Ingresa a tu carpeta
En la consola escribe **cd** ***Tu carpeta clonada***
> Por ejemplo **cd PHP2465903** *Si no recuerdas el nombre de la carpeta puedes usar **dir** para que la consola te muestre el contenido de la carpeta en la que te ubicas*
### 4. Descarga la rama que uses
En la consola escribe **git pull origin** ***Tu rama*** 
>Un ejemplo seria **git pull origin evidencia_01** con **git pull origin -v** te muestra tus ramas
### 5. Selecciona la rama que usaras
En la consola **git checkout** ***Tu rama***
>Un ejemplo seria **git checkout master**
### 6. Instala composer
En la consola escribe **composer install**
> Si te sale un error podria ser culpa del internet, vuelve a intentarlo
### 7. Abre Visual Studio
En la consola escribe **code .** y deberia abrirse en tu carpeta
# <p align="center">Configura tu proyecto</p>
### 1. Crea tu archivo de configuracion .env
Copia el archivo **.env.example** y pegalo en tu mismo proyecto cambiale el nombre a la copia y nombralo como **.env**
### 2. Configura tu .env
En la linea 11 estableces que tipo de BD usas y en la 14 el nombre o ruta de la BD
> En la linea 11 a 16 del archivo .env estan las configuraciones de tu BD
### 2. Crear una KEY en artisan
Abre una consola en VS y en ella escribe **php artisan key:generate**
> No funcionara si no instalaste correctamente el *composer*
### 3. Migra tus BD
En la consola escribe **php artisan migrate**
> En caso de error revisa el tipo de BD que tienes en el .env
### 4. Llena tus BD
En la cosola escribe **php artisan db:seed**
### 5. Ejecuta el servidor
En la consola escribe **php artisan serve**
>Te deberia dar una direccion la cual al clickearla te abre tu pagina por ejemplo *http://127.0.0.1:8000*
# Guarda en GitHub
### 1. Confirma los cambios
En la consola **git add .**
### 2. Guarda de forma local tus cambios
En la consola **git commit -m** ***Un mensaje***
>Un ejemplo **git commit -m rutas**
### 3. Subir los cambios
En la consola **git push origin** ***Rama a la que lo subiras***
>Un ejemplo **git push origin master**