<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = projects::where('active','true')->get();
        $Cprojects = projects::where('active','false')->get();
        return view('home',compact('projects','Cprojects'));
    }
    public function projectDetail(projects $project)
    {
        return view('project-detail',compact('project'));
    }
    public function softCapReach(projects $project)
    {
        $project->softCap_reach = 'true';
        $project->update();
    }
     public function hardCapReach(projects $project)
    {
        $project->hardCap_reach = 'true';
        $project->update();
    }
    public function projectSuccess(projects $project)
    {
        $project->success = 'true';
        $project->active = 'false';
        $project->update();
    }
     public function projectFail(projects $project)
    {
        $project->success = 'false';
        $project->active = 'false';
        $project->update();
    }
    public function openTime(projects $project, $date)
    {
        $project->openTime = $date;
        $project->update();
        return $date;
    }
    public function setUpcoming(projects $project)
    {
        $project->upcoming = 'true';
        $project->update();
    }
    public function setUpcomingFalse(projects $project)
    {
        $project->upcoming = 'false';
        $project->update();
    }
    public function closeTime(projects $project, $date)
    {
        $project->closedTime = $date;
        $project->update();
    }
   public function setData(Request $request)
   {

       projects::where('id',$request->project_id)->first()
       ->update(['raised' => $request->raised]);
       projects::where('id',$request->project_id)->first()
       ->update(['time_left' => $request->time_left]);
       projects::where('id',$request->project_id)->first()
       ->update(['participants' => $request->participants]);
           projects::where('id',$request->project_id)->first()
       ->update(['softCap' => $request->softCap]);
       projects::where('id',$request->project_id)->first()
       ->update(['hardCap' => $request->hardCap]);
          projects::where('id',$request->project_id)->first()
       ->update(['percent' => $request->percent]);
       
   }
}
