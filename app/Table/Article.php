<?php 

	namespace App\Table;
	
	class Article{

		public function __get($param)
		{
			$method = 'get' . ucfirst($param);
			$this->$param = $this->$method();

			return $this->$param;
		}
		
		public function getUrl()
		{
			return 'index.php?p=single&id=' . $this->id_article;
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function getExtrait()
		{

			$html = '<p>' . substr($this->content, 0, 150) . ' ... </p>';
			$html .= '<p><a href="' . $this->getUrl() . '"></a></p>';

			return $html;
		}
	}

?>