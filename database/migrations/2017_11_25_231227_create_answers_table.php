<?php

use App\Answer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('question_id');
            $table->text('label');
            $table->unsignedTinyInteger('point_value');
            $table->timestamps();
        });

        Answer::create(['label' => 'Less than 40 years (0 points)', 'question_id' => 1, 'point_value' => 0]);
        Answer::create(['label' => '40—49 years (1 point)', 'question_id' => 1, 'point_value' => 1]);
        Answer::create(['label' => '50—59 years (2 points)', 'question_id' => 1, 'point_value' => 2]);
        Answer::create(['label' => '60 years or older (3 points)', 'question_id' => 1, 'point_value' => 3]);

        Answer::create(['label' => 'Man', 'question_id' => 2, 'point_value' => 1]);
        Answer::create(['label' => 'Woman', 'question_id' => 2, 'point_value' => 0]);

        Answer::create(['label' => 'Yes', 'question_id' => 3, 'point_value' => 1]);
        Answer::create(['label' => 'No', 'question_id' => 3, 'point_value' => 0]);

        Answer::create(['label' => 'Yes', 'question_id' => 4, 'point_value' => 1]);
        Answer::create(['label' => 'No', 'question_id' => 4, 'point_value' => 0]);

        Answer::create(['label' => 'Yes', 'question_id' => 5, 'point_value' => 1]);
        Answer::create(['label' => 'No', 'question_id' => 5, 'point_value' => 0]);

        Answer::create(['label' => 'Yes', 'question_id' => 6, 'point_value' => 1]);
        Answer::create(['label' => 'No', 'question_id' => 6, 'point_value' => 0]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
