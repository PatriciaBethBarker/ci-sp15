<?php
class Rss extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('rss_model');
        }

        
        public function index()
        {       //adds rss///////////////////////
                $request= 'http://www.smashingmagazine.com/feed/';
                $data['xml'] = $this->news_model->get_rss($request);
                ////////////////////////////////
                $data['title'] = 'RSS Feed';
                $this->load->view('templates/header', $data);
                $this->load->view('news/feed', $data);
                $this->load->view('templates/footer');
        }
          
}
