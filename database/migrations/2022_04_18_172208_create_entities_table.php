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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('country');

            $table->boolean('active')
                ->index()
                ->default(1);
            $table->integer('order')
                ->index()
                ->default(0);
            $table->longText('notes')
                ->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->restrictOnDelete()
                ->restrictOnUpdate();

            $table->foreignId('updated_by')
                ->nullable()
                ->constrained('users')
                ->restrictOnDelete()
                ->restrictOnUpdate();

            $table->foreignId('deleted_by')
                ->nullable()
                ->constrained('users')
                ->restrictOnDelete()
                ->restrictOnUpdate();

            //INFO: user no se podrá borrar si se usa en estos campos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entities');
    }
};
