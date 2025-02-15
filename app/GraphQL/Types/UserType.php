<?php

namespace App\GraphQL\Types;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user',
        'model' => User::class,
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
            'email' => [
                'type' => Type::string(),
                'description' => 'The email of user',
            ],
            'first_name' => [
                'type' => Type::string(),
                'description' => 'The first name of user',
            ],
            'last_name' => [
                'type' => Type::string(),
                'description' => 'The last name of user',
            ],
            'city' => [
                'type' => Type::string(),
                'description' => 'The city of user',
            ],
            'country' => [
                'type' => Type::string(),
                'description' => 'The country of user',
            ],
            'role' => [
                'type' => Type::string(),
                'description' => 'The role of user',
            ],
            /* RELATIONS */
            'companies' => [
                'type' => Type::listOf(\GraphQL::type('company')),
                'description' => 'User companies',
            ],
            'skills' => [
                'type' => Type::listOf(\GraphQL::type('skill')),
                'description' => 'User skills',
            ]

            // Uses the 'getIsMeAttribute' function on our custom User model
            /*'isMe' => [
                'type' => Type::boolean(),
                'description' => 'True, if the queried user is the current user',
                'selectable' => false, // Does not try to query this from the database
            ]*/
        ];
    }

    // If you want to resolve the field yourself, you can declare a method
    // with the following format resolve[FIELD_NAME]Field()
    //protected function resolveEmailField($root, $args)
    //{
    //    return strtolower($root->email);
    //}

}
