<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    <?= $this->fetch('title') ?>
                </a>
                <li class="heading">
                    <?= __('Actions') ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?>
                </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?= __('Tags') ?></h3>
                    <table class="table table-hover" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    <?= $this->Paginator->sort('id') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('title') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('created') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('modified') ?>
                                </th>
                                <th class="actions">
                                    <?= __('Actions') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tags as $tag): ?>
                                <tr>
                                    <td>
                                        <?= $this->Number->format($tag->id) ?>
                                    </td>
                                    <td>
                                        <?= h($tag->title) ?>
                                    </td>
                                    <td>
                                        <?= h($tag->created) ?>
                                    </td>
                                    <td>
                                        <?= h($tag->modified) ?>
                                    </td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $tag->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next(__('next') . ' >') ?>
                        </ul>
                        <p>
                            <?= $this->Paginator->counter() ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->