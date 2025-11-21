<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatasheetLead extends Model
{
    use HasFactory;

    protected $table = 'datasheet_leads';

    protected $fillable = ['email', 'pdf'];
}
