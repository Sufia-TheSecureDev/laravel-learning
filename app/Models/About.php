<?php

namespace App\Models;

use App\Casts\UcFirstCast;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];
    protected $casts = [
        'name' => UcFirstCast::class,
        'created_at' => 'datetime'
    ];

    public function getNameEmailAttribute(){
        return $this->name.'-'.$this->email ;
    }

}
