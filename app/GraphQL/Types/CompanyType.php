<?php

namespace App\GraphQL\Types;

use App\Company;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CompanyType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Company',
        'description' => 'A company',
        'model' => Company::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the user',
                // Use 'alias', if the database column is different from the type name.
                // This is supported for discrete values as well as relations.
                // - you can also use `DB::raw()` to solve more complex issues
                // - or a callback returning the value (string or `DB::raw()` result)
                //'alias' => 'user_id',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of company',
            ]
        ];
    }

    // If you want to resolve the field yourself, you can declare a method
    // with the following format resolve[FIELD_NAME]Field()
    //protected function resolveEmailField($root, $args)
    //{
    //    return strtolower($root->email);
    //}

}
