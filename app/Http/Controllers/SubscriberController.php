<?php

namespace App\Http\Controllers;

use App\Rules\SpamFree;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    
    public function index()
    {
        return view('subscribe.list', [
            'list' => Subscriber::all()
        ]);
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'unique:subscribers', 'email', new SpamFree, 'max:255'],
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $validatedData['email'];
        $subscriber->save();
        return redirect()->back()->with('status', 'Received, Promise not to spam');

    }
  
   
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->back()->with('status', 'Deleted');
    }
}
