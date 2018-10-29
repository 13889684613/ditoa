/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : ditoa

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2018-10-26 18:20:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dit_appendsignapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_appendsignapply`;
CREATE TABLE `dit_appendsignapply` (
  `appendSignId` int(11) NOT NULL AUTO_INCREMENT,
  `applyUsrId` int(11) DEFAULT '0',
  `appendTime` datetime DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` tinyint(1) DEFAULT '0' COMMENT '0未审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`appendSignId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_appendsignapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_appendsignapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_appendsignapply_check`;
CREATE TABLE `dit_appendsignapply_check` (
  `appendSignCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `appendSignApplyId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0' COMMENT '1已批准 2已拒绝 3作废',
  `remark` varchar(50) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`appendSignCheckId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_appendsignapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_businesstravelapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_businesstravelapply`;
CREATE TABLE `dit_businesstravelapply` (
  `btApplyId` int(11) NOT NULL AUTO_INCREMENT,
  `applyUsrId` int(11) DEFAULT '0',
  `beginDate` date DEFAULT NULL,
  `overDate` date DEFAULT NULL,
  `dayNumber` int(11) DEFAULT '0',
  `trip` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `receiverUsr` int(11) DEFAULT '0',
  `remark` varchar(100) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` tinyint(1) DEFAULT '0' COMMENT '0未审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`btApplyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_businesstravelapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_businesstravelapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_businesstravelapply_check`;
CREATE TABLE `dit_businesstravelapply_check` (
  `btCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `btApplyId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0' COMMENT '1已批准 2已拒绝 3作废',
  `remark` varchar(50) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`btCheckId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_businesstravelapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_car
-- ----------------------------
DROP TABLE IF EXISTS `dit_car`;
CREATE TABLE `dit_car` (
  `carId` int(11) NOT NULL AUTO_INCREMENT,
  `ownerNature` tinyint(1) DEFAULT '0' COMMENT '1个人 2企业',
  `ownerName` varchar(20) DEFAULT NULL,
  `companyId` int(11) DEFAULT '0',
  `idNumber` varchar(20) DEFAULT NULL,
  `orgNumber` varchar(50) DEFAULT NULL,
  `buyDate` date DEFAULT NULL,
  `yearCheckDate` date DEFAULT NULL,
  `cerDate` date DEFAULT NULL,
  `use` tinyint(1) DEFAULT '0' COMMENT '1办公车辆 2货车',
  `registerNumber` varchar(50) DEFAULT NULL,
  `vin` varchar(50) DEFAULT NULL,
  `plateNumber` varchar(10) DEFAULT NULL,
  `engineNumber` varchar(50) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `drivingLicensePhoto` varchar(50) DEFAULT NULL,
  `place` tinyint(1) DEFAULT '0' COMMENT '1国产 2进口',
  `fuelCategory` tinyint(1) DEFAULT '0' COMMENT '1汽油 2柴油 3煤油',
  `driver` int(11) DEFAULT '0',
  `insuranceDate` date DEFAULT NULL,
  `insuranceContact` varchar(10) DEFAULT NULL,
  `insuranceTel` varchar(30) DEFAULT NULL,
  `useOffice` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0' COMMENT '1正常 2报废',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`carId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_car
-- ----------------------------

-- ----------------------------
-- Table structure for dit_carfee
-- ----------------------------
DROP TABLE IF EXISTS `dit_carfee`;
CREATE TABLE `dit_carfee` (
  `feeId` int(11) NOT NULL AUTO_INCREMENT,
  `carReapirId` int(11) DEFAULT '0',
  `carId` int(11) DEFAULT '0',
  `workHours` decimal(10,2) DEFAULT '0.00',
  `repairFees` decimal(10,2) DEFAULT '0.00',
  `faxFee` decimal(10,2) DEFAULT '0.00',
  `totalFee` decimal(10,2) DEFAULT '0.00',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`feeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_carfee
-- ----------------------------

-- ----------------------------
-- Table structure for dit_carfee_detail
-- ----------------------------
DROP TABLE IF EXISTS `dit_carfee_detail`;
CREATE TABLE `dit_carfee_detail` (
  `feeDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `feeId` int(11) DEFAULT '0',
  `item` varchar(50) DEFAULT NULL,
  `number` tinyint(4) DEFAULT '0',
  `repairFee` decimal(10,2) DEFAULT NULL,
  `workHours` decimal(10,2) DEFAULT '0.00',
  `workHourFee` decimal(10,2) DEFAULT '0.00',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`feeDetailId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_carfee_detail
-- ----------------------------

-- ----------------------------
-- Table structure for dit_carrepairapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_carrepairapply`;
CREATE TABLE `dit_carrepairapply` (
  `repairApplyId` int(11) NOT NULL AUTO_INCREMENT,
  `applyUsrId` int(11) DEFAULT '0',
  `carId` int(11) DEFAULT '0',
  `repairDepot` tinyint(1) DEFAULT '0' COMMENT '1世华 2开联 3明祥 4广泰 5宇丰 6骏之安 7其他 ',
  `budget` decimal(10,2) DEFAULT '0.00',
  `category` tinyint(1) DEFAULT '0' COMMENT '1保养 2维修 3其他',
  `compensate` tinyint(1) DEFAULT '0' COMMENT '1有 0无',
  `compensateAttach` varchar(50) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` smallint(1) DEFAULT '0' COMMENT '0待审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`repairApplyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_carrepairapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_carrepairapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_carrepairapply_check`;
CREATE TABLE `dit_carrepairapply_check` (
  `carRepairCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `carRepairApplyId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0' COMMENT '1已批准 2已拒绝 3作废',
  `remark` varchar(50) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`carRepairCheckId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_carrepairapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_car_kilometre
-- ----------------------------
DROP TABLE IF EXISTS `dit_car_kilometre`;
CREATE TABLE `dit_car_kilometre` (
  `kilometreId` int(11) NOT NULL AUTO_INCREMENT,
  `carId` int(11) DEFAULT '0',
  `dataDate` date DEFAULT NULL,
  `kilometre` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`kilometreId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_car_kilometre
-- ----------------------------

-- ----------------------------
-- Table structure for dit_car_oilfee
-- ----------------------------
DROP TABLE IF EXISTS `dit_car_oilfee`;
CREATE TABLE `dit_car_oilfee` (
  `oilId` int(11) NOT NULL AUTO_INCREMENT,
  `carId` int(11) DEFAULT '0',
  `oilFee` decimal(10,2) DEFAULT '0.00',
  `rise` tinyint(4) DEFAULT '0',
  `dataDate` date DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  `createUsr` int(11) DEFAULT '0',
  PRIMARY KEY (`oilId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_car_oilfee
-- ----------------------------

-- ----------------------------
-- Table structure for dit_certificate
-- ----------------------------
DROP TABLE IF EXISTS `dit_certificate`;
CREATE TABLE `dit_certificate` (
  `cerId` int(11) NOT NULL AUTO_INCREMENT,
  `companyId` int(11) DEFAULT '0',
  `cerName` varchar(50) DEFAULT NULL,
  `cerImg` varchar(50) DEFAULT NULL,
  `overDate` date DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`cerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_certificate
-- ----------------------------

-- ----------------------------
-- Table structure for dit_checkprocess
-- ----------------------------
DROP TABLE IF EXISTS `dit_checkprocess`;
CREATE TABLE `dit_checkprocess` (
  `checkProcessId` int(11) NOT NULL AUTO_INCREMENT,
  `checkCategory` tinyint(1) DEFAULT '0' COMMENT '1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,离职 8,邮箱申请',
  `officeId` int(11) DEFAULT '0',
  `groupId` int(11) DEFAULT '0',
  `beginRole` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`checkProcessId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_checkprocess
-- ----------------------------

-- ----------------------------
-- Table structure for dit_checkprocess_detail
-- ----------------------------
DROP TABLE IF EXISTS `dit_checkprocess_detail`;
CREATE TABLE `dit_checkprocess_detail` (
  `cpDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `checkProcessId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `officeId` int(11) DEFAULT '0',
  `groupId` int(11) DEFAULT '0',
  `roleId` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`cpDetailId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_checkprocess_detail
-- ----------------------------

-- ----------------------------
-- Table structure for dit_checkrole
-- ----------------------------
DROP TABLE IF EXISTS `dit_checkrole`;
CREATE TABLE `dit_checkrole` (
  `checkRoleId` int(11) NOT NULL AUTO_INCREMENT,
  `checkRoleName` varchar(50) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`checkRoleId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_checkrole
-- ----------------------------
INSERT INTO `dit_checkrole` VALUES ('1', '11111', '0', '2018-10-25 14:33:59', '2018-10-25 16:26:25');
INSERT INTO `dit_checkrole` VALUES ('3', '2222', '0', '2018-10-25 16:26:06', null);

-- ----------------------------
-- Table structure for dit_company
-- ----------------------------
DROP TABLE IF EXISTS `dit_company`;
CREATE TABLE `dit_company` (
  `companyId` int(11) NOT NULL AUTO_INCREMENT,
  `cnName` varchar(60) DEFAULT NULL,
  `enName` varchar(100) DEFAULT NULL,
  `cnAddress` varchar(60) DEFAULT NULL,
  `enAddress` varchar(100) DEFAULT NULL,
  `cnOfficeAddress` varchar(60) DEFAULT NULL,
  `enOfficeAddress` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `zipCode` varchar(50) DEFAULT NULL,
  `cnBank` varchar(50) DEFAULT NULL,
  `enBank` varchar(100) DEFAULT NULL,
  `cnBankAddress` varchar(60) DEFAULT NULL,
  `enBankAddress` varchar(100) DEFAULT NULL,
  `bankAccount` varchar(50) DEFAULT NULL,
  `yenBank` varchar(50) DEFAULT NULL,
  `yenEnBank` varchar(100) DEFAULT NULL,
  `yenBankAddress` varchar(60) DEFAULT NULL,
  `yenEnBankAddress` varchar(100) DEFAULT NULL,
  `yenBankAccount` varchar(50) DEFAULT NULL,
  `yenSwiftNo` varchar(50) DEFAULT NULL,
  `dollarBank` varchar(50) DEFAULT NULL,
  `dollarEnBank` varchar(100) DEFAULT NULL,
  `dollarBankAddress` varchar(60) DEFAULT NULL,
  `dollarEnBankAddress` varchar(100) DEFAULT NULL,
  `dollarBankAccount` varchar(50) DEFAULT NULL,
  `dollarSwiftNo` varchar(50) DEFAULT NULL,
  `business` varchar(500) DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_company
-- ----------------------------

-- ----------------------------
-- Table structure for dit_company_other
-- ----------------------------
DROP TABLE IF EXISTS `dit_company_other`;
CREATE TABLE `dit_company_other` (
  `otherId` int(11) NOT NULL AUTO_INCREMENT,
  `companyId` int(11) DEFAULT '0',
  `otherName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `otherContent` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`otherId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_company_other
-- ----------------------------

-- ----------------------------
-- Table structure for dit_default_checkprocess
-- ----------------------------
DROP TABLE IF EXISTS `dit_default_checkprocess`;
CREATE TABLE `dit_default_checkprocess` (
  `defaultCheckProcessId` int(11) NOT NULL AUTO_INCREMENT,
  `checkCategory` tinyint(1) DEFAULT '0' COMMENT '1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,离职 8,邮箱申请',
  `beginRole` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`defaultCheckProcessId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_default_checkprocess
-- ----------------------------

-- ----------------------------
-- Table structure for dit_default_checkprocess_detail
-- ----------------------------
DROP TABLE IF EXISTS `dit_default_checkprocess_detail`;
CREATE TABLE `dit_default_checkprocess_detail` (
  `defaultCpDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `checkProcessId` int(11) DEFAULT '0',
  `checkLevel` int(11) DEFAULT '0',
  `roleId` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`defaultCpDetailId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_default_checkprocess_detail
-- ----------------------------

-- ----------------------------
-- Table structure for dit_fixasset_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_fixasset_check`;
CREATE TABLE `dit_fixasset_check` (
  `checkId` int(11) NOT NULL AUTO_INCREMENT,
  `otApplyId` int(11) DEFAULT '0',
  `remark` varchar(100) DEFAULT NULL,
  `checkNumber` int(11) DEFAULT '0',
  `enterNumber` int(11) DEFAULT '0',
  `checkTime` datetime DEFAULT NULL,
  `checkUsr` int(11) DEFAULT '0',
  `isEnter` tinyint(1) DEFAULT '0' COMMENT '1已确认 0未确认',
  `enterUsr` int(11) DEFAULT '0',
  `enterTime` datetime DEFAULT NULL,
  PRIMARY KEY (`checkId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_fixasset_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_group
-- ----------------------------
DROP TABLE IF EXISTS `dit_group`;
CREATE TABLE `dit_group` (
  `groupId` int(11) NOT NULL AUTO_INCREMENT,
  `officeId` int(11) DEFAULT '0',
  `groupName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `workWeek` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `workBeginTime` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `workOverTime` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `workCoordinate` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `workRange` tinyint(4) DEFAULT '0',
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`groupId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_group
-- ----------------------------

-- ----------------------------
-- Table structure for dit_leaveapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_leaveapply`;
CREATE TABLE `dit_leaveapply` (
  `leaveId` int(11) NOT NULL AUTO_INCREMENT,
  `applyUsrId` int(11) DEFAULT '0',
  `typeId` int(11) DEFAULT '0',
  `duration` varchar(10) DEFAULT NULL,
  `receiverUsr` int(11) DEFAULT '0',
  `attach` varchar(50) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` tinyint(1) DEFAULT '0' COMMENT '0未审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`leaveId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_leaveapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_leaveapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_leaveapply_check`;
CREATE TABLE `dit_leaveapply_check` (
  `leaveCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `leaveApplyId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0' COMMENT '1已批准 2已拒绝 3作废',
  `remark` varchar(50) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`leaveCheckId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_leaveapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_leaveapply_time
-- ----------------------------
DROP TABLE IF EXISTS `dit_leaveapply_time`;
CREATE TABLE `dit_leaveapply_time` (
  `timeId` int(11) NOT NULL AUTO_INCREMENT,
  `leaveApplyId` int(11) DEFAULT '0',
  `beginDate` date DEFAULT NULL,
  `overDate` date DEFAULT NULL,
  `beginTime` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `overTime` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  PRIMARY KEY (`timeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_leaveapply_time
-- ----------------------------

-- ----------------------------
-- Table structure for dit_leavetype
-- ----------------------------
DROP TABLE IF EXISTS `dit_leavetype`;
CREATE TABLE `dit_leavetype` (
  `leaveTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `typeName` varchar(50) DEFAULT NULL,
  `dayNumber` tinyint(4) DEFAULT '0',
  `remark` varchar(100) DEFAULT NULL,
  `annualLeave` tinyint(1) DEFAULT '0',
  `isSameSetting` tinyint(1) DEFAULT '0',
  `isAttach` tinyint(1) DEFAULT '0' COMMENT '是否需要上传附件 0不需要 1需要',
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`leaveTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_leavetype
-- ----------------------------
INSERT INTO `dit_leavetype` VALUES ('2', '年假', '10', '年假年假', '1', '0', '0', '0', '2018-10-25 19:11:54');

-- ----------------------------
-- Table structure for dit_mailapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_mailapply`;
CREATE TABLE `dit_mailapply` (
  `mailApplyId` int(11) NOT NULL AUTO_INCREMENT,
  `applyUsrId` int(11) DEFAULT '0',
  `mailName` varchar(50) DEFAULT NULL,
  `initialPassword` varchar(50) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` smallint(1) DEFAULT '0' COMMENT '0待审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`mailApplyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_mailapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_mailapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_mailapply_check`;
CREATE TABLE `dit_mailapply_check` (
  `mailCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `mailApplyId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0' COMMENT '1已批准 2已拒绝 3作废',
  `remark` varchar(50) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`mailCheckId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_mailapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_message
-- ----------------------------
DROP TABLE IF EXISTS `dit_message`;
CREATE TABLE `dit_message` (
  `messageId` int(11) NOT NULL AUTO_INCREMENT,
  `category` tinyint(1) DEFAULT '0' COMMENT '1请假 2加班 3出差 4车辆维修 5办公备品 6入职 7离职 8邮箱申请 9证件到期 10企业动态 11企业活动',
  `content` varchar(100) DEFAULT NULL,
  `receiverRole` tinyint(1) DEFAULT '0' COMMENT '接收角色 0全部 1企业 2部门 3个人',
  `receiverOffice` varchar(50) DEFAULT NULL,
  `receiverGroup` varchar(50) DEFAULT NULL,
  `receiverUsr` varchar(50) DEFAULT NULL,
  `messageTime` datetime DEFAULT NULL,
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_message
-- ----------------------------

-- ----------------------------
-- Table structure for dit_message_read
-- ----------------------------
DROP TABLE IF EXISTS `dit_message_read`;
CREATE TABLE `dit_message_read` (
  `readId` int(11) NOT NULL AUTO_INCREMENT,
  `messageId` int(11) DEFAULT '0',
  `usrId` int(11) DEFAULT '0',
  `readTime` datetime DEFAULT NULL,
  PRIMARY KEY (`readId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_message_read
-- ----------------------------

-- ----------------------------
-- Table structure for dit_news
-- ----------------------------
DROP TABLE IF EXISTS `dit_news`;
CREATE TABLE `dit_news` (
  `newsId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `content` text,
  `newsTime` datetime DEFAULT NULL,
  `createUsr` int(11) DEFAULT '0',
  `click` int(11) DEFAULT '0',
  `toOffice` int(11) DEFAULT '0',
  `toGroup` int(11) DEFAULT '0',
  `isFeedback` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`newsId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_news
-- ----------------------------

-- ----------------------------
-- Table structure for dit_news_feedback
-- ----------------------------
DROP TABLE IF EXISTS `dit_news_feedback`;
CREATE TABLE `dit_news_feedback` (
  `feedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `newsId` int(11) DEFAULT '0',
  `feedbackUsr` int(11) DEFAULT '0',
  `isJoin` tinyint(1) DEFAULT '0' COMMENT '0不参与 1参与',
  `reason` varchar(100) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `feedbackTime` datetime DEFAULT NULL,
  PRIMARY KEY (`feedbackId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_news_feedback
-- ----------------------------

-- ----------------------------
-- Table structure for dit_news_feedbackitem
-- ----------------------------
DROP TABLE IF EXISTS `dit_news_feedbackitem`;
CREATE TABLE `dit_news_feedbackitem` (
  `itemId` int(11) NOT NULL AUTO_INCREMENT,
  `newsId` int(11) DEFAULT '0',
  `title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `isMust` tinyint(1) DEFAULT '0',
  `rank` int(11) DEFAULT '0',
  PRIMARY KEY (`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_news_feedbackitem
-- ----------------------------

-- ----------------------------
-- Table structure for dit_news_feedback_detail
-- ----------------------------
DROP TABLE IF EXISTS `dit_news_feedback_detail`;
CREATE TABLE `dit_news_feedback_detail` (
  `detailId` int(11) NOT NULL AUTO_INCREMENT,
  `feedbackId` int(11) DEFAULT '0',
  `itemId` int(11) DEFAULT '0',
  `content` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`detailId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_news_feedback_detail
-- ----------------------------

-- ----------------------------
-- Table structure for dit_office
-- ----------------------------
DROP TABLE IF EXISTS `dit_office`;
CREATE TABLE `dit_office` (
  `officeId` int(11) NOT NULL AUTO_INCREMENT,
  `officeCode` varchar(50) DEFAULT NULL,
  `officeName` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `function` varchar(500) DEFAULT NULL,
  `workWeek` varchar(50) DEFAULT NULL,
  `workBeginTime` varchar(10) DEFAULT NULL,
  `workOverTime` varchar(10) DEFAULT NULL,
  `workCoordinate` varchar(50) DEFAULT NULL,
  `workRange` tinyint(4) DEFAULT '0',
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`officeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_office
-- ----------------------------

-- ----------------------------
-- Table structure for dit_officetoolapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetoolapply`;
CREATE TABLE `dit_officetoolapply` (
  `otApplyId` int(11) NOT NULL AUTO_INCREMENT,
  `category` tinyint(1) DEFAULT '0',
  `officeId` int(11) DEFAULT '0',
  `applyUsrId` int(11) DEFAULT '0',
  `applyNo` varchar(50) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` smallint(1) DEFAULT '0' COMMENT '0待审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`otApplyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_officetoolapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_officetoolapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetoolapply_check`;
CREATE TABLE `dit_officetoolapply_check` (
  `checkId` int(11) NOT NULL AUTO_INCREMENT,
  `otApplyId` int(11) DEFAULT '0',
  `detailId` int(11) DEFAULT '0',
  `result` tinyint(1) DEFAULT '0',
  `remark` varchar(100) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  `checkNumber` int(11) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  PRIMARY KEY (`checkId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_officetoolapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_officetoolapply_detail
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetoolapply_detail`;
CREATE TABLE `dit_officetoolapply_detail` (
  `detailId` int(11) NOT NULL AUTO_INCREMENT,
  `otApplyId` int(11) DEFAULT '0',
  `toolCode` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `categoryId` int(11) DEFAULT '0',
  `nameId` int(11) DEFAULT '0',
  `model` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `number` tinyint(4) DEFAULT '0',
  `unit` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  `remark` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `receiveAmount` int(11) DEFAULT '0',
  `from` tinyint(1) DEFAULT '0',
  `fromOffice` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`detailId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_officetoolapply_detail
-- ----------------------------

-- ----------------------------
-- Table structure for dit_officetoolapply_use
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetoolapply_use`;
CREATE TABLE `dit_officetoolapply_use` (
  `useId` int(11) NOT NULL AUTO_INCREMENT,
  `otApplyId` int(11) DEFAULT '0',
  `detailId` int(11) DEFAULT '0',
  `useUsr` int(11) DEFAULT '0',
  `useAmount` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `createUsr` int(11) DEFAULT '0',
  PRIMARY KEY (`useId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_officetoolapply_use
-- ----------------------------

-- ----------------------------
-- Table structure for dit_officetool_category
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetool_category`;
CREATE TABLE `dit_officetool_category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryCode` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `categoryName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_officetool_category
-- ----------------------------
INSERT INTO `dit_officetool_category` VALUES ('1', '001', '电脑', '1', '2018-10-25 19:46:05', '2018-10-25 19:48:12');

-- ----------------------------
-- Table structure for dit_officetool_name
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetool_name`;
CREATE TABLE `dit_officetool_name` (
  `nameId` int(11) NOT NULL AUTO_INCREMENT,
  `toolName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `isFixedAssets` tinyint(1) DEFAULT '0',
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`nameId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_officetool_name
-- ----------------------------

-- ----------------------------
-- Table structure for dit_officetool_transfer
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetool_transfer`;
CREATE TABLE `dit_officetool_transfer` (
  `transferId` int(11) NOT NULL AUTO_INCREMENT,
  `otApplyId` int(11) DEFAULT '0',
  `detailId` int(11) DEFAULT '0',
  `fromOffice` int(11) DEFAULT '0',
  `toOffice` int(11) DEFAULT '0',
  `checkStatus` tinyint(1) DEFAULT '0',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`transferId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_officetool_transfer
-- ----------------------------

-- ----------------------------
-- Table structure for dit_officetool_transfer_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_officetool_transfer_check`;
CREATE TABLE `dit_officetool_transfer_check` (
  `checkId` int(11) NOT NULL AUTO_INCREMENT,
  `transferId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0',
  `remark` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`checkId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_officetool_transfer_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_office_other
-- ----------------------------
DROP TABLE IF EXISTS `dit_office_other`;
CREATE TABLE `dit_office_other` (
  `otherId` int(11) NOT NULL AUTO_INCREMENT,
  `officeId` int(11) DEFAULT '0',
  `otherName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `otherContent` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`otherId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_office_other
-- ----------------------------

-- ----------------------------
-- Table structure for dit_overtimeapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_overtimeapply`;
CREATE TABLE `dit_overtimeapply` (
  `overtimeId` int(11) NOT NULL AUTO_INCREMENT,
  `applyUsrId` int(11) DEFAULT '0',
  `beginTime` datetime DEFAULT NULL,
  `overTime` datetime DEFAULT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` tinyint(1) DEFAULT '0' COMMENT '0未审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`overtimeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_overtimeapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_overtimeapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_overtimeapply_check`;
CREATE TABLE `dit_overtimeapply_check` (
  `overtimeCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `overtimeApplyId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0' COMMENT '1已批准 2已拒绝 3作废',
  `remark` varchar(50) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`overtimeCheckId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_overtimeapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_post
-- ----------------------------
DROP TABLE IF EXISTS `dit_post`;
CREATE TABLE `dit_post` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `postName` varchar(50) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_post
-- ----------------------------
INSERT INTO `dit_post` VALUES ('3', '11111', '0', '2018-10-25 16:23:31', '2018-10-25 16:24:14');
INSERT INTO `dit_post` VALUES ('4', '2222', '0', '2018-10-25 16:24:04', null);

-- ----------------------------
-- Table structure for dit_quitapply
-- ----------------------------
DROP TABLE IF EXISTS `dit_quitapply`;
CREATE TABLE `dit_quitapply` (
  `quitApplyId` int(11) NOT NULL AUTO_INCREMENT,
  `applyUsrId` int(11) DEFAULT '0',
  `quitDate` date DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `applyTime` datetime DEFAULT NULL,
  `checkStatus` tinyint(1) DEFAULT '0' COMMENT '0待审批 1审批中 2已批准 3已拒绝 4作废',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`quitApplyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_quitapply
-- ----------------------------

-- ----------------------------
-- Table structure for dit_quitapply_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_quitapply_check`;
CREATE TABLE `dit_quitapply_check` (
  `qaCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `quitApplyId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `checkResult` tinyint(1) DEFAULT '0' COMMENT '1已批准 2已拒绝 3作废',
  `remark` varchar(50) DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`qaCheckId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_quitapply_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_rules
-- ----------------------------
DROP TABLE IF EXISTS `dit_rules`;
CREATE TABLE `dit_rules` (
  `rulesId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) DEFAULT NULL,
  `attach` varchar(50) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`rulesId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_rules
-- ----------------------------

-- ----------------------------
-- Table structure for dit_sign
-- ----------------------------
DROP TABLE IF EXISTS `dit_sign`;
CREATE TABLE `dit_sign` (
  `signId` int(11) NOT NULL AUTO_INCREMENT,
  `category` tinyint(1) DEFAULT '0' COMMENT '1上班 2下班',
  `timeStage` tinyint(1) DEFAULT '0',
  `signUsr` int(11) DEFAULT '0',
  `signTime` datetime DEFAULT NULL,
  `checkTime` varchar(5) DEFAULT NULL,
  `signAddress` varchar(60) DEFAULT NULL,
  `signCoord` varchar(50) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `applyId` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态 1正常 2迟到 3早退 4加班 5补卡',
  PRIMARY KEY (`signId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_sign
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff`;
CREATE TABLE `dit_staff` (
  `staffId` int(11) NOT NULL AUTO_INCREMENT,
  `companyId` int(11) DEFAULT '0',
  `officeId` int(11) DEFAULT '0',
  `groupId` int(11) DEFAULT '0',
  `sysRoleId` int(11) DEFAULT '0',
  `checkRoleId` int(11) DEFAULT '0',
  `staffNo` varchar(50) DEFAULT NULL,
  `loginPwd` varchar(32) DEFAULT NULL,
  `staffName` varchar(20) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT '0' COMMENT '1,男 2,女',
  `idNumber` varchar(20) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `lunarDate` varchar(50) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `blood` tinyint(1) DEFAULT '0' COMMENT '1A型 2B型 3AB型 4O型',
  `politicalType` tinyint(1) DEFAULT '0' COMMENT '1中共党员 2共青团员 3群众',
  `photo` varchar(50) DEFAULT NULL,
  `nation` varchar(20) DEFAULT NULL,
  `maritalStatus` tinyint(1) DEFAULT '0' COMMENT '1未婚 2已婚 3离婚 4丧偶',
  `school` varchar(50) DEFAULT NULL,
  `education` tinyint(1) DEFAULT '0' COMMENT '1小学 2初中 3高中 4中专 5职高 6大专 7本科 8博士 9硕士 10留学',
  `major` varchar(50) DEFAULT NULL,
  `registerAddress` varchar(50) DEFAULT NULL,
  `registerNature` tinyint(1) DEFAULT '0' COMMENT '1农业户口 2非农业户口',
  `tel` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `extensionNumber` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `joinDate` date DEFAULT NULL,
  `interviewer` int(11) DEFAULT '0',
  `postId` int(11) DEFAULT '0',
  `insuranceNo` varchar(50) DEFAULT NULL,
  `insuranceStatus` tinyint(1) DEFAULT '0' COMMENT '是否托管 0否 1是',
  `insuranceOverDate` varchar(20) DEFAULT NULL,
  `fundNo` varchar(50) DEFAULT NULL,
  `fundStatus` tinyint(1) DEFAULT NULL COMMENT '是否托管 0否 1是',
  `fundOverDate` varchar(20) DEFAULT NULL,
  `firstWorkDate` date DEFAULT NULL,
  `quitDate` date DEFAULT NULL,
  `background` varchar(100) DEFAULT NULL,
  `expectedSalary` decimal(10,2) DEFAULT '0.00',
  `trySalary` decimal(10,2) DEFAULT '0.00',
  `tryBeginDate` date DEFAULT NULL,
  `tryOverDate` date DEFAULT NULL,
  `contractBeginDate` date DEFAULT NULL,
  `contractOverDate` date DEFAULT NULL,
  `quitCategory` tinyint(1) DEFAULT '0',
  `trueQuitDate` date DEFAULT NULL,
  `quitTable` varchar(50) DEFAULT NULL,
  `cnBankAccount` varchar(50) DEFAULT NULL,
  `busFee` decimal(5,2) DEFAULT '0.00',
  `remark` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0试用 1已转正 2请假 3离职',
  `wechatActivate` tinyint(1) DEFAULT '0' COMMENT '0未激活 1已激活',
  `activateTime` datetime DEFAULT NULL,
  `wxOpenId` varchar(50) DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  `lastLoginTime` datetime DEFAULT NULL,
  `loginTimes` int(11) DEFAULT '0',
  `isUpdatePwd` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_staff
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_appraise
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_appraise`;
CREATE TABLE `dit_staff_appraise` (
  `appraiseId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `appraiseUsr` int(11) DEFAULT '0',
  `morality` varchar(20) DEFAULT NULL,
  `moralityScore` tinyint(2) DEFAULT '0',
  `attitude` varchar(20) DEFAULT NULL,
  `attitudeScore` tinyint(2) DEFAULT '0',
  `business` varchar(20) DEFAULT NULL,
  `businessScore` tinyint(2) DEFAULT '0',
  `efficiency` varchar(20) DEFAULT NULL,
  `efficiencyScore` tinyint(2) DEFAULT '0',
  `achievement` varchar(20) DEFAULT NULL,
  `achievementScore` tinyint(2) DEFAULT '0',
  `late` tinyint(4) DEFAULT '0',
  `earlyRetreat` tinyint(4) DEFAULT '0',
  `sickLeave` tinyint(4) DEFAULT '0',
  `eventLeave` tinyint(4) DEFAULT '0',
  `absenteeism` tinyint(4) DEFAULT '0',
  `score` tinyint(3) DEFAULT '0',
  `appraiseTime` datetime DEFAULT NULL,
  `checkStatus` tinyint(1) DEFAULT '0',
  `curCheckLevel` tinyint(1) DEFAULT '0',
  `curCheckOffice` int(11) DEFAULT '0',
  `curCheckGroup` int(11) DEFAULT '0',
  `curCheckRole` int(11) DEFAULT '0',
  PRIMARY KEY (`appraiseId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_staff_appraise
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_appraise_check
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_appraise_check`;
CREATE TABLE `dit_staff_appraise_check` (
  `checkId` int(11) NOT NULL AUTO_INCREMENT,
  `appraiseId` int(11) DEFAULT '0',
  `checkLevel` tinyint(1) DEFAULT '0',
  `checkUsr` int(11) DEFAULT '0',
  `result` tinyint(1) DEFAULT '0',
  `remark` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `beginDate` date DEFAULT NULL,
  `overDate` date DEFAULT NULL,
  `quitDate` date DEFAULT NULL,
  `checkTime` datetime DEFAULT NULL,
  PRIMARY KEY (`checkId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_staff_appraise_check
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_attach
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_attach`;
CREATE TABLE `dit_staff_attach` (
  `attachId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `category` tinyint(1) DEFAULT '0',
  `attachName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `attachFile` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`attachId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_staff_attach
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_contract
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_contract`;
CREATE TABLE `dit_staff_contract` (
  `contractId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `companyId` int(11) DEFAULT '0',
  `contractNo` varchar(50) DEFAULT NULL,
  `beginDate` date DEFAULT NULL,
  `overDate` date DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`contractId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_staff_contract
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_editlog
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_editlog`;
CREATE TABLE `dit_staff_editlog` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `editUsr` int(11) DEFAULT '0',
  `logContent` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `logTime` datetime DEFAULT NULL,
  PRIMARY KEY (`logId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dit_staff_editlog
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_family
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_family`;
CREATE TABLE `dit_staff_family` (
  `familyId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `familyName` varchar(20) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT '0' COMMENT '1男 2女',
  `birthDate` date DEFAULT NULL,
  `relation` varchar(20) DEFAULT NULL,
  `telphone` varchar(30) DEFAULT NULL,
  `workUnit` varchar(50) DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`familyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_staff_family
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_resume
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_resume`;
CREATE TABLE `dit_staff_resume` (
  `resumeId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `beginDate` date DEFAULT NULL,
  `overDate` date DEFAULT NULL,
  `workUnit` varchar(50) DEFAULT NULL,
  `postName` varchar(50) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`resumeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_staff_resume
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_try
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_try`;
CREATE TABLE `dit_staff_try` (
  `tryId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `beginDate` date DEFAULT NULL,
  `overDate` date DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  `addUsr` int(11) DEFAULT '0',
  PRIMARY KEY (`tryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_staff_try
-- ----------------------------

-- ----------------------------
-- Table structure for dit_staff_vacation
-- ----------------------------
DROP TABLE IF EXISTS `dit_staff_vacation`;
CREATE TABLE `dit_staff_vacation` (
  `vacationId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `leaveTypeId` int(11) DEFAULT '0',
  `dayNumber` tinyint(4) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`vacationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_staff_vacation
-- ----------------------------

-- ----------------------------
-- Table structure for dit_sysrole
-- ----------------------------
DROP TABLE IF EXISTS `dit_sysrole`;
CREATE TABLE `dit_sysrole` (
  `sysRoleId` int(11) NOT NULL AUTO_INCREMENT,
  `sysRoleName` varchar(50) DEFAULT NULL,
  `power` varchar(150) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`sysRoleId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_sysrole
-- ----------------------------
INSERT INTO `dit_sysrole` VALUES ('2', '2222', '0,0,0,0|0,0,0,0,0,0,0,0,0,0,0|0,0,0,0|0,0|0,0,0,0,0,0|0,0,0,0,0,0,0,0,0,0|0,0,0|0,0,0,0,0,0,0,0|0,0,0,0,0', '0', '2018-10-24 16:26:43', '2018-10-25 16:21:19');
INSERT INTO `dit_sysrole` VALUES ('3', '11111', '1,1,1,1|1,1,1,1,1,1,1,1,1,1,1|1,1,1,1|1,1|1,1,1,1,1,1|1,1,1,1,1,1,1,1,1,1|1,1,1|1,1,1,1,1,1,1,1|1,1,1,1,1', '0', '2018-10-24 16:32:38', '2018-10-25 16:21:30');
INSERT INTO `dit_sysrole` VALUES ('4', '111', '1,0,0,0|0,0,0,0,0,0,0,0,0,0,0|0,0,0,0|0,0|0,0,0,0,0,0|0,0,0,0,0,0,0,0,0,0|0,0,0|0,0,0,0,0,0,0,0|0,0,0,0,0', '0', '2018-10-25 19:19:19', null);

-- ----------------------------
-- Table structure for dit_takeover
-- ----------------------------
DROP TABLE IF EXISTS `dit_takeover`;
CREATE TABLE `dit_takeover` (
  `takeOverId` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` int(11) DEFAULT '0',
  `takeOverUsr` int(11) DEFAULT '0',
  `overTime` datetime DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`takeOverId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dit_takeover
-- ----------------------------
