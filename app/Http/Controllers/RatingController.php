<?php

// app/Http/Controllers/RatingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Rating;

class RatingController extends Controller
{
    public function showRatingForm(Task $task)
    {
        return view('ratings.form', compact('task'));
    }

    public function storeRating(Request $request, Task $task)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        // Store the rating in the database
        $rating = new Rating([
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
        $task->ratings()->save($rating);

        return redirect()->route('home')->with('success', 'Thank you for rating!');
    }

}
