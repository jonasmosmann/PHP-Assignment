<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>





<h3 style="margin: 50px 0;">Benutzeransicht: <?= ($user->name) ?> </h3>
  


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Id</th>
      <th scope="col">Erstelldatum</th>
      <th scope="col">Zuletzt geändert</th>
      
    </tr>
  </thead>
  <tbody>
 
    <tr>
        <td><?= $user->name ?></td>
        <td><?= $user->email ?></td>
        <td><?= $this->Number->format($user->id) ?></td>
        <td><?= $user->created ?></td>
        <td><?= $user->modified ?></td>
        <td width="10%">
        <?=$this->Html->image("edit.png", ["alt" => "edit",'url' => ['action' => 'edit', $user->id],'style' =>'width:30%; height:auto;'])?>
                
                <?= $this->Form->postLink($this->Html->image("trash.png", ["alt" => 'trash','style' =>'width:25%; height:auto;']), 
                              ['action' => 'delete', $user->id],
                              ['escape' => false, 'confirm' => __('Willst du den Benutzer {0} wirklich löschen?', $user->name)])?>
                </td>   
    </tr>

  </tbody>
</table>
