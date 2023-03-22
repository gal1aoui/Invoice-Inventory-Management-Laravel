<?php


/**
 * This file is part of BillingTrack.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BT\Modules\Rooms\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * Guarded properties
     * @var array
     */
    protected $guarded = ['id'];

	protected $table = 'rooms';

    protected $fillable = ['name', 'client_id', 'purchase_price', 'selling_price', 'adults_number', 'kids_number', 'number','type','room_formula'];

}
