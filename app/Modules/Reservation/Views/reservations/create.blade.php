@extends('layouts.master')

@section('content')
<section class="content-header">
    <h3 class="float-left">@lang('bt.reservation')</h3>

    <div class="float-right">
        <a href="{{ route('reservations.create') }}" class="btn btn-primary enter-multi-payment">
            <i class="fa fa-credit-card"></i> @lang('bt.create_reservation')
        </a>
    </div>
    <div class="clearfix"></div>
</section>
<section class="content">
    @include('layouts._alerts')
    <div class="card ">
        <div class="card-body">
            <form action="{{ route('reservations.store') }}" method="post">
                @csrf
                <label>@lang('bt.hotel') :</label>
                <input type="text" name="hotel" class="form-control">
                <br>
                <label>@lang('bt.name') :</label>
                <input type="text" name="name" class="form-control">
                <br>
                <label>@lang('bt.email') :</label>
                <input type="email" name="email" class="form-control">
                <br>
                <label>@lang('bt.start_time') :</label>
                <input type="datetime-local" name="start_time" class="form-control">
                <br>
                <label>@lang('bt.check_out') :</label>
                <input type="datetime-local" name="end_time" class="form-control">
                <br>
                <label>@lang('bt.description') :</label>
                <input type="text" name="description" class="form-control">
                <br>
                <label>@lang('bt.client') :</label>
                <div class="form-group">
                    <select name="client_id" id="client_id" class="form-control" required>
                        @foreach(\BT\Modules\Clients\Models\Client::pluck('name', 'id') as $clientId => $clientName)
                            <option value="{{ $clientId }}" {{ old('client_id') == $clientId ? 'selected' : '' }}>{{ $clientName }}</option>
                        @endforeach
                    </select>
                </div>
                <label>@lang('bt.vendor') :</label>
                <div class="form-group">
                    <select name="vendor_id" id="vendor_id" class="form-control" required>
                        @foreach(\BT\Modules\Vendors\Models\Vendor::pluck('name', 'id') as $vendorId => $vendorName)
                            <option value="{{ $vendorId }}" {{ old('vendor_id') == $vendorId ? 'selected' : '' }}>{{ $vendorName }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group ">
                    <div class="input-group d-flex justify-content-center">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" id="mins">
                          <b> - </b>
                        </button>
                      </span>
                        <input type="number" name="quantity" class="form-control col-1" value="0" id="quantity">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" id="plus">
                        <b> + </b>
                        </button>
                      </span>
                    </div>
                </div>
                <div id="rooms">

                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">@lang('bt.create_reservation')</button>
            </form>
                    <a href="{{ route('reservations.index') }}" class="btn btn-primary">@lang('bt.back_to_list')</a>
                </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(() => {
        function webcontent(name,index) {
            return  $html = "<div class='border p-3 mb-3'>            <div class='form-group d-flex'>            <label class='col-1'> Room "+name+" : </label>        <div class='input-group'>            <select class='form-control col-6' name='rooms["+ index +"][type]'>                <option value='s'>Standard Room</option>                <option value='r'>Special Room</option>            </select>        </div>        <div class='input-group'>            <select class='form-control col-6' name='rooms["+index+"][room_formula]'>                <option value='d'>Demi pension</option>                <option value='d2'>Demi pension 2</option>            </select>"+
                "</div>        <div class='input-group'>            <input type='text' placeholder='Purchase Price' class='form-control col-6' name='rooms["+index+"][purchase_price]' aria-describedby='basic-addon2'/>            <div class='input-group-prepend'>                <span class='input-group-text' id='basic-addon2'>TND</span>            </div>        </div>        <div class='input-group'>            <input type='text' placeholder='Selling Price' name='rooms["+index+"][selling_price]' class='form-control col-6' aria-describedby='basic-addon2'/>            <div class='input-group-prepend'>                <span class='input-group-text' id='basic-addon2'>TND</span>"+
                "</div>        </div>    </div>        <label>Adults :</label>        <div class='form-group'>            <select name='rooms["+index+"][adults_number]' class='form-control' required>                <option value='1'> 1 </option>                <option value='2'> 2 </option>                <option value='3'> 3 </option>               <option value='4'> 4 </option>                <option value='5'> 5 </option>            </select>        </div>        <div class='form-group d-flex'>            <div class='input-group'>                <select class='form-control col-6' name='type'>"+
                "<option>Mr</option>                    <option>Mrs</option>                </select>            </div>            <input type='text' name='name' class='form-control'>        </div>        <label>Kids :</label>        <div class='form-group'>           <select name='rooms["+index+"][kids_number]' class='form-control' required>                <option value='1'> 1 </option>                <option value='2'> 2 </option>                <option value='3'> 3 </option>                <option value='4'> 4 </option>                <option value='5'> 5 </option>"+
                "</select>        </div>    </div>        ";
        }

            function roomsNumber(number)
            {
                let content;
                if(number == 0){
                    content = "";
                }else {
                    for (let i = 0; i < number; i++) {
                        content += webcontent(i+1, i);
                    }
                }
                $('#rooms').html(content);
            }
        $('#plus').click(() => {
            document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value) + 1;
            roomsNumber(parseInt(document.getElementById('quantity').value));
        });
        $('#mins').click(() => {
            if(parseInt(document.getElementById('quantity').value) > 0)
            {
                if(parseInt(document.getElementById('quantity').value) == 0)
                {
                    roomsNumber(0);
                }else{
                    document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value) - 1;
                    roomsNumber(parseInt(document.getElementById('quantity').value));
                }
            }
        });

    });
</script>
@stop


