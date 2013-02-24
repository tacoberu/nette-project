<?php

namespace App\DefaultModule;

use Nette;


/**
 * Base presenter for all application presenters.
 *
 * @method \App\User getUser()
 * @property \App\User $user
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{


	private $model;


	/**
	 *
	 */
	protected function startup()
	{
		parent::startup();

		//	Předání přihlášeného uživatele do modelu.
		//$this->getModel()->user = $this->getUser();

			//Ověření přístupu.
 		//$this->checkAccess();
 		//$this->template->model = $this->getModel();
 		$this->template->lang = 'cs';
	}



	/**
	 * @return FlashesControl
	 */
	protected function createComponentFlashes()
	{
		return new FlashesControl();
	}



	protected function beforeRender()
	{
		parent::beforeRender();
		$this->invalidateControl('flashMessages');
	}



}
