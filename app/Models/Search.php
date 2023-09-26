<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    public function toSearchableArray()
    {
    
        return [
            'id' => $this->id,
            'name' => $this->name,
           
        ];
    }
}
