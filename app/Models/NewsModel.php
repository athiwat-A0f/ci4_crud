<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

    protected $allowedFields = ['title', 'slug', 'body', 'thumbnail'];

    public function getNews($slug = false)
    {
        if ($slug === false)
        {
            return $this->orderBy('id','desc')->findAll();
        }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
    }

}