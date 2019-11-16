<?php

namespace App\GraphQL\Queries;

use App\Company;
use GraphQL\Type\Definition\Type;

class CompaniesQuery extends BaseQuery
{

    protected $model = Company::class;
    protected $type = "company";

    protected $attributes = [
        'name' => 'Companies query'
    ];

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'name' => ['name' => 'name', 'type' => Type::string()]
        ];
    }

}
