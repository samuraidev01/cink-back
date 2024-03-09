<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'C Programming Tutorial for Beginners',
            'description' => 'This course will give you a full introduction into all of the core concepts in the C programming language',
            'link' => 'https://www.youtube.com/watch?v=KJgsSFOSQv0'
        ]);

        Course::create([
            'title' => 'C++ Programming Tutorial for Beginners',
            'description' => 'This course will give you a full introduction into all of the core concepts in the C++ programming language',
            'link' => 'https://www.youtube.com/watch?v=vLnPwxZdW4Y'
        ]);

        Course::create([
            'title' => 'JavaScript Programming Tutorial for Beginners',
            'description' => 'This course will give you a full introduction into all of the core concepts in the JavaScript programming language',
            'link' => 'https://www.youtube.com/watch?v=PkZNo7MFNFg'
        ]);

        Course::create([
            'title' => 'PHP Programming Tutorial for Beginners',
            'description' => 'This course will give you a full introduction into all of the core concepts in the PHP programming language',
            'link' => 'https://www.youtube.com/watch?v=OK_JCtrrv-c'
        ]);
    }
}
