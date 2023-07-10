<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed projects table
        DB::table('projects')->insert([
            [
                'title' => 'boolzap',
                'description' => 'Whatsup clone using VUE JS',
                'project_url' => 'https://github.com/andriy-kolokolov/vue-boolzapp',
            ],
            [
                'title' => 'Java CRUD and tests',
                'description' => 'DAO Pattern. CRUD methods and tests JAVA HIBERNATE',
                'project_url' => 'https://github.com/andriy-kolokolov/java-hibernate-jdbc-database-manager',
            ],
            [
                'title' => 'Java Roman Calculator',
                'description' => 'Just a simple Roman calculator using a hashmap to convert an integer to a Roman numeral. Inspired to create it after completing the LeetCode task "https://leetcode.com/problems/roman-to-integer/"',
                'project_url' => 'https://github.com/andriy-kolokolov/java-roman-calculator',
            ],
        ]);

        // Seed project_languages table
        DB::table('projects_programming_languages')->insert([
            [
                'programming_language' => 'JS',
            ],
            [
                'programming_language' => 'HTML',
            ],
            [
                'programming_language' => 'SASS',
            ],
            [
                'programming_language' => 'Java',
            ],
            [
                'programming_language' => 'Java',
            ],
        ]);

        // Seed project_frameworks table
        DB::table('projects_frameworks')->insert([
            [
                'project_id' => 1,
                'framework' => 'Vue.js',
            ],
            [
                'project_id' => 2,
                'framework' => 'Hibernate',
            ],
            [
                'project_id' => 2,
                'framework' => 'Maven',
            ],
            [
                'project_id' => 2,
                'framework' => 'JDBC',
            ],
        ]);
//        $projects = [
//            [
//                'title' => 'boolzap',
//                'programming_languages' => ['JS', 'HTML', 'SASS'],
//                'frameworks' => ['Vue.js'],
//                'description' => 'Boolzapp - a (not very) innovative messaging platform',
//                'project_url' => 'https://github.com/andriy-kolokolov/vue-boolzapp',
//            ],
//            [
//                'title' => 'CRUD methods and tests JAVA HIBERNATE',
//                'programming_languages' => ['Java'],
//                'frameworks' => ['Hibernate', 'Maven', 'JDBC'],
//                'description' => 'DAO Pattern. Used technologies: Maven, Hibernate, JDBC.',
//                'project_url' => 'https://github.com/andriy-kolokolov/java-hibernate-jdbc-database-manager',
//            ],
//            [
//                'title' => 'Java Roman Calculator',
//                'programming_languages' => ['JS', 'HTML', 'SASS'],
//                'frameworks' => [],
//                'description' => 'Just a simple Roman calculator using a hashmap to convert an integer to a Roman numeral. Inspired to create it after completing the LeetCode task "https://leetcode.com/problems/roman-to-integer/"',
//                'project_url' => 'https://github.com/andriy-kolokolov/java-roman-calculator',
//            ],
//        ];
//        foreach ($projects as $project) {
//            Project::create($project);
//        }

    }
}
