<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;

    protected $primaryKey = 'coupon_barcode';

    protected $keyType = 'string';
    
    public $incrementing = false;

    protected $fillable = [
			'sales_acc',
			'coupon_name',
			'exp_date',
			'notice',
			'coupon_barcode',
			'carrier_num',
		];
}
