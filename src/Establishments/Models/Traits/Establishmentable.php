<?php

namespace Myrtle\Core\Establishments\Models\Traits;


trait Establishmentable {

	public function establishmentable()
	{
		return $this->morphTo();
	}
}