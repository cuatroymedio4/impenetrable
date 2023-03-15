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
                            <h3 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Eventos registrados</h3>
                        </div>
                        <div class="col-sm-6">
                            <?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo', ['action' => 'add','?' =>
                                ['Accion' => 'Agregar Localidad', 'Categoria' => 'Mapainteractive']],
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
                            <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Id Punto') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Resumen') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Id localidad icon') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                            <th scope="col" class="actions"><?= __('Acciones') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($puntosInteres as $loc): ?>
                            <tr>
                                <td><?= $this->Number->format($loc->idpuntos_interes) ?></td>
                                <td><?= h($loc->name) ?></td>
                                <td><?= h($loc->id_punto) ?></td>
                                <td><?= h($loc->resumen) ?></td>
                                <td><?= h($loc->localidad) ?></td>
                                <td><?= h($loc->path) ?></td>
                                <td class="actions">
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit','?' =>
                                            ['Accion' => 'Editar', 'Categoria' => 'Mapainteractive', 'Context' => 'Admin', 'id' => $loc->idpuntos_interes]],
                                            ['class' => 'btn btn-small btn-warning']) ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $loc->idpuntos_interes],
                                            ['confirm' => __('Eliminar el registro: {0}?', $loc->idpuntos_interes),
                                                'class' => 'btn btn-small btn-danger']) ?>
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
