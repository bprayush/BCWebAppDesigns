<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SchoolCluster
 * 
 * @property int $SCID
 * @property int $SchoolID
 * @property int $SchoolClassID
 * @property int $Cluster1
 * @property int $Cluster2
 * @property int $Cluster3
 * @property int $Cluster4
 * @property int $Cluster5
 * @property int $AcademicID
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $UpdatedDate
 *
 * @package App\Models
 */
class SchoolCluster extends Eloquent
{
	protected $table = 'SchoolCluster';
	protected $primaryKey = 'SCID';
	const CREATED_AT = "CreatedDate";
	const UPDATED_AT = "UpdatedDate";

	protected $casts = [
		'SchoolID' => 'int',
		'SchoolClassID' => 'int',
		'Cluster1' => 'int',
		'Cluster2' => 'int',
		'Cluster3' => 'int',
		'Cluster4' => 'int',
		'Cluster5' => 'int',
		'AcademicID' => 'int'
	];

	protected $dates = [
		'CreatedDate',
		'UpdatedDate'
	];

	protected $fillable = [
		'SchoolID',
		'SchoolClassID',
		'Cluster1',
		'Cluster2',
		'Cluster3',
		'Cluster4',
		'Cluster5',
		'AcademicID',
		'CreatedDate',
		'UpdatedDate'
	];

	public function getIdAttribute()
	{
		return $this->SCID;
	}

	public function cluster1_name()
	{
		return $this->belongsTo('App\Models\ClusterMaster', 'Cluster1', 'CMID');
	}

	public function cluster2_name()
	{
		return $this->belongsTo('App\Models\ClusterMaster', 'Cluster2', 'CMID');
	}

	public function cluster3_name()
	{
		return $this->belongsTo('App\Models\ClusterMaster', 'Cluster3', 'CMID');
	}

	public function cluster4_name()
	{
		return $this->belongsTo('App\Models\ClusterMaster', 'Cluster4', 'CMID');
	}

	public function cluster5_name()
	{
		return $this->belongsTo('App\Models\ClusterMaster', 'Cluster5', 'CMID');
	}

	public function academicYear()
	{
		return $this->belongsTo('App\Models\AcademicYear', 'AcademicID', 'AcademicID');
	}
}
