<?php

	Class extension_version_info extends Extension{
	
		public function about(){
			return array('name' => 'Version Info',
						 'version' => '1.0',
						 'release-date' => '2009-10-25',
						 'author' => array('name' => 'Nils Werner',
										   'website' => 'http://www.phoque.com/projekte/symphony',
										   'email' => 'nils.werner@gmail.com')
				 		);
		}
		
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/backend/',
					'delegate'	=> 'AddElementToFooter',
					'callback'	=> 'AddElementToFooter'
				)
			);
		}

		public function AddElementToFooter($context) {
			$ul = &$context['wrapper'];
			
			$li = new XMLElement('li');
			$li->setValue("Symphony CMS Version <strong>" . Administration::instance()->Configuration->get('version', 'symphony') . "</strong>");
			$ul->prependChild($li);
		}
			
	}

?>