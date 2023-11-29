<?php
class dt_institucion extends gestioneadb_datos_tabla
{
	function get_listado()
	{
		$sql = "SELECT
			t_i.id_institucion,
			t_i.nombre,
			t_i.direccion
		FROM
			institucion as t_i
		ORDER BY nombre";
		return toba::db('gestioneadb')->consultar($sql);
	}

	function get_descripciones()
	{
		$sql = "SELECT id_institucion, nombre FROM institucion ORDER BY nombre";
		return toba::db('gestioneadb')->consultar($sql);
	}

}
?>