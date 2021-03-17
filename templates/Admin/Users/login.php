<div class="login-content" style="max-width: 540px;">
    <div class="login-logo">
        <a href="/">
            <!--<img class="align-content" src="/img/logo.png" alt="">-->
        </a>
    </div>

    <div class="login-form">
        <?= $this->Flash->render() ?>

        <?= $this->BootstrapForm->create() ?>
        <div class="form-group">
            <?= $this->BootstrapForm->control('user_name', ['required' => true,'class'=>'form-control','placeholder'=>'Username']) ?>
        </div>
        <div class="form-group">
            <?= $this->BootstrapForm->control('password', ['required' => true,'class'=>'form-control','label'=>'password']) ?>
        </div>
        <div class="checkbox">
            <label>
                <?= $this->BootstrapForm->checkbox('remember_me', ['checked' => true]) ?> Remember me
            </label>
        </div>
        <?= $this->BootstrapForm->submit(__('Log in'),['class'=>'btn btn-success btn-flat m-b-30 m-t-30']); ?>
        <?= $this->BootstrapForm->end() ?>
    </div>
</div>

