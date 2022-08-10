# Indice
- [Configuracion de entorno](#configuracion-de-entorno)
- [Iniciar un proyecto](#descarga-tu-proyecto)
- [Configura el proyecto](#configura-tu-proyecto)
- [Manejo de Laravel](#laravel)
- [Guardar en GitHub](#guardar-en-github)
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
> En caso de que haya otra **ELIMINALA**
# <p align="center">Inicia tu proyecto</p>
## Crea tu proyecto
En la consola escribe **composer create-project laravel/laravel** ***Nombre del proyecto***
## Descarga tu proyecto
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
# <p align="center">Laravel</p>
### Ver las rutas
En la consola **php artisan route:list**
### Creacion de modelos
En la consola escribe **php artisan make:model** ***Nombre del modelo***
>Se recomienda crearlos en singular y con mayuscula en su primera letra.
### Creacion de Controladores
En la consola escribe **php artisan make:controller** ***Nombre del controlador***
>Al final de este puedes agregar ***\--resource*** para que se genere con una CRUD
### Creacion de migraciones
En la consola escribe **php artisan make:migration** ***Nombre de la migracion***
### Creacion de seeders
En la consola escribe **php artisan make:seeder** ***Nombre del seeder***
>A la hora de ejecutarlo recomiendo hacerlo de forma individual mediante `php artisan db:seed --class=TuSeeder`
## Eloquent -> Models
### Abrir la consola de Tinker
En la consola de vs escribe **php artisan tinker**
### Invocar un modelo
Antes de usarlo debes invocarlo esto se hace con **use** ***Ruta del modelo***
>Por ejemplo **use App\Models\Continent**
## Consultas
- [Consultar todo](#consultar-todas-las-instancias-de-un-modelo)
- [Consultar con filtro](#consultar-instancias-con-un-filtro)
- [Consultar con filtro multiple](#consulta-con-filtro-multiple)
- [Consultar por atributos](#consultar-los-atributos)
- [Consultar por clave primaria](#consultar-por-clave-primaria)
- [Consultar por rango](#consultar-por-rango)
- [Consultar por null](#consultar-por-null)
### Consultar todas las instancias de un modelo
En la consola de tinker escribe ***nombre_del_modelo***__::all()__
### Consultar instancias con un filtro
En la consola de tinker escribe ***nombre_del_modelo***__::where(__***'campo','operacion','comparacion')***__->__ lo que haras con el resultado se define con el "Builder"
>Por Ejemplo `Country::where('region_id','=',2)->`
### Consulta con filtro multiple
En la consola de tinker escribe ***Nombre_del_modelo***__::wherein__***('Campo',[arreglo cuyos datos seran seleccionados])***__->__ lo que haras con el resultado se define por el "Builder"
> Por Ejemplo `Country::wherein('region_id',[1,2])->`
### Consultar los atributos
En la consola de tinker escribe ***Nombre_del_modelo***__::select(__***Datos buscados***__)->__ recuerda que lo que haras con esa informacion se define con el "Builder"
>Por ejemplo `Country::select('name','national_day')->`
### Consultar por clave primaria
En la consola de tinker escribe ***Nombre_del_modelo***__::find(__***numero***__)__
>Por ejemplo `Country::find(55)`
### Consultar por rango
En la consola de tinker escribe ***Nombre_del_modelo***__::wherebetween(__***'campo','rango'***__)->__ lo que haras con el resultado se define con el "Builder"
>Por ejemplo `Country::wherebetween('national_day',['1800-01-01','1899-12-31'])->`
### Consultar por null
En la consola de tinker escribe ***Nombre_del_modelo***__::wherenull('__***campo***__')->__ recuerda que lo que haras con esa informacion se define con el "Builder"
## Opciones del Builder
### Mostrar el resultado del filtro
Despues de crear una consulta y con la consola mostrando **...** escribe **get()**
### Contar los resultados
Despues de crear una consulta y con la consola mostrando **...** escribe **count()**
### Conectar consultas
Despues de crear una consulta y con la consola mostrando **...** escribe  __orwhere(__***'consulta'***__)__ recuerda que puedes usar los otros tipos de consulta despues del "or"
### Ordenar consultas
Despues de crear una consulta y con la consola mostrando **...** escribe __orderby('__***atributo***__','__***Forma en la que se ordenara***__')__
>Por ejemplo `orderby('name', 'desc')->`
## Metodos de relacion
### 1 a N
En el modelo escribe __hasMany('__***Modelo***__,'__***atributo relacionado***__')__
>Por ejemplo return `$this->hasMany(Region::class,'continent_id');`
### N a 1
En el modelo escribe __belongsTo('__***Modelo***__,'__***atributo relacionado***__')__
### N a N
En el modelo escribe __belongsToMany('__***Modelo*** __','__***atributo relacionado***__','__******__)__
### Ancestro nieto
hasManyThrough
### Salir de tinker
Basta con escribir **exit**
# <p align="center">Guardar en GitHub</p>
### 1. Define tu nombre de usuario 
Escribe en la consola **git config --global user.name** ***"Usuario"***
### 2. Define tu correo
Escribe en la consola **git config --global user.email** ***"Email Usuario"***
### 3. Inicializa el proyecto en git
Escribe **git init**
### 4. Confirma los cambios
En la consola **git add .**
### 5. Guarda de forma local tus cambios
En la consola **git commit -m** ***"Un mensaje"***
>Un ejemplo **git commit -m rutas**
### 6. Subir los cambios
En la consola **git push origin** ***Rama a la que lo subiras***
>Un ejemplo **git push origin master** en caso de querer subirlo a otro repositorio usa **git remote -v** te mostrara a que git esta conectado, si quieres usar otra escribe el nombre de la rama
