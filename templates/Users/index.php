<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>



<div class="container" style="margin: 50px 0;">
  <div class="row">
    <div class="col-md-6"><h3 >Benutzer</h3></div>
    <div class="col-md-6"><?= $this->Html->link("Neuer Benutzer ", ['action' => 'add'], ['class'=> 'btn btn-warning', 'style'=>"float:right;" ])?> </div>
    </div>
</div>



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
                   
                        <td width="10%">
                        <?=$this->Html->image("user.png", ["alt" => "user",'url' => ['action' => 'view', $user->id],'style' =>'width:30%; height:auto;'])?>
                <?=$this->Html->image("edit.png", ["alt" => "edit",'url' => ['action' => 'edit', $user->id],'style' =>'width:30%; height:auto;'])?>
                
<?= $this->Form->postLink($this->Html->image("trash.png", ["alt" => 'trash','style' =>'width:25%; height:auto;']), 
					    ['action' => 'delete', $user->id],
					    ['escape' => false, 'confirm' => __('Willst du den Benutzer {0} wirklich löschen?', $user->name)])?>





                    </td>



             
            </tr>
            <?php } ?>

  </tbody>
</table>




