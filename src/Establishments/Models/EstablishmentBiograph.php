<?php

namespace Myrtle\Core\Establishments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Myrtle\Establishments\Models\Traits\Establishmentable;
use Myrtle\Establishments\Models\Traits\BelongsToEstablishmentType;

class EstablishmentBiograph extends Model
{
	use BelongsToEstablishmentType, Establishmentable, SoftDeletes;

	protected $fillable = ['established_at', 'business_type_id'];

	protected $dates = ['created_at', 'updated_at', 'established_at'];

	protected $touches = ['establishmentable'];

	public function establishmenttype()
	{
		return $this->belongsTo(EstablishmentType::class, 'business_type_id');
	}
}
