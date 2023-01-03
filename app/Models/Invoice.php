<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable =[
        'customer_id',
        'number',
        'total',
        'sub_total',
        'date',
        'due_date',
        'reference',
        'discount',
        'terms_and_conditions'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function invoice_items(){
        return $this->hasMany(InvoiceItem::class);
    }
}
