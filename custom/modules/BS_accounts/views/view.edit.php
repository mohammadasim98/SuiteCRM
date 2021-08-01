<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once('include/MVC/View/views/view.edit.php');
class bs_accountsViewEdit extends ViewEdit {
  public function display(){
    if(isset($_REQUEST['initial_deposit'])){
      // write_to_log($_REQUEST['initial_deposit'], 'log');
      $this->ss->assign('balance', $_REQUEST['initial_deposit']);
    }
    $js = <<<'EOT'
    <script type='text/javascript'>
    var msg;
    function validate(){
      var initial_amount = document.getElementById('initial_deposit').value;
      if(initial_amount >= 300 ){
        msg = 'Validation Passed';
        return true;
      }
      else {
        msg = 'Initial Deposit is either less then $300 or invalid';
        return false;
      }
    }

    var save = document.querySelectorAll('[id=SAVE]');
    save.forEach(function(element){
      element.removeAttribute('onclick');
      form = element.form;
      form.addEventListener('submit', event =>{
        if(validate()){
          alert(msg);
          var _form = document.getElementById('EditView');
          _form.action.value='Save';
          if(check_form('EditView')){
            SUGAR.ajaxUI.submitForm(_form);
          }
          event.preventDefault();
          return false
        }
        else{
          alert(msg);
          event.preventDefault();
        }
      });
    });

    function enter(){
      var initial_amount = Number(document.getElementById('initial_deposit').value);
      return initial_amount;
    }
    </script>
    EOT;
    echo $js;
    parent::display();
  }
}
?>
