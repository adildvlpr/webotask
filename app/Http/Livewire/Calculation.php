<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use App\Models\Calhistory;


class Calculation extends Component
{

    public $number1;
    public $operator;
    public $number2;
    public $result = '';


    protected $rules = [
        'number1' => 'required|int',
        'number2' => 'required|int',
        'operator'=> 'required'
    ];

    public function getresult()
    {  

        $this->validate();

        if($this->operator=='-')
        {
            $this->result = $this->number1 - $this->number2;
        }
        if($this->operator=='+')
        {
            $this->result = $this->number1 + $this->number2;
        }
        if($this->operator=='*')
        {
            $this->result = $this->number1 * $this->number2;
        }

        if($this->operator=='/')
        {
            $this->result = $this->number1 / $this->number2;
        }
    }

    public function saveresult()
    {

        $this->validate();

        if($this->operator=='-')
        {

            $numbers = array('numbers'=>"$this->number1 - $this->number2 = ");
            $afternumber = array('result'=>$this->result = $this->number1 - $this->number2);  

            $finalresult = array_merge($numbers,$afternumber);

            $data = new Calhistory();
            $data->history = json_encode($finalresult);
            $data->save(); 


        }

        if($this->operator=='+')
        {
 
            $numbers = array('numbers'=>"$this->number1 + $this->number2 = ");
            $afternumber = array('result'=>$this->result = $this->number1 + $this->number2);  
            
            $finalresult = array_merge($numbers,$afternumber);

            $data = new Calhistory();
            $data->history = json_encode($finalresult);
            $data->save(); 

        }


        if($this->operator=='*')
        {
            $numbers = array('numbers'=>"$this->number1 * $this->number2 = ");
            $afternumber = array('result'=>$this->result = $this->number1 * $this->number2);  
    
            $finalresult = array_merge($numbers,$afternumber);

            $data = new Calhistory();
            $data->history = json_encode($finalresult);
            $data->save(); 
        }

        if($this->operator=='/')
        {
            $numbers = array('numbers'=>"$this->number1 / $this->number2 = ");
            $afternumber = array('result'=>$this->result = $this->number1 / $this->number2);  
    
            $finalresult = array_merge($numbers,$afternumber);

            $data = new Calhistory();
            $data->history = json_encode($finalresult);
            $data->save(); 
        }

    }

    public function resetall()
    {
        $this->number1=null;
        $this->number2=null;
        $this->operator=null;
        $this->result=null;
        
    }


    public function deleteresult($id)
    {
        $deletedata = Calhistory::where('id',$id)->delete();
    }



    public function render()
    {
        $history = DB::table('cal_history')
        ->orderby('id','desc')
        ->limit(5)
        ->get();


        return view('livewire.calculation')->with('history',$history);
    }
}
