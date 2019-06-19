<?php 

namespace App\Modules\Reposetory;

use App\Contracts\ConfigEmployInterface;
use Illuminate\Support\Facades\DB;

class CofigEmployReposetory implements ConfigEmployInterface
{
   
    
    public function items()
    {
        $items = DB::select('select * from employees');

     return $items;
    }
}


?>