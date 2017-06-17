<?php

namespace App\Models;


class MovieModel extends Model {

protected $table = 'movies';

public function  getRelatedDirectors($id){
    return $this->getRelated('director', 'movies_id', $id);
}

}