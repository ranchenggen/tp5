<?php

namespace app\api\controller\v1;

use app\api\controller\BaseController;

use app\api\model\aaaa;
use app\api\model\seckill;
use app\api\model\Shopcar;
use app\index\model\User;
use think\Db;
use think\Request;

class IndexController extends BaseController
{
    public function login($username,$pwd){

      $user=  Db::name("user")->where(["name"=>$username])->find();
      if ($user){

          $pw=Db::name('user')->where(["name"=>$username,"password"=>$pwd])->find();

          if ($pw){

              return $this->apiJson($user);
          }else{
              return $this->apiJson(null,false,"密码错误");
          }

      }else{
          return $this->apiJson(null,false,"用户名不存在");
      }
    }

    public function regist($username,$pwd){


        $user = new User();
        $user->name=$username;
        $user->password=$pwd;
        if ($user->save()){

            $usera=Db::name('user')->where(['name'=>$username,'password'=>$pwd])->find();
            return $this->apiJson($usera['id']);
        }else{
            return $this->apiJson(null,false,"添加失败");
        }


    }

    public function reset($username){

        $user=Db::name('user')->where(['name'=>$username])->find();
        if ($user){

            $user['password']="";
            $aa=new User();
           $usera= $aa->update($user);

            return $this->apiJson( $user['password']);
//            var_dump($user['password']);exit();
        }else{
            return $this->apiJson(null,false,"没有该用户");
        }

    }

    public function seckill($allPrice,$total,$productId){


        $seckill=new seckill();
        $row[]=$seckill->allPrice=$allPrice;
        $totala[]=$seckill->total=$total;
        $row[]=$seckill->productId=$productId;


        if ($seckill->save()){
            return $this->apiJson(['total'=>$totala,'row'=>$row]);
        }else{
            return $this->apiJson(null,false,"保存失败");
        }



    }
    public function aaaa($total,$price,$names,$iconUrl,$productId){

        $gyf=new aaaa();
//        echo 1111;exit();
        $totala[]=$gyf->total=$total;
        $row[]=$gyf->price=$price;
        $row[]=$gyf->names=$names;
        $row[]=$gyf->iconUrl=$iconUrl;
        $row[]=$gyf->productId=$productId;

        if ($gyf->save()){

            return $this->apiJson(['total'=>$totala,'row'=>$row]);
        }else{

            return $this->apiJson(null,false,"保存失败");
        }


    }


    public function Comment($productId){

        $comment=Db::name('comment')->where(['id'=>$productId])->find();
        if ($comment){
            return $this->apiJson($comment);
        }else{
            return $this->apiJson(null,false,"没有该商品");
        }
    }

    public function Shop($userId){
        $user=Db::name('user')->where(['id'=>$userId])->find();
        if ($user){
            return $this->apiJson(2);
        }else{
            return $this->apiJson(null,false,"没有该用户");
        }
    }

    public function Shopcar($userId,$productld,$buyCount){
        $shop=new Shopcar();
        $shop->id=$userId;
        $shop->productld=$productld;
        $shop->buyCount=$buyCount;
        if ($shop->save()){
            return $this->apiJson("");
        }else{
            return $this->apiJson(null,false,"添加失败");
        }

    }

    public function Delshopcar($userId,$productld){
        $shop=new Shopcar();
        if ($shop->where(['id'=>$userId,'productld'=>$productld])->delete()){
            return $this->apiJson("");
        }else{
            return $this->apiJson(null,false,"删除失败");
        }

    }
    public function Car($userId){

        $car=Db::name('shopcar')->where(['id'=>$userId])->find();
        if ($car){
            return $this->apiJson($car);
        }else{
            return $this->apiJson(null,false,"用户不存在");
        }


    }
}
