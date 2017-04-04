<?php

namespace Myrtle\Core\Establishments\Http\Requests;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Http\FormRequest;

abstract class EstablishmentGovernmentSaveForm extends FormRequest {

	protected $establishmentable;

	protected $routeParameterKey;

	public function __construct(Router $router)
	{
		$this->establishmentable = $router->current()->getParameter($this->routeParameterKey);
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
		];
	}

	public function save()
	{
		$this->establishmentable->government->update($this->toArray());
	}
}
