<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(array $array)
 * @method static find(int $int)
 * @method static findOrFail(int $int)
 * @method static where(string $string, int $int)
 */
class Post extends Model
{

	use SoftDeletes;
	// table posts

	/**
	 * @var string $table
	 */
	protected $table = 'posts';

	/**
	 * @var array $fillable
	 */
	protected $fillable = [
		'title',
		'content',
	];

	/**
	 * @var array $date
	 */
	protected $date = ['deleted_at'];

}
