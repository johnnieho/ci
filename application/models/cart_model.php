<?php
 
    class Cart_model extends CI_Model { 
        // Function to retrieve an array with all product information
        function retrieve_products(){
            $query = $this->db->get('products'); // Select the table products
            return $query->result_array(); // Return the results in a array.
        }          
     
    }
     
/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */