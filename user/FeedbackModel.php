<?php   
    
    class FeedbackModel extends CI_Model{
       //Gallery Categories Models

       public function setfeedback($array) {
        if($this->db->insert('feedback', $array))
            return true;
        return false;
    }

       public function feedback(){
        $res = $this->db->select()
                        ->from('feedback')
                        ->join('logintbl', 'feedback.userid = logintbl.id')
                        ->order_by('feedback.id','desc')
                        ->get();
        if($res->num_rows()) {
            return $res->result_array();
        }
        else{
            return false;
        }

       

        }

    }
    
?>