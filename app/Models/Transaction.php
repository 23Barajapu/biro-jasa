<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'invoice_number', 'customer_name', 'customer_type', 'company_name',
        'nopol', 'vehicle_type', 'year', 'frame_number',
        'engine_number', 'stnk_received', 'plat_received', 'transaction_date',
        'capital_cost', 'selling_price', 'profit', 'region_id', 'bpkb_received',
        'bpkb_date', 'no_bpkb', 'status', 'evidence_image'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
