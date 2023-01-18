# Random Color PHP
## _Manejo de Colores HTML para uso en gráficos, paletas, entre otros.._

[![N|Solid](https://i.ibb.co/ZLzQTpm/Firma-Git-Hub.png)](#)

Esta clase permite manejar un grupo determinado de colores HTML, con el fin de emplearlos con fines como Gráficos, Paletas de Colores, Colores de Tema, entre otros.

## Características

-	Retorne colores aleatorios de acuerdo a la necesidad.
-	Defina el grupo de colores a usar.
-	Maneje Arreglos de un solo nivel en su uso.

## Instalación aCon Composer

```sh
composer require rmunate/random-color
```
## Comandos

Podrá invocar el metodo que requiera.

| COMANDO | DESCRIPCIÓN |
| ----------- | ----------- |
| `HTMLColor::groups(['red'])->get()` | Retorna los colores disponibles en el grupo, Grupos disponibles [red, pink, orange, yellow, purple, green, blue, brown, white, gray] |
| `HTMLColor::groups(['red'])->getHEX()` | Retorna solo el Hex del Color |
| `HTMLColor::groups(['red'])->getRGB()` | Retorna solo el RGB del Color |
| `HTMLColor::groups(['red'])->getNAME()` | Retorna solo el Nombre del Color |
| `HTMLColor::groups(['red'])->getNAME()` | Retorna solo el HTML del Color |
| `HTMLColor::groups(['red'])->random(5)->get()` | Retorna la cantidad de colores aleatorios |

```sh
#Ejemplo
HTMLColor::groups(['red'])->random(5)->get()
```

## Desarrollador
- Ingeniero, Raúl Mauricio Uñate Castro
- raulmauriciounate@gmail.com

## Licencia
MIT