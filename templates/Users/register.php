
<h3 style="margin: 50px 0;">Registrieren</h3>

<?= $this->Form->create()?>
  <fieldset>

    <div class="form-group">
      <label for="userName" class="form-label mt-4">Benutzername</label>
      <?= $this->Form->control('name', ['class'=> 'form-control', 'id'=> 'userName','label'=>"",'style'=>"margin-bottom: 40px ;"])?>
    </div>

    <div class="form-group">
      <label for="userEmail" class="form-label mt-4">Email</label>
      <?= $this->Form->control('email', ['class'=> 'form-control', 'id'=> 'userEmail','label'=>"",'style'=>"margin-bottom: 40px ;"])?>
    </div>

    <div class="form-group">
      <label for="userPassword" class="form-label mt-4">Passwort</label>
      <?= $this->Form->control('password', ['class'=> 'form-control', 'id'=> 'userPassword','label'=>""])?>
    </div>
  </fieldset>

  <?=$this->Form->button('Benutzer erstellen', ['class'=> 'btn btn-primary', 'style'=>"margin: 30px 0;"])?>

  <?= $this->Form->end()?>
