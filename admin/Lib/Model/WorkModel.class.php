<?php

class WorkModel extends RelationModel {
	public $_link = array(
	'work'=> array(  
     'mapping_type'=>BELONGS_TO,
          'class_name'=>'work_category',
          'foreign_key'=>'cid',
          'mapping_name'=>'category_name',
          'as_fields'=>'category_name',	
		),
	);
}
