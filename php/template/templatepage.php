<nav class="d-flex justify-content-end">
    <ul class="pagination">
        <?php if ($halaktif > 1) : ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $halaktif - 1;?>">Previous</a>
            </li>
        <?php endif;?>
        <?php for($i = 1;$i <= $jumlahhalaman;$i++) : ?>
            <?php if ($i == $halaktif) : ?>
                <li class="page-item active">
                    <a class="page-link" href="?page=<?= $i;?>"><?= $i;?></a>
                </li>
            <?php else : ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $i;?>"><?= $i;?></a>
                </li>
            <?php endif;?>
        <?php endfor;?>
        <?php if ($halaktif < $jumlahhalaman) : ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $halaktif + 1?>">Next</a>
            </li>
        <?php endif;?>
    </ul>
</nav>