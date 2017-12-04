<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SchoolClass
 * 
 * @property int $SchoolClassID
 * @property int $SchoolID
 * @property string $Class
 * @property int $NumberOfStudents
 * @property int $NumberMale
 * @property int $NumberFemale
 * @property int $AcademicYear
 * @property \Carbon\Carbon $CreatedTime
 * @property \Carbon\Carbon $UpdatedTime
 *
 * @package App\Models
 */
class SchoolClass extends Eloquent
{
	protected $table = 'SchoolClass';
	protected $primaryKey = 'SchoolClassID';
	
	const CREATED_AT = "CreatedTime"; 
	const UPDATED_AT = "UpdatedTime";

	protected $casts = [
		'SchoolID' => 'int',
		'NumberOfStudents' => 'int',
		'NumberMale' => 'int',
		'NumberFemale' => 'int',
		'AcademicYear' => 'int'
	];

	const CREATED_AT = 'CreatedTime';
	const UPDATED_AT = 'UpdatedTime';

	protected $dates = [
		'CreatedTime',
		'UpdatedTime'
	];

	protected $fillable = [
		'SchoolID',
		'Class',
		'NumberOfStudents',
		'NumberMale',
		'NumberFemale',
		'AcademicYear',
		'CreatedTime',
		'UpdatedTime'
	];

	public function getIdAttribute()
	{
		return $this->SchoolClassID;
	}

	public function getSchoolIdAttribute()
	{
		return $this->attributes['SchoolID'];
	}

	public function getClassAttribute()
	{
		return $this->attributes['Class'];
	}

	public function getStudentsAttribute()
	{
		return $this->NumberOfStudents;
	}

	public function getMaleAttribute()
	{
		return $this->NumberMale;
	}

	public function getFemaleAttribute()
	{
		return $this->NumberFemale;
	}

	public function getCreatedAtAttribute()
	{
		return $this->attributes['CreatedTime'];
	}

	public function getUpdatedAtAttribute()
	{
		return $this->attributes['UdatedTime'];
	}

	//RELATIONS START HERE
	public function academicYear()
	{
		return $this->belongsTo('App\Models\AcademicYear', 'AcademicYear', 'AcademicID');
	}

	public function school()
	{
		return $this->belongsTo('App\Models\SchoolMasterList', 'SchoolID');
	}

}
