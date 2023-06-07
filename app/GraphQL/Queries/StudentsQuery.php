<?php

namespace App\GraphQL\Queries;

final class StudentsQuery
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Student::all();
    }
}
