<?php

use Illuminate\Database\Seeder;
use App\AnswerUser;
use App\Question;
use App\User;
class UserAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $users = User::all();
            $users->each(function($user){
                $questions = Question::all();
                $questions->each(function($question) use ($user){
                    $question->load('answers');

                    $answer = $question->answers->random();

//                    $answers_array_key = array_rand($answers_array);
//                    $answer = $answers_array[$answers_array_key];

                    AnswerUser::create(['user_id'=>$user->id,'answer_id'=> $answer->id]);
                });
            });
    }
}
