<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckStageButtonRole implements Rule
{
    private $stages;
    public static $i = 0;

    public function __construct($stages)
    {
        $this->stages = $stages;
    }

    public function passes($attribute, $stageRoleIds)
    {
        $stageRoleIds = json_decode($stageRoleIds);

        if(!$stageRoleIds) {
            return true;
        }

        foreach($this->stages as $stage) {
            self::$i += count($stage['stage_buttons']);
        }

        $attributes = explode('.', $attribute);
        $stageIndex = $attributes[1];

        $processStageRoles = $this->stages[$stageIndex]['process_stage_roles'];

        $roleIds = $this->getRoleIds($this->stages, $processStageRoles);

        if(!$roleIds) {
            return false;
        }

        $matchedRoleIds = array_intersect($roleIds, $stageRoleIds);

        return count($matchedRoleIds) == count($stageRoleIds);
    }

    private function getRoleIds($stages, $processStageRoles) {
        self::$i--;
        if($processStageRoles[0]['user_from_stage'] !== null && self::$i > 0) {
            $stageIndex = $processStageRoles[0]['user_from_stage'];
            $processStageRoles = $stages[$stageIndex]['process_stage_roles'];
            $this->getRoleIds($stages, $processStageRoles);
        }
        
        return array_column($processStageRoles, 'role_id');
    }

    public function message()
    {
        return 'Invalid role/s given';
    }
}
