<?php
namespace effsoft\eff\asset\datatables;
use effsoft\eff\EffAssetBundle;

class DatatablesAssetBundle extends EffAssetBundle{

    public $sourcePath = '@bower/datatables/media';

    public function init(){
        parent::init();

    }
    public $css = [
        YII_ENV_DEV ? 'css/dataTables.bootstrap4.css':'css/dataTables.bootstrap4.min.css',
    ];
    public $js = [
        YII_ENV_DEV ? 'js/jquery.dataTables.js':'js/jquery.dataTables.min.js',
        YII_ENV_DEV ? 'js/dataTables.bootstrap4.js':'js/dataTables.bootstrap4.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'images/*',
            'js/*',
        ],
    ];

    
}