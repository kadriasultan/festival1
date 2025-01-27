<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusreisTable extends Migration
{
public function up()
{
Schema::create('busreis', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->string('event');
$table->string('phone');
$table->string('email');
$table->string('departure_location');
$table->integer('passengers');
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('busreis');
}
}
