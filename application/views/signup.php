<section>
  <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
          <br/><br/>
              <h2>Sign Up</h2>
              <hr class="star-primary">
          </div>
      </div>
      <div class="row">
          <form method="POST" action="<?=base_url('auth/signup')?>" name="form">
            <div class="center-block col-xs-4 text-center" style="float:none">
              <div class="control-group">
                <span class="text-group">Nama</span>
                <div class="form-group">
                <?php
                  $data = array('name' => 'nama', 'maxlength' => 20, 'class' => 'form-control');
                  echo form_input($data);
                ?>
                </div>
              </div>
              <div class="control-group">
                <span class="text-group">Username</span>
                <div class="form-group">
                <?php
                  $data = array('name' => 'username', 'maxlength' => 20, 'class' => 'form-control');
                  echo form_input($data);
                ?>
                </div>
              </div>
              <div class="control-group">
                <span class="text-group">Password</span>
                <div class="form-group">
                <?php
                  $data = array('name' => 'password', 'type'=>'password', 'maxlength' => 20, 'class' => 'form-control');
                  echo form_input($data);
                ?>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group">
                <?php
                  $data = array('name' => 'submit', 'value'=>'Sign Up', 'class'=>'btn btn-success');
                  echo form_submit($data);
                ?><br/>
                <p>Have account ? <a href="<?=base_url('auth/loginform')?>">Login</a></p>
                </div>
              </div>
            </div>
          </form>
      </div>
  </div>
</section>