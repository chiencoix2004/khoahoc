<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SepayTransaction extends Model
{
    use HasFactory;

    // Tên bảng trong database
    protected $table = 'sepay_transactions';

    // Cho phép Laravel tự động cập nhật timestamps (created_at, updated_at)
    public $timestamps = true;

    // Các cột có thể được gán dữ liệu hàng loạt
    protected $fillable = [
        'transactionID',
        'gateway',
        'transactionDate',
        'accountNumber',
        'subAccount',
        'code',
        'content',
        'transferType',
        'description',
        'transferAmount',
        'referenceCode',
        'status',
    ];

    // Kiểu dữ liệu cho một số cột đặc biệt
    protected $casts = [
        'transferAmount' => 'integer',
        'transactionDate' => 'datetime', // Nếu cần xử lý ngày tháng
    ];
}
