<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Result;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::query()->count();

        $courses = Course::query()->count();

        for ($i = 1; $i <= $students; $i++) {
            $nroCourses = rand(1, 2);
            for ($j = 1; $j <= $nroCourses; $j++) {
                $courseId = rand(1, $courses);
                Result::query()
                    ->updateOrCreate(
                        [
                            'course_id' => $courseId,
                            'student_id' => $i
                        ],
                        [
                            'score' => Arr::random([null, 'A', 'B', 'C', 'D', 'E', 'F'])
                        ]
                    );
            }
        }
    }
}
