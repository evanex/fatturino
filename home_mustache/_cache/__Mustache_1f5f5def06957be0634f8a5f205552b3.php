<?php

class __Mustache_1f5f5def06957be0634f8a5f205552b3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<li class="light-blue">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a data-toggle="dropdown" href="#" class="dropdown-toggle">';
        $buffer .= "\n";
        $buffer .= $indent . '		<img class="nav-user-photo" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '/avatars/user.jpg" alt="Jason\'s Photo">';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="user-info">';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $value = $this->resolveValue($context->find('user_email'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '		</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-caret-down"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="#"><i class="icon-cog"></i> Settings</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="#"><i class="icon-user"></i> Profile</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li class="divider"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="#"><i class="icon-off"></i> Logout</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '</li>';

        return $buffer;
    }
}
