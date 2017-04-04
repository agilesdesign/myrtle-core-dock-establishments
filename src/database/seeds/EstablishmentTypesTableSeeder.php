<?php

use Illuminate\Database\Seeder;

class EstablishmentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		collect(static::types())->each(function($item, $key) {
			Myrtle\Core\Establishments\Models\EstablishmentType::updateOrCreate(['name' => $item]);
		});
    }

    public static function types()
    {
        return ['Cooperative', 'Corporation', 'Limited Liability Company', 'Partnership', 'S Corporation', 'Sole Proprietorship'];
    }
}
