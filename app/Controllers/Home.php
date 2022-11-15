<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Brand()
    {        
        return view('brand');    
    }

    public function Models()
    {        
        return view('model');    
    } 
    
    public function item()
    {        
        return view('item');    
    }    

}
