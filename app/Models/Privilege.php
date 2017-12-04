<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Privilege
 * 
 * @property int $PID
 * @property string $Privilege
 * @property string $Access
 *
 * @package App\Models
 */
class Privilege extends Eloquent
{
	protected $table = 'Privilege';
	protected $primaryKey = 'PID';
	public $timestamps = false;

	protected $fillable = [
		'Privilege',
		'Access'
	];

	public function getIdAttribute()
	{
		return $this->PID;
	}

	public function getPrivilegeAttribute()
	{
		return $this->attributes['Privilege'];
	}

	public function getAccessAttribute()
	{
		return $this->attributes['Access'];
	}
}
