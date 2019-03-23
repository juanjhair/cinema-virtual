<?php
namespace App\Controller\ErrorPage;

use System\Core\Controller;

class ErrorPageController extends Controller
{
  public $path_inicio;

  public function __construct()
  {
    $this->path_inicio = FOLDER_PATH;
  }
  
  public function index()
  {
    $this->render(__CLASS__, array('path_inicio' => $this->path_inicio));
    
  }
}

?>