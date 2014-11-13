<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Migration_Add_template extends CI_Migration {

	public function up()
	{
		$fields=(array(
			'template' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
								

			),
			
                    
		));
		$this->dbforge->add_column('pages',$fields);
	}

	public function down()
	{
		$this->dbforge->drop_table('pages','template');
	}
}


