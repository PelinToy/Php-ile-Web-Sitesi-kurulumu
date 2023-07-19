<?php
$sayfa="Ana Sayfa";
include("inc/vt.php");
$sorgu=$baglanti->prepare("select * from anasayfa");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$anahtar=$sonuc["anahtar"];
include("inc/head.php");
?>

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading"><?=$sonuc["ustbaslik"] ?></div>
            <div class="masthead-heading text-uppercase"><?=$sonuc["altbaslik"] ?></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?=$sonuc["link"]?>"><?= $sonuc["linkmetin"] ?></a>
        </div>
</header>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">

                    <?php
                    $sorgu2=$baglanti->prepare("select * from referans WHERE aktif=1 Order BY sira");
                    $sorgu2->execute();
                    while($sonuc2=$sorgu2->fetch())
                    {
                    ?>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?=$sonuc2["link"] ?>"><img class="img-fluid d-block mx-auto" src="assets/img/logos/<?=$sonuc2["foto"] ?>" alt="" /></a>
                    </div>
                        <?php
                    }
                        ?>
                </div>
            </div>
        </div>
<?php
include("inc/footer.php");
?>