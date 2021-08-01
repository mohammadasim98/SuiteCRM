<?php
  class assigned_lead_check{
    function after_add($bean, $event, $arguments){
      if($arguments['related_module'] == 'sp_Retailer'){
        // write_to_log(array($arguments[1]), 'Argument');
        create_new_deal($arguments);
      }
    }
  }
?>
