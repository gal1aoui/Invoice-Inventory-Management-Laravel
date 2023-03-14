<?php


/**
 * This file is part of BillingTrack.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BT\Modules\Reservation\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * Guarded properties
     * @var array
     */
    protected $guarded = ['id'];

	protected $table = 'reservations';

    protected $fillable = ['name', 'hotel', 'email', 'start_time', 'end_time'];

}
