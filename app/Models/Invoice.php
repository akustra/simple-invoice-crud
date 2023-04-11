<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_no',
        'description',
        'amount_net',
        'tax',
        'amount_gross',
    ];
}
