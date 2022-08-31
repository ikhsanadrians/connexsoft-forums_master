<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rate;
use App\Models\Rank;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\UserRank;
use App\Models\Category;
use App\Models\Answer;
use App\Models\Banned;
use App\Models\Comment;
use App\Models\Question;
use App\Models\Rating;
Use App\Models\Report;
use App\Models\ReportCategory;
use App\Models\Respond;
use App\Models\Thank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          "Name" => "Muhammad Ramdani",
          "Username" => "RamdaniXX1",
          "Email" => "ramdani234@gmail.com",
          "Password" => Hash::make("Ramdani234"),
        ]);

        User::create([
          "Name" => "Raya Ar-Rizky",
          "Username" => "RayaSquirel",
          "Email" => "rayaarizky238@gmail.com",
          "Password" => Hash::make("rayadudung234"),
        ]);

        User::create([
          "Name" => "Feris Al-Dolphine",
          "Username" => "dolpineris",
          "Email" => "dolphineferis@gmail.com",
          "Password" => Hash::make("ferisaldolpin"),
        ]);

        User::create([
          "Name" => "Ferdi Suspectius Tanto",
          "Username" => "Amogusferdi",
          "Email" => "ferdisus@gmail.com",
          "Password" => Hash::make("ferdisusamogus"),
        ]);


        Role::create(["name" => "Pengguna"]);
        Role::create(["name" => "Moderator"]);
        Rank::create(["name" => "Pemula"]);
        Rank::create(["name" => "Gemar Membantu"]);
        Rank::create(["name" => "Ambisius"]);
        Rank::create(["name" => "Terpelajar"]);
        Rank::create(["name" => "Pakar"]);
        Rank::create(["name" => "Si Hebat"]);
        Rank::create(["name" => "Jenius"]);

        RoleUser::create(["user_id" => 1, "role_id" => 2 , "role_id" => 1]);
        RoleUser::create(["user_id" => 2, "role_id" => 1]);
        UserRank::create(["user_id" => 1, "rank_id" => 6]);
        UserRank::create(["user_id" => 2, "rank_id" => 4]);
        UserRank::create(["user_id" => 4, "rank_id" => 6]);

        Category::create(["name" => "Object Oriented Programming" ]);
        Category::create(["name" => "Cloud Computing" ]);
        Category::create(["name" => "Operating System" ]);
        Category::create(["name" => "Server Management" ]);
        Category::create(["name" => "Web Programming" ]);
        Category::create(["name" => "User Interface" ]);
        Category::create(["name" => "Laravel" ]);


        Question::create(["title" => "Cara Ngoding Cepat", "user_id" => 1 , "point" => 69 , "status" => "active"]);
        Question::create(["title" => "Saya Memiliki Error Nih Ada Yang Bisa Bantu Ga?", "user_id" => 2 , "point" => 29 , "status" => "active"]);
        Question::create(["title" => "Ada Yang Tau Cara buat pasport laravel", "user_id" => 3 , "point" => 69 , "status" => "active"]);
        Question::create(["title" => "ingfokan framework mantap pengganti php", "user_id" => 4 , "point" => 69 , "status" => "active"]);

        Answer::create(["user_id" => 2 , "content" => "ya ndak tau kok tanya saya" , "question_id" => 1 , "is_thebest" => 1]);

        Comment::create(["content" => "jawab yang bener dek" , "question_id" => NULL , "answer_id" => 1 , "comment_id" => NULL , "user_id" => 1]);


        Thank::create(["answer_id"=> 1 , "user_id" => 2]);

        Rate::create(["name" => "Sangat Tidak Membantu"]);
        Rate::create(["name" => "Tidak Membantu"]);
        Rate::create(["name" => "Cukup Membantu"]);
        Rate::create(["name" => "Membantu"]);
        Rate::create(["name" => "Sangat Membantu"]);

        Rating::create(["answer_id"=> 1, "user_id"=>1,"rate_id"=>1]);




        ReportCategory::create(['name' => "Ngawur"]);
        ReportCategory::create(['name' => "Gajelas"]);
        ReportCategory::create(['name' => "Menggokil"]);
        ReportCategory::create(['name' => "Aneh"]);
        ReportCategory::create(['name' => "Agak Cringe"]);


        Report::create(["user_id"=>2 , "answer_id" => 1  , "status" => "correction"]);

        Respond::create(["moderator_id"=> 1, "report_id"=> 1, "message" => NULL , "action" => "Rejected"]);


        Banned::create([
            "user_id" => 2,
            "moderator_id" => 1,
            "start_date" => "2022-08-04",
            "end_date" => "2022-09-04",
        ]);
    }
}