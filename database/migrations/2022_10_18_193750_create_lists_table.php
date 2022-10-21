<?php

use App\Models\ListModel;
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
        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name', 64);
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        ListModel::firstOrCreate([
            'user_id' => '1',
            'name' => 'Meus filmes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '2',
            'name' => 'Meus filmes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '3',
            'name' => 'Meus filmes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '4',
            'name' => 'Meus filmes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '5',
            'name' => 'Meus filmes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '1',
            'name' => 'Minhas séries favoritas!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '2',
            'name' => 'Minhas séries favoritas!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '3',
            'name' => 'Minhas séries favoritas!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '4',
            'name' => 'Minhas séries favoritas!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '5',
            'name' => 'Minhas séries favoritas!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '1',
            'name' => 'Meus animes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '2',
            'name' => 'Meus animes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '3',
            'name' => 'Meus animes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '4',
            'name' => 'Meus animes favoritos!'
        ]);
        ListModel::firstOrCreate([
            'user_id' => '5',
            'name' => 'Meus animes favoritos!'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists');
    }
};
