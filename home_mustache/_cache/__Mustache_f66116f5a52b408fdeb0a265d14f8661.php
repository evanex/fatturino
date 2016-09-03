<?php

class __Mustache_f66116f5a52b408fdeb0a265d14f8661 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
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
        // 'login_name' section
        $buffer .= $this->section9db89bf6cbd7e741efa3221bb68ad0a7($context, $indent, $context->find('login_name'));
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

    private function section9db89bf6cbd7e741efa3221bb68ad0a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{user_email}}
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			';
                $value = $this->resolveValue($context->find('user_email'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
