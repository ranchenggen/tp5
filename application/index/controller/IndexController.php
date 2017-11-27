<?php
namespace app\index\controller;


use app\index\model\Admin;
use app\index\model\User;
use think\Controller;
use think\Db;

class IndexController extends Controller
{
    public function Index()
    {

       $users= Db::name('user')->select();
//        dump($aa);exit();
        return $this->fetch('index',compact('users'));
    }


    public function deit($id)
    {


        $users=User::get($id);
//        var_dump($users->password);exit();
        $users->password="";
//        dump($aa);exit();
//        var_dump($users['name']);exit();
        if (request()->isPost()){
//            var_dump(request()->post());
            $users->name=request()->post('name');
           $users->age=request()->post('age');
            $users->password=md5(request()->post('password'));
//            var_dump($users->password);exit();



            if ($users->save()){
                $this->success('修改成功','/index/index');
            }else{
                $this->error('失败');
            }


        }
        return $this->fetch('deit',compact('users'));
    }

    public function add()
    {
        $users=new User();
        if (request()->post()){
//          var_dump(request()->post());exit();
         $users->name=request()->post('name');
         $users->age=request()->post('age');
         $users->password=md5(request()->post('password'));
         $users->status=request()->post('status');
         //$users->save();
         if ($users->save()){
             $this->success('添加成功');
         }else{
             $this->error('失败');
         }


        }
        //$users=Db::name('user')->select();

//        dump($aa);exit();
        return $this->fetch('add',compact('users'));
    }
    public function del($id){
        $user=User::get($id);
       if ($user->delete()){
           $this->success('删除成功');
       }else{
           $this->error('删除失败');
       }
    }
public function login(){
        $model=new Admin();

        if (request()->isPost()){
//            var_dump(request()->post());exit();
            $name=request()->post('name');
//            var_dump($name);exit();
            $user=Db::name('user')->where('name',$name)->find();
            if ($user===null){
                $this->error('没有该用户');
            }else{
//               var_dump($user['password']);exit();

//                var_dump(request()->post('password'));exit();
                if ($user['password']==md5(request()->post('password'))){
                    $this->success('登陆成功','/index/index');
                }else{
                    $this->error('密码错误');
                }
            }
//            var_dump($user);exit();

        }

        return $this->fetch('login',compact('model'));
}

}
