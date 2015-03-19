<?php
/**
 * @link http://www.56hm.com/
 * @copyright Copyright (c) 2014 Repar Software LLC
 * @license http://56hm.com/license/
 */

namespace repkit\btn;

use yii\helpers\Html;


/**
 * Button renders a bootstrap button.
 *
 * For Example:
 * ```
 * echo Button::widget([
 *   'label' => 'Hello bootstrap',
 *   'tagName' => 'button',
 *   'options' => [
 *      'type' => 'submit',
 *      'name' => 'buttonName'
 *   ]
 * ]);
 * 
 *
 * @author Repar <47558328@qq.com>
 * @since 1.0 
 */
class Button extends \repkit\base\Widget {

    /**
     * button predefined styles.
     */
	const STYLE_DEFAULT = 'btn-default';
	const STYLE_PRIMARY = 'btn-primary';
	const STYLE_INFO    = 'btn-info';
	const STYLE_SUCCESS = 'btn-success';
	const STYLE_DANGER  = 'btn-danger';
	const STYLE_WARNING = 'btn-warning';
    
    /**
     * @var array button options configuration
     */
	public $options = ['role' => 'button'];

    /**
     * @var string button tag name
     */
	public $tagName = 'label'; 

    /**
     * @var [type]
     */
	public $label = 'Button';

    /**
     * @var array button style class
     * @see [self::STYLE_..]
     */
    public $classes;

    /**
     * @var boolean whether the label should be HTML-encoded.
     */
	public $encodeLabel = false;


	public function init(){
	   parent::init();
	   $this->plugins = false;
       Html::addCssClass($this->options, 'btn');
	}
    

    public function run(){
        Html::addCssClass($this->options, $this->classes ?: self::STYLE_DEFAULT);
    	return Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label, $this->options);

    }
     

}