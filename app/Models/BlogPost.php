<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'alt',
        'title',
        'tags',
        'slug',
        'pg1',
        'pg2',
        'pg3',
        'pg4',
        'pg5',
        'pg6',
        'pg7',
        'quote1',
        'quote2'
    ];


    public function quoteAuthor($quoteID=null): string
    {
        if ($quoteID == null or $quoteID == 1) {
            $strArr = explode('@', $this->quote1);
        } else if ($quoteID == 2) {
            $strArr = explode('@', $this->quote2);
        }

        return $strArr[1] ?? 'Daniels Martins';
    }

}
