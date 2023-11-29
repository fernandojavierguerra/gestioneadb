<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class gestioneadb_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'gestioneadb_ci' => 'extension_toba/componentes/gestioneadb_ci.php',
		'gestioneadb_cn' => 'extension_toba/componentes/gestioneadb_cn.php',
		'gestioneadb_datos_relacion' => 'extension_toba/componentes/gestioneadb_datos_relacion.php',
		'gestioneadb_datos_tabla' => 'extension_toba/componentes/gestioneadb_datos_tabla.php',
		'gestioneadb_ei_arbol' => 'extension_toba/componentes/gestioneadb_ei_arbol.php',
		'gestioneadb_ei_archivos' => 'extension_toba/componentes/gestioneadb_ei_archivos.php',
		'gestioneadb_ei_calendario' => 'extension_toba/componentes/gestioneadb_ei_calendario.php',
		'gestioneadb_ei_codigo' => 'extension_toba/componentes/gestioneadb_ei_codigo.php',
		'gestioneadb_ei_cuadro' => 'extension_toba/componentes/gestioneadb_ei_cuadro.php',
		'gestioneadb_ei_esquema' => 'extension_toba/componentes/gestioneadb_ei_esquema.php',
		'gestioneadb_ei_filtro' => 'extension_toba/componentes/gestioneadb_ei_filtro.php',
		'gestioneadb_ei_firma' => 'extension_toba/componentes/gestioneadb_ei_firma.php',
		'gestioneadb_ei_formulario' => 'extension_toba/componentes/gestioneadb_ei_formulario.php',
		'gestioneadb_ei_formulario_ml' => 'extension_toba/componentes/gestioneadb_ei_formulario_ml.php',
		'gestioneadb_ei_grafico' => 'extension_toba/componentes/gestioneadb_ei_grafico.php',
		'gestioneadb_ei_mapa' => 'extension_toba/componentes/gestioneadb_ei_mapa.php',
		'gestioneadb_servicio_web' => 'extension_toba/componentes/gestioneadb_servicio_web.php',
		'gestioneadb_comando' => 'extension_toba/gestioneadb_comando.php',
		'gestioneadb_modelo' => 'extension_toba/gestioneadb_modelo.php',
	);
}
?>