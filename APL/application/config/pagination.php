<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<li class="paginate_button next " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<li class="paginate_button previous " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">';
            $config['num_tag_close'] = '</li>';
			
			
			
