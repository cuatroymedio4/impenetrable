<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($puntosIntere) ?>
        <div class="col-lg-7 center-div">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Detalles del Punto de Interes</h5>
                </div>

                <div class="box-body">

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Nombre: </label>
                        <?= $this->Form->input('name', ['class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <label for="description" class="cols-sm-2 control-label fw-bold">Resumen: </label>
                        <?= $this->Form->textarea('resumen', ['rows' => '10', 'cols' => '5', 'maxlength' => '300' , 'class' => 'form-control',
                            'placeholder' => '', 'required']) ?>
                    </div>
                    <br>


                    <div class="form-group login-form-gruop">
                        <label for="description" class="cols-sm-2 control-label fw-bold">Descripción: </label>
                        <?= $this->Form->textarea('description', ['rows' => '10', 'cols' => '5', 'class' => 'form-control',
                            'placeholder' => '']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">ID Punto de Interes: </label>
                        <?= $this->Form->input('id_punto', ['type' => 'number', 'class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">ID Localidad: </label>
                        <?= $this->Form->input('localidad', ['type' => 'number', 'class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>
                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Path de Imagen: </label>
                        <?= $this->Form->input('path', ['class' => 'form-control',
                            'placeholder' => '', 'label' => false]) ?>
                    </div>

                    <div class="form-group m-0">
                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-large btn-success float-right',
                            'id' => 'boton_submit']) ?>
                    </div>
                    </br>


                    </br>
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>


</section>

<?= $this->Html->script('validations.js') ?>
