<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    var $fillable = ['reference', 'quantity', 'nota'];

    protected $attributes = [
        'quantity' => 0,
    ];

    public function delete()
    {
        if ($this->quantity > 0) {
            return false;
        }

        return parent::delete();
    }

    public function incrementStock($amount = 1)
    {
        $this->increment('quantity', $amount);
        $this->save();
    }
}
