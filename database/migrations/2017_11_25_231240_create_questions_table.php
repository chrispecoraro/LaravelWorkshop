<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Question;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->text('label');
            $table->timestamps();
        });

        Question::create(['label' => 'How old are you?']);
        Question::create(['label' => 'Are you a man or a woman?']);
        Question::create(['label' => 'If you are a woman, have you ever been diagnosed with gestational diabetes?']);
        Question::create(['label' => 'Do you have a mother, father, sister, or brother with diabetes?']);
        Question::create(['label' => 'Have you ever been diagnosed with high blood pressure?']);
        Question::create(['label' => 'Are you physically active?']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
