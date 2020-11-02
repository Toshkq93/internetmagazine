<?php


namespace app\Helper;


use app\Models\Attribute;

class FilterHelper
{
    public $tpl;
    public $groups;
    public $attrs;
    private $attr_group;

    public function __construct()
    {
        $this->attr_group = new Attribute();
        $this->tpl = APP . '/Views/filter/filter.php';
        $this->run();
    }

    protected function run(){
        $this->groups = $this->attr_group->getAttrGroup();
        $this->attrs = $this->attr_group->getAttrs();
        $filters = $this->getHtml();
        echo $filters;
    }

    public function getHtml(){
        ob_start();
        if (!empty($_GET['filter'])){
            $filter = explode(',', trim(removeHtmlStr($_GET['filter'])));
        }
        require_once $this->tpl;
        return ob_get_clean();
    }
}