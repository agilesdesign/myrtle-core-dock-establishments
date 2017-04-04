<?php

Route::group(['prefix' => 'establishments', 'as' => 'establishments.'], function () {
    Route::resource('types', \Myrtle\Core\Establishments\Http\Controllers\Administrator\EstablishmentTypesController::class, ['except' => ['show']]);
});