<?php

namespace App\Contracts;

interface CRUDInterface 
{
    public function create(array $data);

    public function read();

    public function updated(array $data);

    public function deleted($id);
}
?>