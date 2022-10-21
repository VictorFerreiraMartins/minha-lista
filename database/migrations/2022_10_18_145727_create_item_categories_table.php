<?php

use App\Models\ItemCategoryModel;
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
        Schema::create('item_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('items');
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        ItemCategoryModel::firstOrCreate([
            'item_id' => 1,
            'category_id' => 2
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 2,
            'category_id' => 2
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 3,
            'category_id' => 2
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 4,
            'category_id' => 1
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 5,
            'category_id' => 1
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 6,
            'category_id' => 1
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 7,
            'category_id' => 3
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 8,
            'category_id' => 3
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 9,
            'category_id' => 3
        ]);
        ItemCategoryModel::firstOrCreate([
            'item_id' => 10,
            'category_id' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_categories');
    }
};
