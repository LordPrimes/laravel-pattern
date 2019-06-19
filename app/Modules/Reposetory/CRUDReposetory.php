<?php 


namespace App\Modules\Reposetory;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\CRUDExeptions;
use App\Contracts\CRUDInterface;

class CRUDReposetory implements CRUDInterface
{

    protected $model;


    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
     return $this->model->create($data);
    }

    public function read()
    {
       
      $items = $this->model->all();

      if ($items == true){
        return $items;
      }else{
        throw new CRUDExeptions(); 
      }
        
    }

    public function updated(array $data)
    {

    }
     
    public function deleted($id)
    {

    }
}