<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubPage;

class Page extends Model
{
    use HasFactory;
    protected $table='pages';


 public function subpages()
 {
    return $this->hasMany(SubPage::class);
 } 

}
