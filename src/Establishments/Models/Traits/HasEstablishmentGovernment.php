<?php

namespace Myrtle\Core\Establishments\Models\Traits;

use Myrtle\Establishments\Models\EstablishmentGovernment;

trait HasEstablishmentGovernment {

	public function government()
	{
		return $this->morphOne(EstablishmentGovernment::class, 'establishmentable');
	}
}