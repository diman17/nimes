<?php
  require_once './mock.php'
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nîmes</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body class="home">
  <header class="header">
    <nav class="header__nav-page nav-page">
      <ul class="nav-page__list">
        <li class="nav-page__item">
          <a class="nav-page__link" href="#">Woman</a>
        </li>
        <li class="nav-page__item">
          <a class="nav-page__link" href="#">Man</a>
        </li>
        <li class="nav-page__item">
          <a class="nav-page__link" href="#">New</a>
        </li>
      </ul>
    </nav>
    <h1 class="header__logo">Nîmes</h1>
    <nav class="header__nav-user nav-user">
      <ul class="nav-user__list">
        <li class="nav-user__item">
          <a class="nav-user__link nav-user__link--cart" href="#">
            <span class="visually-hidden">Cart</span>
          </a>
        </li>
        <li class="nav-user__item">
          <a class="nav-user__link nav-user__link--search" href="#">
            <span class="visually-hidden">Search</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="home__main">
    <section class="home__promo promo">
      <h2 class="visually-hidden">Promo</h2>
      <div class="promo__wrapper">
        <div class="promo__collection">
          <p class="promo__slogan">The quality you deserve</p>
          <p class="promo__collection-name">Denim</p>
          <a class="promo__collection-link button" href="#">Check new collection</a>
        </div>
        <div class="promo__image-wrapper">
          <img class="promo__image" src="./assets/images/6bd5cc90818e964627daeb381da06d08.jpeg" width="430" height="517" alt="close">
        </div>
        <ul class="promo__social-list social-list">
          <li class="social-list__item">
            <a class="social-list__link" href="#">Facebook</a>
          </li>
          <li class="social-list__item">
            <a class="social-list__link" href="#">Instagram</a>
          </li>
        </ul>
        <a class="promo__skip-to-content" href="#">
          <span class="visually-hidden">Skip to content</span>
        </a>
      </div>
    </section>
    <section class="home__bestsellers bestsellers">
      <div class="bestsellers__wrapper">
        <h2 class="bestsellers__title">Bestsellers</h2>
        <a class="bestsellers__link link" href="#">View all</a>
      </div>
      <ul class="bestsellers__list">
        <?php foreach ($products as $product) : ?>
          <li class="bestsellers__item">
            <a class="bestsellers__card card" href="#">
              <img class="card__image" src="<?= $product['image_path'] ?>" alt="<?= $product['name'] ?>" width="270" height="349">
              <h3 class="card__title"><?= $product['name'] ?></h3>
              <p class="card__price">$ <?= $product['price'] ?></p>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </section>
    <section class="home__collection collection">
      <h2 class="visually-hidden">Collection Fall 2019</h2>
      <div class="collection__wrapper">
        <img
          class="collection__image"
          src="./assets/images/84df9ce10cda30abc4520d25f9c09aae.jpeg"
          alt="street fashion collection"
          width="700"
          height="370"
        >
        <div class="collection__inner">
          <div class="collection__info">
            <p class="collection__description">Street fashion collection</p>
            <p class="collection__date">Fall 2019</p>
            <a class="collection__link button" href="#">Shop now</a>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
