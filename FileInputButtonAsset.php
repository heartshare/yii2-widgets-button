<?php
/**
 * @link http://www.56hm.com/
 * @copyright Copyright (c) 2014 Repar Software LLC
 * @license http://56hm.com/license/
 */

namespace repkit\btn;


/**
 * File input require assets
 *
 * @author Repar <47558328@qq.com>
 * @since 1.0 
 */
class FileInputButtonAsset extends \yii\web\AssetBundle {

	public $sourcePath = '@repkit/btn/dist';

	public $css = [
        'css/fileinput.min.css'
	];

}