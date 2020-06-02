<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceRegulation extends Model
{
    public function usageNormInvestor() {
        return $this->hasMany('App\Models\UsageNormInvestors');
    }
}
