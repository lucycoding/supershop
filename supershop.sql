/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50622
Source Host           : 127.0.0.1:3306
Source Database       : supershop

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2017-03-28 23:29:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `admin_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '100000-999999',
  `admin_name` char(16) NOT NULL,
  `admin_nickname` varchar(32) DEFAULT '',
  `admin_logo_url` varchar(256) DEFAULT '',
  `admin_email` char(32) DEFAULT '',
  `admin_phone` char(32) DEFAULT '',
  `admin_keyval` char(40) NOT NULL DEFAULT '',
  `valid_flag` char(1) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login_ip` char(16) NOT NULL DEFAULT '0.0.0.0' COMMENT '上次登录ip地址',
  `login_count` bigint(40) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `role_id` bigint(20) DEFAULT '0',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id` (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=100006 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('100000', 'suadmin', '商城超级管理员', '', 'admin@supershop.com', '13951755802', '21232f297a57a5a743894a0e4a801fc3', '1', '2016-02-28 22:46:40', '2017-03-24 00:33:03', '未知IP', '30', '0');
INSERT INTO `tb_admin` VALUES ('100001', 'liming', '', '', null, '', '21232f297a57a5a743894a0e4a801fc3', '1', '2016-02-29 16:31:23', '2016-03-03 14:21:47', '127.0.0.1', '10', '1001');
INSERT INTO `tb_admin` VALUES ('100002', 'lixiang', '', '', null, '', '21232f297a57a5a743894a0e4a801fc3', '1', '2016-02-29 22:03:50', '2016-02-29 22:20:11', '127.0.0.1', '2', '1002');
INSERT INTO `tb_admin` VALUES ('100005', 'useradmin', '', '', '', '', 'user123456', '1', '2016-03-10 12:31:41', '0000-00-00 00:00:00', '0.0.0.0', '0', '1002');

-- ----------------------------
-- Table structure for `tb_admin_log`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin_log`;
CREATE TABLE `tb_admin_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `admin_id` char(20) NOT NULL,
  `admin_name` char(16) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ip` char(20) NOT NULL DEFAULT '0.0.0.0',
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin_log
-- ----------------------------
INSERT INTO `tb_admin_log` VALUES ('1', '100000', 'admin', '2016-02-29 18:20:34', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('2', '100000', 'admin', '2016-02-29 18:27:20', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('3', '100001', 'liming', '2016-02-29 18:31:00', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('4', '100001', 'liming', '2016-02-29 18:32:09', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('5', '100002', 'lixiang', '2016-02-29 22:04:25', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('6', '100002', 'lixiang', '2016-02-29 22:20:11', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('7', '100000', 'admin', '2016-02-29 22:22:31', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('8', '100000', 'admin', '2016-03-01 00:55:02', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('9', '100000', 'admin', '2016-03-01 15:31:16', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('10', '100000', 'admin', '2016-03-01 16:03:09', '192.168.1.108');
INSERT INTO `tb_admin_log` VALUES ('11', '100000', 'admin', '2016-03-01 16:57:57', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('12', '100000', 'admin', '2016-03-01 17:14:23', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('13', '100001', 'liming', '2016-03-01 17:16:55', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('14', '100000', 'admin', '2016-03-01 17:17:17', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('15', '100001', 'liming', '2016-03-01 17:17:46', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('16', '100000', 'admin', '2016-03-01 17:53:43', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('17', '100000', 'admin', '2016-03-01 17:55:39', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('18', '100000', 'admin', '2016-03-01 17:57:16', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('19', '100001', 'liming', '2016-03-01 18:03:30', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('20', '100001', 'liming', '2016-03-01 22:49:03', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('21', '100000', 'admin', '2016-03-01 22:49:40', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('22', '100000', 'admin', '2016-03-01 22:53:17', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('23', '100000', 'admin', '2016-03-01 23:00:03', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('24', '100001', 'liming', '2016-03-01 23:00:29', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('25', '100000', 'admin', '2016-03-02 08:59:11', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('26', '100000', 'admin', '2016-03-02 13:06:59', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('27', '100000', 'admin', '2016-03-03 13:42:43', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('28', '100001', 'liming', '2016-03-03 13:43:37', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('29', '100000', 'admin', '2016-03-03 13:44:21', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('30', '100001', 'liming', '2016-03-03 13:49:52', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('31', '100001', 'liming', '2016-03-03 14:21:47', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('32', '100000', 'admin', '2016-03-03 14:38:03', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('33', '100000', 'admin', '2016-03-03 22:30:18', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('34', '100000', 'admin', '2016-03-03 22:52:51', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('35', '100000', 'admin', '2016-03-07 12:05:37', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('36', '100000', 'suadmin', '2016-03-09 09:41:48', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('37', '100000', 'suadmin', '2016-03-09 19:05:51', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('38', '100000', 'suadmin', '2016-03-09 19:29:27', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('39', '100000', 'suadmin', '2016-03-11 16:07:22', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('40', '100000', 'suadmin', '2016-03-31 16:45:58', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('41', '100000', 'suadmin', '2016-04-03 15:40:45', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('42', '100000', 'suadmin', '2016-04-20 01:45:49', '127.0.0.1');
INSERT INTO `tb_admin_log` VALUES ('43', '100000', 'suadmin', '2017-03-24 00:33:03', '未知IP');

-- ----------------------------
-- Table structure for `tb_auth`
-- ----------------------------
DROP TABLE IF EXISTS `tb_auth`;
CREATE TABLE `tb_auth` (
  `auth_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(32) NOT NULL COMMENT '权限名称',
  `auth_icon` varchar(32) DEFAULT '' COMMENT '权限bootstrap图标',
  `auth_pid` bigint(20) NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '控制器',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) DEFAULT '' COMMENT '全路径',
  `valid_flag` char(1) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '级别',
  PRIMARY KEY (`auth_id`),
  UNIQUE KEY `auth_id` (`auth_id`),
  KEY `auth_level` (`auth_level`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10026 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_auth
-- ----------------------------
INSERT INTO `tb_auth` VALUES ('10001', '用户管理', null, '0', '', '', '10001', '1', '2016-02-29 16:09:20', '0');
INSERT INTO `tb_auth` VALUES ('10002', '订单管理', null, '0', '', '', '10002', '1', '2016-02-29 16:14:02', '0');
INSERT INTO `tb_auth` VALUES ('10003', '商品管理', null, '0', '', '', '10003', '1', '2016-02-29 16:14:02', '0');
INSERT INTO `tb_auth` VALUES ('10004', '公告管理', null, '0', '', '', '10004', '1', '2016-02-29 16:14:02', '0');
INSERT INTO `tb_auth` VALUES ('10005', '论坛管理', null, '0', '', '', '10005', '1', '2016-02-29 16:14:02', '0');
INSERT INTO `tb_auth` VALUES ('10006', 'Admin管理', null, '0', '', '', '10006', '1', '2016-02-29 16:14:02', '0');
INSERT INTO `tb_auth` VALUES ('10007', '权限管理', null, '0', '', '', '10007', '1', '2016-02-29 16:14:02', '0');
INSERT INTO `tb_auth` VALUES ('10008', '普通用户', 'user', '10001', 'ManageUser', 'userList', '10001-10008', '1', '2016-02-29 16:21:53', '1');
INSERT INTO `tb_auth` VALUES ('10009', '全部订单', 'zoom-in', '10002', 'ManageOrder', 'orderList', '10002-10009', '1', '2016-02-29 16:21:53', '1');
INSERT INTO `tb_auth` VALUES ('10010', '未发货订单', 'remove-circle', '10002', 'ManageOrder', 'orderList/type/0', '10002-10010', '1', '2016-02-29 16:21:53', '1');
INSERT INTO `tb_auth` VALUES ('10011', '已发货订单', 'ok-circle', '10002', 'ManageOrder', 'orderList/type/1', '10002-10011', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10012', '已确认收货订单', 'ban-circle', '10002', 'ManageOrder', 'orderList/type/2', '10002-10012', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10013', '类别管理', 'list', '10003', 'ManageGoodsType', 'goodsTypeList', '10003-10013', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10014', '添加商品', 'plus-sign', '10003', 'ManageGoods', 'addGoods', '10003-10014', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10015', '查看商品', 'search', '10003', 'ManageGoods', 'goodsList', '10003-10015', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10016', '添加公告', 'plus-sign', '10017', 'ManageInform', 'addInform', '10004-10017-10016', '1', '2016-02-29 22:54:17', '2');
INSERT INTO `tb_auth` VALUES ('10017', '查看公告', 'tasks', '10004', 'ManageInform', 'informList', '10004-10017', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10018', '查看用户帖子', 'comment', '10005', 'ManageNote', 'noteList', '10005-10018', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10019', '添加管理员', 'plus-sign', '10006', 'ManageAdmin', 'addAdmin', '10006-10019', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10020', '所有管理员', 'align-justify', '10006', 'ManageAdmin', 'adminList', '10006-10020', '1', '2016-02-29 22:54:17', '1');
INSERT INTO `tb_auth` VALUES ('10021', '角色列表', 'lock', '10007', 'ManageRole', 'roleList', '10007-10021', '1', '2016-02-29 23:25:37', '1');
INSERT INTO `tb_auth` VALUES ('10022', '权限列表', 'lock', '10007', 'ManageAuth', 'authList', '10007-10022', '1', '2016-03-01 12:51:11', '1');
INSERT INTO `tb_auth` VALUES ('10023', '添加用户', 'plus-sign', '10008', 'ManageUser', 'addUser', '10001-10008-10023', '1', '2016-03-02 13:20:44', '2');
INSERT INTO `tb_auth` VALUES ('10024', '添加权限', 'plus-sign', '10022', 'ManageAuth', 'addAuth', '10007-10022-10024', '1', '2016-03-03 00:39:12', '2');
INSERT INTO `tb_auth` VALUES ('10025', '添加类别', 'plus-sign', '10013', 'ManageGoodsType', 'addGoodsType', '10003-10013-10025', '1', '2016-03-04 10:37:12', '2');

-- ----------------------------
-- Table structure for `tb_category`
-- ----------------------------
DROP TABLE IF EXISTS `tb_category`;
CREATE TABLE `tb_category` (
  `type_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '1000-9999',
  `type_name` varchar(128) NOT NULL COMMENT '分类名称或活动名称',
  `type_pid` bigint(20) NOT NULL DEFAULT '0' COMMENT '父分类id',
  `type_path` varchar(32) DEFAULT '' COMMENT '全路径',
  `valid_flag` char(1) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '级别',
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1014 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_category
-- ----------------------------
INSERT INTO `tb_category` VALUES ('1001', '所有分类', '0', '1001', '1', '2016-02-29 00:04:01', '0');
INSERT INTO `tb_category` VALUES ('1002', '数码', '1001', '1001-1002', '1', '2016-03-04 10:48:27', '1');
INSERT INTO `tb_category` VALUES ('1003', '家电', '1001', '1001-1003', '1', '2016-03-04 10:56:21', '1');
INSERT INTO `tb_category` VALUES ('1004', '图书', '1001', '1001-1004', '1', '2016-03-04 10:57:58', '1');
INSERT INTO `tb_category` VALUES ('1005', '打折促销', '0', '1005', '1', '2016-03-04 10:58:18', '0');
INSERT INTO `tb_category` VALUES ('1006', '女人节特惠', '0', '1006', '1', '2016-03-04 10:58:34', '0');
INSERT INTO `tb_category` VALUES ('1007', '电脑', '1001', '1001-1007', '1', '2016-03-07 17:01:34', '1');
INSERT INTO `tb_category` VALUES ('1008', '手机', '1001', '1001-1008', '1', '2016-03-07 17:01:43', '1');
INSERT INTO `tb_category` VALUES ('1009', '服装', '1001', '1001-1009', '1', '2016-03-07 17:02:09', '1');
INSERT INTO `tb_category` VALUES ('1010', '化妆', '1001', '1001-1010', '1', '2016-03-07 17:32:08', '1');
INSERT INTO `tb_category` VALUES ('1011', '零食', '1001', '1001-1011', '1', '2016-03-07 17:32:15', '1');
INSERT INTO `tb_category` VALUES ('1012', '手机', '1001', '1001-1012', '1', '2016-03-31 17:04:47', '1');
INSERT INTO `tb_category` VALUES ('1013', '小米', '1012', '1001-1012-1013', '1', '2016-03-31 17:05:04', '2');

-- ----------------------------
-- Table structure for `tb_goods`
-- ----------------------------
DROP TABLE IF EXISTS `tb_goods`;
CREATE TABLE `tb_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL COMMENT '1000000-9999999',
  `goods_name` varchar(128) DEFAULT NULL COMMENT '商品名称',
  `goods_info` text COMMENT '商品详情',
  `goods_old_price` float DEFAULT NULL COMMENT '原价',
  `goods_now_price` float DEFAULT NULL COMMENT '现价',
  `goods_image_url` varchar(128) DEFAULT NULL COMMENT '商品图片url',
  `goods_thumb_url` varchar(128) DEFAULT NULL,
  `goods_produce_place` varchar(20) DEFAULT NULL COMMENT '产地',
  `goods_produce_date` varchar(20) DEFAULT NULL COMMENT '生产日期',
  `goods_brand` varchar(20) DEFAULT NULL COMMENT '商品品牌',
  `goods_num` bigint(20) DEFAULT '0' COMMENT '商品库存',
  `goods_sold_num` bigint(20) DEFAULT '0',
  `status` char(1) DEFAULT '0' COMMENT '是否下架',
  `valid_flag` char(1) DEFAULT '0' COMMENT '商品是否显示',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '商品添加时间',
  `last_update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `goods_id` (`goods_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1000017 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_goods
-- ----------------------------
INSERT INTO `tb_goods` VALUES ('1000003', '1000003', 'Sony/索尼 DSC-W730数码相机 1600万 8倍变焦 正品特价 送自拍镜呢 ', '索尼W730采用了1610万像素的CCD传感器，搭配了25-200mm的8倍变焦镜头，需要注意的是这枚镜头与WX80为卡尔蔡司级别的产品，可以满足绝大普通用户的需求。', '550', '435', 'Public/upload/2016-03-07/56dd36637ad7a.jpg', 'Public/upload/2016-03-07/thumb_56dd36637ad7a.jpg', '中国', '2015/02/24', '索尼/sony', '50', '0', '1', '1', '2016-03-07 16:05:55', '2016-04-03 15:42:21');
INSERT INTO `tb_goods` VALUES ('1000004', '1000004', 'Razer雷蛇 Ouroboros奥罗波若蛇 有线/无线双模式游戏鼠标 顺丰包邮 ', '完全可自定义人体工程学设计，适合所有手掌大小以及抓握方式，8200dpi 4G激光传感器，1毫秒游戏级无线技术。掌控无限，鼠标中的艺术品！ ', '899', '799', 'Public/upload/2016-03-07/56dd4328a5a83.jpg', 'Public/upload/2016-03-07/thumb_56dd4328a5a83.jpg', '中国上海', '2015/02/24', '雷蛇/razer', '50', '0', '1', '1', '2016-03-07 17:00:24', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000005', '1000005', 'Lenovo/联想Y510p-ISE(H)4代i7 15寸游戏笔记本电脑独显2G高清屏 ', '强悍的小Y,联想高端游戏本，2014年顶级显卡，1920*1080P超清屏，最高配置i7四核八线程处理，多任务处理，得心应手，大型游戏，游刃有余。(秒杀目前市面上98%以上的游戏特效全开），更有B5400性能超强，高性价比，超值强悍，值得抢购 ', '3349', '2598', 'Public/upload/2016-03-07/56dd4afb1f46f.jpg', 'Public/upload/2016-03-07/thumb_56dd4afb1f46f.jpg', '中国北京', '2015/02/24', '联想/lenovo', '50', '0', '1', '1', '2016-03-07 17:33:47', '2016-03-08 15:13:00');
INSERT INTO `tb_goods` VALUES ('1000006', '1000006', '联想一体机电脑 C5030 3558U 4G 1T 2G独显 23寸黑白色 C560升级', '特价提前上市，电商欢乐大派送，有买有送，精美礼品用心配，冰点价，零利润率，C5030，,4G内存、2G独显、1T大硬盘、23英寸全高清大屏，内置高保真多媒体音响、高清摄像头、麦克、无线网卡、满足日常办公 家用。', '3599', '3599', 'Public/upload/2016-03-07/56dd4bac850d4.jpg', 'Public/upload/2016-03-07/thumb_56dd4bac850d4.jpg', '中国', '2015/02/24', '联想/lenovo', '50', '0', '1', '1', '2016-03-07 17:36:44', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000007', '1000007', '华硕台式机 K31AN 四核J2900 4G 500GB GT720 2G 独显 Win8.1 黑 ', '华硕台式机（ASUS）K31AN 台式电脑 （四核J2900 4G内存 500GB硬盘 GT720 2G独显 Win8.1 黑色）带21.5寸显示器 显示器型号:VS228DE 正品 顺风包邮 ', '3299', '3199', 'Public/upload/2016-03-07/56dd4bea4014f.jpg', 'Public/upload/2016-03-07/thumb_56dd4bea4014f.jpg', '中国北京', '2015/02/24', '华硕/asus', '50', '0', '1', '1', '2016-03-07 17:37:46', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000008', '1000008', 'SMARTISAN/锤子T1（4G）锤子手机 ', '情怀手机！Smartisan T1 配备骁龙801 系列的 8x74 AC 四核处理器，单核速度可高达 2.5 GHz。 采用索尼 IMX214 第二代 1278 万有效像素。 ', '2450', '2450', 'Public/upload/2016-03-07/56dd5b63c5ce4.jpg', 'Public/upload/2016-03-07/thumb_56dd5b63c5ce4.jpg', '中国', '2015/02/24', '锤子科技/smartisan', '50', '0', '1', '1', '2016-03-07 18:43:47', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000009', '1000009', 'Green Orange/青橙 V1超高配置八核三防智能手机 移动联通双4G ', '三防智能卫星手机 移动联通双4G 户外运动手机 双卡双待 8核64位 1600万 16种特色功能双4G ', '3999', '3999', 'Public/upload/2016-03-07/56dd64110a5cb.jpg', 'Public/upload/2016-03-07/thumb_56dd64110a5cb.jpg', '中国', '2015/02/24', '青橙/greenorange', '50', '0', '1', '1', '2016-03-07 19:20:49', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000010', '1000010', 'Meitu/美图MK260 (M2) 美图手机2 美图秀秀 自拍神器 美图M2 ', '暗拍利器--5级美颜 美白 美瞳 瘦脸', '4100', '2599', 'Public/upload/2016-03-07/56dd646224dd1.png', 'Public/upload/2016-03-07/thumb_56dd646224dd1.png', '中国', '2015/02/24', '美图秀秀/meitu', '50', '0', '1', '1', '2016-03-07 19:22:10', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000011', '1000011', 'Huawei/华为 H60-L01 02 荣耀6手机 移动 联通4G  ', '华为荣耀6手机 移动 联通4G。 纤薄机身，时尚新宠，全球领先的超薄手机.联保1年，店保3年，四核智能手机。 亲们，如果买了货不对版，支持7天无理由退货，买了不满意一样可以退货，总之一句话你不满意就退货，给亲最好的保障。让亲享受购物的愉快！限购一台哦。', '2399', '1400', 'Public/upload/2016-03-08/56de7cc45a895.jpg', 'Public/upload/2016-03-08/thumb_56de7cc45a895.jpg', '中国深圳', '2015/02/24', '华为/huawei', '100', '0', '1', '1', '2016-03-08 15:18:28', '2016-03-08 15:18:36');
INSERT INTO `tb_goods` VALUES ('1000012', '1000012', '湾仔码头', '湾仔码头', '22', '18', 'Public/upload/2016-04-20/5716708496deb.png', 'Public/upload/2016-04-20/thumb_5716708496deb.png', '', '', '', '20', '0', '0', '1', '2016-04-20 01:53:08', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000013', '1000013', 'olay化妆品', '', '45', '35', 'Public/upload/2016-04-20/57167229f253e.jpg', 'Public/upload/2016-04-20/thumb_57167229f253e.jpg', '', '', '', '24', '0', '0', '1', '2016-04-20 02:00:10', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000014', '1000014', '程序员T恤', '', '45', '25', 'Public/upload/2016-04-20/5716748bd8163.jpg', 'Public/upload/2016-04-20/thumb_5716748bd8163.jpg', '', '', '', '25', '0', '0', '1', '2016-04-20 02:10:19', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000015', '1000015', 'chanel唇膏', '', '200', '150', 'Public/upload/2016-04-20/571674efb34a4.jpg', 'Public/upload/2016-04-20/thumb_571674efb34a4.jpg', '', '', '', '50', '0', '0', '1', '2016-04-20 02:11:59', '0000-00-00 00:00:00');
INSERT INTO `tb_goods` VALUES ('1000016', '1000016', '苏泊尔电饭煲', '', '300', '280', 'Public/upload/2016-04-20/571676e4cda47.jpg', 'Public/upload/2016-04-20/thumb_571676e4cda47.jpg', '', '', '', '50', '0', '0', '1', '2016-04-20 02:20:20', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `tb_goods_cate`
-- ----------------------------
DROP TABLE IF EXISTS `tb_goods_cate`;
CREATE TABLE `tb_goods_cate` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `goods_id` bigint(20) NOT NULL,
  `type_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_goods_cate_ibfk_1` (`goods_id`),
  KEY `tb_goods_cate_ibfk_2` (`type_id`),
  CONSTRAINT `tb_goods_cate_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `tb_category` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_goods_cate
-- ----------------------------
INSERT INTO `tb_goods_cate` VALUES ('3', '1000003', '1002');
INSERT INTO `tb_goods_cate` VALUES ('4', '1000004', '1002');
INSERT INTO `tb_goods_cate` VALUES ('5', '1000004', '1005');
INSERT INTO `tb_goods_cate` VALUES ('6', '1000005', '1007');
INSERT INTO `tb_goods_cate` VALUES ('7', '1000006', '1007');
INSERT INTO `tb_goods_cate` VALUES ('13', '1000010', '1008');
INSERT INTO `tb_goods_cate` VALUES ('14', '1000011', '1008');
INSERT INTO `tb_goods_cate` VALUES ('15', '1000011', '1006');
INSERT INTO `tb_goods_cate` VALUES ('17', '1000015', '1006');
INSERT INTO `tb_goods_cate` VALUES ('18', '1000015', '1005');
INSERT INTO `tb_goods_cate` VALUES ('19', '1000016', '1003');
INSERT INTO `tb_goods_cate` VALUES ('20', '1000016', '1005');

-- ----------------------------
-- Table structure for `tb_goods_log`
-- ----------------------------
DROP TABLE IF EXISTS `tb_goods_log`;
CREATE TABLE `tb_goods_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `goods_id` bigint(20) NOT NULL COMMENT '商品id',
  `user_id` bigint(20) NOT NULL COMMENT '用户id',
  `user_name` varchar(32) NOT NULL DEFAULT '',
  `buy_count` bigint(20) NOT NULL DEFAULT '1' COMMENT '购买个数',
  `buy_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '购买时间',
  `order_item_id` bigint(20) NOT NULL COMMENT '订单项id',
  `buy_comment` varchar(128) DEFAULT '' COMMENT '购买后的评价信息',
  `buy_comment_time` timestamp NULL DEFAULT NULL COMMENT '评价时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_goods_log
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_inform`
-- ----------------------------
DROP TABLE IF EXISTS `tb_inform`;
CREATE TABLE `tb_inform` (
  `inform_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '10000-99999',
  `inform_title` varchar(32) DEFAULT NULL,
  `inform_content` varchar(128) DEFAULT NULL,
  `valid_flag` char(1) NOT NULL DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`inform_id`),
  UNIQUE KEY `inform_id` (`inform_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10006 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_inform
-- ----------------------------
INSERT INTO `tb_inform` VALUES ('10001', '商城实力大回馈', '全场打折促销啦，走过路过千万不要错过！', '1', '2015-03-31 00:27:47');
INSERT INTO `tb_inform` VALUES ('10002', '热烈庆祝网上商城上线', '公告：为庆祝网上商城上线，即日起所有商品一律打折，欢迎选购！', '1', '2015-04-19 13:56:08');
INSERT INTO `tb_inform` VALUES ('10003', '迎五一疯狂大促销！', '即日起注册网上商城会员，即可享受打折优惠！', '1', '2015-04-30 14:01:25');
INSERT INTO `tb_inform` VALUES ('10004', '疯狂开学季，疯狂大回馈！', '公告：迎开学，全场大酬宾！', '1', '2015-05-19 14:04:23');
INSERT INTO `tb_inform` VALUES ('10005', '商城女人节大活动', '所有女人节特惠产品抢购啦', '1', '2016-03-09 15:49:06');

-- ----------------------------
-- Table structure for `tb_note`
-- ----------------------------
DROP TABLE IF EXISTS `tb_note`;
CREATE TABLE `tb_note` (
  `note_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '1000000-9999999',
  `note_title` varchar(20) NOT NULL COMMENT '留言标题',
  `user_id` bigint(20) NOT NULL COMMENT '留言人id',
  `user_name` varchar(32) NOT NULL COMMENT '留言人昵称',
  `note_content` varchar(128) NOT NULL COMMENT '留言内容',
  `valid_flag` int(1) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`note_id`),
  UNIQUE KEY `note_id` (`note_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1000004 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_note
-- ----------------------------
INSERT INTO `tb_note` VALUES ('1000001', '你好', '100000', 'lucy', '你好', '1', '2015-04-20 17:03:44');
INSERT INTO `tb_note` VALUES ('1000002', '刚买的手机', '100000', 'lucy', '哇，收到货啦，刚在商城买的小米手机2天就到货啦！', '1', '2015-05-07 22:56:50');
INSERT INTO `tb_note` VALUES ('1000003', '脏话过滤测试', '100000', 'lucy', '**，什么人啊这是，*！', '1', '2015-05-14 17:48:08');

-- ----------------------------
-- Table structure for `tb_order`
-- ----------------------------
DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE `tb_order` (
  `order_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '1000000-9999999',
  `user_id` bigint(20) NOT NULL COMMENT 'user_id',
  `user_name` varchar(32) DEFAULT NULL COMMENT '用户名称',
  `recv_name` varchar(32) DEFAULT NULL COMMENT '收货人姓名',
  `recv_address` varchar(128) DEFAULT NULL COMMENT '收货地址',
  `recv_postcode` char(16) DEFAULT NULL COMMENT '收货人邮编',
  `recv_phone` char(16) DEFAULT NULL COMMENT '收货人手机号码',
  `express_price` float DEFAULT '0' COMMENT '快递费',
  `pay_price` float DEFAULT '0' COMMENT '实际支付总价格',
  `order_remark` varchar(32) DEFAULT NULL COMMENT '订单备注',
  `status` tinyint(4) DEFAULT '0' COMMENT '0 notsend, 1 sended, 2 confirm',
  `valid_flag` char(1) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单创建时间',
  `last_update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `orderid` (`order_id`) USING BTREE,
  KEY `tb_user_ibfk_1` (`user_id`),
  CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_order
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_order_item`
-- ----------------------------
DROP TABLE IF EXISTS `tb_order_item`;
CREATE TABLE `tb_order_item` (
  `order_item_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '1000000-9999999',
  `order_id` bigint(20) NOT NULL COMMENT '订单id',
  `goods_id` bigint(20) NOT NULL COMMENT '商品id',
  `goods_name` varchar(128) DEFAULT '',
  `price` float DEFAULT '0',
  `num` int(40) DEFAULT '1',
  PRIMARY KEY (`order_item_id`),
  UNIQUE KEY `order_item_id` (`order_item_id`) USING BTREE,
  KEY `order_id` (`order_id`) USING BTREE,
  KEY `book_id` (`goods_id`) USING BTREE,
  CONSTRAINT `tb_order_item_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tb_order` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_order_item
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_role`
-- ----------------------------
DROP TABLE IF EXISTS `tb_role`;
CREATE TABLE `tb_role` (
  `role_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids，1,2,5',
  `role_auth_ac` text COMMENT '控制器-操作，控制器-操作',
  `valid_flag` char(1) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1003 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_role
-- ----------------------------
INSERT INTO `tb_role` VALUES ('1001', '订单主管', '10002,10010,10011,10012,10007,10021,10022', 'ManageOrder-notSendOrder,ManageOrder-sendOrderList,ManageOrder-confirmOrderList,ManageRole-roleList,ManageAuth-authList', '1', '2016-02-29 16:27:33');
INSERT INTO `tb_role` VALUES ('1002', '用户主管', '10001,10008,10023', 'ManageUser-userList,ManageUser-addUser', '1', '2016-02-29 22:02:54');

-- ----------------------------
-- Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL COMMENT '用户名',
  `user_nickname` varchar(32) DEFAULT NULL COMMENT '昵称',
  `user_keyval` varchar(32) NOT NULL,
  `user_phone` varchar(32) DEFAULT NULL COMMENT '手机',
  `user_email` varchar(64) DEFAULT NULL COMMENT 'email',
  `user_truename` varchar(32) DEFAULT NULL COMMENT '真名',
  `user_gender` char(16) DEFAULT 'male' COMMENT 'male,female',
  `user_birth` varchar(32) DEFAULT NULL,
  `user_address` varchar(128) DEFAULT NULL,
  `user_postcode` char(16) DEFAULT NULL,
  `user_office_phone` varchar(16) DEFAULT NULL,
  `user_home_phone` varchar(16) DEFAULT NULL,
  `safe_question` varchar(32) DEFAULT NULL,
  `safe_answer` varchar(32) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `valid_flag` char(1) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '上次登录',
  `last_login_ip` char(16) NOT NULL DEFAULT '0.0.0.0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`) USING BTREE,
  UNIQUE KEY `user_name` (`user_name`) USING BTREE,
  UNIQUE KEY `user_phone` (`user_phone`) USING BTREE,
  UNIQUE KEY `user_email` (`user_email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=100004 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('100000', 'lucy', '根本停不下来的小陆', 'e10adc3949ba59abbe56e057f20f883e', '13951755802', '136055326@qq.com', '陆晨阳', 'male', '1993-11-19', '江苏省南京市', '210000', null, null, '你最爱吃的食物', '肉夹馍', '1', '1', '2016-03-02 09:23:12', '0000-00-00 00:00:00', '0.0.0.0');
INSERT INTO `tb_user` VALUES ('100001', 'liming', '李明', 'e10adc3949ba59abbe56e057f20f883e', null, null, null, 'male', null, null, null, null, null, null, null, '1', '0', '2016-03-02 09:29:18', '0000-00-00 00:00:00', '0.0.0.0');
INSERT INTO `tb_user` VALUES ('100002', 'xuyue', '徐月', 'e80806f93a1497b0f1622d6a6312b274', null, null, null, 'male', null, null, null, null, null, null, null, '1', '1', '2016-03-09 11:23:44', '0000-00-00 00:00:00', '0.0.0.0');
INSERT INTO `tb_user` VALUES ('100003', 'qdms01', 'qdms01', 'e10adc3949ba59abbe56e057f20f883e', null, null, null, 'male', null, null, null, null, null, null, null, '1', '1', '2016-03-09 15:11:41', '0000-00-00 00:00:00', '0.0.0.0');

-- ----------------------------
-- Table structure for `tb_user_log`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user_log`;
CREATE TABLE `tb_user_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` char(20) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '用户注册时间',
  `login_count` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户登录次数',
  `pay_count` bigint(20) NOT NULL DEFAULT '0' COMMENT '购买次数',
  `scan_goods_count` bigint(20) NOT NULL DEFAULT '0' COMMENT '浏览商品次数',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user_log
-- ----------------------------
