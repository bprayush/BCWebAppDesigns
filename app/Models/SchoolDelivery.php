<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SchoolDelivery
 * 
 * @property int $SchoolDeliveryID
 * @property int $ContentID
 * @property int $LeadTeacherID
 * @property int $SupportTeacherID
 * @property int $SchoolID
 * @property \Carbon\Carbon $DeliveryDate
 * @property int $AcademicID
 * @property int $SchoolClassID
 * @property \Carbon\Carbon $CreatedTime
 *
 * @package App\Models
 */
class SchoolDelivery extends Eloquent
{
	protected $table = 'SchoolDelivery';
	protected $primaryKey = 'SchoolDeliveryID';
	public $timestamps = false;

	const CREATED_AT = "CreatedTime";

	protected $casts = [
		'ContentID' => 'int',
		'LeadTeacherID' => 'int',
		'SupportTeacherID' => 'int',
		'SchoolID' => 'int',
		'AcademicID' => 'int',
		'SchoolClassID' => 'int'
	];

	protected $dates = [
		'DeliveryDate',
		'CreatedTime'
	];

	protected $fillable = [
		'ContentID',
		'LeadTeacherID',
		'SupportTeacherID',
		'SchoolID',
		'DeliveryDate',
		'AcademicID',
		'SchoolClassID',
		'CreatedTime'
	];
}
