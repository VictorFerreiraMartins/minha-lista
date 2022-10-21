<?php

use App\Models\RatingModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('item_id')->constrained('items');
            $table->smallInteger('rating');
            $table->string('comment', 256)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        RatingModel::firstOrCreate([
            'user_id' => '1',
            'item_id' => '1',
            'rating' => '5',
            'comment' => 'Gostei muito!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '2',
            'item_id' => '2',
            'rating' => '4',
            'comment' => 'Gostei pouco!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '3',
            'item_id' => '3',
            'rating' => '5',
            'comment' => 'Não gostei!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '4',
            'item_id' => '4',
            'rating' => '4',
            'comment' => 'Gostei muito!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '5',
            'item_id' => '5',
            'rating' => '4',
            'comment' => 'Gostei pouco!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '1',
            'item_id' => '6',
            'rating' => '5',
            'comment' => 'Não gostei!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '2',
            'item_id' => '7',
            'rating' => '4',
            'comment' => 'Gostei muito!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '3',
            'item_id' => '8',
            'rating' => '5',
            'comment' => 'Gostei pouco!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '4',
            'item_id' => '9',
            'rating' => '4',
            'comment' => 'Não gostei!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '5',
            'item_id' => '1',
            'rating' => '5',
            'comment' => 'Gostei muito!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '1',
            'item_id' => '2',
            'rating' => '4',
            'comment' => 'Gostei pouco!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '2',
            'item_id' => '3',
            'rating' => '5',
            'comment' => 'Não gostei!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '3',
            'item_id' => '4',
            'rating' => '4',
            'comment' => 'Gostei muito!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '4',
            'item_id' => '5',
            'rating' => '4',
            'comment' => 'Gostei pouco!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '5',
            'item_id' => '6',
            'rating' => '5',
            'comment' => 'Não gostei!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '1',
            'item_id' => '7',
            'rating' => '4',
            'comment' => 'Gostei muito!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '2',
            'item_id' => '8',
            'rating' => '5',
            'comment' => 'Gostei pouco!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '3',
            'item_id' => '9',
            'rating' => '4',
            'comment' => 'Não gostei!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '2',
            'item_id' => '10',
            'rating' => '5',
            'comment' => 'Gostei muito!'
        ]);
        RatingModel::firstOrCreate([
            'user_id' => '5',
            'item_id' => '10',
            'rating' => '4',
            'comment' => 'Gostei pouco!'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
