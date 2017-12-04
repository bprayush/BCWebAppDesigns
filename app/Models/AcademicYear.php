<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AcademicYear
 * 
 * @property int $AcademicID
 * @property int $Year
 *
 * @package App\Models
 */
class AcademicYear extends Eloquent
{
	protected $table = 'AcademicYear';
	protected $primaryKey = 'AcademicID';
	public $timestamps = false;

	protected $casts = [
		'Year' => 'int'
	];

	protected $fillable = [
		'Year'
	];

	public function getIdAttribute()
	{
		return $this->AcademicID;
	}

	public function getYearAttribute()
	{
		return $this->attributes['Year'];
	}
}
