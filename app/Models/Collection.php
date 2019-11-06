<?php

namespace App\Models;

use App\Models\Trove;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $connection = "stats4sd";

    public function troves ()
    {
        return $this->belongsToMany(Trove::class, '_link_collections_troves');
    }


}
