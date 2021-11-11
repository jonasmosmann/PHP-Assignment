


<?= $this->Form->create()?>
  <fieldset>
    <legend>Registrieren</legend>

    <div class="form-group">
      <label for="userName" class="form-label mt-4">Benutzername</label>
      <?= $this->Form->control('name', ['class'=> 'form-control', 'id'=> 'userName'])?>
    </div>

    <div class="form-group">
      <label for="userEmail" class="form-label mt-4">Email</label>
      <?= $this->Form->control('email', ['class'=> 'form-control', 'id'=> 'userEmail'])?>
    </div>

    <div class="form-group">
      <label for="userPassword" class="form-label mt-4">Passwort</label>
      <?= $this->Form->control('password', ['class'=> 'form-control', 'id'=> 'userPassword'])?>
    </div>
  </fieldset>

  <?=$this->Form->button('Benutzer erstellen', ['class'=> 'btn btn-primary'])?>

  <?= $this->Form->end()?>
