<?php

namespace Myrtle\Core\Establishments\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Myrtle\Core\Establishments\Models\EstablishmentType;

class EstablishmentTypeSeedController extends Controller
{
    public function create()
    {
        $this->authorize('seed', EstablishmentType::class);

        $types = \EstablishmentTypesTableSeeder::types();

        return view('admin::docks.establishments.types.seed.create')->withTypes($types);
    }

    public function store(Request $form)
    {
        $this->authorize('seed', EstablishmentType::class);

        Artisan::call('db:seed', ['--class' => \EstablishmentTypesTableSeeder::class]);

        flasher()->alert('Establishment Types seeded successfully', 'success');

        return redirect(route('admin.establishments.types.index'));
    }
}
