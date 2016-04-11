<?php
/**
 * Movimiento Libre - RequerimientoDeFertilizante
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package MovimientoLibre
 */

namespace Insumos;

/**
 * Clase RequerimientoDeFertilizante
 */
class RequerimientoDeFertilizante extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Requerimiento de Fertilizante';
     // $this->autor                      = '';
        $this->fecha                      = '2016-03-15T08:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'requerimiento-de-fertilizante';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se abre convocatoria para compra de fertilizante.';
        $this->claves                     = 'Clave1, Clave2, Clave3';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Insumos/RequerimientoDeFertilizante.md';
        // Para el Organizador
        $this->categorias                 = array('Fertilizante');
    } // constructor

} // Clase RequerimientoDeFertilizante

?>
