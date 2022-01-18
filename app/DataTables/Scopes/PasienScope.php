<?php

namespace App\DataTables\Scopes;

use Yajra\DataTables\Contracts\DataTableScope;

class PasienScope implements DataTableScope
{
    /**
     * Apply a query scope.
     *
     * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
     * @return mixed
     */
    public function apply($query)
    {
        $filters = [
            'status',
        ];

        foreach ($filters as $field) {
            if ($this->request->has($field)) {
                if($this->request->get($field) !== null ) {
                    $query->where($field, '=', $this->request->get($field));
                }
            }
        }
        return $query;
    }
}
