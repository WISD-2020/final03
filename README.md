# 系統畫面

## ◆首頁
- 餐點介紹，點餐機功能
![image](https://i.imgur.com/NJyoRyR.png)

## ◆菜單瀏覽
- 所有餐點之瀏覽，顯示價錢及餐點名稱，並加入購物車
![image](https://i.imgur.com/dyjIUz7.png)

## ◆購物車
- 欲訂購之餐點加入至購物車，並顯示小計與餐點資訊，也可選擇繼續購物
![image](https://i.imgur.com/ajuYZbj.png)
## ◆結帳畫面
- 所有結帳的清單
![image](https://i.imgur.com/DaojXIt.png)
## ◆後台登入畫面
-管理員登入
![image](https://i.imgur.com/LkLz5Qy.png)
## ◆後台管理
- 查看所有管理超連結
![image](https://i.imgur.com/PhBVGyo.png)

## ◆後台餐點管理
- 查看所有餐點，可新增、刪除、編輯餐點
![image](https://i.imgur.com/xtPcVIF.png)
![image](https://i.imgur.com/uz0QjOh.png)
![image](https://i.imgur.com/HYyBwtR.png)

## ◆後台訂單管理
- 查看所有訂單，包含已完成及未完成之訂單
![image](https://i.imgur.com/5pxbPlR.png)



## 系統名稱及作用

線上點餐機系統

   - 幫助餐廳減少人力成本，節省人事成本
    
   - 減少與人的直接接觸(尤其是疫情期間)
    
   - 降低排隊人潮
   
   - 提升點餐效率


## 系統的主要功能
★ 前台
  - 首頁菜單( Route::get('/', [HomeController::class, 'index'])->name('menu.index')); [3A732033 李譯騏](https://github.com/3A732033)
  - 購物車 (Route::post('cartlist',[CartController::class, 'index'])->name('cart.index'));[3A732033 李譯騏](https://github.com/3A732033)
  - 訂單查詢( Route::post('/cartend',[CartController::class, 'store'])->name('cart.end'));[3A732033 李譯騏](https://github.com/3A732033)

★ 後台
  - 餐點管理 (Route::get('menu', [AdminMenuController::class, 'index'])->name('admin.menu.index');) [3A732033 李譯騏](https://github.com/3A732033)
  - 訂單管理 (Route::get('order', [AdminOrderController::class, 'index'])->name('admin.order.index'); ) [3A732033 李譯騏](https://github.com/3A732033)
  
## ERD
![image](https://i.imgur.com/pLYlDWl.jpg)


## 關聯式綱要圖
![image](https://i.imgur.com/oCfB1aL.jpg)


## 主要資料表欄位設計(MySQL格式)

- 餐點 (meals)資料表
![image](https://i.imgur.com/osktUhp.jpg)
- 購物車(訂單) (orders)資料表
![image](https://i.imgur.com/memsIUO.jpg)
- 訂單詳細資料 (details)資料表
![image](https://i.imgur.com/GKBNtYo.jpg)
## 初始專案與DB負責的同學 

- 初始專案 [3A732033 李譯騏](https://github.com/3A732033)
- DB [3A732033 李譯騏](https://github.com/3A732033)



## 額外使用的套件或樣板

- 前台樣板：[Clean-Blog](https://startbootstrap.com/theme/clean-blog) 

        作為前台頁面使用

- 後台樣板：[Sidebar](https://startbootstrap.com/template/simple-sidebar) 

        作為後台管理使用
        
## 系統復原步驟
- 在cmder裡使用git clone本專案https://github.com/WISD-2020/final03
- 開啟uwamp並點選Apache Config，將Wagon*:8000的DocumentRoot指向{DOCUMENTPATH}/final03/public
- 重新啟動並運行uwamp
- 透過uwamp開啟PHPMyAdmin
- 將伺服器的資料設定成以下登入
  
  伺服器:localhost:33060
  
  帳號:root	
  
  密碼:root	

- 進入資料庫後新增一個名為final03的資料庫，並匯入final03.sql
- 使用phpstorm開啟final03專案      
- 將.env檔的設定改為如下

  DB_CONNECTION=mysql

  DB_HOST=127.0.0.1

  DB_PORT=33060

  DB_DATABASE=final03

  DB_USERNAME=root

  DB_PASSWORD=root

- 將網頁重新導向http://localhost:8000/並確認開啟成功



## 系統測試資料存放位置
    
     storage/sql/final03.sql

## 系統使用者測試帳號
★ 後台

     帳號：admin
     密碼：12345678


## 系統開發人員與工作分配

   [3A732033 李譯騏](https://github.com/3A732033)
    
      前台管理
      前台購物車及訂單總覽
      後台管理
      餐點新增、刪除、編輯
      訂單查詢、刪除、編輯
      初始專案
      DB 
      readme 撰寫
      期中報告製作
      系統測試
        
