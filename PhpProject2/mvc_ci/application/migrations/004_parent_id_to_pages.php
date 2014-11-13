<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Migration_Parent_id_to_pages extends CI_Migration {

	public function up()
	{
		$fields = (array(
			'parent_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'default' => 0
			),
			
                    
		));
                $this->dbforge->add_column('pages',$fields);
		//$this->dbforge->create_table('pages');
	}

	public function down()
	{
		$this->dbforge->drop_table('pages','parent_id');
	}
}



