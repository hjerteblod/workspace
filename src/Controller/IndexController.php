<?php

namespace CashMachine\Controller;

/**
 * Class 
 * 
 */
class IndexController extends \CashMachine\Core\Controller
{
   /**
    * Undocumented function
    * @return void
    */
   public function indexAction()
   {
      session_start();

      if (!array_key_exists('visits', $_SESSION)) {
         $_SESSION['visits'] = 0;
      }

      //    echo 'You visited this page ' . $_SESSION['visits']++ . ' times.';

      require __DIR__ . '/../Views/Index/index.php';
   }
}
