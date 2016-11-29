<?php
class FluidCache_News_News_partial_List_Item_f468789d854bfae50eadf03316105db825401573 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

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

$output0 .= '<!--
	=====================
		Partials/List/Item.html DDD
-->
<div class="col-lg-3 col-md-6 col-sm-6 animate-box -';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'type', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'istopnews', $renderingContext));
$arguments4['then'] = ' topnews';
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$arguments6 = array();
$arguments6['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper

$output0 .= $viewHelper8->initializeArgumentsAndRender();

$output0 .= '
	<!-- header -->
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments9 = array();
$arguments9['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments9['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments9['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments9['class'] = 'fh5co-card';
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['uriOnly'] = false;
$arguments9['configuration'] = array (
);
$arguments9['content'] = '';
$arguments9['section'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments12 = array();
// Rendering Boolean node
$arguments12['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMedia', $renderingContext));
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
				<!-- fal media preview element -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments15 = array();
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments18 = array();
// Rendering Boolean node
$arguments18['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews', $renderingContext));
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments21 = array();
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments24 = array();
$arguments24['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments24['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments24['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['uriOnly'] = false;
$arguments24['configuration'] = array (
);
$arguments24['content'] = '';
$arguments24['section'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments27 = array();
// Rendering Array
$array28 = array();
$array28['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments27['map'] = $array28;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments34 = array();
$arguments34['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments34['class'] = 'img-responsive TEST';
$arguments34['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments34['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$output35 = '';

$output35 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);

$output35 .= 'c';
$arguments34['width'] = $output35;
$output36 = '';

$output36 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);

$output36 .= 'c';
$arguments34['height'] = $output36;
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['src'] = NULL;
$arguments34['minWidth'] = NULL;
$arguments34['minHeight'] = NULL;
$arguments34['maxWidth'] = NULL;
$arguments34['maxHeight'] = NULL;
$arguments34['treatIdAsReference'] = false;
$arguments34['crop'] = NULL;
$arguments34['absolute'] = false;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['ismap'] = NULL;
$arguments34['longdesc'] = NULL;
$arguments34['usemap'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper38->setArguments($arguments34);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output33 .= $viewHelper38->initializeArgumentsAndRender();

$output33 .= '
									';
return $output33;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
$arguments39['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments42 = array();
$arguments42['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array43 = array();
$array43['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments42['arguments'] = $array43;
$arguments42['section'] = NULL;
$arguments42['optional'] = false;
$renderChildrenClosure44 = function() {return NULL;};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure44, $renderingContext);

$output41 .= '
									';
return $output41;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output30 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments45 = array();
// Rendering Boolean node
$arguments45['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments48 = array();
$arguments48['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments48['class'] = 'img-responsive';
$arguments48['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments48['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments48['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments48['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['src'] = NULL;
$arguments48['width'] = NULL;
$arguments48['height'] = NULL;
$arguments48['minWidth'] = NULL;
$arguments48['minHeight'] = NULL;
$arguments48['treatIdAsReference'] = false;
$arguments48['crop'] = NULL;
$arguments48['absolute'] = false;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['ismap'] = NULL;
$arguments48['longdesc'] = NULL;
$arguments48['usemap'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output47 .= $viewHelper50->initializeArgumentsAndRender();

$output47 .= '
									';
return $output47;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output30 .= '
								';
return $output30;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments27, $renderChildrenClosure29, $renderingContext);

$output26 .= '
							';
return $output26;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper51->setArguments($arguments24);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output23 .= $viewHelper51->initializeArgumentsAndRender();

$output23 .= '
						';
return $output23;
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments52 = array();
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments55 = array();
// Rendering Boolean node
$arguments55['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments58 = array();
$arguments58['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments58['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments58['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['uriOnly'] = false;
$arguments58['configuration'] = array (
);
$arguments58['content'] = '';
$arguments58['section'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments61 = array();
$arguments61['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments61['class'] = 'img-responsive';
$arguments61['title'] = '';
$arguments61['alt'] = '';
$arguments61['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments61['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['width'] = NULL;
$arguments61['height'] = NULL;
$arguments61['minWidth'] = NULL;
$arguments61['minHeight'] = NULL;
$arguments61['treatIdAsReference'] = false;
$arguments61['image'] = NULL;
$arguments61['crop'] = NULL;
$arguments61['absolute'] = false;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['ismap'] = NULL;
$arguments61['longdesc'] = NULL;
$arguments61['usemap'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output60 .= $viewHelper63->initializeArgumentsAndRender();

$output60 .= '
								';
return $output60;
};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper64->setArguments($arguments58);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output57 .= $viewHelper64->initializeArgumentsAndRender();

$output57 .= '
							';
return $output57;
};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
						';
return $output54;
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output20 .= '
					';
return $output20;
};
$arguments18['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments66 = array();
$arguments66['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments66['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments66['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['uriOnly'] = false;
$arguments66['configuration'] = array (
);
$arguments66['content'] = '';
$arguments66['section'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments69 = array();
// Rendering Array
$array70 = array();
$array70['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments69['map'] = $array70;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments73 = array();
// Rendering Boolean node
$arguments73['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments76 = array();
$arguments76['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments76['class'] = 'img-responsive TEST';
$arguments76['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments76['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$output77 = '';

$output77 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);

$output77 .= 'c';
$arguments76['width'] = $output77;
$output78 = '';

$output78 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);

$output78 .= 'c';
$arguments76['height'] = $output78;
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['src'] = NULL;
$arguments76['minWidth'] = NULL;
$arguments76['minHeight'] = NULL;
$arguments76['maxWidth'] = NULL;
$arguments76['maxHeight'] = NULL;
$arguments76['treatIdAsReference'] = false;
$arguments76['crop'] = NULL;
$arguments76['absolute'] = false;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['ismap'] = NULL;
$arguments76['longdesc'] = NULL;
$arguments76['usemap'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper80->setArguments($arguments76);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output75 .= $viewHelper80->initializeArgumentsAndRender();

$output75 .= '
									';
return $output75;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments81 = array();
// Rendering Boolean node
$arguments81['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments84 = array();
$arguments84['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array85 = array();
$array85['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments84['arguments'] = $array85;
$arguments84['section'] = NULL;
$arguments84['optional'] = false;
$renderChildrenClosure86 = function() {return NULL;};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure86, $renderingContext);

$output83 .= '
									';
return $output83;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output72 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments90 = array();
$arguments90['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments90['class'] = 'img-responsive';
$arguments90['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments90['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments90['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments90['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['src'] = NULL;
$arguments90['width'] = NULL;
$arguments90['height'] = NULL;
$arguments90['minWidth'] = NULL;
$arguments90['minHeight'] = NULL;
$arguments90['treatIdAsReference'] = false;
$arguments90['crop'] = NULL;
$arguments90['absolute'] = false;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['ismap'] = NULL;
$arguments90['longdesc'] = NULL;
$arguments90['usemap'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output89 .= $viewHelper92->initializeArgumentsAndRender();

$output89 .= '
									';
return $output89;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output72 .= '
								';
return $output72;
};

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments69, $renderChildrenClosure71, $renderingContext);

$output68 .= '
							';
return $output68;
};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper93->setArguments($arguments66);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output65 .= $viewHelper93->initializeArgumentsAndRender();

$output65 .= '
						';
return $output65;
};
$arguments18['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments95 = array();
// Rendering Boolean node
$arguments95['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments98 = array();
$arguments98['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments98['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments98['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['uriOnly'] = false;
$arguments98['configuration'] = array (
);
$arguments98['content'] = '';
$arguments98['section'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments101 = array();
$arguments101['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments101['class'] = 'img-responsive';
$arguments101['title'] = '';
$arguments101['alt'] = '';
$arguments101['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments101['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['width'] = NULL;
$arguments101['height'] = NULL;
$arguments101['minWidth'] = NULL;
$arguments101['minHeight'] = NULL;
$arguments101['treatIdAsReference'] = false;
$arguments101['image'] = NULL;
$arguments101['crop'] = NULL;
$arguments101['absolute'] = false;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['ismap'] = NULL;
$arguments101['longdesc'] = NULL;
$arguments101['usemap'] = NULL;
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output100 .= $viewHelper103->initializeArgumentsAndRender();

$output100 .= '
								';
return $output100;
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper104->setArguments($arguments98);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output97 .= $viewHelper104->initializeArgumentsAndRender();

$output97 .= '
							';
return $output97;
};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
						';
return $output94;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
				';
return $output17;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments105 = array();
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments108 = array();
// Rendering Boolean node
$arguments108['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext));
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
						<!-- media preview element -->
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments111 = array();
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments114 = array();
// Rendering Boolean node
$arguments114['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments117 = array();
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments120 = array();
$arguments120['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments120['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments120['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['uriOnly'] = false;
$arguments120['configuration'] = array (
);
$arguments120['content'] = '';
$arguments120['section'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments123 = array();
// Rendering Array
$array124 = array();
$array124['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments123['map'] = $array124;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments127 = array();
// Rendering Boolean node
$arguments127['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments130 = array();
$output131 = '';

$output131 .= 'uploads/tx_news/';

$output131 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments130['src'] = $output131;
$arguments130['class'] = 'img-responsive';
$arguments130['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments130['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments130['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments130['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['width'] = NULL;
$arguments130['height'] = NULL;
$arguments130['minWidth'] = NULL;
$arguments130['minHeight'] = NULL;
$arguments130['treatIdAsReference'] = false;
$arguments130['image'] = NULL;
$arguments130['crop'] = NULL;
$arguments130['absolute'] = false;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['ismap'] = NULL;
$arguments130['longdesc'] = NULL;
$arguments130['usemap'] = NULL;
$renderChildrenClosure132 = function() {return NULL;};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper133->setArguments($arguments130);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output129 .= $viewHelper133->initializeArgumentsAndRender();

$output129 .= '
											';
return $output129;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments134 = array();
// Rendering Boolean node
$arguments134['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments137 = array();
$arguments137['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array138 = array();
$array138['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments137['arguments'] = $array138;
$arguments137['section'] = NULL;
$arguments137['optional'] = false;
$renderChildrenClosure139 = function() {return NULL;};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments137, $renderChildrenClosure139, $renderingContext);

$output136 .= '
											';
return $output136;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output126 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments140 = array();
// Rendering Boolean node
$arguments140['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments143 = array();
$arguments143['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array144 = array();
$array144['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments143['arguments'] = $array144;
$arguments143['section'] = NULL;
$arguments143['optional'] = false;
$renderChildrenClosure145 = function() {return NULL;};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure145, $renderingContext);

$output142 .= '
											';
return $output142;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output126 .= '
										';
return $output126;
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments123, $renderChildrenClosure125, $renderingContext);

$output122 .= '
									';
return $output122;
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper146->setArguments($arguments120);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output119 .= $viewHelper146->initializeArgumentsAndRender();

$output119 .= '
								';
return $output119;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments147 = array();
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output149 = '';

$output149 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments150 = array();
// Rendering Boolean node
$arguments150['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments153 = array();
$arguments153['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments153['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments153['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments153['additionalAttributes'] = NULL;
$arguments153['data'] = NULL;
$arguments153['class'] = NULL;
$arguments153['dir'] = NULL;
$arguments153['id'] = NULL;
$arguments153['lang'] = NULL;
$arguments153['style'] = NULL;
$arguments153['accesskey'] = NULL;
$arguments153['tabindex'] = NULL;
$arguments153['onclick'] = NULL;
$arguments153['uriOnly'] = false;
$arguments153['configuration'] = array (
);
$arguments153['content'] = '';
$arguments153['section'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments156 = array();
$arguments156['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments156['class'] = 'img-responsive';
$arguments156['title'] = '';
$arguments156['alt'] = '';
$arguments156['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments156['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['width'] = NULL;
$arguments156['height'] = NULL;
$arguments156['minWidth'] = NULL;
$arguments156['minHeight'] = NULL;
$arguments156['treatIdAsReference'] = false;
$arguments156['image'] = NULL;
$arguments156['crop'] = NULL;
$arguments156['absolute'] = false;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['ismap'] = NULL;
$arguments156['longdesc'] = NULL;
$arguments156['usemap'] = NULL;
$renderChildrenClosure157 = function() {return NULL;};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper158->setArguments($arguments156);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output155 .= $viewHelper158->initializeArgumentsAndRender();

$output155 .= '
										';
return $output155;
};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper159->setArguments($arguments153);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure154);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output152 .= $viewHelper159->initializeArgumentsAndRender();

$output152 .= '
									';
return $output152;
};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
								';
return $output149;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output116 .= '
							';
return $output116;
};
$arguments114['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output160 = '';

$output160 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments161 = array();
$arguments161['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments161['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments161['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['uriOnly'] = false;
$arguments161['configuration'] = array (
);
$arguments161['content'] = '';
$arguments161['section'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments164 = array();
// Rendering Array
$array165 = array();
$array165['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments164['map'] = $array165;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments168 = array();
// Rendering Boolean node
$arguments168['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments171 = array();
$output172 = '';

$output172 .= 'uploads/tx_news/';

$output172 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments171['src'] = $output172;
$arguments171['class'] = 'img-responsive';
$arguments171['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments171['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments171['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments171['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['width'] = NULL;
$arguments171['height'] = NULL;
$arguments171['minWidth'] = NULL;
$arguments171['minHeight'] = NULL;
$arguments171['treatIdAsReference'] = false;
$arguments171['image'] = NULL;
$arguments171['crop'] = NULL;
$arguments171['absolute'] = false;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['ismap'] = NULL;
$arguments171['longdesc'] = NULL;
$arguments171['usemap'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper174->setArguments($arguments171);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure173);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output170 .= $viewHelper174->initializeArgumentsAndRender();

$output170 .= '
											';
return $output170;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments175 = array();
// Rendering Boolean node
$arguments175['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments178 = array();
$arguments178['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array179 = array();
$array179['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments178['arguments'] = $array179;
$arguments178['section'] = NULL;
$arguments178['optional'] = false;
$renderChildrenClosure180 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments178, $renderChildrenClosure180, $renderingContext);

$output177 .= '
											';
return $output177;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output167 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments181 = array();
// Rendering Boolean node
$arguments181['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output183 = '';

$output183 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments184 = array();
$arguments184['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array185 = array();
$array185['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments184['arguments'] = $array185;
$arguments184['section'] = NULL;
$arguments184['optional'] = false;
$renderChildrenClosure186 = function() {return NULL;};

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments184, $renderChildrenClosure186, $renderingContext);

$output183 .= '
											';
return $output183;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output167 .= '
										';
return $output167;
};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments164, $renderChildrenClosure166, $renderingContext);

$output163 .= '
									';
return $output163;
};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper187->setArguments($arguments161);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output160 .= $viewHelper187->initializeArgumentsAndRender();

$output160 .= '
								';
return $output160;
};
$arguments114['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output188 = '';

$output188 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments189 = array();
// Rendering Boolean node
$arguments189['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output191 = '';

$output191 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments192 = array();
$arguments192['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments192['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments192['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['uriOnly'] = false;
$arguments192['configuration'] = array (
);
$arguments192['content'] = '';
$arguments192['section'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output194 = '';

$output194 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments195 = array();
$arguments195['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments195['class'] = 'img-responsive';
$arguments195['title'] = '';
$arguments195['alt'] = '';
$arguments195['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments195['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments195['additionalAttributes'] = NULL;
$arguments195['data'] = NULL;
$arguments195['width'] = NULL;
$arguments195['height'] = NULL;
$arguments195['minWidth'] = NULL;
$arguments195['minHeight'] = NULL;
$arguments195['treatIdAsReference'] = false;
$arguments195['image'] = NULL;
$arguments195['crop'] = NULL;
$arguments195['absolute'] = false;
$arguments195['dir'] = NULL;
$arguments195['id'] = NULL;
$arguments195['lang'] = NULL;
$arguments195['style'] = NULL;
$arguments195['accesskey'] = NULL;
$arguments195['tabindex'] = NULL;
$arguments195['onclick'] = NULL;
$arguments195['ismap'] = NULL;
$arguments195['longdesc'] = NULL;
$arguments195['usemap'] = NULL;
$renderChildrenClosure196 = function() {return NULL;};
$viewHelper197 = $self->getViewHelper('$viewHelper197', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper197->setArguments($arguments195);
$viewHelper197->setRenderingContext($renderingContext);
$viewHelper197->setRenderChildrenClosure($renderChildrenClosure196);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output194 .= $viewHelper197->initializeArgumentsAndRender();

$output194 .= '
										';
return $output194;
};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper198->setArguments($arguments192);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output191 .= $viewHelper198->initializeArgumentsAndRender();

$output191 .= '
									';
return $output191;
};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
								';
return $output188;
};

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
						';
return $output113;
};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments199 = array();
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments202 = array();
// Rendering Boolean node
$arguments202['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output204 = '';

$output204 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments205 = array();
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output207 = '';

$output207 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments208 = array();
$arguments208['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments208['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments208['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['uriOnly'] = false;
$arguments208['configuration'] = array (
);
$arguments208['content'] = '';
$arguments208['section'] = NULL;
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output210 = '';

$output210 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments211 = array();
$arguments211['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments211['title'] = '';
$arguments211['alt'] = '';
$arguments211['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments211['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments211['additionalAttributes'] = NULL;
$arguments211['data'] = NULL;
$arguments211['width'] = NULL;
$arguments211['height'] = NULL;
$arguments211['minWidth'] = NULL;
$arguments211['minHeight'] = NULL;
$arguments211['treatIdAsReference'] = false;
$arguments211['image'] = NULL;
$arguments211['crop'] = NULL;
$arguments211['absolute'] = false;
$arguments211['class'] = NULL;
$arguments211['dir'] = NULL;
$arguments211['id'] = NULL;
$arguments211['lang'] = NULL;
$arguments211['style'] = NULL;
$arguments211['accesskey'] = NULL;
$arguments211['tabindex'] = NULL;
$arguments211['onclick'] = NULL;
$arguments211['ismap'] = NULL;
$arguments211['longdesc'] = NULL;
$arguments211['usemap'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};
$viewHelper213 = $self->getViewHelper('$viewHelper213', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper213->setArguments($arguments211);
$viewHelper213->setRenderingContext($renderingContext);
$viewHelper213->setRenderChildrenClosure($renderChildrenClosure212);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output210 .= $viewHelper213->initializeArgumentsAndRender();

$output210 .= '
										</span>
									';
return $output210;
};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper214->setArguments($arguments208);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output207 .= $viewHelper214->initializeArgumentsAndRender();

$output207 .= '
								';
return $output207;
};

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
							';
return $output204;
};
$arguments202['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output215 = '';

$output215 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments216 = array();
$arguments216['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments216['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments216['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments216['additionalAttributes'] = NULL;
$arguments216['data'] = NULL;
$arguments216['class'] = NULL;
$arguments216['dir'] = NULL;
$arguments216['id'] = NULL;
$arguments216['lang'] = NULL;
$arguments216['style'] = NULL;
$arguments216['accesskey'] = NULL;
$arguments216['tabindex'] = NULL;
$arguments216['onclick'] = NULL;
$arguments216['uriOnly'] = false;
$arguments216['configuration'] = array (
);
$arguments216['content'] = '';
$arguments216['section'] = NULL;
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output218 = '';

$output218 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments219 = array();
$arguments219['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments219['title'] = '';
$arguments219['alt'] = '';
$arguments219['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments219['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments219['additionalAttributes'] = NULL;
$arguments219['data'] = NULL;
$arguments219['width'] = NULL;
$arguments219['height'] = NULL;
$arguments219['minWidth'] = NULL;
$arguments219['minHeight'] = NULL;
$arguments219['treatIdAsReference'] = false;
$arguments219['image'] = NULL;
$arguments219['crop'] = NULL;
$arguments219['absolute'] = false;
$arguments219['class'] = NULL;
$arguments219['dir'] = NULL;
$arguments219['id'] = NULL;
$arguments219['lang'] = NULL;
$arguments219['style'] = NULL;
$arguments219['accesskey'] = NULL;
$arguments219['tabindex'] = NULL;
$arguments219['onclick'] = NULL;
$arguments219['ismap'] = NULL;
$arguments219['longdesc'] = NULL;
$arguments219['usemap'] = NULL;
$renderChildrenClosure220 = function() {return NULL;};
$viewHelper221 = $self->getViewHelper('$viewHelper221', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper221->setArguments($arguments219);
$viewHelper221->setRenderingContext($renderingContext);
$viewHelper221->setRenderChildrenClosure($renderChildrenClosure220);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output218 .= $viewHelper221->initializeArgumentsAndRender();

$output218 .= '
										</span>
									';
return $output218;
};
$viewHelper222 = $self->getViewHelper('$viewHelper222', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper222->setArguments($arguments216);
$viewHelper222->setRenderingContext($renderingContext);
$viewHelper222->setRenderChildrenClosure($renderChildrenClosure217);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output215 .= $viewHelper222->initializeArgumentsAndRender();

$output215 .= '
								';
return $output215;
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
						';
return $output201;
};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output110 .= '
					';
return $output110;
};
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output223 = '';

$output223 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments224 = array();
// Rendering Boolean node
$arguments224['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments227 = array();
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output229 = '';

$output229 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments230 = array();
$arguments230['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments230['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments230['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments230['additionalAttributes'] = NULL;
$arguments230['data'] = NULL;
$arguments230['class'] = NULL;
$arguments230['dir'] = NULL;
$arguments230['id'] = NULL;
$arguments230['lang'] = NULL;
$arguments230['style'] = NULL;
$arguments230['accesskey'] = NULL;
$arguments230['tabindex'] = NULL;
$arguments230['onclick'] = NULL;
$arguments230['uriOnly'] = false;
$arguments230['configuration'] = array (
);
$arguments230['content'] = '';
$arguments230['section'] = NULL;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output232 = '';

$output232 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments233 = array();
// Rendering Array
$array234 = array();
$array234['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments233['map'] = $array234;
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output236 = '';

$output236 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments237 = array();
// Rendering Boolean node
$arguments237['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output239 = '';

$output239 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments240 = array();
$output241 = '';

$output241 .= 'uploads/tx_news/';

$output241 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments240['src'] = $output241;
$arguments240['class'] = 'img-responsive';
$arguments240['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments240['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments240['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments240['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['width'] = NULL;
$arguments240['height'] = NULL;
$arguments240['minWidth'] = NULL;
$arguments240['minHeight'] = NULL;
$arguments240['treatIdAsReference'] = false;
$arguments240['image'] = NULL;
$arguments240['crop'] = NULL;
$arguments240['absolute'] = false;
$arguments240['dir'] = NULL;
$arguments240['id'] = NULL;
$arguments240['lang'] = NULL;
$arguments240['style'] = NULL;
$arguments240['accesskey'] = NULL;
$arguments240['tabindex'] = NULL;
$arguments240['onclick'] = NULL;
$arguments240['ismap'] = NULL;
$arguments240['longdesc'] = NULL;
$arguments240['usemap'] = NULL;
$renderChildrenClosure242 = function() {return NULL;};
$viewHelper243 = $self->getViewHelper('$viewHelper243', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper243->setArguments($arguments240);
$viewHelper243->setRenderingContext($renderingContext);
$viewHelper243->setRenderChildrenClosure($renderChildrenClosure242);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output239 .= $viewHelper243->initializeArgumentsAndRender();

$output239 .= '
											';
return $output239;
};

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments244 = array();
// Rendering Boolean node
$arguments244['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments247 = array();
$arguments247['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array248 = array();
$array248['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments247['arguments'] = $array248;
$arguments247['section'] = NULL;
$arguments247['optional'] = false;
$renderChildrenClosure249 = function() {return NULL;};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure249, $renderingContext);

$output246 .= '
											';
return $output246;
};

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output236 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments250 = array();
// Rendering Boolean node
$arguments250['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output252 = '';

$output252 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments253 = array();
$arguments253['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array254 = array();
$array254['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments253['arguments'] = $array254;
$arguments253['section'] = NULL;
$arguments253['optional'] = false;
$renderChildrenClosure255 = function() {return NULL;};

$output252 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments253, $renderChildrenClosure255, $renderingContext);

$output252 .= '
											';
return $output252;
};

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output236 .= '
										';
return $output236;
};

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments233, $renderChildrenClosure235, $renderingContext);

$output232 .= '
									';
return $output232;
};
$viewHelper256 = $self->getViewHelper('$viewHelper256', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper256->setArguments($arguments230);
$viewHelper256->setRenderingContext($renderingContext);
$viewHelper256->setRenderChildrenClosure($renderChildrenClosure231);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output229 .= $viewHelper256->initializeArgumentsAndRender();

$output229 .= '
								';
return $output229;
};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments257 = array();
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments260 = array();
// Rendering Boolean node
$arguments260['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output262 = '';

$output262 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments263 = array();
$arguments263['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments263['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments263['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments263['additionalAttributes'] = NULL;
$arguments263['data'] = NULL;
$arguments263['class'] = NULL;
$arguments263['dir'] = NULL;
$arguments263['id'] = NULL;
$arguments263['lang'] = NULL;
$arguments263['style'] = NULL;
$arguments263['accesskey'] = NULL;
$arguments263['tabindex'] = NULL;
$arguments263['onclick'] = NULL;
$arguments263['uriOnly'] = false;
$arguments263['configuration'] = array (
);
$arguments263['content'] = '';
$arguments263['section'] = NULL;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output265 = '';

$output265 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments266 = array();
$arguments266['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments266['class'] = 'img-responsive';
$arguments266['title'] = '';
$arguments266['alt'] = '';
$arguments266['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments266['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments266['additionalAttributes'] = NULL;
$arguments266['data'] = NULL;
$arguments266['width'] = NULL;
$arguments266['height'] = NULL;
$arguments266['minWidth'] = NULL;
$arguments266['minHeight'] = NULL;
$arguments266['treatIdAsReference'] = false;
$arguments266['image'] = NULL;
$arguments266['crop'] = NULL;
$arguments266['absolute'] = false;
$arguments266['dir'] = NULL;
$arguments266['id'] = NULL;
$arguments266['lang'] = NULL;
$arguments266['style'] = NULL;
$arguments266['accesskey'] = NULL;
$arguments266['tabindex'] = NULL;
$arguments266['onclick'] = NULL;
$arguments266['ismap'] = NULL;
$arguments266['longdesc'] = NULL;
$arguments266['usemap'] = NULL;
$renderChildrenClosure267 = function() {return NULL;};
$viewHelper268 = $self->getViewHelper('$viewHelper268', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper268->setArguments($arguments266);
$viewHelper268->setRenderingContext($renderingContext);
$viewHelper268->setRenderChildrenClosure($renderChildrenClosure267);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output265 .= $viewHelper268->initializeArgumentsAndRender();

$output265 .= '
										';
return $output265;
};
$viewHelper269 = $self->getViewHelper('$viewHelper269', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper269->setArguments($arguments263);
$viewHelper269->setRenderingContext($renderingContext);
$viewHelper269->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output262 .= $viewHelper269->initializeArgumentsAndRender();

$output262 .= '
									';
return $output262;
};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
								';
return $output259;
};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output226 .= '
							';
return $output226;
};
$arguments224['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output270 = '';

$output270 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments271 = array();
$arguments271['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments271['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments271['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments271['additionalAttributes'] = NULL;
$arguments271['data'] = NULL;
$arguments271['class'] = NULL;
$arguments271['dir'] = NULL;
$arguments271['id'] = NULL;
$arguments271['lang'] = NULL;
$arguments271['style'] = NULL;
$arguments271['accesskey'] = NULL;
$arguments271['tabindex'] = NULL;
$arguments271['onclick'] = NULL;
$arguments271['uriOnly'] = false;
$arguments271['configuration'] = array (
);
$arguments271['content'] = '';
$arguments271['section'] = NULL;
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output273 = '';

$output273 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments274 = array();
// Rendering Array
$array275 = array();
$array275['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments274['map'] = $array275;
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output277 = '';

$output277 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments278 = array();
// Rendering Boolean node
$arguments278['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output280 = '';

$output280 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments281 = array();
$output282 = '';

$output282 .= 'uploads/tx_news/';

$output282 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments281['src'] = $output282;
$arguments281['class'] = 'img-responsive';
$arguments281['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments281['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments281['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments281['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments281['additionalAttributes'] = NULL;
$arguments281['data'] = NULL;
$arguments281['width'] = NULL;
$arguments281['height'] = NULL;
$arguments281['minWidth'] = NULL;
$arguments281['minHeight'] = NULL;
$arguments281['treatIdAsReference'] = false;
$arguments281['image'] = NULL;
$arguments281['crop'] = NULL;
$arguments281['absolute'] = false;
$arguments281['dir'] = NULL;
$arguments281['id'] = NULL;
$arguments281['lang'] = NULL;
$arguments281['style'] = NULL;
$arguments281['accesskey'] = NULL;
$arguments281['tabindex'] = NULL;
$arguments281['onclick'] = NULL;
$arguments281['ismap'] = NULL;
$arguments281['longdesc'] = NULL;
$arguments281['usemap'] = NULL;
$renderChildrenClosure283 = function() {return NULL;};
$viewHelper284 = $self->getViewHelper('$viewHelper284', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper284->setArguments($arguments281);
$viewHelper284->setRenderingContext($renderingContext);
$viewHelper284->setRenderChildrenClosure($renderChildrenClosure283);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output280 .= $viewHelper284->initializeArgumentsAndRender();

$output280 .= '
											';
return $output280;
};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments285 = array();
// Rendering Boolean node
$arguments285['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output287 = '';

$output287 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments288 = array();
$arguments288['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array289 = array();
$array289['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments288['arguments'] = $array289;
$arguments288['section'] = NULL;
$arguments288['optional'] = false;
$renderChildrenClosure290 = function() {return NULL;};

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments288, $renderChildrenClosure290, $renderingContext);

$output287 .= '
											';
return $output287;
};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output277 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments291 = array();
// Rendering Boolean node
$arguments291['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output293 = '';

$output293 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments294 = array();
$arguments294['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array295 = array();
$array295['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments294['arguments'] = $array295;
$arguments294['section'] = NULL;
$arguments294['optional'] = false;
$renderChildrenClosure296 = function() {return NULL;};

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments294, $renderChildrenClosure296, $renderingContext);

$output293 .= '
											';
return $output293;
};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output277 .= '
										';
return $output277;
};

$output273 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments274, $renderChildrenClosure276, $renderingContext);

$output273 .= '
									';
return $output273;
};
$viewHelper297 = $self->getViewHelper('$viewHelper297', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper297->setArguments($arguments271);
$viewHelper297->setRenderingContext($renderingContext);
$viewHelper297->setRenderChildrenClosure($renderChildrenClosure272);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output270 .= $viewHelper297->initializeArgumentsAndRender();

$output270 .= '
								';
return $output270;
};
$arguments224['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output298 = '';

$output298 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments299 = array();
// Rendering Boolean node
$arguments299['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output301 = '';

$output301 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments302 = array();
$arguments302['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments302['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments302['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments302['additionalAttributes'] = NULL;
$arguments302['data'] = NULL;
$arguments302['class'] = NULL;
$arguments302['dir'] = NULL;
$arguments302['id'] = NULL;
$arguments302['lang'] = NULL;
$arguments302['style'] = NULL;
$arguments302['accesskey'] = NULL;
$arguments302['tabindex'] = NULL;
$arguments302['onclick'] = NULL;
$arguments302['uriOnly'] = false;
$arguments302['configuration'] = array (
);
$arguments302['content'] = '';
$arguments302['section'] = NULL;
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output304 = '';

$output304 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments305 = array();
$arguments305['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments305['class'] = 'img-responsive';
$arguments305['title'] = '';
$arguments305['alt'] = '';
$arguments305['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments305['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments305['additionalAttributes'] = NULL;
$arguments305['data'] = NULL;
$arguments305['width'] = NULL;
$arguments305['height'] = NULL;
$arguments305['minWidth'] = NULL;
$arguments305['minHeight'] = NULL;
$arguments305['treatIdAsReference'] = false;
$arguments305['image'] = NULL;
$arguments305['crop'] = NULL;
$arguments305['absolute'] = false;
$arguments305['dir'] = NULL;
$arguments305['id'] = NULL;
$arguments305['lang'] = NULL;
$arguments305['style'] = NULL;
$arguments305['accesskey'] = NULL;
$arguments305['tabindex'] = NULL;
$arguments305['onclick'] = NULL;
$arguments305['ismap'] = NULL;
$arguments305['longdesc'] = NULL;
$arguments305['usemap'] = NULL;
$renderChildrenClosure306 = function() {return NULL;};
$viewHelper307 = $self->getViewHelper('$viewHelper307', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper307->setArguments($arguments305);
$viewHelper307->setRenderingContext($renderingContext);
$viewHelper307->setRenderChildrenClosure($renderChildrenClosure306);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output304 .= $viewHelper307->initializeArgumentsAndRender();

$output304 .= '
										';
return $output304;
};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper308->setArguments($arguments302);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure303);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output301 .= $viewHelper308->initializeArgumentsAndRender();

$output301 .= '
									';
return $output301;
};

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
								';
return $output298;
};

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
						';
return $output223;
};
$arguments108['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output309 = '';

$output309 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments310 = array();
// Rendering Boolean node
$arguments310['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
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
$output315 = '';

$output315 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments316 = array();
$arguments316['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments316['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments316['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments316['additionalAttributes'] = NULL;
$arguments316['data'] = NULL;
$arguments316['class'] = NULL;
$arguments316['dir'] = NULL;
$arguments316['id'] = NULL;
$arguments316['lang'] = NULL;
$arguments316['style'] = NULL;
$arguments316['accesskey'] = NULL;
$arguments316['tabindex'] = NULL;
$arguments316['onclick'] = NULL;
$arguments316['uriOnly'] = false;
$arguments316['configuration'] = array (
);
$arguments316['content'] = '';
$arguments316['section'] = NULL;
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output318 = '';

$output318 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments319 = array();
$arguments319['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments319['title'] = '';
$arguments319['alt'] = '';
$arguments319['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments319['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments319['additionalAttributes'] = NULL;
$arguments319['data'] = NULL;
$arguments319['width'] = NULL;
$arguments319['height'] = NULL;
$arguments319['minWidth'] = NULL;
$arguments319['minHeight'] = NULL;
$arguments319['treatIdAsReference'] = false;
$arguments319['image'] = NULL;
$arguments319['crop'] = NULL;
$arguments319['absolute'] = false;
$arguments319['class'] = NULL;
$arguments319['dir'] = NULL;
$arguments319['id'] = NULL;
$arguments319['lang'] = NULL;
$arguments319['style'] = NULL;
$arguments319['accesskey'] = NULL;
$arguments319['tabindex'] = NULL;
$arguments319['onclick'] = NULL;
$arguments319['ismap'] = NULL;
$arguments319['longdesc'] = NULL;
$arguments319['usemap'] = NULL;
$renderChildrenClosure320 = function() {return NULL;};
$viewHelper321 = $self->getViewHelper('$viewHelper321', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper321->setArguments($arguments319);
$viewHelper321->setRenderingContext($renderingContext);
$viewHelper321->setRenderChildrenClosure($renderChildrenClosure320);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output318 .= $viewHelper321->initializeArgumentsAndRender();

$output318 .= '
										</span>
									';
return $output318;
};
$viewHelper322 = $self->getViewHelper('$viewHelper322', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper322->setArguments($arguments316);
$viewHelper322->setRenderingContext($renderingContext);
$viewHelper322->setRenderChildrenClosure($renderChildrenClosure317);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output315 .= $viewHelper322->initializeArgumentsAndRender();

$output315 .= '
								';
return $output315;
};

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
							';
return $output312;
};
$arguments310['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output323 = '';

$output323 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments324 = array();
$arguments324['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments324['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments324['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments324['additionalAttributes'] = NULL;
$arguments324['data'] = NULL;
$arguments324['class'] = NULL;
$arguments324['dir'] = NULL;
$arguments324['id'] = NULL;
$arguments324['lang'] = NULL;
$arguments324['style'] = NULL;
$arguments324['accesskey'] = NULL;
$arguments324['tabindex'] = NULL;
$arguments324['onclick'] = NULL;
$arguments324['uriOnly'] = false;
$arguments324['configuration'] = array (
);
$arguments324['content'] = '';
$arguments324['section'] = NULL;
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output326 = '';

$output326 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments327 = array();
$arguments327['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments327['title'] = '';
$arguments327['alt'] = '';
$arguments327['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments327['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments327['additionalAttributes'] = NULL;
$arguments327['data'] = NULL;
$arguments327['width'] = NULL;
$arguments327['height'] = NULL;
$arguments327['minWidth'] = NULL;
$arguments327['minHeight'] = NULL;
$arguments327['treatIdAsReference'] = false;
$arguments327['image'] = NULL;
$arguments327['crop'] = NULL;
$arguments327['absolute'] = false;
$arguments327['class'] = NULL;
$arguments327['dir'] = NULL;
$arguments327['id'] = NULL;
$arguments327['lang'] = NULL;
$arguments327['style'] = NULL;
$arguments327['accesskey'] = NULL;
$arguments327['tabindex'] = NULL;
$arguments327['onclick'] = NULL;
$arguments327['ismap'] = NULL;
$arguments327['longdesc'] = NULL;
$arguments327['usemap'] = NULL;
$renderChildrenClosure328 = function() {return NULL;};
$viewHelper329 = $self->getViewHelper('$viewHelper329', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper329->setArguments($arguments327);
$viewHelper329->setRenderingContext($renderingContext);
$viewHelper329->setRenderChildrenClosure($renderChildrenClosure328);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output326 .= $viewHelper329->initializeArgumentsAndRender();

$output326 .= '
										</span>
									';
return $output326;
};
$viewHelper330 = $self->getViewHelper('$viewHelper330', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper330->setArguments($arguments324);
$viewHelper330->setRenderingContext($renderingContext);
$viewHelper330->setRenderChildrenClosure($renderChildrenClosure325);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output323 .= $viewHelper330->initializeArgumentsAndRender();

$output323 .= '
								';
return $output323;
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
						';
return $output309;
};

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
				';
return $output107;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output14 .= '
			';
return $output14;
};
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output331 = '';

$output331 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments332 = array();
// Rendering Boolean node
$arguments332['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews', $renderingContext));
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments335 = array();
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output337 = '';

$output337 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments338 = array();
$arguments338['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments338['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments338['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments338['additionalAttributes'] = NULL;
$arguments338['data'] = NULL;
$arguments338['class'] = NULL;
$arguments338['dir'] = NULL;
$arguments338['id'] = NULL;
$arguments338['lang'] = NULL;
$arguments338['style'] = NULL;
$arguments338['accesskey'] = NULL;
$arguments338['tabindex'] = NULL;
$arguments338['onclick'] = NULL;
$arguments338['uriOnly'] = false;
$arguments338['configuration'] = array (
);
$arguments338['content'] = '';
$arguments338['section'] = NULL;
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output340 = '';

$output340 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments341 = array();
// Rendering Array
$array342 = array();
$array342['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments341['map'] = $array342;
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output344 = '';

$output344 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments345 = array();
// Rendering Boolean node
$arguments345['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output347 = '';

$output347 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments348 = array();
$arguments348['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments348['class'] = 'img-responsive TEST';
$arguments348['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments348['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$output349 = '';

$output349 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);

$output349 .= 'c';
$arguments348['width'] = $output349;
$output350 = '';

$output350 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);

$output350 .= 'c';
$arguments348['height'] = $output350;
$arguments348['additionalAttributes'] = NULL;
$arguments348['data'] = NULL;
$arguments348['src'] = NULL;
$arguments348['minWidth'] = NULL;
$arguments348['minHeight'] = NULL;
$arguments348['maxWidth'] = NULL;
$arguments348['maxHeight'] = NULL;
$arguments348['treatIdAsReference'] = false;
$arguments348['crop'] = NULL;
$arguments348['absolute'] = false;
$arguments348['dir'] = NULL;
$arguments348['id'] = NULL;
$arguments348['lang'] = NULL;
$arguments348['style'] = NULL;
$arguments348['accesskey'] = NULL;
$arguments348['tabindex'] = NULL;
$arguments348['onclick'] = NULL;
$arguments348['ismap'] = NULL;
$arguments348['longdesc'] = NULL;
$arguments348['usemap'] = NULL;
$renderChildrenClosure351 = function() {return NULL;};
$viewHelper352 = $self->getViewHelper('$viewHelper352', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper352->setArguments($arguments348);
$viewHelper352->setRenderingContext($renderingContext);
$viewHelper352->setRenderChildrenClosure($renderChildrenClosure351);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output347 .= $viewHelper352->initializeArgumentsAndRender();

$output347 .= '
									';
return $output347;
};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments353 = array();
// Rendering Boolean node
$arguments353['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output355 = '';

$output355 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments356 = array();
$arguments356['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array357 = array();
$array357['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments356['arguments'] = $array357;
$arguments356['section'] = NULL;
$arguments356['optional'] = false;
$renderChildrenClosure358 = function() {return NULL;};

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments356, $renderChildrenClosure358, $renderingContext);

$output355 .= '
									';
return $output355;
};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output344 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments359 = array();
// Rendering Boolean node
$arguments359['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments359['then'] = NULL;
$arguments359['else'] = NULL;
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output361 = '';

$output361 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments362 = array();
$arguments362['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments362['class'] = 'img-responsive';
$arguments362['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments362['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments362['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments362['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments362['additionalAttributes'] = NULL;
$arguments362['data'] = NULL;
$arguments362['src'] = NULL;
$arguments362['width'] = NULL;
$arguments362['height'] = NULL;
$arguments362['minWidth'] = NULL;
$arguments362['minHeight'] = NULL;
$arguments362['treatIdAsReference'] = false;
$arguments362['crop'] = NULL;
$arguments362['absolute'] = false;
$arguments362['dir'] = NULL;
$arguments362['id'] = NULL;
$arguments362['lang'] = NULL;
$arguments362['style'] = NULL;
$arguments362['accesskey'] = NULL;
$arguments362['tabindex'] = NULL;
$arguments362['onclick'] = NULL;
$arguments362['ismap'] = NULL;
$arguments362['longdesc'] = NULL;
$arguments362['usemap'] = NULL;
$renderChildrenClosure363 = function() {return NULL;};
$viewHelper364 = $self->getViewHelper('$viewHelper364', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper364->setArguments($arguments362);
$viewHelper364->setRenderingContext($renderingContext);
$viewHelper364->setRenderChildrenClosure($renderChildrenClosure363);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output361 .= $viewHelper364->initializeArgumentsAndRender();

$output361 .= '
									';
return $output361;
};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output344 .= '
								';
return $output344;
};

$output340 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments341, $renderChildrenClosure343, $renderingContext);

$output340 .= '
							';
return $output340;
};
$viewHelper365 = $self->getViewHelper('$viewHelper365', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper365->setArguments($arguments338);
$viewHelper365->setRenderingContext($renderingContext);
$viewHelper365->setRenderChildrenClosure($renderChildrenClosure339);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output337 .= $viewHelper365->initializeArgumentsAndRender();

$output337 .= '
						';
return $output337;
};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments366 = array();
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output368 = '';

$output368 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments369 = array();
// Rendering Boolean node
$arguments369['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments369['then'] = NULL;
$arguments369['else'] = NULL;
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output371 = '';

$output371 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments372 = array();
$arguments372['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments372['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments372['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments372['additionalAttributes'] = NULL;
$arguments372['data'] = NULL;
$arguments372['class'] = NULL;
$arguments372['dir'] = NULL;
$arguments372['id'] = NULL;
$arguments372['lang'] = NULL;
$arguments372['style'] = NULL;
$arguments372['accesskey'] = NULL;
$arguments372['tabindex'] = NULL;
$arguments372['onclick'] = NULL;
$arguments372['uriOnly'] = false;
$arguments372['configuration'] = array (
);
$arguments372['content'] = '';
$arguments372['section'] = NULL;
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output374 = '';

$output374 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments375 = array();
$arguments375['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments375['class'] = 'img-responsive';
$arguments375['title'] = '';
$arguments375['alt'] = '';
$arguments375['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments375['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments375['additionalAttributes'] = NULL;
$arguments375['data'] = NULL;
$arguments375['width'] = NULL;
$arguments375['height'] = NULL;
$arguments375['minWidth'] = NULL;
$arguments375['minHeight'] = NULL;
$arguments375['treatIdAsReference'] = false;
$arguments375['image'] = NULL;
$arguments375['crop'] = NULL;
$arguments375['absolute'] = false;
$arguments375['dir'] = NULL;
$arguments375['id'] = NULL;
$arguments375['lang'] = NULL;
$arguments375['style'] = NULL;
$arguments375['accesskey'] = NULL;
$arguments375['tabindex'] = NULL;
$arguments375['onclick'] = NULL;
$arguments375['ismap'] = NULL;
$arguments375['longdesc'] = NULL;
$arguments375['usemap'] = NULL;
$renderChildrenClosure376 = function() {return NULL;};
$viewHelper377 = $self->getViewHelper('$viewHelper377', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper377->setArguments($arguments375);
$viewHelper377->setRenderingContext($renderingContext);
$viewHelper377->setRenderChildrenClosure($renderChildrenClosure376);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output374 .= $viewHelper377->initializeArgumentsAndRender();

$output374 .= '
								';
return $output374;
};
$viewHelper378 = $self->getViewHelper('$viewHelper378', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper378->setArguments($arguments372);
$viewHelper378->setRenderingContext($renderingContext);
$viewHelper378->setRenderChildrenClosure($renderChildrenClosure373);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output371 .= $viewHelper378->initializeArgumentsAndRender();

$output371 .= '
							';
return $output371;
};

$output368 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
						';
return $output368;
};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output334 .= '
					';
return $output334;
};
$arguments332['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output379 = '';

$output379 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments380 = array();
$arguments380['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments380['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments380['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments380['additionalAttributes'] = NULL;
$arguments380['data'] = NULL;
$arguments380['class'] = NULL;
$arguments380['dir'] = NULL;
$arguments380['id'] = NULL;
$arguments380['lang'] = NULL;
$arguments380['style'] = NULL;
$arguments380['accesskey'] = NULL;
$arguments380['tabindex'] = NULL;
$arguments380['onclick'] = NULL;
$arguments380['uriOnly'] = false;
$arguments380['configuration'] = array (
);
$arguments380['content'] = '';
$arguments380['section'] = NULL;
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output382 = '';

$output382 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments383 = array();
// Rendering Array
$array384 = array();
$array384['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments383['map'] = $array384;
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output386 = '';

$output386 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments387 = array();
// Rendering Boolean node
$arguments387['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments387['then'] = NULL;
$arguments387['else'] = NULL;
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output389 = '';

$output389 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments390 = array();
$arguments390['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments390['class'] = 'img-responsive TEST';
$arguments390['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments390['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$output391 = '';

$output391 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);

$output391 .= 'c';
$arguments390['width'] = $output391;
$output392 = '';

$output392 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);

$output392 .= 'c';
$arguments390['height'] = $output392;
$arguments390['additionalAttributes'] = NULL;
$arguments390['data'] = NULL;
$arguments390['src'] = NULL;
$arguments390['minWidth'] = NULL;
$arguments390['minHeight'] = NULL;
$arguments390['maxWidth'] = NULL;
$arguments390['maxHeight'] = NULL;
$arguments390['treatIdAsReference'] = false;
$arguments390['crop'] = NULL;
$arguments390['absolute'] = false;
$arguments390['dir'] = NULL;
$arguments390['id'] = NULL;
$arguments390['lang'] = NULL;
$arguments390['style'] = NULL;
$arguments390['accesskey'] = NULL;
$arguments390['tabindex'] = NULL;
$arguments390['onclick'] = NULL;
$arguments390['ismap'] = NULL;
$arguments390['longdesc'] = NULL;
$arguments390['usemap'] = NULL;
$renderChildrenClosure393 = function() {return NULL;};
$viewHelper394 = $self->getViewHelper('$viewHelper394', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper394->setArguments($arguments390);
$viewHelper394->setRenderingContext($renderingContext);
$viewHelper394->setRenderChildrenClosure($renderChildrenClosure393);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output389 .= $viewHelper394->initializeArgumentsAndRender();

$output389 .= '
									';
return $output389;
};

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output386 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments395 = array();
// Rendering Boolean node
$arguments395['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments395['then'] = NULL;
$arguments395['else'] = NULL;
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output397 = '';

$output397 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments398 = array();
$arguments398['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array399 = array();
$array399['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments398['arguments'] = $array399;
$arguments398['section'] = NULL;
$arguments398['optional'] = false;
$renderChildrenClosure400 = function() {return NULL;};

$output397 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments398, $renderChildrenClosure400, $renderingContext);

$output397 .= '
									';
return $output397;
};

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output386 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments401 = array();
// Rendering Boolean node
$arguments401['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments401['then'] = NULL;
$arguments401['else'] = NULL;
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output403 = '';

$output403 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments404 = array();
$arguments404['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments404['class'] = 'img-responsive';
$arguments404['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments404['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments404['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments404['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments404['additionalAttributes'] = NULL;
$arguments404['data'] = NULL;
$arguments404['src'] = NULL;
$arguments404['width'] = NULL;
$arguments404['height'] = NULL;
$arguments404['minWidth'] = NULL;
$arguments404['minHeight'] = NULL;
$arguments404['treatIdAsReference'] = false;
$arguments404['crop'] = NULL;
$arguments404['absolute'] = false;
$arguments404['dir'] = NULL;
$arguments404['id'] = NULL;
$arguments404['lang'] = NULL;
$arguments404['style'] = NULL;
$arguments404['accesskey'] = NULL;
$arguments404['tabindex'] = NULL;
$arguments404['onclick'] = NULL;
$arguments404['ismap'] = NULL;
$arguments404['longdesc'] = NULL;
$arguments404['usemap'] = NULL;
$renderChildrenClosure405 = function() {return NULL;};
$viewHelper406 = $self->getViewHelper('$viewHelper406', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper406->setArguments($arguments404);
$viewHelper406->setRenderingContext($renderingContext);
$viewHelper406->setRenderChildrenClosure($renderChildrenClosure405);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output403 .= $viewHelper406->initializeArgumentsAndRender();

$output403 .= '
									';
return $output403;
};

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output386 .= '
								';
return $output386;
};

$output382 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments383, $renderChildrenClosure385, $renderingContext);

$output382 .= '
							';
return $output382;
};
$viewHelper407 = $self->getViewHelper('$viewHelper407', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper407->setArguments($arguments380);
$viewHelper407->setRenderingContext($renderingContext);
$viewHelper407->setRenderChildrenClosure($renderChildrenClosure381);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output379 .= $viewHelper407->initializeArgumentsAndRender();

$output379 .= '
						';
return $output379;
};
$arguments332['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output408 = '';

$output408 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments409 = array();
// Rendering Boolean node
$arguments409['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments409['then'] = NULL;
$arguments409['else'] = NULL;
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output411 = '';

$output411 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments412 = array();
$arguments412['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments412['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments412['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments412['additionalAttributes'] = NULL;
$arguments412['data'] = NULL;
$arguments412['class'] = NULL;
$arguments412['dir'] = NULL;
$arguments412['id'] = NULL;
$arguments412['lang'] = NULL;
$arguments412['style'] = NULL;
$arguments412['accesskey'] = NULL;
$arguments412['tabindex'] = NULL;
$arguments412['onclick'] = NULL;
$arguments412['uriOnly'] = false;
$arguments412['configuration'] = array (
);
$arguments412['content'] = '';
$arguments412['section'] = NULL;
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output414 = '';

$output414 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments415 = array();
$arguments415['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments415['class'] = 'img-responsive';
$arguments415['title'] = '';
$arguments415['alt'] = '';
$arguments415['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments415['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments415['additionalAttributes'] = NULL;
$arguments415['data'] = NULL;
$arguments415['width'] = NULL;
$arguments415['height'] = NULL;
$arguments415['minWidth'] = NULL;
$arguments415['minHeight'] = NULL;
$arguments415['treatIdAsReference'] = false;
$arguments415['image'] = NULL;
$arguments415['crop'] = NULL;
$arguments415['absolute'] = false;
$arguments415['dir'] = NULL;
$arguments415['id'] = NULL;
$arguments415['lang'] = NULL;
$arguments415['style'] = NULL;
$arguments415['accesskey'] = NULL;
$arguments415['tabindex'] = NULL;
$arguments415['onclick'] = NULL;
$arguments415['ismap'] = NULL;
$arguments415['longdesc'] = NULL;
$arguments415['usemap'] = NULL;
$renderChildrenClosure416 = function() {return NULL;};
$viewHelper417 = $self->getViewHelper('$viewHelper417', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper417->setArguments($arguments415);
$viewHelper417->setRenderingContext($renderingContext);
$viewHelper417->setRenderChildrenClosure($renderChildrenClosure416);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output414 .= $viewHelper417->initializeArgumentsAndRender();

$output414 .= '
								';
return $output414;
};
$viewHelper418 = $self->getViewHelper('$viewHelper418', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper418->setArguments($arguments412);
$viewHelper418->setRenderingContext($renderingContext);
$viewHelper418->setRenderChildrenClosure($renderChildrenClosure413);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output411 .= $viewHelper418->initializeArgumentsAndRender();

$output411 .= '
							';
return $output411;
};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '
						';
return $output408;
};

$output331 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
				';
return $output331;
};
$arguments12['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output419 = '';

$output419 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments420 = array();
// Rendering Boolean node
$arguments420['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext));
$arguments420['then'] = NULL;
$arguments420['else'] = NULL;
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output422 = '';

$output422 .= '
						<!-- media preview element -->
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments423 = array();
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output425 = '';

$output425 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments426 = array();
// Rendering Boolean node
$arguments426['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
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
$output431 = '';

$output431 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments432 = array();
$arguments432['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments432['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments432['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments432['additionalAttributes'] = NULL;
$arguments432['data'] = NULL;
$arguments432['class'] = NULL;
$arguments432['dir'] = NULL;
$arguments432['id'] = NULL;
$arguments432['lang'] = NULL;
$arguments432['style'] = NULL;
$arguments432['accesskey'] = NULL;
$arguments432['tabindex'] = NULL;
$arguments432['onclick'] = NULL;
$arguments432['uriOnly'] = false;
$arguments432['configuration'] = array (
);
$arguments432['content'] = '';
$arguments432['section'] = NULL;
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output434 = '';

$output434 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments435 = array();
// Rendering Array
$array436 = array();
$array436['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments435['map'] = $array436;
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output438 = '';

$output438 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments439 = array();
// Rendering Boolean node
$arguments439['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments439['then'] = NULL;
$arguments439['else'] = NULL;
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output441 = '';

$output441 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments442 = array();
$output443 = '';

$output443 .= 'uploads/tx_news/';

$output443 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments442['src'] = $output443;
$arguments442['class'] = 'img-responsive';
$arguments442['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments442['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments442['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments442['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments442['additionalAttributes'] = NULL;
$arguments442['data'] = NULL;
$arguments442['width'] = NULL;
$arguments442['height'] = NULL;
$arguments442['minWidth'] = NULL;
$arguments442['minHeight'] = NULL;
$arguments442['treatIdAsReference'] = false;
$arguments442['image'] = NULL;
$arguments442['crop'] = NULL;
$arguments442['absolute'] = false;
$arguments442['dir'] = NULL;
$arguments442['id'] = NULL;
$arguments442['lang'] = NULL;
$arguments442['style'] = NULL;
$arguments442['accesskey'] = NULL;
$arguments442['tabindex'] = NULL;
$arguments442['onclick'] = NULL;
$arguments442['ismap'] = NULL;
$arguments442['longdesc'] = NULL;
$arguments442['usemap'] = NULL;
$renderChildrenClosure444 = function() {return NULL;};
$viewHelper445 = $self->getViewHelper('$viewHelper445', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper445->setArguments($arguments442);
$viewHelper445->setRenderingContext($renderingContext);
$viewHelper445->setRenderChildrenClosure($renderChildrenClosure444);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output441 .= $viewHelper445->initializeArgumentsAndRender();

$output441 .= '
											';
return $output441;
};

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments446 = array();
// Rendering Boolean node
$arguments446['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments446['then'] = NULL;
$arguments446['else'] = NULL;
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output448 = '';

$output448 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments449 = array();
$arguments449['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array450 = array();
$array450['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments449['arguments'] = $array450;
$arguments449['section'] = NULL;
$arguments449['optional'] = false;
$renderChildrenClosure451 = function() {return NULL;};

$output448 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments449, $renderChildrenClosure451, $renderingContext);

$output448 .= '
											';
return $output448;
};

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output438 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments452 = array();
// Rendering Boolean node
$arguments452['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments452['then'] = NULL;
$arguments452['else'] = NULL;
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output454 = '';

$output454 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments455 = array();
$arguments455['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array456 = array();
$array456['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments455['arguments'] = $array456;
$arguments455['section'] = NULL;
$arguments455['optional'] = false;
$renderChildrenClosure457 = function() {return NULL;};

$output454 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments455, $renderChildrenClosure457, $renderingContext);

$output454 .= '
											';
return $output454;
};

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output438 .= '
										';
return $output438;
};

$output434 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments435, $renderChildrenClosure437, $renderingContext);

$output434 .= '
									';
return $output434;
};
$viewHelper458 = $self->getViewHelper('$viewHelper458', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper458->setArguments($arguments432);
$viewHelper458->setRenderingContext($renderingContext);
$viewHelper458->setRenderChildrenClosure($renderChildrenClosure433);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output431 .= $viewHelper458->initializeArgumentsAndRender();

$output431 .= '
								';
return $output431;
};

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output428 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments459 = array();
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output461 = '';

$output461 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments462 = array();
// Rendering Boolean node
$arguments462['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments462['then'] = NULL;
$arguments462['else'] = NULL;
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output464 = '';

$output464 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments465 = array();
$arguments465['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments465['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments465['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments465['additionalAttributes'] = NULL;
$arguments465['data'] = NULL;
$arguments465['class'] = NULL;
$arguments465['dir'] = NULL;
$arguments465['id'] = NULL;
$arguments465['lang'] = NULL;
$arguments465['style'] = NULL;
$arguments465['accesskey'] = NULL;
$arguments465['tabindex'] = NULL;
$arguments465['onclick'] = NULL;
$arguments465['uriOnly'] = false;
$arguments465['configuration'] = array (
);
$arguments465['content'] = '';
$arguments465['section'] = NULL;
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output467 = '';

$output467 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments468 = array();
$arguments468['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments468['class'] = 'img-responsive';
$arguments468['title'] = '';
$arguments468['alt'] = '';
$arguments468['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments468['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments468['additionalAttributes'] = NULL;
$arguments468['data'] = NULL;
$arguments468['width'] = NULL;
$arguments468['height'] = NULL;
$arguments468['minWidth'] = NULL;
$arguments468['minHeight'] = NULL;
$arguments468['treatIdAsReference'] = false;
$arguments468['image'] = NULL;
$arguments468['crop'] = NULL;
$arguments468['absolute'] = false;
$arguments468['dir'] = NULL;
$arguments468['id'] = NULL;
$arguments468['lang'] = NULL;
$arguments468['style'] = NULL;
$arguments468['accesskey'] = NULL;
$arguments468['tabindex'] = NULL;
$arguments468['onclick'] = NULL;
$arguments468['ismap'] = NULL;
$arguments468['longdesc'] = NULL;
$arguments468['usemap'] = NULL;
$renderChildrenClosure469 = function() {return NULL;};
$viewHelper470 = $self->getViewHelper('$viewHelper470', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper470->setArguments($arguments468);
$viewHelper470->setRenderingContext($renderingContext);
$viewHelper470->setRenderChildrenClosure($renderChildrenClosure469);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output467 .= $viewHelper470->initializeArgumentsAndRender();

$output467 .= '
										';
return $output467;
};
$viewHelper471 = $self->getViewHelper('$viewHelper471', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper471->setArguments($arguments465);
$viewHelper471->setRenderingContext($renderingContext);
$viewHelper471->setRenderChildrenClosure($renderChildrenClosure466);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output464 .= $viewHelper471->initializeArgumentsAndRender();

$output464 .= '
									';
return $output464;
};

$output461 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output461 .= '
								';
return $output461;
};

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output428 .= '
							';
return $output428;
};
$arguments426['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output472 = '';

$output472 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments473 = array();
$arguments473['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments473['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments473['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments473['additionalAttributes'] = NULL;
$arguments473['data'] = NULL;
$arguments473['class'] = NULL;
$arguments473['dir'] = NULL;
$arguments473['id'] = NULL;
$arguments473['lang'] = NULL;
$arguments473['style'] = NULL;
$arguments473['accesskey'] = NULL;
$arguments473['tabindex'] = NULL;
$arguments473['onclick'] = NULL;
$arguments473['uriOnly'] = false;
$arguments473['configuration'] = array (
);
$arguments473['content'] = '';
$arguments473['section'] = NULL;
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output475 = '';

$output475 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments476 = array();
// Rendering Array
$array477 = array();
$array477['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments476['map'] = $array477;
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output479 = '';

$output479 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments480 = array();
// Rendering Boolean node
$arguments480['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments480['then'] = NULL;
$arguments480['else'] = NULL;
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output482 = '';

$output482 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments483 = array();
$output484 = '';

$output484 .= 'uploads/tx_news/';

$output484 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments483['src'] = $output484;
$arguments483['class'] = 'img-responsive';
$arguments483['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments483['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments483['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments483['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments483['additionalAttributes'] = NULL;
$arguments483['data'] = NULL;
$arguments483['width'] = NULL;
$arguments483['height'] = NULL;
$arguments483['minWidth'] = NULL;
$arguments483['minHeight'] = NULL;
$arguments483['treatIdAsReference'] = false;
$arguments483['image'] = NULL;
$arguments483['crop'] = NULL;
$arguments483['absolute'] = false;
$arguments483['dir'] = NULL;
$arguments483['id'] = NULL;
$arguments483['lang'] = NULL;
$arguments483['style'] = NULL;
$arguments483['accesskey'] = NULL;
$arguments483['tabindex'] = NULL;
$arguments483['onclick'] = NULL;
$arguments483['ismap'] = NULL;
$arguments483['longdesc'] = NULL;
$arguments483['usemap'] = NULL;
$renderChildrenClosure485 = function() {return NULL;};
$viewHelper486 = $self->getViewHelper('$viewHelper486', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper486->setArguments($arguments483);
$viewHelper486->setRenderingContext($renderingContext);
$viewHelper486->setRenderChildrenClosure($renderChildrenClosure485);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output482 .= $viewHelper486->initializeArgumentsAndRender();

$output482 .= '
											';
return $output482;
};

$output479 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output479 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments487 = array();
// Rendering Boolean node
$arguments487['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments487['then'] = NULL;
$arguments487['else'] = NULL;
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output489 = '';

$output489 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments490 = array();
$arguments490['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array491 = array();
$array491['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments490['arguments'] = $array491;
$arguments490['section'] = NULL;
$arguments490['optional'] = false;
$renderChildrenClosure492 = function() {return NULL;};

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments490, $renderChildrenClosure492, $renderingContext);

$output489 .= '
											';
return $output489;
};

$output479 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output479 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments493 = array();
// Rendering Boolean node
$arguments493['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments493['then'] = NULL;
$arguments493['else'] = NULL;
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output495 = '';

$output495 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments496 = array();
$arguments496['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array497 = array();
$array497['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments496['arguments'] = $array497;
$arguments496['section'] = NULL;
$arguments496['optional'] = false;
$renderChildrenClosure498 = function() {return NULL;};

$output495 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments496, $renderChildrenClosure498, $renderingContext);

$output495 .= '
											';
return $output495;
};

$output479 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output479 .= '
										';
return $output479;
};

$output475 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments476, $renderChildrenClosure478, $renderingContext);

$output475 .= '
									';
return $output475;
};
$viewHelper499 = $self->getViewHelper('$viewHelper499', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper499->setArguments($arguments473);
$viewHelper499->setRenderingContext($renderingContext);
$viewHelper499->setRenderChildrenClosure($renderChildrenClosure474);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output472 .= $viewHelper499->initializeArgumentsAndRender();

$output472 .= '
								';
return $output472;
};
$arguments426['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output500 = '';

$output500 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments501 = array();
// Rendering Boolean node
$arguments501['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments501['then'] = NULL;
$arguments501['else'] = NULL;
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output503 = '';

$output503 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments504 = array();
$arguments504['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments504['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments504['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments504['additionalAttributes'] = NULL;
$arguments504['data'] = NULL;
$arguments504['class'] = NULL;
$arguments504['dir'] = NULL;
$arguments504['id'] = NULL;
$arguments504['lang'] = NULL;
$arguments504['style'] = NULL;
$arguments504['accesskey'] = NULL;
$arguments504['tabindex'] = NULL;
$arguments504['onclick'] = NULL;
$arguments504['uriOnly'] = false;
$arguments504['configuration'] = array (
);
$arguments504['content'] = '';
$arguments504['section'] = NULL;
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output506 = '';

$output506 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments507 = array();
$arguments507['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments507['class'] = 'img-responsive';
$arguments507['title'] = '';
$arguments507['alt'] = '';
$arguments507['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments507['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments507['additionalAttributes'] = NULL;
$arguments507['data'] = NULL;
$arguments507['width'] = NULL;
$arguments507['height'] = NULL;
$arguments507['minWidth'] = NULL;
$arguments507['minHeight'] = NULL;
$arguments507['treatIdAsReference'] = false;
$arguments507['image'] = NULL;
$arguments507['crop'] = NULL;
$arguments507['absolute'] = false;
$arguments507['dir'] = NULL;
$arguments507['id'] = NULL;
$arguments507['lang'] = NULL;
$arguments507['style'] = NULL;
$arguments507['accesskey'] = NULL;
$arguments507['tabindex'] = NULL;
$arguments507['onclick'] = NULL;
$arguments507['ismap'] = NULL;
$arguments507['longdesc'] = NULL;
$arguments507['usemap'] = NULL;
$renderChildrenClosure508 = function() {return NULL;};
$viewHelper509 = $self->getViewHelper('$viewHelper509', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper509->setArguments($arguments507);
$viewHelper509->setRenderingContext($renderingContext);
$viewHelper509->setRenderChildrenClosure($renderChildrenClosure508);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output506 .= $viewHelper509->initializeArgumentsAndRender();

$output506 .= '
										';
return $output506;
};
$viewHelper510 = $self->getViewHelper('$viewHelper510', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper510->setArguments($arguments504);
$viewHelper510->setRenderingContext($renderingContext);
$viewHelper510->setRenderChildrenClosure($renderChildrenClosure505);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output503 .= $viewHelper510->initializeArgumentsAndRender();

$output503 .= '
									';
return $output503;
};

$output500 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output500 .= '
								';
return $output500;
};

$output425 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '
						';
return $output425;
};

$output422 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output422 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments511 = array();
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output513 = '';

$output513 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments514 = array();
// Rendering Boolean node
$arguments514['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments514['then'] = NULL;
$arguments514['else'] = NULL;
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output516 = '';

$output516 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments517 = array();
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output519 = '';

$output519 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments520 = array();
$arguments520['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments520['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments520['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments520['additionalAttributes'] = NULL;
$arguments520['data'] = NULL;
$arguments520['class'] = NULL;
$arguments520['dir'] = NULL;
$arguments520['id'] = NULL;
$arguments520['lang'] = NULL;
$arguments520['style'] = NULL;
$arguments520['accesskey'] = NULL;
$arguments520['tabindex'] = NULL;
$arguments520['onclick'] = NULL;
$arguments520['uriOnly'] = false;
$arguments520['configuration'] = array (
);
$arguments520['content'] = '';
$arguments520['section'] = NULL;
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output522 = '';

$output522 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments523 = array();
$arguments523['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments523['title'] = '';
$arguments523['alt'] = '';
$arguments523['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments523['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments523['additionalAttributes'] = NULL;
$arguments523['data'] = NULL;
$arguments523['width'] = NULL;
$arguments523['height'] = NULL;
$arguments523['minWidth'] = NULL;
$arguments523['minHeight'] = NULL;
$arguments523['treatIdAsReference'] = false;
$arguments523['image'] = NULL;
$arguments523['crop'] = NULL;
$arguments523['absolute'] = false;
$arguments523['class'] = NULL;
$arguments523['dir'] = NULL;
$arguments523['id'] = NULL;
$arguments523['lang'] = NULL;
$arguments523['style'] = NULL;
$arguments523['accesskey'] = NULL;
$arguments523['tabindex'] = NULL;
$arguments523['onclick'] = NULL;
$arguments523['ismap'] = NULL;
$arguments523['longdesc'] = NULL;
$arguments523['usemap'] = NULL;
$renderChildrenClosure524 = function() {return NULL;};
$viewHelper525 = $self->getViewHelper('$viewHelper525', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper525->setArguments($arguments523);
$viewHelper525->setRenderingContext($renderingContext);
$viewHelper525->setRenderChildrenClosure($renderChildrenClosure524);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output522 .= $viewHelper525->initializeArgumentsAndRender();

$output522 .= '
										</span>
									';
return $output522;
};
$viewHelper526 = $self->getViewHelper('$viewHelper526', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper526->setArguments($arguments520);
$viewHelper526->setRenderingContext($renderingContext);
$viewHelper526->setRenderChildrenClosure($renderChildrenClosure521);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output519 .= $viewHelper526->initializeArgumentsAndRender();

$output519 .= '
								';
return $output519;
};

$output516 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output516 .= '
							';
return $output516;
};
$arguments514['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output527 = '';

$output527 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments528 = array();
$arguments528['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments528['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments528['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments528['additionalAttributes'] = NULL;
$arguments528['data'] = NULL;
$arguments528['class'] = NULL;
$arguments528['dir'] = NULL;
$arguments528['id'] = NULL;
$arguments528['lang'] = NULL;
$arguments528['style'] = NULL;
$arguments528['accesskey'] = NULL;
$arguments528['tabindex'] = NULL;
$arguments528['onclick'] = NULL;
$arguments528['uriOnly'] = false;
$arguments528['configuration'] = array (
);
$arguments528['content'] = '';
$arguments528['section'] = NULL;
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output530 = '';

$output530 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments531 = array();
$arguments531['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments531['title'] = '';
$arguments531['alt'] = '';
$arguments531['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments531['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments531['additionalAttributes'] = NULL;
$arguments531['data'] = NULL;
$arguments531['width'] = NULL;
$arguments531['height'] = NULL;
$arguments531['minWidth'] = NULL;
$arguments531['minHeight'] = NULL;
$arguments531['treatIdAsReference'] = false;
$arguments531['image'] = NULL;
$arguments531['crop'] = NULL;
$arguments531['absolute'] = false;
$arguments531['class'] = NULL;
$arguments531['dir'] = NULL;
$arguments531['id'] = NULL;
$arguments531['lang'] = NULL;
$arguments531['style'] = NULL;
$arguments531['accesskey'] = NULL;
$arguments531['tabindex'] = NULL;
$arguments531['onclick'] = NULL;
$arguments531['ismap'] = NULL;
$arguments531['longdesc'] = NULL;
$arguments531['usemap'] = NULL;
$renderChildrenClosure532 = function() {return NULL;};
$viewHelper533 = $self->getViewHelper('$viewHelper533', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper533->setArguments($arguments531);
$viewHelper533->setRenderingContext($renderingContext);
$viewHelper533->setRenderChildrenClosure($renderChildrenClosure532);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output530 .= $viewHelper533->initializeArgumentsAndRender();

$output530 .= '
										</span>
									';
return $output530;
};
$viewHelper534 = $self->getViewHelper('$viewHelper534', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper534->setArguments($arguments528);
$viewHelper534->setRenderingContext($renderingContext);
$viewHelper534->setRenderChildrenClosure($renderChildrenClosure529);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output527 .= $viewHelper534->initializeArgumentsAndRender();

$output527 .= '
								';
return $output527;
};

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output513 .= '
						';
return $output513;
};

$output422 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output422 .= '
					';
return $output422;
};
$arguments420['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output535 = '';

$output535 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments536 = array();
// Rendering Boolean node
$arguments536['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
$arguments536['then'] = NULL;
$arguments536['else'] = NULL;
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output538 = '';

$output538 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments539 = array();
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output541 = '';

$output541 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments542 = array();
$arguments542['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments542['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments542['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments542['additionalAttributes'] = NULL;
$arguments542['data'] = NULL;
$arguments542['class'] = NULL;
$arguments542['dir'] = NULL;
$arguments542['id'] = NULL;
$arguments542['lang'] = NULL;
$arguments542['style'] = NULL;
$arguments542['accesskey'] = NULL;
$arguments542['tabindex'] = NULL;
$arguments542['onclick'] = NULL;
$arguments542['uriOnly'] = false;
$arguments542['configuration'] = array (
);
$arguments542['content'] = '';
$arguments542['section'] = NULL;
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output544 = '';

$output544 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments545 = array();
// Rendering Array
$array546 = array();
$array546['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments545['map'] = $array546;
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output548 = '';

$output548 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments549 = array();
// Rendering Boolean node
$arguments549['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments549['then'] = NULL;
$arguments549['else'] = NULL;
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output551 = '';

$output551 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments552 = array();
$output553 = '';

$output553 .= 'uploads/tx_news/';

$output553 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments552['src'] = $output553;
$arguments552['class'] = 'img-responsive';
$arguments552['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments552['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments552['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments552['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments552['additionalAttributes'] = NULL;
$arguments552['data'] = NULL;
$arguments552['width'] = NULL;
$arguments552['height'] = NULL;
$arguments552['minWidth'] = NULL;
$arguments552['minHeight'] = NULL;
$arguments552['treatIdAsReference'] = false;
$arguments552['image'] = NULL;
$arguments552['crop'] = NULL;
$arguments552['absolute'] = false;
$arguments552['dir'] = NULL;
$arguments552['id'] = NULL;
$arguments552['lang'] = NULL;
$arguments552['style'] = NULL;
$arguments552['accesskey'] = NULL;
$arguments552['tabindex'] = NULL;
$arguments552['onclick'] = NULL;
$arguments552['ismap'] = NULL;
$arguments552['longdesc'] = NULL;
$arguments552['usemap'] = NULL;
$renderChildrenClosure554 = function() {return NULL;};
$viewHelper555 = $self->getViewHelper('$viewHelper555', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper555->setArguments($arguments552);
$viewHelper555->setRenderingContext($renderingContext);
$viewHelper555->setRenderChildrenClosure($renderChildrenClosure554);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output551 .= $viewHelper555->initializeArgumentsAndRender();

$output551 .= '
											';
return $output551;
};

$output548 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output548 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments556 = array();
// Rendering Boolean node
$arguments556['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments556['then'] = NULL;
$arguments556['else'] = NULL;
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output558 = '';

$output558 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments559 = array();
$arguments559['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array560 = array();
$array560['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments559['arguments'] = $array560;
$arguments559['section'] = NULL;
$arguments559['optional'] = false;
$renderChildrenClosure561 = function() {return NULL;};

$output558 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments559, $renderChildrenClosure561, $renderingContext);

$output558 .= '
											';
return $output558;
};

$output548 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output548 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments562 = array();
// Rendering Boolean node
$arguments562['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments562['then'] = NULL;
$arguments562['else'] = NULL;
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output564 = '';

$output564 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments565 = array();
$arguments565['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array566 = array();
$array566['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments565['arguments'] = $array566;
$arguments565['section'] = NULL;
$arguments565['optional'] = false;
$renderChildrenClosure567 = function() {return NULL;};

$output564 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments565, $renderChildrenClosure567, $renderingContext);

$output564 .= '
											';
return $output564;
};

$output548 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output548 .= '
										';
return $output548;
};

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments545, $renderChildrenClosure547, $renderingContext);

$output544 .= '
									';
return $output544;
};
$viewHelper568 = $self->getViewHelper('$viewHelper568', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper568->setArguments($arguments542);
$viewHelper568->setRenderingContext($renderingContext);
$viewHelper568->setRenderChildrenClosure($renderChildrenClosure543);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output541 .= $viewHelper568->initializeArgumentsAndRender();

$output541 .= '
								';
return $output541;
};

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output538 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments569 = array();
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output571 = '';

$output571 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments572 = array();
// Rendering Boolean node
$arguments572['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments572['then'] = NULL;
$arguments572['else'] = NULL;
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output574 = '';

$output574 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments575 = array();
$arguments575['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments575['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments575['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments575['additionalAttributes'] = NULL;
$arguments575['data'] = NULL;
$arguments575['class'] = NULL;
$arguments575['dir'] = NULL;
$arguments575['id'] = NULL;
$arguments575['lang'] = NULL;
$arguments575['style'] = NULL;
$arguments575['accesskey'] = NULL;
$arguments575['tabindex'] = NULL;
$arguments575['onclick'] = NULL;
$arguments575['uriOnly'] = false;
$arguments575['configuration'] = array (
);
$arguments575['content'] = '';
$arguments575['section'] = NULL;
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output577 = '';

$output577 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments578 = array();
$arguments578['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments578['class'] = 'img-responsive';
$arguments578['title'] = '';
$arguments578['alt'] = '';
$arguments578['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments578['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments578['additionalAttributes'] = NULL;
$arguments578['data'] = NULL;
$arguments578['width'] = NULL;
$arguments578['height'] = NULL;
$arguments578['minWidth'] = NULL;
$arguments578['minHeight'] = NULL;
$arguments578['treatIdAsReference'] = false;
$arguments578['image'] = NULL;
$arguments578['crop'] = NULL;
$arguments578['absolute'] = false;
$arguments578['dir'] = NULL;
$arguments578['id'] = NULL;
$arguments578['lang'] = NULL;
$arguments578['style'] = NULL;
$arguments578['accesskey'] = NULL;
$arguments578['tabindex'] = NULL;
$arguments578['onclick'] = NULL;
$arguments578['ismap'] = NULL;
$arguments578['longdesc'] = NULL;
$arguments578['usemap'] = NULL;
$renderChildrenClosure579 = function() {return NULL;};
$viewHelper580 = $self->getViewHelper('$viewHelper580', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper580->setArguments($arguments578);
$viewHelper580->setRenderingContext($renderingContext);
$viewHelper580->setRenderChildrenClosure($renderChildrenClosure579);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output577 .= $viewHelper580->initializeArgumentsAndRender();

$output577 .= '
										';
return $output577;
};
$viewHelper581 = $self->getViewHelper('$viewHelper581', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper581->setArguments($arguments575);
$viewHelper581->setRenderingContext($renderingContext);
$viewHelper581->setRenderChildrenClosure($renderChildrenClosure576);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output574 .= $viewHelper581->initializeArgumentsAndRender();

$output574 .= '
									';
return $output574;
};

$output571 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output571 .= '
								';
return $output571;
};

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output538 .= '
							';
return $output538;
};
$arguments536['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output582 = '';

$output582 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments583 = array();
$arguments583['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments583['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments583['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments583['additionalAttributes'] = NULL;
$arguments583['data'] = NULL;
$arguments583['class'] = NULL;
$arguments583['dir'] = NULL;
$arguments583['id'] = NULL;
$arguments583['lang'] = NULL;
$arguments583['style'] = NULL;
$arguments583['accesskey'] = NULL;
$arguments583['tabindex'] = NULL;
$arguments583['onclick'] = NULL;
$arguments583['uriOnly'] = false;
$arguments583['configuration'] = array (
);
$arguments583['content'] = '';
$arguments583['section'] = NULL;
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output585 = '';

$output585 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments586 = array();
// Rendering Array
$array587 = array();
$array587['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments586['map'] = $array587;
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output589 = '';

$output589 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments590 = array();
// Rendering Boolean node
$arguments590['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments590['then'] = NULL;
$arguments590['else'] = NULL;
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output592 = '';

$output592 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments593 = array();
$output594 = '';

$output594 .= 'uploads/tx_news/';

$output594 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments593['src'] = $output594;
$arguments593['class'] = 'img-responsive';
$arguments593['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments593['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments593['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments593['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments593['additionalAttributes'] = NULL;
$arguments593['data'] = NULL;
$arguments593['width'] = NULL;
$arguments593['height'] = NULL;
$arguments593['minWidth'] = NULL;
$arguments593['minHeight'] = NULL;
$arguments593['treatIdAsReference'] = false;
$arguments593['image'] = NULL;
$arguments593['crop'] = NULL;
$arguments593['absolute'] = false;
$arguments593['dir'] = NULL;
$arguments593['id'] = NULL;
$arguments593['lang'] = NULL;
$arguments593['style'] = NULL;
$arguments593['accesskey'] = NULL;
$arguments593['tabindex'] = NULL;
$arguments593['onclick'] = NULL;
$arguments593['ismap'] = NULL;
$arguments593['longdesc'] = NULL;
$arguments593['usemap'] = NULL;
$renderChildrenClosure595 = function() {return NULL;};
$viewHelper596 = $self->getViewHelper('$viewHelper596', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper596->setArguments($arguments593);
$viewHelper596->setRenderingContext($renderingContext);
$viewHelper596->setRenderChildrenClosure($renderChildrenClosure595);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output592 .= $viewHelper596->initializeArgumentsAndRender();

$output592 .= '
											';
return $output592;
};

$output589 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output589 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments597 = array();
// Rendering Boolean node
$arguments597['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments597['then'] = NULL;
$arguments597['else'] = NULL;
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output599 = '';

$output599 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments600 = array();
$arguments600['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array601 = array();
$array601['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments600['arguments'] = $array601;
$arguments600['section'] = NULL;
$arguments600['optional'] = false;
$renderChildrenClosure602 = function() {return NULL;};

$output599 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments600, $renderChildrenClosure602, $renderingContext);

$output599 .= '
											';
return $output599;
};

$output589 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output589 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments603 = array();
// Rendering Boolean node
$arguments603['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments603['then'] = NULL;
$arguments603['else'] = NULL;
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output605 = '';

$output605 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments606 = array();
$arguments606['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array607 = array();
$array607['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments606['arguments'] = $array607;
$arguments606['section'] = NULL;
$arguments606['optional'] = false;
$renderChildrenClosure608 = function() {return NULL;};

$output605 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments606, $renderChildrenClosure608, $renderingContext);

$output605 .= '
											';
return $output605;
};

$output589 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext);

$output589 .= '
										';
return $output589;
};

$output585 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments586, $renderChildrenClosure588, $renderingContext);

$output585 .= '
									';
return $output585;
};
$viewHelper609 = $self->getViewHelper('$viewHelper609', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper609->setArguments($arguments583);
$viewHelper609->setRenderingContext($renderingContext);
$viewHelper609->setRenderChildrenClosure($renderChildrenClosure584);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output582 .= $viewHelper609->initializeArgumentsAndRender();

$output582 .= '
								';
return $output582;
};
$arguments536['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output610 = '';

$output610 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments611 = array();
// Rendering Boolean node
$arguments611['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output613 = '';

$output613 .= '
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments614 = array();
$arguments614['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments614['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments614['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments614['additionalAttributes'] = NULL;
$arguments614['data'] = NULL;
$arguments614['class'] = NULL;
$arguments614['dir'] = NULL;
$arguments614['id'] = NULL;
$arguments614['lang'] = NULL;
$arguments614['style'] = NULL;
$arguments614['accesskey'] = NULL;
$arguments614['tabindex'] = NULL;
$arguments614['onclick'] = NULL;
$arguments614['uriOnly'] = false;
$arguments614['configuration'] = array (
);
$arguments614['content'] = '';
$arguments614['section'] = NULL;
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output616 = '';

$output616 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments617 = array();
$arguments617['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments617['class'] = 'img-responsive';
$arguments617['title'] = '';
$arguments617['alt'] = '';
$arguments617['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments617['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments617['additionalAttributes'] = NULL;
$arguments617['data'] = NULL;
$arguments617['width'] = NULL;
$arguments617['height'] = NULL;
$arguments617['minWidth'] = NULL;
$arguments617['minHeight'] = NULL;
$arguments617['treatIdAsReference'] = false;
$arguments617['image'] = NULL;
$arguments617['crop'] = NULL;
$arguments617['absolute'] = false;
$arguments617['dir'] = NULL;
$arguments617['id'] = NULL;
$arguments617['lang'] = NULL;
$arguments617['style'] = NULL;
$arguments617['accesskey'] = NULL;
$arguments617['tabindex'] = NULL;
$arguments617['onclick'] = NULL;
$arguments617['ismap'] = NULL;
$arguments617['longdesc'] = NULL;
$arguments617['usemap'] = NULL;
$renderChildrenClosure618 = function() {return NULL;};
$viewHelper619 = $self->getViewHelper('$viewHelper619', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper619->setArguments($arguments617);
$viewHelper619->setRenderingContext($renderingContext);
$viewHelper619->setRenderChildrenClosure($renderChildrenClosure618);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output616 .= $viewHelper619->initializeArgumentsAndRender();

$output616 .= '
										';
return $output616;
};
$viewHelper620 = $self->getViewHelper('$viewHelper620', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper620->setArguments($arguments614);
$viewHelper620->setRenderingContext($renderingContext);
$viewHelper620->setRenderChildrenClosure($renderChildrenClosure615);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output613 .= $viewHelper620->initializeArgumentsAndRender();

$output613 .= '
									';
return $output613;
};

$output610 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output610 .= '
								';
return $output610;
};

$output535 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output535 .= '
						';
return $output535;
};
$arguments420['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output621 = '';

$output621 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments622 = array();
// Rendering Boolean node
$arguments622['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments622['then'] = NULL;
$arguments622['else'] = NULL;
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output624 = '';

$output624 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments625 = array();
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output627 = '';

$output627 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments628 = array();
$arguments628['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments628['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments628['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments628['additionalAttributes'] = NULL;
$arguments628['data'] = NULL;
$arguments628['class'] = NULL;
$arguments628['dir'] = NULL;
$arguments628['id'] = NULL;
$arguments628['lang'] = NULL;
$arguments628['style'] = NULL;
$arguments628['accesskey'] = NULL;
$arguments628['tabindex'] = NULL;
$arguments628['onclick'] = NULL;
$arguments628['uriOnly'] = false;
$arguments628['configuration'] = array (
);
$arguments628['content'] = '';
$arguments628['section'] = NULL;
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output630 = '';

$output630 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments631 = array();
$arguments631['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments631['title'] = '';
$arguments631['alt'] = '';
$arguments631['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments631['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments631['additionalAttributes'] = NULL;
$arguments631['data'] = NULL;
$arguments631['width'] = NULL;
$arguments631['height'] = NULL;
$arguments631['minWidth'] = NULL;
$arguments631['minHeight'] = NULL;
$arguments631['treatIdAsReference'] = false;
$arguments631['image'] = NULL;
$arguments631['crop'] = NULL;
$arguments631['absolute'] = false;
$arguments631['class'] = NULL;
$arguments631['dir'] = NULL;
$arguments631['id'] = NULL;
$arguments631['lang'] = NULL;
$arguments631['style'] = NULL;
$arguments631['accesskey'] = NULL;
$arguments631['tabindex'] = NULL;
$arguments631['onclick'] = NULL;
$arguments631['ismap'] = NULL;
$arguments631['longdesc'] = NULL;
$arguments631['usemap'] = NULL;
$renderChildrenClosure632 = function() {return NULL;};
$viewHelper633 = $self->getViewHelper('$viewHelper633', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper633->setArguments($arguments631);
$viewHelper633->setRenderingContext($renderingContext);
$viewHelper633->setRenderChildrenClosure($renderChildrenClosure632);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output630 .= $viewHelper633->initializeArgumentsAndRender();

$output630 .= '
										</span>
									';
return $output630;
};
$viewHelper634 = $self->getViewHelper('$viewHelper634', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper634->setArguments($arguments628);
$viewHelper634->setRenderingContext($renderingContext);
$viewHelper634->setRenderChildrenClosure($renderChildrenClosure629);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output627 .= $viewHelper634->initializeArgumentsAndRender();

$output627 .= '
								';
return $output627;
};

$output624 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output624 .= '
							';
return $output624;
};
$arguments622['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output635 = '';

$output635 .= '
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments636 = array();
$arguments636['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments636['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments636['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments636['additionalAttributes'] = NULL;
$arguments636['data'] = NULL;
$arguments636['class'] = NULL;
$arguments636['dir'] = NULL;
$arguments636['id'] = NULL;
$arguments636['lang'] = NULL;
$arguments636['style'] = NULL;
$arguments636['accesskey'] = NULL;
$arguments636['tabindex'] = NULL;
$arguments636['onclick'] = NULL;
$arguments636['uriOnly'] = false;
$arguments636['configuration'] = array (
);
$arguments636['content'] = '';
$arguments636['section'] = NULL;
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output638 = '';

$output638 .= '
										<span class="no-media-element">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments639 = array();
$arguments639['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments639['title'] = '';
$arguments639['alt'] = '';
$arguments639['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments639['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments639['additionalAttributes'] = NULL;
$arguments639['data'] = NULL;
$arguments639['width'] = NULL;
$arguments639['height'] = NULL;
$arguments639['minWidth'] = NULL;
$arguments639['minHeight'] = NULL;
$arguments639['treatIdAsReference'] = false;
$arguments639['image'] = NULL;
$arguments639['crop'] = NULL;
$arguments639['absolute'] = false;
$arguments639['class'] = NULL;
$arguments639['dir'] = NULL;
$arguments639['id'] = NULL;
$arguments639['lang'] = NULL;
$arguments639['style'] = NULL;
$arguments639['accesskey'] = NULL;
$arguments639['tabindex'] = NULL;
$arguments639['onclick'] = NULL;
$arguments639['ismap'] = NULL;
$arguments639['longdesc'] = NULL;
$arguments639['usemap'] = NULL;
$renderChildrenClosure640 = function() {return NULL;};
$viewHelper641 = $self->getViewHelper('$viewHelper641', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper641->setArguments($arguments639);
$viewHelper641->setRenderingContext($renderingContext);
$viewHelper641->setRenderChildrenClosure($renderChildrenClosure640);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output638 .= $viewHelper641->initializeArgumentsAndRender();

$output638 .= '
										</span>
									';
return $output638;
};
$viewHelper642 = $self->getViewHelper('$viewHelper642', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper642->setArguments($arguments636);
$viewHelper642->setRenderingContext($renderingContext);
$viewHelper642->setRenderChildrenClosure($renderChildrenClosure637);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output635 .= $viewHelper642->initializeArgumentsAndRender();

$output635 .= '
								';
return $output635;
};

$output621 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output621 .= '
						';
return $output621;
};

$output419 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
				';
return $output419;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
	
		<div class="fh5co-card-body">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments643 = array();
$arguments643['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments643['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments643['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments643['additionalAttributes'] = NULL;
$arguments643['data'] = NULL;
$arguments643['class'] = NULL;
$arguments643['dir'] = NULL;
$arguments643['id'] = NULL;
$arguments643['lang'] = NULL;
$arguments643['style'] = NULL;
$arguments643['accesskey'] = NULL;
$arguments643['tabindex'] = NULL;
$arguments643['onclick'] = NULL;
$arguments643['uriOnly'] = false;
$arguments643['configuration'] = array (
);
$arguments643['content'] = '';
$arguments643['section'] = NULL;
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output645 = '';

$output645 .= '
				<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments646 = array();
$arguments646['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments648 = array();
$arguments648['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments648['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments648['append'] = '...';
$arguments648['respectHtml'] = true;
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);
};

$output645 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);

$output645 .= '</h3>
			';
return $output645;
};
$viewHelper650 = $self->getViewHelper('$viewHelper650', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper650->setArguments($arguments643);
$viewHelper650->setRenderingContext($renderingContext);
$viewHelper650->setRenderChildrenClosure($renderChildrenClosure644);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output11 .= $viewHelper650->initializeArgumentsAndRender();

$output11 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments651 = array();
$arguments651['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments653 = array();
$arguments653['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments653['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments653['append'] = '...';
$arguments653['respectHtml'] = true;
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$output11 .= '</p>
		</div>
	
	';
return $output11;
};
$viewHelper655 = $self->getViewHelper('$viewHelper655', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper655->setArguments($arguments9);
$viewHelper655->setRenderingContext($renderingContext);
$viewHelper655->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output0 .= $viewHelper655->initializeArgumentsAndRender();

$output0 .= '



	<!-- teaser -->
	<div class="teaser-text">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments656 = array();
// Rendering Boolean node
$arguments656['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext));
$arguments656['then'] = NULL;
$arguments656['else'] = NULL;
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output658 = '';

$output658 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments659 = array();
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output661 = '';

$output661 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments662 = array();
$arguments662['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments664 = array();
$arguments664['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments664['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments664['append'] = '...';
$arguments664['respectHtml'] = true;
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);
};

$output661 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output661 .= '</div>
			';
return $output661;
};

$output658 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext);

$output658 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments666 = array();
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output668 = '';

$output668 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments669 = array();
$arguments669['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments671 = array();
$arguments671['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments671['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments671['append'] = '...';
$arguments671['respectHtml'] = true;
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);
};

$output668 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext);

$output668 .= '</div>
			';
return $output668;
};

$output658 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments666, $renderChildrenClosure667, $renderingContext);

$output658 .= '
		';
return $output658;
};
$arguments656['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output673 = '';

$output673 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments674 = array();
$arguments674['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments676 = array();
$arguments676['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments676['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments676['append'] = '...';
$arguments676['respectHtml'] = true;
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);
};

$output673 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output673 .= '</div>
			';
return $output673;
};
$arguments656['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output678 = '';

$output678 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments679 = array();
$arguments679['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments681 = array();
$arguments681['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments681['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments681['append'] = '...';
$arguments681['respectHtml'] = true;
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);
};

$output678 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext);

$output678 .= '</div>
			';
return $output678;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments656, $renderChildrenClosure657, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments683 = array();
$arguments683['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments683['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments683['class'] = 'more';
$arguments683['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments683['additionalAttributes'] = NULL;
$arguments683['data'] = NULL;
$arguments683['dir'] = NULL;
$arguments683['id'] = NULL;
$arguments683['lang'] = NULL;
$arguments683['style'] = NULL;
$arguments683['accesskey'] = NULL;
$arguments683['tabindex'] = NULL;
$arguments683['onclick'] = NULL;
$arguments683['uriOnly'] = false;
$arguments683['configuration'] = array (
);
$arguments683['content'] = '';
$arguments683['section'] = NULL;
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output685 = '';

$output685 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments686 = array();
$arguments686['key'] = 'more-link';
$arguments686['id'] = NULL;
$arguments686['default'] = NULL;
$arguments686['htmlEscape'] = NULL;
$arguments686['arguments'] = NULL;
$arguments686['extensionName'] = NULL;
$renderChildrenClosure687 = function() {return NULL;};

$output685 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output685 .= '
		';
return $output685;
};
$viewHelper688 = $self->getViewHelper('$viewHelper688', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper688->setArguments($arguments683);
$viewHelper688->setRenderingContext($renderingContext);
$viewHelper688->setRenderChildrenClosure($renderChildrenClosure684);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output0 .= $viewHelper688->initializeArgumentsAndRender();

$output0 .= '
	</div>

	<!-- footer information -->
	<div class="footer">
		<p>
			<!-- date -->
			<span class="news-list-date">
				<time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments689 = array();
$arguments689['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments689['format'] = 'm-d-Y';
$arguments689['base'] = NULL;
$renderChildrenClosure690 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments691 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments692 = array();
$arguments692['key'] = 'dateFormat';
$arguments692['id'] = NULL;
$arguments692['default'] = NULL;
$arguments692['htmlEscape'] = NULL;
$arguments692['arguments'] = NULL;
$arguments692['extensionName'] = NULL;
$renderChildrenClosure693 = function() {return NULL;};
$arguments691['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);
$arguments691['date'] = NULL;
$arguments691['base'] = NULL;
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments691, $renderChildrenClosure694, $renderingContext);

$output0 .= '
					<meta itemprop="datePublished" content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments695 = array();
$arguments695['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments695['format'] = 'm-d-Y';
$arguments695['base'] = NULL;
$renderChildrenClosure696 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output0 .= '" />
				</time>
			</span>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments697 = array();
// Rendering Boolean node
$arguments697['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstCategory', $renderingContext));
$arguments697['then'] = NULL;
$arguments697['else'] = NULL;
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output699 = '';

$output699 .= '
				<!-- first category -->
				<span class="news-list-category">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments700 = array();
$arguments700['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstCategory.title', $renderingContext);
$arguments700['keepQuotes'] = false;
$arguments700['encoding'] = NULL;
$arguments700['doubleEncode'] = true;
$renderChildrenClosure701 = function() {return NULL;};
$value702 = ($arguments700['value'] !== NULL ? $arguments700['value'] : $renderChildrenClosure701());

$output699 .= (!is_string($value702) ? $value702 : htmlspecialchars($value702, ($arguments700['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments700['encoding'] !== NULL ? $arguments700['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments700['doubleEncode']));

$output699 .= '</span>
			';
return $output699;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output0 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments703 = array();
// Rendering Boolean node
$arguments703['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext));
$arguments703['then'] = NULL;
$arguments703['else'] = NULL;
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output705 = '';

$output705 .= '
				<!-- Tags -->
				<span class="news-list-tags" itemprop="keywords">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments706 = array();
$arguments706['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext);
$arguments706['as'] = 'tag';
$arguments706['key'] = '';
$arguments706['reverse'] = false;
$arguments706['iteration'] = NULL;
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output708 = '';

$output708 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments709 = array();
$arguments709['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('tag'), 'title', $renderingContext);
$arguments709['keepQuotes'] = false;
$arguments709['encoding'] = NULL;
$arguments709['doubleEncode'] = true;
$renderChildrenClosure710 = function() {return NULL;};
$value711 = ($arguments709['value'] !== NULL ? $arguments709['value'] : $renderChildrenClosure710());

$output708 .= (!is_string($value711) ? $value711 : htmlspecialchars($value711, ($arguments709['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments709['encoding'] !== NULL ? $arguments709['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments709['doubleEncode']));

$output708 .= '
					';
return $output708;
};

$output705 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext);

$output705 .= '
				</span>
			';
return $output705;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);

$output0 .= '

			<!-- author -->
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments712 = array();
// Rendering Boolean node
$arguments712['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext));
$arguments712['then'] = NULL;
$arguments712['else'] = NULL;
$renderChildrenClosure713 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output714 = '';

$output714 .= '
				<span class="news-list-author">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments715 = array();
$arguments715['key'] = 'author';
// Rendering Array
$array716 = array();
$array716['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext);
$arguments715['arguments'] = $array716;
$arguments715['id'] = NULL;
$arguments715['default'] = NULL;
$arguments715['htmlEscape'] = NULL;
$arguments715['extensionName'] = NULL;
$renderChildrenClosure717 = function() {return NULL;};

$output714 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments715, $renderChildrenClosure717, $renderingContext);

$output714 .= '
				</span>
			';
return $output714;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments712, $renderChildrenClosure713, $renderingContext);

$output0 .= '
		</p>
	</div>
</div>
';


return $output0;
}


}
#1480353438    240536    