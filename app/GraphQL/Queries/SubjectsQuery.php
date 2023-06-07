<?php

namespace App\GraphQL\Queries;

use App\Models\Subject;

final class SubjectsQuery
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Subject::all();
    }
}
