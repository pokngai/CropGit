<?php

namespace App\Modules\WelcomePage\Controllers;

use System\DB\DB;
use System\HMVC\HMVC;
use System\Utils\JS;

class Unactive extends HMVC {

    public function index() {
        $STR = new DB();

        $sql = "UPDATE sys_welcome_page SET active='0' WHERE id='" . ID . "'";
        $STR->query($sql);

        echo JS::re($this->route->backToModule());
    }

}
