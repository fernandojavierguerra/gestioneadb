<?php
class consultas
{
    function get_tipos_documentos()
    {
        $res = array(
            array('id_tipo_documento' => 'DNI', 'tipo_documento' => 'Documento'),
            array('id_tipo_documento' => 'PAS', 'tipo_documento' => 'Pasaporte')
        );
        return $res;
    }

    function get_estados_persona()
    {
        $res = array(
            array('id_estado_persona' => 'ACT', 'estado_persona' => 'Activa'),
            array('id_estado_persona' => 'BAJA', 'estado_persona' => 'Baja')
        );
        return $res;
    }
}
?>