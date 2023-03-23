<?php

/**
 * This file is part of BillingTrack.
 *
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BT\Modules\Rooms\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function prepareForValidation()
    {
        $request = $this->all();

        $this->replace($request);
    }

    public function rules()
    {
        return [
            /*'name'          => 'required',
            'hotel'         => 'required',
            //'used'          => 'required',
            'email'         => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required',*/
        ];
    }
}
