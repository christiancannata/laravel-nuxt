<?php

namespace App\GraphQL\Types;

use App\Skill;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class SkillType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Skill',
        'description' => 'A skill',
        'model' => Skill::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the skill',
                // Use 'alias', if the database column is different from the type name.
                // This is supported for discrete values as well as relations.
                // - you can also use `DB::raw()` to solve more complex issues
                // - or a callback returning the value (string or `DB::raw()` result)
                //'alias' => 'user_id',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of skill',
            ],
            'type' => [
                'type' => Type::string(),
                'description' => 'The type of skill',
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
