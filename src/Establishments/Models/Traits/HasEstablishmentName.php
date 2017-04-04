<?php

namespace Myrtle\Core\Establishments\Models\Traits;

use Myrtle\Establishments\Models\EstablishmentName;

trait HasEstablishmentName {

	public function name()
	{
		return $this->morphOne(EstablishmentName::class, 'establishmentable');
	}
}