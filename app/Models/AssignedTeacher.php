<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AssignedTeacher
 * 
 * @property int $AssignedID
 * @property int $SchoolID
 * @property int $TeacherID
 * @property int $AcademicID
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $UpdatedDate
 *
 * @package App\Models
 */
class AssignedTeacher extends Eloquent
{
	protected $table = 'AssignedTeacher';
	protected $primaryKey = 'AssignedID';
	const CREATED_AT = 'CreatedDate';
	const UPDATED_AT = 'UpdatedDate';

	protected $casts = [
		'SchoolID' => 'int',
		'TeacherID' => 'int',
		'AcademicID' => 'int',
		'CreatedDate' => 'datetime',
		'UpdatedDate' => 'datetime'
	];

	protected $dates = [
		'CreatedDate',
		'UpdatedDate'
	];

	protected $fillable = [
		'SchoolID',
		'TeacherID',
		'AcademicID'
	];

	public function getSchoolIDAttribute()
	{
		return $this->attributes['SchoolID'];
	}

	public function getTeacherIDAttribute()
	{
		return $this->attributes['TeacherID'];
	}

	public function getAcademicIDAttribute()
	{
		return $this->attributes['AcademicID'];
	}

	public function getIdAttribute()
	{
		return $this->attributes['AssignedID'];
	}

	public function getCreatedAtAttribute()
	{
		return $this->attributes['CreatedDate'];
	}

	public function getUpdatedAtAttribute()
	{
		return $this->attributes['UpdatedDate'];
	}

}
