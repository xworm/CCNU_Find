<?php defined('INDEX_PAGE') or die('no entrance');

class Read extends Controller {
	
	public function __construct() {
		$this->Item = new Item();
        $this->Card = new Card();

        $this->self_conf = get_conf('self_conf');
	}

	public function claim($param) {
        $req = $this->_pretreat($param);
        out_put($this->_format($this->Item->get_items(2,$req)));
	}

    public function find($param) {
        $req = $this->_pretreat($param);
        out_put($this->_format($this->Item->get_items(1,$req)));
    }

    public function card($param) {
        $page = isset($param['page']) ? $param['page'] : 1;
        $num = $page < 1 ? $this->self_conf['index_cards'] : $this->self_conf['cards_per_page'];
        out_put($this->_format($this->Card->get_card($num)));
    }

    private  function _pretreat($param) {
        $sort = isset($param['sort']) ? array_search($param['sort'],$this->self_conf['sort']) : null;
        $param['sort'] === "all" && $sort = null;
        ($sort === false) && show_error("Notice: sort 参数错误.<br>\r\n");

        $page = isset($param['page']) ? (int)$param['page'] : 1;
        $num = $page < 1 ? $this->self_conf['index_items'] : $this->self_conf['items_per_page'];
        $offset = $page > 1 ? ($page-1)*$this->self_conf['items_per_page']+1 : 0;

        return array($sort,$num,$offset);
    }

    private function _format($array) {
        $result = Array();
        foreach($array as $k=>$v) {
            isset($v['id']) && $result[$k]['id']=$v['id'];

            if(isset($v['card_id'])) {
                $result[$k]['card_id']=$v['card_id'];
            } else {
                isset($v['name']) && $result[$k]['name']=$v['name'];
                isset($v['state']) && $result[$k]['state'] = $this->self_conf['state'][$v['state']];
                isset($v['info']) && $result[$k]['info']=$v['info'];
            }

            isset($v['place']) && $result[$k]['place']=$v['place'];
            isset($v['date']) && $result[$k]['date']=date('Y-m-d',$v['date']);
            //isset($v['time']) && $result[$k]['time']=date('Y-m-d h:i:s',$v['time']);
        }

        return $result;
    }
	
	


}
