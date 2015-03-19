<?php
/**
 * @link http://www.56hm.com/
 * @copyright Copyright (c) 2014 Repar Software LLC
 * @license http://56hm.com/license/
 */

namespace repkit\btn;

use Yii;
use yii\helpers\Html;


/**
 *  bootstrap button style of file selector
 *
 * @author Repar <47558328@qq.com>
 * @since 1.0 
 */
class FileInputButton extends \repkit\base\InputWidget {

    public $label;
    /**
     * @var array file input options
     */
    public $buttonOptions = [];

    /**
     * @var boolean Whether allows to select multiple files
     */
    public $multiple = false;


	public $tempalte = "{label}\n{input}";

	protected $_mesCat = 'button';

	protected $_basePath = '@repkit/btn/messages';


    public function init(){

        parent::init();
        if($this->multiple === true){
           $this->options['multiple'] = true;
        }

        $parts['{input}'] = $this->hasModel() ? 
                    Html::activeFileInput($this->model, $this->attribute, $this->options):
                    Html::fileInput($this->name, '', $this->options);

        Html::addCssClass($this->buttonOptions['options'], 'repkit-fileinput');
        $parts['{label}'] = $this->label ?: Yii::t('button', 'Open Local File');  
        $this->buttonOptions['label'] = strtr($this->tempalte, $parts);
    }

    public function run(){
    	echo Button::widget($this->buttonOptions);
    	FileInputButtonAsset::register($this->view);

    }

}