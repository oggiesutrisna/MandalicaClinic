<?php

namespace App\DataTables;

use App\Models\Pasien;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PasiensDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', '#');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pasien $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pasien $model)
    {
        return $model->newQuery();
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
                    ->Ajax([
                        'url' => route('pasiens.index'),
                        'type' => 'GET',
                        'pipeline' => 0,
                        'data' => "function(data) {
                            _token = '{{csrf_token()}}',
                            data.status = $(select[name=status]').val();
                        }",
                    ])
                    ->parameters($this->getBuilderParameters())
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('Nama Pasien'),
            Column::make('No Handphone'),
            Column::make('Tempat,Tanggal Lahir'),
            Column::make('Jenis Kelamin'),
            Column::make('Tanggal Appointment'),
            Column::make('Jenis Appointment'),
            Column::make('Keterangan'),
            Column::computed('Aksi')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
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
        return 'Pasiens_' . date('YmdHis');
    }
}
