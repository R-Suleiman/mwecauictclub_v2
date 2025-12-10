<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\Comment;
use App\Models\department;
use App\Models\Team_member;

class HomeController extends Controller
{
    public function index()
    {

        $teamMembers = team_member::all();
        $news = event::all();
        $departments = Department::where('dept_name', '!=', 'root')->take(4)->get();
        return view('index', compact('news', 'teamMembers', 'departments'));
    }
    public function about()
    {

        $teamMembers = team_member::all();
        return view('about', compact('teamMembers'));
    }

    public function contact()
    {

        return view('contact');
    }

    public function message(Request $request)
    {

        $request->validate([
            'fullname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'category' => ['required', 'string'],
            'message' => ['required', 'string', 'max:255'],
        ], [
            'fullname.required' => 'Fullname field can\'t be empty',
            'email.required' => 'please enter valid email address',
            'category.required' => 'please select message category',
            'message.required' => 'Message field can\'t be empty'
        ]);

        $comment = new Comment();

        $comment->fullname = $request->fullname;
        $comment->email = $request->email;
        $comment->category =  $request->category;
        $comment->message = $request->message;

        $comment->save();

        toast('Message derived', 'success')->position('bottom-start')->autoClose('6000');
        return redirect()->back();
    }

    //returns the more Detailed page of a specific event
    public function showEventDetails($id)
    {
        $similarEvents = Event::where('id', '!=', $id)->get(); // Fetch other related events, excluding the current one
        $showEventDetails = Event::find($id); // Fetch the specific event by ID

        return view('event-details', compact('showEventDetails', 'similarEvents'));
    }

    public function showInner($id)
    {

        $innerEvent = Event::find($id);
        return view('event-details', compact('innerEvent'));
    }

    public function privacyPolicy()
    {

        return view('privacy-policy');
    }

    public function licenceAndUse()
    {

        return view('licence and use');
    }

    public function departments()
    {
        $departments = Department::where('dept_name', '!=', 'root')->get();
        return view('departments', compact('departments'));
    }

    public function departmentPage(string $dept_name)
    {
        $department = Department::where('dept_name', $dept_name)->first();
        return view('department', compact('department'));
    }
}
