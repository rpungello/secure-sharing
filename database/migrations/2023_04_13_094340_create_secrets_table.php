<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('secrets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->text('value')->nullable();
            $table->text('auth_token');
            $table->string('recipient_email')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table->ipAddress('viewed_from_ip')->nullable();
            $table->text('viewed_from_user_agent')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('secrets');
    }
};
