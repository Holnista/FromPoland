<?php
	namespace Model;
	use \RedBeanPHP\R as R;
	class Galleries extends \Model
	{
		protected $json = ['title', 'alias', 'meta'];
		
		//====================================================================================================
		function get()
		{
			//----- Get data types
			$data = func_get_args();
			
			//----- Get image
			if(in_array('image', $data) || !$data)
			{
				$this->bean->data['images'] = null;
				foreach(R::find(TABLE_IMAGES, '`table` = ? AND `pid` = ? ORDER BY `sort` ASC', 
				[$this->table, $this->bean->id]) as $image) $this->bean->data['images'][] = $image->get();
				
				$this->bean->data['image'] = path(PATH_BASE, PATH_IMAGES, 'template', 'placeholder.jpg');
				$this->bean->data['thumb'] = $this->bean->data['image'];
				$image = current($this->bean->data['images']);
				if($image)
				{
					$this->bean->data['image'] = $image->data['image'];
					$this->bean->data['thumb'] = $image->data['thumb'];
				}
			}

			//----- Return bean
			return $this->bean;
		}
		
		//====================================================================================================
		function delete()
		{
			//----- Remove images
			R::trashAll(R::find(TABLE_IMAGES, '`table` = ? AND `pid` = ?', [$this->table, $this->bean->id]));
			rmdir(ltrim(path(PATH_IMAGES, $this->table, $this->bean->id, 'thumbs'), '/'));
			rmdir(ltrim(path(PATH_IMAGES, $this->table, $this->bean->id), '/'));
		}
	}
?>