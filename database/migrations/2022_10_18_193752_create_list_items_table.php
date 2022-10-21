<?php

use App\Models\ListItemModel;
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
        Schema::create('list_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_id')->constrained('lists');
            $table->foreignId('item_id')->constrained('items');
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        ListItemModel::firstOrCreate([
            'list_id' => '1',
            'item_id' => '1'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '1',
            'item_id' => '2'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '1',
            'item_id' => '3'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '2',
            'item_id' => '1'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '2',
            'item_id' => '2'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '2',
            'item_id' => '4'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '3',
            'item_id' => '1'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '3',
            'item_id' => '2'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '4',
            'item_id' => '1'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '5',
            'item_id' => '4'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '5',
            'item_id' => '3'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '6',
            'item_id' => '4'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '6',
            'item_id' => '5'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '6',
            'item_id' => '6'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '7',
            'item_id' => '4'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '7',
            'item_id' => '5'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '8',
            'item_id' => '4'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '8',
            'item_id' => '6'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '9',
            'item_id' => '6'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '10',
            'item_id' => '4'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '10',
            'item_id' => '5'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '10',
            'item_id' => '6'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '11',
            'item_id' => '7'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '11',
            'item_id' => '8'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '11',
            'item_id' => '9'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '12',
            'item_id' => '7'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '12',
            'item_id' => '8'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '13',
            'item_id' => '8'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '13',
            'item_id' => '9'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '14',
            'item_id' => '9'
        ]);
        ListItemModel::firstOrCreate([
            'list_id' => '15',
            'item_id' => '7'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_items');
    }
};
