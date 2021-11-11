<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>





<h3>Benutzeransicht: <?= ($user->name) ?> </h3>
  


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Passwort</th>
      <th scope="col">Id</th>
      <th scope="col">Erstelldatum</th>
      <th scope="col">Zuletzt geändert</th>
      
    </tr>
  </thead>
  <tbody>
 
    <tr>
        <td><?= $user->name ?></td>
        <td><?= $user->email ?></td>
        <td><?= $user->password ?></td>
        <td><?= $this->Number->format($user->id) ?></td>
        <td><?= $user->created ?></td>
        <td><?= $user->modified ?></td>
        <td >
                <?= $this->Html->link('Bearbeiten', ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink('Löschen', ['action' => 'delete', $user->id], 
                ['confirm' => __('Willst du den Benutzer "{0}" wirklich löschen?', $user->name)]) ?>  
                </td>   
    </tr>

  </tbody>
</table>
