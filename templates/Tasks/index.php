<table>
<?php foreach ($tasks as $task){ ?>
            <tr>
            <td>
                    <?= $this->Html->link($task->Title, ['action' => 'view', $task->slug]) ?>
                </td>
                <td><?= $task->Description ?></td>
                <td><?= $task->Completed ?></td>
                <td><?= $task->Deleted ?></td>
                <td><?= $task->EntryTime->format(DATE_RFC850) ?></td>
                <td><?=  $task->Owner ?></td>
                
            </tr>
<?php } ?>

</table>