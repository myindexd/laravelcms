<?php

use Carbon\Carbon;

$now = Carbon::now();
$now = $now->year;

?>

<style>
    .footer {
        background-color: #000000;
        padding: 30px 30px;
        color: rgba(255, 255, 255, 1.00);
        margin-bottom: 25px;
    }

    .footer .footer-shop-name, .footer .footer-menu, .footer .footer-sm, .footer .footer-nl {
        padding: 10px 25px;
    }

    .footer .footer-menu, .footer .footer-sm, .footer .footer-nl {
        border-color: transparent;
    }

    .footer .footer-shop-name h2 {
        margin: 0px 0px 10px;
    }

    .footer .footer-shop-name p {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.70);
    }

    .footer .footer-menu ul.categories {
        list-style: none;
        padding: 0px;
    }

    .footer .footer-menu ul.categories li {
        padding: 5px 0px;
    }

    .footer .footer-menu ul.categories a {
        color: rgba(255, 255, 255, 1.00);
        font-weight: bold;
        text-transform: uppercase;
    }

    .footer .footer-menu h4 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 12px;
    }

    .footer .footer-menu ul.page {
        list-style: none;
        padding: 0px;
    }

    .footer .footer-menu ul.page li {
        padding: 5px 0px;
    }

    .footer .footer-menu ul.page a {
        color: rgba(255, 255, 255, 1.00);
    }

    .footer .footer-sm ul {
        list-style: none;
        padding: 0px;
    }

    .footer .footer-sm h4 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 4px;
    }

    .footer .footer-sm li {
        padding: 5px 4px;
    }

    .footer .footer-sm a {
        color: rgba(255, 255, 255, 1.00);
    }

    .footer .footer-nl h4 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 12px;
    }

    .footer .footer-nl p {
        font-size: 12px;
        color: rgba(255, 255, 255, 1.00);
    }

    @media (min-width: 800px) {
        .footer .footer-menu, .footer .footer-sm, .footer .footer-nl {
            border-left: solid 1px rgba(255, 255, 255, 0.30);
        }
    }
</style>

<div class="container">
    <section style="height:80px;"></section>
    <div class="row">
    </div>
    <footer class="footer">
        <div class="row">
            <div class="col-md-3 footer-shop-name">


                <p>© {{$now}} GPLv3 Fly My Cloud Limited</p>
            </div>
            <div class="col-md-4 footer-menu">
                <h4>Shop</h4>
                <div class="col-md-6">
                    <ul class="categories">

                        @foreach($CategoryMenu->all() as $item)
                            <?php
                            //TODO Clean and access items directly
                            $ar=(array)$item->link;
                            $ar2=(array_shift($ar));
                            ?>

                            <li><a href="/listing/{{$ar2['url']}}">{{$item->title}}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="page">
                    @foreach($PageMenu->all() as $item)
                            <?php
                                //TODO Clean and access items directly
                            $ar=(array)$item->link;
                            $ar2=(array_shift($ar));
                            ?>

                        <li><a href="/pages/{{$ar2['url']}}">{{$item->title}}</a></li>
                    @endforeach


                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-sm">
                <h4>Social Media</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">RSS feed</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-nl">
                <h4>Newsletter</h4>
                <p>Subscribe to our newsletter!</p>
                <p>
                <div class="input-group">

                    {{Form::open(array("action"=>"ShopController@newsletter"))}}
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                      <span style="display: initial" class="input-group-btn">
                        {{Form::submit('Join',array('class'=>"form-control"))}}
                      </span>

                    {{Form::close()}}
                </div>
                </p>
            </div>
        </div>
    </footer>
</div>

<!-- jQuery 2.2.3 -->
<script src="/vendor/admin-lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/vendor/admin-lte/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/vendor/admin-lte/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/vendor/admin-lte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/vendor/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/vendor/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/vendor/admin-lte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/vendor/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/vendor/admin-lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/vendor/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/vendor/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/vendor/admin-lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/vendor/admin-lte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/vendor/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
