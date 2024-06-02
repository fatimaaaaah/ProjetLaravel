<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    // Ajouter la méthode link()
    public function link()
    {
        return route('blog.show', ['slug' => $this->slug, 'id' => $this->id]);
    }
}
