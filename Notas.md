# <p align="center" color> Configuracion de entorno</p>
### 1. Borra tu proyecto local
### 2. Verificación de PHP 
- En la consola escribe **php -v**
> Si el resultado es **8.0** o mayor todo es correcto, en caso de no serlo reinstala **XAMPP**
### 3. Verifica tu version de GitHub
- En la consola escribe **git --version** 
> Tu version deberia ser superior a **2.2**
### 4. Verificar MYSQL
- Abre XAMPP y enciende MYSQL 
> En caso de error ve a **config/my.ini** y cambia sus **port=XXXX** por otros
### 5. Verifica tu version de Composer
- En la consola escribe **composer --version**
### 6. Revisa las credenciales del equipo
- Abre el *Administrador de credenciales* y revisa si es tu cuenta.
> En caso de no serlo **borrala**
# <p align="center">Descarga tu proyecto</p>
### 1. Ingresa a tu directorio
- En la consola escribe **cd** *Tu directorio* y deberias quedar ubicado en el
> Por ejemplo *cd C:\Users\APRENDIZ\Documents\Heibert*
### 2. Clona tu proyecto
- En la consola escribe **git clone** *Tu directorio de GitHub*
> Por ejemplo **git clone https://github.com/Heibert/PHP2465903.git**
### 3. Ingresa a tu carpeta
- En la consola excribe **cd** *Tu carpeta clonada*
> Por ejemplo **cd PHP2465903** *Si no recuerdas el nombre de la carpeta puedes usar **dir** para que la consola te muestre el contenido de la carpeta en la que te ubicas*
### 4. Descarga la rama que uses
- En la consola escribe **git pull origin** ***Tu rama*** 
>Un ejemplo seria **git pull origin evidencia_01** con **git remote -v** te muestra tus ramas
### 5. Instala composer
- En la consola escribe **composer install**
> Si te sale un error podria ser culpa del internet, vuelve a intentarlo
### 6. Abre Visual Studio
- En la consola escribe **code .** y deberia abrirse en tu carpeta
# <p align="center">Configura tu proyecto</p>
### Crea tu archivo de configuracion .env
- Copia el archivo **.env.example** y pegalo en tu mismo proyecto
- Cambiale el nombre a la copia y nombralo como **.env**
> En la linea 11 a 16 del archivo .env se configura tu BD