<?php
	namespace Model;
	use \RedBeanPHP\R as R;
	class Slides extends \Model
	{
		protected $json = ['title', 'text'];
		
		//====================================================================================================
		function get()
		{
			//----- Get data types
			$data = func_get_args();
			
			//----- Get image
			if(in_array('image', $data) || !$data)
			{
				$timestamp = strtotime($this->bean->updated ?? $this->bean->created);
				$this->bean->data['image'] = path(PATH_BASE, PATH_IMAGES, 'template', 'placeholder.jpg'); $this->bean->data['thumb'] = $this->bean->data['image'];
				$path = path(PATH_IMAGES, $this->table); if(file_exists(path($path, $this->bean->file)) && is_file(path($path, $this->bean->file)))
				{ $this->bean->data['thumb'] = sprintf('%s?v=%s', path(PATH_BASE, $path, 'thumbs', $this->bean->file), $timestamp);
				$this->bean->data['image'] = sprintf('%s?v=%s', path(PATH_BASE, $path, $this->bean->file), $timestamp); }
			}

			//----- Return bean
			return $this->bean;
		}
		
		//====================================================================================================
		function delete()
		{
			//----- Remove image
			$path = path(PATH_IMAGES, $this->table);
			if(file_exists(path($path, $this->bean->file))
			&& is_file(path($path, $this->bean->file)))
			{
				unlink(path($path, $this->bean->file));
				unlink(path($path, 'thumbs', $this->bean->file));
			}
			$this->bean->file = null;
			R::store($this->bean);
		}
	}
?>