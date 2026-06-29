<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    public function TransactionType(): BelongsTo
    {  
        return $this->belongsTo(TransactionTypes::class);
    }
}


