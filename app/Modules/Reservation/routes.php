<?php

/**
 * This file is part of BillingTrack.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Route::middleware(['web', 'auth.admin'])->namespace('BT\Modules\Reservation\Controllers')
    ->prefix('reservations')->name('reservations.')->group(function () {
    Route::name('index')->get('/', 'ReservationController@index');
    Route::name('edit')->get('{reservation}/edit', 'ReservationController@edit');
    Route::name('update')->put('{reservation}/edit', 'ReservationController@update');
    Route::name('create')->get('create', 'ReservationController@create');
    Route::name('store')->post('store', 'ReservationController@store');
    Route::name('destroy')->delete('/{reservation}', 'ReservationController@destroy');
});
