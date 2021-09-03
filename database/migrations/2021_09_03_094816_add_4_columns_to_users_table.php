<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add4ColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('address') -> nullable();
            $table->text('avatar', 255) -> nullable();
            $table->integer('phone') -> nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('gender', ['male', 'female'])->default('male');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('avatar');
            $table->dropColumn('phone');
            $table->dropColumn('status');
            $table->dropColumn('gender');
        });
    }
}
