
<div class="row">
<div class="col-sm-4 offset-sm-4">
<h3 style="margin: 50px 0;">Login</h3>
<?= $this->Form->create()?>
  <fieldset>

    <div class="form-group">
      <label for="userEmail" class="form-label mt-4">Email</label>
      <?= $this->Form->control('email', ['class'=> 'form-control', 'id'=> 'userEmail','label'=>"",'style'=>"margin-bottom: 40px ;"])?>
    </div>

    <div class="form-group">
      <label for="userPassword" class="form-label mt-4">Passwort</label>
      <?= $this->Form->control('password', ['class'=> 'form-control', 'id'=> 'userPassword','label'=>""])?>
    </div>
  </fieldset>

  <?=$this->Form->button('Login', ['class'=> 'btn btn-primary', 'style'=>"margin: 30px 0;"])?>

  <?= $this->Form->end()?>