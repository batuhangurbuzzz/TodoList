<div class="container mb-5">
    <h1>Görev Güncelleme</h1>
    <?php if (isset($error)) : ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <?php if (isset($success)) : ?>
        <div class="alert alert-success mt-3" role="alert">
            <?php echo $success; ?>
        </div>
    <?php endif; ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" class="form-control"
                   value="<?php echo isset($task['title']) ? $task['title'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea type="text" name="description" id="description" class="form-control"
                      rows="3"><?php echo isset($task['description']) ? $task['description'] : ''; ?></textarea>
            <button type="submit" class="btn btn-primary mt-2">Görevi Güncelle</button>
            <a href="/task" class="btn btn-warning mt-2">Geri Dön</a>



        </div>
    </form>

</div>