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
                    <?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?>
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
                    <div class="tags form large-9 medium-8 columns content">
                        <?= $this->Form->create($tag) ?>
                            <fieldset>
                                <legend>
                                    <?= __('Add Tag') ?>
                                </legend>
                                <?php
            echo $this->Form->input('title');
            echo $this->Form->input('bookmarks._ids', ['options' => $bookmarks]);
        ?>
                            </fieldset>
                            <?= $this->Form->button(__('Submit')) ?>
                                <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>