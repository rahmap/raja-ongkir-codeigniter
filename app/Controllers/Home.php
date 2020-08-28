<?php namespace App\Controllers;

use \App\Libraries\Rajaongkir;

class Home extends BaseController
{

	public function index()
	{
	  /**
	 * Check available method on App/libraries/RajaOngkir/Endpoints.php
	 *
	 * @author Rahma Andita P <rahma.p@students.amikom.ac.id>
	 */

		$RO = new Rajaongkir();
		dd($RO->province());

	}

}
