<?php require_once "blocks/header.php" ?>
<?php require_once "blocks/navbar.php" ?>

  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
        <div class="row wow rotateInUpLeft">
            <div class="col-md-6 mb-4">
                <img src="https://ttjk.info/wp-content/uploads/2020/06/htmlimage-2-768x458.jpeg" alt="botelke" class="img-fuild" style="width: 105%">
            </div>
            <div class="col-md-6 mb-4 wow zoomIn">
                <div class="p-4">
                    <div class="mb-3">
                        <a href="">
                            <span class="badge purple mr-1">Наши продукты</span>
                        </a>
                        <a href="">
                            <span class="badge blue mr-1">New</span>
                        </a>
                        <a href="">
                            <span class="badge red mr-1">Бестселлер</span>
                        </a>
                    </div>
                    <p class="lead">
                        <span class="mr-1">
                            <del>30 000 т</del>
                        </span>
                        <span class="mr-1">
                            20 000 т 
                        </span>
                    </p>
                    <p class="lead font-weight-bold">Описание</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo officiis debitis animi quia nisi adipisci odio odit soluta deleniti optio modi voluptas ullam, necessitatibus aliquam vero recusandae, 
                        quisquam temporibus cupiditate.
                    </p>
                    <!--кол товаров-->
                    <form action="" class="d-flex justidy-content-left">
                        <input type="number" value="1" aria-label="Search" style="width: 100px;" class="form-control">
                        <button type="submit" class="btn btn-primary btn-md my-0 p">
                             Добавить в корзину <i class="fa fa-shopping-cart ml-1"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <hr>

        <div class="row d-flex justify-content-center wow slideInLeft">
            <div class="col-md-6 text-center">
                <h4 class="my-4 h4">Дополнительная информация</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime repudiandae voluptate aliquid, quia, enim quibusdam a mollitia quaerat eius error suscipit accusantium odit ipsa sapiente saepe omnis eaque rerum voluptates? </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 wow fadeInLeft">
                <img src="https://simg.marwin.kz/media/catalog/product/cache/550cf8d20d514ab5650dc2adb71f19c7/f/i/file_27.jpeg" alt="" class="img-fuild">
            </div>
            <div class="col-lg-4 col-md-12 mb-4 wow fadeInUp">
                <img src="https://simg.marwin.kz/media/catalog/product/cache/550cf8d20d514ab5650dc2adb71f19c7/1/1/1150301.jpeg" alt="" class="img-fuild">
            </div>
            <div class="col-lg-4 col-md-12 mb-4 wow fadeInRight">
                <img src="https://images.kz.prom.st/115374642_w200_h200_kepka-zelenaya-qr.jpg" alt="" class="img-fuild">
            </div>
        </div>

    </div>
  </main>

<?php require_once "blocks/footer.php" ?>