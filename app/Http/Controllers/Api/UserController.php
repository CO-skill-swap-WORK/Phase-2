<?php

// app/Http/Controllers/API/UserController.php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserSkills(User $user)
    {
        $skills = $user->skills;
        return response()->json($skills);
    }

    public function assignSkillsToUser(Request $request, User $user)
    {
        $skillIds = $request->input('skill_ids');
        $user->skills()->sync($skillIds);
        return response()->json(['message' => 'Skills assigned successfully']);
    }
}
