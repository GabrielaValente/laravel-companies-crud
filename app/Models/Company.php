<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Company extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'dti_atividade',
        'dtf_atividade',
        'especial'
    ];
    protected function getDtiAtividadeAttribute($value)
    {
        $newDate = Carbon::parse($value)->format('d-m-Y H:i');
        return $this->attributes['dti_atividade'] = $newDate;
    }

    protected function getDtfAtividadeAttribute($value)
    {
        $newDate = Carbon::parse($value)->format('d-m-Y H:i');
        return $this->attributes['dtf_atividade'] = $newDate;
    }

}

