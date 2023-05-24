<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Book;

class Category extends Model
{
    use HasFactory;

    // 1 kategori bisa punya banyak buku 
    // kalo 1 to many - 1nya pake hasmany; manynya pake belongstomany
    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_categories');
        // define juga pivot tablenya
    }

}
