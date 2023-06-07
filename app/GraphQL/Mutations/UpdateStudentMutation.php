<?php

// app/GraphQL/Mutations/UpdateStudentMutation.php

namespace App\GraphQL\Mutations;

use App\Models\Student;

class UpdateStudentMutation
{
    public function resolve($rootValue, array $args): Student
    {
        $student = Student::findOrFail($args['studentId']);

        $student->update($args['input']);

        return $student;
    }
}
