DROP TABLE IF EXISTS `w0002_admin`;
CREATE TABLE `w0002_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` tinyint(1) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `name` varchar(20) DEFAULT '',
  `pass` varchar(100) DEFAULT '',
  `face` varchar(10) DEFAULT '',
  `realname` varchar(20) DEFAULT '',
  `address` varchar(255) DEFAULT '',
  `mobile` varchar(20) DEFAULT '',
  `intro` varchar(255) DEFAULT '',
  `qq` varchar(20) DEFAULT '',
  `sex` char(2) DEFAULT '',
  `rbac` varchar(255) DEFAULT '',
  `json` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `w0002_finder`;
CREATE TABLE `w0002_finder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sortby` tinyint(1) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `size` int(11) NOT NULL DEFAULT '0',
  `ctime` int(11) NOT NULL DEFAULT '0',
  `utime` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `w0002_finder` VALUES("1","0","0","1","197963","1474801357","0","image/jpeg","1000920160613175557078_640.jpg","data/finder/","jpg","650","567",",1,");


DROP TABLE IF EXISTS `w0002_item`;
CREATE TABLE `w0002_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `nid` int(11) DEFAULT '0',
  `state` tinyint(1) DEFAULT '0',
  `sortby` int(11) DEFAULT '100',
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `level` varchar(255) DEFAULT '',
  `json` varchar(255) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `summary` varchar(255) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `url_type` varchar(255) DEFAULT '',
  `url_target` varchar(10) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `image_path` varchar(255) DEFAULT '',
  `album` varchar(10000) DEFAULT '',
  `content` text,
  `alias` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO `w0002_item` VALUES("1","0","2","1","100","1473507251","1473510053",",1,","","手机摄影人","","","","","","data/category/57d3ef809e37e","","","");
INSERT INTO `w0002_item` VALUES("2","0","2","1","100","1473507261","1481792191",",2,","","潜力达人","","","","","","data/category/57d3efb63e0b0","","","");
INSERT INTO `w0002_item` VALUES("3","0","2","1","100","1473507304","1477270639",",3,","","摄影红人","","","","","","data/category/57d3efe47debe","","","");
INSERT INTO `w0002_item` VALUES("4","0","2","1","100","1473507311","1490604699",",4,","","印象人物","","","","","","","","","");
INSERT INTO `w0002_item` VALUES("5","4","1","1","100","1473507437","1490604462",",4,5,","a:1:{s:8:\"category\";a:3:{s:2:\"id\";s:1:\"4\";s:5:\"title\";s:12:\"印象人物\";s:5:\"alias\";s:0:\"\";}}","他不仅在奥运现场角度刁钻，更将体育摄影玩得出神入化","","","","","20.png","data/work/5","","","");
INSERT INTO `w0002_item` VALUES("6","4","1","1","100","1473507473","1490604457",",4,6,","a:1:{s:8:\"category\";a:3:{s:2:\"id\";s:1:\"4\";s:5:\"title\";s:12:\"印象人物\";s:5:\"alias\";s:0:\"\";}}","不会跳舞的健身教练，不是好的摄影师","","","","","19.png","data/work/6","","","");
INSERT INTO `w0002_item` VALUES("7","2","1","1","100","1473507495","1490604454",",2,7,","a:1:{s:8:\"category\";a:3:{s:2:\"id\";s:1:\"2\";s:5:\"title\";s:12:\"潜力达人\";s:5:\"alias\";s:0:\"\";}}","他的镜头下的舞蹈，无处不是生活","","","","","18.png","data/work/7","","","");
INSERT INTO `w0002_item` VALUES("8","1","1","1","100","1473507526","1490604451",",1,8,","a:1:{s:8:\"category\";a:3:{s:2:\"id\";s:1:\"1\";s:5:\"title\";s:15:\"手机摄影人\";s:5:\"alias\";s:0:\"\";}}","拍照拍“上天”的摄影师，镜头里的上帝视角","","","","","17.png","data/work/8","","","");
INSERT INTO `w0002_item` VALUES("9","1","1","1","100","1473507537","1490604448",",1,9,","a:1:{s:8:\"category\";a:3:{s:2:\"id\";s:1:\"1\";s:5:\"title\";s:15:\"手机摄影人\";s:5:\"alias\";s:0:\"\";}}","生在城市，长在街头 | 90后街拍","","","","","16.png","data/work/9","","","");
INSERT INTO `w0002_item` VALUES("10","2","1","1","100","1473507559","1490604356",",2,10,","a:1:{s:8:\"category\";a:3:{s:2:\"id\";s:1:\"2\";s:5:\"title\";s:12:\"潜力达人\";s:5:\"alias\";s:0:\"\";}}","“我渴望拥有黑皮肤”，日本女摄影师全裸拍摄非洲部落","","","","","15.png","data/work/10","a:5:{s:5:\"image\";a:2:{i:0;s:20:\"08aed5fc482cbba8.jpg\";i:1;s:20:\"da9cf91d765063b1.jpg\";}s:5:\"width\";a:2:{i:0;s:3:\"640\";i:1;s:3:\"640\";}s:6:\"height\";a:2:{i:0;s:3:\"426\";i:1;s:3:\"426\";}s:5:\"title\";a:2:{i:0;s:247:\"Junichi Hakoyama十分擅长拍摄高对比度黑白街头作品，但与粗旷的森山大道风格不同，他善于利用场景中的线条美和各种明暗对比，再将单个人物融入其中，使得画面拥有一种莫名的静默感。\";i:1;s:142:\"当几何线条与黑白街头摄影碰撞到一起会产生怎样的火花？日本摄影师Junichi Hakoyama用他的作品给出了答案。\";}s:7:\"summary\";a:2:{i:0;s:23:\"Photo: Junichi Hakoyama\";i:1;s:23:\"Photo: Junichi Hakoyama\";}}","","");
INSERT INTO `w0002_item` VALUES("11","4","1","1","100","1473507569","1490604332",",4,11,","a:1:{s:8:\"category\";a:3:{s:2:\"id\";s:1:\"4\";s:5:\"title\";s:12:\"印象人物\";s:5:\"alias\";s:0:\"\";}}","他把街头摄影拍成艺术片！| 80后街拍","","","","","14.png","data/work/11","a:5:{s:5:\"image\";a:3:{i:0;s:31:\"50760-13138957-DSC02230_jpg.jpg\";i:1;s:29:\"50760-13138962-look2f_jpg.jpg\";i:2;s:29:\"50760-13138960-look2a_jpg.jpg\";}s:5:\"width\";a:3:{i:0;s:4:\"1040\";i:1;s:3:\"667\";i:2;s:3:\"667\";}s:6:\"height\";a:3:{i:0;s:4:\"1300\";i:1;s:4:\"1000\";i:2;s:4:\"1000\";}s:5:\"title\";a:3:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:7:\"summary\";a:3:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}","","");
INSERT INTO `w0002_item` VALUES("12","0","4","1","100","1474108875","1474887914","","","联系邮箱","","developer.ifeiwu@qq.com","mailto:","","","data/contact/57e900e93f62e","","","");
INSERT INTO `w0002_item` VALUES("13","0","4","1","100","1474114773","1474619375","","","微信公众号","","qrcode.jpg","image","","","data/contact/57e4e7eb5d76b","","","");
INSERT INTO `w0002_item` VALUES("14","0","4","1","100","1474115500","1486797307","","","新浪微博","","http://weibo.com/2528307527/profile?topnav=1&amp;wvr=6&amp;is_all=1","url","","","data/contact/57f101e10bd9f","","","");
INSERT INTO `w0002_item` VALUES("16","0","3","1","100","1474616841","1474800863","","","“我渴望拥有黑皮肤”，日本女摄影师全裸拍摄非洲部落","7年间，85后日本摄影师，近40次探访非洲裸体部落","","","","","data/event/57e4ddf3ab5b7","","&lt;p&gt;7年间，她去了非洲近40次。&lt;br /&gt;&lt;br /&gt;她是85后的日本摄影师。原本她的生活，会和大多数的日本女孩一样，有一份稳定的工作，偶尔假期可以去旅行、度假，过着平静的生活。&lt;br /&gt;&lt;br /&gt;然而，她却在23岁那年，独自一人，背着相机，踏上了非洲土地，探访裸体部落。&amp;ldquo;小时候我还不懂得国籍和民族之分，我只是单纯地想要拥有黑皮肤和一根长矛。马赛人真的太迷人了。我小时候就想着，以后可以选择自己皮肤的颜色，但后来才被我母亲告知，我永远不可能变成一个非洲人。不过，我想我至少可以在某一天，跟随自己的内心，到那片土地上，去看看、去感受。&amp;rdquo;&lt;/p&gt;\n&lt;center&gt;日本摄影师。她在日本被称作&amp;ldquo;裸体摄影师&amp;rdquo;，不是因为她拍摄裸体，而是因为她曾为了和非洲部落的人们更好地交流和拍照，入乡随俗地脱去衣服，换上部落的服饰。她也因为非洲部落的摄影作品，受到了很多人的关注。&lt;/center&gt;\n&lt;p&gt;&lt;br /&gt;&lt;br /&gt;因为她的大胆裸体，有人开始质疑她的行为。但当她在采访中，说起自己对黑皮肤和部落生活的向往时，一切都显得顺理成章。&lt;/p&gt;","");
INSERT INTO `w0002_item` VALUES("17","0","3","1","100","1474616862","1474800909","","","香港最后一家胶片相馆，港星都是他的顾客","被拍的人带着仪式感，拍照的人用着匠人心","","","","","data/event/57e4de10f0202","","&lt;p style=&quot;text-align: center;&quot;&gt;菲林既熟悉又陌生，&lt;br /&gt;&lt;br /&gt;熟悉的是名字，陌生的是感觉，&lt;br /&gt;&lt;br /&gt;或者终有一日，它将彻底消失，&lt;br /&gt;&lt;br /&gt;但关于它的故事，&lt;br /&gt;&lt;br /&gt;将会被永远传下去，&lt;br /&gt;&lt;br /&gt;例如，有一个50年如一日，守护菲林的老人。&lt;/p&gt;","");
INSERT INTO `w0002_item` VALUES("18","0","3","1","101","1474616877","1492670354","","","90后摄影师 | 你为什么不能好好拍照？！","她们到底在想什么？从不按常理出牌！","","","","","data/event/18","","&lt;p style=&quot;text-align: center;&quot;&gt;当我们还在仰望，前辈们用镜头记录着人文纪实的大爱、风光作品的震撼、时尚摄影的前卫的时候，有一群90后的摄影师，在用她们年轻的视野和独到的审美，放肆地表达着自我。&lt;br /&gt;&lt;br /&gt;她们没有大时代的约束，发声的欲望却更加强烈。&lt;br /&gt;她们的作品很多不能用&amp;ldquo;美&amp;rdquo;去形容，却有着独特的吸引力。&lt;br /&gt;&lt;br /&gt;她们的内心世界，有着独特的力量，独属于年轻人的放肆与张狂。而这样的张狂与放肆背后，还有着更强大的力量：为年轻人发声，为弱势群体发声，为独特的每一个人发声。&lt;/p&gt;\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img class=&quot;&quot; src=&quot;http://qing.com/w0002/data/finder/1000920160613175557078_640.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;567&quot; /&gt;&lt;/p&gt;\n&lt;p style=&quot;text-align: center;&quot;&gt;http://photo.poco.cn/interview/interview_detail-upi-topic_id-22806.html&lt;/p&gt;","");
INSERT INTO `w0002_item` VALUES("19","0","3","1","100","1474616895","1474798734","","","我一直留在哈尔滨，是因为我还未拍够这里的冬天","我爱冬天，不，是迷恋。","","","","","data/event/57e4de360d97a","","&lt;p&gt;&amp;ldquo;我爱冬天，不，是迷恋，雪落在身上就化成了安逸平静，特别是哈尔滨的冬天，像萨尔瓦多，像泰罗尼亚。&amp;rdquo;&amp;mdash;&amp;mdash;高上&lt;/p&gt;","");
INSERT INTO `w0002_item` VALUES("20","0","3","1","100","1474616908","1474798484","","","他的镜头下的舞蹈，无处不是生活","高兴、盼望、憧憬、犹豫，每一种情绪都围绕着真实的生活展开。","","","","","data/event/57e4de44c42be","","&lt;p&gt;他有一种本领，能让镜头下的舞者，抛开严肃的舞蹈技巧和拘谨的舞台束缚，随心所欲地诠释着生活的点滴、表现四季的变迁、讲述城市的历史......高兴、盼望、憧憬、犹豫，每一种情绪都围绕着真实的生活展开。史迎曦镜头下的舞者，一颦一笑，表现的都不只是一个动作，似乎每一张照片都有着自己的故事。&lt;br /&gt;&lt;br /&gt;舞者，在他的镜头下，都成了最自由的灵魂。&lt;/p&gt;","");
INSERT INTO `w0002_item` VALUES("21","0","3","1","100","1474616921","1481800273","","","轻美食构建色彩绚丽的光影世界","美食的世界，永远保持在最舒服的26度。","","","","","data/event/57e4de5225e91","","&lt;p&gt;九月天转凉，南方的空气里也有了淡淡秋天的味道，但美食的世界，永远在最舒服的26度。大概，生活是有趣的，它将食物染得缤纷绚丽，而每一种绚丽，都足以构建一个小小的世界。大千美食世界，总有一款能捕获你的芳心~&lt;/p&gt;\n&lt;p&gt;这里有一位被美食冲昏了头脑的摄影师，少女心带着她东走走，西蹦蹦，把搜集来的树枝和明信片都放进镜头的画面里。她是80后美食摄影师西瓜，2015年POCO实力生活摄影师。&lt;/p&gt;","");
INSERT INTO `w0002_item` VALUES("22","0","3","1","99","1474887569","1474887667","","","无脸男的内心独角戏　专访观念摄影师J.Koo","观念摄影是一个永久的问号。","","","","","data/event/57e8ff7779749","","","");


DROP TABLE IF EXISTS `w0002_log`;
CREATE TABLE `w0002_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `state` tinyint(1) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `admin_name` varchar(20) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `type` varchar(20) DEFAULT '',
  `table` varchar(20) DEFAULT '',
  `table_id` int(11) DEFAULT '0',
  `ip` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `w0002_site`;
CREATE TABLE `w0002_site` (
  `state` tinyint(1) DEFAULT '1',
  `name` varchar(100) NOT NULL DEFAULT '',
  `value` varchar(20000) DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `w0002_site` VALUES("1","about_content","做出设计简约、亲切、让用户操作流畅的网站，这就是飞屋工作室正在做的事。飞屋的想法是帮助那些拥有创意和梦想的人，通过网站这样的渠道，让他们的想法传递到全世界。");
INSERT INTO `w0002_site` VALUES("1","about_intro","&lt;p&gt;做出设计简约、亲切、让用户操作流畅的网站，这就是飞屋工作室正在做的事。飞屋的想法是帮助那些拥有创意和梦想的人，通过网站这样的渠道，让他们的想法传递到全世界。&lt;/p&gt;\n&lt;p&gt;飞屋提供成品网站和网站建设相关的服务，团队已有8年的行业经验，在这一经验过程中，飞屋重视用设计的思维去构架网站，有别于传统从技术出发的建站模式，让设计思维为网站带来的潜在的、更深层次的影响。&lt;/p&gt;");
INSERT INTO `w0002_site` VALUES("1","about_title","关于我们");
INSERT INTO `w0002_site` VALUES("1","about_title_en","about");
INSERT INTO `w0002_site` VALUES("1","description","");
INSERT INTO `w0002_site` VALUES("1","domain","qing.com/w0002");
INSERT INTO `w0002_site` VALUES("1","favicon","");
INSERT INTO `w0002_site` VALUES("1","footer","©2013, 2016 ifeiwu.com, All rights reserved.");
INSERT INTO `w0002_site` VALUES("1","header_image_m","header_image_m.png");
INSERT INTO `w0002_site` VALUES("1","header_image_pc","header_image_pc.png");
INSERT INTO `w0002_site` VALUES("1","item_page_count","6");
INSERT INTO `w0002_site` VALUES("1","item_page_count_m","1");
INSERT INTO `w0002_site` VALUES("1","item_row_count","3");
INSERT INTO `w0002_site` VALUES("1","item_row_count_m","1");
INSERT INTO `w0002_site` VALUES("1","keywords","");
INSERT INTO `w0002_site` VALUES("1","logo","");
INSERT INTO `w0002_site` VALUES("1","site_name","设计天涯");
INSERT INTO `w0002_site` VALUES("1","title","Photo+");
INSERT INTO `w0002_site` VALUES("1","tongji_code","");
INSERT INTO `w0002_site` VALUES("1","touch_icon","");


DROP TABLE IF EXISTS `w0002_stats`;
CREATE TABLE `w0002_stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `screen` varchar(20) DEFAULT '',
  `cookie` varchar(32) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `referer` varchar(255) DEFAULT '',
  `keyword` varchar(255) DEFAULT '',
  `os` varchar(20) DEFAULT '',
  `os_version` varchar(20) DEFAULT '',
  `mobile` varchar(20) DEFAULT '',
  `browser` varchar(20) DEFAULT '',
  `browser_version` varchar(20) DEFAULT '',
  `ip` varchar(20) DEFAULT '',
  `ip_isp` varchar(20) DEFAULT '',
  `ip_country` varchar(20) DEFAULT '',
  `ip_region` varchar(20) DEFAULT '',
  `ip_area` varchar(20) DEFAULT '',
  `ip_city` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `w0002_trash`;
CREATE TABLE `w0002_trash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` tinyint(1) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `admin_name` varchar(255) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `note` varchar(255) DEFAULT '',
  `table` varchar(255) DEFAULT '',
  `data` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



