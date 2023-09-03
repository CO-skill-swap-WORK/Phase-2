<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentColumnsToTasksTable extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->decimal('payment_amount', 10, 2)->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_gateway_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn(['payment_amount', 'payment_status', 'payment_gateway_id']);
        });
    }
}
