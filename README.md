# Random Color (PHP | LARAVEL)
> [![Raul Mauricio Uñate Castro](https://storage.googleapis.com/lola-web/storage_apls/RecursosCompartidos/LogoGithubLibrerias.png)](#)
Esta clase permite manejar un grupo determinado de colores, con el fin de emplearlos en Gráficos, Paletas de Colores, Colores de Tema, entre otros.

-   Retorne colores aleatorios de acuerdo a la necesidad.
-   Defina el grupo de colores a usar.
-   Maneje Arreglos de un solo nivel en su uso.

# Instalación
## _Instalación a través de Composer_

```console
composer require rmunate/random-color v2.0.x-dev
```

## Metodos
Podrá invocar el metodo que requiera.

| METODO | DESCRIPCIÓN |
| ----------- | ----------- |
| `HTMLColor::groups(['red'])->get()` | Retorna los colores disponibles en el grupo, Grupos disponibles [red, pink, orange, yellow, purple, green, blue, brown, white, gray] |
| `HTMLColor::groups(['red'])->getHEX()` | Retorna solo el Hex del Color |
| `HTMLColor::groups(['red'])->getRGB()` | Retorna solo el RGB del Color |
| `HTMLColor::groups(['red'])->getNAME()` | Retorna solo el Nombre del Color |
| `HTMLColor::groups(['red'])->getNAME()` | Retorna solo el HTML del Color |
| `HTMLColor::groups(['red'])->random(5)->get()` | Retorna la cantidad de colores aleatorios |

```php
#Ejemplo
HTMLColor::groups(['red'])->random(5)->get()

// array:5 [▼ // rmunate/random-color
//   0 => array:5 [▼
//     "group" => "red"
//     "name" => "Coral Suave"
//     "html" => "LightCoral"
//     "hex" => "#F08080"
//     "rgb" => "240, 128, 128"
//   ]
//   1 => array:5 [▼
//     "group" => "red"
//     "name" => "Carmesí"
//     "html" => "Crimson"
//     "hex" => "#DC143C"
//     "rgb" => "220, 20, 60"
//   ]
//   2 => array:5 [▼
//     "group" => "red"
//     "name" => "Rojo Puro"
//     "html" => "Red"
//     "hex" => "#FF0000"
//     "rgb" => "255, 0, 0"
//   ]
//   3 => array:5 [▼
//     "group" => "red"
//     "name" => "Rojo Fuego"
//     "html" => "FireBrick"
//     "hex" => "#B22222"
//     "rgb" => "178, 34, 34"
//   ]
//   4 => array:5 [▼
//     "group" => "red"
//     "name" => "Rojo Oscuro"
//     "html" => "DarkRed"
//     "hex" => "#8B0000"
//     "rgb" => "139, 0, 0"
//   ]
// ]
```

## Mantenedores
- Ingeniero, Raúl Mauricio Uñate Castro (raulmauriciounate@gmail.com)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)