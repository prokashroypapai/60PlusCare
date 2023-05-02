<?php

namespace App\Services;

class CreateSlugService
{
    public function CreateSlugService($title){
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));

        return $slug;
    }
}
