<?php

namespace App\GraphQL\Mutations;

use App\Models\Student;

class DeleteStudentMutation
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function resolve($_, array $args)
    {
        $student = Student::findOrFail($args['studentId']);

        return $student->delete();
    }
}
