<?php
class Shopgo_Featuredpopup_Model_Adminhtml_System_Config_Source_Effect {
	public function toOptionArray() {
		$themes = array (
				array (
						'value' => '1',
						'label' => 'Fade in & Scale' 
				),
				array (
						'value' => '2',
						'label' => 'Slide in (right)' 
				),
				array (
						'value' => '3',
						'label' => 'Slide in (bottom)' 
				),
				array (
						'value' => '4',
						'label' => 'Newspaper' 
				),
				array (
						'value' => '5',
						'label' => 'Fall' 
				),
				array (
						'value' => '6',
						'label' => 'Side Fall' 
				),
				array (
						'value' => '7',
						'label' => 'Sticky Up' 
				),
				array (
						'value' => '8',
						'label' => '3D Flip (horizontal)' 
				),
				array (
						'value' => '9',
						'label' => '3D Flip (vertical)' 
				),
				array (
						'value' => '10',
						'label' => '3D Sign' 
				),
				array (
						'value' => '11',
						'label' => 'Super Scaled' 
				),
				array (
						'value' => '12',
						'label' => 'Just Me' 
				),
				array (
						'value' => '13',
						'label' => '3D Slit' 
				),
				array (
						'value' => '14',
						'label' => '3D Rotate Bottom' 
				),
				array (
						'value' => '15',
						'label' => '3D Rotate In Left' 
				),
				array (
						'value' => '16',
						'label' => 'Blur' 
				) 
		);
		
		return $themes;
	}
}