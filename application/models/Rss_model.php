<?php
class Rss_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_rss($request)
        {
            $response = file_get_contents($request);
            return simplexml_load_string($response);
        }

      
}#end of the news model