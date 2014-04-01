<?php

use Carbon\Carbon;

class Post extends BaseModel {

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }

    /*define relationship to user(author)*/
    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

    public function getCreatedAtAttribute($value) 
    {
    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    		return $utc->setTimezone('America/Chicago'); 
    }



}