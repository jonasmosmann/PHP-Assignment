<?= $this->Html->link("Aufgabe hinzufügen", ['action' => 'add'])?>




<div class="tasks index large-9 medium-8 columns content">
    <h3>Aufgaben</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Titel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EntryTime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Owner') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($tasks as $task){ ?>
            <tr>
                <td><?= $this->Html->link($task->Title, ['action' => 'view', $task->TaskId]) ?></td>
                <td><?= $task->EntryTime->format(DATE_RFC850) ?></td>
                <td><?=  $task->Owner ?></td>
            
                <td class="actions">
                <?= $this->Html->link('Bearbeiten', ['action' => 'edit', $task->TaskId]) ?>
                <?= $this->Form->postLink('Löschen', ['action' => 'delete', $task->TaskId], 
                ['confirm' => 'Willst du diese Aufgabe wirklich löschen?', $task->TaskId]) ?>  
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<p> Es gibt noch <?= $number ?> Aufgaben zu erledigen!</p>

