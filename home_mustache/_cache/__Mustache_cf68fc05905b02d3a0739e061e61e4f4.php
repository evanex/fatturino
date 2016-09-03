<?php

class __Mustache_cf68fc05905b02d3a0739e061e61e4f4 extends Mustache_Template
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
        $buffer .= $indent . '					<th></th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th>Num</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th><i class="icon-time bigger-110 hidden-480"></i>Data</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th class="hidden-480">Cliente</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th> Totale</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th class="hidden-480">Status</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					<th>Azioni</th>';
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
        // 'page.invoices' section
        $buffer .= $this->sectionDe7fad4d8fb853365ef1d96a8c8130eb($context, $indent, $context->findDot('page.invoices'));
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
        // 'page.domains2' section
        $buffer .= $this->sectionE570709c0700fd1fcb5f469fa503402f($context, $indent, $context->findDot('page.domains2'));
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

    private function section138aeb97a81ae792eed57ad50d5531de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<span class=\'label label-sm label-inverse arrowed-in\'>Nuova</span>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<span class=\'label label-sm label-inverse arrowed-in\'>Nuova</span>';
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

    private function sectionDe7fad4d8fb853365ef1d96a8c8130eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<tr>
					<td class=\'center\'>
					<!--	
						<label><input type=\'checkbox\' class="ace" id=\'fatt_id_{{id}}\' /><span class="lbl"></span></label>
					-->
					</td>
					<td><a href=\'#\'>{{num_fatt}}</a></td>
					<td>{{data}}</td>
					<td class=\'hidden-480\'>{{ragione_sociale_cliente}}</td>
					<td>{{importo}}</td>
					<td class=\'hidden-480\'>
						{{#scaduta}}
						<span class=\'label label-sm label-warning\'>Expiring</span>
						{{/scaduta}}
						{{#inviata}}
						<span class=\'label label-sm label-success\'>Registered</span>
						{{/inviata}}
						{{#new}}
						<span class=\'label label-sm label-inverse arrowed-in\'>Nuova</span>
						{{/new}}
						{{#pagata}}
						<span class=\'label label-sm label-info arrowed arrowed-righ\'>Sold</span>
						{{/pagata}}
					</td>
					<td>
						<div class=\'visible-md visible-lg hidden-sm hidden-xs btn-group\'>
							<button class=\'btn btn-xs btn-success\'><i class=\'icon-ok bigger-120\'></i></button>
							<button class=\'btn btn-xs btn-info\'><i class=\'icon-edit bigger-120\'></i></button>
							<button class=\'btn btn-xs btn-danger\'><i class=\'icon-trash bigger-120\'></i></button>
							<button class=\'btn btn-xs btn-warning\'><i class=\'icon-flag bigger-120\'></i></button>
						</div>

						<div class=\'visible-xs visible-sm hidden-md hidden-lg\'>
							<div class="inline position-relative">
								<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only bigger-110"></i></button>
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
                $buffer .= $indent . '					<!--	';
                $buffer .= "\n";
                $buffer .= $indent . '						<label><input type=\'checkbox\' class="ace" id=\'fatt_id_';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\' /><span class="lbl"></span></label>';
                $buffer .= "\n";
                $buffer .= $indent . '					-->';
                $buffer .= "\n";
                $buffer .= $indent . '					</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td><a href=\'#\'>';
                $value = $this->resolveValue($context->find('num_fatt'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $value = $this->resolveValue($context->find('data'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td class=\'hidden-480\'>';
                $value = $this->resolveValue($context->find('ragione_sociale_cliente'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $value = $this->resolveValue($context->find('importo'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td class=\'hidden-480\'>';
                $buffer .= "\n";
                // 'scaduta' section
                $buffer .= $this->sectionBcd9ffd6bfca1ce387f98613922af6ff($context, $indent, $context->find('scaduta'));
                // 'inviata' section
                $buffer .= $this->section497ceee0cb27c145905cbc5c8ef8b716($context, $indent, $context->find('inviata'));
                // 'new' section
                $buffer .= $this->section138aeb97a81ae792eed57ad50d5531de($context, $indent, $context->find('new'));
                // 'pagata' section
                $buffer .= $this->sectionD46e0a839d17259d5a933b429634e49a($context, $indent, $context->find('pagata'));
                $buffer .= $indent . '					</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class=\'visible-md visible-lg hidden-sm hidden-xs btn-group\'>';
                $buffer .= "\n";
                $buffer .= $indent . '							<button class=\'btn btn-xs btn-success\'><i class=\'icon-ok bigger-120\'></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '							<button class=\'btn btn-xs btn-info\'><i class=\'icon-edit bigger-120\'></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '							<button class=\'btn btn-xs btn-danger\'><i class=\'icon-trash bigger-120\'></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '							<button class=\'btn btn-xs btn-warning\'><i class=\'icon-flag bigger-120\'></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class=\'visible-xs visible-sm hidden-md hidden-lg\'>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="inline position-relative">';
                $buffer .= "\n";
                $buffer .= $indent . '								<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only bigger-110"></i></button>';
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
                $buffer .= $indent . '						';
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
