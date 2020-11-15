 <?php

// SERIE
// ID        NOMBRE          DESC          CREADOR         GÉNERO     TEMPORADA (array)
// 1          DEXTER          --              --          POLICIAL       ARRAY[0..7]

// TEMPORADA
// ID    NUMERO_TEMP   EPISODIOS(ARRAY de EPISODIOS) ---->  (pongo id y número de temporada por si se carga al sistema primero la temporada 7 antes que la 3)   
// 1          4          [0..11] (12)

// EPISODIO
// ID    NÚMERO_EPISODIO      TITULO          DESC           FLAG (boolean)       CALIFICACION   ---->  (pongo id y número de episodio si se carga al sistema primero el episodio 7 antes que el 3) 
// 1          11           'Episodio 11'       --                 1                   4 (1-5)


// 1 Ingresar la calificación
-> clase EPISODIO setCalificacion, siempre que la calificación sea entre 1 y 5 -> de lo contrario imprimir un mensaje sin modificar el valor
// 2 Obtener el total de episodios vistos de una temporada en particular 
-> clase TEMPORADA -> recorre el arreglo de episodios y cuenta los que el flag sea igual a 1
// 3 Obtener el promedio de las calificaciones dadas por el usuario para una serie (sólo contar los episodios vistos)
-> clase SERIE -> va a sumar los episodios vistos por cada temporada con sus respectivas calificaciones -> sumaCalificacionesTotal / cantEpisodiosVistos


// Con BDD -> 3 tablas -> serie, temporada y episodio 
// Cada serie va a tener un atributo id_temporada como FK a la tabla temporada
// Cada temporada id_episodio como FK a la tabla episodio

// O también -> 2 tablas -> serie y episodio 
// Cada serie va a tener un atriubuto id_episodio como FK a la tabla episodio
// Y en cada episodio cargado en la tabla episodio, va a tener el número de la temporadada a la que corresponde

// ----------- CONSULTA PRÁCTICA 21/10

// SERIE
// id_serie 
// .. atributos ..

// TEMPORADA
// id_temporada
// .. atributos ..
// id_serie_fk

/// EPISODIO
// id_episodio
// .. atributos ..
// id_temporada_fk

// Ejemplo para traer estos datos
// Serie id:4, de la temporada 8, el episodio 12

'SELECT *
 FROM episodio 
 JOIN temporada ON temporada.id_temporada = episodio.id_temporada
 JOIN serie ON serie.id = temporada.id_serie
 WHERE (episodio.id_episodio = 12 and temporada.id_temporada = 8 and serie.id_serie = 4)'

 
