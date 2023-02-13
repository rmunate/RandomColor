<?php

namespace Rmunate\RandomColor;

class HTMLColor 
{

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║      ATRIBUTOS DEL OBJETO       ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    /* Atributos del Objeto */
    protected $query;
    private $response;

    /* Atributos de la Clase */
    private static $colors = [
        'red' => [
            ['Name' => 'Rojo Indio', 'HTML' => 'IndianRed', 'Hex' => '#CD5C5C', 'RGB' => '205, 92, 205'],
            ['Name' => 'Coral Suave', 'HTML' => 'LightCoral', 'Hex' => '#F08080', 'RGB' => '240, 128, 128'],
            ['Name' => 'Salmón', 'HTML' => 'Salmon', 'Hex' => '#FA8072', 'RGB' => '250, 128, 114'],
            ['Name' => 'Salmón oscuro', 'HTML' => 'DarkSalmon', 'Hex' => '#E9967A', 'RGB' => '233, 150, 122'],
            ['Name' => 'Salmón Suave', 'HTML' => 'LightSalmon', 'Hex' => '#FFA07A', 'RGB' => '255, 160, 122'],
            ['Name' => 'Carmesí', 'HTML' => 'Crimson', 'Hex' => '#DC143C', 'RGB' => '220, 20, 60'],
            ['Name' => 'Rojo Puro', 'HTML' => 'Red', 'Hex' => '#FF0000', 'RGB' => '255, 0, 0'],
            ['Name' => 'Rojo Fuego', 'HTML' => 'FireBrick', 'Hex' => '#B22222', 'RGB' => '178, 34, 34'],
            ['Name' => 'Rojo Oscuro', 'HTML' => 'DarkRed', 'Hex' => '#8B0000', 'RGB' => '139, 0, 0']
        ],
        'pink' => [
            ['Name' => 'Rosa', 'HTML' => 'Pink', 'Hex' => '#FFC0CB', 'RGB' => '255, 192, 203'],
            ['Name' => 'Rosa Suave', 'HTML' => 'LightPink', 'Hex' => '#FFB6C1', 'RGB' => '255, 182, 193'],
            ['Name' => 'Rosa Cálido', 'HTML' => 'HotPink', 'Hex' => '#FF69B4', 'RGB' => '255, 105, 180'],
            ['Name' => 'Rosa Profundo', 'HTML' => 'DeepPink', 'Hex' => '#FF1493', 'RGB' => '255, 20, 147'],
            ['Name' => 'Medio Violeta Rojo', 'HTML' => 'MediumVioletRed', 'Hex' => '#C71585', 'RGB' => '199, 21, 133'],
            ['Name' => 'Rosa Pastel', 'HTML' => 'PaleVioletRed', 'Hex' => '#DB7093', 'RGB' => '219, 112, 147']
        ],
        'orange' => [
            ['Name' => 'Salmón Suave', 'HTML' => 'LightSalmon', 'Hex' => '#FFA07A', 'RGB' => '255, 160, 122'],
            ['Name' => 'Naranja Coral', 'HTML' => 'Coral', 'Hex' => '#FF7F50', 'RGB' => '255, 127, 80'],
            ['Name' => 'Tomate', 'HTML' => 'Tomato', 'Hex' => '#FF6347', 'RGB' => '255, 99, 71'],
            ['Name' => 'Naranja Rojizo', 'HTML' => 'OrangeRed', 'Hex' => '#FF4500', 'RGB' => '255, 69, 0'],
            ['Name' => 'Naranja Oscuro', 'HTML' => 'DarkOrange', 'Hex' => '#FF8C00', 'RGB' => '255, 140, 0'],
            ['Name' => 'Naranja Puro', 'HTML' => 'Orange', 'Hex' => '#FFA500', 'RGB' => '255, 165, 0']
        ],
        'yellow' => [
            ['Name' => 'Amarillo Oro', 'HTML' => 'Gold', 'Hex' => '#FFD700', 'RGB' => '255, 215, 0'],
            ['Name' => 'Amarillo Puro', 'HTML' => 'Yellow', 'Hex' => '#FFFF00', 'RGB' => '255, 255, 0'],
            ['Name' => 'Amarillo Suave', 'HTML' => 'LightYellow', 'Hex' => '#FFFFE0', 'RGB' => '255, 255, 224'],
            ['Name' => 'Amarillo Limón', 'HTML' => 'LemonChiffon', 'Hex' => '#FFFACD', 'RGB' => '255, 250, 205'],
            ['Name' => 'Amarillo Manzana Suave', 'HTML' => 'LightGoldenrodYellow', 'Hex' => '#FAFAD2', 'RGB' => '250, 250, 210'],
            ['Name' => 'Amarillo Papaya', 'HTML' => 'PapayaWhip', 'Hex' => '#FFEFD5', 'RGB' => '255, 239, 213'],
            ['Name' => 'Amarillo Mocasín', 'HTML' => 'Moccasin', 'Hex' => '#FFE4B5', 'RGB' => '255, 228, 181'],
            ['Name' => 'Amarillo Melocotón', 'HTML' => 'PeachPuff', 'Hex' => '#FFDAB9', 'RGB' => '255, 218, 185'],
            ['Name' => 'Amarillo Oro Pálido', 'HTML' => 'PaleGoldenrod', 'Hex' => '#EEE8AA', 'RGB' => '238, 232, 170'],
            ['Name' => 'Amarillo Caqui', 'HTML' => 'Khaki', 'Hex' => '#F0E68C', 'RGB' => '240, 230, 140'],
            ['Name' => 'Amarillo Caqui Oscuro', 'HTML' => 'DarkKhaki', 'Hex' => '#BDB76B', 'RGB' => '189, 183, 107']
        ],
        'purple' => [
            ['Name' => 'Espliego', 'HTML' => 'Lavender', 'Hex' => '#E6E6FA', 'RGB' => '230, 230, 250'],
            ['Name' => 'Cardo', 'HTML' => 'Thistle', 'Hex' => '#D8BFD8', 'RGB' => '216, 191, 216'],
            ['Name' => 'Ciruela', 'HTML' => 'Plum', 'Hex' => '#DDA0DD', 'RGB' => '221, 160, 221'],
            ['Name' => 'Violeta', 'HTML' => 'Violet', 'Hex' => '#EE82EE', 'RGB' => '238, 130, 238'],
            ['Name' => 'Orquídea', 'HTML' => 'Orchid', 'Hex' => '#DA70D6', 'RGB' => '218, 112, 214'],
            ['Name' => 'Fucsia', 'HTML' => 'Fuchsia', 'Hex' => '#FF00FF', 'RGB' => '255, 0, 255'],
            ['Name' => 'Magenta', 'HTML' => 'Magenta', 'Hex' => '#FF00FF', 'RGB' => '255, 0, 255'],
            ['Name' => 'Orquídea Medio', 'HTML' => 'MediumOrchid', 'Hex' => '#BA55D3', 'RGB' => '186, 85, 211'],
            ['Name' => 'Púrpura Medio', 'HTML' => 'MediumPurple', 'Hex' => '#9370DB', 'RGB' => '147, 112, 219'],
            ['Name' => 'Amatista', 'HTML' => 'Amethyst', 'Hex' => '#9966CC', 'RGB' => '153, 102, 204'],
            ['Name' => 'Azul Violeta', 'HTML' => 'BlueViolet', 'Hex' => '#8A2BE2', 'RGB' => '138, 43, 226'],
            ['Name' => 'Violeta Oscuro', 'HTML' => 'DarkViolet', 'Hex' => '#9400D3', 'RGB' => '148, 0, 211'],
            ['Name' => 'Orquídea Oscuro', 'HTML' => 'DarkOrchid', 'Hex' => '#9932CC', 'RGB' => '153, 50, 204'],
            ['Name' => 'Magenta Oscuro', 'HTML' => 'DarkMagenta', 'Hex' => '#8B008B', 'RGB' => '139, 0, 139'],
            ['Name' => 'Púrpura', 'HTML' => 'Purple', 'Hex' => '#800080', 'RGB' => '128, 0, 128'],
            ['Name' => 'Índigo', 'HTML' => 'Indigo', 'Hex' => '#4B0082', 'RGB' => '75, 0, 130'],
            ['Name' => 'Azul Pizarra', 'HTML' => 'SlateBlue', 'Hex' => '#6A5ACD', 'RGB' => '106, 90, 205'],
            ['Name' => 'Azul Pizarra Medio', 'HTML' => 'MediumSlateBlue', 'Hex' => '#7B68EE', 'RGB' => '123, 104, 238'],
            ['Name' => 'Azul Pizarra Oscuro', 'HTML' => 'DarkSlateBlue', 'Hex' => '#483D8B', 'RGB' => '72, 61, 139']
        ],
        'green' => [
            ['Name' => 'Verde Amarillento', 'HTML' => 'GreenYellow', 'Hex' => '#ADFF2F', 'RGB' => '173, 255, 47'],
            ['Name' => 'Verde Cartujano', 'HTML' => 'Chartreuse', 'Hex' => '#7FFF00', 'RGB' => '127, 255, 0'],
            ['Name' => 'Verde Césped', 'HTML' => 'LawnGreen', 'Hex' => '#7CFC00', 'RGB' => '124, 253, 0'],
            ['Name' => 'Lima', 'HTML' => 'Lime', 'Hex' => '#00FF00', 'RGB' => '0, 255, 0'],
            ['Name' => 'Verde Lima', 'HTML' => 'LimeGreen', 'Hex' => '#32CD32', 'RGB' => '50, 205, 50'],
            ['Name' => 'Verde Pálido', 'HTML' => 'PaleGreen', 'Hex' => '#98FB98', 'RGB' => '152, 251, 152'],
            ['Name' => 'Verde Claro', 'HTML' => 'LightGreen', 'Hex' => '#90EE90', 'RGB' => '144, 238, 144'],
            ['Name' => 'Verde Primavera Medio', 'HTML' => 'MediumSpringGreen', 'Hex' => '#00FA9A', 'RGB' => '0, 250, 154'],
            ['Name' => 'Verde Primavera', 'HTML' => 'SpringGreen', 'Hex' => '#00FF7F', 'RGB' => '0, 255, 127'],
            ['Name' => 'Verde Mar Medio', 'HTML' => 'MediumSeaGreen', 'Hex' => '#3CB371', 'RGB' => '60, 179, 113'],
            ['Name' => 'Verde Mar', 'HTML' => 'SeaGreen', 'Hex' => '#2E8B57', 'RGB' => '46, 139, 87'],
            ['Name' => 'Verde Bosque', 'HTML' => 'ForestGreen', 'Hex' => '#228B22', 'RGB' => '34, 139, 34'],
            ['Name' => 'Verde', 'HTML' => 'Green', 'Hex' => '#008000', 'RGB' => '0, 128, 0'],
            ['Name' => 'Verde Oscuro', 'HTML' => 'DarkGreen', 'Hex' => '#006400', 'RGB' => '0, 100, 0'],
            ['Name' => 'Amarillo Verdoso', 'HTML' => 'YellowGreen', 'Hex' => '#9ACD32', 'RGB' => '154, 205, 50'],
            ['Name' => 'Verde Oliva', 'HTML' => 'OliveDrab', 'Hex' => '#6B8E23', 'RGB' => '107, 142, 35'],
            ['Name' => 'Oliva', 'HTML' => 'Olive', 'Hex' => '#808000', 'RGB' => '128, 128, 0'],
            ['Name' => 'Verde Oliva Oscuro', 'HTML' => 'DarkOliveGreen', 'Hex' => '#556B2F', 'RGB' => '85, 107, 47'],
            ['Name' => 'Aguamarina Medio', 'HTML' => 'MediumAquamarine', 'Hex' => '#66CDAA', 'RGB' => '102, 205, 170'],
            ['Name' => 'Verde Mar Oscuro', 'HTML' => 'DarkSeaGreen', 'Hex' => '#8FBC8F', 'RGB' => '143, 188, 143'],
            ['Name' => 'Verde Mar Claro', 'HTML' => 'LightSeaGreen', 'Hex' => '#20B2AA', 'RGB' => '32, 178, 170'],
            ['Name' => 'Cyan Oscuro', 'HTML' => 'DarkCyan', 'Hex' => '#008B8B', 'RGB' => '0, 139, 139'],
            ['Name' => 'Carcel', 'HTML' => 'Teal', 'Hex' => '#008080', 'RGB' => '0, 128, 128']
        ],
        'blue' => [
            ['Name' => 'Agua', 'HTML' => 'Aqua', 'Hex' => '#00FFFF', 'RGB' => '0, 255, 255'],
            ['Name' => 'Cyan', 'HTML' => 'Cyan', 'Hex' => '#00FFFF', 'RGB' => '0, 255, 255'],
            ['Name' => 'Cyan Suave', 'HTML' => 'LightCyan', 'Hex' => '#E0FFFF', 'RGB' => '224, 255, 255'],
            ['Name' => 'Turquesa Pastel', 'HTML' => 'PaleTurquoise', 'Hex' => '#AFEEEE', 'RGB' => '175, 238, 238'],
            ['Name' => 'Aguamarina', 'HTML' => 'Aquamarine', 'Hex' => '#7FFFD4', 'RGB' => '127, 255, 212'],
            ['Name' => 'Turquesa', 'HTML' => 'Turquoise', 'Hex' => '#40E0D0', 'RGB' => '64, 224, 208'],
            ['Name' => 'Turquesa Medio', 'HTML' => 'MediumTurquoise', 'Hex' => '#48D1CC', 'RGB' => '72, 209, 204'],
            ['Name' => 'Turquesa Oscuro', 'HTML' => 'DarkTurquoise', 'Hex' => '#00CED1', 'RGB' => '0, 206, 209'],
            ['Name' => 'Azul Cadete', 'HTML' => 'CadetBlue', 'Hex' => '#5F9EA0', 'RGB' => '95, 158, 160'],
            ['Name' => 'Azul Acero', 'HTML' => 'SteelBlue', 'Hex' => '#4682B4', 'RGB' => '70, 130, 180'],
            ['Name' => 'Azul Acero Claro', 'HTML' => 'LightSteelBlue', 'Hex' => '#B0C4DE', 'RGB' => '176, 196, 222'],
            ['Name' => 'Azul Pálido', 'HTML' => 'PowderBlue', 'Hex' => '#B0E0E6', 'RGB' => '176, 224, 230'],
            ['Name' => 'Azul Claro', 'HTML' => 'LightBlue', 'Hex' => '#ADD8E6', 'RGB' => '173, 216, 230'],
            ['Name' => 'Azul Cielo', 'HTML' => 'SkyBlue', 'Hex' => '#87CEEB', 'RGB' => '135, 206, 235'],
            ['Name' => 'Azul Cielo Claro', 'HTML' => 'LightSkyBlue', 'Hex' => '#87CEFA', 'RGB' => '135, 206, 250'],
            ['Name' => 'Azul Cielo Profundo', 'HTML' => 'DeepSkyBlue', 'Hex' => '#00BFFF', 'RGB' => '0, 191, 255'],
            ['Name' => 'Azul Capota', 'HTML' => 'DodgerBlue', 'Hex' => '#1E90FF', 'RGB' => '30, 144, 255'],
            ['Name' => 'Azul Añil', 'HTML' => 'CornflowerBlue', 'Hex' => '#6495ED', 'RGB' => '100, 149, 237'],
            ['Name' => 'Azul Pizarra Medio', 'HTML' => 'MediumSlateBlue', 'Hex' => '#7B68EE', 'RGB' => '123, 104, 238'],
            ['Name' => 'Azul Real', 'HTML' => 'RoyalBlue', 'Hex' => '#4169E1', 'RGB' => '65, 105, 255'],
            ['Name' => 'Azul', 'HTML' => 'Blue', 'Hex' => '#0000FF', 'RGB' => '0, 0, 255'],
            ['Name' => 'Azul Medio', 'HTML' => 'MediumBlue', 'Hex' => '#0000CD', 'RGB' => '0, 0, 205'],
            ['Name' => 'Azul Oscuro', 'HTML' => 'DarkBlue', 'Hex' => '#00008B', 'RGB' => '0, 0, 139'],
            ['Name' => 'Azul Naval', 'HTML' => 'Navy', 'Hex' => '#000080', 'RGB' => '0, 0, 128'],
            ['Name' => 'Azul Media Noche', 'HTML' => 'MidnightBlue', 'Hex' => '#191970', 'RGB' => '25, 25, 112']
        ],
        'brown' => [
            ['Name' => 'Seda de Maiz', 'HTML' => 'Cornsilk', 'Hex' => '#FFF8DC', 'RGB' => '255, 248, 220'],
            ['Name' => 'Almendra', 'HTML' => 'BlanchedAlmond', 'Hex' => '#FFEBCD', 'RGB' => '255, 235, 205'],
            ['Name' => 'Bizcocho', 'HTML' => 'Bisque', 'Hex' => '#FFE4C4', 'RGB' => '255, 228, 196'],
            ['Name' => 'Marrón Navaja', 'HTML' => 'NavajoWhite', 'Hex' => '#FFDEAD', 'RGB' => '255, 222, 173'],
            ['Name' => 'Marrón Trigo', 'HTML' => 'Wheat', 'Hex' => '#F5DEB3', 'RGB' => '245, 222, 179'],
            ['Name' => 'Madera Fuerte', 'HTML' => 'BurlyWood', 'Hex' => '#DEB887', 'RGB' => '222, 184, 135'],
            ['Name' => 'Marrón bronceado', 'HTML' => 'Tan', 'Hex' => '#D2B48C', 'RGB' => '210, 180, 140'],
            ['Name' => 'Marrón Atractivo', 'HTML' => 'RosyBrown', 'Hex' => '#BC8F8F', 'RGB' => '188, 143, 143'],
            ['Name' => 'Marrón Arenoso', 'HTML' => 'SandyBrown', 'Hex' => '#F4A460', 'RGB' => '224, 164, 96'],
            ['Name' => 'Vara de Oro', 'HTML' => 'Goldenrod', 'Hex' => '#DAA520', 'RGB' => '218, 165, 32'],
            ['Name' => 'Vara de Oro Oscura', 'HTML' => 'DarkGoldenrod', 'Hex' => '#B8860B', 'RGB' => '184, 134, 11'],
            ['Name' => 'Marrón Perú', 'HTML' => 'Peru', 'Hex' => '#CD853F', 'RGB' => '205, 133, 63'],
            ['Name' => 'Marrón Chocolate', 'HTML' => 'Chocolate', 'Hex' => '#D2691E', 'RGB' => '210, 105, 30'],
            ['Name' => 'Marrón Silla', 'HTML' => 'SaddleBrown', 'Hex' => '#8B4513', 'RGB' => '139, 69, 19'],
            ['Name' => 'Marrón Siena', 'HTML' => 'Sienna', 'Hex' => '#A0522D', 'RGB' => '160, 82, 45'],
            ['Name' => 'Marrón', 'HTML' => 'Brown', 'Hex' => '#A52A2A', 'RGB' => '165, 42, 42'],
            ['Name' => 'Castaño', 'HTML' => 'Maroon', 'Hex' => '#800000', 'RGB' => '128, 0, 0']
        ],
        'white' => [
            ['Name' => 'Blanco', 'HTML' => 'White', 'Hex' => '#FFFFFF', 'RGB' => '255, 255, 255'],
            ['Name' => 'Blanco Nieve', 'HTML' => 'Snow', 'Hex' => '#FFFAFA', 'RGB' => '255, 250, 250'],
            ['Name' => 'Miel Crema', 'HTML' => 'Honeydew', 'Hex' => '#F0FFF0', 'RGB' => '240, 255, 240'],
            ['Name' => 'Menta Crema', 'HTML' => 'MintCream', 'Hex' => '#F5FFFA', 'RGB' => '245, 255, 250'],
            ['Name' => 'Azul Celeste', 'HTML' => 'Azure', 'Hex' => '#F0FFFF', 'RGB' => '240, 255, 255'],
            ['Name' => 'Azul Alicia', 'HTML' => 'AliceBlue', 'Hex' => '#F0F8FF', 'RGB' => '240, 248, 255'],
            ['Name' => 'Blanco Fantasma', 'HTML' => 'GhostWhite', 'Hex' => '#F8F8FF', 'RGB' => '248, 248, 255'],
            ['Name' => 'Blanco Humo', 'HTML' => 'WhiteSmoke', 'Hex' => '#F5F5F5', 'RGB' => '245, 245, 245'],
            ['Name' => 'Concha de Mar', 'HTML' => 'Seashell', 'Hex' => '#FFF5EE', 'RGB' => '255, 245, 238'],
            ['Name' => 'Beige', 'HTML' => 'Beige', 'Hex' => '#F5F5DC', 'RGB' => '245, 245, 220'],
            ['Name' => 'Blanco Cordón Viejo', 'HTML' => 'OldLace', 'Hex' => '#FDF5E6', 'RGB' => '253, 245, 230'],
            ['Name' => 'Blanco Floral', 'HTML' => 'FloralWhite', 'Hex' => '#FFFAF0', 'RGB' => '255, 250, 240'],
            ['Name' => 'Blanco Marfil', 'HTML' => 'Ivory', 'Hex' => '#FFFFF0', 'RGB' => '255, 255, 240'],
            ['Name' => 'Blanco Antigüo', 'HTML' => 'AntiqueWhite', 'Hex' => '#FAEBD7', 'RGB' => '250, 235, 215'],
            ['Name' => 'Blanco Lino', 'HTML' => 'Linen', 'Hex' => '#FAF0E6', 'RGB' => '250, 240, 230'],
            ['Name' => 'Lavanda', 'HTML' => 'LavenderBlush', 'Hex' => '#FFF0F5', 'RGB' => '255, 240, 245'],
            ['Name' => 'Rosa Palo', 'HTML' => 'MistyRose', 'Hex' => '#FFE4E1', 'RGB' => '255, 228, 225']
        ],
        'gray' => [
            ['Name' => 'Gainsboro', 'HTML' => 'Gainsboro', 'Hex' => '#DCDCDC', 'RGB' => '220, 220, 220'],
            ['Name' => 'Gris Claro', 'HTML' => 'LightGrey', 'Hex' => '#D3D3D3', 'RGB' => '211, 211, 211'],
            ['Name' => 'Gris Plata', 'HTML' => 'Silver', 'Hex' => '#C0C0C0', 'RGB' => '192, 192, 192'],
            ['Name' => 'Gris Oscuro', 'HTML' => 'DarkGray', 'Hex' => '#A9A9A9', 'RGB' => '169, 169, 169'],
            ['Name' => 'Gris', 'HTML' => 'Gray', 'Hex' => '#808080', 'RGB' => '128, 128, 128'],
            ['Name' => 'Gris Ténue', 'HTML' => 'DimGray', 'Hex' => '#696969', 'RGB' => '105, 105, 105'],
            ['Name' => 'Gris Pizarra Claro', 'HTML' => 'LightSlateGray', 'Hex' => '#778899', 'RGB' => '119, 136, 153'],
            ['Name' => 'Gris Pizarra', 'HTML' => 'SlateGray', 'Hex' => '#708090', 'RGB' => '112, 128, 144'],
            ['Name' => 'Gris Pizarra Oscuro', 'HTML' => 'DarkSlateGray', 'Hex' => '#2F4F4F', 'RGB' => '47, 79, 79'],
            ['Name' => 'Negro', 'HTML' => 'Black', 'Hex' => '#000000', 'RGB' => '0, 0, 0']
        ]
    ];
    private static $data_query;
    private static $data_response;

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║      CONSTRUCTOR DE LA CLASE    ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    public function __construct(){
        $this->query = Self::$data_query ?? null;
        $this->response = Self::$data_response ?? null;
    }

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║         VALORES EN CLASE        ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    /* Inicializador */
    public static function groups(array $groups = null){

        $data_keys = [];
        /* Revision de los grupos existentes */
        if ($groups != null) {
            foreach ($groups as $key => $group) {
                if (in_array($group, array_keys(Self::$colors))) {
                    array_push($data_keys, $group);
                }
            }
        }

        /* Si existen valores dentro del Array */
        if (count($data_keys) > 0) {

            $data_colors = [];
            /* Generar el arreglo de los valores de los grupos existentes */
            for ($i = 0; $i < count($data_keys); $i++) {
                foreach (Self::$colors as $group => $arrays) {
                    if ($data_keys[$i] == $group) {
                        /* Iterar y Agregar Valores */
                        foreach ($arrays as $key => $value) {
                            $netsData['group'] = $group;
                            $netsData['name'] = $value["Name"];
                            $netsData['html'] = $value["HTML"];
                            $netsData['hex'] = $value["Hex"];
                            $netsData['rgb'] = $value["RGB"];
                            array_push($data_colors, $netsData);
                        }
                    }
                }
            }

        } else {

            /* Respuesta */
            $data_colors = [];

        }

        Self::$data_query = $data_keys;
        Self::$data_response = $data_colors;
        return new static();
    }

    /* Random */
    public function random(int $cant = null){
        if ($cant != null && $cant > 0) {
            $cantObjeto = count($this->response);
            $cantMetodo = $cant;
            $rand = ($cantObjeto < $cantMetodo) ? $cantObjeto : $cantMetodo;
            $keys = array_rand($this->response, $rand);
            $data = [];
            foreach ($keys as $key) {
                array_push($data, $this->response[$key]);
            }
            $this->response = $data;
        }
        return $this;
    }

    /* Retornar HEX */
    public function getHEX(){
        if (isset($this->response)) {
            return array_column($this->response, 'hex');
        } else {
            return [];
        }
    }

    /* Retornar RGB */
    public function getRGB(){
        if (isset($this->response)) {
            return array_column($this->response, 'rgb');
        } else {
            return [];
        }
    }

    /* Retornar NAME */
    public function getNAME(){
        if (isset($this->response)) {
            return array_column($this->response, 'name');
        } else {
            return [];
        }
    }

    /* Retornar HTML */
    public function getHTML(){
        if (isset($this->response)) {
            return array_column($this->response, 'html');
        } else {
            return [];
        }
    }

    /* Retornar TODO */
    public function get(string $type = null){
        if ($type != null) {
            return array_column($this->response, $type);
        } else {
            return $this->response;
        }
    }

}

?>
