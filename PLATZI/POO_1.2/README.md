### CURSO DE PHP PLATZI

## ORM

Un ORM, que significa Object Relational Mapping, es un concepto en el cual vamos a crear dentro de nuestro código algunos modelos basados en las tablas de nuestra base de datos.

Una principal característica de un ORM es que hace más transparente las conexiones a PostgreSQL y MySQL, además nos protege de algunas vulnerabilidades de SQL y facilita algunas validaciones a la información.

# Instalacion eloquent

Ingresamos a la pagina [packagist](https://packagist.org/) luego buscamos ellumunate/database, despues procedemos a instalar con el comando ``` php composer.phar illuminate/database ``` luego tener encuenta los siguientes conceptos :

- Hay que crear una clase para relacionar objetos que bamos a utilizar en nuestra aplicacion en php con la tabla que estamos utilizando en mysql

- Cuando utilizamos el ORM de Laravel debemos crear clases y que extiendan de Model que viene de eloquent 
``` use Illuminate\Database\Eloquent\Model; ```

## Patrones de diseño

Los patrones de diseños son un conceptos muy usados en programacion el cual nos brinda soluciones ya estudiadas ya probadas para resolver problemas comunes

# Front Controller

Front Controller es un patrón de diseño que nos dará una solución a la redundancia del código en las múltiples entradas a la aplicación. Esto nos ayuda a unificar las entradas de la aplicacion a la base de datos.

Es un como un modulo que va recibir todas las peticiones y el se va encargar de hacer un dispach de esas peticiones asi otros lados.

### PSR7

PSR7 es un estandar que nos permite normalizar un request y un response en PHP. En este enlace encontrarás la documentación de PSR7 [php-fig](https://www.php-fig.org/psr/psr-7/)

aqui encontraremos como implementarlo [packagist](https://packagist.org/packages/laminas/laminas-diactoros)

la documentacion de la libreria es [laminas](https://docs.laminas.dev/laminas-diactoros/)

tambie se usa una configuracion de htaccess para las url amigables

### Router

aura/router es un paquete que nos ayudará para manejar las rutas en nuestro proyecto.
Aquí puedes encontrar el paquete: [aura](https://packagist.org/packages/aura/router),en esta url tenemos la documentación: [documentacion](https://github.com/auraphp/Aura.Router/blob/HEAD/docs/index.md)

### Template engines

Son motores que sirven para renderear el código html y sustituir las partes de código con los datos que se tienen que imprimir.

PHP a pesar de que fue pensado para ser un template engine, se ha enfocado más en la programación, por eso tenemos librerías que se concentran totalmente en esto. para descargar twing [twig](https://packagist.org/packages/twig/twig) i procedemos a instalarlo como siempre con composer en la consola ``` php composer.phar require twig/twig ``` siempre y cuando tengamos en nuestro proyecto los archivos de composer




