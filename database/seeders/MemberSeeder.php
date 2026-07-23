<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::create([
            'student_number' => '2023-0001',
            'name' => 'Juan Dela Cruz',
            'course' => 'BS Computer Science',
            'year_level' => '3rd Year',
            'position' => 'President',
            'status' => 'Active',
        ]);

        Member::create([
            'student_number' => '2023-0002',
            'name' => 'Maria Santos',
            'course' => 'BS Information Technology',
            'year_level' => '4th Year',
            'position' => 'Vice President',
            'status' => 'Active',
        ]);

        Member::create([
            'student_number' => '2023-0003',
            'name' => 'Pedro Reyes',
            'course' => 'BS Computer Science',
            'year_level' => '2nd Year',
            'position' => 'Secretary',
            'status' => 'Active',
        ]);

        Member::create([
            'student_number' => '2023-0004',
            'name' => 'Ana Lopez',
            'course' => 'BS Accountancy',
            'year_level' => '3rd Year',
            'position' => 'Treasurer',
            'status' => 'Active',
        ]);

        Member::create([
            'student_number' => '2023-0005',
            'name' => 'Jose Ramirez',
            'course' => 'BS Information Technology',
            'year_level' => '1st Year',
            'position' => 'Member',
            'status' => 'Active',
        ]);

        Member::create([
            'student_number' => '2023-0006',
            'name' => 'Liza Fernandez',
            'course' => 'BS Computer Science',
            'year_level' => '4th Year',
            'position' => 'Member',
            'status' => 'Inactive',
        ]);
    }
}