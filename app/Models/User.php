<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 14 Mar 2018 18:36:58 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phonenumber
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'address',
		'phonenumber'
	];
}
