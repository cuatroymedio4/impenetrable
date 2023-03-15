<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($localidades) ?>
        <div class="col-lg-5 center-div">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Detalles de la Localidad</h5>
                </div>

                <div class="box-body">

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Nombre: </label>
                        <?= $this->Form->input('nombre', ['class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <label for="description" class="cols-sm-2 control-label fw-bold">Descripción: </label>
                        <?= $this->Form->textarea('descripcion', ['rows' => '10', 'cols' => '5' , 'class' => 'form-control',
                            'placeholder' => '', 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Id Localidad Icon: </label>
                        <?= $this->Form->input('id_loc_icon', ['type' => 'number', 'class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
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
