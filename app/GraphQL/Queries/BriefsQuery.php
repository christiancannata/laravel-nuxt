<?php

namespace App\GraphQL\Queries;

use App\Brief;
use GraphQL\Type\Definition\Type;

class BriefsQuery extends BaseQuery
{

    protected $model = Brief::class;
    protected $type = "brief";

    protected $attributes = [
        'name' => 'Briefs query'
    ];

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'company_id' => ['name' => 'company_id', 'type' => Type::int()],
            'user_id' => ['name' => 'user_id', 'type' => Type::int()],
            'name' => ['name' => 'name', 'type' => Type::string()]
        ];
    }

}
