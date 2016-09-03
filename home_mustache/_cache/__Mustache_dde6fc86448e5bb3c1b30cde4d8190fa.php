<?php

class __Mustache_dde6fc86448e5bb3c1b30cde4d8190fa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.demo' section
        $buffer .= $this->sectionD390db1d4080e90616312756fa563828($context, $indent, $context->findDot('site.demo'));
        $buffer .= $indent . '<table id="grid-table"></table>';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="grid-pager"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . 'var $path_base = "';
        $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
        $buffer .= $value;
        $buffer .= '";//this will be used in gritter alerts containing images';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function sectionD390db1d4080e90616312756fa563828(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <div class="alert alert-info">
   <i class="icon-hand-right"></i> Please note that demo server is not configured to save the changes, therefore you may get an error message.
   <button class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
 </div>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' <div class="alert alert-info">';
                $buffer .= "\n";
                $buffer .= $indent . '   <i class="icon-hand-right"></i> Please note that demo server is not configured to save the changes, therefore you may get an error message.';
                $buffer .= "\n";
                $buffer .= $indent . '   <button class="close" data-dismiss="alert"><i class="icon-remove"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . ' </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
