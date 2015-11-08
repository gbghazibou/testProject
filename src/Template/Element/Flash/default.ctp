<?php
$class = 'message';
// if (!empty($params['class'])) {
//     $class .= ' ' . $params['class'];
// }
?>
<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><div class="alert alert-danger"><?= h($message) ?></div></div>
