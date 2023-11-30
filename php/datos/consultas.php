<?php
class consultas
{
    function get_tipos_documentos()
    {
        $sql = "SELECT 'DNI' FROM institucion";
        return toba::db('gestioneadb')->consultar($sql);
    }
}
?>