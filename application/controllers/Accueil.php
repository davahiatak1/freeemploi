<?php

class Accueil extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('modelpostulant');
        $this->load->model('modelentreprise');
        $this->load->model('modelutilisateur');
//        $_POST['posts'] = $this->modelpostulant->liste_postulant();
//        $_POST['user'] = $this->modelutilisateur->liste_user();
    }


    public function index() {
        $_POST['3lastUser'] = $this->modelpostulant->get3LastAvatar();

        $_POST['postulant'] = $this->modelpostulant->liste_postulant();
        //$postulants = $_POST['postulant'];
        //$obj_user = array();
        //$i = 0;
        foreach ($_POST['postulant'] as $key => $user_id) {
            $user_id['iduser']=$this->modelutilisateur->get_user($user_id['iduser']);
            //print_r($user_id);
            $postulants[]=$user_id;
        }
        
        $_POST['postulant']=$postulants;
        
        $_POST['entreprise'] = $this->modelentreprise->lister_entreprise();
        
        //$postulants = $_POST['postulant'];
        //$obj_user = array();
        //$i = 0;
        foreach ($_POST['entreprise'] as $key => $user_id) {
            $user_id['iduser']=$this->modelutilisateur->get_user($user_id['iduser']);
            //print_r($user_id);
            $entreprise[]=$user_id;
        }
        
        $_POST['entreprise']=$entreprise;
        
         
        
        $this->load->view('accueil');
        $this->load->view('inc/header');
//        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
//        print_r($_POST['domaine']);
    }

    public function deco() {
        session_unset();
        session_destroy();
        $this->index();
    }

    public function condition()
    {
        
        
        $this->load->view('inc/header');
        $this->load->view('condition');
        $this->load->view('inc/footer');        
    }

    public function apropos()
    {
        $this->load->view('inc/header');
        $this->load->view('apropos');
        $this->load->view('inc/footer');       
    } 

    public function faq()
    {
        $this->load->view('inc/header');
        $this->load->view('faq');
        $this->load->view('inc/footer');          
    } 

    public function entr_faq()
    {
        $this->load->view('inc/header');
        $this->load->view('entr_faq');
        $this->load->view('inc/footer');          
    }

    public function infopratique()
    {
        $this->load->view('inc/header');
        $this->load->view('infopratique');
        $this->load->view('inc/footer');          
    }

    public function fonc_free()
    {
        $this->load->view('inc/header');
        $this->load->view('fonc_free');
        $this->load->view('inc/footer');          
    }
    
     public function inscription() {
        $this->load->view('inc/header');
//        $this->load->view('free_lance/inc/navbar');
        $this->load->view('inscription');
//        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }

    public function redirectionForm() {
         

        //$this->session->set_userdata("typecompte", $_POST['typecompte']);

        $this->load->view('inc/header');

            $this->session->set_userdata('nom',$_POST['nom']);
            $this->session->set_userdata('prenom',$_POST['prenom']);
            $this->session->set_userdata('pseudo',$_POST['pseudo']);
            $this->session->set_userdata('mdp',$_POST['mdp']);
            $this->session->set_userdata('mail',$_POST['email']);
            $this->session->set_userdata('avatar',$_FILES['avatar']['name']);
            $this->session->set_userdata('type',$_POST['typecompte']);

              //Traitement Image
         //traitement images
        //$avat= $_POST['avatar'];
        $a=$_FILES['avatar']['name'];
        echo $a;
        $config['upload_path'] = base_url('./img/');
        $config['allowed_types'] = 'jpg | PNG';
        $config['overwrite'] = true;
        /*$config['max_size'] = '5000';
        $config['max_width'] = '2500';
        $config['max_height'] = '2500';*/
        $this->load->library('upload');
        //$this->load->view('remplirContrePartie');
        //$this->session->set_userdata('images',$_POST['images']);
        $this->load->library('upload',$config);
        //rename("/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
        $this->load->model('modelutilisateur');
        $new=$this->modelutilisateur->return_lastCodeUser();
        if(basename($_FILES['avatar']['name'])){
            

            $this->load->model('modelutilisateur');
            
            $n1=$new+1;
            $new=$n1;
            //charger l'avatar dans le repertoire slide
            move_uploaded_file($_FILES['avatar']['tmp_name'],
            $_SERVER["DOCUMENT_ROOT"].'/emploi/asset/img/'.$new.'.jpg');
            $this->redimImg($_SERVER["DOCUMENT_ROOT"].'/emploi/asset/img/'.$new.'.jpg',70,70);
            $newAvatar='/asset/img/'.$new.'.jpg'; 
            $this->session->set_userdata('newAvatar',$newAvatar);

        }
        //Fin traitement


        if($_POST['typecompte']==1){
  
           $this->load->view('inscriptionPers'); 

       }elseif ($_POST['typecompte']==2) {
           # code...
        $this->load->view('inscriptionEntprse');
        
       }else{
        $this->index();
       }
        
       $this->load->view('inc/footer');
    }


   public function redimImg($nameImg, $L, $l)
    {
        // ...
        //$org_info = getimagesize($nameImg);
         //echo $org_info[3] . '<br><br>';
        $rsr_org = imagecreatefromjpeg($nameImg);
        $rsr_scl = imagescale($rsr_org, $L, $l,  IMG_BICUBIC_FIXED);
        imagejpeg($rsr_scl, $nameImg);
        imagedestroy($rsr_org);
        imagedestroy($rsr_scl);
        //return $nameImg;
    }
    public function inscription_traitement_perso() {
         $iduser;
         $this->load->model('modelutilisateur');

        $this->session->set_userdata('diplome',$_POST['diplome']);
        $this->session->set_userdata('formation',$_POST['formation']);
        $this->session->set_userdata('domaine',$_POST['domaine']);
        $this->session->set_userdata('competence',$_POST['competence']);
        $this->session->set_userdata('tarif',$_POST['tarif']);
        $this->session->set_userdata('adresse',$_POST['adresse']);
        $this->session->set_userdata('numero',$_POST['number']);
        $this->session->set_userdata('cv','Néant');


       

            

            

         //$this->session->set_userdata('infoUser2',$data);
         $this->load->model('modelutilisateur');
         //var_dump($this->session->userdata('infoUser1'));
         $this->modelutilisateur->ajouter_utilisateur($this->session->userdata('nom'),
                                                            $this->session->userdata('prenom'),
                                                            $this->session->userdata('pseudo'),
                                                            $this->session->userdata('mdp'),
                                                            $this->session->userdata('mail'),
                                                            $this->session->userdata('type'),
                                                            $this->session->userdata('newAvatar')
                                                            );

         $user=$this->modelutilisateur->getIdLastUser();
          foreach ($user as $row) {
            # code...
            $iduser=$row['iduser'];
         }
         //$this->traitementImage();
         $this->load->model('modelpostulant');
         $domaine=implode(',',$this->session->userdata('domaine'));
         $competence=implode(',',$this->session->userdata('competence'));

         $this->modelpostulant->ajouter_postulant( $this->session->userdata('adresse'),
                                                   $this->session->userdata('numero'),
                                                   $this->session->userdata('tarif'),
                                                   $domaine,
                                                   $competence,
                                                   $this->session->userdata('diplome'),
                                                   $this->session->userdata('formation'),
                                                   $this->session->userdata('cv'),
                                                   $iduser,
                                               $this->session->userdata('newAvatar'));

         session_unset();
         session_destroy();
         $this->modeAbonnement();
           
  
    }
    public function modeAbonnement() {
         $this->load->view('inc/header');
        $this->load->view('modeAbonne');
    }
    
    public function formPayement(){
        $this->session->set_userdata('choixMode',$_POST['mode']);
        $this->load->view('free_lance/inc/header');
        $this->load->view('formPayement');
         
    }
    public function traitementAbonnement()
    {
        if ($this->session->userdata('choixMode')==1) {
            if ((substr($_POST['number'], 0, 2)=="96"||substr($_POST['number'], 0, 2)=="97"||substr($_POST['number'], 0, 2)=="98"||substr($_POST['number'], 0, 2)=="99") && (strlen($_POST['number'])==8)) {
                # code...
                # code...
                $amount=$_POST['amount'];
                //redirection vers le payement en ligne paygateglobal
                $this->load->model('Modelabonnement');
                $token="3307d799-d8fd-47ba-9b92-87e7917c2a23";
                $idTrans=$this->Modelabonnement->return_lastIdAbonnement()+1;
                $urlReturn="http://127.0.0.1:8080/alodo25072017/Main/traitementPayementTest";
                $url="https://paygateglobal.com/v1/page?token=".$token."&amount=".$_POST['amount']."&descrption=GCENT&identifier=".$idTrans;

            
            
                // Création d'une ressource cURL
                $ch = curl_init();
                
                //echo $_SERVER["DOCUMENT_ROOT"];
                
                $data = array(
                        'auth_token' => '3307d799-d8fd-47ba-9b92-87e7917c2a23', 
                        'phone_number' => $_POST['number'],
                        'amount'=>$_POST['amount'],
                        'description'=>"GCENT",
                        'identifier'=>$idTrans

                );

                curl_setopt($ch, CURLOPT_URL, 'http://paygateglobal.com/api/v1/pay');
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                $ctrl=curl_exec($ch);
                $etat;
                if ($ctrl==null) {
                        $this->load->view('erreurWebService'); 
                }else{
                        $ctrl=explode(":", $ctrl);
                        $text_reference=explode(",", $ctrl[1])[0];
                        $status=explode("}", $ctrl[2])[0];
                        echo "<br>".$text_reference."<br>".$status;
                        // Fermeture de la ressource cURL et libération des ressources systèmes
                        curl_close($ch);
                        if ($status==0) {
                            
                            //$i=0; 
                            
                                $ch = curl_init();
                                $data = array(
                                        'auth_token' => '3307d799-d8fd-47ba-9b92-87e7917c2a23', 
                                        'tx_reference' => $text_reference
                                        );
                                curl_setopt($ch, CURLOPT_URL, 'http://paygateglobal.com/api/v1/status');
                                curl_setopt($ch, CURLOPT_POST, 1);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                                $ctrl=curl_exec($ch);
                               // print_r($ctrl);
                                $ctrl=explode(":", $ctrl);
                                $status=explode("}", $ctrl[4]);
                                //echo '****************************'.$status[0];
                                $etat=$status[0];
                                if($etat==2){
                                    $this->load->view('financement_en_cours');
                                    $this->load->model('Modelabonnement');
                                    //manipulation de date
                                   // $today=strtotime("now");//date today en seconde
                                    $dateDeb=date('Y-m-d');
                                    $dateFin=date('Y-m-d',strtotime("+1 year"));
                                    $this->Modelabonnement->insert($this->session->userdata('choixMode'),$this->session->userdata('iduser'), $amount, $etat, $text_reference,$dateDeb,$dateFin);
                                }
                                if($etat==4){
                                     $this->load->view('financement_expire');
                                }
                                if($etat==6){
                                     $this->load->view('financement_en_annule');
                                }
                           
                        }
                }
                 //                                        
////                        echo $ctrl;                 
            //              $text_reference=explode(",", $ctrl[1])[0];
        //                  $status=explode("}", $ctrl[2])[0];
                        

        //                  echo "<br>".$text_reference."<br>".$status;

                            
                            //$this->load->view('confTransfert');
            }else{
                $this->load->view('erreurNumber'); 
            }
        }

        if($this->session->userdata('choixMode')==2) {
            if ((substr($_POST['number'], 0, 2)=="92"||substr($_POST['number'], 0, 2)=="90"||substr($_POST['number'], 0, 2)=="91"||substr($_POST['number'], 0, 2)=="93") && (strlen($_POST['number'])==8)) {
                # code...
            }else{
                $this->load->view('erreurNumber'); 
            }
            # code...
        }
        if ($this->session->userdata('choixMode')==3) {
            
            # code...
             // REQUEST // URL POST https://sandbox.api.visa.com/cybersource/payments/v1/authorizations?apikey={apikey} // Header content-type: application/json x-pay-token: {generated from request data} 
            // Création d'une ressource cURL
                $ch = curl_init();
                
                $data = array(
                        'auth_token' => '3307d799-d8fd-47ba-9b92-87e7917c2a23', 
                        'phone_number' => $_POST['number'],
                        'amount'=>$_POST['amount'],
                        'description'=>"GCENT",
                        'identifier'=>$idTrans

                );

                curl_setopt($ch, CURLOPT_URL, 'https://sandbox.api.visa.com/cybersource/payments/v1/authorizations?apikey=3J1C9IWPH8UWEABBRZ0Z21KuVtHBvrkW9-nlpLYue257kejwU');
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                $ctrl=curl_exec($ch);
        }
        
    }
    public function inscription_traitement_entreprise() {

        $this->session->set_userdata('nomEns',$_POST['nom_entrpse']);
        $this->session->set_userdata('numRef',$_POST['ref']);
        $this->session->set_userdata('domaine1',$_POST['domaine1']);
        $this->session->set_userdata('domaine2',$_POST['domaine2']);
        $this->session->set_userdata('contact',$_POST['contact']);
        $this->session->set_userdata('quartier',$_POST['quartier']);
        $this->session->set_userdata('ville',$_POST['ville']);
        $this->session->set_userdata('pays',$_POST['pays']);
           
         //$this->session->set_userdata('infoUser2',$data);
        $this->load->model('modelutilisateur');
        $this->modelutilisateur->ajouter_utilisateur($this->session->userdata('nom'),
                                                            $this->session->userdata('prenom'),
                                                            $this->session->userdata('pseudo'),
                                                            $this->session->userdata('mdp'),
                                                            $this->session->userdata('mail'),
                                                            $this->session->userdata('type')
                                                            );

         $user=$this->modelutilisateur->getIdLastUser();
          foreach ($user as $row) {
            # code...
            $iduser=$row['iduser'];
         }
         $domaine1=implode(',',$this->session->userdata('domaine1'));
         $domaine2=implode(',',$this->session->userdata('domaine2'));
         $this->load->model('modelentreprise');
         $this->modelentreprise->ajouter_entreprise($this->session->userdata('nomEns'),
                                                     $this->session->userdata('numRef'),
                                                     $domaine1,
                                                     $domaine2,
                                                     $this->session->userdata('contact'),
                                                     $this->session->userdata('quartier'),
                                                     $this->session->userdata('ville'),
                                                     $this->session->userdata('pays'),
                                                    $iduser);
         session_unset();
         session_destroy();
         $this->index();
  
    }

    public function connexion() {
        $this->load->library('form_validation');
        $this->load->model('modelutilisateur');
        $resultat = $this->modelutilisateur->login($this->input->post('pseudo'), $this->input->post('pwd'));
        if ($resultat) {
            //$query = $this->modelpostulant->login($this->input->post('email'), $this->input->post('password'));
            foreach ($resultat as $row) {

                $this->session->set_userdata('iduser', $row['iduser']);
                $this->session->set_userdata('nom', $row['nomuser']);
                $this->session->set_userdata('prenom', $row['prenomuser']);
                $this->session->set_userdata('pseudo', $row['pseudo']);
                $this->session->set_userdata('motdepasse', $row['motdepasse']);
                $this->session->set_userdata('email', $row['email']);
                $this->session->set_userdata('email', $row['idtypecompte']);
//                $this->session->set_userdata('datnaiss', $row['datnaiss']);
            }

            //echo "connexion reussie";
             $this->index();
        } else {

            //$this->load->view('index');
           echo "email ou mot de passe eurroné";
           echo $this->input->post('pseudo');
           echo $this->input->post('pwd');

            $this->index();
        }
    }
    public function monCompte() {
        //si les ide,tifiants sont bon il sera rediriger sur mon compte
        $this->load->view('free_lance/inc/header');
        $this->load->view('free_lance/inc/navbar');
        $this->load->view('free_lance/mon_compte');
        $this->load->view('inc/sideBar');
        $this->load->view('inc/footer');
    }

}
