<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function projectsIndex()
    {
        $projects = projects::all();
        return view('admin.projects-index',compact('projects'));
        
    }
    public function projectsAdd()
    {
        return view('admin.projects-add');
    }
    public function projectsSave(Request $request)
    {
        $project = projects::create($request->all());
        $project->success = 'false';
        $project->update();
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/logos');
            $image->move($destinationPath, $name);
            $project->logo = '/logos/'.$name;
            $project->update();
        }
        return redirect('/admin_/projects');
    }
    public function projectsView(projects $project)
    {
        return view('admin.projects-view',compact('project'));
    }
    public function projectsEdit(projects $project)
    {
        return view('admin.projects-edit',compact('project'));
    }

    
    public function projectsEditSave(Request $request, projects $project)
    {
        $project->name = $request->name;
        $project->description = $request->description;
        $project->website = $request->website;
        $project->cap = $request->cap;
        $project->ticker = $request->ticker;
        $project->telegram = $request->telegram;
        $project->twitter = $request->twitter;
        $project->medium = $request->medium;
        $project->reddit = $request->reddit;
        $project->github = $request->github;
        $project->bscscan = $request->bscscan;
        $project->pancake = $request->pancake;
        $project->coingecko = $request->coingecko;
        $project->coinmarketcap = $request->coinmarketcap;

        $project->active = $request->active;
        $project->supply = $request->supply;
        $project->liq_lock_time = $request->liq_lock_time;
        $project->decimals = $request->decimals;
        $project->contract = $request->contract;
        $project->token_contract = $request->token_contract;
        $project->stake_contract = $request->stake_contract;
        $project->contract_abi = $request->contract_abi;
        $project->stake_abi = $request->stake_abi;


        
        $project->update();
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/logos');
            $image->move($destinationPath, $name);
            $project->logo = '/logos/'.$name;
            $project->update();
        }
        return redirect('/admin_/projects');
    }
    public function projectsDelete(Request $request, projects $project)
    {
        $project->delete();
        return redirect('/admin_/projects');
    }
    
}
