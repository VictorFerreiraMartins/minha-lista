<?php

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 128);
            $table->string('username', 64)->unique();
            $table->string('nickname', 64)->unique();
            $table->string('email', 128)->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        UserModel::firstOrCreate([
            'fullname' => 'TestUser 1',
            'username' => 'test.user.1',
            'nickname' => 'Test User 1 - Nick',
            'email' => 'test1@example.com',
            'password' => Hash::make('my_password'),
        ]);
        UserModel::firstOrCreate([
            'fullname' => 'TestUser 2',
            'username' => 'test.user.2',
            'nickname' => 'Test User 2 - Nick',
            'email' => 'test2@example.com',
            'password' => Hash::make('my_password'),
        ]);
        UserModel::firstOrCreate([
            'fullname' => 'TestUser 3',
            'username' => 'test.user.3',
            'nickname' => 'Test User 3 - Nick',
            'email' => 'test3@example.com',
            'password' => Hash::make('my_password'),
        ]);
        UserModel::firstOrCreate([
            'fullname' => 'TestUser 4',
            'username' => 'test.user.4',
            'nickname' => 'Test User 4 - Nick',
            'email' => 'test4@example.com',
            'password' => Hash::make('my_password'),
        ]);
        UserModel::firstOrCreate([
            'fullname' => 'TestUser 5',
            'username' => 'test.user.5',
            'nickname' => 'Test User 5 - Nick',
            'email' => 'test5@example.com',
            'password' => Hash::make('my_password'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
