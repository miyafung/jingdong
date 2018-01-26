-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?01 �?26 �?02:27
-- 服务器版本: 5.5.53
-- PHP 版本: 7.0.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `jd`
--

-- --------------------------------------------------------

--
-- 表的结构 `jd_address`
--

CREATE TABLE IF NOT EXISTS `jd_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_address_name` varchar(255) DEFAULT NULL,
  `user_address_phone` varchar(255) DEFAULT NULL,
  `user_address_province` varchar(255) DEFAULT NULL,
  `user_address_city` varchar(255) DEFAULT NULL,
  `user_address_district` varchar(255) DEFAULT NULL,
  `user_address_detail` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL COMMENT 'address_default',
  `address_default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户的默认地址0为不默认1为默认',
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `jd_address`
--

INSERT INTO `jd_address` (`address_id`, `user_address_name`, `user_address_phone`, `user_address_province`, `user_address_city`, `user_address_district`, `user_address_detail`, `user_id`, `address_default`) VALUES
(2, '小红', '18808800877', '1', '1', '1', '小红大酒店，长安街20号', 8, 0),
(3, '小刚子', '19909990909', '1', '1', '1', '紫禁城漱芳斋一号院', 8, 1),
(4, '小白', '13303333033', '1', '1', '1', '长安街地下通道', 9, 1),
(5, '大刚子', '19909990909', '1', '1', '2', '紫禁城养心殿', 8, 0);

-- --------------------------------------------------------

--
-- 表的结构 `jd_admin`
--

CREATE TABLE IF NOT EXISTS `jd_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `jd_admin`
--

INSERT INTO `jd_admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(7, '12345678', '25d55ad283aa400af464c76d713c07ad'),
(14, '1234567', '25d55ad283aa400af464c76d713c07ad'),
(15, 'admin', '25d55ad283aa400af464c76d713c07ad'),
(16, 'xiaoming', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- 表的结构 `jd_cate`
--

CREATE TABLE IF NOT EXISTS `jd_cate` (
  `cate_id` int(10) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) NOT NULL,
  `cate_pid` int(10) NOT NULL DEFAULT '0',
  `cate_sort` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `jd_cate`
--

INSERT INTO `jd_cate` (`cate_id`, `cate_name`, `cate_pid`, `cate_sort`) VALUES
(1, '家用电器', 0, 1),
(2, '电视', 1, 6),
(3, '冰箱', 1, 5),
(4, '洗衣机', 1, 0),
(5, '手机', 0, 0),
(6, '电脑', 0, 3),
(7, '手机通信', 5, 0),
(8, '空调', 1, 2),
(9, '合资品牌', 2, 2),
(10, '手机1', 7, 0),
(11, '国产品牌', 2, 3),
(12, '互联网品牌', 2, 1),
(13, '多门', 3, 3),
(14, '对门', 3, 1),
(15, '三门', 3, 2),
(17, '滚筒式洗衣机', 4, 0),
(18, '壁挂式空调', 8, 0),
(19, '电脑整机', 6, 0),
(20, '笔记本', 19, 0),
(21, '食品', 0, 0),
(22, '休闲食品', 21, 0),
(23, '坚果炒货', 22, 0);

-- --------------------------------------------------------

--
-- 表的结构 `jd_city`
--

CREATE TABLE IF NOT EXISTS `jd_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jd_city`
--

INSERT INTO `jd_city` (`city_id`, `city_name`) VALUES
(1, '北京'),
(2, '天津');

-- --------------------------------------------------------

--
-- 表的结构 `jd_commentgoods`
--

CREATE TABLE IF NOT EXISTS `jd_commentgoods` (
  `goods_id` int(11) DEFAULT NULL,
  `comment_contents` varchar(255) DEFAULT NULL,
  `comment_score` varchar(255) DEFAULT '1' COMMENT '5：好评；3：中评：1：差评',
  `order_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jd_commentgoods`
--

INSERT INTO `jd_commentgoods` (`goods_id`, `comment_contents`, `comment_score`, `order_id`, `user_id`) VALUES
(6, '非常好', '3', 24, 8),
(8, '一般般', '1', 24, 8);

-- --------------------------------------------------------

--
-- 表的结构 `jd_district`
--

CREATE TABLE IF NOT EXISTS `jd_district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jd_district`
--

INSERT INTO `jd_district` (`district_id`, `district_name`) VALUES
(1, '东城区'),
(2, '西城区');

-- --------------------------------------------------------

--
-- 表的结构 `jd_goods`
--

CREATE TABLE IF NOT EXISTS `jd_goods` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `goods_name` varchar(200) NOT NULL COMMENT '商品名称',
  `goods_thumb` varchar(200) NOT NULL COMMENT '商品缩略图',
  `goods_price` double(20,2) unsigned NOT NULL COMMENT '商品价格',
  `goods_after_price` double(20,2) NOT NULL,
  `goods_status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '商品状态0：不上架；1：上架',
  `goods_sales` int(10) NOT NULL DEFAULT '0' COMMENT '商品销量',
  `goods_inventory` int(10) NOT NULL DEFAULT '0' COMMENT '商品库存',
  `goods_pid` int(10) NOT NULL COMMENT '商品分类',
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `jd_goods`
--

INSERT INTO `jd_goods` (`goods_id`, `goods_name`, `goods_thumb`, `goods_price`, `goods_after_price`, `goods_status`, `goods_sales`, `goods_inventory`, `goods_pid`) VALUES
(5, '良品铺子干果', '\\jd\\public\\uploads\\20170417\\4d7c77e5646d61504ac55bfc2f49097a.jpg', 14.00, 12.00, 1, 9000, 1000, 23),
(6, '华为荣耀畅玩6c', '\\jd\\public\\uploads\\20170417\\a93c3ca3dde85ef615fba87322cd877d.jpg', 1288.88, 1000.00, 1, 800, 10000, 10),
(8, '华为畅玩5A', '\\jd\\public\\uploads\\20170423\\9ef3f3536a7eee14ea62a5e0f3135751.jpg', 1200.00, 1200.00, 1, 1000, 2000, 10),
(9, 'iphone 7', '\\jd\\public\\uploads\\20170413\\dfdc4315cd138dce036432fbddcd0e5f.jpg', 5000.00, 5000.00, 1, 1000, 2222, 10),
(21, '苹果7', '\\jd\\public\\uploads\\20170416\\1100b50865ba98bbc40afd640a7750e1.jpg', 3000.00, 2800.00, 1, 10000, 200, 10),
(22, 'iphone 7', '\\jd\\public\\uploads\\20170416\\ce7da49627453e75640b6b480d2d0691.jpg', 4800.00, 4700.00, 1, 10000, 9000, 10),
(23, '1111', '\\jd\\public\\uploads\\20170418\\b0a9914f651e6e6e7f2f9d36e9f776aa.jpg', 1111.00, 1000.00, 1, 1111, 111, 10),
(24, '1111', '\\jd\\public\\uploads\\20170418\\3d1e63a74f04b45d7dc18a7f0b172658.jpg', 1111.00, 1000.00, 1, 1111222, 2222, 23),
(25, '1222222', '\\jd\\public\\uploads\\20170418\\76da6d8e5ff096e5d985bb39b126bf58.jpg', 1234.00, 1222.00, 1, 123, 123, 10),
(26, '123', '\\jd\\public\\uploads\\20170418\\67dc5af701e376c2af7fe0fcebc0eca7.jpg', 1234.00, 1233.00, 1, 1222, 1232, 10),
(27, '2017419', '\\jd\\public\\uploads\\20170419\\499cf6cd41aa39e855f1208c6f0d6456.jpg', 1234.00, 1233.00, 1, 12345, 12334, 10),
(28, '111111111111111', '\\jd\\public\\uploads\\20171027\\4111166401a3e381ebb17f732790a2e4.png', 123.00, 122.00, 1, 111, 11, 23),
(29, '1111111111111111', '\\jd\\public\\uploads\\20171205\\91a949a8fc714fa2b9aaaff18432e66f.png', 1111.00, 11.00, 1, 1111, 111, 9),
(30, '111', '\\jd\\public\\uploads\\20171204\\cef50835096168a685a1687623822433.png', 111.00, 11.00, 0, 1, 12, 20),
(31, '111111111111', '\\jd\\public\\uploads\\20171205\\a4c771646c30bbff169587aa95012ac9.png', 1111111111.00, 11111111.00, 0, 111, 11, 20);

-- --------------------------------------------------------

--
-- 表的结构 `jd_goodsproperty`
--

CREATE TABLE IF NOT EXISTS `jd_goodsproperty` (
  `goodsproperty_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(100) NOT NULL,
  `goodsproperty_content` varchar(100) NOT NULL,
  `goods_id` int(10) NOT NULL COMMENT '所属商品的id',
  PRIMARY KEY (`goodsproperty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- 转存表中的数据 `jd_goodsproperty`
--

INSERT INTO `jd_goodsproperty` (`goodsproperty_id`, `property_id`, `goodsproperty_content`, `goods_id`) VALUES
(89, 1, '苹果', 5),
(100, 3, '256g', 6),
(101, 4, '安卓', 6);

-- --------------------------------------------------------

--
-- 表的结构 `jd_goods_keywords`
--

CREATE TABLE IF NOT EXISTS `jd_goods_keywords` (
  `goods_id` int(11) NOT NULL,
  `keywords_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jd_goods_keywords`
--

INSERT INTO `jd_goods_keywords` (`goods_id`, `keywords_id`) VALUES
(6, 1),
(6, 2),
(6, 3),
(5, 18),
(9, 3),
(9, 12),
(9, 1),
(9, 19),
(4, 5),
(8, 2),
(29, 5);

-- --------------------------------------------------------

--
-- 表的结构 `jd_img`
--

CREATE TABLE IF NOT EXISTS `jd_img` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `goods_id` int(10) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=173 ;

--
-- 转存表中的数据 `jd_img`
--

INSERT INTO `jd_img` (`img_id`, `url`, `goods_id`) VALUES
(20, '\\jd\\public\\uploads\\img\\20170416\\1cf63470cd83a5a9e4b651fde591cb02.jpg', 22),
(21, '\\jd\\public\\uploads\\img\\20170416\\50ca234324f13e218cedb4a1090436c5.jpg', 22),
(22, '\\jd\\public\\uploads\\img\\20170416\\9d96d124a97084de770609e0907b1edb.jpg', 22),
(23, '\\jd\\public\\uploads\\img\\20170416\\59221dfdc244ec7cc0e2f6dbad8b08b7.jpg', 22),
(24, '\\jd\\public\\uploads\\img\\20170416\\bbb7ee5df0ff0c1198225ff441a5d41e.jpg', 22),
(25, '\\jd\\public\\uploads\\img\\20170416\\607a25e73e447a9121a08e57a8ba377c.jpg', 22),
(26, '\\jd\\public\\uploads\\img\\20170416\\1cf63470cd83a5a9e4b651fde591cb02.jpg', 22),
(27, '\\jd\\public\\uploads\\img\\20170416\\50ca234324f13e218cedb4a1090436c5.jpg', 22),
(28, '\\jd\\public\\uploads\\img\\20170416\\9d96d124a97084de770609e0907b1edb.jpg', 22),
(29, '\\jd\\public\\uploads\\img\\20170416\\59221dfdc244ec7cc0e2f6dbad8b08b7.jpg', 22),
(30, '\\jd\\public\\uploads\\img\\20170416\\bbb7ee5df0ff0c1198225ff441a5d41e.jpg', 22),
(31, '\\jd\\public\\uploads\\img\\20170416\\607a25e73e447a9121a08e57a8ba377c.jpg', 22),
(111, '\\jd\\public\\uploads\\img\\20170418\\61dcf94ea5690c35b2de01df910405b9.jpg', 23),
(112, '\\jd\\public\\uploads\\img\\20170418\\da6cccb77214e897e45c9e4749083168.jpg', 23),
(113, '\\jd\\public\\uploads\\img\\20170418\\a36b844414025b9d3a16d780df6cf46e.jpg', 23),
(114, '\\jd\\public\\uploads\\img\\20170418\\44f7fc90a245635371b08f377fed4f09.jpg', 24),
(115, '\\jd\\public\\uploads\\img\\20170418\\a662ed3f3f7f09796bb9fbf647e07d25.jpg', 24),
(116, '\\jd\\public\\uploads\\img\\20170418\\1c80b332036bc3a2ebad81b9e9419d7e.jpg', 24),
(117, '\\jd\\public\\uploads\\img\\20170418\\581ab65f1e14f20a9b38cd53280f4096.jpg', 24),
(144, '\\jd\\public\\uploads\\img\\20170419\\f936b06c156a4cd21196e849a6d12fb6.jpg', 25),
(145, '\\jd\\public\\uploads\\img\\20170419\\76f8fa2ec9a2bd5a09947a7a91502cf8.jpg', 25),
(146, '\\jd\\public\\uploads\\img\\20170419\\bb136bea3e1d411cd30e47d1ae533a8c.jpg', 25),
(150, '\\jd\\public\\uploads\\img\\20170419\\15d49226b48942eae0aab28579ddae0f.jpg', 25),
(151, '\\jd\\public\\uploads\\img\\20170419\\fda428d254eee1d8b3c32af7baf3308e.jpg', 25),
(154, '\\jd\\public\\uploads\\img\\20170419\\991edaf0d51507ab00371681a2738d06.jpg', 27),
(155, '\\jd\\public\\uploads\\img\\20170419\\a9844ea98aea322de33dbfad65b3d39f.jpg', 27),
(156, '\\jd\\public\\uploads\\img\\20170419\\279579883a43f56fcb4343b43fa8821b.jpg', 27),
(157, '\\jd\\public\\uploads\\img\\20170419\\2ce8279cf1574765d5a4ef89fb4fb991.jpg', 27),
(161, '\\jd\\public\\uploads\\img\\20170422\\dcab76338c2e50c0edcba98f9bedd961.jpg', 4),
(162, '\\jd\\public\\uploads\\img\\20170422\\2ce31a8f92aedc90ea1f8315a7120863.jpg', 4),
(163, '\\jd\\public\\uploads\\img\\20170422\\f96d3825feb6fbf057e4998f18f8d4f4.jpg', 4),
(164, '\\jd\\public\\uploads\\img\\20170422\\a33a8a5f05332aaa8d8fdb067e20ab6a.jpg', 4),
(165, '\\jd\\public\\uploads\\img\\20170422\\ca610b5019fcea2cb9a30aa9dcc76978.jpg', 4),
(166, '\\jd\\public\\uploads\\img\\20170422\\d80fc528fdcad8b208468fc3d5ccae9e.jpg', 4),
(167, '\\jd\\public\\uploads\\img\\20171027\\86eb2537d60edd946ee23fe60ad1cc86.png', 28),
(168, '\\jd\\public\\uploads\\img\\20171027\\ee6f6393da327b1af38918e00f05fa87.png', 29),
(169, '\\jd\\public\\uploads\\img\\20171204\\fdac478ff802e55a922ea328e2c22f8e.png', 30),
(170, '\\jd\\public\\uploads\\img\\20171204\\6f6b11734ea4fa16859d38367ca9b74d.png', 30),
(171, '\\jd\\public\\uploads\\img\\20171204\\eaf8a66e3cd131c38e84769c6d9c8944.png', 30),
(172, '\\jd\\public\\uploads\\img\\20171205\\7847ccbc26f521a86c9a7d55110e8b18.png', 31);

-- --------------------------------------------------------

--
-- 表的结构 `jd_keywords`
--

CREATE TABLE IF NOT EXISTS `jd_keywords` (
  `keywords_id` int(11) NOT NULL AUTO_INCREMENT,
  `keywords_name` varchar(100) NOT NULL,
  PRIMARY KEY (`keywords_id`),
  UNIQUE KEY `keywords_name` (`keywords_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `jd_keywords`
--

INSERT INTO `jd_keywords` (`keywords_id`, `keywords_name`) VALUES
(3, '128g'),
(17, '16g'),
(13, '1g'),
(10, '256g'),
(14, '2g'),
(5, '32g'),
(15, '3g'),
(12, '4g'),
(4, '64g'),
(16, '8g'),
(19, 'iPhone'),
(11, '全网通'),
(2, '华为'),
(22, '双卡双待'),
(6, '双摄像头'),
(18, '干果'),
(1, '手机'),
(7, '手机1'),
(9, '手机2'),
(21, '移动4G手机'),
(20, '荣耀'),
(8, '魅海蓝');

-- --------------------------------------------------------

--
-- 表的结构 `jd_order`
--

CREATE TABLE IF NOT EXISTS `jd_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `order_time` varchar(100) DEFAULT NULL,
  `order_status` int(4) DEFAULT NULL COMMENT '-1:订单失效；0：订单完成；1：待付款；2：待发货：3：待收货',
  `order_address` varchar(255) DEFAULT NULL,
  `comment_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `jd_order`
--

INSERT INTO `jd_order` (`order_id`, `user_id`, `order_time`, `order_status`, `order_address`, `comment_time`) VALUES
(21, 8, '1497946966', 1, '2', NULL),
(23, 8, '1498006651', 3, '3', NULL),
(24, 8, '1498179735', 0, '2', '1498179797');

-- --------------------------------------------------------

--
-- 表的结构 `jd_ordergoods`
--

CREATE TABLE IF NOT EXISTS `jd_ordergoods` (
  `ordergoods_id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `goods_num` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ordergoods_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `jd_ordergoods`
--

INSERT INTO `jd_ordergoods` (`ordergoods_id`, `goods_id`, `goods_num`, `order_id`) VALUES
(4, 6, 16, 21),
(6, 6, 13, 23),
(7, 6, 13, 24),
(8, 8, 15, 24);

-- --------------------------------------------------------

--
-- 表的结构 `jd_property`
--

CREATE TABLE IF NOT EXISTS `jd_property` (
  `property_id` int(10) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(30) NOT NULL DEFAULT '',
  `property_pid` int(10) DEFAULT NULL COMMENT '属性所属的分类',
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `jd_property`
--

INSERT INTO `jd_property` (`property_id`, `property_name`, `property_pid`) VALUES
(1, '手机名称', 10),
(2, '笔记本名称', 20),
(3, '商品毛重', 10),
(4, '系统', 10),
(5, '运行内存', 10);

-- --------------------------------------------------------

--
-- 表的结构 `jd_province`
--

CREATE TABLE IF NOT EXISTS `jd_province` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jd_province`
--

INSERT INTO `jd_province` (`province_id`, `province_name`) VALUES
(1, '北京市'),
(2, '天津市');

-- --------------------------------------------------------

--
-- 表的结构 `jd_shopcart`
--

CREATE TABLE IF NOT EXISTS `jd_shopcart` (
  `shopcart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `goods_num` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`shopcart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `jd_shopcart`
--

INSERT INTO `jd_shopcart` (`shopcart_id`, `user_id`, `goods_id`, `goods_num`) VALUES
(2, 8, 6, 13),
(6, 8, 8, 15);

-- --------------------------------------------------------

--
-- 表的结构 `jd_user`
--

CREATE TABLE IF NOT EXISTS `jd_user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户邮箱是否激活，0未激活，1激活',
  `user_phone` varchar(11) NOT NULL DEFAULT '0',
  `user_nickname` varchar(30) DEFAULT NULL COMMENT '用户的昵称',
  `user_name` varchar(30) DEFAULT NULL COMMENT '用户姓名',
  `user_sex` tinyint(1) DEFAULT '0' COMMENT '0：保密，1：男，2：女',
  `user_birth` varchar(100) NOT NULL COMMENT '用户生日',
  `user_pay_password` varchar(100) DEFAULT '' COMMENT '用户的支付密码',
  `user_pay_password_status` tinyint(1) DEFAULT '0' COMMENT '用户的支付密码是否启用0：不启用，1：启用',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `jd_user`
--

INSERT INTO `jd_user` (`user_id`, `user_email`, `user_password`, `user_email_active`, `user_phone`, `user_nickname`, `user_name`, `user_sex`, `user_birth`, `user_pay_password`, `user_pay_password_status`) VALUES
(8, '425532268@qq.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '15040360478', '大明222', '小明明', 0, '2017-06-01', 'e10adc3949ba59abbe56e057f20f883e', 1),
(16, '123456@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '0', '', NULL, 1, '', '', 0),
(17, '123422256@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '0', '', NULL, 1, '', '', 0),
(18, '1234222526@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '0', '', NULL, 1, '', '', 0),
(19, '', 'e10adc3949ba59abbe56e057f20f883e', 0, '13333333333', '', NULL, 1, '', '', 0),
(22, '', 'e10adc3949ba59abbe56e057f20f883e', 0, '13333333335', '', NULL, 1, '', '', 0),
(24, '', '', 0, '', '小叮当', '小明', 1, '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
