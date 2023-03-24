<?php


/**
 * This file is part of BillingTrack.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BT\Modules\Reservation\Models;

use BT\Modules\Clients\Models\Client;
use BT\Modules\Vendors\Models\Vendor;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * Guarded properties
     * @var array
     */
    protected $guarded = ['id'];

	protected $table = 'reservations';

    protected $fillable = ['name', 'used', 'hotel', 'email', 'start_time', 'end_time','description','client_id','vendor_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }


}
