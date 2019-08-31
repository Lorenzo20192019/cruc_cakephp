<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->idclientes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->idclientes], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->idclientes)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->idclientes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($cliente->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($cliente->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($cliente->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= h($cliente->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idclientes') ?></th>
            <td><?= $this->Number->format($cliente->idclientes) ?></td>
        </tr>
    </table>
</div>
