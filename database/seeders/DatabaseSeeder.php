<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'Aung Min Oo',
            'email'=>'aungminoo@gmail.com',
            'password'=>Hash::make('aungminoo'),
            'image'=>'/images/profile/default.png',
        ]);

        ##tag
        Tag::create([
            'name'=>'Frontend Development',
            'slug'=>Str::slug('Frontend Development')
        ]);
        Tag::create([
            'name'=>'Backend Development',
            'slug'=>Str::slug('Backend Development')
        ]);
        Tag::create([
            'name'=>'Android Development',
            'slug'=>Str::slug('Android Development')
        ]);
        Tag::create([
            'name'=>'IOS Development',
            'slug'=>Str::slug('IOS Development')
        ]);

        ##question
        Question::create([
            'user_id'=>1,
            'slug'=>Str::slug('Laravel 8 is interesting?'),
            'title'=>'Laravel 8 is interesting?',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);

        ##question tag
        QuestionTag::create([
            'question_id'=>1,
            'tag_id'=>1,
        ]);

        QuestionTag::create([
            'question_id'=>1,
            'tag_id'=>2,
        ]);
    }
}
