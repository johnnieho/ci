<?php
 
class Cart extends CI_Controller  { 
    function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model'); // Load our cart model for our entire class

    }

 	function index()
	{
	    $data['products'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products
  		$data['content'] = 'cart/products'; // Select our view file that will display our products
	    $this->load->view('index', $data); // Display the page with the above defined content
	}

		public function gogo()
	{
		echo "sdfasdfasd";
	}	
 
}
/* End of file cart.php */
/* Location: ./application/controllers/cart.php */