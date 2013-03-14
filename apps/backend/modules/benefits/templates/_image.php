<?if($benefits->getImage()) {
	echo image_tag('/uploads/benefits/' . $benefits->getImage(), array(
		'absolute' => true,
		'size' => '100px',
		'alt'	=> $benefits->getTitle(),
		'title'	=> $benefits->getTitle()
	));
}?>
