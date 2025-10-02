<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
class CreateAttendancesTable extends Migration
{
    public function up(){ Schema::create('attendances', function(Blueprint $table){ $table->id(); $table->foreignId('student_id')->constrained('students')->cascadeOnDelete(); $table->string('session')->nullable(); $table->timestamp('scanned_at')->nullable(); $table->timestamps(); }); }
    public function down(){ Schema::dropIfExists('attendances'); }
}
