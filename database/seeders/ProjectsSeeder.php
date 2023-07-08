<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'boolzap',
                'description' => 'Boolzapp - a (not very) innovative messaging platform',
                'project_url' => 'https://github.com/andriy-kolokolov/vue-boolzapp',
            ],
            [
                'title' => 'CRUD methods and tests JAVA HIBERNATE',
                'description' => 'DAO Pattern. Used technologies: Maven, Hibernate, JDBC.',
                'project_url' => 'https://github.com/andriy-kolokolov/java-hibernate-jdbc-database-manager',
            ],
            [
                'title' => 'Java Roman Calculator',
                'description' => 'Just a simple Roman calculator using a hashmap to convert an integer to a Roman numeral. I was inspired to create it after completing the LeetCode task "https://leetcode.com/problems/roman-to-integer/"',
                'project_url' => 'https://github.com/andriy-kolokolov/java-roman-calculator',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

    }
}
