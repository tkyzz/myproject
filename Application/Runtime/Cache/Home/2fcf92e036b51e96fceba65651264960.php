<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"><title>菜鸟帮帮</title><link rel="shortcut icon" type="image/x-icon" href="/cnbb.ico" media="screen" /><link rel="stylesheet" type="text/css" href="/Public/css/h5/public.css"><script src="/Public/js/jquery.min.js"></script><script src="/Public/js/layer/layer.js"></script><link rel="stylesheet" type="text/css" href="/Public/css/h5/postList.css"><script src="/Public/js/style_h5.js"></script></head><body><header class="header"><a class="working-place" href="workingPlace.html" target="_blank"><i></i><span class="place">上海</span></a><span class="title">菜鸟帮帮岗位列表</span><span class="my" id="my"><i></i></span><div class="my-cont"><a class="cont-item" href=""><img class="item-img" src="/Public/img/wap/my_profile.png"/><p class="item-title">我的简历</p></a><a class="cont-item" href=""><img class="item-img" src="/Public/img/wap/feedback.png"/><p class="item-title">投递反馈</p></a></div></header><div class="footer"><div class="logo"><img src="/Public/img/wap/logo.png"/></div><div class="slogan"><img src="/Public/img/wap/slogan.png"/></div><div class="app-download"><div class="cartoon"><img src="/Public/img/wap/cartoon.png"/></div><a class="download" href=""><img src="/Public/img/wap/download_btn.png"/></a></div></div><div class="content"><div class="post-filter-box"><div class="term-select"><span class="select-item">岗位性质<i></i></span><span class="select-item">行业领域<i></i></span></div><div class="post-filter"><div class="filter-info"><div class="filter-block"><p class="block-title">岗位性质</p><div class="filter-term"><span class="sub-option">不限</span><span class="sub-option">日常</span><span class="sub-option">假期</span></div></div><div class="filter-block"><p class="block-title">至少连续实习月数</p><div class="filter-term"><span class="sub-option">1个月</span><span class="sub-option">2个月</span><span class="sub-option">3个月</span><span class="sub-option">4个月</span><span class="sub-option">5个月</span><span class="sub-option">6个月</span><span class="sub-option">7个月</span><span class="sub-option">8个月</span><span class="sub-option">9个月</span><span class="sub-option">10个月</span><span class="sub-option">11个月</span><span class="sub-option">12个月</span></div></div><div class="filter-block"><p class="block-title">每周工作天数</p><div class="filter-term"><span class="sub-option">1天</span><span class="sub-option">2天</span><span class="sub-option">3天</span><span class="sub-option">4天</span><span class="sub-option">5天</span><span class="sub-option">6天</span><span class="sub-option">7天</span></div></div><input class="filter-btn" type="button" value="确定"/></div><div class="filter-info"><div class="filter-block"><p class="block-title">行业领域</p><div class="filter-term"><span class="sub-option">不限</span><span class="sub-option">商业银行</span><span class="sub-option">证券投资</span><span class="sub-option">保险</span><span class="sub-option">新兴金融行业</span><span class="sub-option">财务会计</span></div></div><input class="filter-btn" type="button" value="确定"/></div></div></div><div class="post-list"><?php if(is_array($res["posts"])): foreach($res["posts"] as $k=>$v): ?><a class="post-item" href="/post/<?php echo (smartBase64($v["id"])); ?>.html"><div class="post-avatar"><img src="/Public/img/wap/company_icon.jpg"/></div><div class="post-info"><div class="info-line"><span class="line-block post-name"><?php echo ($v["name"]); ?></span><?php if(($v['esalary']) >= "1"): ?><span class="line-block post-pay"><?php echo ($v['ssalary']); ?>-<?php echo ($v['esalary']); if($v['salary_unit'] == 0): ?>元/天<?php else: ?>元/月<?php endif; ?></span><?php else: ?><span class="line-block post-pay"><?php if($v['ssalary'] <= 0): ?>面议<?php else: if($v['salary_unit'] == 0): echo ($v["ssalary"]); ?>元/天<?php else: echo ($v["ssalary"]); ?>元/月<?php endif; endif; ?></span><?php endif; ?><!-- <span class="line-block post-pay">3500-8000元/月</span> --></div><div class="info-line"><span class="line-block post-org"><?php echo ($v["org"]["abbrname"]); ?></span><span class="line-block post-addr"><i></i><?php echo ($v["city_name"]); ?>-<?php if(!empty($v["zone_name"])): echo ($v["zone_name"]); else: ?>全市<?php endif; ?></span></div><div class="info-line"><div class="line-block post-others"><span class="sub-attr"><?php echo (smartDegree($v["degree"])); ?></span><span class="sub-attr"><?php echo ($v["work_days"]); ?>天/周</span><span class="sub-attr">至少<?php echo ($v['work_duration']/30); ?>个月</span></div><span class="line-block post-time"><?php echo (smartJobStrTime($v["last_time"])); ?></span></div></div></a><?php endforeach; endif; ?></div></div></body></html>