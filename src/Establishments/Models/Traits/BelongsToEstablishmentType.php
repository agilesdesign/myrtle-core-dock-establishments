<?php

namespace Myrtle\Core\Establishments\Models\Traits;

use Myrtle\Core\Establishments\Models\EstablishmentType;

trait BelongsToEstablishmentType {

	public function businessType()
	{
		return $this->belongsTo(EstablishmentType::class);
	}

	public function scopeByEstablishmenttype($query, $ids = null)
	{
		if (empty($ids))
		{
			return $query;
		}

		return $query->whereHas('establishmenttype', function ($q) use ($ids)
		{
			$q->whereIn('id', $ids);
		});
	}
}