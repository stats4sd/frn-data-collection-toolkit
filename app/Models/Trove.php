<?php

namespace App\Models;

use App\Models\Collection;
use App\Traits\HasTranslationsWithoutDefault;
use Illuminate\Database\Eloquent\Model;

class Trove extends Model
{

    use HasTranslationsWithoutDefault;

    // *****************************************************
    // Global Variables
    // *****************************************************

    protected $connection = "stats4sd";
    protected $translatable = ['title', 'description', 'elements_files', 'elements_urls', 'elements_videos'];
    protected $guarded = ['clear_elements_files','clear_elements_videos','spatie_tags', 'requester_comment', 'reviewer_comment','reviewer_id','review_requested_by'];

    protected $with = ['type','tags','authors','collections'];

    protected $casts = [
        'elements_files' => 'array',
        'elements_urls' => 'array',
        'elements_videos' => 'array',
        'creation_date' => 'date'
    ];


    // *****************************************************
    // Functions
    // *****************************************************


    public function getElementsFilesAttribute ($value)
    {
        if(!is_array($value)) {
            return json_decode($value);
        }
        return $value;    }
    public function getElementsVideosAttribute ($value)
    {
        if(!is_array($value)) {
            return json_decode($value);
        }
        return $value;
    }
    public function getElementsUrlsAttribute ($value)
    {
        if(!is_array($value)) {
            return json_decode($value);
        }
        return $value;
    }

    public static function getTagClassName(): string
    {
        return Tag::class;
    }

    public function getDescriptionAttribute ($value)
    {
        return strip_tags($value, '<h1><h2><h3><h4><h5><h6><div><p><a><ol><ul><li><br><img>');
    }

    // *****************************************************
    // Relationships
    // *****************************************************

    public function type ()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    //Many to many
    public function authors ()
    {
        return $this->belongsToMany(Author::class, '_link_authors_troves','trove_id','author_id');
    }

    public function collections ()
    {
        return $this->belongsToMany(Collection::class, '_link_collections_troves','trove_id','collection_id');
    }

    public function tags ()
    {
        return $this->belongsTo(Tag::class);
    }

}
