<?php

namespace App\Models;

use App\Models\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpportunityDetial extends Model
{
    use HasFactory;
    public function opportunity(){
        return $this->belongsTo(Opportunity::class);
    }
}
