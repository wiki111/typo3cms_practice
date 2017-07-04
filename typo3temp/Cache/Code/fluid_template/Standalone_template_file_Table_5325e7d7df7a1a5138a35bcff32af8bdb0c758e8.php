<?php
class FluidCache_Standalone_template_file_Table_5325e7d7df7a1a5138a35bcff32af8bdb0c758e8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Header/All';
$arguments1['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';


return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments4 = array();
$arguments4['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'layout', $renderingContext);
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments7 = array();
$arguments7['value'] = '120';
$arguments7['default'] = false;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments9 = array();
$arguments9['name'] = 'tableClass';
$arguments9['value'] = 'table-striped';
$renderChildrenClosure10 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments11 = array();
$arguments11['value'] = '130';
$arguments11['default'] = false;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments13 = array();
$arguments13['name'] = 'tableClass';
$arguments13['value'] = 'table-bordered';
$renderChildrenClosure14 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments15 = array();
$arguments15['value'] = '140';
$arguments15['default'] = false;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments17 = array();
$arguments17['name'] = 'tableClass';
$arguments17['value'] = 'table-hover';
$renderChildrenClosure18 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments19 = array();
$arguments19['value'] = '150';
$arguments19['default'] = false;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments21 = array();
$arguments21['name'] = 'tableClass';
$arguments21['value'] = 'table-condensed';
$renderChildrenClosure22 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments23 = array();
// Rendering Boolean node
$arguments23['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments23['value'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments25 = array();
$arguments25['name'] = 'tableClass';
$arguments25['value'] = '';
$renderChildrenClosure26 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output6 .= '
    ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('table'));
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
        <table class="table ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = $currentVariableContainer->getOrNull('tableClass');
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output29 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output29 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_caption', $renderingContext));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                <caption>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_caption', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output35 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output35 .= '</caption>
            ';
return $output35;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output29 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments39 = array();
$arguments39['each'] = $currentVariableContainer->getOrNull('table');
$arguments39['as'] = 'row';
$arguments39['iteration'] = 'rowIteration';
$arguments39['key'] = '';
$arguments39['reverse'] = false;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments42 = array();
// Rendering Boolean node
$arguments42['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments45 = array();
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments48 = array();
// Rendering Boolean node
$arguments48['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments53 = array();
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output50 .= '
                        ';
return $output50;
};
$arguments48['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};
$arguments48['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                    ';
return $output47;
};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments55 = array();
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments58 = array();
// Rendering Boolean node
$arguments58['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments61 = array();
// Rendering Boolean node
$arguments61['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                </tbody>
                                <tfoot>
                            ';
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                        ';
return $output60;
};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
                    ';
return $output57;
};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output44 .= '
                ';
return $output44;
};
$arguments42['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments64 = array();
// Rendering Boolean node
$arguments64['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments67 = array();
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments69 = array();
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output66 .= '
                        ';
return $output66;
};
$arguments64['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};
$arguments64['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                    ';
return $output63;
};
$arguments42['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments72 = array();
// Rendering Boolean node
$arguments72['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments75 = array();
// Rendering Boolean node
$arguments75['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                </tbody>
                                <tfoot>
                            ';
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                        ';
return $output74;
};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
                    ';
return $output71;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                <tr>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments77 = array();
$arguments77['each'] = $currentVariableContainer->getOrNull('row');
$arguments77['as'] = 'cell';
$arguments77['iteration'] = 'columnIteration';
$arguments77['key'] = '';
$arguments77['reverse'] = false;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments80 = array();
$arguments80['section'] = 'Cell';
$arguments80['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments80['partial'] = NULL;
$arguments80['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                    ';
return $output79;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output41 .= '
                </tr>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments82 = array();
// Rendering Boolean node
$arguments82['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments85 = array();
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments88 = array();
// Rendering Boolean node
$arguments88['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </thead>
                            <tbody>
                        ';
};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                    ';
return $output87;
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments90 = array();
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments93 = array();
// Rendering Boolean node
$arguments93['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments96 = array();
// Rendering Boolean node
$arguments96['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments99 = array();
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments101 = array();
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output98 .= '
                            ';
return $output98;
};
$arguments96['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};
$arguments96['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                        ';
return $output95;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
                    ';
return $output92;
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output84 .= '
                ';
return $output84;
};
$arguments82['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments104 = array();
// Rendering Boolean node
$arguments104['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </thead>
                            <tbody>
                        ';
};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
                    ';
return $output103;
};
$arguments82['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments107 = array();
// Rendering Boolean node
$arguments107['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output109 = '';

$output109 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments110 = array();
// Rendering Boolean node
$arguments110['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments113 = array();
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments115 = array();
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output112 .= '
                            ';
return $output112;
};
$arguments110['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};
$arguments110['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
                        ';
return $output109;
};

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                    ';
return $output106;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output41 .= '

            ';
return $output41;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output29 .= '
        </table>
    ';
return $output29;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output3 .= '

';


return $output3;
}
/**
 * section Cell
 */
public function section_4607bc7c42ac8db29bfc2cd922416f6e854c18d1(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output117 = '';

$output117 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments118 = array();
// Rendering Boolean node
$arguments118['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments121 = array();
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments124 = array();
// Rendering Boolean node
$arguments124['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments127 = array();
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments129 = array();
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments132 = array();
// Rendering Boolean node
$arguments132['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments135 = array();
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments138 = array();
// Rendering Boolean node
$arguments138['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output140 = '';

$output140 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments141 = array();
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments143 = array();
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output140 .= '
                            ';
return $output140;
};
$arguments138['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments138['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                        ';
return $output137;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments145 = array();
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output134 .= '
                    ';
return $output134;
};
$arguments132['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments148 = array();
// Rendering Boolean node
$arguments148['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments151 = array();
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments153 = array();
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output150 .= '
                            ';
return $output150;
};
$arguments148['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments148['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
                        ';
return $output147;
};
$arguments132['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
                ';
return $output131;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output126 .= '
            ';
return $output126;
};
$arguments124['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};
$arguments124['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments156 = array();
// Rendering Boolean node
$arguments156['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments159 = array();
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments162 = array();
// Rendering Boolean node
$arguments162['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments165 = array();
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments167 = array();
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output164 .= '
                            ';
return $output164;
};
$arguments162['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments162['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
                        ';
return $output161;
};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments169 = array();
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output158 .= '
                    ';
return $output158;
};
$arguments156['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments172 = array();
// Rendering Boolean node
$arguments172['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments175 = array();
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments177 = array();
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output174 .= '
                            ';
return $output174;
};
$arguments172['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments172['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
                        ';
return $output171;
};
$arguments156['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
                ';
return $output155;
};

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
        ';
return $output123;
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments179 = array();
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments182 = array();
// Rendering Boolean node
$arguments182['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments185 = array();
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments188 = array();
// Rendering Boolean node
$arguments188['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments191 = array();
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments193 = array();
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output190 .= '
                    ';
return $output190;
};
$arguments188['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments188['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
                ';
return $output187;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments195 = array();
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output184 .= '
            ';
return $output184;
};
$arguments182['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments198 = array();
// Rendering Boolean node
$arguments198['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments201 = array();
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments203 = array();
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output200 .= '
                    ';
return $output200;
};
$arguments198['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments198['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
                ';
return $output197;
};
$arguments182['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
        ';
return $output181;
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output120 .= '
    ';
return $output120;
};
$arguments118['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments206 = array();
// Rendering Boolean node
$arguments206['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output208 = '';

$output208 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments209 = array();
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments211 = array();
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output213 = '';

$output213 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments214 = array();
// Rendering Boolean node
$arguments214['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';

$output216 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments217 = array();
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments220 = array();
// Rendering Boolean node
$arguments220['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output222 = '';

$output222 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments223 = array();
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments225 = array();
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output222 .= '
                            ';
return $output222;
};
$arguments220['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments220['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
                        ';
return $output219;
};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments227 = array();
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output216 .= '
                    ';
return $output216;
};
$arguments214['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output229 = '';

$output229 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments230 = array();
// Rendering Boolean node
$arguments230['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output232 = '';

$output232 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments233 = array();
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments235 = array();
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output232 .= '
                            ';
return $output232;
};
$arguments230['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments230['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output229 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output229 .= '
                        ';
return $output229;
};
$arguments214['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
                ';
return $output213;
};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output208 .= '
            ';
return $output208;
};
$arguments206['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};
$arguments206['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output237 = '';

$output237 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments238 = array();
// Rendering Boolean node
$arguments238['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments238['then'] = NULL;
$arguments238['else'] = NULL;
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output240 = '';

$output240 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments241 = array();
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output243 = '';

$output243 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments244 = array();
// Rendering Boolean node
$arguments244['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments247 = array();
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments249 = array();
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output246 .= '
                            ';
return $output246;
};
$arguments244['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments244['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
                        ';
return $output243;
};

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments251 = array();
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output240 .= '
                    ';
return $output240;
};
$arguments238['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output253 = '';

$output253 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments254 = array();
// Rendering Boolean node
$arguments254['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments257 = array();
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments259 = array();
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output256 .= '
                            ';
return $output256;
};
$arguments254['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments254['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
                        ';
return $output253;
};
$arguments238['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '
                ';
return $output237;
};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
        ';
return $output205;
};
$arguments118['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output261 = '';

$output261 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments262 = array();
// Rendering Boolean node
$arguments262['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments262['then'] = NULL;
$arguments262['else'] = NULL;
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output264 = '';

$output264 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments265 = array();
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output267 = '';

$output267 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments268 = array();
// Rendering Boolean node
$arguments268['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output270 = '';

$output270 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments271 = array();
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments273 = array();
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output270 .= '
                    ';
return $output270;
};
$arguments268['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments268['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output267 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                ';
return $output267;
};

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments275 = array();
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output264 .= '
            ';
return $output264;
};
$arguments262['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output277 = '';

$output277 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments278 = array();
// Rendering Boolean node
$arguments278['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output280 = '';

$output280 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments281 = array();
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments283 = array();
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output280 .= '
                    ';
return $output280;
};
$arguments278['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments278['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
                ';
return $output277;
};
$arguments262['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output261 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output261 .= '
        ';
return $output261;
};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '

    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments285 = array();
$arguments285['value'] = NULL;
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments287 = array();
$arguments287['value'] = $currentVariableContainer->getOrNull('cell');
$arguments287['keepQuotes'] = false;
$arguments287['encoding'] = NULL;
$arguments287['doubleEncode'] = true;
$renderChildrenClosure288 = function() {return NULL;};
$value289 = ($arguments287['value'] !== NULL ? $arguments287['value'] : $renderChildrenClosure288());
return (!is_string($value289) ? $value289 : htmlspecialchars($value289, ($arguments287['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments287['encoding'] !== NULL ? $arguments287['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments287['doubleEncode']));
};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output117 .= '</span>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments290 = array();
// Rendering Boolean node
$arguments290['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments290['then'] = NULL;
$arguments290['else'] = NULL;
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output292 = '';

$output292 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments293 = array();
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output295 = '';

$output295 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments296 = array();
// Rendering Boolean node
$arguments296['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments296['then'] = NULL;
$arguments296['else'] = NULL;
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output298 = '';

$output298 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments299 = array();
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments301 = array();
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output303 = '';

$output303 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments304 = array();
// Rendering Boolean node
$arguments304['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments304['then'] = NULL;
$arguments304['else'] = NULL;
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output306 = '';

$output306 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments307 = array();
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output309 = '';

$output309 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments310 = array();
// Rendering Boolean node
$arguments310['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments310['then'] = NULL;
$arguments310['else'] = NULL;
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output312 = '';

$output312 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments313 = array();
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments315 = array();
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output312 .= '
                            ';
return $output312;
};
$arguments310['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments310['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
                        ';
return $output309;
};

$output306 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output306 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments317 = array();
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output306 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output306 .= '
                    ';
return $output306;
};
$arguments304['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output319 = '';

$output319 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments320 = array();
// Rendering Boolean node
$arguments320['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments320['then'] = NULL;
$arguments320['else'] = NULL;
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output322 = '';

$output322 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments323 = array();
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments325 = array();
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output322 .= '
                            ';
return $output322;
};
$arguments320['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments320['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output319 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '
                        ';
return $output319;
};
$arguments304['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
                ';
return $output303;
};

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output298 .= '
            ';
return $output298;
};
$arguments296['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};
$arguments296['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output327 = '';

$output327 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments328 = array();
// Rendering Boolean node
$arguments328['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output330 = '';

$output330 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments331 = array();
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output333 = '';

$output333 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments334 = array();
// Rendering Boolean node
$arguments334['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments334['then'] = NULL;
$arguments334['else'] = NULL;
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output336 = '';

$output336 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments337 = array();
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output336 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments339 = array();
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output336 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output336 .= '
                            ';
return $output336;
};
$arguments334['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments334['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output333 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output333 .= '
                        ';
return $output333;
};

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments341 = array();
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output330 .= '
                    ';
return $output330;
};
$arguments328['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output343 = '';

$output343 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments344 = array();
// Rendering Boolean node
$arguments344['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments344['then'] = NULL;
$arguments344['else'] = NULL;
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output346 = '';

$output346 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments347 = array();
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments349 = array();
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output346 .= '
                            ';
return $output346;
};
$arguments344['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments344['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output343 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
                        ';
return $output343;
};
$arguments328['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output327 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
                ';
return $output327;
};

$output295 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
        ';
return $output295;
};

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments351 = array();
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output353 = '';

$output353 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments354 = array();
// Rendering Boolean node
$arguments354['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments354['then'] = NULL;
$arguments354['else'] = NULL;
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output356 = '';

$output356 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments357 = array();
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output359 = '';

$output359 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments360 = array();
// Rendering Boolean node
$arguments360['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments360['then'] = NULL;
$arguments360['else'] = NULL;
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output362 = '';

$output362 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments363 = array();
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output362 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments365 = array();
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output362 .= '
                    ';
return $output362;
};
$arguments360['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments360['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output359 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= '
                ';
return $output359;
};

$output356 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output356 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments367 = array();
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output356 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output356 .= '
            ';
return $output356;
};
$arguments354['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output369 = '';

$output369 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments370 = array();
// Rendering Boolean node
$arguments370['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output372 = '';

$output372 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments373 = array();
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output372 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments375 = array();
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output372 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output372 .= '
                    ';
return $output372;
};
$arguments370['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments370['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output369 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '
                ';
return $output369;
};
$arguments354['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output353 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output353 .= '
        ';
return $output353;
};

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output292 .= '
    ';
return $output292;
};
$arguments290['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output377 = '';

$output377 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments378 = array();
// Rendering Boolean node
$arguments378['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output380 = '';

$output380 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments381 = array();
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};

$output380 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output380 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments383 = array();
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output385 = '';

$output385 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments386 = array();
// Rendering Boolean node
$arguments386['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments386['then'] = NULL;
$arguments386['else'] = NULL;
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output388 = '';

$output388 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments389 = array();
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output391 = '';

$output391 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments392 = array();
// Rendering Boolean node
$arguments392['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments392['then'] = NULL;
$arguments392['else'] = NULL;
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output394 = '';

$output394 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments395 = array();
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output394 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output394 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments397 = array();
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output394 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output394 .= '
                            ';
return $output394;
};
$arguments392['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments392['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output391 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output391 .= '
                        ';
return $output391;
};

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output388 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments399 = array();
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output388 .= '
                    ';
return $output388;
};
$arguments386['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output401 = '';

$output401 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments402 = array();
// Rendering Boolean node
$arguments402['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output404 = '';

$output404 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments405 = array();
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments407 = array();
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output404 .= '
                            ';
return $output404;
};
$arguments402['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments402['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output401 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
                        ';
return $output401;
};
$arguments386['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output385 .= '
                ';
return $output385;
};

$output380 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output380 .= '
            ';
return $output380;
};
$arguments378['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};
$arguments378['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output409 = '';

$output409 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments410 = array();
// Rendering Boolean node
$arguments410['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments410['then'] = NULL;
$arguments410['else'] = NULL;
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output412 = '';

$output412 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments413 = array();
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output415 = '';

$output415 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments416 = array();
// Rendering Boolean node
$arguments416['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments416['then'] = NULL;
$arguments416['else'] = NULL;
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output418 = '';

$output418 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments419 = array();
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output418 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments421 = array();
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output418 .= '
                            ';
return $output418;
};
$arguments416['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments416['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output415 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output415 .= '
                        ';
return $output415;
};

$output412 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output412 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments423 = array();
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output412 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output412 .= '
                    ';
return $output412;
};
$arguments410['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output425 = '';

$output425 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments426 = array();
// Rendering Boolean node
$arguments426['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output428 = '';

$output428 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments429 = array();
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output428 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments431 = array();
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output428 .= '
                            ';
return $output428;
};
$arguments426['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments426['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output425 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '
                        ';
return $output425;
};
$arguments410['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output409 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
                ';
return $output409;
};

$output377 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output377 .= '
        ';
return $output377;
};
$arguments290['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output433 = '';

$output433 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments434 = array();
// Rendering Boolean node
$arguments434['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments434['then'] = NULL;
$arguments434['else'] = NULL;
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output436 = '';

$output436 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments437 = array();
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output439 = '';

$output439 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments440 = array();
// Rendering Boolean node
$arguments440['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments440['then'] = NULL;
$arguments440['else'] = NULL;
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output442 = '';

$output442 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments443 = array();
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output442 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output442 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments445 = array();
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output442 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output442 .= '
                    ';
return $output442;
};
$arguments440['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments440['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output439 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);

$output439 .= '
                ';
return $output439;
};

$output436 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output436 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments447 = array();
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output436 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output436 .= '
            ';
return $output436;
};
$arguments434['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output449 = '';

$output449 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments450 = array();
// Rendering Boolean node
$arguments450['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments450['then'] = NULL;
$arguments450['else'] = NULL;
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output452 = '';

$output452 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments453 = array();
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output452 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output452 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments455 = array();
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output452 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output452 .= '
                    ';
return $output452;
};
$arguments450['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments450['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
                ';
return $output449;
};
$arguments434['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output433 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output433 .= '
        ';
return $output433;
};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output117 .= '

';


return $output117;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output457 = '';

$output457 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments458 = array();
$arguments458['name'] = 'Default';
$renderChildrenClosure459 = function() {return NULL;};
$viewHelper460 = $self->getViewHelper('$viewHelper460', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper460->setArguments($arguments458);
$viewHelper460->setRenderingContext($renderingContext);
$viewHelper460->setRenderChildrenClosure($renderChildrenClosure459);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output457 .= $viewHelper460->initializeArgumentsAndRender();

$output457 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments461 = array();
$arguments461['name'] = 'Header';
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output463 = '';

$output463 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments464 = array();
$arguments464['partial'] = 'Header/All';
$arguments464['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments464['section'] = NULL;
$arguments464['optional'] = false;
$renderChildrenClosure465 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output463 .= '

';
return $output463;
};

$output457 .= '';

$output457 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments466 = array();
$arguments466['name'] = 'Main';
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output468 = '';

$output468 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments469 = array();
$arguments469['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'layout', $renderingContext);
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output471 = '';

$output471 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments472 = array();
$arguments472['value'] = '120';
$arguments472['default'] = false;
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments474 = array();
$arguments474['name'] = 'tableClass';
$arguments474['value'] = 'table-striped';
$renderChildrenClosure475 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);
};

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output471 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments476 = array();
$arguments476['value'] = '130';
$arguments476['default'] = false;
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments478 = array();
$arguments478['name'] = 'tableClass';
$arguments478['value'] = 'table-bordered';
$renderChildrenClosure479 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);
};

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output471 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments480 = array();
$arguments480['value'] = '140';
$arguments480['default'] = false;
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments482 = array();
$arguments482['name'] = 'tableClass';
$arguments482['value'] = 'table-hover';
$renderChildrenClosure483 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);
};

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output471 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments484 = array();
$arguments484['value'] = '150';
$arguments484['default'] = false;
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments486 = array();
$arguments486['name'] = 'tableClass';
$arguments486['value'] = 'table-condensed';
$renderChildrenClosure487 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);
};

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output471 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments488 = array();
// Rendering Boolean node
$arguments488['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments488['value'] = NULL;
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments490 = array();
$arguments490['name'] = 'tableClass';
$arguments490['value'] = '';
$renderChildrenClosure491 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);
};

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext);

$output471 .= '
    ';
return $output471;
};

$output468 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output468 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments492 = array();
// Rendering Boolean node
$arguments492['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('table'));
$arguments492['then'] = NULL;
$arguments492['else'] = NULL;
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output494 = '';

$output494 .= '
        <table class="table ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments495 = array();
$arguments495['value'] = $currentVariableContainer->getOrNull('tableClass');
$arguments495['keepQuotes'] = false;
$arguments495['encoding'] = NULL;
$arguments495['doubleEncode'] = true;
$renderChildrenClosure496 = function() {return NULL;};
$value497 = ($arguments495['value'] !== NULL ? $arguments495['value'] : $renderChildrenClosure496());

$output494 .= (!is_string($value497) ? $value497 : htmlspecialchars($value497, ($arguments495['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments495['encoding'] !== NULL ? $arguments495['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments495['doubleEncode']));

$output494 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments498 = array();
// Rendering Boolean node
$arguments498['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_caption', $renderingContext));
$arguments498['then'] = NULL;
$arguments498['else'] = NULL;
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output500 = '';

$output500 .= '
                <caption>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments501 = array();
$arguments501['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_caption', $renderingContext);
$arguments501['keepQuotes'] = false;
$arguments501['encoding'] = NULL;
$arguments501['doubleEncode'] = true;
$renderChildrenClosure502 = function() {return NULL;};
$value503 = ($arguments501['value'] !== NULL ? $arguments501['value'] : $renderChildrenClosure502());

$output500 .= (!is_string($value503) ? $value503 : htmlspecialchars($value503, ($arguments501['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments501['encoding'] !== NULL ? $arguments501['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments501['doubleEncode']));

$output500 .= '</caption>
            ';
return $output500;
};

$output494 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output494 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments504 = array();
$arguments504['each'] = $currentVariableContainer->getOrNull('table');
$arguments504['as'] = 'row';
$arguments504['iteration'] = 'rowIteration';
$arguments504['key'] = '';
$arguments504['reverse'] = false;
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output506 = '';

$output506 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments507 = array();
// Rendering Boolean node
$arguments507['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments507['then'] = NULL;
$arguments507['else'] = NULL;
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output509 = '';

$output509 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments510 = array();
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output512 = '';

$output512 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments513 = array();
// Rendering Boolean node
$arguments513['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments513['then'] = NULL;
$arguments513['else'] = NULL;
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output515 = '';

$output515 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments516 = array();
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};

$output515 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output515 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments518 = array();
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output515 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);

$output515 .= '
                        ';
return $output515;
};
$arguments513['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};
$arguments513['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output512 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output512 .= '
                    ';
return $output512;
};

$output509 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output509 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments520 = array();
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output522 = '';

$output522 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments523 = array();
// Rendering Boolean node
$arguments523['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments523['then'] = NULL;
$arguments523['else'] = NULL;
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output525 = '';

$output525 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments526 = array();
// Rendering Boolean node
$arguments526['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments526['then'] = NULL;
$arguments526['else'] = NULL;
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                </tbody>
                                <tfoot>
                            ';
};

$output525 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output525 .= '
                        ';
return $output525;
};

$output522 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output522 .= '
                    ';
return $output522;
};

$output509 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output509 .= '
                ';
return $output509;
};
$arguments507['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output528 = '';

$output528 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments529 = array();
// Rendering Boolean node
$arguments529['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments529['then'] = NULL;
$arguments529['else'] = NULL;
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output531 = '';

$output531 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments532 = array();
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};

$output531 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output531 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments534 = array();
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output531 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output531 .= '
                        ';
return $output531;
};
$arguments529['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <thead>
                            ';
};
$arguments529['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <tbody>
                            ';
};

$output528 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output528 .= '
                    ';
return $output528;
};
$arguments507['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output536 = '';

$output536 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments537 = array();
// Rendering Boolean node
$arguments537['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments537['then'] = NULL;
$arguments537['else'] = NULL;
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output539 = '';

$output539 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments540 = array();
// Rendering Boolean node
$arguments540['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments540['then'] = NULL;
$arguments540['else'] = NULL;
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                </tbody>
                                <tfoot>
                            ';
};

$output539 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output539 .= '
                        ';
return $output539;
};

$output536 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext);

$output536 .= '
                    ';
return $output536;
};

$output506 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output506 .= '
                <tr>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments542 = array();
$arguments542['each'] = $currentVariableContainer->getOrNull('row');
$arguments542['as'] = 'cell';
$arguments542['iteration'] = 'columnIteration';
$arguments542['key'] = '';
$arguments542['reverse'] = false;
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output544 = '';

$output544 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments545 = array();
$arguments545['section'] = 'Cell';
$arguments545['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments545['partial'] = NULL;
$arguments545['optional'] = false;
$renderChildrenClosure546 = function() {return NULL;};

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '
                    ';
return $output544;
};

$output506 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output506 .= '
                </tr>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments547 = array();
// Rendering Boolean node
$arguments547['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments547['then'] = NULL;
$arguments547['else'] = NULL;
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output549 = '';

$output549 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments550 = array();
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output552 = '';

$output552 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments553 = array();
// Rendering Boolean node
$arguments553['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments553['then'] = NULL;
$arguments553['else'] = NULL;
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </thead>
                            <tbody>
                        ';
};

$output552 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output552 .= '
                    ';
return $output552;
};

$output549 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output549 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments555 = array();
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output557 = '';

$output557 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments558 = array();
// Rendering Boolean node
$arguments558['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments558['then'] = NULL;
$arguments558['else'] = NULL;
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output560 = '';

$output560 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments561 = array();
// Rendering Boolean node
$arguments561['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments561['then'] = NULL;
$arguments561['else'] = NULL;
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output563 = '';

$output563 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments564 = array();
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};

$output563 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output563 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments566 = array();
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output563 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output563 .= '
                            ';
return $output563;
};
$arguments561['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};
$arguments561['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output560 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output560 .= '
                        ';
return $output560;
};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output557 .= '
                    ';
return $output557;
};

$output549 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output549 .= '
                ';
return $output549;
};
$arguments547['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output568 = '';

$output568 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments569 = array();
// Rendering Boolean node
$arguments569['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments569['then'] = NULL;
$arguments569['else'] = NULL;
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </thead>
                            <tbody>
                        ';
};

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output568 .= '
                    ';
return $output568;
};
$arguments547['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output571 = '';

$output571 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments572 = array();
// Rendering Boolean node
$arguments572['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isLast', $renderingContext));
$arguments572['then'] = NULL;
$arguments572['else'] = NULL;
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output574 = '';

$output574 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments575 = array();
// Rendering Boolean node
$arguments575['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_tfoot', $renderingContext));
$arguments575['then'] = NULL;
$arguments575['else'] = NULL;
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output577 = '';

$output577 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments578 = array();
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};

$output577 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output577 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments580 = array();
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output577 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output577 .= '
                            ';
return $output577;
};
$arguments575['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tfoot>
                                ';
};
$arguments575['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </tbody>
                                ';
};

$output574 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext);

$output574 .= '
                        ';
return $output574;
};

$output571 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output571 .= '
                    ';
return $output571;
};

$output506 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output506 .= '

            ';
return $output506;
};

$output494 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output494 .= '
        </table>
    ';
return $output494;
};

$output468 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output468 .= '

';
return $output468;
};

$output457 .= '';

$output457 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments582 = array();
$arguments582['name'] = 'Cell';
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output584 = '';

$output584 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments585 = array();
// Rendering Boolean node
$arguments585['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments585['then'] = NULL;
$arguments585['else'] = NULL;
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output587 = '';

$output587 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments588 = array();
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output590 = '';

$output590 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments591 = array();
// Rendering Boolean node
$arguments591['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments591['then'] = NULL;
$arguments591['else'] = NULL;
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output593 = '';

$output593 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments594 = array();
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};

$output593 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output593 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments596 = array();
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output598 = '';

$output598 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments599 = array();
// Rendering Boolean node
$arguments599['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments599['then'] = NULL;
$arguments599['else'] = NULL;
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output601 = '';

$output601 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments602 = array();
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output604 = '';

$output604 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments605 = array();
// Rendering Boolean node
$arguments605['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments605['then'] = NULL;
$arguments605['else'] = NULL;
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output607 = '';

$output607 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments608 = array();
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output607 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output607 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments610 = array();
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output607 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext);

$output607 .= '
                            ';
return $output607;
};
$arguments605['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments605['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output604 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$output604 .= '
                        ';
return $output604;
};

$output601 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output601 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments612 = array();
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output601 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output601 .= '
                    ';
return $output601;
};
$arguments599['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output614 = '';

$output614 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments615 = array();
// Rendering Boolean node
$arguments615['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments615['then'] = NULL;
$arguments615['else'] = NULL;
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output617 = '';

$output617 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments618 = array();
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output617 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output617 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments620 = array();
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output617 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output617 .= '
                            ';
return $output617;
};
$arguments615['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments615['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output614 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);

$output614 .= '
                        ';
return $output614;
};
$arguments599['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output598 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);

$output598 .= '
                ';
return $output598;
};

$output593 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output593 .= '
            ';
return $output593;
};
$arguments591['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};
$arguments591['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output622 = '';

$output622 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments623 = array();
// Rendering Boolean node
$arguments623['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments623['then'] = NULL;
$arguments623['else'] = NULL;
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output625 = '';

$output625 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments626 = array();
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output628 = '';

$output628 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments629 = array();
// Rendering Boolean node
$arguments629['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments629['then'] = NULL;
$arguments629['else'] = NULL;
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output631 = '';

$output631 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments632 = array();
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output631 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext);

$output631 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments634 = array();
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output631 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext);

$output631 .= '
                            ';
return $output631;
};
$arguments629['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments629['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output628 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);

$output628 .= '
                        ';
return $output628;
};

$output625 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext);

$output625 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments636 = array();
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output625 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output625 .= '
                    ';
return $output625;
};
$arguments623['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output638 = '';

$output638 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments639 = array();
// Rendering Boolean node
$arguments639['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments639['then'] = NULL;
$arguments639['else'] = NULL;
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output641 = '';

$output641 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments642 = array();
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output641 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output641 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments644 = array();
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output641 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments644, $renderChildrenClosure645, $renderingContext);

$output641 .= '
                            ';
return $output641;
};
$arguments639['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments639['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output638 .= '
                        ';
return $output638;
};
$arguments623['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output622 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext);

$output622 .= '
                ';
return $output622;
};

$output590 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext);

$output590 .= '
        ';
return $output590;
};

$output587 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext);

$output587 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments646 = array();
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output648 = '';

$output648 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments649 = array();
// Rendering Boolean node
$arguments649['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments649['then'] = NULL;
$arguments649['else'] = NULL;
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output651 = '';

$output651 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments652 = array();
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output654 = '';

$output654 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments655 = array();
// Rendering Boolean node
$arguments655['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments655['then'] = NULL;
$arguments655['else'] = NULL;
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output657 = '';

$output657 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments658 = array();
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output657 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments660 = array();
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output657 .= '
                    ';
return $output657;
};
$arguments655['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments655['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);

$output654 .= '
                ';
return $output654;
};

$output651 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output651 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments662 = array();
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output651 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output651 .= '
            ';
return $output651;
};
$arguments649['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output664 = '';

$output664 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments665 = array();
// Rendering Boolean node
$arguments665['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments665['then'] = NULL;
$arguments665['else'] = NULL;
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output667 = '';

$output667 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments668 = array();
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output667 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output667 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments670 = array();
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output667 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);

$output667 .= '
                    ';
return $output667;
};
$arguments665['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments665['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output664 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$output664 .= '
                ';
return $output664;
};
$arguments649['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output648 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);

$output648 .= '
        ';
return $output648;
};

$output587 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);

$output587 .= '
    ';
return $output587;
};
$arguments585['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output672 = '';

$output672 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments673 = array();
// Rendering Boolean node
$arguments673['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments673['then'] = NULL;
$arguments673['else'] = NULL;
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output675 = '';

$output675 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments676 = array();
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};

$output675 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output675 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments678 = array();
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output680 = '';

$output680 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments681 = array();
// Rendering Boolean node
$arguments681['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments681['then'] = NULL;
$arguments681['else'] = NULL;
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output683 = '';

$output683 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments684 = array();
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output686 = '';

$output686 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments687 = array();
// Rendering Boolean node
$arguments687['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments687['then'] = NULL;
$arguments687['else'] = NULL;
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output689 = '';

$output689 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments690 = array();
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output689 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext);

$output689 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments692 = array();
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output689 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output689 .= '
                            ';
return $output689;
};
$arguments687['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments687['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output686 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output686 .= '
                        ';
return $output686;
};

$output683 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext);

$output683 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments694 = array();
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output683 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments694, $renderChildrenClosure695, $renderingContext);

$output683 .= '
                    ';
return $output683;
};
$arguments681['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output696 = '';

$output696 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments697 = array();
// Rendering Boolean node
$arguments697['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments697['then'] = NULL;
$arguments697['else'] = NULL;
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output699 = '';

$output699 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments700 = array();
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output699 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output699 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments702 = array();
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output699 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output699 .= '
                            ';
return $output699;
};
$arguments697['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments697['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output696 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output696 .= '
                        ';
return $output696;
};
$arguments681['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output680 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);

$output680 .= '
                ';
return $output680;
};

$output675 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext);

$output675 .= '
            ';
return $output675;
};
$arguments673['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <th>
                ';
};
$arguments673['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output704 = '';

$output704 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments705 = array();
// Rendering Boolean node
$arguments705['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments705['then'] = NULL;
$arguments705['else'] = NULL;
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output707 = '';

$output707 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments708 = array();
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output710 = '';

$output710 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments711 = array();
// Rendering Boolean node
$arguments711['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments711['then'] = NULL;
$arguments711['else'] = NULL;
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output713 = '';

$output713 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments714 = array();
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output713 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments714, $renderChildrenClosure715, $renderingContext);

$output713 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments716 = array();
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output713 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output713 .= '
                            ';
return $output713;
};
$arguments711['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments711['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output710 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output710 .= '
                        ';
return $output710;
};

$output707 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$output707 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments718 = array();
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output707 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output707 .= '
                    ';
return $output707;
};
$arguments705['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output720 = '';

$output720 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments721 = array();
// Rendering Boolean node
$arguments721['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments721['then'] = NULL;
$arguments721['else'] = NULL;
$renderChildrenClosure722 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output723 = '';

$output723 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments724 = array();
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};

$output723 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext);

$output723 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments726 = array();
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output723 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);

$output723 .= '
                            ';
return $output723;
};
$arguments721['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <th>
                                ';
};
$arguments721['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <td>
                                ';
};

$output720 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments721, $renderChildrenClosure722, $renderingContext);

$output720 .= '
                        ';
return $output720;
};
$arguments705['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output704 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments705, $renderChildrenClosure706, $renderingContext);

$output704 .= '
                ';
return $output704;
};

$output672 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext);

$output672 .= '
        ';
return $output672;
};
$arguments585['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output728 = '';

$output728 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments729 = array();
// Rendering Boolean node
$arguments729['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments729['then'] = NULL;
$arguments729['else'] = NULL;
$renderChildrenClosure730 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output731 = '';

$output731 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments732 = array();
$renderChildrenClosure733 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output734 = '';

$output734 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments735 = array();
// Rendering Boolean node
$arguments735['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments735['then'] = NULL;
$arguments735['else'] = NULL;
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output737 = '';

$output737 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments738 = array();
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output737 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext);

$output737 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments740 = array();
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output737 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments740, $renderChildrenClosure741, $renderingContext);

$output737 .= '
                    ';
return $output737;
};
$arguments735['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments735['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output734 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output734 .= '
                ';
return $output734;
};

$output731 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments732, $renderChildrenClosure733, $renderingContext);

$output731 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments742 = array();
$renderChildrenClosure743 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output731 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments742, $renderChildrenClosure743, $renderingContext);

$output731 .= '
            ';
return $output731;
};
$arguments729['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output744 = '';

$output744 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments745 = array();
// Rendering Boolean node
$arguments745['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments745['then'] = NULL;
$arguments745['else'] = NULL;
$renderChildrenClosure746 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output747 = '';

$output747 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments748 = array();
$renderChildrenClosure749 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};

$output747 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments748, $renderChildrenClosure749, $renderingContext);

$output747 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments750 = array();
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output747 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext);

$output747 .= '
                    ';
return $output747;
};
$arguments745['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <th>
                        ';
};
$arguments745['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            <td>
                        ';
};

$output744 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments745, $renderChildrenClosure746, $renderingContext);

$output744 .= '
                ';
return $output744;
};
$arguments729['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    <td>
                ';
};

$output728 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments729, $renderChildrenClosure730, $renderingContext);

$output728 .= '
        ';
return $output728;
};

$output584 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext);

$output584 .= '

    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments752 = array();
$arguments752['value'] = NULL;
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments754 = array();
$arguments754['value'] = $currentVariableContainer->getOrNull('cell');
$arguments754['keepQuotes'] = false;
$arguments754['encoding'] = NULL;
$arguments754['doubleEncode'] = true;
$renderChildrenClosure755 = function() {return NULL;};
$value756 = ($arguments754['value'] !== NULL ? $arguments754['value'] : $renderChildrenClosure755());
return (!is_string($value756) ? $value756 : htmlspecialchars($value756, ($arguments754['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments754['encoding'] !== NULL ? $arguments754['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments754['doubleEncode']));
};

$output584 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext);

$output584 .= '</span>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments757 = array();
// Rendering Boolean node
$arguments757['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('rowIteration'), 'isFirst', $renderingContext));
$arguments757['then'] = NULL;
$arguments757['else'] = NULL;
$renderChildrenClosure758 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output759 = '';

$output759 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments760 = array();
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output762 = '';

$output762 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments763 = array();
// Rendering Boolean node
$arguments763['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments763['then'] = NULL;
$arguments763['else'] = NULL;
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output765 = '';

$output765 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments766 = array();
$renderChildrenClosure767 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};

$output765 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments766, $renderChildrenClosure767, $renderingContext);

$output765 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments768 = array();
$renderChildrenClosure769 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output770 = '';

$output770 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments771 = array();
// Rendering Boolean node
$arguments771['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments771['then'] = NULL;
$arguments771['else'] = NULL;
$renderChildrenClosure772 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output773 = '';

$output773 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments774 = array();
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output776 = '';

$output776 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments777 = array();
// Rendering Boolean node
$arguments777['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments777['then'] = NULL;
$arguments777['else'] = NULL;
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output779 = '';

$output779 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments780 = array();
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output779 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext);

$output779 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments782 = array();
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output779 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments782, $renderChildrenClosure783, $renderingContext);

$output779 .= '
                            ';
return $output779;
};
$arguments777['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments777['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output776 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output776 .= '
                        ';
return $output776;
};

$output773 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext);

$output773 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments784 = array();
$renderChildrenClosure785 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output773 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments784, $renderChildrenClosure785, $renderingContext);

$output773 .= '
                    ';
return $output773;
};
$arguments771['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output786 = '';

$output786 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments787 = array();
// Rendering Boolean node
$arguments787['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments787['then'] = NULL;
$arguments787['else'] = NULL;
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output789 = '';

$output789 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments790 = array();
$renderChildrenClosure791 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output789 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments790, $renderChildrenClosure791, $renderingContext);

$output789 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments792 = array();
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output789 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output789 .= '
                            ';
return $output789;
};
$arguments787['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments787['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output786 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output786 .= '
                        ';
return $output786;
};
$arguments771['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output770 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments771, $renderChildrenClosure772, $renderingContext);

$output770 .= '
                ';
return $output770;
};

$output765 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments768, $renderChildrenClosure769, $renderingContext);

$output765 .= '
            ';
return $output765;
};
$arguments763['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};
$arguments763['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output794 = '';

$output794 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments795 = array();
// Rendering Boolean node
$arguments795['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments795['then'] = NULL;
$arguments795['else'] = NULL;
$renderChildrenClosure796 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output797 = '';

$output797 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments798 = array();
$renderChildrenClosure799 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output800 = '';

$output800 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments801 = array();
// Rendering Boolean node
$arguments801['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments801['then'] = NULL;
$arguments801['else'] = NULL;
$renderChildrenClosure802 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output803 = '';

$output803 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments804 = array();
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output803 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);

$output803 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments806 = array();
$renderChildrenClosure807 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output803 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments806, $renderChildrenClosure807, $renderingContext);

$output803 .= '
                            ';
return $output803;
};
$arguments801['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments801['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output800 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments801, $renderChildrenClosure802, $renderingContext);

$output800 .= '
                        ';
return $output800;
};

$output797 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments798, $renderChildrenClosure799, $renderingContext);

$output797 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments808 = array();
$renderChildrenClosure809 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output797 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments808, $renderChildrenClosure809, $renderingContext);

$output797 .= '
                    ';
return $output797;
};
$arguments795['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output810 = '';

$output810 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments811 = array();
// Rendering Boolean node
$arguments811['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments811['then'] = NULL;
$arguments811['else'] = NULL;
$renderChildrenClosure812 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output813 = '';

$output813 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments814 = array();
$renderChildrenClosure815 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output813 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments814, $renderChildrenClosure815, $renderingContext);

$output813 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments816 = array();
$renderChildrenClosure817 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output813 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments816, $renderChildrenClosure817, $renderingContext);

$output813 .= '
                            ';
return $output813;
};
$arguments811['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments811['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output810 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments811, $renderChildrenClosure812, $renderingContext);

$output810 .= '
                        ';
return $output810;
};
$arguments795['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output794 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments795, $renderChildrenClosure796, $renderingContext);

$output794 .= '
                ';
return $output794;
};

$output762 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments763, $renderChildrenClosure764, $renderingContext);

$output762 .= '
        ';
return $output762;
};

$output759 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext);

$output759 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments818 = array();
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output820 = '';

$output820 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments821 = array();
// Rendering Boolean node
$arguments821['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments821['then'] = NULL;
$arguments821['else'] = NULL;
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output823 = '';

$output823 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments824 = array();
$renderChildrenClosure825 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output826 = '';

$output826 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments827 = array();
// Rendering Boolean node
$arguments827['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments827['then'] = NULL;
$arguments827['else'] = NULL;
$renderChildrenClosure828 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output829 = '';

$output829 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments830 = array();
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output829 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments830, $renderChildrenClosure831, $renderingContext);

$output829 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments832 = array();
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output829 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext);

$output829 .= '
                    ';
return $output829;
};
$arguments827['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments827['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output826 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments827, $renderChildrenClosure828, $renderingContext);

$output826 .= '
                ';
return $output826;
};

$output823 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments824, $renderChildrenClosure825, $renderingContext);

$output823 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments834 = array();
$renderChildrenClosure835 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output823 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments834, $renderChildrenClosure835, $renderingContext);

$output823 .= '
            ';
return $output823;
};
$arguments821['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output836 = '';

$output836 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments837 = array();
// Rendering Boolean node
$arguments837['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments837['then'] = NULL;
$arguments837['else'] = NULL;
$renderChildrenClosure838 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output839 = '';

$output839 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments840 = array();
$renderChildrenClosure841 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output839 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments840, $renderChildrenClosure841, $renderingContext);

$output839 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments842 = array();
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output839 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);

$output839 .= '
                    ';
return $output839;
};
$arguments837['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments837['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output836 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments837, $renderChildrenClosure838, $renderingContext);

$output836 .= '
                ';
return $output836;
};
$arguments821['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output820 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments821, $renderChildrenClosure822, $renderingContext);

$output820 .= '
        ';
return $output820;
};

$output759 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments818, $renderChildrenClosure819, $renderingContext);

$output759 .= '
    ';
return $output759;
};
$arguments757['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output844 = '';

$output844 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments845 = array();
// Rendering Boolean node
$arguments845['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 1);
$arguments845['then'] = NULL;
$arguments845['else'] = NULL;
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output847 = '';

$output847 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments848 = array();
$renderChildrenClosure849 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};

$output847 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments848, $renderChildrenClosure849, $renderingContext);

$output847 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments850 = array();
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output852 = '';

$output852 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments853 = array();
// Rendering Boolean node
$arguments853['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments853['then'] = NULL;
$arguments853['else'] = NULL;
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output855 = '';

$output855 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments856 = array();
$renderChildrenClosure857 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output858 = '';

$output858 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments859 = array();
// Rendering Boolean node
$arguments859['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments859['then'] = NULL;
$arguments859['else'] = NULL;
$renderChildrenClosure860 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output861 = '';

$output861 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments862 = array();
$renderChildrenClosure863 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output861 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments862, $renderChildrenClosure863, $renderingContext);

$output861 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments864 = array();
$renderChildrenClosure865 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output861 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments864, $renderChildrenClosure865, $renderingContext);

$output861 .= '
                            ';
return $output861;
};
$arguments859['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments859['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output858 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments859, $renderChildrenClosure860, $renderingContext);

$output858 .= '
                        ';
return $output858;
};

$output855 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments856, $renderChildrenClosure857, $renderingContext);

$output855 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments866 = array();
$renderChildrenClosure867 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output855 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments866, $renderChildrenClosure867, $renderingContext);

$output855 .= '
                    ';
return $output855;
};
$arguments853['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output868 = '';

$output868 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments869 = array();
// Rendering Boolean node
$arguments869['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments869['then'] = NULL;
$arguments869['else'] = NULL;
$renderChildrenClosure870 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output871 = '';

$output871 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments872 = array();
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output871 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments872, $renderChildrenClosure873, $renderingContext);

$output871 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments874 = array();
$renderChildrenClosure875 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output871 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments874, $renderChildrenClosure875, $renderingContext);

$output871 .= '
                            ';
return $output871;
};
$arguments869['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments869['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output868 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments869, $renderChildrenClosure870, $renderingContext);

$output868 .= '
                        ';
return $output868;
};
$arguments853['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output852 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments853, $renderChildrenClosure854, $renderingContext);

$output852 .= '
                ';
return $output852;
};

$output847 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments850, $renderChildrenClosure851, $renderingContext);

$output847 .= '
            ';
return $output847;
};
$arguments845['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </th>
                ';
};
$arguments845['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output876 = '';

$output876 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments877 = array();
// Rendering Boolean node
$arguments877['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments877['then'] = NULL;
$arguments877['else'] = NULL;
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output879 = '';

$output879 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments880 = array();
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output882 = '';

$output882 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments883 = array();
// Rendering Boolean node
$arguments883['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments883['then'] = NULL;
$arguments883['else'] = NULL;
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output885 = '';

$output885 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments886 = array();
$renderChildrenClosure887 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output885 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments886, $renderChildrenClosure887, $renderingContext);

$output885 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments888 = array();
$renderChildrenClosure889 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output885 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments888, $renderChildrenClosure889, $renderingContext);

$output885 .= '
                            ';
return $output885;
};
$arguments883['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments883['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output882 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments883, $renderChildrenClosure884, $renderingContext);

$output882 .= '
                        ';
return $output882;
};

$output879 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext);

$output879 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments890 = array();
$renderChildrenClosure891 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output879 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments890, $renderChildrenClosure891, $renderingContext);

$output879 .= '
                    ';
return $output879;
};
$arguments877['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output892 = '';

$output892 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments893 = array();
// Rendering Boolean node
$arguments893['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments893['then'] = NULL;
$arguments893['else'] = NULL;
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output895 = '';

$output895 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments896 = array();
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};

$output895 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments896, $renderChildrenClosure897, $renderingContext);

$output895 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments898 = array();
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output895 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext);

$output895 .= '
                            ';
return $output895;
};
$arguments893['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </th>
                                ';
};
$arguments893['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    </td>
                                ';
};

$output892 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments893, $renderChildrenClosure894, $renderingContext);

$output892 .= '
                        ';
return $output892;
};
$arguments877['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output876 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);

$output876 .= '
                ';
return $output876;
};

$output844 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output844 .= '
        ';
return $output844;
};
$arguments757['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output900 = '';

$output900 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments901 = array();
// Rendering Boolean node
$arguments901['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('columnIteration'), 'isFirst', $renderingContext));
$arguments901['then'] = NULL;
$arguments901['else'] = NULL;
$renderChildrenClosure902 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output903 = '';

$output903 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments904 = array();
$renderChildrenClosure905 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output906 = '';

$output906 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments907 = array();
// Rendering Boolean node
$arguments907['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments907['then'] = NULL;
$arguments907['else'] = NULL;
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output909 = '';

$output909 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments910 = array();
$renderChildrenClosure911 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output909 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments910, $renderChildrenClosure911, $renderingContext);

$output909 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments912 = array();
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output909 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments912, $renderChildrenClosure913, $renderingContext);

$output909 .= '
                    ';
return $output909;
};
$arguments907['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments907['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output906 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext);

$output906 .= '
                ';
return $output906;
};

$output903 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments904, $renderChildrenClosure905, $renderingContext);

$output903 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments914 = array();
$renderChildrenClosure915 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output903 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments914, $renderChildrenClosure915, $renderingContext);

$output903 .= '
            ';
return $output903;
};
$arguments901['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output916 = '';

$output916 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments917 = array();
// Rendering Boolean node
$arguments917['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'table_header_position', $renderingContext), 2);
$arguments917['then'] = NULL;
$arguments917['else'] = NULL;
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output919 = '';

$output919 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments920 = array();
$renderChildrenClosure921 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};

$output919 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments920, $renderChildrenClosure921, $renderingContext);

$output919 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments922 = array();
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output919 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext);

$output919 .= '
                    ';
return $output919;
};
$arguments917['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </th>
                        ';
};
$arguments917['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                            </td>
                        ';
};

$output916 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);

$output916 .= '
                ';
return $output916;
};
$arguments901['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                    </td>
                ';
};

$output900 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments901, $renderChildrenClosure902, $renderingContext);

$output900 .= '
        ';
return $output900;
};

$output584 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments757, $renderChildrenClosure758, $renderingContext);

$output584 .= '

';
return $output584;
};

$output457 .= '';

$output457 .= '
';


return $output457;
}


}
#1499152013    263743    