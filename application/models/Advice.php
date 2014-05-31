<?php

class Application_Model_Advice extends Zend_Db_Table_Abstract{

    protected $_name = 'advices';
    
    function story() {
      $user_data = Zend_Auth::getInstance()->getStorage()->read();
      if ($user_data->type == 'parent'){
        $select=$this->select()->setIntegrityCheck(false)->from('advices')->where('story_id=1');
        return $this->fetchAll($select)->toArray();
      } 
    }

}

