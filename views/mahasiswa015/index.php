<?php

    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;

?>

<div class="container mt-5 mb-5 tabb" id="kelas">
    <div class="mb-5"></div>
    <div class="mt-5" >
        <?= 
            Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-primary']); 
        ?>
        <div class="">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => SerialColumn::className()],
                    'id015',
                    'nim015',
                    'nama015',
                    'kelas015',
                    'status015',
                    
                    ['class' => ActionColumn::className(),]
                    ]
                ]);
            
            ?> 
        </div>
    </div>
</div>