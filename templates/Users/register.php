<div class="row">
 <div class="column-responsive">
 <div class="users form content">
 <h2 class="text-center">Register</h2>
 <?= $this->Form->create() ?>
 <fieldset>
 <?= $this->Form->control('name') ?>
 <?= $this->Form->control('email') ?>
 <?= $this->Form->control('password') ?>
 <?= $this->Form->submit('Register',array('class' => 'button')); ?>
 </fieldset>
 <?= $this->Form->end(); ?>
 </div>
 </div>
</div>