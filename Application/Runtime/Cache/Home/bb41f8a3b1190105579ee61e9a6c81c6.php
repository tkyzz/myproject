<?php if (!defined('THINK_PATH')) exit();?><div class="profile-show" data-id="<?php echo ($skill["id"]); ?>"><div class="detail-item-title"><p class="title"><span>语言技能</span></p><div class="action-box"><div class="sub-action edit js_skill_edit" data-id="<?php echo ($res["id"]); ?>"><i></i>编辑</div></div></div><div class="sub-info"><div class="college-info"><span class="major">英语能力</span><span class="ability"><?php echo ($skill["enskill"]); ?></span></div><?php if(is_array($skill["other_languages"])): foreach($skill["other_languages"] as $key=>$v): ?><div class="college-info"><span class="major"><?php echo ($v["name"]); ?>能力</span><span class="ability"><?php echo (smartShulian($v["proficiency"])); ?></span></div><?php endforeach; endif; ?></div></div>