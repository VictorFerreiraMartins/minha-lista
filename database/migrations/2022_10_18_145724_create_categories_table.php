<?php

use App\Models\CategoryModel;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        CategoryModel::firstOrCreate(['name' => 'Série']);
        CategoryModel::firstOrCreate(['name' => 'Filme']);
        CategoryModel::firstOrCreate(['name' => 'Anime']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
