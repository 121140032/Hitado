<?php

use App\Models\Incoming;
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
        Schema::create('outgoings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Incoming::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->integer('count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outgoings');
    }
};
