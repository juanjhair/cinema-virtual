<?php 
namespace System\Core;

use System\Core\View;

abstract class Controller
{
  /**
   * @var object
   */
  private $view;

  /**
   * Inicializa la vista
   */
  public function render($controller_name = '', $params = array())
  {
    
    $this->view = new View($controller_name, $params);
    
  }

  /**
   * Metodo estándar
   */
  abstract public function index();
}