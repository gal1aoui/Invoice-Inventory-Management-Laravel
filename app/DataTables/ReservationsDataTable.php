<?php

namespace BT\DataTables;

use BT\Modules\Reservation\Models\Reservation;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Column;

class ReservationsDataTable extends DataTable
{
    /**
     * Get query source of dataTable.
     *
     * @param Reservation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Reservation $model)
    {
        return $model;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->orderBy(1, 'desc');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')
                ->orderable(false)
                ->searchable(false)
                ->printable(false)
                ->exportable(false)
                ->className('bulk-record'),
            Column::make('hotel')
                ->title('Hotel'),
            Column::make('name')
                ->title('Reservation Name'),
            Column::make('email')
                ->title('Reservation e-mail'),
            Column::make('start_time')
                ->title('Reservation Starts'),
            Column::make('end_time')
                ->title('Reservation Ends'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(80)
                ->addClass('text-center'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Reservations_' . date('YmdHis');
    }
}
