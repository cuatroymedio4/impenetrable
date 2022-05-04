

<link rel="stylesheet" type="text/css" href="../css/login/my-login.css">


<?= $this->element('header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">
    <?= $this->Flash->render() ?>
    <div class="container h-100" style="padding-top: 100px;">

        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper wow zoomIn">
                <div class="brand">
                    <img src="../img/integrantes/user_hombre" alt="logo">
                </div>

                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Nuevo Usuario</h4>
                        <?= $this->Form->create($user, ['class' => 'my-login-validation']) ?>
                            <div class="form-group login-form-gruop">
                                <label for="firstname" class="cols-sm-2 control-label fw-bold">Nombre/s: </label>
                                <?= $this->Form->input ('firstname', ['class' => 'form-control', 'placeholder' => '',
                                    'label' => false, 'required']) ?>
                            </div>

                            <div class="form-group login-form-gruop">
                                <label for="lastname" class="cols-sm-2 control-label fw-bold">Apellido/s: </label>
                                <?= $this->Form->input ('lastname', ['class' => 'form-control', 'placeholder' => '',
                                    'label' => false, 'required']) ?>
                            </div>

                            <div class="form-group login-form-gruop">
                                <label for="email" class="cols-sm-2 control-label fw-bold">Email: </label>
                                <?= $this->Form->text('email', ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'required']) ?>
                            </div>

                            <div class="form-group login-form-gruop">
                                <label for="password" class="cols-sm-2 control-label fw-bold">Contraseña: </label>
                                <?= $this->Form->password('password', ['class' => 'form-control',
                                    'placeholder' => '', 'required', 'type' => 'password', 'id' => 'password',
                                    'oninput' => 'passwordValidate()']) ?>
                            </div>

                        <div class="form-group login-form-gruop">
                            <label for="password_2" class="cols-sm-2 control-label fw-bold">Repita Contraseña: </label>
                            <?= $this->Form->password('password_2', ['class' => 'form-control',
                                'placeholder' => '', 'required', 'type' => 'password', 'oninput' => 'passwordValidate()',
                                'id' => 'pass_2']) ?>
                        </div>

                            <div class="form-group m-0">
                                <?= $this->Form->button('Registrarse', ['class' => 'btn btn-large btn-success btn-block', 'disabled' => 'disabled',
                                    'id' => 'boton_submit']) ?>
                            </div>
                            <?= $this->Form->end() ?>

                    </div>

                </div>

                <?= $this->Html->script('login/my-login.js') ?>

                <div class="footer">
                    Copyright &copy; 2022 &mdash; Instituto de Investigaciones Geohistóricas (IIGHI)
                </div>
            </div>
        </div>
    </div>
</section>



