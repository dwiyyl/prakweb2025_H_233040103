<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // Kolom yang dilindungi dari mass assignment (hanya 'id' yang tidak boleh diisi manual)
    protected $guarded = ['id'];

    // Relasi: Satu Category memiliki banyak post (One-to Many)
    public function post(): HasMany
    {
        return $this->hasMany(Post::class, 'Category_id');
        // 'category_id' adalah foreign key di tabel posts yang menunjuk ke categories.id
        // Artinya: satu kategori bisa memiliki banyak postingan
    }
}
