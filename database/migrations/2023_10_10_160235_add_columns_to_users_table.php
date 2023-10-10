<?php

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 32)->after('email_verified_at')->unique()->comment("Tên đăng nhập");
            $table->date('date_of_birth')->after('remember_token')->nullable()->comment("Ngày sinh");
            $table->string('avatar')->after('date_of_birth')->default('')->comment("Link ảnh đại diện");
            $table->boolean('is_admin')->after('avatar')->default(false)->comment('Có phải admin không');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->dropColumn('avatar');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('username');
        });
    }
};
