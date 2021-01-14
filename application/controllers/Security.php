<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Security extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        // charge all models
        $this->load->model('Secure_model');
        $this->load->model('App_model');
    }

    public function session($page = 'home')
    {
        $data['title'] = ucfirst($page); //Ceci recupere le nom de la page et l'affiche dans title en majusle sur la première lettre
        $data['page'] = $page;

        switch ($page) {
            case "login":
                $this->load->view('session/login', $data);
                break;
            case "register":
                $this->load->view('session/register', $data);
                break;
            case "passwordForget":
                $this->load->view('session/passwordForget', $data);
                break;
            case "sessionExpiree":
                $this->load->view('session/sessionExpiree', $data);
                break;
            default:
                $this->load->view('pages/' . $page, $data);
        }
    }

    /**
     * gestion des URL de la description de l'article
     */
    function str_to_noaccent($str)
    {
        $url = $str;
        $url = preg_replace('#Ç#', 'C', $url);
        $url = preg_replace('#ç#', 'c', $url);
        $url = preg_replace('#è|é|ê|ë#', 'e', $url);
        $url = preg_replace('#È|É|Ê|Ë#', 'E', $url);
        $url = preg_replace('#à|á|â|ã|ä|å#', 'a', $url);
        $url = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $url);
        $url = preg_replace('#ì|í|î|ï#', 'i', $url);
        $url = preg_replace('#Ì|Í|Î|Ï#', 'I', $url);
        $url = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $url);
        $url = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $url);
        $url = preg_replace('#ù|ú|û|ü#', 'u', $url);
        $url = preg_replace('#Ù|Ú|Û|Ü#', 'U', $url);
        $url = preg_replace('#ý|ÿ#', 'y', $url);
        $url = preg_replace('#Ý#', 'Y', $url);
        return ($url);
    }

    #=======================function create admin account activing all systeme
    public function createAccount()
    {
        # recuperation of username
        $this->form_validation->set_rules('nom_complet', 'nom_complet', 'required', array(
            'required' => 'Le nom complet est obligatoire',
        ));
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => 'Le nom utilisateur est obligatoire',
        ));

        # recuperation of password
        $this->form_validation->set_rules('password', 'Paswword', 'min_length[5]|max_length[75]', 'required',
            array(
                'min_length' => 'Le champ %s doit contenir au moins cinq caractères',
                'max_length' => 'Le champ %s doit contenir au plus septante cinq caractères',
                'required' => 'Le champ %s est obligatoire',
            ));
        # confirmation mot de passe créé pour eviter la mauvaise saisie
        $this->form_validation->set_rules('password_confirmation', 'Password_confirmation', 'matches[password]',
            array(
                'matches' => 'Le champ %s doit correspondre avec le champ nouveau mot de passe'
            )
        );
        # verifie si les donnees du formulaire sont valides
        if ($this->form_validation->run()) {
            $asset_fullame = $this->input->post('nom_complet');
            $asset_login = $this->input->post('username');
            $asset_email = $this->input->post('email');
            $asset_type = 'administrateur';
            $asset_role = 'Super';
            $asset_statut = 'online';
            $group_sid = 1;
            $group_id = 1;
            $group_name = "administrateur";
            $group_privilege = "All";

            $options = array(
                'cost' => 12,
            );
            //cripter mot de passe par zip code
            $asset_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

            $groupData = compact('group_id', 'group_name', 'group_privilege');
            $data_admin = compact('asset_fullame', 'asset_login', 'asset_password', 'asset_type',
                'asset_email', 'asset_role', 'asset_statut', 'group_sid');

            //insertion de données dans la base puis teste de valdation
            if ($this->App_model->insert_data($groupData, 'tb_ca_groups')) {

                //insert into users data
                if ($this->App_model->insert_data($data_admin, 'tb_ca_assets')) {
                    //confirmation par message
                    $this->setNotifie("Le compte admin a ete creee avec succès!", 'success');
                    //Connexion automatique
                    $infos_admin = $this->Secure_model->infos_admin($asset_email, $asset_password);

                    // Creation du tableau de donnees de l'admin
                    $userdata = array(
                        'id' => $infos_admin->asset_id,
                        'fullname' => $infos_admin->asset_fullname,
                        'username' => $infos_admin->asset_login,
                        'email' => $infos_admin->asset_email,
                        'statut' => $infos_admin->asset_statut,
                        'active' => $infos_admin->session_ouverte,
                        'type' => $infos_admin->asset_type,
                        'role' => $infos_admin->asset_role,
                        'avatar' => $infos_admin->asset_avatar,
                        'job' => $infos_admin->asset_profession,
                        'etatcivil' => $infos_admin->asset_civilite,
                        'sexe' => $infos_admin->asset_genre,
                        'comments' => $infos_admin->asset_comments,
                        'phone' => $infos_admin->asset_phone,
                        'themeDefault' => $infos_admin->asset_theme_session,
                        'themeSession' => $infos_admin->asset_theme_session,
                        'last_login' => $infos_admin->asset_last_login,
                        'last_update' => $infos_admin->asset_last_update,
                        'groupe' => $infos_admin->group_name,
                        'logged' => TRUE
                    );
                    // Stocker les infos admin dans la session
                    $this->session->set_userdata($userdata);
                    //message de bienvenue
                    $name_admin = ucfirst($asset_fullame);
                    $this->setNotifie("$name_admin, Bienvenue sur votre espace d'administration de 
                notre Application,
                         vous êtes connecté entant que Super Administrateur système", 'success');
                    // rediret admin
                    return redirect(base_url() . 'appMain/index');
                } else {
                    //si difficile de creer le compte admin
                    $this->setNotifie("Impossible de creer le compte administrateur");
                    return redirect(base_url() . 'secure/pages/secure');
                }

            } else {
                //si difficile de creer le compte admin
                $this->setNotifie("Impossible de creer le compte administrateur");
                return redirect(base_url() . 'secure/pages/secure');
            }
        } else {
            $this->setNotifie('');
            return redirect(base_url() . 'secure/pages/secure');
        }
    }

    /**
     * @Verifie datas coming from login form
     */
    public function login()
    {
        # recuperation of username
        $this->form_validation->set_rules('loginUsername', 'loginUsername', 'required', array(
            'required' => "%s est obligatoire",
        ));
        # recuperation of password
        $this->form_validation->set_rules('loginPassword', 'loginPassword', 'required', array(
            'required' => "%s est obligatoire",
        ));
        # vérification de l'existance du compte administrateur

        //$data['admin_exist'] = $this->Secure_model->admin_existant();

        # verifie if datas are corrects and redirect
        if ($this->form_validation->run()) {

            $username = $this->input->post('loginUsername');
            $password = $this->input->post('loginPassword');
            $passwordSaved = $this->input->post('registerAgree');

            if ($this->Secure_model->login_data($username, $password)) {
                $infos_session = $this->Secure_model->login_data($username, $password);
                //$pass_code_default = "123456";
                if ($infos_session) {
                    $userdata = array(
                        'id' => $infos_session->asset_id,
                        'fullname' => $infos_session->asset_fullname,
                        'username' => $infos_session->asset_login,
                        'email' => $infos_session->asset_email,
                        'statut' => $infos_session->asset_statut,
                        'active' => $infos_session->session_ouverte,
                        'type' => $infos_session->asset_type,
                        'role' => $infos_session->asset_role,
                        'avatar' => $infos_session->asset_avatar,
                        'job' => $infos_session->asset_profession,
                        'etatcivil' => $infos_session->asset_civilite,
                        'sexe' => $infos_session->asset_genre,
                        'comments' => $infos_session->asset_biography,
                        'phone' => $infos_session->asset_phone,
                        'themeDefault' => $infos_session->asset_theme_session,
                        'themeSession' => $infos_session->asset_theme_session,
                        'last_login' => $infos_session->asset_last_login,
                        'last_update' => $infos_session->asset_last_update,
                        'groupe' => $infos_session->group_name,
                        'logged' => TRUE
                    );
                    //verification du statut de l'agent
                    if ($infos_session->asset_statut == 'online') {

                        #save data in session
                        $this->session->set_userdata($userdata);
                        //if saved password
                        if (!empty($passwordSaved)) {
                            #ajout des elements à l'algorithme de cryptage.
                            $options = array(
                                'cost' => 12,
                            );
                            #Mise en tableau des informations du compte a créé
                            $data_saved = password_hash($password, PASSWORD_BCRYPT, $options);
                            $data = array(
                                'asset_password_saved' => $data_saved
                            );
                            //$this->display($data_saved);
                            #update saved password
                            $id = $this->session->id;
                            $this->App_model->update_data($data, 'tb_ca_assets', array('asset_id' => $id));
                        }

                        #check user type
                        if ($infos_session->asset_type == 'administrateur') {

                            $username = ucfirst($this->session->fullname);
                            $this->setNotifie("$username, Bienvenue sur votre espace d'administration de l'Application, 
                                            vous êtes connecté entant qu'admin systeme", 'success');
                            return redirect(base_url() . 'admin/dashboard');
                        } elseif ($infos_session->asset_type == 'utilisateur') {

                            $username = strtoupper($infos_session->asset_fullname);
                            $this->setNotifie("$username, Bienvenue sur votre espace d'administration
                                 de l'Application, vous êtes connecté entant qu'utilisateur", 'success');
                            return redirect(base_url() . 'pages/view/home');
                        } else {
                            $this->setNotifie("$username, sorry ! Vous tenter de vous connecter sur une application frauduleusement");
                            return redirect(base_url() . 'security');
                        }

                    } else {
                        # Redirect to login page and show the message error
                        $data['page_error'] = "Votre compte est déjà bloqué. 
                                                Veuillez conctacter votre webmaster ou un admin systeme";
                        $data['title'] = "Account bloqued";
                        $data['page'] = "Connexion";
                        $this->load->view('session/login', $data);
                    }
                } else {
                    // redirect if username or password is not true
                    $data['page_error'] = "Compte non existant dans le système.";
                    $data['title'] = "User not found";
                    $data['page'] = "Connexion";
                    $this->load->view('session/login', $data);
                }
            } else {
                // redirect if username or password is not true
                $data['page_error'] = "Vous avez introduit de mauvais identifiants. Veuillez corriger et reessayer";
                $data['title'] = "Identifiants non existant ";
                $data['page'] = "Connexion";
                $this->load->view('session/login', $data);
            }
        } else {
            // redirect if username or password is not true
            $data['page_error'] = "Vous devez disposer un compte pour accéder à cette application.
                         Veuillez conctacter votre webmaster ou un admin systeme pour plus de détails.";
            $data['title'] = "Identifiants non existant ";
            $data['page'] = "Connexion";
            $this->load->view('session/login', $data);
        }
    }
    public function saveAppointment(){

        $current_time=date('Y-m-d H:i:s');
        $nom_malade = $this->input->post('first_name').'-'.$this->input->post('last_name');
        $phone_malade = $this->input->post('phone_malade');
        $service_rdv = $this->input->post('service_rdv');
        $date_rdv = $this->input->post('date_rdv');
        $heure_rdv = $this->input->post('heure_rdv');
        $motif_rdv = $this->input->post('motif_rdv');
        $date_reservee = $current_time;
        $etat_rdv="encours";

        $array_datardv = array(
            'nom_malade'=>$nom_malade,
            'phone_malade'=>$phone_malade,
            'service_rdv'=>$service_rdv,
            'date_rdv'=>$date_rdv,
            'heure_rdv'=>$heure_rdv,
            'date_reservee'=>$date_reservee,
            'etat_rdv'=>$etat_rdv,
            'motif_rdv'=>$motif_rdv
        );
        if ($this->App_model->insert_data($array_datardv, 'tb_cons_rendezvous')) {
 // redirect if username or password is not true
            $data['page_success'] = "Votre demande de consultation a ete enregistree avec succes. 
            Vous serez notifier d'une minute a l'autre de la suite du traitement par le gestionnaire suivant sa disponibilite";
        }else{
             // redirect if username or password is not true
            $data['page_error'] = "Une erreur a ete rencontree par le systeme lors de la 
            creation de votre reservation de consultation. reessayer";
        }
           
            $data['title'] = "Success Enregistrement consultation";
            $data['page'] = "consultation";
            $this->load->view('pages/consultation', $data);
    }
}