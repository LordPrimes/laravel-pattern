<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Reposetory\CofigEmployReposetory;
use App\Modules\Reposetory\CRUDReposetory;
use App\Models\Employ;

class ResultController extends Controller
{
    protected $result;


    public function __construct(Employ $employ)
    {
        $this->result = new CRUDReposetory($employ);
    }

    public function index()
    {
        
     return   $this->result->create([
            'name' => 'fsgfdg',
            'male' => '2',
            'rang_id' => 1
            ]);
    }
    public function test()
    {
        $items = new CofigEmployReposetory();
        return $items->items();
    }

    public function all()
    {
        // return $this->result->read();
    }
}

