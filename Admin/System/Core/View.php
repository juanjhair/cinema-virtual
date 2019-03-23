<?php
namespace System\Core;


class View
{
  

  protected $controller_name;
  protected $file_path;
  protected $params;
  protected $template;
  
  /**
   * Inicializa valores y el render
   * @param string $controller_name
   * @param array $params. Opcional
   */
  public function __construct($controller_name, $params = array())
  {
    $this->controller_name = $controller_name;
    $this->params = $params;
    $this->render();
    
  }

  /**
   * Muestra la vista según el controlador que hizo la petición
   */
  protected function render()
  {
    
    if(class_exists($this->controller_name)){
      $array_controller_name=explode('\\',$this->controller_name);
      $route_file_name=end($array_controller_name);
      $file_name = str_replace('Controller', '',$route_file_name );
      
      $this->template=$this->template($file_name);
      
    }else{
      throw new \Exception("Error No existe $controller_name");
    }
  }

  /**
   * Retorna el render de una vista
   */
  protected function template($file_name)
  {
    $this->file_path = ROOT . '/' . FULL_PATH_VIEWS . "$file_name/$file_name" . '.php';
    
    if(is_file($this->file_path)){
      
      extract($this->params);
      return require($this->file_path);
    }else{
      throw new \Exception("Error No existe $this->file_path");
    }
  }

}