<?php

namespace App\GraphQL\Queries;

use App\User;
use GraphQL\Type\Definition\Type;

class UsersQuery extends BaseQuery
{

    protected $model = User::class;
    protected $type = "user";

    protected $attributes = [
        'name' => 'Users query'
    ];

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'email' => ['name' => 'email', 'type' => Type::string()]
        ];
    }

}
