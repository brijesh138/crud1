<?php
class Brij_model extends CI_model
{
	public function allProduct()
	{
		$q=$this->db->get('product');
		if($q)
		{
			return $q->result();
		}
	}
		public function insertProduct($data)
		{
			$q=$this->db->insert('product',$data);
			if($q)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	public function getsingleProduct($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('product');
		if($query)
		{
			return $query->row();
		}
	}
	   public function updateProduct($id)
	{
       $this->db->where('id',$id);
         $query=$this->db->update('product', $data);
        if($query) 
            {
	         return true;
             }
           else
          {
	        return false;
         }
	
      }
      public function delete($id)
      {
      	$this->db->where('id',$id);
      	$query=$this->db->delete('product');
      	if($query){
      		return true;
            }
            else
            {
            	return false;
            }
      }
      }

     ?>