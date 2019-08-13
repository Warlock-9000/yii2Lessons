<?php
/**
 * Created by PhpStorm.
 * User: base
 * Date: 12.08.2019
 * Time: 21:46
 */
?>
<h1>Show Action</h1>

<button class="btn btn-success" id="btn">Click me...</button>

<?php
    $script = <<<JS
    $('#btn').on('click', function() {
      $.ajax({
      url: '/post/index',
      data: {test: 123},
      type: 'GET',
      success: function(res){
          console.log(res);
      },
      error: function() {
        alert('Error!');
      }
      });
    });

JS;
    $this->registerJs($script);

?>

<?php
//    $this->registerJsFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset'])

//$this->registerJs("$('.container').append('<p>SHOW!!!</p>');", \yii\web\View::POS_LOAD)
?>
<?php //$this->registerCss('.container{background:#ccc;}') ?>