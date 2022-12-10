<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    public $table = "service_categories";

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}

// Function yang lama
// class ServiceCategory extends Model
// {
//     use HasFactory;

//     protected $table = "service_categories";

//     public function services()
//     {
//         return $this->hasMany(services::class);
//     }
// }