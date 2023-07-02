<hr/>
Bloom PM

<?php if ($this->app->config('application_url') != ''): ?>
    <?php if (isset($task['id'])): ?>
        - <?= $this->url->absoluteLink(t('view the task on Bloom PM'), 'TaskViewController', 'show', array('task_id' => $task['id'])) ?>
    <?php endif ?>
    - <?= $this->url->absoluteLink(t('view the board on Bloom PM'), 'BoardViewController', 'show', array('project_id' => $task['project_id'])) ?>
<?php endif ?>
