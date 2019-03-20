<?php
namespace System\Core;

use App\Model\Datasource\Datasource;

class Model
{
  protected $datasource;
  
  public function __construct()
  {
      $this->datasource=new Datasource();
  }

}