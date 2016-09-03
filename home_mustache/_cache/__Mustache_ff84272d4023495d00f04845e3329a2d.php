<?php

class __Mustache_ff84272d4023495d00f04845e3329a2d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="sidebar-shortcuts" id="sidebar-shortcuts">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row" id="sidebar-shortcuts-large">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-sm btn-success">';
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
        $buffer .= $indent . '		<button class="btn btn-sm btn-success">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-pencil align-top bigger-125"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '		</button>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- #sidebar-shortcuts -->';

        return $buffer;
    }
}
