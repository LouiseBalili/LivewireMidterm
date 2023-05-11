<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'location',
        'rate',
        'total_transactions',
        'description',
        'image',
    ];

    // protected $guarded = [];

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))
            ->filter()
            ->each(function($term) use($query) {
                $term = "%" . $term . "%";

                $query->where('name', 'like', $term)
                ->orWhere('rate', 'like', $term)
                ->orWhere('genre', 'like', $term)
                ->orWhere('location', 'like', $term);
            });
    }
}
