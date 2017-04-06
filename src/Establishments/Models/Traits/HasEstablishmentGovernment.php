<?php

namespace Myrtle\Core\Establishments\Models\Traits;

use Myrtle\Core\Establishments\Models\EstablishmentGovernment;

trait HasEstablishmentGovernment {

	public function government()
	{
		return $this->morphOne(EstablishmentGovernment::class, 'establishmentable');
	}
}