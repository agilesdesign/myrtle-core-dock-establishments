<?php

namespace Myrtle\Core\Establishments\Http\Requests;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Http\FormRequest;

abstract class EstablishmentBiographSaveForm extends FormRequest {

	protected $establishmentable;

	protected $routeParameterKey;

	public function __construct(Router $router)
	{
		//todo: if route doesn't container parameter throw exception
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
			'establishment_type_id' => 'exists:establishment_types,id',
		];
	}

	public function save()
	{
		$this->establishmentable->biograph->update($this->toArray());
	}
}
