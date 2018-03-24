<?php

class FreeLance extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('modelpostulant');
        $this->load->library('session');
        $this->load->model('modelutilisateur');
//         $this->load->library("Ajax_pagination");
        $this->load->library("pagination");

        /* foreach ($postulant as $postule){
          $obj_user[] = $this->modelutilisateur->get_user($postule['iduser']);
          }
          print_r($obj_user); */
        //$_POST['data'] = $this->modelutilisateur->voir_tout_user($id_postulant);
        //print_r($_POST['data']);
    }

    public function index($start = 0) {

//        $_POST['user'] = $this->modelutilisateur->liste_user();
        $_POST['postulant'] = $this->modelpostulant->liste_postulant();
        //$postulants = $_POST['postulant'];
        //$obj_user = array();
        //$i = 0;
        foreach ($_POST['postulant'] as $key => $user_id) {
            $user_id['iduser'] = $this->modelutilisateur->get_user($user_id['iduser']);
            //print_r($user_id);
            $postulants[] = $user_id;
        }


        $_POST['postulant'] = $postulants;
//        print_r($postulants);       
        //$data = array();
        //get the posts data
//        $data['posts'] = $this->modelpostulant->liste_postulant();
        //$_POST['posts'] = $this->modelpostulant->liste_postulant();
//        print_r($_POST);
//        if ($data) {
//            //$query = $this->modelpostulant->login($this->input->post('email'), $this->input->post('password'));
//            
//                $this->session->set_userdata('posts', $data);
////                $this->session->set_userdata('id', $row['id']);
////                $this->session->set_userdata('nom', $row['nom']);
////                $this->session->set_userdata('prenom', $row['prenom']);
//            
//        }

        /* PAGINATION */

        $totalRec = count($postulants);
        $config = array();
        $config["base_url"] = site_url('freeLance/index');
        $config["total_rows"] = $totalRec;
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 1;
        $this->pagination->initialize($config);

        $data['user'] = array();

        for ($i = $start; $i < $start + $config['per_page']; $i++) {
            if (isset($postulants[$i])) {

                $data['user'][] = $postulants[$i];
            }
        }

        $data['pagination'] = $this->pagination->create_links();
        if ($this->input->post('ajax')) {
            $this->load->view('free_lance/page', $data);
        } else {
            $this->load->view('free_lance/home_new', $data);
            $this->load->view('free_lance/inc/header');
            $this->load->view('free_lance/inc/navbar');
            $this->load->view('inc/footer');
        }
        /* END PAGINATION */
    }

    public function traitementPayementTest() {

        $amount = $_POST['amount'];

        //$this->load->model('modelfinancement');
        $token = "3307d799-d8fd-47ba-9b92-87e7917c2a23";
        $idTrans = $this->modelfinancement->return_lastIdFinancement() + 1;


        try {
            // Création d'une ressource cURL
            $ch = curl_init();
            if ($ch == false) {
                # code...
                throw new Exception("failed to initialized", 1);
            }
            echo $_SERVER["DOCUMENT_ROOT"];

            $data = array(
                'auth_token' => '3307d799-d8fd-47ba-9b92-87e7917c2a23',
                'phone_number' => $_POST['number'],
                'amount' => $_POST['amount'],
                'description' => "GCENT",
                'identifier' => $idTrans
            );

            curl_setopt($ch, CURLOPT_URL, 'http://paygateglobal.com/api/v1/pay');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);


            curl_exec($ch);


            $ctrl = curl_exec($ch);
            $ctrl = explode(":", $ctrl);

            $text_reference = explode(",", $ctrl[1])[0];
            $status = explode("}", $ctrl[2])[0];

            if ($ctrl == false) {

                throw new Exception(curl_error($ch), curl_errno($ch));
            }
        } catch (Exception $e) {
            trigger_error(sprintf('curl failedvwith error #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR);
        }

        // Fermeture de la ressource cURL et libération des ressources systèmes
        curl_close($ch);

        do {
            if ($status != 0) {
                $this->load->view('transfertEnAttente');
            }
        } while ($status != 0);


        $this->load->model('modelfinancement');
        $this->modelfinancement->ajouterFinancement($this->session->userdata('idUser'), $this->session->userdata('idFinancePro'), $amount, $status, $text_reference);
        $this->load->view('confTransfert');
    }

    public function send_mail($idPostulant) {
        $_POST['id'] = $idPostulant;
        $id = $_POST['id'];
        $_POST['data'] = $this->modelpostulant->voir_tout_postulant($id);
        foreach ($_POST['postulant'] as $key => $user_id) {
            $user_id['iduser'] = $this->modelutilisateur->get_user($user_id['iduser']);
            //print_r($user_id);
            $postulants[] = $user_id;
        }

        $data = array();
        $data['postulants'] = $postulants;
        print_r($postulants);
        foreach ($postulants as $postule) {
            $nom_postulant = $postule['nom'];
            $prenom_postulant = $postule['prenom'];
            $numero_postulant = $postule['telephone'];
            $email_postulant = $postule['email'];
        }
        $usermail = $this->session->userdata('email');
        $usernom = $this->session->userdata('nom');
        $userprenom = $this->session->userdata('prenom');
        $usertelephone = $this->session->userdata('telephone');







        //$from_email a recuperer chez le client
        $from_email = 'seserges2@gmail.com';
        $to_email = 'seserges2@gmail.com';
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Demande de contecter un postulant');
        $this->email->message("Mr/Mme $usernom $userprenom dont le numero de telephone est: $usertelephone"
                . " désire contacter Mr $nom_postulant $prenom_postulant dont le numéro de telephone est: "
                . "$numero_postulant et dont l'email est $email_postulant  ");
        //Send mail
        print_r($this->email);
        if ($this->email->send())
            $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent", "You have encountered an error");
//        $this->load->view('contact_email_form');
        $this->index();
    }

    public function search() {
//        $data = array(
//            'domaine' =>  $this->input->post('domaine'),
//            'competence' => $this->input->post('competence')
//        );
        $domaine = $this->input->post('domaine');
//        print_r($domaine);
        $competence = $this->input->post('competence');
//        if ($domaine && $competence) {
//           
//        } else {
//            $_POST['resultat'] = ($domaine) ? $this->modelpostulant->search($domaine) : $this->modelpostulant->search($competence);
//        }
        $_POST['resultat'] = $this->modelpostulant->search($domaine, null);

        $this->load->view('free_lance/search');
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
//        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }

//    public function connexion() {
//        $this->load->library('form_validation');
//        $this->load->model('modelpostulant');
//        $resultat = $this->modelpostulant->login($this->input->post('phone'), $this->input->post('pwd'));
//        if ($resultat) {
//            //$query = $this->modelpostulant->login($this->input->post('email'), $this->input->post('password'));
//            foreach ($resultat as $row) {
//
//                $this->session->set_userdata('id', $row['id']);
//                $this->session->set_userdata('nom', $row['nom']);
//                $this->session->set_userdata('prenom', $row['prenom']);
//                $this->session->set_userdata('adresse', $row['adresse']);
//                $this->session->set_userdata('telephone', $row['telephone']);
//                $this->session->set_userdata('password', $row['password']);
//                $this->session->set_userdata('pseudo', $row['pseudo']);
//                $this->session->set_userdata('email', $row['email']);
//                $this->session->set_userdata('datnaiss', $row['datnaiss']);
//            }
//             
//            $this->monCompte();
//        } else {
//
//            //$this->load->view('index');
//            echo "email ou mot de passe eurroné";
////            $this->index();
//            $this->load->view('accueil');
//        }
//    }
    public function monCompte() {
        //si les ide,tifiants sont bon il sera rediriger sur mon compte
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/mon_compte');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }

    public function inscription_traitement() {
        $this->load->model('modelpostulant');
        $this->modelpostulant->ajouter_postulant($_POST['nom'], $_POST['prenom'], $_POST['psoeudo'], $_POST['mdp'], $_POST['mail'], $_POST['adr'], $_POST['number'], $_POST['tarif'], $_POST['domaine'], $_POST['competence']);
        $this->index();
    }

    public function inscription_cli() {
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/inscription_cli');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }

    public function profil($idPostulant) {
//        $_POST['$id'] = $this->input->get('idPostulant', TRUE);
//        print_r($idPostulant);
        $_POST['id'] = $idPostulant;
        $id = $_POST['id'];
//        print_r($is);
//        $data['postulant'] = $this->modelpostulant->voir_tout_postulant($idPostulant);
//        print_r($data['postulant']);
        $_POST['postulant'] = $this->modelpostulant->voir_tout_postulant($id);
//        $_POST['data'] = $this->modelpostulant->voir_tout_postulant($id);
//    print_r($_POST['data']);
        foreach ($_POST['postulant'] as $key => $user_id) {
            $user_id['iduser'] = $this->modelutilisateur->get_user($user_id['iduser']);
            //print_r($user_id);
            $postulants[] = $user_id;
        }

        $data = array();
        $data['postulants'] = $postulants;

        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/user_profil', $data);
//        $this->load->view('free_lance/user_profil');
//        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }

    public function update() {
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/compte_update');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }

    public function update_traitement() {
        $this->load->model('modelpostulant');
        $this->modelpostulant->MAJ_postulant($this->session->userdata('id'), $_POST['nom'], $_POST['prenom'], $_POST['psoeudo'], $_POST['mdp'], $_POST['mail'], $_POST['adr'], $_POST['number'], $_POST['mdp']);
        $this->index();
    }

    public function sendMailToAdmin() {
        $data = array(
            'postulantId' => $this->input->post('postulantId'),
                //'clientId'=>$this->input->post('clientId')
        );

        $postulant = $this->modelpostulant->voir_tout_postulant($data["postulantId"]);

        $client = $this->session->get_userdata();




        if (array_key_exists('idPostulant', $client)) {
            print_r($client);


            //Load email library
            $this->load->library('email');

            //SMTP & mail configuration
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                //'smtp_crypto' => 'ssl',
                'smtp_user' => 'seserges2@gmail.com',
                'smtp_pass' => 'votre pass',
                'mailtype' => 'html',
                'charset' => 'utf-8'
            );
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");

            //Email content
            $htmlContent = "<h1>Alert</h1>";
            $htmlContent .= "<h3 > Le client " . $client['nom'] . " " . $client['prenom'] . " cel:" . $client['telephone'] . " id: " . $client['idPostulant'] . " est interessé par le profile de " . $postulant['nom'] . " " . $postulant['prenom'] . " cel: " . $postulant['telephone'] . " id: " . $postulant['idPostulant'] . "<br><br> Merci à plus</h3>";

            $this->email->to('seserges2@gmail.com'); //seserges2@gmail.com
            $this->email->from('seserges2@gmail.com', 'FreeLance click boutton contacter');
            $this->email->subject('Free Emploi / FreeLance');
            $this->email->message($htmlContent);

            //Send email
            $this->email->send();

            //print_r($this->session->get_userdata());

            echo json_encode($postulant);
        }
    }

//    public function inscription_traitement() {
//        $this->load->view('free_lance/inc/header');
//        $this->load->view('free_lance/inc/navbar');
//        $this->load->view('free_lance/inscription');
//        $this->load->view('inc/sideBar');
//        $this->load->view('inc/footer');
//    }
}
