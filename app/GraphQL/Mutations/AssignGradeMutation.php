<?php
// app/GraphQL/Mutations/AssignGradeMutation.php

namespace App\GraphQL\Mutations;

use App\Models\Student;
use App\Models\Subject;

class AssignGradeMutation
{
    public function resolve($rootValue, array $args): bool
    {
        $student = Student::find($args['studentId']);
        $subject = Subject::find($args['subjectId']);

        $student->subjects()->updateExistingPivot($subject, ['grade' => $args['grade']]);

        return true;
    }
}
