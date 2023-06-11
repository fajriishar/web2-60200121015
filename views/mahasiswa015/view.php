<?php

    use yii\widgets\DetailView;

?>

<div class=" container mb-5 tabb " id="tengah">
    <div class="mb-5"></div>
    <?=

        DetailView::widget([
            'model' => $mahasiswa015,
            'attributes' => [
                'id015',
                'nim015',
                'nama015',
                'kelas015',
                'status015',
            ],
        ]);

    ?>
</div>