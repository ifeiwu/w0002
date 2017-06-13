<?php
namespace controller;

use ifeiwu\Controller;

class Home extends Controller
{
	public function _init()
	{
		$site = theme(site());
		
		$this->layout(true, $site['theme']);
		$this->assign('site', $site);
	}

	public function index()
	{
		$db = db();
		
		//作品分类
		$category = $db->select('item', array('id','title'))
					 ->where('nid = 2 AND state = 1')
					 ->order('sortby DESC, ctime DESC')
					 ->all();
		$this->assign('category', $category);
		
		//作品列表
		$where = array(array('state', '=', 1), 'AND', array('nid', '=', 1));
		
		if( $_GET['pid'] ) {
			$where[] = 'AND';
			$where[] = array('pid', '=', $_GET['pid']);
		}

		$page = $_GET['p'] ? $_GET['p'] - 1 : 0;
		$perpage = $this->view->site['item_page_count'];
	    $count = $db->select('item')->where($where)->count();
	    $works = $db->select('item', array('id','title','image','image_path','album','ctime','utime'))
					->where($where)
					->order('sortby DESC, ctime DESC')
					->limit(array($page * $perpage, $perpage))
					->all();

	    $this->assign('p', $page + 1);
		$this->assign('perpage', $perpage);
		$this->assign('count', $count);
	    $this->assign('works', $works);
		
		//新闻列表
		$events = $db->select('item', array('id','title','summary','url','url_target'))
					 ->where('nid = 3 AND state = 1')
					 ->order('sortby DESC, ctime DESC')
					 ->limit(6)
					 ->all();
		$this->assign('events', $events);
		
		//联系方式
		$contacts = $db->select('item', array('title','url','url_type'))
					   ->where('nid = 4 AND state = 1')
					   ->order('sortby DESC, ctime DESC')
					   ->all();
		$this->assign('contacts', $contacts);
		
		$this->assign('view_name', 'index');
	    $this->display();
	}

	//动态列表
	public function events()
	{
		$where = array(array('state', '=', 1), 'AND', array('nid', '=', 3));
		
		if($_GET['pid']) {
			$where[] = 'AND';
			$where[] = array('pid', '=', $_GET['pid']);
		}
		
		$page = $_GET['p'] ? $_GET['p'] - 1 : 0;
		$perpage = 6;
		
		$db = db();
		
	    $count = $db->select('item')->where($where)->count();
	    $events = $db->select('item', array('id','title','summary','url','url_target'))
					 ->where($where)
					 ->order('sortby DESC, ctime DESC')
					 ->limit(array($page * $perpage, $perpage))
					 ->all();

	    $this->assign('p', $page + 1);
		$this->assign('perpage', $perpage);
		$this->assign('count', $count);
	    $this->assign('events', $events);
		$this->assign('view_name', 'events');
	    $this->display();
	}

	public function event($id, $request)
	{
		$item = db()->select('item',array('title','content'))->where("id = $id AND state = 1")->get();
	    
	    if ($item)
		{
			$this->assign('item', $item);
			$this->display('show');
		}
		else
		{
			redirect($request->root());
		}
	}

}
