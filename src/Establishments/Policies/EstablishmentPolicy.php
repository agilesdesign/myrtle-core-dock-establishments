<?php

namespace Myrtle\Core\Establishments\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstablishmentPolicy
{
    use HandlesAuthorization;

	/**
	 * Create a new policy instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	public function before(User $user)
	{
		if ($this->admin($user))
		{
			return true;
		}
	}

	public function admin(User $user)
	{
		return $user->allPermissions->contains(function($ability, $key) {
			return $ability->name === 'businesstypes.admin';
		});
	}
}
