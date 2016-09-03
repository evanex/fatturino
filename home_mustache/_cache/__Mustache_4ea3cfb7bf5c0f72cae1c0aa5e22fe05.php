<?php

class __Mustache_4ea3cfb7bf5c0f72cae1c0aa5e22fe05 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-xs-12">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="table-header">';
        $buffer .= "\n";
        $buffer .= $indent . '		Fatture attive';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="table-responsive">';
        $buffer .= "\n";
        $buffer .= $indent . '		<table id="sample-table-2" class="table table-striped table-bordered table-hover">';
        $buffer .= "\n";
        $buffer .= $indent . '			<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '				<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th class="center">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label><input type="checkbox" class="ace" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '					</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th>Num.</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th>Data</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th class="hidden-480">Cliente</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th><i class="icon-time bigger-110 hidden-480"></i> Totale</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th class="hidden-480">Status</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th></th>';
        $buffer .= "\n";
        $buffer .= $indent . '				</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '			</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '									';
        $buffer .= "\n";
        $buffer .= $indent . '			<tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.domains2' section
        $buffer .= $this->section701ef9e37e03986873a079913fb8e689($context, $indent, $context->findDot('page.domains2'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			</tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '		</table>';
        $buffer .= "\n";
        $buffer .= $indent . '	   </div>';
        $buffer .= "\n";
        $buffer .= $indent . ' </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="modal-table" class="modal fade" tabindex="-1">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="modal-dialog">';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="modal-content">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="modal-header no-padding">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="table-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="white">&times;</span></button>';
        $buffer .= "\n";
        $buffer .= $indent . '			Results for "Latest Registered Domains';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="modal-body no-padding">';
        $buffer .= "\n";
        $buffer .= $indent . '		<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">';
        $buffer .= "\n";
        $buffer .= $indent . '			<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '				<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th>Domain</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th>Price</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th>Clicks</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th><i class="icon-time bigger-110"></i> Update</th>';
        $buffer .= "\n";
        $buffer .= $indent . '				</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '			</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '									';
        $buffer .= "\n";
        $buffer .= $indent . '			<tbody>';
        $buffer .= "\n";
        // 'page.domains1' section
        $buffer .= $this->sectionE570709c0700fd1fcb5f469fa503402f($context, $indent, $context->findDot('page.domains1'));
        $buffer .= $indent . '			</tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '		</table>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="modal-footer no-margin-top">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal"><i class="icon-remove"></i> Close</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<ul class="pagination pull-right no-margin">';
        $buffer .= "\n";
        $buffer .= $indent . '			<li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '			<li class="active"><a href="#">1</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '			<li><a href="#">2</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '			<li><a href="#">3</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '			<li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '  </div><!-- /.modal-content -->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- /.modal-dialog -->';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionBcd9ffd6bfca1ce387f98613922af6ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<span class=\'label label-sm label-warning\'>Expiring</span>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<span class=\'label label-sm label-warning\'>Expiring</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section497ceee0cb27c145905cbc5c8ef8b716(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<span class=\'label label-sm label-success\'>Registered</span>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<span class=\'label label-sm label-success\'>Registered</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e9971237b53445b0b9a16ba0cf8e194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<span class=\'label label-sm label-inverse arrowed-in\'>Flagged</span>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<span class=\'label label-sm label-inverse arrowed-in\'>Flagged</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD46e0a839d17259d5a933b429634e49a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<span class=\'label label-sm label-info arrowed arrowed-righ\'>Sold</span>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<span class=\'label label-sm label-info arrowed arrowed-righ\'>Sold</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section701ef9e37e03986873a079913fb8e689(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<tr>
					<td class=\'center\'>
						<label><input type=\'checkbox\' class="ace" /><span class="lbl"></span></label>
					</td>
					<td><a href=\'#\'>{{name}}</a></td>
					<td>{{price}}</td>
					<td class=\'hidden-480\'>{{clicks}}</td>
					<td>{{update}}</td>
					<td class=\'hidden-480\'>
						{{#expiring}}
						<span class=\'label label-sm label-warning\'>Expiring</span>
						{{/expiring}}
						{{#registered}}
						<span class=\'label label-sm label-success\'>Registered</span>
						{{/registered}}
						{{#flagged}}
						<span class=\'label label-sm label-inverse arrowed-in\'>Flagged</span>
						{{/flagged}}
						{{#sold}}
						<span class=\'label label-sm label-info arrowed arrowed-righ\'>Sold</span>
						{{/sold}}
					</td>
					<td>
						<div class=\'visible-md visible-lg hidden-sm hidden-xs action-buttons\'>
							<a class="blue" href="#"><i class="icon-zoom-in bigger-130"></i></a>
							<a class="green" href="#"><i class="icon-pencil bigger-130"></i></a>
							<a class="red" href="#"><i class="icon-trash bigger-130"></i></a>
						</div>
						
						
						<div class=\'visible-xs visible-sm hidden-md hidden-lg\'>
							<div class="inline position-relative">
								<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only bigger-120"></i></button>
								<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
									<li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li>
									<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li>
									<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span> </a></li>
								</ul>
							</div>
						</div>
					</td>
				</tr>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td class=\'center\'>';
                $buffer .= "\n";
                $buffer .= $indent . '						<label><input type=\'checkbox\' class="ace" /><span class="lbl"></span></label>';
                $buffer .= "\n";
                $buffer .= $indent . '					</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td><a href=\'#\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $value = $this->resolveValue($context->find('price'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td class=\'hidden-480\'>';
                $value = $this->resolveValue($context->find('clicks'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $value = $this->resolveValue($context->find('update'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td class=\'hidden-480\'>';
                $buffer .= "\n";
                // 'expiring' section
                $buffer .= $this->sectionBcd9ffd6bfca1ce387f98613922af6ff($context, $indent, $context->find('expiring'));
                // 'registered' section
                $buffer .= $this->section497ceee0cb27c145905cbc5c8ef8b716($context, $indent, $context->find('registered'));
                // 'flagged' section
                $buffer .= $this->section6e9971237b53445b0b9a16ba0cf8e194($context, $indent, $context->find('flagged'));
                // 'sold' section
                $buffer .= $this->sectionD46e0a839d17259d5a933b429634e49a($context, $indent, $context->find('sold'));
                $buffer .= $indent . '					</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class=\'visible-md visible-lg hidden-sm hidden-xs action-buttons\'>';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="blue" href="#"><i class="icon-zoom-in bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="green" href="#"><i class="icon-pencil bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="red" href="#"><i class="icon-trash bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						';
                $buffer .= "\n";
                $buffer .= $indent . '						';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class=\'visible-xs visible-sm hidden-md hidden-lg\'>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="inline position-relative">';
                $buffer .= "\n";
                $buffer .= $indent . '								<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only bigger-120"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '								<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span> </a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '								</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</td>';
                $buffer .= "\n";
                $buffer .= $indent . '				</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE570709c0700fd1fcb5f469fa503402f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<tr>
					<td><a href=\'#\'>{{name}}</a></td>
					<td>{{price}}</td>
					<td>{{clicks}}</td>
					<td>{{update}}</td>
				</tr>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td><a href=\'#\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $value = $this->resolveValue($context->find('price'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $value = $this->resolveValue($context->find('clicks'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $value = $this->resolveValue($context->find('update'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '				</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
