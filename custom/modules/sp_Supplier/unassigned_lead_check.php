<?php
  class unassigned_lead_check{
    function after_delete($bean, $event, $arguments){
      if($arguments['related_module'] == 'sp_Retailer'){
        delete_the_deal($arguments);
      }
    }
    
  }
?>
