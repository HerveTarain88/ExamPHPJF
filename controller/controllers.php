<?php 

function get() {


//2. Je séléctionne et rappatrie les données
$eleves = getAllEleves();
$raisons = getAllRaisons();
$formateurs = getAllFormateurs();
$urgences = getAllUrgences();
$tickets = getAllTickets(); 

//3. J'appelle la vue pour pouvoir les afficher
include "tpl/headerView.php";
include "tpl/indexView.php";
include "tpl/footerView.php";
}

function createTicket() {
    //1 il traite la demande de l'utilisateur 
    $idEleve = filter_var($_POST['listeEleves']);
    $idRaison = filter_var($_POST['listeRaisons']);
    $idFormateur = filter_var($_POST['listeFormateurs']);
    $idUrgence = filter_var($_POST['listeUrgences']);
    //2 il demande au model de faire ce qui doit être fait
    createTicketIntoBDD($idEleve, $idRaison, $idFormateur, $idUrgence);
   //3 appeler la bonne vue
   header("Location: /geneTicket/index.php");
};

function deleteTicket() {
    //1. demande au model de rappatrier les données dont il y'a besoin
        $resultsDelete = deleteContact();
    //2. appeler la bonne vue
        include "tpl/headerView.php"; 
        include "tpl/confirmView.php";
        include "tpl/footerView.php"; 
};


?>


