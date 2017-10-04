<?php

namespace App;
use Eloquent;

class LocationLocationTag extends Eloquent
{
    protected $fillable = [
        'location_id', 'location_tag_id',
    ];
	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = false;

	protected $table = 'location_location_tag';
}
