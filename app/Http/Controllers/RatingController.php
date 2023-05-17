<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Requests\RatingRequest;

class RatingController extends Controller
{

    public function index()
    {
        return view('testimony.index', [
            'testimonies' => Rating::all()
        ]);
    }


    public function create()
    {
        //
    }
    public function store(RatingRequest $request)
    {
        $rating = new Rating();
        $rating->review = $request['review'];
        $rating->role = $request['role'];
        $rating->rating_score = $request['rating_score'];
        $rating->user_id = auth()->user()->id;
        $rating->save();
        return redirect()->back()->with('status', 'Received! Awaiting Admin Review');
    }

    public function edit(Rating $rating)
    {
        return view('rating.edit', compact('rating'));
    }

    public function update(RatingRequest $request, Rating $rating)
    {
        $rating = Rating::findOrFail($rating->id);
        $rating->review = $request['review'];
        $rating->role = $request['role'];
        $rating->rating_score = $request['rating_score'];
        $rating->status = $request['status'];
        $rating->save();
        return redirect()->back()->with('status', 'Updated! Awaiting Admin Review');
    }


    public function destroy(Rating $rating)
    {
        $rating->delete();
        return redirect()->back()->with('status', 'Deleted');
    }
}
