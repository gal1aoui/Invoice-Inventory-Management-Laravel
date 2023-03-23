<script type="text/javascript">
    $(function () {
        $('#btn-create-note').click(function () {
            if ($('#note_content').val() !== '') {
                @if (isset($showPrivateCheckbox) and $showPrivateCheckbox == true)
                    showPrivateCheckbox = 1;
                if ($('#private').prop('checked')) {
                    isPrivate = 1;
                }
                else {
                    isPrivate = 0;
                }
                @else
                    showPrivateCheckbox = 0;
                isPrivate = 0;
                @endif
                $.post('{{ route('notes.create') }}', {
                    model: '{{ addslashes($model) }}',
                    model_id: {{ $object->id }},
                    note: $('#note_content').val(),
                    isPrivate: isPrivate,
                    showPrivateCheckbox: showPrivateCheckbox
                }).done(function (response) {
                    $('#note_content').val('');
                    $('#private').prop('checked', false);
                    $('#notes-list').html(response);
                });
            }
        });

        @if (!auth()->user()->client_id)
        $(document).on('click', '.delete-note', function () {
            noteId = $(this).data('note-id');
            $('#note-' + noteId).hide();
            $.post("{{ route('notes.delete') }}", {
                id: noteId
            });
        });
        @endif
    });
</script>

<div class="row">
    <div class="col-lg-12">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="thead text-white" style="background-color: rgb(149, 97, 226);">
                <tr>
                    <th scope="col">@lang('bt.id')</th>
                    <th scope="col">@lang('bt.hotel')</th>
                    <th scope="col">@lang('bt.name')</th>
                    <th scope="col">@lang('bt.email')</th>
                    <th scope="col">@lang('bt.check_in')</th>
                    <th scope="col">@lang('bt.check_out')</th>
                    <th scope="col">@lang('bt.reserved')</th>
                    <th scope="col">@lang('bt.description')</th>
                    <th scope="col">@lang('bt.client')</th>
                    <th scope="col">@lang('bt.vendor')</th>
                    <th scope="col">@lang('bt.actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reservations as $reservation)
                    <tr scope="row">
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->hotel }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->start_time }}</td>
                        <td>{{ $reservation->end_time }}</td>
                        <td>
                            @if($reservation->used == 1) @lang('bt.reserved') @endif
                            @if($reservation->used == 0) @lang('bt.available') @endif
                        </td>
                        <td>{{ $reservation->description }}</td>
                        <td>{{ optional($reservation->client)->name ?? 'N/A' }}</td>
                        <td>{{ optional($reservation->vendor)->name ?? 'N/A' }}</td>
                        <td class="d-flex justify-content-around">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    @lang('bt.options') </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ route('reservations.edit', $reservation->id) }}"><i class="fa fa-edit"></i> @lang('bt.edit')</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"><i class="fa fa-trash-alt"></i> @lang('bt.delete')</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
