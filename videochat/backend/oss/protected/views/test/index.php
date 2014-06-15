    <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
        'attribute'=>'visit_time',
        'language'=>'zh_cn',
        'name'=>'visit_time',
        'options'=>array(
            'showAnim'=>'fold',
            'showOn'=>'both',
            'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar.gif',
            'buttonImageOnly'=>true,
            //'minDate'=>'new Date()',
            'dateFormat'=>'yy-mm-dd',
        ),
        'htmlOptions'=>array(
            'style'=>'height:18px',
        ),
    ));
    ?>

