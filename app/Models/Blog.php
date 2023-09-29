<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Blog extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
{
    return $query
        ->when($filters['search'] ?? null, function ($query) use($filters) {
            $query->where(function ($query) use ($filters) {
                $query->where('title', 'LIKE', '%' . $filters['search'] . '%')
                      ->orWhere('body', 'LIKE', '%' . $filters['search']. '%');
            });
        })
        ->when($filters['category'] ?? null, function ($query) use ($filters) {
            $query->whereHas('category', function ($catQuery) use ($filters) {
                $catQuery->whereSlug($filters['category'] );
            });
        })
        ->when($filters['user'] ?? null, function ($query) use($filters) {
            $query->whereHas('user', function ($userQuery) use ($filters) {
                $userQuery->whereName($filters['user']);
            });
        });
}

}