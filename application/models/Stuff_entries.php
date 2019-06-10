<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stuff_entries extends CI_Model {

	  /**
	   *  @Description: get matrix content for entry id
	   *       @Params: entryid
	   *
	   *  	 @returns: returns
	   */
	public function get_matrix($sectionid,$entryid)
	{


		//get all the fields
		$this->db->select('*');
		$this->db->from('section_layout');
		$this->db->where('sectionid', $sectionid);

		$query = $this->db->get();
		
		foreach ($query->result() as $row) 
		{
			if( $this->is_matrix($row->fieldid))
			{
				$fieldname = my_field_name($row->fieldid);
				$content = my_field_content($entryid,$fieldname);

				//remove first and last characters [,]
				$matrix = substr($content, 1, -1);


			}
		}
		
		return $matrix;


		// $this->db->select('*');
		// $this->db->from('content');
		// $this->db->where('entryid', $entryid);

		// $query4 = $this->db->get();
		
		// $tmp_s = "";
		// foreach ($query4->result() as $row) 
		// {
		// 	$tmp_s = $row->matrixNaxme;
		// }
		
		// $matrix = substr($tmp_s, 1, -1);
		// return $matrix;


	}

	 /**
	  *  @Description: check if field id is matrix
	  *       @Params: fieldid
	  *
	  *  	 @returns: true or false
	  */

	public function is_matrix($fieldid)
	{

		$this->db->select('type');
		$this->db->from('fields');
		$this->db->where('id', $fieldid);
		$this->db->limit(1);

		$query = $this->db->get();
		
		$pass = 0;
		foreach ($query->result() as $row) 
		{
			if ($row->type == 'matrix') {
				$pass = 1;
			}
		}
		return $pass;


	}



	 /**
	  *  @Description: delete the multiple entry only
	  *       @Params: entryid
	  *
	  *  	 @returns: nothing
	  */		

	public function del_entry($entryid)
	{
		
		//delete the routes
		


		$this->db->where('id', $entryid);
		$this->db->delete('entry');

		



	} 



	 /**
	  *  @Description: description
	  *       @Params: assetid
	  *
	  *  	 @returns: 
	  */

	public function del_asset($entryid,$fieldname)
	{
		
		//blank it out
		$object = array($fieldname => "" );

		$this->db->where('entryid', $entryid);
		$this->db->update('content', $object);
		
		


	}




	 /**
	  *  @Description: check if asset uploads have been exceeded
	  *       @Params: params
	  *
	  *  	 @returns: return TRUE or FALSE
	  */

	public function asset_upload_exceeded($entryid,$fieldname)
	{
		$this->db->select($fieldname);
		$this->db->from('content');
		$this->db->where('entryid', $entryid);
	
		$this->db->limit(1);

		$query = $this->db->get();
		
		$stuff = "";
		foreach ($query->result() as $row) 
		{
			$stuff =  $row->$fieldname;
		}

		$total = 0;
		if(($stuff === NULL) or (strlen($stuff == 0)))
		{

		}
		else
		{
			$arr = explode(",", $stuff);
			$total = count($arr);
		}

		


		//now get the limit

		$this->db->select('limitamount');
		$this->db->from('fields');
		$this->db->where('name', $fieldname);
		$this->db->limit(1);

		$query2 = $this->db->get();
		
		$limit = 0;
		foreach ($query2->result() as $row) 
		{
			$limit = $row->limitamount;
		}
		
		if($total < $limit )
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
		

	}
	

}

/* End of file Stuff_entries.php */
/* Location: ./application/models/Stuff_entries.php */