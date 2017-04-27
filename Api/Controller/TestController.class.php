<?php
namespace Api\Controller;
use Tools\CommonController;
use Think\Exception;
use Tools\File;
/**
 * Description of Test
 *
 * @author ebeitech_lucy
 */
class TestController extends CommonController{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function test() {
        $FileOperator = new File();
        print_r($FileOperator->getNoteFilterContent());
    }
    
    public function testApi() {
        // 商品分类
        $type = D('Category');
        $Category = $type ->field('valid_flag,create_time',true) ->where('valid_flag = %d',1)->select();
        if($Category) {
            die(parent::returnApiSuccess($Category));
        }
        die(parent::returnApiError());
    }
    public function testDbConn() {
        try {
            D('Inform')->select();
            die(parent::returnApiSuccess(null,'数据库连接正常！'));
        } catch (Exception $e) {
            die(parent::returnApiError('无法连接数据库！'));
        }
    }
}
