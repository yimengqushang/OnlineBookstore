/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : bookshop

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 28/05/2023 21:09:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `Username` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Cname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `City` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Address` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Zip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for bookpage
-- ----------------------------
DROP TABLE IF EXISTS `bookpage`;
CREATE TABLE `bookpage`  (
  `productId` int(8) NOT NULL COMMENT '书籍id',
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '书籍名',
  `Descn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '书籍简介',
  `bookContent` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '书籍内容',
  `firstName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '第一章标题',
  `Image` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '图片地址',
  `ListPrice` decimal(8, 2) NULL DEFAULT NULL COMMENT '价格',
  PRIMARY KEY (`productId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bookpage
-- ----------------------------
INSERT INTO `bookpage` VALUES (1, '轻声说再见', '《轻声说再见》是《100个基本》作者、日本生活美学家松浦弥太郎先生初次袒露私密情感的散文集。他以温润的笔触，书写那些在他生命中留下美好印记、给自己某项人生启示的人。', '我有一位多年好友，是位女性画家。她的年纪比我大上一轮，若依照世俗礼节来看，我尊称她为“阿姨”也不为过。但是，平常可没人这么叫她，不是因为她打扮得特别年轻，而是因为她实在是一位“很棒”的女性。\n有一天我问她：“你总是神采奕奕又元气十足，是不是平常特别留意养生秘诀呢？”\n刚好那时候，我看到女性杂志封面上，用斗大的字写着“让脸部返老还童的对策”。\n“我已经是年过五十的老太太了，其实有很多怎么也无法回避的事实。所以最重要的，是能够接受这些事实。”她说完后，低头看着手指。\n“例如，虽然化妆可以遮盖脸孔本来的样子，却隐藏不了手部跟手指的年龄。那就应该接受并承认这样的现实。”原来如此。所谓的变老，其实是无论如何也阻止不了的事，根本就没有隐瞒的必要。如此说来，我们都应该接纳逐渐老去的自己。\n“无论如何逃避，都绝对无法避免的事实”——照这么说，面对逐渐衰老的自己，唯有忍耐这一种选择了。\n无法承受衰老的人，会想尽办法恢复青春，用化妆品掩盖，甚至依赖补品，做很多徒劳无功的事。其实这样一来，反而会让衰老的事实变得更加醒目。\n', '01 “很棒”的那个人 ', 'qsszj.jpg', 34.60);
INSERT INTO `bookpage` VALUES (2, '奇迹集', '《奇迹集》系黄灿然近年来关乎生活、信仰、灵魂的秘密之作，共分五个部分：一、世界的光彩；二、现在让我们去爱街上任何一样东西；三、消逝；四、改变你自己；五、颂歌。', NULL, NULL, 'qjj.jpg', 38.30);
INSERT INTO `bookpage` VALUES (3, '纳博科夫短篇小说全集', '《纳博科夫短篇小说全集》是文学大师纳博科夫短篇小说作品在国内首次完整结篇。68则风格各异的短篇小说，由纳博科夫之子德米特里按照年代顺序编辑而成。', NULL, NULL, 'nbkf.jpg', 49.00);
INSERT INTO `bookpage` VALUES (4, '经济学入门', '读者可以此为基础来研修经济学的高级课程和其他学科，攻读学术文献，也可以凭借它来弄清经济政策和形势，做好实际工作。', NULL, NULL, 'jjxrm.jpg', 45.50);
INSERT INTO `bookpage` VALUES (5, '微观经济学', '在介绍微观经济学分析基础的同时强调真实世界的经济学问题，并将微观经济学的全新进展涵盖进来，可以帮助读者全面、系统、准确地掌握微观经济学的所有基本原理和基本方法。', NULL, NULL, 'wgjjx.jpg', 45.90);
INSERT INTO `bookpage` VALUES (6, '你的第一本投资学', '汇集了国内市面上众多投资书籍的精华，以培养财富眼光、练就赚钱本事、学会投资理财为出发点，用通俗易懂的语言系统地讲述了与老百姓密切相关的投资知识，为老百姓学习投资提供了切实可行的帮助。', NULL, NULL, 'tzx.jpg', 25.40);
INSERT INTO `bookpage` VALUES (7, '通俗《资本论》', '在金融海啸席卷全球，西方世界再一次兴起《资本论》研究热潮，各种各样的《资本论》读物成为畅销的热门图书，欧洲的这股《资本论》热，绝不是偶然的。', NULL, NULL, 'tszbl.jpg', 74.34);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `CategoryId` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Descn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Image` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`CategoryId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, '文学类', NULL, 'wx.jpg');
INSERT INTO `category` VALUES (2, '经济类', NULL, 'jj.jpg');
INSERT INTO `category` VALUES (3, 'IT类', NULL, 'it.jpg');
INSERT INTO `category` VALUES (4, '小说类', NULL, 'xs.jpg');
INSERT INTO `category` VALUES (5, '教育类', NULL, 'jy.jpg');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `ProductId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `Name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Descn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Image` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ListPrice` decimal(8, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`ProductId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 1, '轻声说再见', '《轻声说再见》是《100个基本》作者、日本生活美学家松浦弥太郎先生初次袒露私密情感的散文集。他以温润的笔触，书写那些在他生命中留下美好印记、给自己某项人生启示的人。', 'qsszj.jpg', 34.60);
INSERT INTO `product` VALUES (2, 1, '奇迹集', '《奇迹集》系黄灿然近年来关乎生活、信仰、灵魂的秘密之作，共分五个部分：一、世界的光彩；二、现在让我们去爱街上任何一样东西；三、消逝；四、改变你自己；五、颂歌。', 'qjj.jpg', 38.30);
INSERT INTO `product` VALUES (3, 1, '纳博科夫短篇小说全集', '《纳博科夫短篇小说全集》是文学大师纳博科夫短篇小说作品在国内首次完整结篇。68则风格各异的短篇小说，由纳博科夫之子德米特里按照年代顺序编辑而成。', 'nbkf.jpg', 49.00);
INSERT INTO `product` VALUES (4, 2, '经济学入门', '读者可以此为基础来研修经济学的高级课程和其他学科，攻读学术文献，也可以凭借它来弄清经济政策和形势，做好实际工作。', 'jjxrm.jpg', 45.50);
INSERT INTO `product` VALUES (5, 2, '微观经济学', '在介绍微观经济学分析基础的同时强调真实世界的经济学问题，并将微观经济学的全新进展涵盖进来，可以帮助读者全面、系统、准确地掌握微观经济学的所有基本原理和基本方法。', 'wgjjx.jpg', 45.90);
INSERT INTO `product` VALUES (6, 2, '你的第一本投资学', '汇集了国内市面上众多投资书籍的精华，以培养财富眼光、练就赚钱本事、学会投资理财为出发点，用通俗易懂的语言系统地讲述了与老百姓密切相关的投资知识，为老百姓学习投资提供了切实可行的帮助。', 'tzx.jpg', 25.40);
INSERT INTO `product` VALUES (7, 2, '通俗《资本论》', '在金融海啸席卷全球，西方世界再一次兴起《资本论》研究热潮，各种各样的《资本论》读物成为畅销的热门图书，欧洲的这股《资本论》热，绝不是偶然的。', 'tszbl.jpg', 74.34);
INSERT INTO `product` VALUES (8, 3, '云计算架构与应用', '“云计算架构通常包括四个层次:物理硬件层、虚拟化层、平台层和应用层。物理硬件层是云计算的基础,包括服务器、存储设备、网络设备等,这些硬件设备可以组成一个云计算中心或数据中心。', 'yjsjgyyy.jpg', 38.94);
INSERT INTO `product` VALUES (9, 3, 'JavaWeb程序开发进阶', '“本书从有一定Web开发基础的编程人员的角度出发，深刻地揭示了Java？Web开发的内幕。全书共12章，详细讲解了从JDBC基础到DBUtils工具，从Filter到Servlet事件监听器，以及文件上传下载、EL表达式、JSTL标签、国际化等Java？Web开发的各个方面的知识和技巧。', 'javaweb.jpg', 40.00);
INSERT INTO `product` VALUES (10, 3, 'IT职业素养', '本书从高职电子信息大类学生现状出发，根据其未来职业生涯岗位特点，结合专业特色，将对职业生涯发展有利的非技术要求凝练出来，以浅显易懂的语言、发人深思的案例以及深入浅出的道理为读者展示了IT从业者的职业道德和职业素养。', 'itzysy.jpg', 42.90);
INSERT INTO `product` VALUES (11, 4, '千只鹤', '《千只鹤》是日本作家川端康成的中篇小说，作品发表于1952年，主要讲述的是一段涉及两代人的畸恋故事，表现了爱与道德的冲突，同时对日式风物与心理的刻画也十分细腻。', 'qzh.jpg', 22.10);
INSERT INTO `product` VALUES (12, 4, '正直', '《正直》是2015年12月北京联合出版公司出版的图书，[日]松浦弥太郎 著，陶芸 译。本书作者分享自己半生心得，28条人生感悟探讨如何过好这一生', 'zz.jpg', 19.90);
INSERT INTO `product` VALUES (13, 4, '灵魂只能独行', '哲学家、散文家周国平亲自编选，收录历年散文中最有价值的精华篇目，影响数代中国年轻人的人生智慧，尽在其中。', 'lhzndx.jpg', 22.50);
INSERT INTO `product` VALUES (14, 4, '寺山修司少女诗集', '《寺山修司少女诗集》是寺山修司的经典诗作集。全书分为九个篇章，分别是《海》《我作的童谣》《猫》《我是男孩时》《恶魔的童谣》《人偶游戏》《爱》《花诗集》《时而如没有母亲的孩子》。', 'ssxssnsj.jpg', 39.90);
INSERT INTO `product` VALUES (15, 4, '恋物物语', '《恋物物语》是日本生活美学家松浦弥太郎的作品，如果物品会说话，它会讲述怎样的故事？恋物，恋的其实是物品中每一份珍重而独特的记忆。', 'lwwy.jpg', 37.60);
INSERT INTO `product` VALUES (16, 4, '万物有时', '本书完备地收录了汪曾祺写草木虫鱼鸟兽的系列散文。汪曾祺一生喜爱花鸟虫鱼，童年时代家里的小花园更是他一生的精神故园，一朵花开的姿态、一只蟋蟀或者蜻蜓……常常使他惊奇感动。', 'wwys.jpg', 24.90);
INSERT INTO `product` VALUES (17, 4, '自在的旅行', '《自在的旅行》是松浦弥太郎对其生活哲学的亲身诠释。不事先规划旅程，不上网查找信息，而是背起背包随性漫步，享受走路、观看、聆听、感受、邂逅、观察的轻松心态。', 'zzdlx.jpg', 35.90);
INSERT INTO `product` VALUES (18, 4, '我必须宽容', '诗集《我必须宽容》收录林江合初中三年的作品，归集为四个篇章，诗性记录一位少年诗人十二岁后至十五岁前成长过程里对过往的感悟、对当下的思考和对未来的感慨。', 'wbxkr.jpg', 25.20);
INSERT INTO `product` VALUES (19, 5, '教育学', '《教育学》是1930年佛学书局出版的图书。教育学是一门研究教育现象及其规律的社会科学。它广泛存在于人类生活中。通过对教育现象、教育问题的研究来揭示教育的一般规律。', 'jyx.jpg', 36.90);
INSERT INTO `product` VALUES (20, 5, '微教育', '这是一本为孩子写的书，给父母看的书。成为一个孩子的父亲母亲，相伴着快乐与幸福的同时，还有着责任。陪伴孩子最长，影响孩子最大的永远是父母。', 'wjy.jpg', 45.60);
INSERT INTO `product` VALUES (21, 5, '发现孩子', '《发现孩子》――寻求新时代下了解孩子、关爱孩子的新途径。蒙台梭利博士认为，每个孩子都需要去观察，对外界做出反应，去学习，并集中注意力，甚至需要让他们独处。', 'fxhz.jpg', 50.00);
INSERT INTO `product` VALUES (22, 1, '百年孤独', '作品描写了布恩迪亚家族七代人的传奇故事，以及加勒比海沿岸小镇马孔多的百年兴衰，反映了拉丁美洲一个世纪以来风云变幻的历史。作品融入神话传说、民间故事、宗教典故等神秘因素，巧妙地糅合了现实与虚幻，展现出一个瑰丽的想象世界，成为20世纪重要的经典文学巨著之一。', 'bngd.jpg', 46.90);
INSERT INTO `product` VALUES (23, 1, '悲惨世界', '《悲惨世界》是由法国作家维克多·雨果在1862年发表的一部长篇小说，其内容涵盖了拿破仑战争和之后的十几年的时间。故事的主线围绕主人公土伦苦刑犯冉·阿让（Jean Valjean）的个人经历，融进了法国的历史、革命、战争、道德哲学、法律、正义、宗教信仰。该作多次被改编演绎成影视作品。', 'bcsj.jpg', 47.80);
INSERT INTO `product` VALUES (24, 4, '老人与海', '该作围绕一位老年古巴渔夫，与一条巨大的马林鱼在离岸很远的湾流中搏斗而展开故事的讲述。尽管海明威笔下的老人是悲剧性的，但他身上却有着尼采“超人”的品质，泰然自若地接受失败，沉着勇敢地面对死亡，这些“硬汉子”体现了海明威的人生哲学和道德理想，即人类不向命运低头，永不服输的斗士精神和积极向上的乐观人生态度。', 'lryh.jpg', 23.90);
INSERT INTO `product` VALUES (25, 4, '挪威的森林', '“我们”在她的葬礼上用吉他弹这首歌，表示对她的怀念和对社会的不满与抗议。这本书表达了青少年面对青春期的孤独困惑以及面对成长的无奈，以及年轻人在社会压力下无法摆脱的生存痛苦，这种生命的悲哀与无力感也成为村上春树作品中重要的主题之一。', 'nwsl.jpg', 26.80);
INSERT INTO `product` VALUES (26, 4, '围城', '《围城》是钱钟书所著的长篇小说，是中国现代文学史上一部风格独特的讽刺小说。被誉为“新儒林外史”。第一版于1947年由上海晨光出版公司出版。故事主要写抗战初期知识分子的群像。', 'wc.jpg', 45.00);
INSERT INTO `product` VALUES (27, 4, '狂人日记', '《狂人日记：鲁迅小说全集》收录《呐喊》《彷徨》和《故事新编》中的全部小说，共计33篇。这些小说多描写底层社会普通人的悲剧，鲁迅以他如匕首般犀利的文笔批判着“麻木的国人灵魂”，希望藉此警醒世人。鲁迅小说的主题多是反封建、反礼教、反传统、反迷信，善于创造典型形象，讽刺人物的阴暗面，故事多以故乡为背景。小说主人公阿Q、祥林嫂、孔乙己、闰土等在中国众所周知。', 'krrj.jpg', 35.80);
INSERT INTO `product` VALUES (28, 4, '变色龙', '　全书精选18篇契诃夫小说代表作，囊括《变色龙》《套中人》《一个官员的死亡》等名篇。\r\n\r\n　　见风使舵的警官；保守顽固的教师；胆小怕事的官员……契诃夫的每一篇小说，就像一个微型世界。读契诃夫，就是读我们自己的生活。', 'bsl.jpg', 16.40);
INSERT INTO `product` VALUES (29, 4, '欧·亨利短篇小说集', '《欧．亨利短篇小说集》主人公多是小职员、警察、流浪汉和贫穷艺术家之类的小人物，但同时又是恩爱的夫妻、守信的友人、舍己为人的平民英雄等。小说构思精致机巧，情节张弛有度，结局往往出人意料，整体风格乐观诙谐，行文间充满机智。', 'ohl.jpg', 34.00);
INSERT INTO `product` VALUES (30, 4, '活着', '《活着》是当代作家余华的代表作，讲述了一个人历尽世间沧桑和磨难的一生，亦将中国大半个世纪的社会变迁凝缩其间。《活着》还讲述了眼泪的宽广和丰富；讲述了绝望的不存在；讲述了人是为了活着本身而活着的，而不是为了活着之外的任何事物而活着。', 'hz.jpg', 31.00);

SET FOREIGN_KEY_CHECKS = 1;
