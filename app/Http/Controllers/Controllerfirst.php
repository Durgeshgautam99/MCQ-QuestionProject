<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelfirst;
use App\Modelsecond;
use App\Modelthird;
use App\Modelforth;
use DB;
class Controllerfirst extends Controller
{
    public function fetch(){
        $data = DB::table('question')->select('id','question')->get();
        foreach($data as $key=>$value)
        {
            $value->q_option=DB::table('questionoption')->select('id','option')->where('q_id',$value->id)->get();
        }
        // echo "<pre>";print_r($data);die;
        return view ("questionpaper",compact('data'));
    }
    public function store(Request $res){
        $res->validate([
            'name'        =>          'required',
            'form_id'         =>          'required',
            ]);
           $modelsecond = new Modelsecond; 
           $modelsecond->name=$res->name;
           $modelsecond->form_id=$res->form_id;
            //insert command
           $modelsecond->save();
           return redirect('choices');
       }

       public function select(){
            $data = DB::table('choicequestion')->select('id','question')->get();
            foreach($data as $key=>$value)
            {
                $value->q_option=DB::table('choiceoption')->select('id','option')->where('choice_q_id',$value->id)->get();
            }
            // echo "<pre>";print_r($data);die;
            return view ("choices",compact('data'));
        }

        public function answerinsert(Request $res){        
            $inputvalue = $res->all();
            //dd($inputvalue);
            $modelthird = new Modelthird;
           $array = implode(",",$res->ques);
            $modelthird->choice_id=$array;
                //insert command
               $modelthird->save();
           }

        public function show(Request $res){
            $data = new Modelsecond;
            $model = Modelsecond::where('form_id', $res->form_id)->first();
            if ( ! $model == null)
            {
                return view("startquiz",compact('model')); 
            } 
            else{
                //alert()->success('Hello')->persistent('Close')->autoclose(3500);
                echo "<h1>Sorry wrong Id</h1>";
            }
             
        }

        public function questionsubmit(Request $res){        
            $inputvalue = $res->all();
            $modelforth = new Modelforth;
            $array = implode(",",$res->ques);
            $modelforth->answer=$array;
                echo "<pre>";
                    print_r ($modelforth);
                echo "<pre>";
                //insert command
               $modelforth->save();
           }



        

}
