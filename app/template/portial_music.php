<?php
    $audioFiles = $box; // Переименовали переменную для ясности
    foreach ($audioFiles as $file):
        if (file_exists($file)) : ?>
            <div class="audio-player">
                <audio controls="controls">
                    <source src="<?php echo htmlspecialchars($file); ?>" type="audio/mpeg">
                    Ваш браузер не поддерживает HTML5 audio.
                </audio>
            </div>
        <?php else: ?>
            <p>Файл "<?php echo htmlspecialchars($file); ?>" не найден.</p>
    <?php endif;
    endforeach;
    ?>
