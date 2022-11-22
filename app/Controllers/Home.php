<?php

namespace App\Controllers;
use App\Models\BrandModel;
use App\Models\ProductModel;
use App\Models\ItemModel;
use Codeigniter\Controller;
class Home extends BaseController
{

    public function Brand()
    {

        $result= new BrandModel();
        $data['Datakey']=$result->orderBy('entry_date','DESC')->findAll();
        return view ('brand',$data);
        
    }
    public function AddBrend()
    {      

        $data=[ 'name'=> $this->request->getVar('brandname') ];
        $Models= new BrandModel();
        $Models->save($data);  
        return redirect()->to(base_url('/'));  
    }

    public function BrendEdite()
    {      
        $Models= new BrandModel();
        $id=$this->request->getVar('id');
        $data=['name'=> $this->request->getVar('UpdateBrandName')];        
        $Models->update($id,$data); 
        return redirect()->to(base_url('/')); 
    } 
    
    public function BrendDelete($id)
    {
        $Models= new BrandModel();
        $id=$this->input->get('id');
        $data=$Models->where('brand_id',$id);
        $data->delete();
        return redirect()->to(base_url('/')); 
    }     

                                        // End Brand //
                                        

    public function Models()
    {      
        $result= new ProductModel();
        $data['Datakey']=$result->orderBy('entry_date','DESC')->findAll();
        $BrandModels= new BrandModel();
        $BrandData['BrandDatakey']=$BrandModels->orderBy('entry_date','DESC')->findAll();
        return view ('model',$data+ $BrandData);                   
    }
    
    public function AddModel()
    {      
        $data=[ 'brand_id'=> $this->request->getVar('brandName') ];
        $data=[ 'name'=> $this->request->getVar('ModelName') ];
        $Models= new ProductModel();
        $Models->save($data); 
        return redirect()->to(base_url('/model'));   
    }

    public function ModelEdite()
    {      
        $Models= new ProductModel();
        $id=$this->request->getVar('id');          
        $Modeldata=['name'=> $this->request->getVar('ModelName')];        
        $Models->update($id,$Modeldata); 
        return redirect()->to(base_url('/model')); 
    } 
    public function ModelDelete($id)
    {
        $Models= new ProductModel();
        $data=$Models->where('model_id',$id);
        $data->delete($id);
        return redirect()->to(base_url('/model')); 
    } 
    
    // End Model //

    public function item()
    {     
        $BrandResult= new BrandModel();
        $BrandData['BrandDatakey']=$BrandResult->orderBy('entry_date','DESC')->findAll();        
        $result= new ItemModel();
        $data['Datakey']=$result->orderBy('entry_date','DESC')->findAll();           
        return view('item',$BrandData+$data);        
    }    

    public function showDependentData(){
        $brand_id=$this->request->getVar('brandId');
        $hello = new ProductModel();
        $bollo = $hello->where('brand_id', $brand_id)->findAll();
        print_r(json_encode($bollo));
   
       }

    public function AddItem()
       {      
           $data=[ 'brand_id'=> $this->request->getVar('brandName') ];
           $data=[ 'model_id'=> $this->request->getVar('modelName') ];
           $data=[ 'name'=> $this->request->getVar('itemname') ];
           $Models= new ItemModel();
           $Models->save($data); 
           return redirect()->to(base_url('/item'));  
       }

       public function ItemEdite()
       {      
           $Models= new ItemModel();
           $id=$this->request->getVar('id');          
           $ItemData=['name'=> $this->request->getVar('ItemName')];        
           $Models->update($id,$ItemData); 
           return redirect()->to(base_url('/item')); 
       }
       
       public function deleteItem($id = NULL) {
		if (!empty($id) && $this->request->getMethod() == 'id') {
			if($this->project_model->delete($id)) {
				return redirect()->to(base_url('/item'));	
			}
		} else {
			return redirect()->to(base_url('projects'));	
		}
	}
}
