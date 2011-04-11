<?php 
/**
 * This class is used to generate acl configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Page_Heads {
	
	protected $_db;

	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Console_Heads::update();
	 * </code>
	 * 	 
	 * @return true
	 */				
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating page headers");	
		$this->main();
	}
	
	/**
	 * Main function : call  function to retrieve informations and call the write function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Console_Heads::main();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$acl=$this->getList();
		$this->createHeads($acl);
	}
	
	/**
	 * Retrieve controller list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Heads::getList();
	 * </code>
	 * 	 
	 * @return array
	 */				
	public function getList() {		
		$pages=$this->_db->query("SELECT p.id as id,p.name as name,a.name as action,c.name as controller,m.name as module FROM page as p,module as m,action as a,controller as c WHERE m.id=p.module_id AND c.id=p.controller_id AND a.id=p.action_id");
		foreach($pages as $page) {
			$heads[$page['name']]['title']=$this->_db->query("SELECT * FROM page__title WHERE page_id='".$page['id']."'");
			$heads[$page['name']]['meta']=$this->_db->query("SELECT * FROM page__meta WHERE page_id='".$page['id']."'");
			$heads[$page['name']]['javascript']=$this->_db->query("SELECT * FROM page__javascript WHERE page_id='".$page['id']."'");
			$heads[$page['name']]['css']=$this->_db->query("SELECT * FROM page__css WHERE page_id='".$page['id']."'");
			$heads[$page['name']]['info']=array('module'=>$page['module'],'controller'=>$page['controller'],'action'=>$page['action']);	
		}
		return($heads);
	}
	
	/**
	 * write header files.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Heads::createHeads();
	 * </code>
	 * 	 
	 * @param $actions list of actions
	 * 
	 * @return true
	 */			
	public function createHeads($heads) {
		foreach($heads as $head) {		
			if(!is_dir(APPLICATION_PATH.'/modules/'.strtolower($head['info']['module']).'/configs/heads/'.strtolower($head['info']['controller'])))
				mkdir(APPLICATION_PATH.'/modules/'.strtolower($head['info']['module']).'/configs/heads/'.strtolower($head['info']['controller']));
			
			$file=APPLICATION_PATH.'/modules/'.strtolower($head['info']['module']).'/configs/heads/'.strtolower($head['info']['controller']).'/'.strtolower($head['info']['action']).'.ini';
						
			$title_content="";
			foreach($head['title'] as $title) {
				$title_content.="title.".$title['locale']."=\"".$title['value']."\"\n";		
			}
			
			$css_content="\n\n";
			foreach($head['css'] as $css) {
				$css_content.="css.".$css['identifiant']."=\"".$css['file']."\"\n";		
			}	
						
			$javascript_content="\n\n";
			foreach($head['javascript'] as $js) {
				$javascript_content.="javascript.".$js['identifiant']."=\"".$js['file']."\"\n";		
			}		

			$data=$title_content.$css_content.$javascript_content;
			
			My_Class_Maerdo_Console::display("3","Writing ".ucfirst($head['info']['module']).'::'.$head['info']['controller'].'::'.$head['info']['action'].' headers');	
			file_put_contents($file,$data);
		}	
		
		return true;		
	}
}

