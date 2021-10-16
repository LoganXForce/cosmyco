# Cotizador-cos

App web de cotizador

## Instalacion e integración

El proyecto tiene una integración con **composer** y **phpunit**. Para Instalar el proyecto debe ejecutar 

`composer install `

## Test de pruebas unitarias

La integracion de **phpunit** permite hacer pruebas unitarias y de integracion. Para ejecutar los test del proyecto ejecute el siguiente comando.

`./vendor/bin/phpunit tests`

Se mostrara por consola el siguiente aviso al ejecutar.

![](/testing.PNG)

Las clases que se ejecutan son las siguientes.

![](/Class.PNG)

Un ejemplo de como se aplica **phpunit** tomando como referencia la clase RenderViewTest.php, es validando si la vista existe para su renderizacion en pantalla importando la clase **TestCase**.

![](/ClassTesting.PNG)





