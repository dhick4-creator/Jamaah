<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
class CreateStudentsTable extends Migration
{
    public function up(){ Schema::create('students', function(Blueprint $table){ $table->id(); $table->string('nis')->unique(); $table->string('name'); $table->string('kelas')->nullable(); $table->string('qr_id')->unique(); $table->timestamps(); }); }
    public function down(){ Schema::dropIfExists('students'); }
}
