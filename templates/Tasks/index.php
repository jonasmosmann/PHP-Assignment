<?= $this->Html->link("Aufgabe hinzufügen", ['action' => 'add'])?>


<table>
<?php foreach ($tasks as $task){ ?>
            <tr>
            <td>
                    <?= $this->Html->link($task->Title, ['action' => 'view', $task->TaskId]) ?>
                </td>
                
                <td><?= $task->Completed ?></td>
                <td><?= $task->Deleted ?></td>
                <td><?= $task->EntryTime->format(DATE_RFC850) ?></td>
                <td><?=  $task->Owner ?></td>
                <td><?= $this->Html->link('Bearbeiten', ['action' => 'edit', $task->TaskId]) ?></td>
                
            </tr>
<?php } ?>

</table>