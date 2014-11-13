<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Migration_Images_to_articles extends CI_Migration {

	public function up()
	{
		$fields = (array(
			'images' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				
			),
			
                    
		));
                $this->dbforge->add_column('articles',$fields);
		//$this->dbforge->create_table('pages');
	}

	public function down()
	{
		$this->dbforge->drop_table('articles','images');
	}
}





