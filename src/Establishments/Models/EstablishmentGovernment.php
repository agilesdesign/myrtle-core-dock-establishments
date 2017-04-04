<?php

namespace Myrtle\Core\Establishments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Myrtle\Establishments\Models\Traits\Establishmentable;

class EstablishmentGovernment extends Model
{
	use Establishmentable, SoftDeletes;

    protected $fillable = ['ein', 'tin', 'duns'];

	protected $touches = ['establishmentable'];
}
