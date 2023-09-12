<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

$author = App\Author::find(1);
$author->update(['name'=>'Nazwa Az Zahra']);
App\Author::create(['name'=>'Nazwa Az Zahra']);


class Author extends Model
{
    public function books()

    {
      return $this->hasMany('App\Book');
    }

protected $fillable = ['title', 'author_id', 'amount'];
}
