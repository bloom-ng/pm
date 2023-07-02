<p>
    <?= t('You have been invited to register on Bloom Product Management.') ?>
</p>

<p>
    <?= $this->url->absoluteLink(t('Click here to join your team'), 'UserInviteController', 'signup', array('token' => $token)) ?>
</p>

<?php if ($this->app->config('application_url')): ?>
    <hr>
    <a href="<?= $this->app->config('application_url') ?>">Bloom PM</a>
<?php endif ?>
