<?php
class Form_Decorator_DeInput extends Aktel_Form_Decorator_Abstract
{
	protected $_format = '<div>
					     <p for="%s">%s:</p> 
					     <input class="logininput" id="%s" name="%s" type="text" value="%s"/>
					    </div>';
   public function render($content)
	{
		$element = $this->getElement();
		$name = htmlentities($element->getFullyQualifiedName());
		$label = htmlentities($element->getLabel());
		$id = htmlentities($element->getId());
		$value = htmlentities($element->getValue());
		$markup = sprintf($this->_format, $name, $label, $id, $name, $value);
		return $markup;
	}


}