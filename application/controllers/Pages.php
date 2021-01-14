<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        // verifie of login
        $this->is_logged();
        // charge all models
        $this->load->model('Secure_model');
        $this->load->model('App_model');
        //derniere connexion prise en compte
        $this->last_connexion();

        #GroceryCRUD Librairie loading
        $this->load->library('grocery_CRUD');
    }

    /**
     *@ Check is admin is logged
     */
    private function is_logged()
    {
        #si la session est ouverte
        if (!$this->session->logged) {
            #si le type correspond a un admin systeme
            if ($this->session->type == "utilisateur") {
                #on refuse l'acces a la page admin
                return redirect(base_url() . 'login');
            }
        }
    }

    //mettre a jour la date de derniere connexion
    private function last_connexion()
    {
        if ($this->session->logged) {
            // code...
            $date_connect = date('Y-m-d H:s:i');
            $data = array(
                'asset_last_login' => $date_connect,
                'session_ouverte' => 'oui',
            );
            // update
            $id = $this->session->id;
            $this->App_model->update_data($data, 'tb_ca_assets', array('asset_id' => $id));
        }
    }

    public function view($page = 'home')
    {
        if ($page != 'home') {
            $data['title'] = ucfirst($page); //Ceci recupere le nom de la page et l'affiche dans title en majusle sur la première lettre
            // $data['title'] = $page;
            $data['page'] = $page;
            $data['view'] = 'users/pages/' . $page;
            $this->load->view('users/users_main', $data);
        } else {
            $data['title'] = ucfirst($page); //Ceci recupere le nom de la page et l'affiche dans title en majusle sur la première lettre
            //$data['title'] = $page;
            $data['page'] = $page;
            $data['view'] = 'users/pages/' . $page;
            $this->load->view('users/users_main', $data);
        }

    }
    //Function generic for output data
    #----------- 1. Mes emissions Sections ----------------------------------------------------------------
    /**
     *@ Home function
     */
    public function _menu_sortie($output = null)
    {
        $data['title'] = $output;
        //load view main
        $this->load->view('users/users_main.php', (array)$output);
    }

    //Show megamain page with css and js files
    public function megamain_management()
    {
        //affichage des operations des agents
        $this->_menu_sortie((object)array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }


//table without foreign key constraint references - manage provinces
    public function horairesMedecin()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('tb_cons_horaires');
        $crud->set_subject('Horaire Medecin');

        //$crud->unset_delete();
        $crud->unset_clone();

        $output = $crud->render();
        $this->_menu_sortie($output);
    }

#---------------function for parameter
    //table without foreign key constraint references - manage provinces
    public function demandesRendezVous()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('tb_cons_rendezvous');
        $crud->set_subject('Rendez-vous Patient');

        $crud->unset_delete();
        $crud->unset_clone();

        $output = $crud->render();
        $this->_menu_sortie($output);
    }


    #---------------function for parameter
    //table without foreign key constraint references - manage provinces
    public function fichesMalades()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('tb_cons_malades');
        $crud->set_subject('fiche malade');

        $crud->unset_delete();
        $crud->unset_clone();

        $output = $crud->render();
        $this->_menu_sortie($output);
    }
    #---------------function for parameter
    //table without foreign key constraint references - manage provinces
    public function listingMalades()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('tb_cons_malades');
        $crud->set_subject('Liste malades');
        $crud->unset_clone();
        $crud->unset_edit();
        $crud->unset_add();
        $crud->unset_delete();
        $output = $crud->render();

        $this->_menu_sortie($output);
    }

    //contact from form contact
    public function medicaments()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_medicaments');
        $crud->set_subject('Medicament');

        $crud->unset_delete();
        $crud->unset_clone();

        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }  //contact from form contact

    public function consultations()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_consultations');
        $crud->set_subject('Consultation Malade');
        $crud->set_relation('malade_concerne', 'tb_cons_malades', 'malade_noms');
        $crud->display_as('malade_id', 'Fiche Malade');

        $crud->unset_delete();
        $crud->unset_clone();

        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }

    public function ordonances()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_ordonances');
        $crud->set_subject('Ordonance medicale');
        $crud->set_relation('malade_concerne', 'tb_cons_malades', 'malade_noms');
        $crud->display_as('malade_id', 'Fiche Malade');

        $crud->unset_delete();
        $crud->unset_clone();

        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }

    public function examensLaboratoire()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_examens');
        $crud->set_subject('Examen labo');//rename table to display in page
        //set relation for foreign key id and display the name of field - first table
        $crud->set_relation('malade_concerne', 'tb_cons_malades', 'malade_noms');
        $crud->display_as('malade_id', 'Fiche Malade');

        #interdir la suppression
        $crud->unset_delete();
        //$crud->unset_add();
        $crud->unset_clone();
        //$crud->unset_edit_fields('access_code');
        //show all data in array and display then on megamain page
        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }

    public function prescriptions()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_prescriptions');
        $crud->set_subject('Prescription medicale');//rename table to display in page
        //set relation for foreign key id and display the name of field - first table
        $crud->set_relation('numero_ordonance', 'tb_cons_ordonances', 'ordonance_numero');
        $crud->display_as('ordon_id', 'Ordonance');//set relation for foreign key id and display the name of field - first table
        $crud->set_relation('produit_prescrit', 'tb_cons_medicaments', 'product_title');
        $crud->display_as('produc_id', 'Produit');

        #interdir la suppression
        $crud->unset_delete();
        //$crud->unset_add();
        $crud->unset_clone();
        //$crud->unset_edit_fields('access_code');
        //show all data in array and display then on megamain page
        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }
    #==================================================================================
    #=====================impressions==================================================
    public function printFiches()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('tb_cons_malades');
        $crud->set_subject('Fiche impression');
        $crud->unset_clone();
        $crud->unset_edit();
        $crud->unset_add();
        $crud->unset_delete();
        $output = $crud->render();

        $this->_menu_sortie($output);
    }
    public function printConsultations()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_consultations');
        $crud->set_subject('Impression infos Consultation');
        $crud->set_relation('malade_concerne', 'tb_cons_malades', 'malade_noms');
        $crud->display_as('malade_id', 'Fiche Malade');
        $crud->unset_clone();
        $crud->unset_edit();
        $crud->unset_add();
        $crud->unset_delete();
        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }
    public function printExamens()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_examens');
        $crud->set_subject('Impression Resultats Examen Labo');//rename table to display in page
        //set relation for foreign key id and display the name of field - first table
        $crud->set_relation('malade_concerne', 'tb_cons_malades', 'malade_noms');
        $crud->display_as('malade_id', 'Fiche Malade');
        $crud->unset_clone();
        $crud->unset_edit();
        $crud->unset_add();
        $crud->unset_delete();
        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }
    public function printOrdonances()
    {
        //create object from grocerycrud librairie
        $crud = new grocery_CRUD();
        //set table name
        $crud->set_table('tb_cons_prescriptions');
        $crud->set_subject('Impression Prescription medicale');//rename table to display in page
        //set relation for foreign key id and display the name of field - first table
        $crud->set_relation('numero_ordonance', 'tb_cons_ordonances', 'ordonance_numero');
        $crud->display_as('ordon_id', 'Ordonance');//set relation for foreign key id and display the name of field - first table
        $crud->set_relation('produit_prescrit', 'tb_cons_medicaments', 'product_title');
        $crud->display_as('produc_id', 'Produit');

        $crud->unset_clone();
        $crud->unset_edit();
        $crud->unset_add();
        $crud->unset_delete();

        $output = $crud->render();
        //redirect to megamain page
        $this->_menu_sortie($output);
    }
    #===================================deconnexon - fermeture de session===========================================
    public function logout()
    {
        $data = array(
            'session_ouverte' => 'non',
        );
        // update
        $id = $this->session->id;
        $this->App_model->update_data($data, 'tb_ca_assets', array('asset_id' => $id));

        $this->session->sess_destroy();
        return redirect(base_url() . 'login/');
    }
    
}
