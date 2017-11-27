### 首页模块
---
>1. 轮播广告
---
URL：http://www.1000.com/index.php/Api/index/home

参数 |是否必须 | 说明
---|---|---
无|无|无


### 会员模块
---
> 1. 会员登陆
---
>URL:http://192.168.1.38:55/v1/index/login

>方式：POST

参数 |是否必须 | 说明
---|---|---
mobile|是|手机号
password|是|密码

```
{
   "success": true,
   "errorMsg": "",
   "result": {
       "id": "用户id",
       "userName": "用户名",
       "userIcon": "头像路径",
       "waitPayCount": 待付款数,
       "waitReceiveCount": 待收货数,
       "userLevel": 用户等级（1注册会员2铜牌会员3银牌会员4金牌会员5钻石会员）
   }
}
```
---
> 2. 会员注册
---
>URL:http://192.168.1.38:55/v1/index/regist

>方式：POST

参数 |是否必须 | 说明
---|---|---
mobile|是|手机号
password|是|密码（请MD5加密过后提交）

```
{
  "success": true,
  "errorMsg": "",
  "result": {
    "id": "用户id"
  }
}
```

---

> 3. 密码重置

---
>URL:http://192.168.1.38:55/v1/index/reset

参数 |是否必须 | 说明
---|---|---
id|是|用户id

```
{
  "success": true,
  "errorMsg": "",
  "result": ""
}
        

```

---

> 4. 秒杀

---

>URL:http://192.168.1.38:55/v1/index/seckill


参数 |是否必须 | 说明
---|---|---
id|是|用户id
status|否|订单状态（1、待付款 2、待发货 3、待收货 4、待评论）

```
{
  "success": true,
  "errorMsg": "",
  "result": {
      "total": "秒杀商品总数",
      "rows": [
        {
          "allPrice": "原价",
          "pointPrice": "秒杀价格",
          "iconUrl": "商品图片路径",
          "timeLeft": 秒杀剩余时间（分钟）,
          "type": 秒杀类型（1抢年货，2超值，3热卖）,
          "productId": 商品id
        }
      ]
    }
}

```

---

> 5. 猜你喜欢
---

>URL:http://192.168.1.38:55/v1/index/aaaa

参数 |是否必须 | 说明
---|---|---
id|是|用户id

```
{{
    "success": true,
    "errorMsg": "",
    "result": {
        "total": 商品数量,
        "rows": [
            {
                "price": 商品价格,
                "name": "商品名称",
                "iconUrl": "商品图片",
                "productId": 商品id
            }
        ]
    }
 }
```
---

> 6. 商品评论数

---
> URL:http://192.168.1.38:55/v1/index/Comment

> 方式：POST

参数 |是否必须 | 说明
---|---|---
```
{
    "success": true,
    "errorMsg": "",
    "result": {
        "moderateCom": 中评数,
        "allComment": 全部评论数,
        "hasImgCom": 有图评论数,
        "negativeCom": 差评数,
        "positiveCom": 好评数
    }
}
```

---

>7. 购物车商品数

---
> URL:http://192.168.1.38:55/v1/index/Shop

> 方式：POST

参数 |是否必须 | 说明
---|---|---
```
{
  "success": true,
  "errorMsg": "",
  "result": 2
}
```
---

>8. 加入购物车

---
> URL:http://192.168.1.38:55/v1/index/Shopcar

> 方式：POST

参数 |是否必须 | 说明
---|---|---
```
{
  "success": true,
  "errorMsg": "",
  "result": ""
}
```
---

>9. 删除购物车明细

---
> URL:http://192.168.1.38:55/v1/index/Delshopcar?userId=2&productld=2

> 方式：POST

参数 |是否必须 | 说明
---|---|---
id|是|用户id
birthday|是|生日日期
```
{
  "success": true,
  "errorMsg": "",
  "result": ""
}
```

>10. 购物车信息

---
> URL:http://192.168.1.38:55/v1/index/Car

> 方式：POST

参数 |是否必须 | 说明
---|---|---
```
{
   "success": true,
   "errorMsg": "",
   "result": [
       {
           "id": 购物车明细id,
           "buyCount": 购买数,
           "storeName": "商店名称",
           "pprice": 价格,
           "pimageUrl": "商品图片路径",
           "pname": "商品名称",
           "pid": 商品id,
           "stockCount": 库存,
           "storeId": 商店id,
           "pversion": "商品版本"
       }
   ]
}
```