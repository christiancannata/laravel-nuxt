<?php

namespace App\GraphQL\Queries;

use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class BaseQuery extends Query
{

    public function type(): Type
    {
        return Type::listOf(GraphQL::type($this->type));
    }


    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        // $info->getFieldSelection($depth = 3);

        // If your GraphQL query exceeds the default nesting query, you can increase it here:
        // $fields = $getSelectFields(11);

        /** @var SelectFields $fields */
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        $queryBuilder = $this->model::select($select)->with($with);

        if (!empty($args)) {
            foreach ($args as $key => $value) {
                $queryBuilder->where($key, $value);
            }
        }

        return $queryBuilder->get();
    }
}
