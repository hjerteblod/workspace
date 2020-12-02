<?php

namespace CashMachine\Controller;

use CashMachine\Core\Database;

/**
 * Class 
 * 
 */
class BankbalanceController extends \CashMachine\Core\Controller
{
    /**
     * Undocumented function
     * @return void
     */
    public function totalAction()
    {
        $db = Database::getInstance();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            
        }

        require __DIR__ . '/../Views/Bankbalance/total.php';
    }
}
