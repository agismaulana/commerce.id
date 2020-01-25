
<?php 

$kategoris = mysqli_query($conn,"SELECT * FROM kategori");

?>
<nav class="navbar navbar-expand-lg navbar-light" style="background:#fe9126">
    
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="container">
        <div class="collapse navbar-collapse mx-auto" id="nav">
            <div class="navbar-nav mx-auto">
                <div class="nav-item ml-5" style="font-size:20px;">
                    <a class="nav-link text-light" href="../index/index.php">Home</a>
                </div>
                <?php foreach ($kategoris as $kategori) { ?>
                <div class="nav-item ml-5" style="font-size:20px;">
                    <a class="nav-link text-light" href="kategori.php?id=<?= $kategori['id'];?>"><?= $kategori['nama']?></a>
                </div>
                <?php } ?>
                <div class="nav-item ml-5" style="font-size:20px;">
                    <a class="nav-link text-light" href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </div>
</nav>