<?php

namespace Myrtle\Core\Establishments\Models\Traits;

use Myrtle\Core\Establishments\Models\EstablishmentBiograph;

trait HasEstablishmentBiograph {

	public function biograph()
	{
		return $this->morphOne(EstablishmentBiograph::class, 'establishmentable');
	}
}