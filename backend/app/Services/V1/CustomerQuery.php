<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

class CustomerQuery
{
    protected $safeParameters = [
        'name' => ['eq'],
        'type' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'email' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt'],
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];

    /**
     * Transform the request query into a filterable array for Eloquent.
     *
     * @param Request $request
     * @return array
     */
    public function transform(Request $request): array
    {
        $filters = [];

        foreach ($this->safeParameters as $param => $operators) {
            $value = $request->query($param);

            if ($value) {
                $column = $this->columnMap[$param] ?? $param;
                
                foreach ($operators as $operator) {
                    if (isset($value[$operator])) {
                        $filters[] = [$column, $this->operatorMap[$operator], $value[$operator]];
                    }
                }
            }
        }

        return $filters;
    }
}
