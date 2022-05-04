


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
                                ['Accion' => 'Editar Usuarios', 'Categoria' => 'Usuarios']],
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
                            <th scope="col"><?= $this->Paginator->sort('Fecha') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Descripción') ?></th>

                            <th scope="col" class="actions"><?= __('Acciones') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($timeline as $time): ?>
                            <tr>
                                <td><?= $this->Number->format($time->idtimeline) ?></td>
                                <td><?= h($time->title) ?></td>
                                <td><?= h($time->fecha) ?></td>
                                <td><?= h($time->description) ?></td>


                                <td class="actions">
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <?= $this->Html->link(__('Editar'), ['action' => 'editUser','?' =>
                                            ['Accion' => 'Editar Usuarios', 'Categoria' => 'Usuarios', 'id' => $time->idtimeline]],
                                            ['class' => 'btn btn-block btn-warning']) ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deleteUser', $time->idtimeline],
                                            ['confirm' => __('Eliminar el registro: {0}?', $time->idtimeline . ' ' . $time->idtimeline),
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
