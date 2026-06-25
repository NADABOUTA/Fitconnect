<?php

require_once '../app/Controllers/AdherentController.php';
require_once '../app/Controllers/AbonnementController.php';
require_once '../app/Controllers/SeanceController.php';


$action = $_GET['action'] ?? 'dashboard';


switch ($action)
{

    /* Dashboard */

    case 'dashboard':

        require_once '../views/dashboard/index.php';

    break;




    /* Adhérents */

    case 'adherents':

        $controller = new AdherentController();

        $adherents = $controller->index();

        require_once '../views/adherents/index.php';

    break;




    case 'createAdherent':

        require_once '../views/adherents/create.php';

    break;

case 'storeAdherent':

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $controller = new AdherentController();

        $controller->create($_POST);

        header("Location:index.php?action=adherents");

        exit();
    }

break;



    case 'deleteAdherent':


        if(isset($_GET['id']))
        {

            $controller = new AdherentController();

            $controller->delete($_GET['id']);

        }


        header("Location:index.php?action=adherents");

        exit();

    break;






    /* Abonnements */



    case 'abonnements':

        $controller = new AbonnementController();

        $abonnements = $controller->index();

        require_once '../views/abonnements/index.php';

    break;





    case 'createAbonnement':

        require_once '../views/abonnements/create.php';

    break;





    default:

        require_once '../views/dashboard/index.php';

}