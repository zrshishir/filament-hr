<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['tag' => 'PHP'],
            ['tag' => 'Laravel'],
            ['tag' => 'Vue'],
            ['tag' => 'React'],
            ['tag' => 'Angular'],
            ['tag' => 'Javascript'],
            ['tag' => 'CSS'],
            ['tag' => 'HTML'],
            ['tag' => 'Bootstrap'],
            ['tag' => 'Tailwind'],
            ['tag' => 'SASS'],
            ['tag' => 'SCSS'],
            ['tag' => 'MySQL'],
            ['tag' => 'PostgreSQL'],
            ['tag' => 'MongoDB'],
            ['tag' => 'Redis'],
            ['tag' => 'Memcached'],
            ['tag' => 'Git'],
            ['tag' => 'Github'],
            ['tag' => 'Bitbucket'],
            ['tag' => 'Gitlab'],
            ['tag' => 'AWS'],
            ['tag' => 'Digital Ocean'],
            ['tag' => 'Heroku'],
            ['tag' => 'Vagrant'],
            ['tag' => 'Homestead'],
            ['tag' => 'Docker'],
            ['tag' => 'Kubernetes'],
            ['tag' => 'Nginx'],
            ['tag' => 'Apache'],
            ['tag' => 'Linux'],
            ['tag' => 'Ubuntu'],
            ['tag' => 'CentOS'],
            ['tag' => 'Debian'],
            ['tag' => 'Fedora'],
            ['tag' => 'Windows'],
            ['tag' => 'MacOS'],
            ['tag' => 'Android'],
            ['tag' => 'iOS'],
            ['tag' => 'Flutter'],
            ['tag' => 'React Native'],
            ['tag' => 'Ionic'],
            ['tag' => 'Cordova'],
            ['tag' => 'PhoneGap'],
            ['tag' => 'Xamarin'],
            ['tag' => 'Java'],
            ['tag' => 'Kotlin'],
            ['tag' => 'Swift'],
            ['tag' => 'Objective-C'],
            ['tag' => 'C#'],
            ['tag' => 'C++'],
            ['tag' => 'Python'],
            ['tag' => 'Django'],
            ['tag' => 'Flask'],
            ['tag' => 'Ruby'],
            ['tag' => 'Ruby on Rails'],
            ['tag' => 'Node.js'],
            ['tag' => 'Express.js'],
        ];

        DB::collection('tags')->insert($tags);
    }
}
