<?php

use App\Models\TagModel;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        TagModel::firstOrCreate(['name' => 'Ação']);
        TagModel::firstOrCreate(['name' => 'Animação']);
        TagModel::firstOrCreate(['name' => 'Artes Marciais']);
        TagModel::firstOrCreate(['name' => 'Aventura']);
        TagModel::firstOrCreate(['name' => 'Biografia']);
        TagModel::firstOrCreate(['name' => 'Comédia']);
        TagModel::firstOrCreate(['name' => 'Documentário']);
        TagModel::firstOrCreate(['name' => 'Drama']);
        TagModel::firstOrCreate(['name' => 'Espionagem']);
        TagModel::firstOrCreate(['name' => 'Guerra']);
        TagModel::firstOrCreate(['name' => 'Infantil']);
        TagModel::firstOrCreate(['name' => 'Mistério']);
        TagModel::firstOrCreate(['name' => 'Musical']);
        TagModel::firstOrCreate(['name' => 'Romance']);
        TagModel::firstOrCreate(['name' => 'Sci-Fi']);
        TagModel::firstOrCreate(['name' => 'Suspense']);
        TagModel::firstOrCreate(['name' => 'Terror']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
};
