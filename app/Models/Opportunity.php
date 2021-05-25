<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;
    //this a relatioship between oppor and opporDe
    public function detail(){
        return $this->hasOne(OpportunityDetial::class);
    }

}
