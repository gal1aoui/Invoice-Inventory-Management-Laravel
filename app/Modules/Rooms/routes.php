<?php

/**
 * This file is part of BillingTrack.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Route::middleware(['web', 'auth.admin'])->namespace('BT\Modules\Rooms\Controllers')
    ->prefix('rooms')->name('rooms.')->group(function () {
        Route::name('index')->get('/', 'RoomController@index');
        Route::name('edit')->get('{room}/edit', 'RoomController@edit');
        Route::name('update')->put('{room}/edit', 'RoomController@update');
        Route::name('create')->get('create', 'RoomController@create');
        Route::name('store')->post('store', 'RoomController@store');
        Route::name('destroy')->delete('/{room}', 'RoomController@destroy');
    });
