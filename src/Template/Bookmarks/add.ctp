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
                    <?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?>
                </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="bookmarks form large-9 medium-8 columns content">
                        <?= $this->Form->create($bookmark) ?>
                            <fieldset>
                                <legend>
                                    <?= __('Add Bookmark') ?>
                                </legend>
                                <?php
            // echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('url');
            // echo $this->Form->input('tags._ids', ['options' => $tags]);
            echo $this->Form->input('tag_string', ['type' => 'text']);
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