<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PhonebookController;

class phonebook extends Model
{
    use HasFactory;
protected $fillable = [
'user', 'name', 'phone', 'email', 'other',
];

}
