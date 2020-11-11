<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Lesson;
use Exception;
use Illuminate\Auth\Access\HandlesAuthorization;

class LessonPolicy
{
    use HandlesAuthorization;

    public function reserve(User $user, Lesson $lesson)
    {
        try {
            $user->canReserve($lesson);
        } catch (Exception $e) {
            return true;
        }
    }
}
