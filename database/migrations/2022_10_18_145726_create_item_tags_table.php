<?php

use App\Models\ItemTagModel;
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
        Schema::create('item_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('items');
            $table->foreignId('tag_id')->constrained('tags');
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        ItemTagModel::firstOrCreate([
            'item_id' => 1,
            'tag_id' => 1
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 1,
            'tag_id' => 2
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 1,
            'tag_id' => 3
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 2,
            'tag_id' => 4
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 2,
            'tag_id' => 5
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 2,
            'tag_id' => 6
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 3,
            'tag_id' => 7
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 3,
            'tag_id' => 8
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 3,
            'tag_id' => 9
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 4,
            'tag_id' => 10
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 4,
            'tag_id' => 11
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 4,
            'tag_id' => 12
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 5,
            'tag_id' => 13
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 5,
            'tag_id' => 14
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 5,
            'tag_id' => 15
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 6,
            'tag_id' => 16
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 6,
            'tag_id' => 17
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 6,
            'tag_id' => 1
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 7,
            'tag_id' => 2
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 7,
            'tag_id' => 3
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 7,
            'tag_id' => 4
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 8,
            'tag_id' => 5
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 8,
            'tag_id' => 6
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 8,
            'tag_id' => 7
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 9,
            'tag_id' => 8
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 9,
            'tag_id' => 9
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 9,
            'tag_id' => 10
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 10,
            'tag_id' => 11
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 10,
            'tag_id' => 12
        ]);
        ItemTagModel::firstOrCreate([
            'item_id' => 10,
            'tag_id' => 13
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_tags');
    }
};
