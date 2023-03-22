<?php

namespace BT\DataTables;

use BT\Modules\Rooms\Models\Room;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Column;

class RoomsDataTable extends DataTable
{
    /**
     * Get query source of dataTable.
     *
     * @param Room $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Room $model)
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
            Column::make('purchase_price')
                ->title('Purchase Price'),
            Column::make('selling_price')
                ->title('Selling Price'),
            Column::make('adults_number')
                ->title('Adults Number'),
            Column::make('kids_number')
                ->title('Kids Number'),
            Column::make('number')
                ->title('Number'),
            Column::make('type')
                ->title('Type'),
            Column::make('room_formula')
                ->title('Room Formula'),
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
        return 'Rooms_' . date('YmdHis');
    }
}
