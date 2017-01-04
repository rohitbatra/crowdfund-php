<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    protected $table = 'content_types';
    public $timestamps = true;

    public static function getContentTypeOptions(){
		$return = [];
		$types = self::all();
		if($types){
			foreach ($types as $t){
				$return[$t->id] = $t->title;
			}
		}
		return $return;
	}
}
