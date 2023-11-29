<?php
class dt_parametro extends gestioneadb_datos_tabla
{
	function get_listado($filtro=array())
	{
		$where = array();
		if (isset($filtro['parametro'])) {
			$where[] = "parametro ILIKE ".quote("%{$filtro['parametro']}%");
		}
		if (isset($filtro['descripcion'])) {
			$where[] = "descripcion ILIKE ".quote("%{$filtro['descripcion']}%");
		}
		$sql = "SELECT
			t_p.id_parametro,
			t_i.nombre as id_institucion_nombre,
			t_p.parametro,
			t_p.descripcion,
			t_p.valor
		FROM
			parametro as t_p,
			institucion as t_i
		WHERE
				t_p.id_institucion = t_i.id_institucion
		ORDER BY descripcion";
		if (count($where)>0) {
			$sql = sql_concatenar_where($sql, $where);
		}
		return toba::db('gestioneadb')->consultar($sql);
	}

}

?>