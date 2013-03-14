<?if($services->getImage()) {
	echo image_tag('/uploads/services/' . $services->getImage(), array(
		'absolute' => true,
		'size' => '100px',
		'alt'	=> $services->getTitle(),
		'title'	=> $services->getTitle()
	));
}?>
