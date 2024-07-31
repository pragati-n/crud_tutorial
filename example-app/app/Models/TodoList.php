<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;
	
	protected $table ="list_items";
	
	protected $fillable = [
							'item',
							'done_flag',
							'published_at',
						];
}
