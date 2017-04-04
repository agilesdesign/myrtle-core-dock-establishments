<?php

namespace Myrtle\Core\Establishments\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Myrtle\Establishments\Models\EstablishmentType;

class EstablishmentTypesController extends Controller {

	public function index(EstablishmentType $policytype)
	{
		$establishmenttypes = EstablishmentType::orderBy('name')->paginate();

		return view('admin::establishments.types.index')
			->withEstablishmenttypes($establishmenttypes)
			->withPolicytype($policytype);
	}

	public function create(EstablishmentType $establishmenttype)
	{
		$this->authorize($establishmenttype);

		return view('admin::establishments.types.create')
			->withEstablishmenttype($establishmenttype);
	}

	public function store(Request $request, EstablishmentType $establishmenttype)
	{
		$this->authorize($establishmenttype);

		$establishmenttype->fill($request->toArray());

		$establishmenttype->save();

		flasher()->alert('Establishment type added successfully', 'success');

		return redirect(route('admin.establishments.types.index', $establishmenttype->id));
	}

	public function edit(EstablishmentType $establishmenttype)
	{
		$this->authorize($establishmenttype);

		return view('admin::establishments.types.edit')
			->withEstablishmenttype($establishmenttype);
	}

	public function update(Request $request, EstablishmentType $establishmenttype)
	{
		$this->authorize($establishmenttype);

		$establishmenttype->update($request->toArray());

		flasher()->alert('Establishment type updated successfully', 'success');

		return redirect(route('admin.establishments.types.index'));
	}
}
