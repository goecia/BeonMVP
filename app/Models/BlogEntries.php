<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogEntries extends Model
{
    protected $table = 'blog_entries';

    public $primaryKey = 'id';
}
