<?php
 class Cont extends CI_Controller
 {
 	public function index()
 	{
 		$data['product_details']=$this->Brij_model->allProduct();
 		$this->load->view('crud_view',$data);
 	}
 	public function addProduct()
 	{
 		$this->form_validation->set_rules('name','product_name','trim|required');
 		$this->form_validation->set_rules('price','product_price','trim|required');
 		$this->form_validation->set_rules('quantity','product_quantity','trim|required');
 		if($this->form_validation->run()==false)
 		{
       $data_error=['error'=>validation_errors()];
       $this->session->set_Flashdata($data_error);
 		}

 		else 
 		{
 			  $result=$this->Brij_model->insertProduct([
 				'name'=>$this->input->post('name'),
 				'price'=>$this->input->post('price'),
 				'quantity'=>$this->input->post('quantity')
 			]);
 			 if($result)
 			 {
 			 	 $this->session->set_Flashdata('inserted','your data has been inserted sucessfully');
 			 }
          }
 		redirect('cont');

 	}
 	public function editProduct($id)
 	{
 		$data['singleProduct']=$this->Brij_model->getsingleProduct($id);
 		$this->load->view('edit_view',$data);
 	}
 	public function update($id)
  
      {
 		$this->form_validation->set_rules('name','Name','trim|required');
 		$this->form_validation->set_rules('price','Price','trim|required');
 		$this->form_validation->set_rules('quantity','Quantity','trim|required');
 		if($this->form_validation->run()==false)
 		{
       $data_error=['error'=>validation_errors()];
       $this->session->set_Flashdata($data_error);
 		}

 		else 
 		{
 			 $result=$this->Brij_model->updateProduct([
 				'name'=>$this->input->post('name'),
 				'price'=>$this->input->post('price'),
 				'quantity'=>$this->input->post('quantity')
 			], $id);
 			 if($result)
 			 {
 			 	 $this->session->set_Flashdata('updated','your data has been updated sucessfully');
 			 }
          }
 		redirect('cont');

 	}
 	public function deleteProduct($id)
 	{
 		$result=$this->Brij_model->delete($id);
 		if($result==true){
 			$this->session->set_Flashdata('deleted','your producr has been deleted succefully');
 		}
 		redirect('cont');
 	}

 }


?>