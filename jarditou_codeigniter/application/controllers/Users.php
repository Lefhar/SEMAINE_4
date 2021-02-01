<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function connexion()
	{
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');
    
        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau) 
        * remarque la syntaxe $this->nomModele->methode()       
        */
        $this->usersModel->connexion();
	}
    public function inscription()
    {
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */
        $this->usersModel->inscription();
    }
	public function deconnexion()
	{
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');
    
        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau) 
        * remarque la syntaxe $this->nomModele->methode()       
        */
       $this->usersModel->deconnexion();
	}
	public function inscriptionvalide()
	{
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */
       $this->usersModel->inscriptionvalide();
	}

    public function validationemail()
    {
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */
        $this->usersModel->validationemail($this->uri->segment(3));
    }

    public function resetpassword()
    {
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */
        $this->usersModel->resetpassword($this->uri->segment(3));
    }

    public function lostpassword()
    {
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */
        $this->usersModel->lostpassword();
    }

    public function resendemail()
    {
        // Chargement du modèle 'produitsModel'
        $this->load->model('usersModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */
        $this->usersModel->resendemail();
    }
}
