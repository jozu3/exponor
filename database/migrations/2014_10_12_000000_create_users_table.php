<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('documento')->nullable();
            $table->string('empresa')->nullable();
            $table->string('cargo')->nullable();
            $table->string('celular')->nullable();
            $table->string('driver_id')->nullable();
            $table->string('driver')->nullable();
            $table->string('nivel_planta')->nullable();
            $table->string('nivel_mantenimiento')->nullable();
            $table->longText('areas_interes')->nullable();
            $table->string('presupuesto')->nullable();
            $table->string('relacionskf')->nullable();
            $table->string('productosferia')->nullable();
            $table->string('productosferia_servicio')->nullable();
            $table->string('productosferia_tecnologia')->nullable();
            $table->string('productosferia_remanufac')->nullable();
            $table->string('productosferia_recondoil')->nullable();
            $table->string('productosferia_sis_lubrica')->nullable();
            $table->string('tipocontacto')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
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
