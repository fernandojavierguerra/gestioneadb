# Creación de un nuevo proyecto Toba

## Descarga
 * Descargar este proyecto como zip (botón verde 'clone or download'). Luego extraerlo dentro de una carpeta deseada
 * Modificar el archivo ```composer.json``` reemplazando la entrada ```name``` con lo que corresponda.

## Instalación y creación del proyecto con Docker
 * Instalar [Docker](https://docs.docker.com/engine/installation/linux/ubuntulinux/) y [Docker Compose](https://docs.docker.com/compose/install/)
 * Reemplazar en el archivo ```docker-compose.yml``` todas las apariciones del string ```<NOMBRE PROYECTO>``` por el nombre real
 del proyecto (los requisitos de este nombre son los mismos que para un identificador en PHP).
 * Ejecutar el comando  
```shell
docker-compose up -d
```
 * Conectarse al contenedor  
```shell
docker exec -it <NOMBRE PROYECTO> bash
```
 * Instalar Pre-requisitos usando las siguientes guias:
   - [Composer](https://getcomposer.org/download/)
   - [Yarn](https://classic.yarnpkg.com/en/docs/install#debian-stable) 
   - [Git](https://git-scm.com/download/linux) 

 * Ejecutar en la carpeta el comando  
```shell
cd /var/local/<NOMBRE PROYECTO>
composer install
```
* Ejecutar el comando y proveer los datos requeridos
```shell
bin/toba instalacion instalar
```
 * Ejecutar el comando  
```shell
bin/crear-proyecto.sh
```
 * Reiniciar apache  
```shell
service apache2 reload
```
  Listo, el proyecto ya se puede acceder desde la url ```http://localhost:7008/toba_editor/3.3```.  
  Las credenciales por defecto son ```toba:toba```
 
  Recomendamos en este punto crear el commit inicial en el CVS. Si no se está usando Git hay que ignorar los directorios y archivos que se ecuentran en el archivo ```.gitignore```, si se utiliza Git no es necesario.  
    
  La estructura del proyecto nuevo quedó en la raíz.

### Trabajando
#### Permisos de los archivos
Por defecto el contenedor crea los archivos de código con permisos de root, esto puede ser molesto. Dentro del directorio del proyecto (fuera del contenedor) ejecutar esto por única vez para poder editar tranquilamente los archivos:
```shell
sudo chown -R $USER:$USER metadatos php temp www proyecto.ini
```
Una vez hecho esto se puede levantar con cualquier IDE la carpeta del proyecto y trabajar normalmente.
#### Carpeta de instalación de Toba
Por defecto la carpeta de instalación queda montada en la carpeta llamada ```instalacion``` en la raíz del proyecto.
 Si se desea cambiar esto se hace desde la sección ```volumes``` del ```docker-compose.yml```
#### Comandos administrativos
Utilizando la instalación de Docker se recomiendo correr los comandos administrativos (exportar y regenerar metadatos e
interacción con el CVS) desde dentro del contenedor del proyecto. Para acceder al mismo se ejecuta el siguiente comando:
```shell
docker exec -it <NOMBRE PROYECTO> bash
```

