<?php
session_start();
?>
<?php
#Global constant
define('PATH_VIEWS', 'views/');
define('PATH_CONTROLLER', 'controllers/');
define('DEVELOPER', 'Bouzaienne Zakia & Valentin Kilian');
define('TODAYDATE', date("j/m/Y"));
define('SESSION_ID', session_id());

function chargerClasse($classe)
{
    require_once 'models/' . $classe . '.class.php';
}

spl_autoload_register('chargerClasse');

$db = Db::getInstance();

if (empty($_SESSION['authentifie'])) {
    $actionloginadmin = 'login';
    $libelleloginadmin = 'Connexion';
} else {
    $actionloginadmin = 'plan';
    $libelleloginadmin = 'Plan';
}
require_once(PATH_VIEWS . 'header.php');


$action = (isset($_GET['action'])) ? $_GET['action'] : 'default';


switch ($action) {
    case'home':
        require_once(PATH_CONTROLLER . 'HomeController.php');
        $controller = new HomeController();
        break;
    case'fee':
        require_once(PATH_CONTROLLER . 'FeeController.php');
        $controller = new FeeController($db);
        break;
    case'login':
        require_once(PATH_CONTROLLER . 'LoginController.php');
        $controller = new LoginController($db);
        break;
    case'registration':
        require_once(PATH_CONTROLLER . 'RegistrationController.php');
        $controller = new RegistrationController($db);
        break;
    case'contact':
        require_once(PATH_CONTROLLER . 'ContactController.php');
        $controller = new ContactController();
        break;
    case'event':
        require_once(PATH_CONTROLLER . 'EventController.php');
        $controller = new EventController($db);
        break;
    case'addEvent':
        require_once(PATH_CONTROLLER . 'AddEventController.php');
        $controller = new AddEventController($db);
        break;
    case'changeInfos':
        require_once(PATH_CONTROLLER . 'ChangeInfosController.php');
        $controller = new ChangeInfosController($db);
        break;
    case'plan':
        require_once(PATH_CONTROLLER . 'PlanController.php');
        $controller = new PlanController();
        break;
    case'logout':
        require_once (PATH_CONTROLLER. 'LogoutController.php');
        $controller = new LogoutController();
        break;
    /*case'coach':
        require_once(PATH_VIEWS.'CoachController.php');
        $controller = new CoachController();
        break;


    case'consultEvent':
        require_once(PATH_VIEWS.'ConsultEventController.php');
        $controller = new ConsultEventController();
        break;
    case'changeEvent':
        require_once(PATH_VIEWS.'ChangeEventController.php');
        $controller = new ChangeEventController();
        break;
    case'membre':
        require_once(PATH_VIEWS.'MembreController.php');
        $controller = new MembreController();
        break;

    case'participationEvent':
        require_once(PATH_VIEWS.'ParticipationEventController.php');
        $controller = new ParticipationEventController();
        break;
     */
    default:
        require_once(PATH_CONTROLLER . 'HomeController.php');
        $controller = new HomeController();
        break;
}
#controller execution
$controller->run();

#Footer
require_once(PATH_VIEWS . 'footer.php');
?>