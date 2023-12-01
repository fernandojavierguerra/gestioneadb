<?php
class ci_registro extends gestioneadb_ci
{
	//---- Cuadro -----------------------------------------------------------------------

	function conf__cuadro(toba_ei_cuadro $cuadro)
	{
		//No se cargan datos para que deba registarse
        //$cuadro->set_datos($this->dep('datos')->tabla('registro')->get_listado());
	}

	function evt__cuadro__seleccion($datos)
	{
		$this->dep('datos')->cargar($datos);
		$this->set_pantalla('pant_edicion');
	}

	//---- Formulario -------------------------------------------------------------------

	function conf__formulario(toba_ei_formulario $form)
	{
		if ($this->dep('datos')->esta_cargada()) {
			$form->set_datos($this->dep('datos')->tabla('registro')->get());
		} else {
			$this->pantalla()->eliminar_evento('eliminar');
            //Cargar con la fecha de hoy
            $hoy = date("Y/m/d");
            $form->set_datos_defecto(['fecha_registro' => $hoy]);

		}
	}

	function evt__formulario__modificacion($datos)
	{
		$this->dep('datos')->tabla('registro')->set($datos);
	}

	function resetear()
	{
		$this->dep('datos')->resetear();
		$this->set_pantalla('pant_seleccion');
	}

	//---- EVENTOS CI -------------------------------------------------------------------

	function evt__agregar()
	{
		$this->set_pantalla('pant_edicion');
	}

	function evt__volver()
	{
		$this->resetear();
	}

	function evt__eliminar()
	{
		$this->dep('datos')->eliminar_todo();
		$this->resetear();
	}

	function evt__guardar()
	{
		$this->dep('datos')->sincronizar();
		$this->resetear();
	}

}

?>