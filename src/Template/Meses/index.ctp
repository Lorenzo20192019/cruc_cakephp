<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mese[]|\Cake\Collection\CollectionInterface $meses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mese'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="meses index large-9 medium-8 columns content">
    <h3><?= __('Meses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idmeses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cuota') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meses as $mese): ?>
            <tr>
                <td><?= $this->Number->format($mese->idmeses) ?></td>
                <td><?= h($mese->meses) ?></td>
                <td><?= $this->Number->format($mese->cuota) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mese->idmeses]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mese->idmeses]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mese->idmeses], ['confirm' => __('Are you sure you want to delete # {0}?', $mese->idmeses)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
