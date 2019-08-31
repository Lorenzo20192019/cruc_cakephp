<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mese $mese
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mese'), ['action' => 'edit', $mese->idmeses]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mese'), ['action' => 'delete', $mese->idmeses], ['confirm' => __('Are you sure you want to delete # {0}?', $mese->idmeses)]) ?> </li>
        <li><?= $this->Html->link(__('List Meses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mese'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="meses view large-9 medium-8 columns content">
    <h3><?= h($mese->idmeses) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Meses') ?></th>
            <td><?= h($mese->meses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idmeses') ?></th>
            <td><?= $this->Number->format($mese->idmeses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuota') ?></th>
            <td><?= $this->Number->format($mese->cuota) ?></td>
        </tr>
    </table>
</div>
