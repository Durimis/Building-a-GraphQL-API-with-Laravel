<?php

// app/GraphQL/Mutations/EnrollStudentMutation.php

namespace App\GraphQL\Mutations;

use App\Models\Student;
use App\Models\Subject;

class EnrollStudentMutation
{
    public function resolve($rootValue, array $args): bool
    {
        $student = Student::find($args['studentId']);
        $subject = Subject::find($args['subjectId']);

        $student->subjects()->attach($subject);

        return true;
    }
}

