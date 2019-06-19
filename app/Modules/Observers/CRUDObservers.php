<?php

namespace App\Modules\Observers;

use App\Models\Employ;


class CRUDObservers 
{
    public function created(Employ $employ)
    {
        $employ->name = strtoupper($employ->name);
    }
}
?>