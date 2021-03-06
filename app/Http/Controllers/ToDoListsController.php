<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\collection;

use App\ToDoLists;
use App\User;

class ToDoListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $new_job = new todolists();
        $new_job->user_id = $request->user_id;
        $new_job->job_title = $request->job_title;
        $new_job->job_description = $request->job_description;
        $new_job->deadline = $request->deadline;
        $new_job->job_status = $request->job_status;
        $new_job->save();
        
        return redirect()->route('show_job',['id'=>$new_job->id]);
    }
         

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = todolists::find($id);
        if($job == NULL)
            return redirect()->route('home');
        return view('job/view_detail_job',['job'=>$job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = todolists::find($id);
        if($job == null) 
            return redirect()->route('home');
        return view('job/edit_job',['job'=>$job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $edit_job = todolists::find($id);
        $edit_job->job_title = $request->job_title;
        $edit_job->job_description = $request->job_description;
        $edit_job->deadline = $request->deadline;
        $edit_job->job_status = $request->job_status;
        $edit_job->save();
       
        return redirect()->route('show_job',['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = todolists::find($id);
        if($job != NULL)
            $job->delete();
        return redirect()->route('home');
    }
    
    public function viewjobs($id,$job_status){
        $data = todolists::where(['user_id'=>$id,'job_status'=>$job_status])->select('id','job_title')->get();
      
        if($data != NULL){
            return view('listjobs/status_jobs',['list_job'=>$data,'job_status'=>$job_status]);
        }
        else {
            return 0;
        }
    }
    
    public function viewlistjobs($user_id){
        
        $data = todolists::where(['user_id'=>$user_id])->select('id','job_title','job_status')->get(); 
        $grouped = $data->groupBy('job_status');
        $data = collect(['do'=>$grouped->get('do'),'doing'=>$grouped->get('doing'),'done'=>$grouped->get('done')]);
         
        if($data != NULL){
            return view('listjobs/list_jobs',['list_job'=>$data]);
        }
        else {
            return 0;
        }
    }
    
}
