<?php

namespace App\GraphQL\Types;

use App\Brief;
use App\GraphQL\Fields\FormattableDate;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class BriefType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Brief',
        'description' => 'A brief',
        'model' => Brief::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the brief',
                // Use 'alias', if the database column is different from the type name.
                // This is supported for discrete values as well as relations.
                // - you can also use `DB::raw()` to solve more complex issues
                // - or a callback returning the value (string or `DB::raw()` result)
                //'alias' => 'user_id',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of brief',
            ],
            'date_from' => [
                'type' => Type::string(),
                'description' => 'The date from of brief',
            ],
            'date_to' => [
                'type' => Type::string(),
                'description' => 'The date to of brief',
            ],
            'daily_rate_from' => [
                'type' => Type::float(),
                'description' => 'The daily rate from range of brief',
            ],
            'daily_rate_to' => [
                'type' => Type::float(),
                'description' => 'The daily rate to range of brief',
            ],
            'seniority' => [
                'type' => Type::string(),
                'description' => 'The seniority of brief',
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'The description of brief',
            ],
            'address' => [
                'type' => Type::string(),
                'description' => 'The address of brief',
            ],
            'postcode' => [
                'type' => Type::string(),
                'description' => 'The postcode of brief',
            ],
            'city' => [
                'type' => Type::string(),
                'description' => 'The city of brief',
            ],
            'country' => [
                'type' => Type::string(),
                'description' => 'The country of brief',
            ],
            'accept_remote' => [
                'type' => Type::boolean(),
                'description' => 'The accept_remote of brief',
            ],
            'flexible_period' => [
                'type' => Type::boolean(),
                'description' => 'The flexible_period of brief',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of brief',
            ],
        ];
    }

    // If you want to resolve the field yourself, you can declare a method
    // with the following format resolve[FIELD_NAME]Field()
    //protected function resolveEmailField($root, $args)
    //{
    //    return strtolower($root->email);
    //}

}
