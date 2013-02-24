<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;



/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return \Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList('Default');
		$router[] = new Route('index.php', 'Dashboard:default', Route::ONE_WAY);
		$router[] = new Route('<presenter>/<action>/<id>', array(
				'presenter' => 'Dashboard',
				'action' => 'default',
				'id' => NULL));
		return $router;
	}

}
