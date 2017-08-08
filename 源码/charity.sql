-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-08-09 08:52:52
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_admin`
--

CREATE TABLE `t_admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(100) DEFAULT NULL COMMENT '账号',
  `a_password` varchar(50) DEFAULT NULL COMMENT '密码',
  `a_realname` varchar(100) DEFAULT NULL,
  `a_role` tinyint(1) DEFAULT '1' COMMENT '用户角色',
  `a_status` tinyint(1) DEFAULT '1' COMMENT '1为正常2为禁用',
  `a_addtime` datetime DEFAULT NULL COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_admin`
--

INSERT INTO `t_admin` (`a_id`, `a_username`, `a_password`, `a_realname`, `a_role`, `a_status`, `a_addtime`) VALUES
(1, 'admin', '2139cd320ab27321d3cc3f2049d49ab8', 'admin', 1, 1, '2016-05-28 09:08:44'),
(2, 'admin33333', '2db6a95b7672f326e0bed248723c09c6', '3333444', 1, 1, '2016-05-28 09:34:28'),
(3, 'test44', '6695c0eaf2cad06ad5c8bc3f8de055a8', '44', 1, 1, '2016-05-28 09:55:58');

-- --------------------------------------------------------

--
-- 表的结构 `t_article`
--

CREATE TABLE `t_article` (
  `a_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL COMMENT '机构id',
  `a_img` varchar(255) DEFAULT NULL,
  `a_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `a_content` text COMMENT '内容',
  `a_view` int(11) DEFAULT '0' COMMENT '阅读量',
  `a_addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `a_order` int(11) DEFAULT NULL COMMENT '排序',
  `a_status` tinyint(1) DEFAULT '1' COMMENT '1为正常2为禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='机构动态';

--
-- 转存表中的数据 `t_article`
--

INSERT INTO `t_article` (`a_id`, `c_id`, `a_img`, `a_title`, `a_content`, `a_view`, `a_addTime`, `a_order`, `a_status`) VALUES
(7, 20, 'http://y.chongji2000.com:82/upload/news/1467953138.jpg', '洪灾会加剧下半年通胀压力吗？', '<p>今年的洪灾将对下半年的农产品、猪肉等食品类价格造成较大上升压力。</p>', 2, '2016-07-08 12:45:41', 1, 1),
(8, 20, 'http://y.chongji2000.com:82/upload/news/1467953159.jpg', '四问三峡大坝：武汉洪灾和三峡工程有关系吗？', '<p>连日来，长江中下游地区遭遇入汛以来最强降雨过程，各地紧急投入抗洪抢险。6月30日20时至7月6日10时，湖北武汉国家基本气象站记录的本轮强降雨已累计降水560.5毫米，突破武汉自有气象记录以来周持续性降水量最大值。</p>', 3, '2016-07-08 12:46:02', 2, 1),
(9, 20, 'http://y.chongji2000.com:82/upload/news/1467953173.jpg', '三峡大坝在这次抗洪中起了多大作用', '<p>　受长江上游干流、乌江来水及三峡区间暴雨洪水共同影响，6月30日起，三峡水库入库流量迅速上涨，当日14时，入库流量3.1万立方米每秒。7月1日\r\n14时，三峡水库迎来2016年“长江1号”洪峰，峰值达5万立方米每秒。这也是今年入汛以来首个达到每秒5万立方米的洪峰。</p>', 27, '2016-07-08 12:46:16', 3, 1),
(10, 32, 'http://y.chongji2000.com:82/upload/news/1469096595.jpg', '爱心活动', '<p>空间的还是客户客户客户就很快哦了解看看</p>', 13, '2016-07-21 18:23:41', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `t_bank`
--

CREATE TABLE `t_bank` (
  `b_id` int(11) NOT NULL,
  `m_id` int(11) DEFAULT NULL COMMENT '账户id',
  `b_type` tinyint(1) DEFAULT '1' COMMENT '1个人银行2对公银行',
  `b_name` varchar(50) DEFAULT NULL COMMENT '开户姓名',
  `b_number` varchar(50) DEFAULT NULL COMMENT '银行卡号',
  `b_bankName` varchar(100) DEFAULT NULL COMMENT '开户银行',
  `b_addtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='银行信息';

--
-- 转存表中的数据 `t_bank`
--

INSERT INTO `t_bank` (`b_id`, `m_id`, `b_type`, `b_name`, `b_number`, `b_bankName`, `b_addtime`) VALUES
(15, NULL, 2, '萨马兰奇', '6217888888888888888', '福建福州光大银行', NULL),
(16, 33, 1, '萨马兰奇', '6217777777777777777', '中国建设银行', '2016-07-08 12:51:30'),
(17, 36, 1, '32', '56651123314332132', '32432', '2016-07-14 22:19:09'),
(18, 35, 1, '熊建', '533211542845332', '建设银行', '2016-07-17 01:23:15'),
(19, 35, 1, '熊建', '533211542845332', '建设银行', '2016-07-17 01:24:23'),
(20, 35, 1, '熊建', '533211542845332', '建设银行', '2016-07-17 01:24:30'),
(21, 36, 1, '324', '523452352345', '23452345423', '2016-07-19 09:46:38'),
(22, 36, 1, '324', '523452352345', '23452345423', '2016-07-19 09:47:08'),
(23, 35, 1, '北二路', '4544254785566', '北上', '2016-07-19 12:25:11');

-- --------------------------------------------------------

--
-- 表的结构 `t_bank_log`
--

CREATE TABLE `t_bank_log` (
  `bl_id` int(11) NOT NULL,
  `bl_price` decimal(10,2) NOT NULL COMMENT '体现金额',
  `bl_addtime` datetime DEFAULT NULL COMMENT '体现时间',
  `bl_status` tinyint(4) DEFAULT NULL COMMENT '体现状态：1成功2:失败',
  `d_id` int(11) DEFAULT NULL COMMENT '慈善项目',
  `bl_bank_name` varchar(50) DEFAULT NULL COMMENT '开户人姓名',
  `bl_bank_idCard` varchar(50) DEFAULT NULL COMMENT '开户人身份证',
  `bl_bank` varchar(50) DEFAULT NULL COMMENT '开户银行',
  `bl_card_numb` varchar(50) DEFAULT NULL COMMENT '银行卡号',
  `bl_type` tinyint(11) NOT NULL COMMENT '1为机构，2为个人',
  `bl_mid` tinyint(11) NOT NULL COMMENT '类型为1是机构id 类型为2是用户id'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='提现记录表';

--
-- 转存表中的数据 `t_bank_log`
--

INSERT INTO `t_bank_log` (`bl_id`, `bl_price`, `bl_addtime`, `bl_status`, `d_id`, `bl_bank_name`, `bl_bank_idCard`, `bl_bank`, `bl_card_numb`, `bl_type`, `bl_mid`) VALUES
(18, '7.37', '2016-07-22 15:20:39', 2, NULL, NULL, NULL, NULL, NULL, 2, 33),
(19, '7.37', '2016-07-22 15:21:02', 1, NULL, NULL, NULL, NULL, NULL, 1, 33),
(20, '1.00', '2016-07-26 14:09:48', 1, 0, '', '', '', '', 1, 32),
(21, '7.37', '2016-07-27 09:26:13', 1, 0, '张三', '', '', '13400507914@163.com', 1, 33);

-- --------------------------------------------------------

--
-- 表的结构 `t_cashs`
--

CREATE TABLE `t_cashs` (
  `ca_id` int(11) NOT NULL,
  `ca_type` tinyint(1) DEFAULT '1' COMMENT '1为机构，2为个人',
  `d_id` int(11) DEFAULT '0' COMMENT '慈善id',
  `ca_mid` int(11) DEFAULT NULL COMMENT '类型为1是机构id 类型为2是用户id',
  `ca_total` decimal(10,2) DEFAULT '0.00' COMMENT '总金额',
  `ca_used` decimal(10,2) DEFAULT '0.00' COMMENT '已提现金额',
  `ca_left` decimal(10,2) DEFAULT '0.00' COMMENT '剩余金额',
  `ca_addTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='金额日志表';

--
-- 转存表中的数据 `t_cashs`
--

INSERT INTO `t_cashs` (`ca_id`, `ca_type`, `d_id`, `ca_mid`, `ca_total`, `ca_used`, `ca_left`, `ca_addTime`) VALUES
(6, 2, 0, 35, '2.21', '0.00', '2.21', '2016-07-12 00:08:50'),
(7, 1, 0, 57, '1.00', '0.00', '1.00', '2016-07-08 17:44:13'),
(8, 1, 0, 103, '1.00', '0.00', '1.00', '2016-07-10 10:57:49'),
(9, 2, 0, 38, '0.04', '0.00', '0.04', '2016-07-12 21:20:19'),
(10, 1, 0, 122, '1.00', '0.00', '1.00', '2016-07-12 00:09:24'),
(11, 1, 0, 147, '1.00', '0.00', '1.00', '2016-07-20 16:43:25'),
(12, 1, 0, 162, '0.01', '0.00', '0.01', '2016-07-21 09:35:02'),
(13, 1, 0, 33, '7.37', '7.37', '0.00', '2016-07-21 14:16:58'),
(14, 1, 0, 32, '2.80', '1.00', '1.80', '2016-07-28 19:35:23');

-- --------------------------------------------------------

--
-- 表的结构 `t_company`
--

CREATE TABLE `t_company` (
  `c_id` int(11) NOT NULL,
  `c_accound` varchar(255) NOT NULL COMMENT '账号',
  `c_avatar` varchar(255) DEFAULT NULL COMMENT '机构头像',
  `c_phone` varchar(20) DEFAULT NULL COMMENT '手机号',
  `c_password` varchar(50) DEFAULT NULL COMMENT '密码',
  `c_name` varchar(50) DEFAULT NULL COMMENT '机构名称',
  `c_prov` varchar(50) DEFAULT NULL COMMENT '省',
  `c_city` varchar(50) DEFAULT NULL COMMENT '市',
  `c_addr` varchar(255) DEFAULT NULL,
  `c_des` text COMMENT '简介',
  `c_createTime` varchar(50) DEFAULT NULL,
  `c_username` varchar(100) DEFAULT NULL COMMENT '登记人',
  `c_userphone` varchar(20) DEFAULT NULL COMMENT '登记人电话',
  `c_userID` varchar(50) DEFAULT NULL COMMENT '登记人身份证',
  `c_addTime` datetime DEFAULT NULL,
  `c_check_status` tinyint(1) DEFAULT '2' COMMENT '1为正常，2为未审批，3审批失败',
  `c_open_img` varchar(255) DEFAULT NULL COMMENT '开户许可证',
  `c_company_img` varchar(255) DEFAULT NULL COMMENT '机构组织代码证',
  `c_status` tinyint(1) DEFAULT '1' COMMENT '1为正常2为禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='机构表';

--
-- 转存表中的数据 `t_company`
--

INSERT INTO `t_company` (`c_id`, `c_accound`, `c_avatar`, `c_phone`, `c_password`, `c_name`, `c_prov`, `c_city`, `c_addr`, `c_des`, `c_createTime`, `c_username`, `c_userphone`, `c_userID`, `c_addTime`, `c_check_status`, `c_open_img`, `c_company_img`, `c_status`) VALUES
(20, '福州慈善总会', 'http://y.chongji2000.com/upload/company/1467953022.jpg', '13400507914', '6455eb2394d672b8bdfeaf5bdf1c62bd', '福州慈善总会', '福建', '福州', '福建 福州', '作为中国规模较大、业绩较好的公益组织机构之一。自1994年4月在民政部老部长崔乃夫的倡导下成立，总会发扬人道主义精神，弘扬中华民族扶贫济困的传统美德，帮助社会上不幸的个人和困难群体，开展多种社会救助工作。', '2013-07-11', '萨马兰奇', '13400507914', '352203199999999999', '2016-07-08 12:44:19', 1, 'http://y.chongji2000.com/upload/company/1467953046.jpg', 'http://y.chongji2000.com/upload/company/1467953049.jpg', 1),
(21, '厦门慈善', 'http://y.chongji2000.com/upload/company/1468077334.jpg', '13459463632', '6455eb2394d672b8bdfeaf5bdf1c62bd', '厦门慈善', '福建', '厦门', '福建 厦门', '该机构趁机估计OK了啦啦啦啦啦啦啦啦啦啦啦啦啦啦啦啦啦啦啦啦啦LOL摸摸摸摸咯模棱两可就可以', '2016-07-19', '熊健', '13459463632', '350428123456987412', '2016-07-09 23:18:11', 1, 'http://y.chongji2000.com/upload/company/1468077433.jpg', 'http://y.chongji2000.com/upload/company/1468077445.jpg', 2),
(22, '宁德慈善', 'http://y.chongji2000.com/upload/company/1468081089.jpg', '13400507914', '6638543855f8051d4cb540a787b54eca', '宁德慈善', '北京', '北京', '北京 北京', '宁德慈善宁德慈善', '2016-07-20', '李四', '13400507914', '352299999999999999', '2016-07-10 00:18:30', 2, 'http://y.chongji2000.com/upload/company/1468081104.jpg', 'http://y.chongji2000.com/upload/company/1468081107.jpg', 2),
(23, '3', 'http://y.chongji2000.com/upload/company/1468122541.jpg', '15806026996', 'd968868a87c1ec9762a30be810599360', '3', '北京', '北京', '北京 北京', '33', '2016-07-20', '333', '15806026996', '350783198804021511', '2016-07-10 11:50:04', 2, 'http://y.chongji2000.com/upload/company/1468122597.jpg', 'http://y.chongji2000.com/upload/company/1468122593.jpg', 2),
(24, '福州慈善机构二号', 'http://y.chongji2000.com/upload/company/1468158935.jpg', '13400507914', '6455eb2394d672b8bdfeaf5bdf1c62bd', '福州慈善机构二号', '福建', '福州', '福建 福州', '福州慈善机构二号福州慈善机构二号', '2016-07-20', '李四', '13400507914', '352209999999999999', '2016-07-10 21:56:16', 1, 'http://y.chongji2000.com/upload/company/1468158970.jpg', 'http://y.chongji2000.com/upload/company/1468158972.jpg', 1),
(25, '小3', 'http://y.weimingzhong.com/upload/company/1468505651.jpeg', '15806026996', 'b9b8d62c83e1ff5566ea151146ba9f7c', '小3', '北京', '北京', '北京 北京', '花木城', '2016-07-24', '33', '15806026996', '350461187704015155', '2016-07-14 22:15:00', 2, 'http://y.weimingzhong.com/upload/company/1468505694.jpeg', 'http://y.weimingzhong.com/upload/company/1468505695.jpeg', 1),
(26, '测试机构', 'http://y.weimingzhong.com/upload/company/1468569819.jpeg', '13459463632', '00ba01130f6cc208589497e2fc6f8a13', '测试机构', '福建', '福州', '福建 福州', '推荐几个啦啦啦啦啦啦啦啦啦啦啦啦科尔默默无闻我偶像剧投入录取率咯扣扣咯磨磨唧唧看看突突突哦看看睡觉觉咯来自于涂卡know可口可乐恶魔斤斤计较无聊咯OUT了咯哦哭天抹泪我哭咯咯莫楼咯考虑途径考虑凸凸凸凸凸凸来咯来咯OK了啦啦啦啦啦啦咯墨迹了来咯哦啦咯了聊扣扣8路啦啦啦啦啦啦啦啦啦啦啦啦啦土路肩啦朗朗上口墨迹look某角落里咯困困困有哦咯了拉开距离路口哦托咯摩托路跳楼OK了look摸摸某', '2012-07-07', '贝尔', '13459463632', '350428555545542553', '2016-07-15 16:08:28', 2, 'http://y.weimingzhong.com/upload/company/1468570058.jpeg', 'http://y.weimingzhong.com/upload/company/1468570072.jpeg', 1),
(27, '123', 'http://y.weimingzhong.com/upload/company/1468591485.jpeg', '13400507914', 'c91707f3205e7747f99be509cdb57ac7', '123', '北京', '北京', '北京 北京', '123', '2016-07-25', '123', '13400507914', '352203199010160511', '2016-07-15 22:05:32', 2, 'http://y.weimingzhong.com/upload/company/1468591521.jpeg', 'http://y.weimingzhong.com/upload/company/1468591523.jpeg', 1),
(28, '33', 'http://y.weimingzhong.com/upload/company/1468659996.jpeg', '15806026996', '8268810b73cbb4eb08f4e92494b6bc53', '33', '北京', '北京', '北京 北京', '33', '2016-07-26', '333', '15806026996', '350164151114121411', '2016-07-16 17:07:00', 2, 'http://y.weimingzhong.com/upload/company/1468660013.jpeg', 'http://y.weimingzhong.com/upload/company/1468660015.jpeg', 1),
(29, '33333', 'http://y.weimingzhong.com/upload/company/1468660112.jpeg', '15806026996', 'dd9a26963e44c99c0c446750773073f0', '33333', '北京', '北京', '北京 北京', '33', '2016-07-26', '33', '15806026996', '356042151142141211', '2016-07-16 17:09:10', 2, 'http://y.weimingzhong.com/upload/company/1468660128.jpeg', 'http://y.weimingzhong.com/upload/company/1468660130.jpeg', 1),
(30, '看看人家', 'http://y.weimingzhong.com/upload/company/1468690319.jpeg', '13459463632', 'c413fb016bd215bce6a08c645d079399', '看看人家', '辽宁', '朝阳', '辽宁 朝阳', '看看咯8欧元在家里看看呢bloom我考虑考虑了撸撸撸看看咯在我摸我恩我OK了考虑来咯来咯来咯来咯考虑56路', '2016-07-27', '测试', '13459463632', '350428555444444444', '2016-07-17 01:35:56', 2, 'http://y.weimingzhong.com/upload/company/1468690515.jpeg', 'http://y.weimingzhong.com/upload/company/1468690532.jpeg', 1),
(31, '321312', 'http://y.weimingzhong.com/upload/company/1468894508.jpeg', '13400507914', 'f30940b258e0659327c78da5087a69b5', '321312', '北京', '北京', '北京 北京', '12312', '2016-07-29', '123123', '13400507914', '352203199010160511', '2016-07-19 10:15:26', 2, 'http://y.weimingzhong.com/upload/company/1468894521.jpeg', 'http://y.weimingzhong.com/upload/company/1468894523.jpeg', 1),
(32, '福州青年慈善机构', 'http://y.weimingzhong.com/upload/company/1468917640.jpeg', '13459463632', 'cf82c6911875b7919f8f175f0085e0a5', '福州青年慈善机构', '福建', '福州', '福建 福州', '看看咯里杰卡尔德', '2016-07-29', '贝尔', '13459463632', '350428513633221122', '2016-07-19 16:43:26', 1, 'http://y.weimingzhong.com/upload/company/1468917750.jpeg', 'http://y.weimingzhong.com/upload/company/1468917778.jpeg', 1),
(33, 'chongji2000', 'http://y.chongji2000.com:82/upload/company/1469106538.jpg', NULL, 'cc8a15d31a04d375382b2f2b32169193', '中华慈善总会', '山西', '太原', '123123', '123123', '2016-07-21', '123123', '13400507914', '352203199010101011', '2016-07-21 21:09:27', 1, 'http://y.chongji2000.com:82/upload/company/1469106541.jpg', 'http://y.chongji2000.com:82/upload/company/1469106544.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `t_company_img`
--

CREATE TABLE `t_company_img` (
  `ci_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL COMMENT '个人信息id',
  `ci_img` varchar(255) DEFAULT NULL COMMENT '资金用途照片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_company_img`
--

INSERT INTO `t_company_img` (`ci_id`, `c_id`, `ci_img`) VALUES
(77, 20, 'http://y.chongji2000.com/upload/company/1467953028.jpg'),
(78, 20, 'http://y.chongji2000.com/upload/company/1467953025.jpg'),
(79, 20, 'http://y.chongji2000.com/upload/company/1467953022.jpg'),
(82, 22, 'http://y.chongji2000.com/upload/company/1468081089.jpg'),
(83, 21, 'http://y.chongji2000.com/upload/company/1468077340.jpg'),
(84, 21, 'http://y.chongji2000.com/upload/company/1468077334.jpg'),
(85, 23, 'http://y.chongji2000.com/upload/company/1468122541.jpg'),
(87, 24, 'http://y.chongji2000.com/upload/company/1468158935.jpg'),
(88, 25, 'http://y.weimingzhong.com/upload/company/1468505651.jpeg'),
(89, 26, 'http://y.weimingzhong.com/upload/company/1468569819.jpeg'),
(90, 26, 'http://y.weimingzhong.com/upload/company/1468569830.jpeg'),
(91, 26, 'http://y.weimingzhong.com/upload/company/1468569850.jpeg'),
(92, 26, 'http://y.weimingzhong.com/upload/company/1468569880.jpeg'),
(93, 27, 'http://y.weimingzhong.com/upload/company/1468591485.jpeg'),
(94, 28, 'http://y.weimingzhong.com/upload/company/1468659996.jpeg'),
(95, 29, 'http://y.weimingzhong.com/upload/company/1468660112.jpeg'),
(96, 30, 'http://y.weimingzhong.com/upload/company/1468690319.jpeg'),
(97, 30, 'http://y.weimingzhong.com/upload/company/1468690328.jpeg'),
(98, 30, 'http://y.weimingzhong.com/upload/company/1468690341.jpeg'),
(99, 30, 'http://y.weimingzhong.com/upload/company/1468690383.jpeg'),
(100, 31, 'http://y.weimingzhong.com/upload/company/1468894508.jpeg'),
(110, 32, 'http://y.weimingzhong.com/upload/company/1468917664.jpeg'),
(111, 32, 'http://y.weimingzhong.com/upload/company/1468917651.jpeg'),
(112, 32, 'http://y.weimingzhong.com/upload/company/1468917640.jpeg'),
(113, 33, 'http://y.chongji2000.com:82/upload/company/1469106548.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `t_contribute`
--

CREATE TABLE `t_contribute` (
  `c_id` int(11) NOT NULL,
  `c_cid` int(11) DEFAULT '0' COMMENT '机构id',
  `c_type` tinyint(1) DEFAULT '1' COMMENT '1捐赠箱2为物资捐赠3为善筹捐赠',
  `c_name` varchar(50) DEFAULT NULL COMMENT '捐赠人姓名',
  `c_mid` int(11) DEFAULT NULL COMMENT '捐赠人mid',
  `d_id` int(11) DEFAULT '0' COMMENT '善筹id',
  `p_id` int(11) DEFAULT NULL COMMENT '商品id',
  `c_price` decimal(10,2) DEFAULT '0.00' COMMENT '捐赠金额',
  `c_content` varchar(255) DEFAULT NULL COMMENT '捐赠内容',
  `c_anonymous` tinyint(1) DEFAULT '1' COMMENT '1正常，2匿名',
  `c_status` tinyint(1) DEFAULT '2' COMMENT '1捐赠成功2为失败',
  `c_addtime` datetime DEFAULT NULL COMMENT '捐赠时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='捐赠记录表';

--
-- 转存表中的数据 `t_contribute`
--

INSERT INTO `t_contribute` (`c_id`, `c_cid`, `c_type`, `c_name`, `c_mid`, `d_id`, `p_id`, `c_price`, `c_content`, `c_anonymous`, `c_status`, `c_addtime`) VALUES
(45, 20, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 13:00:56'),
(46, 20, 2, '新新新', 33, 0, 3, '1.00', '捐食品', 1, 2, '2016-07-08 13:00:58'),
(47, 20, 2, '新新新', 33, 0, 3, '1.00', '捐食品', 1, 2, '2016-07-08 13:00:58'),
(48, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 13:02:04'),
(49, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 13:02:06'),
(50, 20, 2, '新新新', 33, 0, 4, '2.00', '捐衣服', 1, 2, '2016-07-08 13:03:01'),
(51, 20, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 13:18:31'),
(52, 20, 3, '贝尔先生', 35, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 17:34:30'),
(53, 20, 3, '贝尔先生', 35, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 17:34:48'),
(54, 20, 3, '贝尔先生', 35, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 17:34:55'),
(55, 20, 3, '贝尔先生', 35, 25, NULL, '0.01', '捐0.01元', 1, 1, '2016-07-08 17:35:07'),
(56, 20, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 17:43:49'),
(57, 20, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 1, '2016-07-08 17:44:01'),
(58, 20, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 17:44:29'),
(59, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 20:58:23'),
(60, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 20:58:25'),
(61, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 20:58:25'),
(62, 20, 2, '', 34, 0, 4, '2.00', '捐衣服', 1, 2, '2016-07-08 20:58:27'),
(63, 20, 2, '', 34, 0, 4, '2.00', '捐衣服', 1, 2, '2016-07-08 20:58:31'),
(64, 20, 2, '', 34, 0, 4, '2.00', '捐衣服', 1, 2, '2016-07-08 20:58:35'),
(65, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 20:59:06'),
(66, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 20:59:09'),
(67, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:00:04'),
(68, 20, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:01:26'),
(69, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:01:31'),
(70, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:01:32'),
(71, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:01:43'),
(72, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:02:07'),
(73, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:02:09'),
(74, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:02:09'),
(75, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:02:09'),
(76, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:03:13'),
(77, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:03:15'),
(78, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:05:36'),
(79, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:05:37'),
(80, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:05:37'),
(81, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:05:37'),
(82, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:05:38'),
(83, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:05:38'),
(84, 20, 1, '', 34, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:05:38'),
(85, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:54'),
(86, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:55'),
(87, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:56'),
(88, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:56'),
(89, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:56'),
(90, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:57'),
(91, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:57'),
(92, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:57'),
(93, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:57'),
(94, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:57'),
(95, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:58'),
(96, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-08 21:05:58'),
(97, 20, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-08 21:56:05'),
(98, 20, 2, '贝尔先生', 35, 0, 4, '2.00', '捐衣服', 1, 2, '2016-07-08 22:34:15'),
(99, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-09 21:27:57'),
(100, 20, 3, '', 34, 25, NULL, '0.01', '捐0.01元', 1, 2, '2016-07-09 21:28:00'),
(101, 20, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-09 22:15:19'),
(102, 20, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-10 10:37:43'),
(103, 21, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 1, '2016-07-10 10:57:37'),
(104, 23, 2, 'yip', 36, 0, 31, '1.00', '捐交通', 1, 2, '2016-07-10 11:50:59'),
(105, 23, 2, 'yip', 36, 0, 31, '1.00', '捐交通', 1, 2, '2016-07-10 11:53:46'),
(106, 21, 2, '贝尔先生', 35, 0, 6, '1.00', '捐学费', 1, 2, '2016-07-10 15:00:40'),
(107, 20, 2, '新新新', 33, 0, 4, '2.00', '捐衣服', 1, 2, '2016-07-10 17:36:39'),
(108, 21, 2, '新新新', 33, 0, 13, '1.00', '捐交通', 1, 2, '2016-07-10 17:37:35'),
(109, 21, 2, '新新新', 33, 0, 13, '1.00', '捐交通', 1, 2, '2016-07-10 20:54:02'),
(110, 20, 2, '新新新', 33, 0, 3, '1.00', '捐食品', 1, 2, '2016-07-10 21:53:05'),
(111, 20, 3, '葵花烂漫', 38, 25, NULL, '0.02', '捐0.02元', 1, 2, '2016-07-10 22:06:20'),
(112, 20, 3, '葵花烂漫', 38, 25, NULL, '0.02', '捐0.02元', 1, 2, '2016-07-10 22:07:50'),
(113, 20, 3, '葵花烂漫', 38, 25, NULL, '0.02', '捐0.02元', 1, 2, '2016-07-10 22:09:19'),
(114, 20, 3, '葵花烂漫', 38, 25, NULL, '0.02', '捐0.02元', 1, 2, '2016-07-10 22:10:14'),
(115, 20, 3, '葵花烂漫', 38, 25, NULL, '0.02', '捐0.02元', 1, 1, '2016-07-10 22:10:26'),
(116, 20, 3, '贝尔先生', 35, 25, NULL, '2.00', '捐2元', 1, 1, '2016-07-11 13:28:44'),
(117, 24, 2, '新新新', 33, 0, 40, '1.00', '捐交通', 1, 2, '2016-07-11 16:38:23'),
(118, 20, 3, 'yip', 36, 25, NULL, '0.10', '捐0.1元', 1, 2, '2016-07-11 21:10:07'),
(119, 20, 3, 'yip', 36, 25, NULL, '0.10', '捐0.1元', 1, 2, '2016-07-11 21:10:08'),
(120, 20, 3, 'yip', 36, 25, NULL, '0.10', '捐0.1元', 1, 2, '2016-07-11 21:10:16'),
(121, 20, 3, '贝尔先生', 35, 25, NULL, '0.20', '捐0.2元', 1, 1, '2016-07-12 00:08:41'),
(122, 24, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 1, '2016-07-12 00:09:05'),
(123, 24, 2, '贝尔先生', 35, 0, 40, '1.00', '捐交通', 1, 2, '2016-07-12 00:09:32'),
(124, 24, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-12 21:11:13'),
(125, 24, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-12 21:15:03'),
(126, 24, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-12 21:16:18'),
(127, 20, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-12 21:16:41'),
(128, 24, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-12 21:18:20'),
(129, 21, 1, '葵花烂漫', 38, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-12 21:19:15'),
(130, 20, 3, '葵花烂漫', 38, 25, NULL, '0.02', '捐0.02元', 1, 1, '2016-07-12 21:20:15'),
(131, 24, 2, '新新新', 33, 0, 39, '1.00', '捐书籍', 1, 2, '2016-07-14 23:40:09'),
(132, 24, 2, 'Lane', 41, 0, 33, '1.00', '捐学费', 1, 2, '2016-07-18 22:46:13'),
(133, 24, 2, 'Lane', 41, 0, 33, '1.00', '捐学费', 1, 2, '2016-07-18 22:46:13'),
(134, 24, 2, 'Lane', 41, 0, 40, '1.00', '捐交通', 1, 2, '2016-07-18 22:46:18'),
(135, 24, 2, '贝尔先生', 35, 0, 32, '1.00', '捐衣服', 1, 2, '2016-07-19 11:12:23'),
(136, 24, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-19 11:12:33'),
(137, 24, 2, '新新新', 33, 0, 33, '1.00', '捐学费', 1, 2, '2016-07-19 17:53:19'),
(138, 0, 1, '张三', NULL, 25, NULL, '111.00', '<p>123123<br/></p>', 1, 1, '2016-07-19 18:00:49'),
(139, 20, 1, '3244', NULL, 0, NULL, '423.00', '<p>423</p>', 1, 1, '2016-07-20 14:10:30'),
(140, 20, 1, '李四', NULL, 0, NULL, '2.00', '<p>1<br/></p>', 1, 1, '2016-07-20 14:50:36'),
(141, 24, 1, '彰武', NULL, 0, NULL, '1.00', '<p>1<br/></p>', 1, 1, '2016-07-20 14:51:09'),
(142, 20, 1, '张荣', NULL, 0, NULL, '352.00', '<p>感恩社会，感谢机构。</p>', 1, 1, '2016-07-20 16:34:07'),
(143, 32, 1, '李季长', NULL, 0, NULL, '456.00', '<p>绵薄之力</p>', 1, 1, '2016-07-20 16:35:08'),
(144, 32, 1, '周丽', NULL, 0, NULL, '42.00', '<p>感恩</p>', 1, 1, '2016-07-20 16:38:00'),
(145, 32, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-20 16:38:55'),
(146, 32, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-20 16:43:03'),
(147, 32, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 1, '2016-07-20 16:43:05'),
(148, 32, 1, '林艳樱', NULL, 0, NULL, '80000.00', '', 1, 1, '2016-07-20 16:45:19'),
(149, 32, 1, '刘庆华', NULL, 0, NULL, '500000.00', '', 1, 1, '2016-07-20 18:28:28'),
(150, 32, 1, '谢守平', NULL, 0, NULL, '10000.00', '', 1, 1, '2016-07-20 18:28:59'),
(151, 32, 1, '高子', NULL, 0, NULL, '65565.00', '', 1, 1, '2016-07-20 18:29:26'),
(152, 32, 1, '林荫', NULL, 0, NULL, '458722.00', '', 1, 1, '2016-07-20 18:30:15'),
(153, 32, 1, '毛泽东', NULL, 0, NULL, '454.00', '', 1, 1, '2016-07-20 18:31:14'),
(154, 32, 1, '周恩来', NULL, 0, NULL, '7892.00', '', 1, 1, '2016-07-20 18:31:31'),
(155, 32, 1, '高行', NULL, 0, NULL, '789.00', '', 1, 1, '2016-07-20 18:31:55'),
(156, 32, 1, '卢梭', NULL, 0, NULL, '859.00', '', 1, 1, '2016-07-20 18:32:29'),
(157, 32, 1, '李伟', NULL, 0, NULL, '78.00', '', 1, 1, '2016-07-20 18:33:22'),
(158, 32, 1, '微先生', 43, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-20 18:54:57'),
(159, 32, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-21 03:16:10'),
(160, 32, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-21 03:26:37'),
(161, 20, 1, 'yip', 36, 0, NULL, '1.00', '捐款一元', 1, 2, '2016-07-21 09:30:53'),
(162, 32, 1, '新新新', 33, 0, NULL, '0.01', '捐款一元', 1, 1, '2016-07-21 09:34:56'),
(163, 32, 1, '新新新', 33, 0, NULL, '0.01', '捐款一元', 1, 1, '2016-07-21 10:00:46'),
(164, 32, 1, 'yip', 36, 0, NULL, '0.01', '捐款一元', 1, 1, '2016-07-21 10:01:03'),
(165, 32, 1, '贝尔先生', 35, 0, NULL, '2.20', '捐款一元', 1, 2, '2016-07-21 11:14:45'),
(166, 32, 1, 'yip', 36, 0, NULL, '0.01', '捐款一元', 1, 1, '2016-07-21 11:22:51'),
(167, 32, 1, 'yip', 36, 0, NULL, '0.02', '捐款一元', 1, 1, '2016-07-21 11:23:51'),
(168, 32, 1, '新新新', 33, 0, NULL, '1.00', '捐款一元', 1, 1, '2016-07-21 11:25:23'),
(169, 32, 1, '新新新', 33, 0, NULL, '0.01', '捐款一元', 1, 1, '2016-07-21 11:30:14'),
(170, 32, 1, '贝尔先生', 35, 0, NULL, '0.01', '捐款一元', 1, 1, '2016-07-21 11:31:07'),
(171, 32, 1, '贝尔先生', 35, 0, NULL, '0.50', '捐款一元', 1, 1, '2016-07-21 11:32:08'),
(172, 32, 1, '贝尔先生', 35, 0, NULL, '1.50', '捐款一元', 1, 1, '2016-07-21 11:32:58'),
(173, 32, 1, '贝尔先生', 35, 0, NULL, '2.50', '捐款一元', 1, 1, '2016-07-21 11:34:15'),
(174, 32, 1, 'Lane', 41, 0, NULL, '1.80', '捐款一元', 1, 1, '2016-07-21 14:16:48'),
(175, 32, 2, '新新新', 33, 0, 111, '1.00', '捐书籍', 1, 2, '2016-07-21 15:29:07'),
(176, 32, 1, '贝尔先生', 35, 0, NULL, '1.00', '捐款一元', 1, 1, '2016-07-26 11:35:47'),
(177, 32, 1, '微先生', 43, 0, NULL, '1.80', '捐款一元', 1, 1, '2016-07-28 19:35:11'),
(178, 32, 2, '新新新', 33, 0, 109, '1.00', '捐住宿', 1, 2, '2016-08-02 09:12:53'),
(179, 32, 2, '新新新', 33, 0, 108, '1.00', '捐水', 1, 2, '2016-08-05 21:27:22'),
(180, 32, 2, '新新新', 33, 0, 108, '1.00', '捐水', 1, 2, '2016-08-05 21:27:23'),
(181, 20, 2, '都豆爸', 44, 0, 4, '2.00', '捐衣服', 1, 2, '2016-08-07 23:15:09'),
(182, 20, 2, '都豆爸', 44, 0, 4, '2.00', '捐衣服', 1, 2, '2016-08-07 23:15:17'),
(183, 32, 2, 'yip', 36, 0, 109, '1.00', '捐住宿', 1, 2, '2016-08-08 09:35:01');

-- --------------------------------------------------------

--
-- 表的结构 `t_donation`
--

CREATE TABLE `t_donation` (
  `d_id` int(11) NOT NULL,
  `d_type` tinyint(1) DEFAULT '1' COMMENT '1个人2为企业',
  `c_id` int(11) DEFAULT NULL COMMENT '机构id',
  `m_id` int(11) DEFAULT '0' COMMENT '用户uid',
  `d_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `d_used_title` varchar(255) DEFAULT NULL COMMENT '资金用途',
  `d_content` text COMMENT '详情',
  `d_img` varchar(100) DEFAULT NULL COMMENT '封面',
  `d_person` int(11) DEFAULT NULL COMMENT '个人身份',
  `d_company_img` varchar(255) DEFAULT NULL COMMENT '组织机构证明',
  `d_up` int(11) DEFAULT '0' COMMENT '支持数',
  `d_target_name` varchar(255) DEFAULT NULL COMMENT '受助人姓名',
  `d_target` decimal(10,2) DEFAULT NULL COMMENT '目标金额',
  `d_collect` decimal(10,2) DEFAULT '0.00' COMMENT '已筹金额',
  `d_endTime` date DEFAULT NULL COMMENT '结束时间',
  `d_addTime` datetime DEFAULT NULL,
  `d_status` tinyint(1) DEFAULT '1' COMMENT '1正常2为关闭'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='善筹表';

--
-- 转存表中的数据 `t_donation`
--

INSERT INTO `t_donation` (`d_id`, `d_type`, `c_id`, `m_id`, `d_title`, `d_used_title`, `d_content`, `d_img`, `d_person`, `d_company_img`, `d_up`, `d_target_name`, `d_target`, `d_collect`, `d_endTime`, `d_addTime`, `d_status`) VALUES
(24, 1, 20, 0, '衣服', NULL, '<p>最近的数据显示，自7月1日以来，三峡水库入库流量呈逐步下降趋势。6日14时、7日14时，入库流量均为每秒两万立方米。</p>', 'http://y.chongji2000.com:82/upload/donation/1467953217.jpg', 14, 'http://y.chongji2000.com:82/upload/donation/1467953220.jpg', 0, NULL, '500000.00', '0.00', '2016-12-01', '2016-07-08 12:48:15', 1),
(25, 1, 20, 33, '帮助贫困山区的孩子们', '捐赠山区孩子', '<p>　原来，近年来当地居民的经济条件好了不少，孩子们不再需要捐赠的衣物了，但爱心捐赠不减反增，才逼得校长不得不出来喊话：“请媒体帮我们呼吁下，希望爱心人士不要再给我们捐了。”</p>', 'http://y.chongji2000.com/upload/donation/1467953429.jpg', 15, 'http://y.chongji2000.com/upload/donation/1467953429.jpg', 5, '', '50000.00', '2.25', '2016-01-01', '2016-07-20 16:46:09', 1),
(26, 1, 24, 36, '432', '32', '234', 'http://y.weimingzhong.com/upload/donation/1468505895.jpeg', 16, 'http://y.weimingzhong.com/upload/donation/1468505910.jpeg', 0, NULL, '343.00', '0.00', '1970-01-01', '2016-07-14 22:19:09', 2),
(27, 1, 24, 35, '阿拉斯加', '建一所爱心学校', '拉拉裤咯哦舞台连卡佛6天土路肩啦看看咯来了就来了5默许咯魔悟空了头呕吐我偶像舞台咯摸摸努力了撸撸撸我哦哟哟下午调整一下我拒绝了突突突咯呢我哭volt咯佛魔下雨了咯呢而赌徒咯抹眼泪啦', 'http://y.weimingzhong.com/upload/donation/1468689513.jpeg', 17, 'http://y.weimingzhong.com/upload/donation/1468689650.jpeg', 0, NULL, '10000.00', '0.00', '1970-01-01', '2016-07-17 01:23:16', 2),
(28, 1, 24, 35, '阿拉斯加', '建一所爱心学校', '拉拉裤咯哦舞台连卡佛6天土路肩啦看看咯来了就来了5默许咯魔悟空了头呕吐我偶像舞台咯摸摸努力了撸撸撸我哦哟哟下午调整一下我拒绝了突突突咯呢我哭volt咯佛魔下雨了咯呢而赌徒咯抹眼泪啦', 'http://y.weimingzhong.com/upload/donation/1468689513.jpeg', 18, 'http://y.weimingzhong.com/upload/donation/1468689650.jpeg', 0, NULL, '10000.00', '0.00', '1970-01-01', '2016-07-17 01:24:23', 2),
(29, 1, 24, 35, '阿拉斯加', '建一所爱心学校', '拉拉裤咯哦舞台连卡佛6天土路肩啦看看咯来了就来了5默许咯魔悟空了头呕吐我偶像舞台咯摸摸努力了撸撸撸我哦哟哟下午调整一下我拒绝了突突突咯呢我哭volt咯佛魔下雨了咯呢而赌徒咯抹眼泪啦', 'http://y.weimingzhong.com/upload/donation/1468689513.jpeg', 19, 'http://y.weimingzhong.com/upload/donation/1468689650.jpeg', 0, NULL, '10000.00', '0.00', '1970-01-01', '2016-07-17 01:24:30', 2),
(30, 1, 24, 36, '4234', '423423', '23423', 'http://y.weimingzhong.com/upload/donation/1468892649.jpeg', 20, 'http://y.weimingzhong.com/upload/donation/1468892784.jpeg', 0, NULL, '2342.00', '0.00', '1970-01-01', '2016-07-19 09:46:38', 2),
(31, 1, 24, 36, '4234', '423423', '23423', 'http://y.weimingzhong.com/upload/donation/1468892649.jpeg', 21, 'http://y.weimingzhong.com/upload/donation/1468892784.jpeg', 0, NULL, '2342.00', '0.00', '1970-01-01', '2016-07-19 09:47:08', 2),
(32, 1, 24, 35, 'j55552', '开咯看看人家', '<p>考虑涂抹在自己家125路</p>', 'http://y.weimingzhong.com/upload/donation/1468902094.jpeg', 22, 'http://y.weimingzhong.com/upload/donation/1468902094.jpeg', 0, NULL, '2554566.00', '0.00', '2016-01-02', '2016-07-20 16:45:51', 1);

-- --------------------------------------------------------

--
-- 表的结构 `t_donation_img`
--

CREATE TABLE `t_donation_img` (
  `di_id` int(11) NOT NULL,
  `d_id` int(11) DEFAULT NULL COMMENT '个人信息id',
  `di_img` varchar(255) DEFAULT NULL COMMENT '资金用途照片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_donation_img`
--

INSERT INTO `t_donation_img` (`di_id`, `d_id`, `di_img`) VALUES
(25, 24, 'http://y.chongji2000.com:82/upload/donation/1467953223.jpg'),
(26, 24, 'http://y.chongji2000.com:82/upload/donation/1467953226.jpg'),
(27, 24, 'http://y.chongji2000.com:82/upload/donation/1467953228.jpg'),
(30, 26, 'http://y.weimingzhong.com/upload/donation/1468505895.jpeg'),
(31, 27, 'http://y.weimingzhong.com/upload/donation/1468689513.jpeg'),
(32, 27, 'http://y.weimingzhong.com/upload/donation/1468689519.jpeg'),
(33, 27, 'http://y.weimingzhong.com/upload/donation/1468689529.jpeg'),
(34, 28, 'http://y.weimingzhong.com/upload/donation/1468689513.jpeg'),
(35, 28, 'http://y.weimingzhong.com/upload/donation/1468689519.jpeg'),
(36, 28, 'http://y.weimingzhong.com/upload/donation/1468689529.jpeg'),
(37, 29, 'http://y.weimingzhong.com/upload/donation/1468689513.jpeg'),
(38, 29, 'http://y.weimingzhong.com/upload/donation/1468689519.jpeg'),
(39, 29, 'http://y.weimingzhong.com/upload/donation/1468689529.jpeg'),
(40, 30, 'http://y.weimingzhong.com/upload/donation/1468892649.jpeg'),
(41, 30, 'http://y.weimingzhong.com/upload/donation/1468892651.jpeg'),
(42, 30, 'http://y.weimingzhong.com/upload/donation/1468892665.jpeg'),
(43, 31, 'http://y.weimingzhong.com/upload/donation/1468892649.jpeg'),
(44, 31, 'http://y.weimingzhong.com/upload/donation/1468892651.jpeg'),
(45, 31, 'http://y.weimingzhong.com/upload/donation/1468892665.jpeg'),
(48, 32, 'http://y.weimingzhong.com/upload/donation/1468902094.jpeg'),
(49, 25, 'http://y.chongji2000.com/upload/donation/1467953431.jpg'),
(50, 25, 'http://y.chongji2000.com/upload/donation/1467953429.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `t_donation_log`
--

CREATE TABLE `t_donation_log` (
  `dl_id` int(11) NOT NULL,
  `dl_title` varchar(50) DEFAULT NULL COMMENT '名称',
  `m_id` int(11) NOT NULL COMMENT '用户id',
  `dl_addtime` datetime DEFAULT NULL COMMENT '分享时间'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='慈善项目分享表';

-- --------------------------------------------------------

--
-- 表的结构 `t_funds`
--

CREATE TABLE `t_funds` (
  `f_id` int(11) NOT NULL,
  `f_type` tinyint(2) NOT NULL COMMENT '1为机构，2为个人',
  `f_mid` int(11) NOT NULL COMMENT '类型为1是用户id 类型为2是机构id',
  `d_id` int(11) DEFAULT '0' COMMENT '善筹id',
  `f_price` decimal(10,2) DEFAULT NULL COMMENT '提现金额',
  `f_name` varchar(50) DEFAULT NULL COMMENT '开户人姓名',
  `f_idCard` varchar(50) DEFAULT NULL COMMENT '开户人身份证',
  `f_bank` varchar(50) DEFAULT NULL COMMENT '开户银行',
  `f_check_status` tinyint(1) DEFAULT '2' COMMENT '1审批通过，2不通过',
  `f_editTime` datetime DEFAULT NULL COMMENT '审批时间',
  `f_addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `f_status` tinyint(1) DEFAULT '2' COMMENT '1已提现，2未提现',
  `f_phone` varchar(20) DEFAULT NULL,
  `f_card_numb` varchar(50) DEFAULT NULL COMMENT '银行卡号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='申请提现表';

--
-- 转存表中的数据 `t_funds`
--

INSERT INTO `t_funds` (`f_id`, `f_type`, `f_mid`, `d_id`, `f_price`, `f_name`, `f_idCard`, `f_bank`, `f_check_status`, `f_editTime`, `f_addTime`, `f_status`, `f_phone`, `f_card_numb`) VALUES
(1, 1, 33, 0, '7.37', NULL, NULL, NULL, 2, NULL, '2016-07-22 15:28:04', 2, NULL, NULL),
(2, 1, 33, 0, '7.37', NULL, NULL, NULL, 2, NULL, '2016-07-25 10:02:14', 2, NULL, NULL),
(3, 1, 33, 0, '7.37', NULL, NULL, NULL, 2, NULL, '2016-07-26 11:33:01', 2, NULL, NULL),
(4, 1, 32, 0, '1.00', NULL, NULL, NULL, 2, NULL, '2016-07-26 11:36:17', 2, NULL, NULL),
(5, 1, 32, 0, '1.00', NULL, NULL, NULL, 1, NULL, '2016-07-26 11:37:02', 2, NULL, NULL),
(6, 1, 33, 0, '7.37', NULL, NULL, NULL, 2, NULL, '2016-07-26 21:47:35', 2, NULL, NULL),
(7, 1, 33, 0, '7.37', 'fdsaf', NULL, NULL, 2, NULL, '2016-07-26 22:23:33', 2, 'fdsaf', 'fdsdas'),
(8, 1, 33, 0, '7.37', '张三', NULL, NULL, 1, NULL, '2016-07-27 09:25:43', 2, '13400507914', '13400507914@163.com'),
(9, 1, 33, 0, '0.00', '李四', NULL, NULL, 2, NULL, '2016-07-27 15:22:23', 2, '12312312333', '13400507914@163.com'),
(10, 1, 32, 0, '0.00', '熊健', NULL, NULL, 2, NULL, '2016-07-27 21:59:20', 2, '13459463632', 'xiong2326@126.com');

-- --------------------------------------------------------

--
-- 表的结构 `t_member`
--

CREATE TABLE `t_member` (
  `m_id` int(11) NOT NULL,
  `m_openId` varchar(255) DEFAULT NULL,
  `m_phone` varchar(20) DEFAULT NULL,
  `m_name` varchar(50) DEFAULT NULL COMMENT '账号',
  `m_password` varchar(50) DEFAULT NULL COMMENT '密码',
  `m_avatar` varchar(255) DEFAULT NULL,
  `m_publish` int(11) DEFAULT '0',
  `m_share` int(11) DEFAULT '0' COMMENT '分享数',
  `m_focus` int(11) DEFAULT '0' COMMENT '关注数',
  `m_addtime` datetime DEFAULT NULL,
  `m_city` varchar(100) NOT NULL,
  `m_status` tinyint(1) DEFAULT '1' COMMENT '1为正常2为禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `t_member`
--

INSERT INTO `t_member` (`m_id`, `m_openId`, `m_phone`, `m_name`, `m_password`, `m_avatar`, `m_publish`, `m_share`, `m_focus`, `m_addtime`, `m_city`, `m_status`) VALUES
(32, 'opz6Fv4OOxklnCiviz9xvh3XW4zI', NULL, 'monyyip', '123221', 'http://wx.qlogo.cn/mmopen/HdcibxMWpDGoibHH4KTA6dEbk7ia3hKUT6VzE113Gv6u1QHdfsuZSaQuRGjH3PBVFQpnLdfibKd4V10CWTnKag8CEw/0', 1, 1, 1, '2016-06-25 21:16:06', '', 1),
(33, 'oy7BtwIKght7VnVLSpNU7QzdQAlI', '', '新新新', '', 'http://wx.qlogo.cn/mmopen/OKhtylcX8icfxoaF0BbF8nauBP6FBibjgyibXCUx8GclIK1nqica4wttTsPEpQagCbOsomuiaSSxiao8gWbHjVRlfbiamJ96M8BibkHX/0', 1, 0, 0, '2016-07-08 12:42:40', '福建 福州', 1),
(34, '', '', '', '', '', 1, 0, 0, '2016-07-08 13:01:50', '', 1),
(35, 'oy7BtwKa7lNBPPijUKVNjqbq9PFA', '', '贝尔先生', '', 'http://wx.qlogo.cn/mmopen/PiajxSqBRaEKbicaXEdYDbHgbNJNIMyHia6lacN0TQ5jPSC3WS17dnc6h5cxreze9txcEtaIUV3iafOEfSV8jlfjXA/0', 5, 0, 0, '2016-07-08 16:56:34', '', 1),
(36, 'oy7BtwFPjbkYq_NjGBej7YhAYass', '', 'yip', '', 'http://wx.qlogo.cn/mmopen/wFAcQWG6tyupnA9MBAdEdibBbMj9rvLxOuEsVlaor983MNRBrOH4aKia6oUbOoO5VxAQkicQLFfcbAobaVvs0YWAA/0', 4, 0, 0, '2016-07-09 20:32:45', '福建 福州', 1),
(37, 'oy7BtwBvaY5LFVvZIH422y9L-V2U', '', '征服', '', 'http://wx.qlogo.cn/mmopen/wFAcQWG6tys4x17PmDWQ7BJ1kDiaw2HdmOnseQt5ib8cibXicT4icNl8Jb7muYdywVggQgJSX4MgKz5jgthQ0jyGuCnSMUV5XklZK/0', 1, 0, 0, '2016-07-10 02:44:09', '', 1),
(38, 'oy7BtwGq52Ef1zXRaXMyTjSzljEA', '', '葵花烂漫', '', 'http://wx.qlogo.cn/mmopen/wFAcQWG6tysxx5BIW1FyqqU9hDxY0DlPKLO65HLzPic4VKJCF88chcm2MlAxNLBuUsryOq8DHLBoRE77lFsiaibG3R99MKx0y26/0', 0, 0, 0, '2016-07-10 22:05:55', '', 1),
(39, 'oy7BtwOhk_4Lqk4PJgDKbsWXYFH8', '', '林鸣山', '', 'http://wx.qlogo.cn/mmopen/D6SxCXqMDPT1MT2oyAdfibkibNhwKZgK0grwzZCAUoURY8D30gNv178WzTVwsFgOqZnCKjDeFeag7k34Os8MI0EsicCpEyT0WicN/0', 0, 0, 0, '2016-07-14 12:22:26', '', 1),
(40, 'oy7BtwEH6IMRQGDQ-di2Id0egyIc', '', '林鸣山', '', 'http://wx.qlogo.cn/mmopen/PiajxSqBRaELFZxP6oVwickicOUGJKn4WljlnchSeQekaOdEYwvsicXduicZMLbxCib2nr54vrJXC96jiacMGLqHnsHFg/0', 0, 0, 0, '2016-07-14 12:24:33', '福建 泉州', 1),
(41, 'oy7BtwFPLhu4MA3SkA4vp-inuJgA', '', 'Lane', '', 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLBTSfIibiaNMc3KK5KI2ROoN63JaaaDHrC70IhnAVb724d0ToJgYDlyfXB2BBhcDUcpF4yQ3Y07LKKQ/0', 0, 0, 0, '2016-07-15 16:02:50', '', 1),
(42, 'oy7BtwIVK0rWqaYNZ2iA8Sm-dwlw', '', 'CM-小学僧', '', 'http://wx.qlogo.cn/mmopen/D6SxCXqMDPR31V0JzEWrC4o1Zx9RsibgmwCuRpmgjTntv7BKQtIkDxj6y0F8f2ugwpOSwqmCBUicPTX8n8BUWBzGdviaobiaSxOf/0', 0, 0, 0, '2016-07-16 00:23:24', '', 1),
(43, 'oy7BtwLXPS-hb4CA6AvRxf0U0FP0', '', '微先生', '', 'http://wx.qlogo.cn/mmopen/D6SxCXqMDPR31V0JzEWrC4icEwQwhMoMqibUbr02icQ95lcia8NVP2cTLNibtZMJWibdiaZlEOy4k4FbwrJQW52uQicywmm1SbNiaBwVy/0', 0, 0, 0, '2016-07-19 12:02:18', '', 1),
(44, 'oy7BtwMSJtRgOdqCzxO21Wmgp4XA', '', '都豆爸', '', 'http://wx.qlogo.cn/mmopen/D6SxCXqMDPR31V0JzEWrC7Sol3icaiaBKv7H4WxJEKl1cfvcVG9dxNib2q5vKf2EyUBPc0E0G8Vic9ia5gxCDV29VIQLicGLCzaOJ0/0', 0, 0, 0, '2016-07-20 18:56:28', '福建 福州', 1),
(45, 'oy7BtwBEjnbwy1zXl6GB3TAPGIDk', '', 'O(∩啦_啦∩)O', '', 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLBkKiaQstHlKzDaiawyicgEHTGxyDSicSIOAK8YHc8gLM7NGdp5PLicTECCXlOrT2r9Ve8moEmG534ca9g/0', 0, 0, 0, '2016-07-24 09:57:06', '', 1),
(46, 'oy7BtwFEsEEPQ5hXjzRUQ5cR3gV0', '', 'ぐ放肆微笑℃', '', 'http://wx.qlogo.cn/mmopen/zsUXYY6y4cLuo0ialJTgAwlXSETwK5bvpZ7iabpmibAeP0dsGpIwfuypJiaowJyGHnVPhEwxGHyphtdK12dJr2eZPA/0', 0, 0, 0, '2016-07-25 01:28:17', '福建 漳州', 1),
(47, 'oy7BtwJTAzqC3I56LAO8l6SrjPts', '', '马新标', '', 'http://wx.qlogo.cn/mmopen/zsUXYY6y4cJGXicAicSYLic3WUMxvQ2pvKB99ibWXHSIYf1u70WynPjm2JjQ83wZGsbWYokvWpZibjzhX6cicKmVh2BkFJDNa3xU1d/0', 0, 0, 0, '2016-07-29 10:23:38', '', 1),
(48, 'oy7BtwEaQCrvUrMImp3z_g-S_O3s', '', '小雄', '', 'http://wx.qlogo.cn/mmopen/wFAcQWG6tysxx5BIW1FyqricZEibGp5Wo16X1Zx0QWCEOzwVickffworFEzhgoqFvZB2wXV3oy6L3h1oDQCNcnGyffqGIYHOKW3/0', 0, 0, 0, '2016-07-29 21:13:51', '', 1),
(49, 'oy7BtwPQMJFpdOWeWrJH3QhnQgpI', '', 'sally', '', 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLBmnvWjbTxcAxeckycA4iaoC55aicP7aC9K31botL7V5a9ehf6WZ2OenMSk8Hb2OAFJf3gxeIp647qA/0', 0, 0, 0, '2016-07-31 09:50:59', '', 1),
(50, 'oy7BtwJOvUMqtbwFPn10ofUUhbSk', '', '.....', '', 'http://wx.qlogo.cn/mmopen/AxmibNQP4fhMqnYAAq2e837Z57UlZVhbgfhMLcmD0zL46sZJhxCzYhxJILHfdyY8d3NuZNhU3cz0h6Qx7a9Q7icteo4mKTYX8S/0', 0, 0, 0, '2016-08-07 01:07:31', '北京 北京', 1);

-- --------------------------------------------------------

--
-- 表的结构 `t_message`
--

CREATE TABLE `t_message` (
  `me_id` int(11) NOT NULL,
  `me_mid` int(11) DEFAULT NULL COMMENT '留言人',
  `p_id` int(11) DEFAULT NULL COMMENT '父级信息id',
  `d_id` int(11) DEFAULT NULL COMMENT '善筹id',
  `me_price` decimal(10,2) DEFAULT NULL,
  `me_name` varchar(50) DEFAULT NULL COMMENT '留言人姓名',
  `me_content` text COMMENT '留言内容',
  `me_addTime` datetime DEFAULT NULL COMMENT '留言时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='留言表';

--
-- 转存表中的数据 `t_message`
--

INSERT INTO `t_message` (`me_id`, `me_mid`, `p_id`, `d_id`, `me_price`, `me_name`, `me_content`, `me_addTime`) VALUES
(8, 35, 0, 25, '0.01', '贝尔先生', '支持', '2016-07-08 17:35:14'),
(9, 33, 8, 25, NULL, '新新新', '谢谢支持', '2016-07-08 21:00:53'),
(10, 38, 0, 25, '0.02', '葵花烂漫', '支持', '2016-07-10 22:10:32'),
(11, 35, 0, 25, '2.00', '贝尔先生', '支持', '2016-07-11 13:28:52'),
(12, 35, 0, 25, '0.20', '贝尔先生', '支持', '2016-07-12 00:08:50'),
(13, 38, 0, 25, '0.02', '葵花烂漫', '支持', '2016-07-12 21:20:19');

-- --------------------------------------------------------

--
-- 表的结构 `t_money_used`
--

CREATE TABLE `t_money_used` (
  `mu_id` int(11) NOT NULL,
  `mu_pid` int(11) DEFAULT NULL COMMENT '个人信息id',
  `mu_img` varchar(255) DEFAULT NULL COMMENT '资金用途照片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_money_used`
--

INSERT INTO `t_money_used` (`mu_id`, `mu_pid`, `mu_img`) VALUES
(39, 14, 'http://y.chongji2000.com:82/upload/donation/1467953269.jpg'),
(41, 16, 'http://y.weimingzhong.com/upload/donation/1468505913.jpeg'),
(42, 17, 'http://y.weimingzhong.com/upload/donation/1468689632.jpeg'),
(43, 18, 'http://y.weimingzhong.com/upload/donation/1468689632.jpeg'),
(44, 19, 'http://y.weimingzhong.com/upload/donation/1468689632.jpeg'),
(45, 20, 'http://y.weimingzhong.com/upload/donation/1468892787.jpeg'),
(46, 21, 'http://y.weimingzhong.com/upload/donation/1468892787.jpeg'),
(55, 22, 'http://y.weimingzhong.com/upload/donation/1468902222.jpeg'),
(56, 22, 'http://y.weimingzhong.com/upload/donation/1468902230.jpeg'),
(57, 22, 'http://y.weimingzhong.com/upload/donation/1468902248.jpeg'),
(58, 22, 'http://y.weimingzhong.com/upload/donation/1468902263.jpeg'),
(59, 15, 'http://y.chongji2000.com/upload/donation/1467953465.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `t_order`
--

CREATE TABLE `t_order` (
  `o_id` bigint(20) NOT NULL,
  `c_id` int(11) NOT NULL COMMENT '慈善日志表',
  `o_platform` int(11) NOT NULL COMMENT '平台ID',
  `o_order_no` varchar(50) NOT NULL COMMENT '订单号',
  `o_transaction_id` varchar(50) NOT NULL COMMENT '第三方平台订单号',
  `o_type` tinyint(4) NOT NULL COMMENT '产品类型：1捐助箱2为物品3为善筹',
  `m_id` int(11) NOT NULL,
  `o_total_fee` decimal(10,2) NOT NULL COMMENT '支付总金额',
  `o_status` tinyint(1) DEFAULT '2' COMMENT '1已支付2为未支付',
  `o_addtime` int(11) NOT NULL COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户支付表';

--
-- 转存表中的数据 `t_order`
--

INSERT INTO `t_order` (`o_id`, `c_id`, `o_platform`, `o_order_no`, `o_transaction_id`, `o_type`, `m_id`, `o_total_fee`, `o_status`, `o_addtime`) VALUES
(1762, 45, 1, 'B2016070813005674', '', 1, 33, '1.00', 2, 1467954056),
(1763, 46, 1, 'P2016070813005881', '', 2, 33, '1.00', 2, 1467954058),
(1764, 47, 1, 'P2016070813005886', '', 2, 33, '1.00', 2, 1467954058),
(1765, 48, 1, 'B2016070813020442', '', 1, 34, '1.00', 2, 1467954124),
(1766, 49, 1, 'B2016070813020617', '', 1, 34, '1.00', 2, 1467954126),
(1767, 50, 1, 'P2016070813030173', '', 2, 33, '2.00', 2, 1467954181),
(1768, 51, 1, 'B2016070813183162', '', 1, 33, '1.00', 2, 1467955111),
(1769, 52, 1, 'C2016070817343062', '', 3, 35, '0.01', 2, 1467970470),
(1770, 53, 1, 'C2016070817344850', '', 3, 35, '0.01', 2, 1467970488),
(1771, 54, 1, 'C2016070817345636', '', 3, 35, '0.01', 2, 1467970496),
(1772, 55, 1, 'C2016070817350711', '4008722001201607088592555995', 3, 35, '0.01', 1, 1467970507),
(1773, 56, 1, 'B2016070817434988', '', 1, 35, '1.00', 2, 1467971029),
(1774, 57, 1, 'B2016070817440162', '4008722001201607088592835564', 1, 35, '1.00', 1, 1467971041),
(1775, 58, 1, 'B2016070817442979', '', 1, 35, '1.00', 2, 1467971069),
(1776, 59, 1, 'B2016070820582331', '', 1, 34, '1.00', 2, 1467982703),
(1777, 60, 1, 'B2016070820582592', '', 1, 34, '1.00', 2, 1467982705),
(1778, 61, 1, 'B2016070820582679', '', 1, 34, '1.00', 2, 1467982706),
(1779, 62, 1, 'P2016070820582747', '', 2, 34, '2.00', 2, 1467982707),
(1780, 63, 1, 'P2016070820583287', '', 2, 34, '2.00', 2, 1467982712),
(1781, 64, 1, 'P2016070820583518', '', 2, 34, '2.00', 2, 1467982715),
(1782, 65, 1, 'C2016070820590613', '', 3, 34, '0.01', 2, 1467982746),
(1783, 66, 1, 'C2016070820590965', '', 3, 34, '0.01', 2, 1467982749),
(1784, 67, 1, 'C2016070821000415', '', 3, 34, '0.01', 2, 1467982804),
(1785, 68, 1, 'B2016070821012653', '', 1, 33, '1.00', 2, 1467982886),
(1786, 69, 1, 'C2016070821013178', '', 3, 34, '0.01', 2, 1467982891),
(1787, 70, 1, 'C2016070821013250', '', 3, 34, '0.01', 2, 1467982892),
(1788, 71, 1, 'B2016070821014310', '', 1, 34, '1.00', 2, 1467982903),
(1789, 72, 1, 'C2016070821020730', '', 3, 34, '0.01', 2, 1467982927),
(1790, 73, 1, 'C2016070821020982', '', 3, 34, '0.01', 2, 1467982929),
(1791, 74, 1, 'C2016070821020917', '', 3, 34, '0.01', 2, 1467982929),
(1792, 75, 1, 'C2016070821020931', '', 3, 34, '0.01', 2, 1467982929),
(1793, 76, 1, 'C2016070821031363', '', 3, 34, '0.01', 2, 1467982993),
(1794, 77, 1, 'C2016070821031585', '', 3, 34, '0.01', 2, 1467982995),
(1795, 78, 1, 'B2016070821053617', '', 1, 34, '1.00', 2, 1467983136),
(1796, 79, 1, 'B2016070821053784', '', 1, 34, '1.00', 2, 1467983137),
(1797, 80, 1, 'B2016070821053775', '', 1, 34, '1.00', 2, 1467983137),
(1798, 81, 1, 'B2016070821053777', '', 1, 34, '1.00', 2, 1467983137),
(1799, 82, 1, 'B2016070821053876', '', 1, 34, '1.00', 2, 1467983138),
(1800, 83, 1, 'B2016070821053835', '', 1, 34, '1.00', 2, 1467983138),
(1801, 84, 1, 'B2016070821053879', '', 1, 34, '1.00', 2, 1467983138),
(1802, 85, 1, 'C2016070821055497', '', 3, 34, '0.01', 2, 1467983154),
(1803, 86, 1, 'C2016070821055544', '', 3, 34, '0.01', 2, 1467983155),
(1804, 87, 1, 'C2016070821055611', '', 3, 34, '0.01', 2, 1467983156),
(1805, 88, 1, 'C2016070821055656', '', 3, 34, '0.01', 2, 1467983156),
(1806, 89, 1, 'C2016070821055619', '', 3, 34, '0.01', 2, 1467983156),
(1807, 90, 1, 'C2016070821055738', '', 3, 34, '0.01', 2, 1467983157),
(1808, 91, 1, 'C2016070821055774', '', 3, 34, '0.01', 2, 1467983157),
(1809, 92, 1, 'C2016070821055724', '', 3, 34, '0.01', 2, 1467983157),
(1810, 93, 1, 'C2016070821055713', '', 3, 34, '0.01', 2, 1467983157),
(1811, 94, 1, 'C2016070821055734', '', 3, 34, '0.01', 2, 1467983157),
(1812, 95, 1, 'C2016070821055868', '', 3, 34, '0.01', 2, 1467983158),
(1813, 96, 1, 'C2016070821055886', '', 3, 34, '0.01', 2, 1467983158),
(1814, 97, 1, 'B2016070821560521', '', 1, 33, '1.00', 2, 1467986165),
(1815, 98, 1, 'P2016070822341597', '', 2, 35, '2.00', 2, 1467988455),
(1816, 99, 1, 'C2016070921275770', '', 3, 34, '0.01', 2, 1468070877),
(1817, 100, 1, 'C2016070921280085', '', 3, 34, '0.01', 2, 1468070880),
(1818, 101, 1, 'B2016070922151985', '', 1, 33, '1.00', 2, 1468073719),
(1819, 102, 1, 'B2016071010374399', '', 1, 33, '1.00', 2, 1468118263),
(1820, 103, 1, 'B2016071010573753', '4008722001201607108688694182', 1, 35, '1.00', 1, 1468119457),
(1821, 104, 1, 'P2016071011505945', '', 2, 36, '1.00', 2, 1468122659),
(1822, 105, 1, 'P2016071011534668', '', 2, 36, '1.00', 2, 1468122826),
(1823, 106, 1, 'P2016071015004093', '', 2, 35, '1.00', 2, 1468134040),
(1824, 107, 1, 'P2016071017363945', '', 2, 33, '2.00', 2, 1468143399),
(1825, 108, 1, 'P2016071017373588', '', 2, 33, '1.00', 2, 1468143455),
(1826, 109, 1, 'P2016071020540250', '', 2, 33, '1.00', 2, 1468155242),
(1827, 110, 1, 'P2016071021530554', '', 2, 33, '1.00', 2, 1468158785),
(1828, 111, 1, 'C2016071022062063', '', 3, 38, '0.02', 2, 1468159580),
(1829, 112, 1, 'C2016071022075031', '', 3, 38, '0.02', 2, 1468159670),
(1830, 113, 1, 'C2016071022091967', '', 3, 38, '0.02', 2, 1468159759),
(1831, 114, 1, 'C2016071022101430', '', 3, 38, '0.02', 2, 1468159814),
(1832, 115, 1, 'C2016071022102675', '4002562001201607108728219441', 3, 38, '0.02', 1, 1468159826),
(1833, 116, 1, 'C2016071113284487', '4008722001201607118759550420', 3, 35, '2.00', 1, 1468214924),
(1834, 117, 1, 'P2016071116382378', '', 2, 33, '1.00', 2, 1468226303),
(1835, 118, 1, 'C2016071121100730', '', 3, 36, '0.10', 2, 1468242607),
(1836, 119, 1, 'C2016071121100837', '', 3, 36, '0.10', 2, 1468242608),
(1837, 120, 1, 'C2016071121101656', '', 3, 36, '0.10', 2, 1468242616),
(1838, 121, 1, 'C2016071200084124', '4008722001201607128796098937', 3, 35, '0.20', 1, 1468253321),
(1839, 122, 1, 'B2016071200090558', '4008722001201607128796830551', 1, 35, '1.00', 1, 1468253345),
(1840, 123, 1, 'P2016071200093266', '', 2, 35, '1.00', 2, 1468253372),
(1841, 124, 1, 'B2016071221111370', '', 1, 33, '1.00', 2, 1468329073),
(1842, 125, 1, 'B2016071221150347', '', 1, 33, '1.00', 2, 1468329303),
(1843, 126, 1, 'B2016071221161894', '', 1, 33, '1.00', 2, 1468329378),
(1844, 127, 1, 'B2016071221164167', '', 1, 33, '1.00', 2, 1468329401),
(1845, 128, 1, 'B2016071221182059', '', 1, 33, '1.00', 2, 1468329500),
(1846, 129, 1, 'B2016071221191519', '', 1, 38, '1.00', 2, 1468329555),
(1847, 130, 1, 'C2016071221201577', '4002562001201607128852920132', 3, 38, '0.02', 1, 1468329615),
(1848, 131, 1, 'P2016071423400928', '', 2, 33, '1.00', 2, 1468510809),
(1849, 132, 1, 'P2016071822461372', '', 2, 41, '1.00', 2, 1468853173),
(1850, 133, 1, 'P2016071822461352', '', 2, 41, '1.00', 2, 1468853173),
(1851, 134, 1, 'P2016071822461851', '', 2, 41, '1.00', 2, 1468853178),
(1852, 135, 1, 'P2016071911122394', '', 2, 35, '1.00', 2, 1468897943),
(1853, 136, 1, 'B2016071911123316', '', 1, 35, '1.00', 2, 1468897953),
(1854, 137, 1, 'P2016071917531929', '', 2, 33, '1.00', 2, 1468921999),
(1855, 145, 1, 'B2016072016385520', '', 1, 35, '1.00', 2, 1469003935),
(1856, 146, 1, 'B2016072016430393', '', 1, 35, '1.00', 2, 1469004183),
(1857, 147, 1, 'B2016072016430542', '4008722001201607209384096280', 1, 35, '1.00', 1, 1469004185),
(1858, 158, 1, 'B2016072018545728', '', 1, 43, '1.00', 2, 1469012097),
(1859, 159, 1, 'B2016072103161076', '', 1, 35, '1.00', 2, 1469042170),
(1860, 160, 1, 'B2016072103263743', '', 1, 35, '1.00', 2, 1469042797),
(1861, 161, 1, 'B2016072109305311', '', 1, 36, '1.00', 2, 1469064653),
(1862, 162, 1, 'B2016072109345648', '4005962001201607219425978488', 1, 33, '0.01', 1, 1469064896),
(1863, 163, 1, 'B2016072110004637', '4005962001201607219428784490', 1, 33, '0.01', 1, 1469066446),
(1864, 164, 1, 'B2016072110010321', '4004162001201607219427902388', 1, 36, '0.01', 1, 1469066463),
(1865, 165, 1, 'B2016072111144672', '', 1, 35, '2.20', 2, 1469070886),
(1866, 166, 1, 'B2016072111225287', '4004162001201607219433811197', 1, 36, '0.01', 1, 1469071372),
(1867, 167, 1, 'B2016072111235157', '4004162001201607219433862133', 1, 36, '0.02', 1, 1469071431),
(1868, 168, 1, 'B2016072111252389', '4005962001201607219433912160', 1, 33, '1.00', 1, 1469071523),
(1869, 169, 1, 'B2016072111301458', '4005962001201607219435180704', 1, 33, '0.01', 1, 1469071814),
(1870, 170, 1, 'B2016072111310724', '4008722001201607219435223022', 1, 35, '0.01', 1, 1469071867),
(1871, 171, 1, 'B2016072111320899', '4008722001201607219434194146', 1, 35, '0.50', 1, 1469071928),
(1872, 172, 1, 'B2016072111325881', '4008722001201607219434252833', 1, 35, '1.50', 1, 1469071978),
(1873, 173, 1, 'B2016072111341597', '4008722001201607219434296290', 1, 35, '2.50', 1, 1469072055),
(1874, 174, 1, 'B2016072114164826', '4000512001201607219447428940', 1, 41, '1.80', 1, 1469081808),
(1875, 175, 1, 'P2016072115290716', '', 2, 33, '1.00', 2, 1469086147),
(1876, 176, 1, 'B2016072611354738', '4008722001201607269804967396', 1, 35, '1.00', 1, 1469504147),
(1877, 177, 1, 'B2016072819351166', '4004362001201607289989165814', 1, 43, '1.80', 1, 1469705711),
(1878, 178, 1, 'P2016080209125362', '', 2, 33, '1.00', 2, 1470100373),
(1879, 179, 1, 'P2016080521272297', '', 2, 33, '1.00', 2, 1470403642),
(1880, 180, 1, 'P2016080521272368', '', 2, 33, '1.00', 2, 1470403643),
(1881, 181, 1, 'P2016080723150961', '', 2, 44, '2.00', 2, 1470582909),
(1882, 182, 1, 'P2016080723151758', '', 2, 44, '2.00', 2, 1470582917),
(1883, 183, 1, 'P2016080809350151', '', 2, 36, '1.00', 2, 1470620101);

-- --------------------------------------------------------

--
-- 表的结构 `t_person_info`
--

CREATE TABLE `t_person_info` (
  `p_id` int(11) NOT NULL,
  `p_realname` varchar(50) DEFAULT NULL COMMENT '真实姓名',
  `p_idCard` varchar(50) DEFAULT NULL COMMENT '身份证',
  `p_phone` varchar(50) DEFAULT NULL COMMENT '联系电话',
  `p_img` varchar(100) DEFAULT NULL COMMENT '证件照',
  `p_bank` int(11) DEFAULT NULL COMMENT '银行卡信息',
  `p_status` tinyint(1) DEFAULT '2' COMMENT '1通过2未通过',
  `p_addtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='个人信息表';

--
-- 转存表中的数据 `t_person_info`
--

INSERT INTO `t_person_info` (`p_id`, `p_realname`, `p_idCard`, `p_phone`, `p_img`, `p_bank`, `p_status`, `p_addtime`) VALUES
(14, '萨马兰奇', '352203199999999999', '13400507914', 'http://y.chongji2000.com:82/upload/donation/1467953265.jpg', 15, 1, '2016-07-08 12:48:15'),
(15, '萨马兰奇', '359999999999999999', '13400507914', 'http://y.chongji2000.com/upload/donation/1467953459.jpg', 16, 1, '2016-07-20 16:46:09'),
(16, '324', '350783198807026661', '15806036996', 'http://y.weimingzhong.com/upload/donation/1468505910.jpeg', 17, 1, '2016-07-14 22:19:09'),
(17, '贝尔', '350428546452525225', '13459463632', 'http://y.weimingzhong.com/upload/donation/1468689650.jpeg', 18, 1, '2016-07-17 01:23:16'),
(18, '贝尔', '350428546452525225', '13459463632', 'http://y.weimingzhong.com/upload/donation/1468689650.jpeg', 19, 1, '2016-07-17 01:24:23'),
(19, '贝尔', '350428546452525225', '13459463632', 'http://y.weimingzhong.com/upload/donation/1468689650.jpeg', 20, 1, '2016-07-17 01:24:30'),
(20, '344', '350165215514121411', '15806265559', 'http://y.weimingzhong.com/upload/donation/1468892784.jpeg', 21, 1, '2016-07-19 09:46:38'),
(21, '344', '350165215514121411', '15806265559', 'http://y.weimingzhong.com/upload/donation/1468892784.jpeg', 22, 1, '2016-07-19 09:47:08'),
(22, '熊健', '350428185545939555', '13459463632', 'http://y.weimingzhong.com/upload/donation/1468902204.jpeg', 23, 1, '2016-07-20 16:45:51');

-- --------------------------------------------------------

--
-- 表的结构 `t_product`
--

CREATE TABLE `t_product` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL COMMENT '机构id',
  `p_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `p_content` text COMMENT '详情',
  `p_img` varchar(255) DEFAULT NULL COMMENT '商品图片',
  `p_price` decimal(10,2) DEFAULT NULL COMMENT '价格',
  `p_addtime` datetime DEFAULT NULL,
  `p_order` int(11) DEFAULT NULL,
  `p_status` tinyint(1) DEFAULT '1' COMMENT '1为正常2为禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='机构商品表';

--
-- 转存表中的数据 `t_product`
--

INSERT INTO `t_product` (`p_id`, `c_id`, `p_title`, `p_content`, `p_img`, `p_price`, `p_addtime`, `p_order`, `p_status`) VALUES
(3, 20, '食品', '捐赠食品给孩子们', 'http://y.chongji2000.com:82/upload/product/1467953326.jpg', '1.00', '2016-07-08 12:48:48', 1, 1),
(4, 20, '衣服', '攀枝花市一个县小学，07年在网上为孩子们募捐一些御寒衣物。很快，爱心衣物就从四面八方寄来。此后8年，爱', 'http://y.chongji2000.com:82/upload/product/1467953364.jpg', '2.00', '2016-07-08 12:49:27', 3, 1),
(5, 21, '衣服', '衣服', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(6, 21, '学费', '学费', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(7, 21, '鞋子', '鞋子', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(8, 21, '食品', '食品', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(9, 21, '水', '水', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(10, 21, '住宿', '住宿', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(11, 21, '资金', '资金', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(12, 21, '书籍', '书籍', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(13, 21, '交通', '交通', '', '1.00', '2016-07-09 23:18:11', 1, 1),
(14, 22, '衣服', '衣服', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(15, 22, '学费', '学费', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(16, 22, '鞋子', '鞋子', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(17, 22, '食品', '食品', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(18, 22, '水', '水', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(19, 22, '住宿', '住宿', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(20, 22, '资金', '资金', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(21, 22, '书籍', '书籍', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(22, 22, '交通', '交通', '', '1.00', '2016-07-10 00:18:30', 1, 1),
(23, 23, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(24, 23, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(25, 23, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(26, 23, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(27, 23, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(28, 23, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(29, 23, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(30, 23, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(31, 23, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-10 11:50:04', 1, 1),
(32, 24, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(33, 24, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(34, 24, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(35, 24, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(36, 24, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(37, 24, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(38, 24, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(39, 24, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(40, 24, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-10 21:56:16', 1, 1),
(41, 25, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(42, 25, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(43, 25, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(44, 25, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(45, 25, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(46, 25, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(47, 25, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(48, 25, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(49, 25, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-14 22:15:00', 1, 1),
(50, 26, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(51, 26, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(52, 26, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(53, 26, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(54, 26, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(55, 26, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(56, 26, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(57, 26, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(58, 26, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-15 16:08:28', 1, 1),
(59, 27, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(60, 27, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(61, 27, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(62, 27, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(63, 27, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(64, 27, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(65, 27, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(66, 27, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(67, 27, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-15 22:05:32', 1, 1),
(68, 28, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(69, 28, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(70, 28, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(71, 28, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(72, 28, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(73, 28, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(74, 28, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(75, 28, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(76, 28, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-16 17:07:00', 1, 1),
(77, 29, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(78, 29, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(79, 29, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(80, 29, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(81, 29, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(82, 29, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(83, 29, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(84, 29, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(85, 29, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-16 17:09:10', 1, 1),
(86, 30, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(87, 30, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(88, 30, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(89, 30, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(90, 30, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(91, 30, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(92, 30, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(93, 30, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(94, 30, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-17 01:35:56', 1, 1),
(95, 31, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(96, 31, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(97, 31, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(98, 31, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(99, 31, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(100, 31, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(101, 31, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(102, 31, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(103, 31, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-19 10:15:26', 1, 1),
(104, 32, '衣服', '衣服', '/public/images/skin/wz_1.jpg', '1.00', '2016-07-19 16:43:26', 1, 1),
(105, 32, '学费', '学费', '/public/images/skin/wz_2.jpg', '1.00', '2016-07-19 16:43:26', 1, 1),
(106, 32, '鞋子', '鞋子', '/public/images/skin/wz_3.jpg', '1.00', '2016-07-19 16:43:26', 1, 1),
(107, 32, '食品', '食品', '/public/images/skin/wz_4.jpg', '1.00', '2016-07-19 16:43:26', 1, 1),
(108, 32, '水', '水', '/public/images/skin/wz_5.jpg', '1.00', '2016-07-19 16:43:26', 1, 1),
(109, 32, '住宿', '住宿', '/public/images/skin/wz_6.jpg', '1.00', '2016-07-19 16:43:27', 1, 1),
(110, 32, '资金', '资金', '/public/images/skin/wz_7.jpg', '1.00', '2016-07-19 16:43:27', 1, 1),
(111, 32, '书籍', '书籍', '/public/images/skin/wz_8.jpg', '1.00', '2016-07-19 16:43:27', 1, 1),
(112, 32, '交通', '交通', '/public/images/skin/wz_9.jpg', '1.00', '2016-07-19 16:43:27', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `t_share`
--

CREATE TABLE `t_share` (
  `s_id` int(11) NOT NULL,
  `s_type` tinyint(1) DEFAULT '1',
  `s_title` varchar(255) DEFAULT NULL,
  `s_img` varchar(255) DEFAULT NULL,
  `s_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_share`
--

INSERT INTO `t_share` (`s_id`, `s_type`, `s_title`, `s_img`, `s_content`) VALUES
(1, 1, '伸出援手，他们需要你的帮助。机构', 'http://y.chongji2000.com:82/upload/share/1470151520.jpg', '每个人都有需要帮助的时候，你们今天的善举，必有福报。'),
(2, 2, '伸出援手，他们需要你！慈善', 'http://y.chongji2000.com:82/upload/share/1470140240.jpg', '每个人都有需要帮助的时候，你们今天的善举，必有福报。'),
(3, 3, '伸出援手，他们需要你！3', 'http://y.chongji2000.com:82/upload/share/1470140240.jpg', '每个人都有需要帮助的时候，你们今天的善举，必有福报。');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `t_article`
--
ALTER TABLE `t_article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `t_bank`
--
ALTER TABLE `t_bank`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `t_bank_log`
--
ALTER TABLE `t_bank_log`
  ADD PRIMARY KEY (`bl_id`);

--
-- Indexes for table `t_cashs`
--
ALTER TABLE `t_cashs`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `t_company`
--
ALTER TABLE `t_company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `t_company_img`
--
ALTER TABLE `t_company_img`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `t_contribute`
--
ALTER TABLE `t_contribute`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `t_donation`
--
ALTER TABLE `t_donation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `t_donation_img`
--
ALTER TABLE `t_donation_img`
  ADD PRIMARY KEY (`di_id`);

--
-- Indexes for table `t_donation_log`
--
ALTER TABLE `t_donation_log`
  ADD PRIMARY KEY (`dl_id`);

--
-- Indexes for table `t_funds`
--
ALTER TABLE `t_funds`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `t_message`
--
ALTER TABLE `t_message`
  ADD PRIMARY KEY (`me_id`);

--
-- Indexes for table `t_money_used`
--
ALTER TABLE `t_money_used`
  ADD PRIMARY KEY (`mu_id`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `t_person_info`
--
ALTER TABLE `t_person_info`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `t_share`
--
ALTER TABLE `t_share`
  ADD PRIMARY KEY (`s_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `t_article`
--
ALTER TABLE `t_article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `t_bank`
--
ALTER TABLE `t_bank`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- 使用表AUTO_INCREMENT `t_bank_log`
--
ALTER TABLE `t_bank_log`
  MODIFY `bl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `t_cashs`
--
ALTER TABLE `t_cashs`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `t_company`
--
ALTER TABLE `t_company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- 使用表AUTO_INCREMENT `t_company_img`
--
ALTER TABLE `t_company_img`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- 使用表AUTO_INCREMENT `t_contribute`
--
ALTER TABLE `t_contribute`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- 使用表AUTO_INCREMENT `t_donation`
--
ALTER TABLE `t_donation`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `t_donation_img`
--
ALTER TABLE `t_donation_img`
  MODIFY `di_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- 使用表AUTO_INCREMENT `t_donation_log`
--
ALTER TABLE `t_donation_log`
  MODIFY `dl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `t_funds`
--
ALTER TABLE `t_funds`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `t_member`
--
ALTER TABLE `t_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- 使用表AUTO_INCREMENT `t_message`
--
ALTER TABLE `t_message`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `t_money_used`
--
ALTER TABLE `t_money_used`
  MODIFY `mu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- 使用表AUTO_INCREMENT `t_order`
--
ALTER TABLE `t_order`
  MODIFY `o_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1884;
--
-- 使用表AUTO_INCREMENT `t_person_info`
--
ALTER TABLE `t_person_info`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- 使用表AUTO_INCREMENT `t_product`
--
ALTER TABLE `t_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- 使用表AUTO_INCREMENT `t_share`
--
ALTER TABLE `t_share`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
