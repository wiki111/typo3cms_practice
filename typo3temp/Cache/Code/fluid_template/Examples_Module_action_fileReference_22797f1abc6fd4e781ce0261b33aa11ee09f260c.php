<?php
class FluidCache_Examples_Module_action_fileReference_22797f1abc6fd4e781ce0261b33aa11ee09f260c extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['renderMode'] = NULL;
$arguments1['as'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['queueIdentifier'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'function_fileReference';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '</h1>

	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'function_fileReference_intro';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '</p>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments8 = array();
$arguments8['action'] = 'fileReferenceCreate';
$arguments8['name'] = 'falForm';
$arguments8['method'] = 'post';
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['controller'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['pluginName'] = NULL;
$arguments8['pageUid'] = NULL;
$arguments8['object'] = NULL;
$arguments8['pageType'] = 0;
$arguments8['noCache'] = false;
$arguments8['noCacheHash'] = false;
$arguments8['section'] = '';
$arguments8['format'] = '';
$arguments8['additionalParams'] = array (
);
$arguments8['absolute'] = false;
$arguments8['addQueryString'] = false;
$arguments8['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments8['fieldNamePrefix'] = NULL;
$arguments8['actionUri'] = NULL;
$arguments8['objectName'] = NULL;
$arguments8['hiddenFieldClassName'] = NULL;
$arguments8['addQueryStringMethod'] = '';
$arguments8['enctype'] = NULL;
$arguments8['onreset'] = NULL;
$arguments8['onsubmit'] = NULL;
$arguments8['target'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
		<div class="form-group">
			<label>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['id'] = 'choose_content_element';
$arguments11['key'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
			</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments13 = array();
$arguments13['name'] = 'element';
$arguments13['options'] = $currentVariableContainer->getOrNull('elements');
$arguments13['optionValueField'] = 'uid';
$arguments13['optionLabelField'] = 'header';
$arguments13['prependOptionValue'] = '';
$arguments13['prependOptionLabel'] = '';
$arguments13['class'] = 'form-control';
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['value'] = NULL;
$arguments13['property'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['size'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['sortByOptionLabel'] = false;
$arguments13['selectAllByDefault'] = false;
$arguments13['errorClass'] = 'f3-form-error';
$arguments13['multiple'] = false;
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output10 .= $viewHelper15->initializeArgumentsAndRender();

$output10 .= '
		</div>
		<div class="form-group">
			<label>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['id'] = 'choose_file';
$arguments16['key'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output10 .= '
			</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments18 = array();
$arguments18['name'] = 'file';
$arguments18['options'] = $currentVariableContainer->getOrNull('files');
$arguments18['optionValueField'] = 'uid';
$arguments18['optionLabelField'] = 'name';
$arguments18['prependOptionValue'] = '';
$arguments18['prependOptionLabel'] = '';
$arguments18['class'] = 'form-control';
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['value'] = NULL;
$arguments18['property'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['size'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['sortByOptionLabel'] = false;
$arguments18['selectAllByDefault'] = false;
$arguments18['errorClass'] = 'f3-form-error';
$arguments18['multiple'] = false;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output10 .= $viewHelper20->initializeArgumentsAndRender();

$output10 .= '
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments21 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'create_relation';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$arguments21['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
$arguments21['name'] = 'create';
$arguments21['class'] = 'btn btn-default';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['property'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper25->setArguments($arguments21);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output10 .= $viewHelper25->initializeArgumentsAndRender();

$output10 .= '
	';
return $output10;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper26->setArguments($arguments8);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper26->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('content'));
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
		<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments30 = array();
$arguments30['id'] = 'new_relation_confirmation';
$arguments30['key'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments32 = array();
$arguments32['id'] = 'new_relation';
// Rendering Array
$array33 = array();
$array33['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), 'header', $renderingContext);
$array33['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), 'uid', $renderingContext);
$arguments32['arguments'] = $array33;
$arguments32['key'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['extensionName'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure34, $renderingContext);

$output29 .= '
		</p>
		<ul>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments35 = array();
$arguments35['each'] = $currentVariableContainer->getOrNull('references');
$arguments35['as'] = 'file';
$arguments35['key'] = '';
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
				<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('file'), 'identifier', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));

$output37 .= '</li>
			';
return $output37;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output29 .= '
		</ul>
	';
return $output29;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '

';


return $output0;
}


}
#1499177416    14369     