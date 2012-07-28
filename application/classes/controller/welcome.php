<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

    /**
     * Méthode principale
     * 
     * @return      void 
     */
	public function action_index()
	{
        // Commentaire inutil
		$this->response->body('hello, world! How are you? Good, and you?');
	}

} // End Welcome
