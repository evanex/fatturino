<?php

class __Mustache_cbab9574bf86bc61d753384a21593202 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<li class="light-blue">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a data-toggle="dropdown" href="#" class="dropdown-toggle">';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="user-info">';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $value = $this->resolveValue($context->find('user_email'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= 'evan@evan.it';
        $buffer .= "\n";
        $buffer .= $indent . '		</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-caret-down"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="/auth/?change_password"><i class="icon-cog"></i> Cambia Password</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="/home/?profile"><i class="icon-user"></i> Profilo</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li class="divider"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="/auth/logout"><i class="icon-off"></i> Esci</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '</li>';

        return $buffer;
    }
}
