
<?= $this->Html->script('datatables.net/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('datatables.net-bs/js/dataTables.bootstrap.min.js') ?>

<?= $this->element('admin/header')?>

<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Imágenes del Slider</h3>
                        </div>
                        <div class="col-sm-6">
                            <?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo', ['action' => 'addImageSlider','?' =>
                                ['Accion' => 'Editar Configuraciones', 'Categoria' => 'Configuraciones']],
                                ['class' => 'btn btn-success float-right', 'escape' => false]) ?>
                        </div>
                    </div>


                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive-sm">
                    <table id="example2" class="table table-bordered table-hover dataTable">
                        <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Título') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Descripción') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Imagen') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('¿Mostrar?') ?></th>
                            <th scope="col" class="actions"><?= __('Acciones') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($slider_home as $sld): ?>
                            <tr>
                                <td><?= $this->Number->format($sld->idslider_home) ?></td>
                                <td><?= h($sld->titulo) ?></td>
                                <td><?= h($sld->descripcion) ?></td>



                                <td><?= $this->Html->image(h($sld->photo), ['pathPrefix' => '/img/slider/', 'class' => 'img-thumbnail',
                                        'style' => ['width: 150px']]); ?></td>

                                <?php if($sld->is_show): ?>

                                    <td>

                                        <?= $this->Form->postLink($this->Html->tag('span', '', ['class' => 'fa fa-remove', 'aria-hidden' => 'true']),
                                            ['controller' => 'Configuraciones', 'action' => 'hideInSlider', $sld->idslider_home],
                                            ['confirm' => __('Quitar en Slider?'),
                                                'class' => 'btn btn-danger', 'escape' => false]) ?>
                                    </td>

                                <?php else: ?>
                                    <td>
                                        <?= $this->Form->postLink($this->Html->tag('span', '', ['class' => 'fa fa-check', 'aria-hidden' => 'true']),
                                            ['controller' => 'Configuraciones', 'action' => 'showInSlider', $sld->idslider_home],
                                            ['confirm' => __('Mostrar en Slider?'),
                                                'class' => 'btn btn-success', 'escape' => false]) ?>

                                    </td>
                                <?php endif; ?>


                                <td class="actions">
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <?= $this->Html->link(__('Editar'), ['action' => 'editImageSlider','?' =>
                                            ['Categoria' => 'Configuraciones', 'Context' => 'Admin', 'id' => $sld->idslider_home]],
                                            ['class' => 'btn btn-block btn-warning']) ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deleteImageSlider', $sld->idslider_home],
                                            ['confirm' => __('Eliminar el registro: {0}?', $sld->idslider_home),
                                                'class' => 'btn btn-block btn-danger']) ?>
                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </div>


        </div>
    </div>

</section>

<script>
    $(function () {
        $('#example2').DataTable({
            'language' : {
                'search': "Buscar:",
                'paginate': {
                    'first':      "Primer",
                    'previous':   "Anterior",
                    'next':       "Siguiente",
                    'last':       "Anterior"
                }},
            'autoWidth'   : true
        })
    })
</script>


