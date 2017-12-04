<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContentMasterList
 * 
 * @property int $ContentID
 * @property string $ContentName
 * @property string $ReferenceID
 * @property string $LearningObjective
 * @property bool $Creativity
 * @property bool $Collaboration
 * @property bool $Critical Thinking
 * @property bool $Communication
 * @property bool $Hands-on
 * @property bool $Science
 * @property bool $Computing
 * @property bool $Math
 * @property bool $21stCenturySkills
 * @property bool $ArtLanguage
 * @property string $LessonPlanLink
 *
 * @package App\Models
 */
class ContentMasterList extends Eloquent
{
	protected $table = 'Content_MasterList';
	protected $primaryKey = 'ContentID';
	public $timestamps = false;

	protected $casts = [
		'Creativity' => 'bool',
		'Collaboration' => 'bool',
		'Critical Thinking' => 'bool',
		'Communication' => 'bool',
		'Hands-on' => 'bool',
		'Science' => 'bool',
		'Computing' => 'bool',
		'Math' => 'bool',
		'21stCenturySkills' => 'bool',
		'ArtLanguage' => 'bool'
	];

	protected $fillable = [
		'ContentName',
		'ReferenceID',
		'LearningObjective',
		'Creativity',
		'Collaboration',
		'Critical Thinking',
		'Communication',
		'Hands-on',
		'Science',
		'Computing',
		'Math',
		'21stCenturySkills',
		'ArtLanguage',
		'LessonPlanLink'
	];

	public function getNameAttribute()
	{
		return $this->ContentName;
	}

	public function getIdAttribute()
	{
		return $this->ContentID;
	}

}
