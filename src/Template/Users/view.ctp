


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
                            <h3 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Usuarios registrados</h3>
                        </div>
                        <div class="col-sm-6">
                            <?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo', ['action' => 'register','?' =>
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
                            <th scope="col"><?= $this->Paginator->sort('email') ?></th>

                            <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Tipo de Usuario') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                            <th scope="col" class="actions"><?= __('Acciones') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->idusers) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->firstname) ?></td>
                                <td><?= h($user->lastname) ?></td>
                                <td><?= h($user->role) ?></td>
                                <td>
                                    <?php  if($user->active == 1): ?>
                                        <h6 class="h5-modified" style="color: green">SI</h6>
                                    <?php else: ?>
                                        <h6 class="h5-modified" style="color: red">NO</h6>
                                    <?php endif; ?>

                                </td>
                                <td class="actions">

                                        <?= $this->Html->link(__('Editar'), ['action' => 'editUser','?' =>
                                            ['Accion' => 'Editar Usuarios', 'Categoria' => 'Usuarios', 'id' => $user->idusers]],
                                            ['class' => 'btn btn-warning']) ?>

                                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deleteUser', $user->idusers],
                                            ['confirm' => __('Eliminar el Usuario: {0}?', $user->firstname . ' ' . $user->lastname),
                                                'class' => 'btn btn-danger']) ?>


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
