<div class="row">
    <div class="col-md-6 col-md-offset-3 well">
        <h3 class="text-center">Регистрация</h3>
        <form class="form" method="post" action="<?= PATH;?>/register" data-toggle="validator">
            <div class="col-xs-12">
                <div class="form-group has-feedback">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" name="user_name" placeholder="Имя" value="" required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group has-feedback">
                    <label for="login">Логин</label>
                    <input type="text" class="form-control" name="user_login" placeholder="Логин" value="" required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group has-feedback">
                    <label for="password">Пароль</label>
                    <input type="password" name="user_password" data-error="Пароль должен в себя включать не менее 6 символов" data-minlength="6" class="form-control" placeholder="Пароль" value="" required />
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group has-feedback">
                    <label for="city">Место проживания</label>
                    <input type="text" class="form-control" name="user_address" placeholder="Место проживания" value="" required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group has-feedback">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="user_email" placeholder="Email" value="" required />
                </div>
            </div>
            <div class="text-center col-xs-12">
                <input type="submit" class="btn btn-default" value="Зарегистрироваться" />
            </div>
        </form>
    </div>