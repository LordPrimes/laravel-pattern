<?php

namespace App\Exceptions;

use Exception;

class CRUDExeptions extends Exception
{
    public function render()
    {
        return response('В базе нету записей');
    }
}

?>