<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class SubPage extends Model
{
    use HasFactory;

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
