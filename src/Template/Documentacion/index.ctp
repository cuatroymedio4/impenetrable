<?= $this->Html->script('datatables.net/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('datatables.net-bs/js/dataTables.bootstrap.min.js') ?>


<?= $this->element('header')?>


    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="title-hover wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Documentación
                </h1>
                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                    En esta sección ponemos a disposición toda la documentación pertinente al desarrollo del Proyecto
                    de Investigación.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('files.svg', ['alt' => 'CakePHP', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

<div class="container-xxl py-5 mb-5">

        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Documentación del Proyecto</h2>
        </div>

    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5 d-flex justify-content-center text-center">

            <div class="col-lg-10 wow fadeInUp">
                <div class="box" style="border-top: unset;">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive-sm ">
                        <table id="example2" class="table table-bordered table-hover dataTable">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('Fecha') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Título') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Descripción') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Tamaño (KB)') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Archivo') ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($documentacion as $doc): ?>
                                <tr>
                                    <td><?= h($doc->fecha->format('d-m-Y')) ?></td>
                                    <td><?= h($doc->title) ?></td>
                                    <td><?= h($doc->description) ?></td>
                                    <td><?= $this->Number->format(($doc->size / 1024))?></td>

                                    <?php if($doc->format == 'application/pdf'): ?>

                                        <td><?= $this->Html->image('pdf.png', ['pathPrefix' => '/img/icons/', 'class' => 'img',
                                                'style' => ['width: 30px; height: 30px'], 'url' => [
                                                    'controller' => 'Documentacion',
                                                    'action' => 'fileDownload',
                                                    $doc->iddocumentacion
                                                ]]); ?></td>


                                    <?php elseif($doc->format == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' ||
                                        $doc->format == 'application/msword'): ?>

                                        <td><?= $this->Html->image('word.png', ['pathPrefix' => '/img/icons/', 'class' => 'img',
                                                'style' => ['width: 30px; height: 30px'], 'url' => [
                                                    'controller' => 'Documentacion',
                                                    'action' => 'fileDownload',
                                                    $doc->iddocumentacion
                                                ]]); ?></td>


                                    <?php else : ?>

                                        <td><?= $this->Html->image('archivos.png', ['pathPrefix' => '/img/icons/', 'class' => 'img',
                                                'style' => ['width: 30px; height: 30px'], 'url' => [
                                                    'controller' => 'Documentacion',
                                                    'action' => 'fileDownload',
                                                    $doc->iddocumentacion
                                                ]]); ?></td>

                                    <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<script>
    $(function () {
        $('#example2').DataTable({
            'lengthChange': false,
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




