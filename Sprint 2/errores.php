<?php if (!empty($errores)) { ?>
    <div class="container">
        <ul style="color:red">
        <?php foreach($errores as $error) { ?>
            <li>
                <?= $error ?>
            </li>
        <?php } ?>
        </ul>
    </div>
<?php } ?>