<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>






<h3>Benutzer</h3>
  


<?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-warning']) ?>

<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Erstelldatum</th>
    <th scope="col">Zuletzt geändert</th> 
    </tr>
  </thead>
  <tbody>
    
      <?php foreach ($users as $user){ ?>
            <tr>


            <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= ($user->name) ?></td>
                    <td><?= ($user->email) ?></td>
                    <td><?= ($user->created) ?></td>
                    <td><?= ($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Details', ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink('Delete', ['action' => 'delete', $user->id], ['confirm' => __('Willst du den Benutzer "{0}" wirklich löschen?', $user->name)]) ?>
                    </td>



             
            </tr>
            <?php } ?>

  </tbody>
</table>




