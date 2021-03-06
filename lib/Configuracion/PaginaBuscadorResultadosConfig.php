<?php
/**
 * Marketplace Agricola - Pagina Buscador Resultados Config
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

namespace Configuracion;

/**
 * Clase PaginaBuscadorResultadosConfig
 */
class PaginaBuscadorResultadosConfig extends \Base\Plantilla {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    // protected $google_analytics;
    // protected $google_site_verification;
    // protected $cabecera_bootstrap_css;
    // protected $cabecera_font_awesome_css;
    // protected $cabecera_google_fonts_css;
    // protected $scripts_jquery_css;
    // protected $scripts_bootstrap_js;
    // public $titulo;
    // public $descripcion;
    // public $claves;
    // public $directorio;
    // public $archivo_ruta;
    // public $imagen_previa_ruta;
    // public $icono;
    // public $navegacion;
    // public $contenido;
    // public $mapa_inferior;
    // public $javascript;
    // public $contenido_en_renglon;

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor del padre
        parent::__construct();
        // Definir propiedades
        $this->en_raiz      = true;
        $this->titulo       = 'Resultados de la búsqueda en Google';
        $this->descripcion  = 'Resultados de la búsqueda en Google.';
        $this->claves       = 'Resultados, Buscador';
        $this->directorio   = '.';
        $this->archivo_ruta = "buscador-resultados.html";
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Indicar al padre que no queremos encerrar el contenido con row y cuerpo
        $this->contenido_en_renglon = false;
        // Navegacion
        $this->navegacion          = new \Base\Navegacion();
        $this->navegacion->en_raiz = $this->en_raiz;
        // El contenido es código HTML que proviene y es para el Buscador de Google
        $this->contenido[] = <<<FINAL
    <div id="page-content">
      <div class='post-body entry-content'>
        <div id="cse" style="width: 100%;">
          <ul id="loadbar">
            <li><div class="bar" id="layerFill1"></div></li>
            <li><div class="bar" id="layerFill2"></div></li>
            <li><div class="bar" id="layerFill3"></div></li>
            <li><div class="bar" id="layerFill4"></div></li>
            <li><div class="bar" id="layerFill5"></div></li>
            <li><div class="bar" id="layerFill6"></div></li>
            <li><div class="bar" id="layerFill7"></div></li>
            <li><div class="bar" id="layerFill8"></div></li>
            <li><div class="bar" id="layerFill9"></div></li>
            <li><div class="bar" id="layerFill10"></div></li>
          </ul>
        </div>
        <script src="http://www.google.com/jsapi" type="text/javascript"></script>
        <div style='clear: both;'></div>
      </div>
    </div>
FINAL;
        // Del mismo modo, este código Javascript proviene y es para el Buscador de Google
        $this->javascript[] = <<<FINAL
FINAL;
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaBuscadorResultadosConfig

?>
