    <div class="container my-4">
        <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4">
            <?php if ($datos) : foreach ($datos['dogs'] as $canino) : ?>
                    <div class="col">
                        <div class="card h-100 shadow border-0">
                            <a class="content-opacity overflow-hidden" href="<?php echo base_url("/ficha/{$canino['PRR_ID']}") ?>">
                                <img class="card-img-top" src="<?php echo base_url("uploads/{$canino['PRR_FOTO']}") ?>">
                            </a>
                            <div class="card-body p-4">
                                <h3 class="card-title text-secondary"><?php echo mb_strtoupper($canino['PRR_NOMBRE']); ?></h3>
                                <h5 class="card-subtitle text-muted mb-2"><?php echo $canino['PRR_SEXO'] == 'M' ? 'MACHO' : 'HEMBRA'; ?></h5>
                                <h5 class="card-subtitle text-muted"><?php echo mb_strtoupper($canino['PRR_LONGEVIDAD']); ?></h5>
                            </div>
                        </div>
                    </div>
            <?php endforeach; endif; ?>
        </div>
    </div>

    <script src="<?php echo base_url('js/bootstrap.js') ?>"></script>