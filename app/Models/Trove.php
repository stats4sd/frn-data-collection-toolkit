<?php

namespace App\Models;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;

class Trove extends Model
{
    protected $connection = "stats4sd";


    public function collections ()
    {
        return $this->belongsToMany(Collection::class, '_link_collections_troves');
    }
}
