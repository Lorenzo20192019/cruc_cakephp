<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->idclientes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->idclientes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->control('nombres');
            echo $this->Form->control('apellidos');
            echo $this->Form->control('direccion');
            echo $this->Form->control('edad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
