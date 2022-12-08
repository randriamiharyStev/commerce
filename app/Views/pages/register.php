    
<div class="container-fluid bg-secondary" style="widht:100%;height:100%;"> 
    <div class="row">
        <div class="col-md-4"></div>
                <div class="col-md-4 col-md-offset-4 shadow mt-5 login">
                    <h4 class="mt-2" style="text-align:center; color:red ; font-family:gras">Sign up</h4>
                    <!-- <form>-->
                    <?php //echo form_open('Home/insertDonne') ; ?>
                            <?= session()->getFlashdata('error') ?>
                            <?= service('validation')->listErrors() ?>
                    <form action="/Commerce/home/insertDonne" method="post">
                        
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="">name</label>
                            <input type="text" class="form-control" name="name" placeholder="enter username"  value="<?= set_value('name') ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation , 'name') : ''?></span>
                        </div>
                        <div class="form-group">
                            <label for="">pseudo</label>
                            <input type="text" class="form-control" name="pseudo" placeholder="enter your pseudo"  value="<?= set_value('pseudo') ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation , 'pseudo') : ''?></span>

                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control" name="email" placeholder="enter your email"  value="<?= set_value('email') ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation , 'email') : '' ?></span>

                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" class="form-control" name="password" placeholder="password"  value="<?= set_value('password') ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation , 'password') : ''?></span>

                        </div>
                        <div class="form-group">
                            <label for="">confirm password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="confirm password"  value="<?= set_value('cpassword') ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation , 'cpassword') : ''?></span>

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary form-control mt-3 btn-block" id="btn-register" name="btn-register" type="submit">Register</button>
                        </div>
                    </form>
                 </div>
        <div class="col-md-4"></div>  
   </div>
</div>     