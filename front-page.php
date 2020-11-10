<?php

/**
 * Template Name: Child - Front End
 * 
 * Front page template
 * 
 * @package HelloElementorChild
 */
get_header();
?>

<style>
  .inner {
    overflow: hidden;
  }

  .inner img {
    transition: all 2.0s ease;
  }

  .inner:hover img {
    transform: scale(1.1);
  }
</style>

<section class="page">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    else : endif; ?>
</section>

<!-- Carousel Start -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://wordpress.test/wp-content/uploads/2020/10/main-B.png" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Event Slider -->

<!-- Pickup -->
<div class="container pt-5">
  <h3>PICK UP</h3>
</div>

<div class="container">
  <div class="card-deck">
    <div class="card" style="border: none;">
      <img class="card-img-top border border-light" src="https://wordpress.test/wp-content/uploads/2020/10/1.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">成人式までの準備ガイド</h5>
        <p class="card-text">振袖選びから成人式当日までを、5つのステップに分けてご紹介いたします。</p>
        <p class="card-text"><small class="text-muted">PRE-GUIDE</small></p>
      </div>
    </div>

    <div class="card" style="border: none;">
      <img class="card-img-top" src="https://wordpress.test/wp-content/uploads/2020/10/2.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">何色の、ハタチにしよう</h5>
        <p class="card-text">2020年新作振袖コレクションを女優・浜辺美波さんが個性豊かな表情でご紹介いたします。</p>
        <p class="card-text"><small class="text-muted">COLLECTION</small></p>
      </div>
    </div>

    <div class="card" style="border: none;">
      <img class="card-img-top" src="https://wordpress.test/wp-content/uploads/2020/10/3.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">浜辺美波 特設サイト</h5>
        <p class="card-text">どの時代の「私」を着ますか？女優・浜辺美波さんが各時代を象徴する振袖姿にて時代の「私」を表現。</p>
        <p class="card-text"><small class="text-muted">SPECIAL</small></p>
      </div>
    </div>
  </div>

  <div class="container d-flex justify-content-center pt-5">
    <button class="btn btn-outline-secondary btn-lg px-5">もっと見る</button>
  </div>
</div>

<!-- Collection -->
<div class="pt-5 mt-5">
  <div class="container mt-5 text-center">
    <h2>COLLECTION</h2>
    <p>コレクション</p>
  </div>
</div>

<!-- Collection Toggle Switcher -->
<div class="container d-flex justify-content-center py-4">
  <nav class="navbar">
    <form class="form-center">
      <button class="btn btn-sm" style="border: none;" type="button">振袖コレクション</button>
      <button class="btn btn-sm" style="border: none;" type="button">袴コレクション</button>
    </form>
  </nav>
</div>

<!-- Image Card -->
<div class="container">
  <div class="card-group" style="border:none" ;>
    <div class="card">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/1-1.png" class="card-img-top m-0" alt="...">
    </div>

    <div class="card">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/3-1.png" class="card-img-top" alt="...">
    </div>

    <div class="card">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/4.png" class="card-img-top" alt="...">
    </div>

    <div class="card">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/5.png" class="card-img-top" alt="...">
    </div>

    <div class="container d-flex justify-content-center pt-5">
      <button class="btn btn-outline-secondary btn-lg px-5 font-weight-light">振袖をさがす</button>
    </div>

  </div>
</div>

<!-- Minami Hamabe -->
<div class="pt-5 mt-5">
  <div class="container mt-5 text-center ">
    <h4>浜辺美波</h4>
    <p>MINAMI HAMABE</p>
  </div>
</div>

<!-- Special & Collection card -->
<div class="card-group">
  <div class="card">
    <div class="inner">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/1-2.png" class="card-img-top" alt="...">
    </div>
  </div>

  <div class="card">
    <div class="inner">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/2-1.png" class="card-img-top" alt="...">
    </div>
  </div>
</div>

<!-- Plan -->
<div class="py-5 mt-5 ">
  <div class="container mt-5 text-center ">
    <h4>PLAN</h4>
    <p>プラン・特典</p>
  </div>
</div>

<!-- Plan Image Card -->
<div class="container">
  <div class="card-deck">
    <div class="card" style="border: none;">
      <img class="card-img-top border border-light" src="https://wordpress.test/wp-content/uploads/2020/10/1-3.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">振袖購入特典</p>
      </div>
    </div>

    <div class="card" style="border: none;">
      <img class="card-img-top border border-light" src="https://wordpress.test/wp-content/uploads/2020/10/2-2.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">振袖購入特典</p>
      </div>
    </div>

    <div class="card" style="border: none;">
      <img class="card-img-top border border-light" src="https://wordpress.test/wp-content/uploads/2020/10/3-2.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">振袖購入特典</p>
      </div>
    </div>
  </div>
</div>

<!-- Gambar tengah -->
<img src="https://wordpress.test/wp-content/uploads/2020/10/b.png" class="d-block w-100 py-5 mt-5" alt="">


<!-- Shop -->

<div class="container py-5">
  <div class="row row-cols-2 py-5">
    <div class="col">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/p.png" class="card-img-top" alt="...">
    </div>

    <div class="col">
      Column
    </div>
  </div>
</div>

<!-- Online Store -->
<div class="py-5 ">
  <div class="container text-center ">
    <h4>ONLINE STORE</h4>
    <p>オンラインストア</p>
  </div>
</div>

<!-- Online store card -->
<div class="container">
  <div class="card-group">
    <div class="card" style="border: none;">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/Group-1052.png" class="card-img-top " alt="...">
      <p class="card-text px-4 pt-4"> リユース振袖販売 </p>
      <p class="font-weight-light px-4"> 全て新品小物付きのリユース振袖専門オンラインストアです。最高級品質の振袖をリーズナブルにご購入いただけます。 </p>
    </div>

    <div class="card" style="border: none;">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/Group-1053.png" class="card-img-top" alt="...">
      <p class="card-text font-weight-lighter px-4 pt-4">リユース振袖販売 ＆ レンタル</p>
      <p class="font-weight-light px-4"> 全国宅配＆クリーニング不要でお手軽に振袖・袴をレンタルいただけるオンラインストアです。お気軽にご利用ください。 </p>
    </div>
  </div>
</div>

<!-- Pre-Guide -->
<div class="py-5 mt-4">
  <div class="container-fluid text-center">
    <img src="https://wordpress.test/wp-content/uploads/2020/10/Group-1055.png" class="d-block w-100" alt="...">
  </div>
</div>

<!-- Pre-Guide Book -->
<div class="d-flex justify-content-center">
  <img src="https://wordpress.test/wp-content/uploads/2020/10/Group-1056.png" alt="">
</div>

<!-- News -->
<div class="container pt-5">
  <div class="row pt-5">
    <div class="col-2">
      <h2>NEWS</h2>
      <p>お知らせ</p>
    </div>

    <div class="col-10">
      <div class="container">
        <div class="row">
          <div class="d-flex flex-row bd-highlight p-3 mb-3 border-top border-bottom">
            <div class="p-2 bd-highlight border-right">20.10.20 </div>
            <div class="p-2 bd-highlight border-right"> NEWS </div>
            <div class="p-2 bd-highlight">本日9/7、台風10号の影響により、熊本店・天神店・久留米店・小倉店・広島店を臨時休業とさせ</div>
          </div>

          <div class="d-flex flex-row bd-highlight p-3 mb-3 border-bottom">
            <div class="p-2 bd-highlight border-right"> 20.08.05 </div>
            <div class="p-2 bd-highlight border-right"> MEDIA </div>
            <div class="p-2 bd-highlight">京都きもの友禅公式オンラインストア、楽天市場店の2店舗がオープンいたしました</div>
          </div>

          <div class="d-flex flex-row bd-highlight p-3 mb-3 border-bottom">
            <div class="p-2 bd-highlight border-right"> 20.06.29 </div>
            <div class="p-2 bd-highlight border-right"> PRESS </div>
            <div class="p-2 bd-highlight">新型コロナウイルス感染拡大防止に伴う全店休業延長に関するお知らせ</div>
          </div>

          <div class="d-flex flex-row bd-highlight p-3 mb-3 border-bottom">
            <div class="p-2 bd-highlight border-right"> 20.01.23 </div>
            <div class="p-2 bd-highlight border-right"> EVENT </div>
            <div class="p-2 bd-highlight">2022年成人式の無料ご相談会スタート！さらに12/27までにご成約の方限定で大人気のブランド</div>
          </div>
        </div>

        <div class="d-flex justify-content-end">
          <button class="btn btn">一覧をみる</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mansory -->
<div class="container pt-4">
  <div class="row pt-5">
    <div class="col-2 align-self-center">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/1-5.png" alt="">
    </div>

    <div class="col-6">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/2-3.png" class="d-block w-100" alt="">
    </div>

    <div class="col-2">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/3-3.png" class="p-2" alt="">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/4-1.png" class="p-2" alt="">
    </div>

    <div class="col-2 align-self-center">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/5-1.png" class="" alt="">
    </div>
  </div>
</div>

<!-- Official SNS -->
<div class="pt-5 mt-5">
  <div class="container mt-5 text-center ">
    <h4>OFFICIAL SNS</h4>
    <p>様々な情報を公式アカウントを通じてお届けします</p>
  </div>
</div>

<div class="container py-5 d-flex justify-content-center">
  <div class="row">
    <div class="col-2">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/ic-instagram.png" alt="">
    </div>
    <div class="col-2">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/ic-facebook.png" alt="">
    </div>
    <div class="col-2">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/ic-twitter.png" alt="">
    </div>
    <div class="col-2">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/ic-youtube.png" alt="">
    </div>
    <div class="col-2">
      <img src="https://wordpress.test/wp-content/uploads/2020/10/line.png" alt="">
    </div>
  </div>
</div>

<?php require_once('kyoto-footer.php'); ?>
<?php get_footer(); ?>