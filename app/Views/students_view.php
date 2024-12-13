<form method="post" action="<?= site_url('students/addStudent') ?>">
    <?= csrf_field() ?>
    
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= old('name') ?>" />
        <?php if (isset($errors['name'])): ?>
            <div class="error"><?= $errors['name'] ?></div>
        <?php endif; ?>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?= old('email') ?>" />
        <?php if (isset($errors['email'])): ?>
            <div class="error"><?= $errors['email'] ?></div>
        <?php endif; ?>
    </div>

    <button type="submit">Add Student</button>
</form>

<?php if (session()->getFlashdata('success')): ?>
    <div class="success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>
