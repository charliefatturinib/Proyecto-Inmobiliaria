<?php

function catalogo_completo(): array
{
    return [

        /* CASAS */
        [
            "id" => 1,
            "tipo" => "casa",
            "venta" => 2000000000,
            "barrio" => "Belgrano",
            "calle" => "La Pampa 1200",
            "superficie" => 310, "m2",
            "ambientes" => 3,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Sudeste",
            "terraza" => "sin terraza pero con balcones",
            "cochera" => 2,
            "espacios" => "Espacios:  jardin con pileta, sala de juegos, quincho, hall de recepcion, deposito, cancha de
            futbol",
            "imagen" => "casa1.jpg",
        ],
        [
            "id" => 2,
            "tipo" => "casa",
            "venta" => 150045080,
            "barrio" => "Colegiales",
            "calle" => "Conde 3432",
            "superficie" => 522, "m2",
            "ambientes" => 7,
            "condicion" => "Condicion: Muy Buena",
            "orientacion" => "Noreste",
            "terraza" => "Sin terrza pero con balcones",
            "cochera" => 3,
            "espacios" => "Espacios: Seguridad por garita de Policía y sistema de video vigilancia, jardin con pileta,
            entrada de servicio, sotano, baulera, galeria",
            "imagen" => "casa2.jpg",
        ],
        [
            "id" => 3,
            "tipo" => "casa",
            "venta" => 4600300,
            "barrio" => "Nordelta, Las Glorietas, Tigre",
            "calle" => "Cabo las Lavandas al 657",
            "superficie" => 246, "m2",
            "ambientes" => "ambientes", 4,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Sureste",
            "terraza" => "Cuenta con balcon terraza",
            "cochera" => 2,
            "espacios" => "Espacios: quincho, jardin con pileta, parrilla, seguridad",
            "imagen" => "casa3.jpg",
            
        ],
        [
            "id" => 4,
            "tipo" => "casa",
            "venta" => 3200700,
            "barrio" => "Belgrano r",
            "calle" => "Superi al 3450",
            "superficie" => 246, "m2,",
            "ambientes" => 4,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Noreste",
            "terraza" => "con terraza (segundo pizo) y balcon (primer piso)",
            "cochera" => 2,
            "espacios" => "Espacios: sala de juegos, cochera cubierta, jardin con pileta, hall, parrilla",
            "imagen" => "casa4.jpg",
        ],
        [
            "id" => 5,
            "tipo" => "casa",
            "venta" => 57001005,
            "barrio" => "Villa Urquiza",
            "calle" => "Bucarelli al 3590",
            "superficie" => 265, "m2",
            "ambientes" => 5,
            "condicion" => "Condicion: Muy Bueno",
            "orientacion" => "Suroeste",
            "terraza" => "no pero si con 3 balcones en el primer piso",
            "cochera" => 2,
            "espacios" => "Espacios: cochera cubierta, jardin con pileta y quincho, sin hall, espacio de juego exterior",
            "imagen" => "casa5.jpg",
        ],

        /* DEPARTAMETNOS */
        [
            "id" => 6,
            "tipo" => "departamento",
            "venta" => 3900200,
            "barrio" => "Palermo Chico al 670",
            "calle" => "Cabello al 3800 - Piso 4",
            "superficie" => 138, "m2",
            "ambientes" => 4,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Noroeste",
            "terraza" => "en la terraza encontramos: rooftop, sum, solarium y gimnasio tambien cada departamento
            tiene su propio balcon",
            "cochera" => "en planta paja para cada departamento",
            "espacios" => "Espacios: seguridad, jardin con pileta en planta baja, balcones terrazas, parrilla,",
            "imagen" => "departamento1.jpg",
        ],
        [
            "id" => 7,
            "tipo" => "departamento",
            "venta" => 2100200,
            "barrio" => "Belgrano Torres",
            "calle" => "Arcos al 7892 - Piso 2",
            "superficie" => 103, "m2",
            "ambientes" => 3,
            "condicion" => "Condicion: Muy Buena",
            "orientacion" => "Sudeste",
            "terraza" => "tenemos terraza con piscina y sum, sin jardin en planta baja",
            "cochera" => "cocheras para cada departamento",
            "espacios" => "Espacios: sum, sauna, solarium, baulera, suite, parrilla",
            "imagen" => "departamento2.jpg",
            "destacado" => true,
        ],
        [
            "id" => 8,
            "tipo" => "departamento",
            "venta" => 1900350,
            "barrio" => "Palermo Soho",
            "calle" => "Av. Córdoba 4300-Piso 5",
            "superficie" => 163, "m2",
            "ambientes" => 4,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Suroeste",
            "terraza" => "amplia terraza y cada departamento con balcones lado a y lado b",
            "cochera" => "cochera en subsuelo",
            "espacios" => "Espacios: sauna, sum, piscina, solarium, sala de juego, gimnasio, sala de juegos, suit,ascensor",
            "imagen" => "departamento3.jpg",
        ],
        [
            "id" => 9,
            "tipo" => "departamento",
            "venta" => 300000100,
            "barrio" => "Saavedraa",
            "calle" => "Gar.del Río 3075-piso 14",
            "superficie" => 89, "m2",
            "ambientes" => 3,
            "condicion" => "Condicion: Muy Buena",
            "orientacion" => "Suroeste",
            "terraza" => "terraza verde con piscina descubierta, sum y solarium, cada departamento
            con balcon propio",
            "cochera" => "cochera en subsuelo espacio para cada departamento",
            "espacios" => "Espacios: piscina descubierta en terraza, sum, solarium,..",
            "imagen" => "departamento4.jpg",
            "destacado" => true,
        ],
        [
            "id" => 10,
            "tipo" => "departamento",
            "venta" => 200500100,
            "barrio" => "Las Cañitas",
            "calle" => "Chenaut al 1700 - Piso 20",
            "superficie" => 103, "m2",
            "ambientes" => 3,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Sudeste",
            "terraza" => "terraza verde sin piscina",
            "cochera" => "cochera en subsuelo con espacio para cada departamento",
            "espacios" => "Espacios: Gimnasio con sauna y toilette
            SUM completo con office y toilette, Sector parrilla, Solárium, Laundry, En su Planta Baja, importante local para gastronomia boutique",
            "imagen" => "departamento5.jpg",
        ],
        [
            "id" => 11,
            "tipo" => "departamento",
            "venta" => 100200333,
            "barrio" => "Belgrano",
            "calle" => "Godoy Cruz 2300-Piso 17",
            "superficie" => 40000, "m2",
            "ambientes" => 5, 4, 3,
            "condicion" => "Condicion: Buena",
            "orientacion" => "Sur, Sureste,...",
            "terraza" => "no",
            "cochera" => "cochera para 200",
            "espacios" => "Espacios: En la planta baja y en el entrepiso se ha previsto una galería comercial; los dos subsuelos están destinados a servicios generales y garages con capacidad para 200 automóviles. grandes jardins, sin piscina, solarium, gimnasio",
            "imagen" => "departamento6.jpg",
            "destacado" => true,
        ],

        /* PH */
        [
            "id" => 12,
            "tipo" => "ph",
            "venta" => 1300200,
            "barrio" => "Belgrano R",
            "calle" => "Tronador al 1500 - Piso 1",
            "superficie" => 179, "m2",
            "ambientes" => 5,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Noreste",
            "terraza" => "Con terraza",
            "cochera" => 1,
            "espacios" => "Espacios: sotano, comedor, parrilla, vestidor...",
            "imagen" => "ph1.jpg",
        ],
        [
            "id" => 13,
            "tipo" => "ph",
            "venta" => 2000000,
            "barrio" => "Belgrano C",
            "calle" => "Mendoza al 2700 - piso 1",
            "superficie" => 205, "m2",
            "ambientes" => 4,
            "condicion" => "Condicion: Excelente",
            "orientacion" => "Norte",
            "terraza" => "Sin acceso a la terraza, con balcon",
            "cochera" => "no",
            "espacios" => "Espacios: biblioteca, patio, lavadero, suite",
            "imagen" => "ph2.jpg",
        ],
        [
            "id" => 14,
            "tipo" => "ph",
            "venta" => 2400600,
            "barrio" => "Nuñez",
            "calle" => "Conde 2200-Planta Baja",
            "superficie" => 204, "m2",
            "ambientes" => 4,
            "condicion" => "Condicion: Buena",
            "orientacion" => "Este",
            "terraza" => "Si y cuenta con balcones dependiendo del ph elegido",
            "cochera" => "si-10 cocheras",
            "espacios" => "Espacios: cuenta tambien con parrilla, terraza, baulera",
            "imagen" => "ph3.jpeg",
            "destacado" => true,
        ],

        


    ];
}


/* Devuelve el catalogo de productos de un personaje en particular $personaje
un string con el nombre del personaje a buscar */



function catalogo_x_propiedad(string $tipo): array
{
    $resultado = [];
    $individual = catalogo_completo();

    foreach ($individual as $p) {
        if ($p["tipo"] == $tipo) {
            /* agregar elementos al array */
            $resultado[] = $p;
        }
    }

    return $resultado;
}

/* Devuelve los datos de un producto en particular
$idProducto el id unico del producto a mostrar */

function vivienda_x_id(int $idInmobiliaria)
{
    $individual = catalogo_completo();


    foreach ($individual as $p) {
        if ($p['id'] == $idInmobiliaria) {
            return $p;
        }
    }

    return null;
}

/* Funcion para traer todas las infraestructuras */

function catalogo_todos_viviendas(): array
{
    $resultado = [];
    $individual = catalogo_completo();

    foreach ($individual as $p) {
        $resultado[] = $p;
    }

    return $resultado;
}


/* Productos Destacados */

function producto_destacado() : array {
    $resultado = [];
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) {
        if($p['destacado'] ?? false){
            $resultado[] = $p;
    }
    }

    return $resultado;

}



?>