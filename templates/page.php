<!-- Services section-->
<section class="<?= $even ? 'bg-light' : '';?>" id="<?= esc($id);?>">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
                <?php if($content):?>
                    <div class="lead"><?= $content;?></div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>