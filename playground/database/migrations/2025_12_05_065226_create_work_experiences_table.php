<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();

            // $table->uuid();
            // $table->bigInteger('primary_id')->primary();

            $table->foreignId('user_id'); // option 1
            // $table->foreignIdFor(User::class); // option 2

            $table->string('company_name');
            $table->string('position');
            $table->date('start_date');
            $table->date('end_date')->nullable();

            // $table->boolean()
            // $table->integer()
            // $table->smallInteger()
            // $table->bigInteger()
            // $table->float()
            // $table->decimal()
            // $table->text()
            // $table->longText()->comment('Detailed description of work experience')
            // $table->enum('status', ['active', 'inactive'])

            $table->timestamps();

            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
