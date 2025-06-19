<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('role_permissions', function (Blueprint $table) {
        $table->id('PermissionID');
        $table->unsignedBigInteger('RoleID');
        $table->string('Description'); // Create, Retrieve, Update, Delete
        $table->timestamps();

        $table->foreign('RoleID')->references('RoleID')->on('user_roles')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
