<?php
class dt_registro extends gestioneadb_datos_tabla
{
	function get_listado()
	{
		$sql = "SELECT
			t_r.id_registro,
			t_i.nombre as id_institucion_nombre,
			t_r.apellido,
			t_r.nombres,
			t_r.tipo_documento,
			t_r.documento,
			t_r.email,
			t_r.estado,
			t_r.fecha_registro,
			t_r.codigo_validacion,
			t_r.validacion_email
		FROM
			registro as t_r,
			institucion as t_i
		WHERE
				t_r.id_institucion = t_i.id_institucion
		ORDER BY apellido";
		return toba::db('gestioneadb')->consultar($sql);
	}

}

?>