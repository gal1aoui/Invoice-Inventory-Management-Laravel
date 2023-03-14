<?php

/**
 * This file is part of BillingTrack.
 *
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BT\Modules\Reservation\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    // public function attributes()
    // {
    //     return [
    //         'client_id'         => trans('bt.client'),
    //         'paid_at'           => trans('bt.payment_date'),
    //         'invoice_id'        => trans('bt.invoice'),
    //         'amount'            => trans('bt.amount'),
    //         'payment_method_id' => trans('bt.payment_method'),
    //     ];
    // }

    public function prepareForValidation()
    {
        $request = $this->all();

        $this->replace($request);
    }

    public function rules()
    {
        return [
            'name'          => 'required',
            'hotel'         => 'required',
            'email'         => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required',
        ];
    }
}
