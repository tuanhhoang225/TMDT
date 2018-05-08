<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/23/2018
 * Time: 11:19 AM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

/** @var $category \common\models\Category */
/** @var $product \common\models\Product; */

$this->title = $category['title'];

?>
<div id="content">
    <div class="container">
        <div class="row top-10">
            <div class="col-xs-12">
                <div class="grid-25 grid-parent text-left">
                    <div id="filter_mobile">
                        <div class="btn-group dropdown pull-left right-10">
                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                                <i class="fa fa-th-list"></i>
                                Beauty Box
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/shop/new-beauty-box">Box mới nhất</a>
                                </li>
                                <li>
                                    <a href="/shop/best-selling-beauty-box">Box bán chạy nhất</a>
                                </li>
                                <li>
                                    <a href="/shop/makeup-beauty-box">Box trang điểm</a>
                                </li>
                                <li>
                                    <a href="/shop/skin-care-beauty-box">Box dưỡng da</a>
                                </li>
                                <li>
                                    <a href="/shop/acne-beauty-box">Box trị mụn</a>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown pull-left">
                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                                <i class="fa fa-clock-o"></i>
                                Mới nhất
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/shop/beauty-box?sort=price-asc"><i class="fa fa-sort-numeric-asc"></i>
                                        Sắp xếp:
                                        Giá tăng dần
                                    </a></li>
                                <li>
                                    <a href="/shop/beauty-box?sort=price-desc"><i class="fa fa-sort-numeric-desc"></i>
                                        Sắp xếp:
                                        Giá giảm dần
                                    </a></li>
                            </ul>
                        </div>
                        <div class="btn btn-default pull-right" id="filter-btn">
                            <i class="fa fa-filter"></i>
                            Lọc
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="filter-overlay">
                        <div class="overlay-header container fix_width">
                            <div id="back-icon">
                                <i class="fa fa-chevron-left"></i>
                            </div>
                            <div class="header-text">
                                Lọc sản phẩm
                            </div>
                        </div>
                        <div class="overlay-body container fix_width">
                            <input type="hidden" name="brands" id="brands" value="">
                            <input type="hidden" name="pl" id="pl">
                            <input type="hidden" name="ph" id="ph">
                            <div class="panel-group" id="filter-accordion">
                                <div class="panel panel-default">
                                    <a class="collapsed" data-parent="#filter-accordion" data-toggle="collapse" href="#brandCollapse">
                                        <div class="panel-heading" id="brandHeading">
                                            <h4 class="panel-title">
                                                Hãng
                                                <div class="pull-right updown-icon rotate">
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </h4>
                                        </div>
                                    </a>
                                    <div class="panel-collapse collapse" id="brandCollapse">
                                        <div class="panel-body">
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="13" class="brand-checkbox-mobile">
                                                        A'Pieu
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="140" class="brand-checkbox-mobile">
                                                        Andalou Naturals
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="246" class="brand-checkbox-mobile">
                                                        April Skin
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="626" class="brand-checkbox-mobile">
                                                        ARCANCIL PARIS
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="15" class="brand-checkbox-mobile">
                                                        Banila Co
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="337" class="brand-checkbox-mobile">
                                                        Banobagi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="177" class="brand-checkbox-mobile">
                                                        BH Cosmetics
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="462" class="brand-checkbox-mobile">
                                                        Bulldog Natural Skincare
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="36" class="brand-checkbox-mobile">
                                                        Burt's Bees
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="88" class="brand-checkbox-mobile">
                                                        CeraVe
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="639" class="brand-checkbox-mobile">
                                                        CHOONEE
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="74" class="brand-checkbox-mobile">
                                                        Ciracle
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="377" class="brand-checkbox-mobile">
                                                        Clematis
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="635" class="brand-checkbox-mobile">
                                                        Corine de Farme
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="50" class="brand-checkbox-mobile">
                                                        Cosrx
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="615" class="brand-checkbox-mobile">
                                                        Deborah Milano
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="146" class="brand-checkbox-mobile">
                                                        DHC
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="340" class="brand-checkbox-mobile">
                                                        Dr.Bronner's
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="8" class="brand-checkbox-mobile">
                                                        e.l.f
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="627" class="brand-checkbox-mobile">
                                                        Eclipse Colours
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="355" class="brand-checkbox-mobile">
                                                        EOS
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="644" class="brand-checkbox-mobile">
                                                        EVAS
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="367" class="brand-checkbox-mobile">
                                                        Fascy
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="147" class="brand-checkbox-mobile">
                                                        Garnier Skin Naturals
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="601" class="brand-checkbox-mobile">
                                                        Golden Rose
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="455" class="brand-checkbox-mobile">
                                                        Halio
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="470" class="brand-checkbox-mobile">
                                                        IMJU
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="19" class="brand-checkbox-mobile">
                                                        Innisfree
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="616" class="brand-checkbox-mobile">
                                                        It's Well Plus
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="187" class="brand-checkbox-mobile">
                                                        Josie Maran
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="249" class="brand-checkbox-mobile">
                                                        KatVon D
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="352" class="brand-checkbox-mobile">
                                                        Kiara Phytoceuticals
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="256" class="brand-checkbox-mobile">
                                                        Kiehl's
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="107" class="brand-checkbox-mobile">
                                                        L’oreal
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="100" class="brand-checkbox-mobile">
                                                        Laneige
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="614" class="brand-checkbox-mobile">
                                                        Le Petit Olivier
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="380" class="brand-checkbox-mobile">
                                                        Lixibox
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="416" class="brand-checkbox-mobile">
                                                        LUSTRE MAKEUP
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="241" class="brand-checkbox-mobile">
                                                        MacQueen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="376" class="brand-checkbox-mobile">
                                                        Mad Hippie
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="22" class="brand-checkbox-mobile">
                                                        Maybelline
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="554" class="brand-checkbox-mobile">
                                                        Melano CC
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="471" class="brand-checkbox-mobile">
                                                        Mise-en-scène
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="3" class="brand-checkbox-mobile">
                                                        Missha
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="466" class="brand-checkbox-mobile">
                                                        NATURE REPUBLIC
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="422" class="brand-checkbox-mobile">
                                                        Nuxe
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="517" class="brand-checkbox-mobile">
                                                        OKAME Skincare
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="497" class="brand-checkbox-mobile">
                                                        ORGANIC SHOP
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="97" class="brand-checkbox-mobile">
                                                        Paula's Choice
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="637" class="brand-checkbox-mobile">
                                                        PETITE LAEL
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="420" class="brand-checkbox-mobile">
                                                        Philosophy
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="406" class="brand-checkbox-mobile">
                                                        Radha Beauty
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="20" class="brand-checkbox-mobile">
                                                        Rimmel
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="4" class="brand-checkbox-mobile">
                                                        Secret Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="603" class="brand-checkbox-mobile">
                                                        Senka
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="629" class="brand-checkbox-mobile">
                                                        Silcot
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="354" class="brand-checkbox-mobile">
                                                        Silky Veil
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="148" class="brand-checkbox-mobile">
                                                        Simple
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="371" class="brand-checkbox-mobile">
                                                        Slinky Touch
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="169" class="brand-checkbox-mobile">
                                                        Smashbox
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="435" class="brand-checkbox-mobile">
                                                        Son &amp; Park
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="190" class="brand-checkbox-mobile">
                                                        SU:M37
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="128" class="brand-checkbox-mobile">
                                                        Tarte
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="114" class="brand-checkbox-mobile">
                                                        The Balm
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="520" class="brand-checkbox-mobile">
                                                        the Duo Rain drop
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="133" class="brand-checkbox-mobile">
                                                        The Face Shop
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="27" class="brand-checkbox-mobile">
                                                        The Saem
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="149" class="brand-checkbox-mobile">
                                                        W7
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="362" class="brand-checkbox-mobile">
                                                        Wet n Wild Beauty
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="margin-top: 20px !important;">
                                    <a class="collapsed" data-parent="#filter-accordion" data-toggle="collapse" href="#priceCollapse">
                                        <div class="panel-heading" id="priceHeading">
                                            <h4 class="panel-title">
                                                Giá sản phẩm
                                                <div class="pull-right updown-icon rotate">
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </h4>
                                        </div>
                                    </a>
                                    <div class="panel-collapse collapse" id="priceCollapse">
                                        <div class="panel-body">
                                            <div class="text-center top-10">
<span id="filter-min-select-mobile">
100K
</span>
                                                -
                                                <span id="filter-max-select-mobile">
2,900K
</span>
                                            </div>
                                            <div class="top-40">
                                                <div id="price-slider-mobile" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                                <div class="pull-left" id="filter-min-threshold-mobile">
                                                    100K
                                                </div>
                                                <div class="pull-right" id="filter-max-threshold-mobile">
                                                    2,900K
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-footer">
                            <div class="col-xs-6 top-20">
                                <button name="button" type="submit" class="btn btn-default btn-block" id="clear-filter-mobile" disabled="">Bỏ chọn lọc</button>
                            </div>
                            <div class="col-xs-6 top-20">
                                <button name="button" type="submit" class="btn btn-danger btn-block" id="submit-filter-mobile">Lọc sản phẩm</button>
                            </div>
                        </div>
                    </div>
                    <script>
                        function is_empty(fields) {
                            var empty_fields = fields.filter(function() {
                                // remove the $.trim if whitespace is counted as filled
                                return $.trim(this.value) == "";
                            });
                            return fields.length == empty_fields.length
                        }

                        function toggle_reset_filter() {
                            var resetted = is_empty( $("input#brands, input#pl, input#ph") ) ;
                            $("#clear-filter-mobile").prop("disabled", resetted);
                        }

                        $(function() {
                            $("#filter-accordion .panel").on('shown.bs.collapse', function (e) {
                                $(e.currentTarget).find(".updown-icon").toggleClass("down");
                            });

                            $("#filter-accordion .panel").on('hidden.bs.collapse', function (e) {
                                $(e.currentTarget).find(".updown-icon").toggleClass("down");
                            });

                            $(".brand-checkbox-mobile").on("change", function() {
                                var brand_ids = $(".brand-checkbox-mobile:checked").map(function () {
                                    return this.value;
                                }).get().join(",");
                                $("input#brands").val(brand_ids);
                                $("input#brands").trigger("change");
                            });

                            toggle_reset_filter();
                            $("input#brands, input#pl, input#ph").on("change", function() {
                                toggle_reset_filter();
                            });
                            $("#clear-filter-mobile").on("click", function() {
                                $("input#brands, input#pl, input#ph").val(null);
                                $(".brand-checkbox-mobile").prop("checked", false);
                                $( "#price-slider-mobile" ).slider( "values", 0, 100 );
                                $( "#price-slider-mobile" ).slider( "values", 1, 2900 );
                                toggle_reset_filter();
                            });

                            $("#submit-filter-mobile").on("click", function() {
                                var queryObj = {};

                                var price_range = {};
                                if ( $("input#pl").val() ) {
                                    price_range['pl'] = parseInt( $("input#pl").val() );
                                }
                                if ( $("input#ph").val() ) {
                                    price_range['ph'] = parseInt( $("input#ph").val() );
                                }

                                var brands = {};
                                if ( $("input#brands").val() )
                                    brands['bids'] = $("input#brands").val();

                                var sort = {};
                                if(false)
                                    sort = {sort: ""};
                                $.extend(queryObj, brands, price_range, sort);
                                var queryStr = $.param(queryObj);
                                var url = "/shop/beauty-box" + "?" + queryStr ;
                                window.location = url;
                            });

                            $("#price-slider-mobile").slider({
                                range: true,
                                min: 100,
                                max: 2900,
                                values: [100, 2900],
                                step: 50,
                                slide: function( event, ui ) {
                                    var min_price = ui.values[0];
                                    var max_price = ui.values[1];
                                    if ( min_price == max_price ) return false;

                                    $("#filter-min-select-mobile").html(min_price + "K");
                                    $("#filter-max-select-mobile").html(max_price + "K");

                                    if( min_price == 100 )
                                        $("input#pl").val(null);
                                    else
                                        $("input#pl").val(ui.values[0]);

                                    if( max_price == 2900 )
                                        $("input#ph").val(null);
                                    else
                                        $("input#ph").val(ui.values[1]);

                                    toggle_reset_filter();
                                }
                            });
                        });
                    </script>

                    <script>
                        $(document).ready(function() {
                            $("#filter-btn").click(function() {
                                $("#filter-overlay").fadeIn();
                                $("body").addClass("no-scroll");
                            });

                            $("#back-icon").click(function() {
                                $("body").removeClass("no-scroll");
                                $("#filter-overlay").fadeOut();
                            });
                        });
                    </script>

                    <div id="filters-sidebar">
                        <div class="hidden-sm hidden-xs browse_node_filters" id="desktop_filters">
                            <div class="browse_node_filter">
                                <div class="heading">
                                    <div class="title">Tìm theo danh mục</div>
                                    <div class="decoration"></div>
                                </div>
                                <div class="body filter_categories">
                                    <div browse_node_id="847" class="filter_category in_browse_tree active" depth="0"><a href="/shop/beauty-box" class="current_node "><i class="fa fa-chevron-down"></i><span class="name">Beauty Box</span><span class="vn_name padleft"></span></a><div class="child_nodes"><div browse_node_id="848" class="filter_category  " depth="1"><a href="/shop/new-beauty-box" class="current_node padleft"><span class="name">New Beauty Box</span><span class="vn_name ">Box mới nhất</span></a></div><div browse_node_id="849" class="filter_category  " depth="1"><a href="/shop/best-selling-beauty-box" class="current_node padleft"><span class="name">Bestsellers Beauty Box</span><span class="vn_name ">Box bán chạy nhất</span></a></div><div browse_node_id="850" class="filter_category  " depth="1"><a href="/shop/makeup-beauty-box" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Makeup box</span><span class="vn_name padleft">Box trang điểm</span></a></div><div browse_node_id="851" class="filter_category  " depth="1"><a href="/shop/skin-care-beauty-box" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Skin Care Box</span><span class="vn_name padleft">Box dưỡng da</span></a></div><div browse_node_id="852" class="filter_category  " depth="1"><a href="/shop/acne-beauty-box" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Acne Box</span><span class="vn_name padleft">Box trị mụn</span></a></div></div></div>
                                </div>
                            </div>
                            <script>
                                $(function() {
                                    $("#show-full-child-nodes").on("click", function() {
                                        $(".minimal-child-nodes").hide();
                                        $(".full-child-nodes").show();
                                    });
                                });
                            </script>

                            <div class="browse_node_filter">
                                <div class="heading">
                                    <div class="title with_remove_filter">
                                        <div class="left">Thương hiệu</div>
                                        <div class="right">
                                        </div>
                                    </div>
                                    <div class="decoration"></div>
                                </div>
                                <div class="body filter_brands">
                                    <div class="filter-body top-5 row">
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="A'Pieu">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="13" class="brand-aggs" data-url="/shop/beauty-box?bids=13">
                                                    A'Pieu
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Andalou Naturals">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="140" class="brand-aggs" data-url="/shop/beauty-box?bids=140">
                                                    Andalou Naturals
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="April Skin">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="246" class="brand-aggs" data-url="/shop/beauty-box?bids=246">
                                                    April Skin
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="ARCANCIL PARIS">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="626" class="brand-aggs" data-url="/shop/beauty-box?bids=626">
                                                    ARCANCIL PARIS
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Banila Co">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="15" class="brand-aggs" data-url="/shop/beauty-box?bids=15">
                                                    Banila Co
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Banobagi">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="337" class="brand-aggs" data-url="/shop/beauty-box?bids=337">
                                                    Banobagi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="BH Cosmetics">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="177" class="brand-aggs" data-url="/shop/beauty-box?bids=177">
                                                    BH Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Bulldog Natural Skincare">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="462" class="brand-aggs" data-url="/shop/beauty-box?bids=462">
                                                    Bulldog Natural Skincare
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Burt's Bees">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="36" class="brand-aggs" data-url="/shop/beauty-box?bids=36">
                                                    Burt's Bees
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="CeraVe">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="88" class="brand-aggs" data-url="/shop/beauty-box?bids=88">
                                                    CeraVe
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="CHOONEE">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="639" class="brand-aggs" data-url="/shop/beauty-box?bids=639">
                                                    CHOONEE
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Ciracle">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="74" class="brand-aggs" data-url="/shop/beauty-box?bids=74">
                                                    Ciracle
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Clematis">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="377" class="brand-aggs" data-url="/shop/beauty-box?bids=377">
                                                    Clematis
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Corine de Farme">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="635" class="brand-aggs" data-url="/shop/beauty-box?bids=635">
                                                    Corine de Farme
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Cosrx">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="50" class="brand-aggs" data-url="/shop/beauty-box?bids=50">
                                                    Cosrx
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Deborah Milano">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="615" class="brand-aggs" data-url="/shop/beauty-box?bids=615">
                                                    Deborah Milano
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="DHC">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="146" class="brand-aggs" data-url="/shop/beauty-box?bids=146">
                                                    DHC
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Dr.Bronner's">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="340" class="brand-aggs" data-url="/shop/beauty-box?bids=340">
                                                    Dr.Bronner's
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="e.l.f">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="8" class="brand-aggs" data-url="/shop/beauty-box?bids=8">
                                                    e.l.f
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Eclipse Colours">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="627" class="brand-aggs" data-url="/shop/beauty-box?bids=627">
                                                    Eclipse Colours
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="EOS">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="355" class="brand-aggs" data-url="/shop/beauty-box?bids=355">
                                                    EOS
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="EVAS">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="644" class="brand-aggs" data-url="/shop/beauty-box?bids=644">
                                                    EVAS
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Fascy">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="367" class="brand-aggs" data-url="/shop/beauty-box?bids=367">
                                                    Fascy
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Garnier Skin Naturals">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="147" class="brand-aggs" data-url="/shop/beauty-box?bids=147">
                                                    Garnier Skin Naturals
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Golden Rose">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="601" class="brand-aggs" data-url="/shop/beauty-box?bids=601">
                                                    Golden Rose
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Halio">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="455" class="brand-aggs" data-url="/shop/beauty-box?bids=455">
                                                    Halio
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="IMJU ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="470" class="brand-aggs" data-url="/shop/beauty-box?bids=470">
                                                    IMJU
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Innisfree">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="19" class="brand-aggs" data-url="/shop/beauty-box?bids=19">
                                                    Innisfree
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="It's Well Plus">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="616" class="brand-aggs" data-url="/shop/beauty-box?bids=616">
                                                    It's Well Plus
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Josie Maran">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="187" class="brand-aggs" data-url="/shop/beauty-box?bids=187">
                                                    Josie Maran
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="KatVon D">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="249" class="brand-aggs" data-url="/shop/beauty-box?bids=249">
                                                    KatVon D
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Kiara Phytoceuticals">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="352" class="brand-aggs" data-url="/shop/beauty-box?bids=352">
                                                    Kiara Phytoceuticals
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Kiehl's">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="256" class="brand-aggs" data-url="/shop/beauty-box?bids=256">
                                                    Kiehl's
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="L’oreal">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="107" class="brand-aggs" data-url="/shop/beauty-box?bids=107">
                                                    L’oreal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Laneige">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="100" class="brand-aggs" data-url="/shop/beauty-box?bids=100">
                                                    Laneige
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Le Petit Olivier">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="614" class="brand-aggs" data-url="/shop/beauty-box?bids=614">
                                                    Le Petit Olivier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Lixibox">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="380" class="brand-aggs" data-url="/shop/beauty-box?bids=380">
                                                    Lixibox
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="LUSTRE MAKEUP">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="416" class="brand-aggs" data-url="/shop/beauty-box?bids=416">
                                                    LUSTRE MAKEUP
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="MacQueen">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="241" class="brand-aggs" data-url="/shop/beauty-box?bids=241">
                                                    MacQueen
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Mad Hippie">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="376" class="brand-aggs" data-url="/shop/beauty-box?bids=376">
                                                    Mad Hippie
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Maybelline">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="22" class="brand-aggs" data-url="/shop/beauty-box?bids=22">
                                                    Maybelline
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Melano CC">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="554" class="brand-aggs" data-url="/shop/beauty-box?bids=554">
                                                    Melano CC
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Mise-en-scène">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="471" class="brand-aggs" data-url="/shop/beauty-box?bids=471">
                                                    Mise-en-scène
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Missha">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="3" class="brand-aggs" data-url="/shop/beauty-box?bids=3">
                                                    Missha
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="NATURE REPUBLIC ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="466" class="brand-aggs" data-url="/shop/beauty-box?bids=466">
                                                    NATURE REPUBLIC
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Nuxe">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="422" class="brand-aggs" data-url="/shop/beauty-box?bids=422">
                                                    Nuxe
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="OKAME Skincare">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="517" class="brand-aggs" data-url="/shop/beauty-box?bids=517">
                                                    OKAME Skincare
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="ORGANIC SHOP">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="497" class="brand-aggs" data-url="/shop/beauty-box?bids=497">
                                                    ORGANIC SHOP
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Paula's Choice">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="97" class="brand-aggs" data-url="/shop/beauty-box?bids=97">
                                                    Paula's Choice
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="PETITE LAEL ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="637" class="brand-aggs" data-url="/shop/beauty-box?bids=637">
                                                    PETITE LAEL
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Philosophy">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="420" class="brand-aggs" data-url="/shop/beauty-box?bids=420">
                                                    Philosophy
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Radha Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="406" class="brand-aggs" data-url="/shop/beauty-box?bids=406">
                                                    Radha Beauty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Rimmel">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="20" class="brand-aggs" data-url="/shop/beauty-box?bids=20">
                                                    Rimmel
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Secret Key">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="4" class="brand-aggs" data-url="/shop/beauty-box?bids=4">
                                                    Secret Key
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Senka">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="603" class="brand-aggs" data-url="/shop/beauty-box?bids=603">
                                                    Senka
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Silcot">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="629" class="brand-aggs" data-url="/shop/beauty-box?bids=629">
                                                    Silcot
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Silky Veil">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="354" class="brand-aggs" data-url="/shop/beauty-box?bids=354">
                                                    Silky Veil
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Simple">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="148" class="brand-aggs" data-url="/shop/beauty-box?bids=148">
                                                    Simple
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Slinky Touch">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="371" class="brand-aggs" data-url="/shop/beauty-box?bids=371">
                                                    Slinky Touch
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Smashbox">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="169" class="brand-aggs" data-url="/shop/beauty-box?bids=169">
                                                    Smashbox
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Son &amp; Park">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="435" class="brand-aggs" data-url="/shop/beauty-box?bids=435">
                                                    Son &amp; Park
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="SU:M37">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="190" class="brand-aggs" data-url="/shop/beauty-box?bids=190">
                                                    SU:M37
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Tarte">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="128" class="brand-aggs" data-url="/shop/beauty-box?bids=128">
                                                    Tarte
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="The Balm">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="114" class="brand-aggs" data-url="/shop/beauty-box?bids=114">
                                                    The Balm
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="the Duo Rain drop">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="520" class="brand-aggs" data-url="/shop/beauty-box?bids=520">
                                                    the Duo Rain drop
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="The Face Shop">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="133" class="brand-aggs" data-url="/shop/beauty-box?bids=133">
                                                    The Face Shop
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="The Saem">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="27" class="brand-aggs" data-url="/shop/beauty-box?bids=27">
                                                    The Saem
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="W7">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="149" class="brand-aggs" data-url="/shop/beauty-box?bids=149">
                                                    W7
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Wet n Wild Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="362" class="brand-aggs" data-url="/shop/beauty-box?bids=362">
                                                    Wet n Wild Beauty
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function() {
                                    $(".brand-aggs").on("change", function() {
                                        $(".brand-aggs").prop("disabled", true);
                                        window.location.href = $(this).data("url");
                                    });
                                });
                            </script>

                            <div class="browse_node_filter">
                                <div class="heading">
                                    <div class="title with_remove_filter">
                                        <div class="left">Giá (VND)</div>
                                        <div class="right">
                                        </div>
                                    </div>
                                    <div class="decoration"></div>
                                </div>
                                <div class="body">
                                    <div class="filter_prices" id="price-filter">
                                        <div class="top-10">
                                            <div data-tracking-category="Filter" data-tracking-title="Price filter" id="price-slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                            <div class="pull-left" id="filter-min-threshold">
                                                100K
                                            </div>
                                            <div class="pull-right" id="filter-max-threshold">
                                                2,900K
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="text-center top-10">
                                            <div id="filter-min-select">
                                                100K
                                            </div>
                                            -
                                            <div id="filter-max-select">
                                                2,900K
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function() {
                                    $("#price-filter #price-slider").slider({
                                        range: true,
                                        min: 100,
                                        max: 2900,
                                        values: [100, 2900],
                                        step: 50,
                                        slide: function( event, ui ) {
                                            if ( ( ui.values[ 0 ] + 50 ) >= ui.values[ 1 ] ) {
                                                return false;
                                            }
                                            $("#price-filter #filter-min-select").html(ui.values[0] + "K");
                                            $("#price-filter #filter-max-select").html(ui.values[1] + "K");
                                        },
                                        stop: function( event, ui ) {
                                            var min_price = parseInt(ui.values[0]);
                                            var max_price = parseInt(ui.values[1]);
                                            if(min_price == 100 && max_price == 2900)
                                                return;
                                            var queryObj = {};
                                            var price_range = {
                                                pl: min_price,
                                                ph: max_price
                                            }
                                            var brands = {};
                                            if(false) {
                                                brands = {bids: ""};
                                            }
                                            var sort = {};
                                            if(false) {
                                                sort = {sort: ""}
                                            }
                                            $.extend(queryObj, brands, price_range, sort);
                                            var queryStr = $.param(queryObj);
                                            var url = "/shop/beauty-box" + "?" + queryStr ;
                                            window.location = url;
                                        }
                                    });
                                });
                            </script>

                        </div>

                    </div>

                </div>
                <div class="grid-75 grid-parent browse_node_content">
                    <div class="hidden-md hidden-xs" id="browse_node_breadcrumb">
                        <a href="/shop/beauty-box">Beauty Box
                        </a></div>
                    <div class="divider_title mono">
                        <span>Box mới nhất</span>
                    </div>
                    <div class="box_card_slider top-20">
                        <div class="swiper-container slide_boxes swiper-container-horizontal" data-slide="0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-active" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7881" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/103/medium/1523344497.png)">
                                            <div class="seo-text hidden">
                                                TẶNG BALO
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="SVR suncreen set 2" data-remote="true" rel="nofollow" data-method="post" href="/shop/svr-suncreen-set-2/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <a class="box_name" href="/shop/svr-suncreen-set-2">SVR suncreen set 2</a>
                                        <div class="box_price">410,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            485,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/svr-suncreen-set-2"><span>SVR suncreen set 2 by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7880" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/102/medium/1523340521.png)">
                                            <div class="seo-text hidden">
                                                TẶNG TÚI
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="SVR suncreen set 1" data-remote="true" rel="nofollow" data-method="post" href="/shop/svr-suncreen-set-1/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <a class="box_name" href="/shop/svr-suncreen-set-1">SVR suncreen set 1</a>
                                        <div class="box_price">400,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            465,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/svr-suncreen-set-1"><span>SVR suncreen set 1 by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7877" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/094/medium/1523330150.jpg)">
                                            <div class="seo-text hidden">
                                                Set gồm Dầu Gội và Sữa Tắm từ thương hiệu OKAME

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 03 Shampoo + Shower" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-03-shampoo-shower/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7877">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-set-03-shampoo-shower">OKAME Set 03 Shampoo + Shower</a>
                                        <div class="box_price">320,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            600,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-set-03-shampoo-shower"><span>OKAME Set 03 Shampoo + Shower by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7876" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/093/medium/1523329945.jpg)">
                                            <div class="seo-text hidden">
                                                Set gồm Dưỡng Thể và Sữa Tắm từ thương hiệu OKAME giúp làn da thêm mịn màng
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" OKAME Set 02 Lotion + Shower  " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-02-lotion-shower/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7876">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-set-02-lotion-shower"> OKAME Set 02 Lotion + Shower  </a>
                                        <div class="box_price">400,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            680,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-set-02-lotion-shower"><span> OKAME Set 02 Lotion + Shower   by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7875" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/092/medium/1523329786.jpg)">
                                            <div class="seo-text hidden">
                                                Set gồm sản phẩm Dầu Gội và Dầu Xả từ thương hiệu OKAME cho mái tóc chắc khoẻ và mềm mại
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 01 Shampoo + Conditioner " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-01-shampoo-conditioner/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7875">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-set-01-shampoo-conditioner">OKAME Set 01 Shampoo + Conditioner </a>
                                        <div class="box_price">350,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            630,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-set-01-shampoo-conditioner"><span>OKAME Set 01 Shampoo + Conditioner  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7862" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/074/medium/1522986461.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (GREY SMOKE)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-grey-smoke/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7862">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-10-grey-smoke">ONE-STEP CLEANSING 10 (GREY SMOKE)</a>
                                        <div class="box_price">900,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,230,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-10-grey-smoke"><span>ONE-STEP CLEANSING 10 (GREY SMOKE) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7861" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/073/medium/1522986073.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (MUSTARD)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-mustard/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7861">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-10-mustard">ONE-STEP CLEANSING 10 (MUSTARD)</a>
                                        <div class="box_price">900,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,230,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-10-mustard"><span>ONE-STEP CLEANSING 10 (MUSTARD) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7860" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/072/medium/1522985984.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (SKY BLUE)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-sky-blue/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7860">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-10-sky-blue">ONE-STEP CLEANSING 10 (SKY BLUE)</a>
                                        <div class="box_price">900,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,230,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-10-sky-blue"><span>ONE-STEP CLEANSING 10 (SKY BLUE) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7859" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/071/medium/1522985872.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (HOT PINK)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-hot-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7859">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-10-hot-pink">ONE-STEP CLEANSING 10 (HOT PINK)</a>
                                        <div class="box_price">900,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,230,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-10-hot-pink"><span>ONE-STEP CLEANSING 10 (HOT PINK) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7858" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/070/medium/1522985665.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (BABY PINK)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-baby-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7858">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-10-baby-pink">ONE-STEP CLEANSING 10 (BABY PINK)</a>
                                        <div class="box_price">900,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,230,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-10-baby-pink"><span>ONE-STEP CLEANSING 10 (BABY PINK) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7833" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/095/medium/1523330283.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" OKAME Set 04 Conditioner + Conditioner" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7833">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo"> OKAME Set 04 Conditioner + Conditioner</a>
                                        <div class="box_price">350,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            660,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo"><span> OKAME Set 04 Conditioner + Conditioner by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7832" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/096/medium/1523330361.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 05 Lotion + Lotion " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7832">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo">OKAME Set 05 Lotion + Lotion </a>
                                        <div class="box_price">400,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            760,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo"><span>OKAME Set 05 Lotion + Lotion  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7831" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/097/medium/1523330435.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 06 Shampoo + Shampoo" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7831">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo">OKAME Set 06 Shampoo + Shampoo</a>
                                        <div class="box_price">320,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            600,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo"><span>OKAME Set 06 Shampoo + Shampoo by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7828" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/099/medium/1523331212.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 07 Shower + Shower " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7828">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo">OKAME Set 07 Shower + Shower </a>
                                        <div class="box_price">320,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            600,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo"><span>OKAME Set 07 Shower + Shower  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7811" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/017/medium/1521788847.jpg)">
                                            <div class="seo-text hidden">
                                                Set Evas Vitamin Duo - Strawberry bao gồm bộ đôi sữa dưỡng thể và sữa tắm giúp dưỡng ẩm cho làn da


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="EVAS VITAMIN DUO - Strawberry " data-remote="true" rel="nofollow" data-method="post" href="/shop/evas-vitamin-duo-strawberry/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7811">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/evas-vitamin-duo-strawberry">EVAS VITAMIN DUO - Strawberry </a>
                                        <div class="box_price">300,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            340,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/evas-vitamin-duo-strawberry"><span>EVAS VITAMIN DUO - Strawberry  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7810" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/016/medium/1521788717.jpg)">
                                            <div class="seo-text hidden">
                                                Set Evas Vitamin Duo - Orange bao gồm bộ đôi sữa dưỡng thể và sữa tắm giúp dưỡng ẩm cho làn da


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="EVAS VITAMIN DUO - Orange " data-remote="true" rel="nofollow" data-method="post" href="/shop/evas-vitamin-duo-orange/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7810">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/evas-vitamin-duo-orange">EVAS VITAMIN DUO - Orange </a>
                                        <div class="box_price">300,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            340,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/evas-vitamin-duo-orange"><span>EVAS VITAMIN DUO - Orange  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7809" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/015/medium/1521788539.jpg)">
                                            <div class="seo-text hidden">
                                                Set Evas Vitamin Duo - Grape bao gồm bộ đôi sữa dưỡng thể và sữa tắm giúp dưỡng ẩm cho làn da


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="EVAS VITAMIN DUO - Grape" data-remote="true" rel="nofollow" data-method="post" href="/shop/evas-vitamin-duo-grape/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7809">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/evas-vitamin-duo-grape">EVAS VITAMIN DUO - Grape</a>
                                        <div class="box_price">300,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            340,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/evas-vitamin-duo-grape"><span>EVAS VITAMIN DUO - Grape by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7808" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/013/medium/1521783456.jpg)">
                                            <div class="seo-text hidden">
                                                Set Evas Vitamin Duo - Pomegranate bao gồm bộ đôi sữa dưỡng thể và sữa tắm giúp dưỡng ẩm cho làn da
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Evas Vitamin Duo - Pomegranate " data-remote="true" rel="nofollow" data-method="post" href="/shop/evas-vitamin-duo-pomegranate/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <a class="box_name" href="/shop/evas-vitamin-duo-pomegranate">Evas Vitamin Duo - Pomegranate </a>
                                        <div class="box_price">300,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            340,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/evas-vitamin-duo-pomegranate"><span>Evas Vitamin Duo - Pomegranate  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7783" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/971/medium/1521649272.jpg)">
                                            <div class="seo-text hidden">
                                                Bộ đôi sữa rửa mặt Choonee Brightening Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - Brightening" data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-brightening/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7783">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/perfect-foaming-brightening">Perfect Foaming - Brightening</a>
                                        <div class="box_price">220,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            270,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/perfect-foaming-brightening"><span>Perfect Foaming - Brightening by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7782" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/970/medium/1521649109.jpg)">
                                            <div class="seo-text hidden">
                                                Bộ đôi sữa rửa mặt Choonee PH Balancing Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - PH Balancing " data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-ph-balancing/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7782">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/perfect-foaming-ph-balancing">Perfect Foaming - PH Balancing </a>
                                        <div class="box_price">220,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            270,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/perfect-foaming-ph-balancing"><span>Perfect Foaming - PH Balancing  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7781" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/969/medium/1521648841.jpg)">
                                            <div class="seo-text hidden">
                                                Bộ đôi sữa rửa mặt Choonee Deep Clearing Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - Deep Clearing" data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-deep-clearing/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7781">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/perfect-foaming-deep-clearing">Perfect Foaming - Deep Clearing</a>
                                        <div class="box_price">220,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            270,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/perfect-foaming-deep-clearing"><span>Perfect Foaming - Deep Clearing by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7780" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/968/medium/1521648601.jpg)">
                                            <div class="seo-text hidden">
                                                Bộ đôi sữa rửa mặt Choonee Hydrating Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - Hydrating" data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-hydrating/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7780">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/perfect-foaming-hydrating">Perfect Foaming - Hydrating</a>
                                        <div class="box_price">220,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            270,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/perfect-foaming-hydrating"><span>Perfect Foaming - Hydrating by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7779" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/967/medium/1521648071.jpg)">
                                            <div class="seo-text hidden">
                                                Combo Set 5 mặt nạ với những công dụng khác nhau, được xem là "must-buy" của Choonee
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Choonee Mask Set" data-remote="true" rel="nofollow" data-method="post" href="/shop/choonee-mask-set/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7779">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/choonee-mask-set">Choonee Mask Set</a>
                                        <div class="box_price">180,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            225,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/choonee-mask-set"><span>Choonee Mask Set by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7778" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/966/medium/1521647433.jpg)">
                                            <div class="seo-text hidden">
                                                Trọn bộ combo 8 sản phẩm vui nhộn từ thương hiệu Petite Lael cho bạn thoả sức sáng tạo

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Petite Lael Combo Ver 2" data-remote="true" rel="nofollow" data-method="post" href="/shop/petite-lael-combo-ver-2/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7778">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/petite-lael-combo-ver-2">Petite Lael Combo Ver 2</a>
                                        <div class="box_price">680,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            960,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/petite-lael-combo-ver-2"><span>Petite Lael Combo Ver 2 by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7777" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/965/medium/1521646624.jpg)">
                                            <div class="seo-text hidden">
                                                Trọn bộ combo 8 sản phẩm vui nhộn từ thương hiệu Petite Lael cho bạn thoả sức sáng tạo
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Petite Lael Combo Ver 1" data-remote="true" rel="nofollow" data-method="post" href="/shop/petite-lael-combo-ver-1/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7777">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/petite-lael-combo-ver-1">Petite Lael Combo Ver 1</a>
                                        <div class="box_price">680,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            960,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/petite-lael-combo-ver-1"><span>Petite Lael Combo Ver 1 by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7776" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/959/medium/1521643043.jpg)">
                                            <div class="seo-text hidden">
                                                Hai dòng sản phẩm chăm sóc da đơn giản đến từ thương hiệu OKAME sẽ giúp các nàng rút ngắn thời gian dưỡng da nhưng vẫn đảm bảo cung cấp đủ độ ẩm cần thiết cho da.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Simple Skincare " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-simple-skincare/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7776">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-simple-skincare">OKAME Simple Skincare </a>
                                        <div class="box_price">550,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            690,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-simple-skincare"><span>OKAME Simple Skincare  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7775" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/955/medium/1521642554.jpg)">
                                            <div class="seo-text hidden">
                                                Bộ đôi Lixibox Giấy Thấm Dầu than hoạt tính và OKAME Xịt Khoáng sẽ là trợ thủ đắc lực giúp giảm thiểu lượng dầu và bã nhờn trên da bạn.

                                                Bước 1: Dùng giấy thấm dầu lấy hết lượng dầu thừa và bãn nhờ trên da mặt
                                                Bước 2: Xịt khoáng cấp ẩm cho da ngay tức thì
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Oil No More" data-remote="true" rel="nofollow" data-method="post" href="/shop/oil-no-more/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7775">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/oil-no-more">Oil No More</a>
                                        <div class="box_price">245,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            390,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/oil-no-more"><span>Oil No More by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7774" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/952/medium/1521641780.jpg)">
                                            <div class="seo-text hidden">
                                                Chuyến du lịch sẽ vô cùng tiện lợi cùng với những sản phẩm cực kỳ cần thiết. Điểm cộng của set là bao gồm các mini size cực "cháy hàng" giúp các bạn dễ dàng mang theo trong những chuyến đi
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Travel-Friendly Set" data-remote="true" rel="nofollow" data-method="post" href="/shop/travel-friendly-set/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7774">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/travel-friendly-set">Travel-Friendly Set</a>
                                        <div class="box_price">550,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            890,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/travel-friendly-set"><span>Travel-Friendly Set by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7773" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/951/medium/1521640459.jpg)">
                                            <div class="seo-text hidden">
                                                Dưỡng Da từ A đến Z với trọn bộ sản phẩm chăm sóc da từ nhãn hàng OKAME. Tập trung vào sự đơn giản tinh khiết, bộ sản phẩm dưỡng da tuy đơn giản nhưng có thể làm hài lòng từ những cô nàng "newbie" đến những "skincare junkie"
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Ultimate Set" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-ultimate-set/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7773">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-ultimate-set">OKAME Ultimate Set</a>
                                        <div class="box_price">850,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,500,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-ultimate-set"><span>OKAME Ultimate Set by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7770" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/950/medium/1521638583.jpg)">
                                            <div class="seo-text hidden">
                                                Pores No More tập hợp những sản phẩm sẽ giúp bạn thu nhỏ lỗ chân lông và đánh bay bã nhờ trên da mặt. Với đầy đủ các bước từ làm sạch đến dưỡng ẩm, bạn sẽ có thể "bái bai" những lỗ chân lông đáng ghét.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Pores No More " data-remote="true" rel="nofollow" data-method="post" href="/shop/pores-no-more/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7770">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/pores-no-more">Pores No More </a>
                                        <div class="box_price">950,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,190,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/pores-no-more"><span>Pores No More  by Lixibox Online</span>
                                        </a></div>
                                </div>

                            </div>
                            <div class="swiper-pagination swiper-pagination-white hidden-xs hidden-sm swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                            <div class="swiper-button-next swiper-button-black hidden-xs hidden-sm"></div>
                            <div class="swiper-button-prev swiper-button-black hidden-xs hidden-sm swiper-button-disabled"></div>
                        </div>
                    </div>
                    <div class="divider_title mono">
                        <span>Box bán chạy nhất</span>
                    </div>
                    <div class="box_card_slider top-20">
                        <div class="swiper-container slide_boxes swiper-container-horizontal" data-slide="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-active" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7877" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/094/medium/1523330150.jpg)">
                                            <div class="seo-text hidden">
                                                Set gồm Dầu Gội và Sữa Tắm từ thương hiệu OKAME

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 03 Shampoo + Shower" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-03-shampoo-shower/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7877">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-set-03-shampoo-shower">OKAME Set 03 Shampoo + Shower</a>
                                        <div class="box_price">320,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            600,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-set-03-shampoo-shower"><span>OKAME Set 03 Shampoo + Shower by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7876" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/093/medium/1523329945.jpg)">
                                            <div class="seo-text hidden">
                                                Set gồm Dưỡng Thể và Sữa Tắm từ thương hiệu OKAME giúp làn da thêm mịn màng
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" OKAME Set 02 Lotion + Shower  " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-02-lotion-shower/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7876">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-set-02-lotion-shower"> OKAME Set 02 Lotion + Shower  </a>
                                        <div class="box_price">400,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            680,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-set-02-lotion-shower"><span> OKAME Set 02 Lotion + Shower   by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7875" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/092/medium/1523329786.jpg)">
                                            <div class="seo-text hidden">
                                                Set gồm sản phẩm Dầu Gội và Dầu Xả từ thương hiệu OKAME cho mái tóc chắc khoẻ và mềm mại
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 01 Shampoo + Conditioner " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-01-shampoo-conditioner/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7875">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-set-01-shampoo-conditioner">OKAME Set 01 Shampoo + Conditioner </a>
                                        <div class="box_price">350,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            630,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-set-01-shampoo-conditioner"><span>OKAME Set 01 Shampoo + Conditioner  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7859" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/071/medium/1522985872.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (HOT PINK)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-hot-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7859">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-10-hot-pink">ONE-STEP CLEANSING 10 (HOT PINK)</a>
                                        <div class="box_price">900,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,230,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-10-hot-pink"><span>ONE-STEP CLEANSING 10 (HOT PINK) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7833" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/095/medium/1523330283.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" OKAME Set 04 Conditioner + Conditioner" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7833">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo"> OKAME Set 04 Conditioner + Conditioner</a>
                                        <div class="box_price">350,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            660,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo"><span> OKAME Set 04 Conditioner + Conditioner by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7832" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/096/medium/1523330361.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 05 Lotion + Lotion " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7832">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo">OKAME Set 05 Lotion + Lotion </a>
                                        <div class="box_price">400,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            760,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo"><span>OKAME Set 05 Lotion + Lotion  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7831" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/097/medium/1523330435.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 06 Shampoo + Shampoo" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7831">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo">OKAME Set 06 Shampoo + Shampoo</a>
                                        <div class="box_price">320,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            600,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo"><span>OKAME Set 06 Shampoo + Shampoo by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7828" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/026/099/medium/1523331212.jpg)">
                                            <div class="seo-text hidden">
                                                MUA 1 TẶNG 1
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 07 Shower + Shower " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7828">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo">OKAME Set 07 Shower + Shower </a>
                                        <div class="box_price">320,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            600,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo"><span>OKAME Set 07 Shower + Shower  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7775" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/955/medium/1521642554.jpg)">
                                            <div class="seo-text hidden">
                                                Bộ đôi Lixibox Giấy Thấm Dầu than hoạt tính và OKAME Xịt Khoáng sẽ là trợ thủ đắc lực giúp giảm thiểu lượng dầu và bã nhờn trên da bạn.

                                                Bước 1: Dùng giấy thấm dầu lấy hết lượng dầu thừa và bãn nhờ trên da mặt
                                                Bước 2: Xịt khoáng cấp ẩm cho da ngay tức thì
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Oil No More" data-remote="true" rel="nofollow" data-method="post" href="/shop/oil-no-more/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7775">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/oil-no-more">Oil No More</a>
                                        <div class="box_price">245,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            390,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/oil-no-more"><span>Oil No More by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="7773" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/951/medium/1521640459.jpg)">
                                            <div class="seo-text hidden">
                                                Dưỡng Da từ A đến Z với trọn bộ sản phẩm chăm sóc da từ nhãn hàng OKAME. Tập trung vào sự đơn giản tinh khiết, bộ sản phẩm dưỡng da tuy đơn giản nhưng có thể làm hài lòng từ những cô nàng "newbie" đến những "skincare junkie"
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Ultimate Set" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-ultimate-set/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="7773">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/okame-ultimate-set">OKAME Ultimate Set</a>
                                        <div class="box_price">850,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,500,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/okame-ultimate-set"><span>OKAME Ultimate Set by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6610" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/025/706/medium/1519788096.png)">
                                            <div class="seo-text hidden">
                                                "All about Eyes 2017 tổng hợp những sản phẩm mà Lixibox yêu thích chỉ dành riêng cho đôi mắt của bạn. Vì đôi mắt là cửa sổ của tâm hồn
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Lixibox Favorites - All About Eyes 2017 (vol3)" data-remote="true" rel="nofollow" data-method="post" href="/shop/lixibox-favorites-all-about-eyes-2017-vol3/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <a class="box_name" href="/shop/lixibox-favorites-all-about-eyes-2017-vol3">Lixibox Favorites - All About Eyes 2017 (vol3)</a>
                                        <div class="box_price">580,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,480,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/lixibox-favorites-all-about-eyes-2017-vol3"><span>Lixibox Favorites - All About Eyes 2017 (vol3) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6451" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/716/medium/1515388425.png)">
                                            <div class="seo-text hidden">
                                                This oil control paper with Charcoal powder added will effectively improve oil
                                                absorption, helping your pores stay unclogged without affecting your makeup.
                                                The easiest way to keep your skin perfectly matte.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Lixibox Bamboo Charcoal Oil Control Paper - Set 3 gói" data-remote="true" rel="nofollow" data-method="post" href="/shop/lixibox-bamboo-charcoal-oil-control-paper-set-3-goi/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6451">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/lixibox-bamboo-charcoal-oil-control-paper-set-3-goi">Lixibox Bamboo Charcoal Oil Control Paper - Set 3 gói</a>
                                        <div class="box_price">120,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            165,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/lixibox-bamboo-charcoal-oil-control-paper-set-3-goi"><span>Lixibox Bamboo Charcoal Oil Control Paper - Set 3 gói by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6433" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/729/medium/1515467198.jpg)">
                                            <div class="seo-text hidden">
                                                Bông tẩy trang Silcot được làm từ 100% Cotton thiên nhiên đặc biệt an toàn cho da với cấu trúc siêu thấm, siêu mịn, không thể mủn rách khi tiếp xúc với chất lỏng. Bông làm sạch nhẹ nhàng, không để lại xơ bông trên da và tiết kiệm tối đa các sản phẩm dưỡng da, dung dịch tẩy trang. Đồng thời sản phẩm giúp thấm hút dầu thừa và dịch nhờn trên da, làm thông thoáng, giảm viêm nhiễm, ngừa mụn và bảo vệ lớp trang điểm.


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Bông Trang Điểm Silcot Miếng Đôi (5 hộp)" data-remote="true" rel="nofollow" data-method="post" href="/shop/bong-trang-diem-silcot-mieng-doi-5-hop/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6433">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/bong-trang-diem-silcot-mieng-doi-5-hop">Bông Trang Điểm Silcot Miếng Đôi (5 hộp)</a>
                                        <div class="box_price">270,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            325,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/bong-trang-diem-silcot-mieng-doi-5-hop"><span>Bông Trang Điểm Silcot Miếng Đôi (5 hộp) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6431" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/728/medium/1515467069.jpg)">
                                            <div class="seo-text hidden">
                                                Bông tẩy trang Silcot được làm từ 100% Cotton thiên nhiên đặc biệt an toàn cho da với cấu trúc siêu thấm, siêu mịn, không thể mủn rách khi tiếp xúc với chất lỏng. Bông làm sạch nhẹ nhàng, không để lại xơ bông trên da và tiết kiệm tối đa các sản phẩm dưỡng da, dung dịch tẩy trang. Đồng thời sản phẩm giúp thấm hút dầu thừa và dịch nhờn trên da, làm thông thoáng, giảm viêm nhiễm, ngừa mụn và bảo vệ lớp trang điểm.


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Bông Trang Điểm Silcot Cao Cấp (5 hộp)" data-remote="true" rel="nofollow" data-method="post" href="/shop/bong-trang-diem-silcot-cao-cap-5-hop/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <a class="box_name" href="/shop/bong-trang-diem-silcot-cao-cap-5-hop">Bông Trang Điểm Silcot Cao Cấp (5 hộp)</a>
                                        <div class="box_price">220,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            275,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/bong-trang-diem-silcot-cao-cap-5-hop"><span>Bông Trang Điểm Silcot Cao Cấp (5 hộp) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6430" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/727/medium/1515466985.jpg)">
                                            <div class="seo-text hidden">
                                                Bông trang điểm Silcot là sản phẩm chăm sóc da cao cấp bán chạy số 1 Nhật Bản trong hơn 10 năm liền. Được làm từ 100% sợi bông tự nhiên, bông trang điểm mềm xốp, êm ái và vô cùng dịu nhẹ với da. Sợi bông thấm được dàn đều cùng thiết kế dạng túi giúp miếng bông trang điểm không bị xù, biến dạng hoặc để lại xơ bông trên mặt đồng thời tiết kiệm dung dịch dưỡng da và tăng cường đối da hiệu quả trên da. Bông trang điểm Silcot thích hợp dùng trong quy trình chăm sóc da chuyên sâu với các loại nước dưỡng.


                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Bông Trang Điểm Silcot (5 hộp)" data-remote="true" rel="nofollow" data-method="post" href="/shop/bong-trang-diem-silcot-5-hop/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <a class="box_name" href="/shop/bong-trang-diem-silcot-5-hop">Bông Trang Điểm Silcot (5 hộp)</a>
                                        <div class="box_price">170,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            200,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/bong-trang-diem-silcot-5-hop"><span>Bông Trang Điểm Silcot (5 hộp) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6389" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/642/medium/1514536379.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt tẩy trang với dầu Oliu - Mouse Nettoyante Cleansing Foam 150ml - Le Petit Olivier nhẹ nhàng lấy sạch bụi bẩn, dầu thừa, lớp phấn trang điểm trên da. Bên cạnh đó còn cung cấp nhiều chất dưỡng ẩm thiên nhiên đem đến làn da mềm mại, mịn màng..Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" ONE-STEP CLEANSING 9 (Hot Pink) " data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-9-hot-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6389">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-9-hot-pink"> ONE-STEP CLEANSING 9 (Hot Pink) </a>
                                        <div class="box_price">880,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,085,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-9-hot-pink"><span> ONE-STEP CLEANSING 9 (Hot Pink)  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6200" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/470/medium/1513672044.jpg)">
                                            <div class="seo-text hidden">
                                                Sau những bữa tiệc tùng với bạn bè thì các bạn rất mệt mỏi với giai đoạn tẩy trang , Lixibox đã tổng hợp cho các bạn 1 bộ sản phẩm tẩy trang rất tốt luôn, giúp loại bỏ sạch sẽ những bụi bẩn và lớp makeup.







                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="COOL FOR THE SUMMER (Sky Blue)" data-remote="true" rel="nofollow" data-method="post" href="/shop/cool-for-the-summer-sky-blue/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6200">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/cool-for-the-summer-sky-blue">COOL FOR THE SUMMER (Sky Blue)</a>
                                        <div class="box_price">920,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,506,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/cool-for-the-summer-sky-blue"><span>COOL FOR THE SUMMER (Sky Blue) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6199" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/471/medium/1513672160.jpg)">
                                            <div class="seo-text hidden">
                                                Sau những bữa tiệc tùng với bạn bè thì các bạn rất mệt mỏi với giai đoạn tẩy trang , Lixibox đã tổng hợp cho các bạn 1 bộ sản phẩm tẩy trang rất tốt luôn, giúp loại bỏ sạch sẽ những bụi bẩn và lớp makeup.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="COOL FOR THE SUMMER  (Baby Pink)" data-remote="true" rel="nofollow" data-method="post" href="/shop/cool-for-the-summer--baby-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6199">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/cool-for-the-summer--baby-pink">COOL FOR THE SUMMER  (Baby Pink)</a>
                                        <div class="box_price">920,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,506,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/cool-for-the-summer--baby-pink"><span>COOL FOR THE SUMMER  (Baby Pink) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6198" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/031/313/medium/1524483329.jpg)">
                                            <div class="seo-text hidden">
                                                Sau những bữa tiệc tùng với bạn bè thì các bạn rất mệt mỏi với giai đoạn tẩy trang , Lixibox đã tổng hợp cho các bạn 1 bộ sản phẩm tẩy trang rất tốt luôn, giúp loại bỏ sạch sẽ những bụi bẩn và lớp makeup.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Cool for the Summer " data-remote="true" rel="nofollow" data-method="post" href="/shop/cool-for-the-summer-/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6198">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/cool-for-the-summer-">Cool for the Summer </a>
                                        <div class="box_price">920,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,506,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/cool-for-the-summer-"><span>Cool for the Summer  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6194" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/457/medium/1513669465.jpg)">
                                            <div class="seo-text hidden">
                                                Tiếp nối Makeup4Beginner1, Lixibox gợi ý cho các nàng thêm box Makeup4Beginner2 với những sản phẩm điểm tô sự tươi trẻ cho gương mặt nhé.

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Lixibox Favorites - Make Up 4 Beginner 2" data-remote="true" rel="nofollow" data-method="post" href="/shop/lixibox-favorites-makeup4beginner-2/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                        <a class="box_name" href="/shop/lixibox-favorites-makeup4beginner-2">Lixibox Favorites - Make Up 4 Beginner 2</a>
                                        <div class="box_price">580,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,485,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/lixibox-favorites-makeup4beginner-2"><span>Lixibox Favorites - Make Up 4 Beginner 2 by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6075" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/304/medium/1512014138.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt simple kind to skin refreshing facial wash gel là sữa rửa mặt giúp nhẹ nhàng làm sạch da mà mà vẫn giữ được độ ẩm cho da, đem tới cho bạn một làn da mềm mại, tươi trẻ.SENKA PERFECT DOUBLE WASH Sữa rửa mặt tẩy trang 2 trong 1 nhanh chóng tẩy sạch lớp trang điểm và bã nhờn một cách hiệu quả.
                                                Nhẹ nhàng làm sạch lớp trang điểm, bụi bẩn và bã nhờn
                                                Thành phần Mild Clear an toàn và phù hợp với mọi loại da, kể cả da nhạy cảm
                                                Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt
                                                Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" One-Step Cleansing 7 (Blue Sky) " data-remote="true" rel="nofollow" data-method="post" href="/shop/-one-step-cleansing-7-blue-sky-/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6075">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/-one-step-cleansing-7-blue-sky-"> One-Step Cleansing 7 (Blue Sky) </a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            950,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/-one-step-cleansing-7-blue-sky-"><span> One-Step Cleansing 7 (Blue Sky)  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6073" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/293/medium/1512011998.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt simple kind to skin refreshing facial wash gel là sữa rửa mặt giúp nhẹ nhàng làm sạch da mà mà vẫn giữ được độ ẩm cho da, đem tới cho bạn một làn da mềm mại, tươi trẻ.SENKA PERFECT DOUBLE WASH Sữa rửa mặt tẩy trang 2 trong 1 nhanh chóng tẩy sạch lớp trang điểm và bã nhờn một cách hiệu quả.
                                                Nhẹ nhàng làm sạch lớp trang điểm, bụi bẩn và bã nhờn
                                                Thành phần Mild Clear an toàn và phù hợp với mọi loại da, kể cả da nhạy cảm
                                                Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt
                                                Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" One-Step Cleansing 7 (Hot Pink) " data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-7-hot-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6073">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-7-hot-pink"> One-Step Cleansing 7 (Hot Pink) </a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            950,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-7-hot-pink"><span> One-Step Cleansing 7 (Hot Pink)  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6071" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/300/medium/1512013238.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt Senka Perfect White Clay 120gr từ đất sét trắng
                                                giúp loại bỏ tế bào chết cho làn da sáng rạng rỡ và đều màu. Làm sạch bụi bẩn và bã nhờn sâu trong lỗ chân lông . Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt....Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. * Box trên không được áp dụng mã giảm giá.

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="One-Step Cleansing 6 (Mustard)  " data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-6-mustard--/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6071">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-6-mustard--">One-Step Cleansing 6 (Mustard)  </a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            940,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-6-mustard--"><span>One-Step Cleansing 6 (Mustard)   by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6069" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/302/medium/1512013527.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt Senka Perfect White Clay 120gr từ đất sét trắng
                                                giúp loại bỏ tế bào chết cho làn da sáng rạng rỡ và đều màu. Làm sạch bụi bẩn và bã nhờn sâu trong lỗ chân lông . Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt....Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. * Box trên không được áp dụng mã giảm giá.

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="One-Step Cleansing 6 (Baby Pink) " data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-6-baby-pink-/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6069">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-6-baby-pink-">One-Step Cleansing 6 (Baby Pink) </a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            940,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-6-baby-pink-"><span>One-Step Cleansing 6 (Baby Pink)  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6068" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/294/medium/1512012104.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt Senka Perfect White Clay 120gr từ đất sét trắng
                                                giúp loại bỏ tế bào chết cho làn da sáng rạng rỡ và đều màu. Làm sạch bụi bẩn và bã nhờn sâu trong lỗ chân lông . Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt....Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. * Box trên không được áp dụng mã giảm giá.

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="One-Step Cleansing 6 (Hot Pink) " data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-6-hot-pink-/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6068">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-6-hot-pink-">One-Step Cleansing 6 (Hot Pink) </a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            940,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-6-hot-pink-"><span>One-Step Cleansing 6 (Hot Pink)  by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6066" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/296/medium/1512012379.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt Senka Làm sạch bụi bẩn và bã nhờn sâu trong lỗ chân lông Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt....Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. * Box trên không được áp dụng mã giảm giá.

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="One-Step Cleansing 5 (Mustard)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-5-mustard/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6066">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-5-mustard">One-Step Cleansing 5 (Mustard)</a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            940,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-5-mustard"><span>One-Step Cleansing 5 (Mustard) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6065" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/297/medium/1512012688.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt Senka Làm sạch bụi bẩn và bã nhờn sâu trong lỗ chân lông Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt....Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. * Box trên không được áp dụng mã giảm giá.

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="One-Step Cleansing 5 (Sky Blue)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-5-sky-blue/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6065">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-5-sky-blue">One-Step Cleansing 5 (Sky Blue)</a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            940,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-5-sky-blue"><span>One-Step Cleansing 5 (Sky Blue) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6064" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/298/medium/1512012793.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Sữa rửa mặt Senka Làm sạch bụi bẩn và bã nhờn sâu trong lỗ chân lông Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt....Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. * Box trên không được áp dụng mã giảm giá.

                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="One-Step Cleansing 5 (Baby Pink)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-5-baby-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6064">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-5-baby-pink">One-Step Cleansing 5 (Baby Pink)</a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            940,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-5-baby-pink"><span>One-Step Cleansing 5 (Baby Pink) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6063" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/292/medium/1512011854.jpg)">
                                            <div class="seo-text hidden">
                                                Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt.
                                                Sữa rửa mặt Senka Làm sạch bụi bẩn và bã nhờn sâu trong lỗ chân lông
                                                Tinh chất tơ tằm trắng*1 cùng với công thức gấp đôi Hyaluronic acid*2 duy trì lớp màng dưỡng ẩm tự nhiên giúp da sáng mịn và mềm mượt....Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                                * Box trên không được áp dụng mã giảm giá.
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="One-Step Cleansing 5 (Hot Pink)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-5-hot-pink/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6063">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/one-step-cleansing-5-hot-pink">One-Step Cleansing 5 (Hot Pink)</a>
                                        <div class="box_price">750,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            940,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/one-step-cleansing-5-hot-pink"><span>One-Step Cleansing 5 (Hot Pink) by Lixibox Online</span>
                                        </a></div>
                                </div>
                                <div class="swiper-slide" style="width: 194.75px; margin-right: 20px;">
                                    <div box_id="6021" class="box_card">
                                        <div class="box_image" style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/224/medium/1511266505.png)">
                                            <div class="seo-text hidden">
                                                "All about Eyes 2017 tổng hợp những sản phẩm mà Lixibox yêu thích chỉ dành riêng cho đôi mắt của bạn. Vì đôi mắt là cửa sổ của tâm hồn
                                            </div>
                                            <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                            </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Rainbow Eyes" data-remote="true" rel="nofollow" data-method="post" href="/shop/rainbow-eyes/like_box"><i class="fa fa-heart"></i>
                                            </a>
                                            <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                <input type="hidden" name="box_id" id="box_id" value="6021">
                                                <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                <div class="box_tool box_quick_add_to_card">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <a class="box_name" href="/shop/rainbow-eyes">Rainbow Eyes</a>
                                        <div class="box_price">580,000 đ</div>
                                        <div class="box_value">
                                            <span class="real-value-text"></span>
                                            1,535,000 đ
                                        </div>
                                        <a class="link-block" href="/shop/rainbow-eyes"><span>Rainbow Eyes by Lixibox Online</span>
                                        </a></div>
                                </div>

                            </div>
                            <div class="swiper-pagination swiper-pagination-white hidden-xs hidden-sm swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                            <div class="swiper-button-next swiper-button-black hidden-xs hidden-sm"></div>
                            <div class="swiper-button-prev swiper-button-black hidden-xs hidden-sm swiper-button-disabled"></div>
                        </div>
                    </div>

                    <div class="divider_title mono">
                        <span>Beauty Box</span>
                    </div>
                    <div class="pull-left top-10">
                        <strong>162</strong>
                        sản phẩm
                    </div>
                    <div class="visible-lg" id="theme_sorting">
                        Sắp xếp theo:
                        <div class="btn-group dropdown">
                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                                <i class="fa fa-clock-o"></i>
                                Mới nhất
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/shop/beauty-box?sort=price-asc"><i class="fa fa-sort-numeric-asc"></i>
                                        Giá tăng dần
                                    </a></li>
                                <li>
                                    <a href="/shop/beauty-box?sort=price-desc"><i class="fa fa-sort-numeric-desc"></i>
                                        Giá giảm dần
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="top-20 box_card_container" data-source="Beauty Box" id="theme_boxes">
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7877" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/094/medium/1523330150.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/094/medium/1523330150.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Set gồm Dầu Gội và Sữa Tắm từ thương hiệu OKAME

                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 03 Shampoo + Shower" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-03-shampoo-shower/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -47%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7877">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-set-03-shampoo-shower">OKAME Set 03 Shampoo + Shower</a>

                                <div class="box_price">
                                    320,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    600,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-set-03-shampoo-shower"><span>OKAME Set 03 Shampoo + Shower by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7876" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/093/medium/1523329945.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/093/medium/1523329945.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Set gồm Dưỡng Thể và Sữa Tắm từ thương hiệu OKAME giúp làn da thêm mịn màng
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" OKAME Set 02 Lotion + Shower  " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-02-lotion-shower/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -41%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7876">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-set-02-lotion-shower"> OKAME Set 02 Lotion + Shower  </a>

                                <div class="box_price">
                                    400,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    680,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-set-02-lotion-shower"><span> OKAME Set 02 Lotion + Shower   by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7875" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/092/medium/1523329786.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/092/medium/1523329786.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Set gồm sản phẩm Dầu Gội và Dầu Xả từ thương hiệu OKAME cho mái tóc chắc khoẻ và mềm mại
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 01 Shampoo + Conditioner " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-set-01-shampoo-conditioner/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -44%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7875">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-set-01-shampoo-conditioner">OKAME Set 01 Shampoo + Conditioner </a>
                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                    7
                                </div>

                                <div class="box_price">
                                    350,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    630,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-set-01-shampoo-conditioner"><span>OKAME Set 01 Shampoo + Conditioner  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7862" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/074/medium/1522986461.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/074/medium/1522986461.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                        * Box trên không được áp dụng mã giảm giá.
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (GREY SMOKE)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-grey-smoke/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -27%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7862">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/one-step-cleansing-10-grey-smoke">ONE-STEP CLEANSING 10 (GREY SMOKE)</a>

                                <div class="box_price">
                                    900,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    1,230,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/one-step-cleansing-10-grey-smoke"><span>ONE-STEP CLEANSING 10 (GREY SMOKE) by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7861" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/073/medium/1522986073.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/073/medium/1522986073.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                        * Box trên không được áp dụng mã giảm giá.
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (MUSTARD)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-mustard/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -27%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7861">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/one-step-cleansing-10-mustard">ONE-STEP CLEANSING 10 (MUSTARD)</a>

                                <div class="box_price">
                                    900,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    1,230,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/one-step-cleansing-10-mustard"><span>ONE-STEP CLEANSING 10 (MUSTARD) by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7860" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/072/medium/1522985984.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/072/medium/1522985984.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                        * Box trên không được áp dụng mã giảm giá.
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (SKY BLUE)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-sky-blue/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -27%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7860">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/one-step-cleansing-10-sky-blue">ONE-STEP CLEANSING 10 (SKY BLUE)</a>

                                <div class="box_price">
                                    900,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    1,230,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/one-step-cleansing-10-sky-blue"><span>ONE-STEP CLEANSING 10 (SKY BLUE) by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7859" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/071/medium/1522985872.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/071/medium/1522985872.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                        * Box trên không được áp dụng mã giảm giá.
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (HOT PINK)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-hot-pink/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -27%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7859">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/one-step-cleansing-10-hot-pink">ONE-STEP CLEANSING 10 (HOT PINK)</a>

                                <div class="box_price">
                                    900,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    1,230,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/one-step-cleansing-10-hot-pink"><span>ONE-STEP CLEANSING 10 (HOT PINK) by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7858" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/070/medium/1522985665.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/070/medium/1522985665.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Muốn xây dựng một Skincare Routine cơ bản bước đầu tiên cũng là bước quan trọng nhất đó chính là làm sạch da mặt. Okame Camellia Cleansing Balm tẩy sạch các lớp trang điểm và bụi bẩn một cách nhẹ nhàng nhưng hiệu quả. Camellia Oleifera Seed Oil và Macadamia Ternifolia Seed Oil có trong sản phẩm chứa oleic acid và vitamins A, B, D, E cũng Omega 3, 6, 9, có tác dụng chống oxy hoá và cân bằng làn da của bạn. Đặc biệt với sự hổ trợ đắc lực của chiếc máy Halio là thương hiệu máy rửa mặt sử dụng công nghệ Sonic Wave Cleansing giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng.
                                        * Box trên không được áp dụng mã giảm giá.
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="ONE-STEP CLEANSING 10 (BABY PINK)" data-remote="true" rel="nofollow" data-method="post" href="/shop/one-step-cleansing-10-baby-pink/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -27%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7858">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/one-step-cleansing-10-baby-pink">ONE-STEP CLEANSING 10 (BABY PINK)</a>

                                <div class="box_price">
                                    900,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    1,230,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/one-step-cleansing-10-baby-pink"><span>ONE-STEP CLEANSING 10 (BABY PINK) by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7833" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/095/medium/1523330283.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/095/medium/1523330283.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        MUA 1 TẶNG 1

                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel=" OKAME Set 04 Conditioner + Conditioner" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -47%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7833">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo"> OKAME Set 04 Conditioner + Conditioner</a>
                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                    9
                                </div>

                                <div class="box_price">
                                    350,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    660,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-glossifying-keratin-conditioner-500-ml-bogo"><span> OKAME Set 04 Conditioner + Conditioner by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7832" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/096/medium/1523330361.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/096/medium/1523330361.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        MUA 1 TẶNG 1
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 05 Lotion + Lotion " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -47%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7832">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo">OKAME Set 05 Lotion + Lotion </a>
                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                    5
                                </div>

                                <div class="box_price">
                                    400,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    760,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-herbal-repairing-body-lotion-500-ml-bogo"><span>OKAME Set 05 Lotion + Lotion  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7831" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/097/medium/1523330435.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/097/medium/1523330435.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        MUA 1 TẶNG 1

                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 06 Shampoo + Shampoo" data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -47%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7831">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo">OKAME Set 06 Shampoo + Shampoo</a>
                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                    11
                                </div>

                                <div class="box_price">
                                    320,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    600,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-glossifying-keratin-shampoo-500-ml-bogo"><span>OKAME Set 06 Shampoo + Shampoo by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7828" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/099/medium/1523331212.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/099/medium/1523331212.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        MUA 1 TẶNG 1
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Set 07 Shower + Shower " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -47%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7828">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo">OKAME Set 07 Shower + Shower </a>

                                <div class="box_price">
                                    320,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    600,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-skin-replenishing-body-shower-500ml-bogo"><span>OKAME Set 07 Shower + Shower  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7811" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/017/medium/1521788847.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/017/medium/1521788847.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Set Evas Vitamin Duo - Strawberry bao gồm bộ đôi sữa dưỡng thể và sữa tắm giúp dưỡng ẩm cho làn da


                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="EVAS VITAMIN DUO - Strawberry " data-remote="true" rel="nofollow" data-method="post" href="/shop/evas-vitamin-duo-strawberry/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -12%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7811">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/evas-vitamin-duo-strawberry">EVAS VITAMIN DUO - Strawberry </a>

                                <div class="box_price">
                                    300,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    340,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/evas-vitamin-duo-strawberry"><span>EVAS VITAMIN DUO - Strawberry  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7810" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/016/medium/1521788717.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/016/medium/1521788717.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Set Evas Vitamin Duo - Orange bao gồm bộ đôi sữa dưỡng thể và sữa tắm giúp dưỡng ẩm cho làn da


                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="EVAS VITAMIN DUO - Orange " data-remote="true" rel="nofollow" data-method="post" href="/shop/evas-vitamin-duo-orange/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -12%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7810">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/evas-vitamin-duo-orange">EVAS VITAMIN DUO - Orange </a>

                                <div class="box_price">
                                    300,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    340,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/evas-vitamin-duo-orange"><span>EVAS VITAMIN DUO - Orange  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7809" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/015/medium/1521788539.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/015/medium/1521788539.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Set Evas Vitamin Duo - Grape bao gồm bộ đôi sữa dưỡng thể và sữa tắm giúp dưỡng ẩm cho làn da


                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="EVAS VITAMIN DUO - Grape" data-remote="true" rel="nofollow" data-method="post" href="/shop/evas-vitamin-duo-grape/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -12%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7809">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/evas-vitamin-duo-grape">EVAS VITAMIN DUO - Grape</a>

                                <div class="box_price">
                                    300,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    340,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/evas-vitamin-duo-grape"><span>EVAS VITAMIN DUO - Grape by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7783" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/971/medium/1521649272.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/971/medium/1521649272.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Bộ đôi sữa rửa mặt Choonee Brightening Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.


                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - Brightening" data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-brightening/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -19%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7783">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/perfect-foaming-brightening">Perfect Foaming - Brightening</a>

                                <div class="box_price">
                                    220,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    270,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/perfect-foaming-brightening"><span>Perfect Foaming - Brightening by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7782" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/970/medium/1521649109.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/970/medium/1521649109.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Bộ đôi sữa rửa mặt Choonee PH Balancing Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.


                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - PH Balancing " data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-ph-balancing/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -19%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7782">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/perfect-foaming-ph-balancing">Perfect Foaming - PH Balancing </a>

                                <div class="box_price">
                                    220,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    270,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/perfect-foaming-ph-balancing"><span>Perfect Foaming - PH Balancing  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7781" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/969/medium/1521648841.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/969/medium/1521648841.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Bộ đôi sữa rửa mặt Choonee Deep Clearing Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.


                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - Deep Clearing" data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-deep-clearing/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -19%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7781">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/perfect-foaming-deep-clearing">Perfect Foaming - Deep Clearing</a>

                                <div class="box_price">
                                    220,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    270,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/perfect-foaming-deep-clearing"><span>Perfect Foaming - Deep Clearing by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7780" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/968/medium/1521648601.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/968/medium/1521648601.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Bộ đôi sữa rửa mặt Choonee Hydrating Soft Whip Cleansing Foam và Lixibox Pores No More Cleansing Pad sẽ giúp bước rửa mặt trở nên thú vị hơn nhiều lần.
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Perfect Foaming - Hydrating" data-remote="true" rel="nofollow" data-method="post" href="/shop/perfect-foaming-hydrating/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -19%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7780">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/perfect-foaming-hydrating">Perfect Foaming - Hydrating</a>

                                <div class="box_price">
                                    220,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    270,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/perfect-foaming-hydrating"><span>Perfect Foaming - Hydrating by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7779" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/967/medium/1521648071.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/967/medium/1521648071.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Combo Set 5 mặt nạ với những công dụng khác nhau, được xem là "must-buy" của Choonee
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Choonee Mask Set" data-remote="true" rel="nofollow" data-method="post" href="/shop/choonee-mask-set/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -20%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7779">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/choonee-mask-set">Choonee Mask Set</a>

                                <div class="box_price">
                                    180,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    225,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/choonee-mask-set"><span>Choonee Mask Set by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7778" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/966/medium/1521647433.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/966/medium/1521647433.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Trọn bộ combo 8 sản phẩm vui nhộn từ thương hiệu Petite Lael cho bạn thoả sức sáng tạo

                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Petite Lael Combo Ver 2" data-remote="true" rel="nofollow" data-method="post" href="/shop/petite-lael-combo-ver-2/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -29%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7778">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/petite-lael-combo-ver-2">Petite Lael Combo Ver 2</a>

                                <div class="box_price">
                                    680,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    960,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/petite-lael-combo-ver-2"><span>Petite Lael Combo Ver 2 by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7777" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/965/medium/1521646624.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/965/medium/1521646624.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Trọn bộ combo 8 sản phẩm vui nhộn từ thương hiệu Petite Lael cho bạn thoả sức sáng tạo
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Petite Lael Combo Ver 1" data-remote="true" rel="nofollow" data-method="post" href="/shop/petite-lael-combo-ver-1/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -29%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7777">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/petite-lael-combo-ver-1">Petite Lael Combo Ver 1</a>

                                <div class="box_price">
                                    680,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    960,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/petite-lael-combo-ver-1"><span>Petite Lael Combo Ver 1 by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7776" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/959/medium/1521643043.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/959/medium/1521643043.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Hai dòng sản phẩm chăm sóc da đơn giản đến từ thương hiệu OKAME sẽ giúp các nàng rút ngắn thời gian dưỡng da nhưng vẫn đảm bảo cung cấp đủ độ ẩm cần thiết cho da.
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="OKAME Simple Skincare " data-remote="true" rel="nofollow" data-method="post" href="/shop/okame-simple-skincare/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -20%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7776">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/okame-simple-skincare">OKAME Simple Skincare </a>

                                <div class="box_price">
                                    550,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    690,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/okame-simple-skincare"><span>OKAME Simple Skincare  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7775" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/955/medium/1521642554.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/955/medium/1521642554.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Bộ đôi Lixibox Giấy Thấm Dầu than hoạt tính và OKAME Xịt Khoáng sẽ là trợ thủ đắc lực giúp giảm thiểu lượng dầu và bã nhờn trên da bạn.

                                        Bước 1: Dùng giấy thấm dầu lấy hết lượng dầu thừa và bãn nhờ trên da mặt
                                        Bước 2: Xịt khoáng cấp ẩm cho da ngay tức thì
                                    </div>
                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143">
                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Oil No More" data-remote="true" rel="nofollow" data-method="post" href="/shop/oil-no-more/like_box"><i class="fa fa-heart"></i>
                                    </a>
                                    <div class="discount_percent">
                                        -37%
                                    </div>
                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                        <input type="hidden" name="box_id" id="box_id" value="7775">
                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                        <div class="box_tool box_quick_add_to_card">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </form>

                                </div>
                                <a class="box_name" href="/shop/oil-no-more">Oil No More</a>
                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                    5
                                </div>

                                <div class="box_price">
                                    245,000 đ
                                </div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    390,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/oil-no-more"><span>Oil No More by Lixibox Online</span>
                                </a></div>

                        </div>
                    </div>
                    <div class="row hidden-xs">
                        <div class="pagination lx-site-pagination">
                            <ul class="pagination">

                                <li class="active">
                                    <a remote="false">1</a>
                                </li>

                                <li>
                                    <a rel="next" href="/shop/beauty-box?page=2">2</a>
                                </li>

                                <li>
                                    <a href="/shop/beauty-box?page=3">3</a>
                                </li>

                                <li>
                                    <a href="/shop/beauty-box?page=4">4</a>
                                </li>

                                <li>
                                    <a href="/shop/beauty-box?page=5">5</a>
                                </li>

                                <li class="disabled">
                                    <a>…</a>
                                </li>

                                <li>
                                    <a rel="next" href="/shop/beauty-box?page=2"><i class="fa fa-play"></i>
                                    </a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="visible-xs bottom-50">
            <div class="text-center" id="load_more">
                <a class="btn btn-default" data-remote="true" href="/shop/beauty-box?page=2">Xem thêm</a>

            </div>
        </div>
        <div class="row top-30">
            <div class="col-xs-12">
                <h3 class="divider-title">
                    <span class="text">BẠN ĐÃ XEM</span>
                </h3>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box_card_slider top-20">
                            <div class="flexslider flexslider-hot-boxes" data-item-margin="20" data-max-item="4" data-slide="multiple" data-source="Home Page Viewed Boxes" id="viewed_boxes">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        <li data-thumb-alt="" style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="5653" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/023/786/medium/1504684532.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/023/786/medium/1504684532.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
                                                    <div class="seo-text hidden">
                                                        Da sạch mỗi ngày thực sự đóng vai trò quan trọng cho một làm da đẹp. Sự kết hợp giữa 3 sản phẩm sau đây với những công dụng hữu hiệu sẽ đem đến cho mọi người một làn da sạch và khỏe thực sự. Đầu tiên, sáp tẩy trang Banila với khả năng tẩy trang xuất sắc, cuốn sạch bụi bẩn mà không để lại nhờn dính hay làm mất đi các chất dưỡng ẩm cần thiết cho da, sử dụng chung với máy rửa mặt Halio giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn khuôn mặt sau một ngày làm việc căng thẳng. Sau khi rửa mặt xong, chiếc mặt nạ Mediheal với nhiều công dụng như dưỡng trắng, thải độc, dưỡng ẩm,... sẽ giúp da mịn mướt, và khỏe hơn.

                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143" draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Mother's Day Special (Sky Blue)" data-remote="true" rel="nofollow" data-method="post" href="/shop/mothers-day-special-sky-blue/like_box"><i class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -27%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="5653">
                                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/mothers-day-special-sky-blue">Mother's Day Special (Sky Blue)</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    5
                                                </div>

                                                <div class="box_price">
                                                    820,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,120,000 đ
                                                </div>
                                                <a class="link-block box_link" href="/shop/mothers-day-special-sky-blue"><span>Mother's Day Special (Sky Blue) by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li data-thumb-alt="" style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="5963" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/705/medium/1519788040.png" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/705/medium/1519788040.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
                                                    <div class="seo-text hidden">
                                                        "Những sản phẩm được các bạn ưu ái đón nhận trong thời gian qua, Lixibox đã tập hợp lại thành một box Best Sellers.
                                                        Halio Facial Cleansing &amp; Massaging Device - Sky Blue
                                                        the Duo Rain drop
                                                        Lustre PRO Eyelash Curler
                                                        Lustre Ultimate Eyeliner Professional Line - Deep Green Metallic
                                                        OKAME Bio-Cellulose Mask Anti-aging"




                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143" draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Hot Fun In The Summertime" data-remote="true" rel="nofollow" data-method="post" href="/shop/hot-fun-in-the-summertime/like_box"><i class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -50%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="5963">
                                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/hot-fun-in-the-summertime">Hot Fun In The Summertime</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    73
                                                </div>

                                                <div class="box_price">
                                                    990,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,970,000 đ
                                                </div>
                                                <a class="link-block box_link" href="/shop/hot-fun-in-the-summertime"><span>Hot Fun In The Summertime by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="6199" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/471/medium/1513672160.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/024/471/medium/1513672160.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
                                                    <div class="seo-text hidden">
                                                        Sau những bữa tiệc tùng với bạn bè thì các bạn rất mệt mỏi với giai đoạn tẩy trang , Lixibox đã tổng hợp cho các bạn 1 bộ sản phẩm tẩy trang rất tốt luôn, giúp loại bỏ sạch sẽ những bụi bẩn và lớp makeup.
                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143" draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="COOL FOR THE SUMMER  (Baby Pink)" data-remote="true" rel="nofollow" data-method="post" href="/shop/cool-for-the-summer--baby-pink/like_box"><i class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -39%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="6199">
                                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/cool-for-the-summer--baby-pink">COOL FOR THE SUMMER  (Baby Pink)</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    16
                                                </div>

                                                <div class="box_price">
                                                    920,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,506,000 đ
                                                </div>
                                                <a class="link-block box_link" href="/shop/cool-for-the-summer--baby-pink"><span>COOL FOR THE SUMMER  (Baby Pink) by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="6200" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/470/medium/1513672044.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/024/470/medium/1513672044.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
                                                    <div class="seo-text hidden">
                                                        Sau những bữa tiệc tùng với bạn bè thì các bạn rất mệt mỏi với giai đoạn tẩy trang , Lixibox đã tổng hợp cho các bạn 1 bộ sản phẩm tẩy trang rất tốt luôn, giúp loại bỏ sạch sẽ những bụi bẩn và lớp makeup.







                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143" draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="COOL FOR THE SUMMER (Sky Blue)" data-remote="true" rel="nofollow" data-method="post" href="/shop/cool-for-the-summer-sky-blue/like_box"><i class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -39%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="6200">
                                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/cool-for-the-summer-sky-blue">COOL FOR THE SUMMER (Sky Blue)</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    12
                                                </div>

                                                <div class="box_price">
                                                    920,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,506,000 đ
                                                </div>
                                                <a class="link-block box_link" href="/shop/cool-for-the-summer-sky-blue"><span>COOL FOR THE SUMMER (Sky Blue) by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="7321" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/809/medium/1519810488.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/809/medium/1519810488.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
                                                    <div class="seo-text hidden">
                                                        Box tập hợp các sản phẩm giúp làm sạch và thư giãn làn da.
                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox" href="/ex/lixibox-lixibox"><img alt="Online Lixibox" src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143" draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action" data-eventaction="like" data-eventlabel="Lixibox Favorites - Refresh your skin" data-remote="true" rel="nofollow" data-method="post" href="/shop/women-box-refresh-your-skin/like_box"><i class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -38%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="7321">
                                                        <input type="submit" name="commit" value="Add to cart" style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/women-box-refresh-your-skin">Lixibox Favorites - Refresh your skin</a>

                                                <div class="box_price">
                                                    550,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    885,000 đ
                                                </div>
                                                <a class="link-block box_link" href="/shop/women-box-refresh-your-skin"><span>Lixibox Favorites - Refresh your skin by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                    </ul></div><ol class="flex-control-nav flex-control-paging"><li><a href="#" class="flex-active">1</a></li><li><a href="#">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"></a></li><li class="flex-nav-next"><a class="flex-next" href="#"></a></li></ul></div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function() {
                        initSwiper();
                    });
                </script>
            </div>
        </div>

    </div>
    <script>
        setTimeout(function() {
            window._fbq = window._fbq || [];
            var fbTrackOptions = JSON.parse('{\"content_name\":\"Beauty Box\",\"content_type\":\"browse_node\",\"content_ids\":[7877,7876,7875,7862,7861,7860,7859,7858,7833,7832,7831,7828,7811,7810,7809,7783,7782,7781,7780,7779,7778,7777,7776,7775]}');
            if (true) {
                window._fbq.push(['track', 'ViewContent', fbTrackOptions]);
            } else {
                console.log("ViewContent", fbTrackOptions);
            }
        }, 300);
    </script>

    <div class="modal fade" id="fb-login-modal">
        <div class="modal-dialog">
            <div class="modal-content text-center step-1">
                <div class="modal-header">
                    <button aria-label="Close" class="close close-registration-modal" data-dismiss="modal" type="button">
<span aria-hidden="true">
×
</span>
                    </button>
                    <h5 class="modal-title">
                        Chào
                        <span class="text-bold" id="fb_name">bạn</span>
                        nhé!
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="text-center bottom-10">Đăng nhập để được phục vụ tốt hơn nha!</div>
                    <a class="btn facebook-btn" id="fb_login" href="/omniauth/facebook?origin=https%3A%2F%2Fwww.lixibox.com%2Fshop%2Fbeauty-box"><img src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" width="30" height="30">
                        Đăng nhập
                    </a></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signup-modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content text-center step-1" id="register-content">
                <div class="modal-header">
                    <button aria-label="Close" class="close close-registration-modal" data-dismiss="modal" type="button">
<span aria-hidden="true">
×
</span>
                    </button>
                    <h2 class="modal-title">
                        Đăng Ký Miễn Phí
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="container-fluid no-padding">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="top-10 buttons">
                                    <a class="btn facebook-btn" id="popup_fb_register" href="/omniauth/facebook?origin=https%3A%2F%2Fwww.lixibox.com%2Fshop%2Fbeauty-box"><i class="fa fa-facebook"></i>
                                        Đăng ký bằng Facebook
                                    </a></div>
                                <div class="top-20 divider-top" style="padding-top: 15px;">
                                    <div class="step-1-text">
                                        hoặc đăng kí dùng email và mật khẩu
                                    </div>
                                    <div class="step-2-text">
                                        Thêm một chút thông tin để Lixibox phục vụ bạn tốt hơn
                                    </div>
                                </div>
                                <div class="top-10 text-left">
                                    <form role="form" id="popup_register" class="new_user" action="/users" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="OwFO0Wvm0tQ/lg5N1TCejNZmZFECp02BK8j7H4h2sRijVHl/CaSJ3xzhcViKQjjL8KoUlAdYrCggoFow2s5JLg=="><input type="hidden" name="return_to" id="return_to" value="https://www.lixibox.com/shop/beauty-box">
                                        <input type="hidden" name="promotion" id="promotion" value="50K">
                                        <div class="form-step-1">
                                            <div class="form-group">
                                                <label for="user_email">Email *</label>
                                                <input class="form-control" type="email" name="user[email]" id="user_email">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_password">Mật khẩu *</label>
                                                <input class="form-control" type="password" name="user[password]" id="user_password">
                                            </div>
                                        </div>
                                        <div class="form-step-2">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-xs-6 form-group">
                                                    <label for="user_last_name">Họ (&amp; chữ đệm) *</label>
                                                    <input class="form-control" type="text" name="user[last_name]" id="user_last_name">
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-xs-6 form-group">
                                                    <label for="user_first_name">Tên *</label>
                                                    <input class="form-control" type="text" name="user[first_name]" id="user_first_name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="user_phone">Số điện thoại</label>
                                                <input class="form-control" type="text" name="user[phone]" id="user_phone">
                                            </div>
                                        </div>
                                        <div class="top-20 bottom-20">
                                            <div class="pull-right">
                                                <input type="submit" name="commit" value="Đăng ký" class="btn lx-btn-primary">
                                            </div>
                                            <a id="popup-register-back" href="javascript:{}">&lt;&lt; Thay đổi email &amp; mật khẩu</a>
                                            <div class="no_account">
                                                Đã có tài khoản?
                                                <br>
                                                <a id="login-modal-button" href="javascript:{}">Đăng nhập</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-content text-center" id="login-content" style="display: none">
                <div class="modal-header">
                    <button aria-label="Close" class="close close-registration-modal" data-dismiss="modal" type="button">
<span aria-hidden="true">
×
</span>
                    </button>
                    <h2 class="modal-title">
                        Đăng nhập vào Lixibox
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="container-fluid no-padding">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="top-10 buttons">
                                    <a class="btn facebook-btn" id="popup_fb_login" href="/omniauth/facebook?origin=https%3A%2F%2Fwww.lixibox.com%2Fshop%2Fbeauty-box"><i class="fa fa-facebook"></i>
                                        Đăng nhập bằng Facebook
                                    </a></div>
                                <div class="top-20 divider-top" style="padding-top: 15px;">
                                    hoặc đăng nhập dùng email và mật khẩu
                                </div>
                                <div class="top-10 text-left">
                                    <form role="form" id="popup_login" class="new_user" action="/users/sign_in" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="OwFO0Wvm0tQ/lg5N1TCejNZmZFECp02BK8j7H4h2sRijVHl/CaSJ3xzhcViKQjjL8KoUlAdYrCggoFow2s5JLg=="><input type="hidden" name="return_to" id="return_to" value="https://www.lixibox.com/shop/beauty-box">
                                        <div class="form-group">
                                            <label for="user_email">Email</label>
                                            <input autofocus="autofocus" class="form-control" type="email" name="user[email]" id="user_email">
                                        </div>
                                        <div class="form-group">
                                            <label for="user_password">Mật khẩu</label>
                                            <input class="form-control" type="password" name="user[password]" id="user_password">
                                        </div>
                                        <div class="top-20 bottom-20">
                                            <div class="pull-right">
                                                <input type="submit" name="commit" value="Đăng nhập" class="btn lx-btn-primary">
                                            </div>
                                            <div class="forgot-password">
                                                <a href="/users/password/new">Quên mật khẩu?</a>
                                            </div>
                                            <div id="no_account">
                                                Không có tài khoản?
                                                <a id="register-modal-button" href="javascript:{}">Đăng ký</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#login-modal-button").on("click", function() {
                $("#register-content").hide();
                $("#login-content").show();
            });

            $("#register-modal-button").on("click", function() {
                $("#login-content").hide();
                $("#register-content").show();
            });

            $("#popup_register").on("submit", function(e) {
                e.preventDefault();
                if($("#register-content").hasClass("step-1")) {
                    $("#register-content").removeClass("step-1");
                    $("#register-content").addClass("step-2");
                    return false;
                } else {
                    $("#popup_register").unbind("submit").submit();
                }
            });

            $("#popup-register-back").on("click", function() {
                $("#register-content").removeClass("step-2");
                $("#register-content").addClass("step-1");
            });

            setTimeout(function() {
                var showModal = function(id) {
                    $(id).modal({ keyboard: false, backdrop: 'static' });
                    $.get("/shop/open_signup_modal");
                }

                if (FB !== undefined) {
                    FB.getLoginStatus(function(fb) {
                        if (fb.status === 'connected') {
                            var fbUserId = fb.authResponse.userID;
                            var fbAvatar = 'http://graph.facebook.com/' + fbUserId + '/picture?type=square';
                            FB.api(fbUserId, function(response) {
                                var fbName = response.name;
                                $('#fb_login img').attr({src: fbAvatar});
                                $('#fb_name').html(fbName);
                                showModal('#fb-login-modal');
                            });
                        } else {
                            showModal('#signup-modal');
                        }
                    })
                } else {
                    showModal('#signup-modal');
                }
            }, 30000);
        });
    </script>

    <script>
        $(function() {
            window.initializers.initBrowseNodeSlider();
            $(document).on("click", "#load_more a", function() {
                var spinner = '<i class="fa fa-spinner fa-spin"></i>';
                $("#load_more a").html(spinner + " Loading...");
            });
        });
    </script>

</div>
