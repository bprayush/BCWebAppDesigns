<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $username
 * @property string $passcode
 * @property int $PID
 * @property int $TeacherID
 *
 * @package App\Models
 */
class Admin extends Eloquent
{
	protected $table = 'admin';
	public $timestamps = false;

	protected $casts = [
		'PID' => 'int',
		'TeacherID' => 'int'
	];

	protected $fillable = [
		'username',
		'passcode',
		'PID',
		'TeacherID'
	];
}
