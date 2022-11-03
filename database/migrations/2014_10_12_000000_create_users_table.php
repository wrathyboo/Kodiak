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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('meta_value')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(
                'id' => 1,
                'name' => 'Vũ Ngọc Anh Tú',
                'email' => 'bo0.hl1997@gmail.com',
                'password' => '$2y$10$yuG/iw..mUMK1JnUHDqRmOPa2y/dKivlzEimVK1i2mQmI1KzYNmjG',
                'meta_value' => 'Administrator'
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
        Schema::dropIfExists('users');
    }
};
