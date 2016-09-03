<?php

class __Mustache_c46a6126864c477b5f4602f9f5f933d3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="sidebar-shortcuts" id="sidebar-shortcuts">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn-primary">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-pencil align-top bigger-125"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '				Nuova Fattura';
        $buffer .= "\n";
        $buffer .= $indent . '		</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-success"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- #sidebar-shortcuts -->';

        return $buffer;
    }
}
