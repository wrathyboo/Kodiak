<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->foreignId('id')->constrained('users');
            $table->string('username')->unique();
            $table->string('avatar')->nullable();
            $table->string('phone',15)->unique()->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('steam_id')->unique()->nullable();
            $table->string('api_key')->unique()->nullable();
            // $table->json('applist')->nullable();
            $table->timestamps();
        });
        DB::table('profiles')->insert(
            array(
                'id' => 1,
                'username' => 'wrathyboo',
                'avatar' => 'userID_1_profile_.jpg',
                'steam_id' => '76561198857060587',
                'api_key' => '12E14F3C39E05909822C0C23A2C12DDA'
            )
        );
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};