<?php

namespace Myrtle\Core\Establishments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Myrtle\Establishments\Models\Traits\Establishmentable;

class EstablishmentName extends Model
{
	use Establishmentable, SoftDeletes;

	protected $table = 'establishment_names';

	protected $fillable = ['legal', 'previous_legal', 'alternative'];

	protected $casts = [
		'previous_legal' => 'array',
	];

	protected $touches = ['establishmentable'];
}
