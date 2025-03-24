<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('id')->primary(); // Mã đơn hàng (DHxxx)
            $table->decimal('total', 10, 2); // Tổng tiền đơn hàng
            $table->enum('status', ['pending', 'paid', 'failed'])->default('pending'); // Trạng thái đơn hàng
            $table->timestamps(); // Thêm created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
