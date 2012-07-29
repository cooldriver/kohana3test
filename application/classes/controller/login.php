<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

    /**
     * Méthode principale
     * 
     * @return      void 
     */
	public function action_index()
	{
        // Commentaire inutil
		$this->response->body('Please, login.');
	}

} // End Welcome
