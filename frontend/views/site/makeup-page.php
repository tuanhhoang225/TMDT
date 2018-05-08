<?php
/**
 * Created by PhpStorm.
 * User: Cu'c
 * Date: 08/05/2018
 * Time: 11:08 SA
 */
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
                                Trang điểm
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/shop/beauty"><i class="fa fa-chevron-left"></i>
                                        Mua lẻ
                                    </a></li>
                                <div class="divider"></div>
                                <li>
                                    <a href="/shop/eyes">Mắt</a>
                                </li>
                                <li>
                                    <a href="/shop/face">Mặt</a>
                                </li>
                                <li>
                                    <a href="/shop/lips">Môi</a>
                                </li>
                                <li>
                                    <a href="/shop/best-selling-makeup">Trang điểm hot nhất</a>
                                </li>
                                <li>
                                    <a href="/shop/new-makeup">Trang điểm mới nhất</a>
                                </li>
                                <li>
                                    <a href="/shop/makeup-sets">Set trang điểm</a>
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
                                    <a href="/shop/makeup?sort=price-asc"><i class="fa fa-sort-numeric-asc"></i>
                                        Sắp xếp:
                                        Giá tăng dần
                                    </a></li>
                                <li>
                                    <a href="/shop/makeup?sort=price-desc"><i class="fa fa-sort-numeric-desc"></i>
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="439" class="brand-checkbox-mobile">
                                                        3CE
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="575" class="brand-checkbox-mobile">
                                                        Absolute New York
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="335" class="brand-checkbox-mobile">
                                                        Agapan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="243" class="brand-checkbox-mobile">
                                                        Amok
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="359" class="brand-checkbox-mobile">
                                                        Anastasia Beverly Hills
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="63" class="brand-checkbox-mobile">
                                                        APIEU
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="45" class="brand-checkbox-mobile">
                                                        Aritaum
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="336" class="brand-checkbox-mobile">
                                                        Bare Blanc
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="323" class="brand-checkbox-mobile">
                                                        Bella J
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="102" class="brand-checkbox-mobile">
                                                        Benefit
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="660" class="brand-checkbox-mobile">
                                                        Beuins
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="193" class="brand-checkbox-mobile">
                                                        Bisous Bisous
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="37" class="brand-checkbox-mobile">
                                                        Bite Beauty
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="328" class="brand-checkbox-mobile">
                                                        Black Rouge
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="106" class="brand-checkbox-mobile">
                                                        Bourjois
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="221" class="brand-checkbox-mobile">
                                                        Buxom Cosmetics
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="259" class="brand-checkbox-mobile">
                                                        By Terry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="285" class="brand-checkbox-mobile">
                                                        Charlotte Tilbury
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="244" class="brand-checkbox-mobile">
                                                        Chic Holic
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="514" class="brand-checkbox-mobile">
                                                        Ciate London
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="233" class="brand-checkbox-mobile">
                                                        City Color
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="276" class="brand-checkbox-mobile">
                                                        Clarins
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="255" class="brand-checkbox-mobile">
                                                        Clé De Peau Beauté
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="109" class="brand-checkbox-mobile">
                                                        Clinique
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="6" class="brand-checkbox-mobile">
                                                        Clio
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="235" class="brand-checkbox-mobile">
                                                        ColourPop
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="516" class="brand-checkbox-mobile">
                                                        Cover Fx
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="117" class="brand-checkbox-mobile">
                                                        Dior
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="366" class="brand-checkbox-mobile">
                                                        Dolly Wink
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="613" class="brand-checkbox-mobile">
                                                        Elizabeth Arden
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="472" class="brand-checkbox-mobile">
                                                        EM Cosmetics
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="239" class="brand-checkbox-mobile">
                                                        Enprani
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="157" class="brand-checkbox-mobile">
                                                        Espoir
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="509" class="brand-checkbox-mobile">
                                                        Estee Edit
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="99" class="brand-checkbox-mobile">
                                                        Estee Lauder
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="70" class="brand-checkbox-mobile">
                                                        ETUDE HOUSE
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="599" class="brand-checkbox-mobile">
                                                        Fenty Beauty
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="113" class="brand-checkbox-mobile">
                                                        Fresh
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="267" class="brand-checkbox-mobile">
                                                        Giorgio Armani
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="569" class="brand-checkbox-mobile">
                                                        Glamour Dolls
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="164" class="brand-checkbox-mobile">
                                                        Guerlain
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="180" class="brand-checkbox-mobile">
                                                        Hourglass
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="423" class="brand-checkbox-mobile">
                                                        Huda Beauty
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="457" class="brand-checkbox-mobile">
                                                        Isehan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="135" class="brand-checkbox-mobile">
                                                        It's Skin
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="369" class="brand-checkbox-mobile">
                                                        Jeffree Star Cosmetics
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="419" class="brand-checkbox-mobile">
                                                        Jouer Cosmetics
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="258" class="brand-checkbox-mobile">
                                                        Julep
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="198" class="brand-checkbox-mobile">
                                                        Just A Time
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="251" class="brand-checkbox-mobile">
                                                        Kiko Milano
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="507" class="brand-checkbox-mobile">
                                                        Know Cosmetics
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="342" class="brand-checkbox-mobile">
                                                        Kylie
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="234" class="brand-checkbox-mobile">
                                                        L.A Girl
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="370" class="brand-checkbox-mobile">
                                                        L'OREAL
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="120" class="brand-checkbox-mobile">
                                                        Lancome
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="338" class="brand-checkbox-mobile">
                                                        Laura Mercier
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="600" class="brand-checkbox-mobile">
                                                        Lily May Mac Collection
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="504" class="brand-checkbox-mobile">
                                                        Lime Crime
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="83" class="brand-checkbox-mobile">
                                                        Lipstick Queen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="188" class="brand-checkbox-mobile">
                                                        Lorac
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="286" class="brand-checkbox-mobile">
                                                        M.A.C Cosmetics
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="436" class="brand-checkbox-mobile">
                                                        Macy's
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="236" class="brand-checkbox-mobile">
                                                        Make Up  Forever
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="186" class="brand-checkbox-mobile">
                                                        Marc Jacobs
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="240" class="brand-checkbox-mobile">
                                                        Marraine
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="515" class="brand-checkbox-mobile">
                                                        Milk
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="363" class="brand-checkbox-mobile">
                                                        Morphe
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="121" class="brand-checkbox-mobile">
                                                        Nars
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="71" class="brand-checkbox-mobile">
                                                        NYX Professional Makeup
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="353" class="brand-checkbox-mobile">
                                                        Ofra
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="379" class="brand-checkbox-mobile">
                                                        OHUI
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="269" class="brand-checkbox-mobile">
                                                        Origins
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="579" class="brand-checkbox-mobile">
                                                        Pixi by Petra
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="578" class="brand-checkbox-mobile">
                                                        POP Beauty
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="358" class="brand-checkbox-mobile">
                                                        RCMA Make-up
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="253" class="brand-checkbox-mobile">
                                                        Revlon
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="238" class="brand-checkbox-mobile">
                                                        Rire
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="662" class="brand-checkbox-mobile">
                                                        SaengN
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="91" class="brand-checkbox-mobile">
                                                        Sephora
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="101" class="brand-checkbox-mobile">
                                                        Shiseido
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="365" class="brand-checkbox-mobile">
                                                        Shu Uemura
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="489" class="brand-checkbox-mobile">
                                                        Smith and Cult
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="607" class="brand-checkbox-mobile">
                                                        THE BROWGAL
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="119" class="brand-checkbox-mobile">
                                                        Tom Ford
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="185" class="brand-checkbox-mobile">
                                                        Too Faced
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="115" class="brand-checkbox-mobile">
                                                        Urban Decay
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
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="163" class="brand-checkbox-mobile">
                                                        Yves Saint Laurent
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
50K
</span>
                                                -
                                                <span id="filter-max-select-mobile">
2,500K
</span>
                                            </div>
                                            <div class="top-40">
                                                <div id="price-slider-mobile" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                                <div class="pull-left" id="filter-min-threshold-mobile">
                                                    50K
                                                </div>
                                                <div class="pull-right" id="filter-max-threshold-mobile">
                                                    2,500K
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
                                $( "#price-slider-mobile" ).slider( "values", 0, 50 );
                                $( "#price-slider-mobile" ).slider( "values", 1, 2500 );
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
                                var url = "/shop/makeup" + "?" + queryStr ;
                                window.location = url;
                            });

                            $("#price-slider-mobile").slider({
                                range: true,
                                min: 50,
                                max: 2500,
                                values: [50, 2500],
                                step: 50,
                                slide: function( event, ui ) {
                                    var min_price = ui.values[0];
                                    var max_price = ui.values[1];
                                    if ( min_price == max_price ) return false;

                                    $("#filter-min-select-mobile").html(min_price + "K");
                                    $("#filter-max-select-mobile").html(max_price + "K");

                                    if( min_price == 50 )
                                        $("input#pl").val(null);
                                    else
                                        $("input#pl").val(ui.values[0]);

                                    if( max_price == 2500 )
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
                                    <div browse_node_id="840" class="filter_category in_browse_tree " depth="0"><a href="/shop/beauty" class="current_node "><i class="fa fa-chevron-down"></i><span class="name">Beauty</span><span class="vn_name padleft">Mua lẻ</span></a><div class="child_nodes"><div browse_node_id="428" class="filter_category in_browse_tree active" depth="1"><a href="/shop/makeup" class="current_node "><i class="fa fa-chevron-down"></i><span class="name">Makeup</span><span class="vn_name padleft">Trang điểm</span></a><div class="child_nodes"><div browse_node_id="455" class="filter_category  " depth="2"><a href="/shop/eyes" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Eye Makeup</span><span class="vn_name padleft">Mắt</span></a></div><div browse_node_id="459" class="filter_category  " depth="2"><a href="/shop/face" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Face Makeup</span><span class="vn_name padleft">Mặt</span></a></div><div browse_node_id="461" class="filter_category  " depth="2"><a href="/shop/lips" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Lip</span><span class="vn_name padleft">Môi</span></a></div><div browse_node_id="842" class="filter_category  " depth="2"><a href="/shop/best-selling-makeup" class="current_node padleft"><span class="name">Best Sellers Makeup</span><span class="vn_name ">Trang điểm hot nhất</span></a></div><div browse_node_id="845" class="filter_category  " depth="2"><a href="/shop/new-makeup" class="current_node padleft"><span class="name">New Makeup</span><span class="vn_name ">Trang điểm mới nhất</span></a></div><div browse_node_id="453" class="filter_category  " depth="2"><a href="/shop/makeup-sets" class="current_node padleft"><span class="name">Makeup Sets</span><span class="vn_name ">Set trang điểm</span></a></div></div></div><div browse_node_id="422" class="filter_category  " depth="1"><a href="/shop/hair" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Hair</span><span class="vn_name padleft">Tóc</span></a></div><div browse_node_id="429" class="filter_category  " depth="1"><a href="/shop/skin-care" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Skin Care</span><span class="vn_name padleft">Dưỡng da</span></a></div><div browse_node_id="430" class="filter_category  " depth="1"><a href="/shop/bath-body" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Bath &amp; Body</span><span class="vn_name padleft">Cơ thể</span></a></div><div browse_node_id="421" class="filter_category  " depth="1"><a href="/shop/tools-accessories" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Tools &amp; Accessories</span><span class="vn_name padleft">Cọ &amp; Phụ kiện</span></a></div><div browse_node_id="844" class="filter_category  " depth="1"><a href="/shop/new-products" class="current_node padleft"><span class="name">New Arrivals</span><span class="vn_name ">Hàng mới nhất</span></a></div><div browse_node_id="841" class="filter_category  " depth="1"><a href="/shop/bestsellers" class="current_node padleft"><span class="name">Best Sellers</span><span class="vn_name ">Hàng hot nhất</span></a></div></div></div>
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
                                                <label data-tracking-category="brand_filter" data-tracking-title="3CE">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="439" class="brand-aggs" data-url="/shop/makeup?bids=439">
                                                    3CE
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Absolute New York">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="575" class="brand-aggs" data-url="/shop/makeup?bids=575">
                                                    Absolute New York
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Agapan">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="335" class="brand-aggs" data-url="/shop/makeup?bids=335">
                                                    Agapan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Amok">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="243" class="brand-aggs" data-url="/shop/makeup?bids=243">
                                                    Amok
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Anastasia Beverly Hills">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="359" class="brand-aggs" data-url="/shop/makeup?bids=359">
                                                    Anastasia Beverly Hills
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="APIEU">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="63" class="brand-aggs" data-url="/shop/makeup?bids=63">
                                                    APIEU
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="April Skin">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="246" class="brand-aggs" data-url="/shop/makeup?bids=246">
                                                    April Skin
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Aritaum">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="45" class="brand-aggs" data-url="/shop/makeup?bids=45">
                                                    Aritaum
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Bare Blanc ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="336" class="brand-aggs" data-url="/shop/makeup?bids=336">
                                                    Bare Blanc
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Bella J">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="323" class="brand-aggs" data-url="/shop/makeup?bids=323">
                                                    Bella J
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Benefit">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="102" class="brand-aggs" data-url="/shop/makeup?bids=102">
                                                    Benefit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Beuins">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="660" class="brand-aggs" data-url="/shop/makeup?bids=660">
                                                    Beuins
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="BH Cosmetics">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="177" class="brand-aggs" data-url="/shop/makeup?bids=177">
                                                    BH Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Bisous Bisous">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="193" class="brand-aggs" data-url="/shop/makeup?bids=193">
                                                    Bisous Bisous
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Bite Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="37" class="brand-aggs" data-url="/shop/makeup?bids=37">
                                                    Bite Beauty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Black Rouge">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="328" class="brand-aggs" data-url="/shop/makeup?bids=328">
                                                    Black Rouge
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Bourjois">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="106" class="brand-aggs" data-url="/shop/makeup?bids=106">
                                                    Bourjois
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Buxom Cosmetics">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="221" class="brand-aggs" data-url="/shop/makeup?bids=221">
                                                    Buxom Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="By Terry">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="259" class="brand-aggs" data-url="/shop/makeup?bids=259">
                                                    By Terry
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Charlotte Tilbury">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="285" class="brand-aggs" data-url="/shop/makeup?bids=285">
                                                    Charlotte Tilbury
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Chic Holic">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="244" class="brand-aggs" data-url="/shop/makeup?bids=244">
                                                    Chic Holic
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="CHOONEE">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="639" class="brand-aggs" data-url="/shop/makeup?bids=639">
                                                    CHOONEE
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Ciate London">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="514" class="brand-aggs" data-url="/shop/makeup?bids=514">
                                                    Ciate London
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Ciracle">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="74" class="brand-aggs" data-url="/shop/makeup?bids=74">
                                                    Ciracle
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="City Color">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="233" class="brand-aggs" data-url="/shop/makeup?bids=233">
                                                    City Color
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Clarins">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="276" class="brand-aggs" data-url="/shop/makeup?bids=276">
                                                    Clarins
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Clé De Peau Beauté">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="255" class="brand-aggs" data-url="/shop/makeup?bids=255">
                                                    Clé De Peau Beauté
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Clematis">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="377" class="brand-aggs" data-url="/shop/makeup?bids=377">
                                                    Clematis
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Clinique ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="109" class="brand-aggs" data-url="/shop/makeup?bids=109">
                                                    Clinique
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Clio">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="6" class="brand-aggs" data-url="/shop/makeup?bids=6">
                                                    Clio
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="ColourPop">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="235" class="brand-aggs" data-url="/shop/makeup?bids=235">
                                                    ColourPop
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Cover Fx">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="516" class="brand-aggs" data-url="/shop/makeup?bids=516">
                                                    Cover Fx
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Deborah Milano">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="615" class="brand-aggs" data-url="/shop/makeup?bids=615">
                                                    Deborah Milano
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Dior">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="117" class="brand-aggs" data-url="/shop/makeup?bids=117">
                                                    Dior
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Dolly Wink">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="366" class="brand-aggs" data-url="/shop/makeup?bids=366">
                                                    Dolly Wink
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="e.l.f">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="8" class="brand-aggs" data-url="/shop/makeup?bids=8">
                                                    e.l.f
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Eclipse Colours">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="627" class="brand-aggs" data-url="/shop/makeup?bids=627">
                                                    Eclipse Colours
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Elizabeth Arden">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="613" class="brand-aggs" data-url="/shop/makeup?bids=613">
                                                    Elizabeth Arden
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="EM Cosmetics ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="472" class="brand-aggs" data-url="/shop/makeup?bids=472">
                                                    EM Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Enprani ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="239" class="brand-aggs" data-url="/shop/makeup?bids=239">
                                                    Enprani
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Espoir">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="157" class="brand-aggs" data-url="/shop/makeup?bids=157">
                                                    Espoir
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Estee Edit ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="509" class="brand-aggs" data-url="/shop/makeup?bids=509">
                                                    Estee Edit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Estee Lauder ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="99" class="brand-aggs" data-url="/shop/makeup?bids=99">
                                                    Estee Lauder
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="ETUDE HOUSE">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="70" class="brand-aggs" data-url="/shop/makeup?bids=70">
                                                    ETUDE HOUSE
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Fenty Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="599" class="brand-aggs" data-url="/shop/makeup?bids=599">
                                                    Fenty Beauty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Fresh">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="113" class="brand-aggs" data-url="/shop/makeup?bids=113">
                                                    Fresh
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Giorgio Armani">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="267" class="brand-aggs" data-url="/shop/makeup?bids=267">
                                                    Giorgio Armani
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Glamour Dolls">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="569" class="brand-aggs" data-url="/shop/makeup?bids=569">
                                                    Glamour Dolls
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Golden Rose">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="601" class="brand-aggs" data-url="/shop/makeup?bids=601">
                                                    Golden Rose
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Guerlain">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="164" class="brand-aggs" data-url="/shop/makeup?bids=164">
                                                    Guerlain
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Hourglass">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="180" class="brand-aggs" data-url="/shop/makeup?bids=180">
                                                    Hourglass
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Huda Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="423" class="brand-aggs" data-url="/shop/makeup?bids=423">
                                                    Huda Beauty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Isehan">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="457" class="brand-aggs" data-url="/shop/makeup?bids=457">
                                                    Isehan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="It's Skin">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="135" class="brand-aggs" data-url="/shop/makeup?bids=135">
                                                    It's Skin
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="It's Well Plus">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="616" class="brand-aggs" data-url="/shop/makeup?bids=616">
                                                    It's Well Plus
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Jeffree Star Cosmetics">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="369" class="brand-aggs" data-url="/shop/makeup?bids=369">
                                                    Jeffree Star Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Josie Maran">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="187" class="brand-aggs" data-url="/shop/makeup?bids=187">
                                                    Josie Maran
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Jouer Cosmetics">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="419" class="brand-aggs" data-url="/shop/makeup?bids=419">
                                                    Jouer Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Julep">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="258" class="brand-aggs" data-url="/shop/makeup?bids=258">
                                                    Julep
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Just A Time">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="198" class="brand-aggs" data-url="/shop/makeup?bids=198">
                                                    Just A Time
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="KatVon D">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="249" class="brand-aggs" data-url="/shop/makeup?bids=249">
                                                    KatVon D
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Kiko Milano">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="251" class="brand-aggs" data-url="/shop/makeup?bids=251">
                                                    Kiko Milano
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Know Cosmetics">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="507" class="brand-aggs" data-url="/shop/makeup?bids=507">
                                                    Know Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Kylie ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="342" class="brand-aggs" data-url="/shop/makeup?bids=342">
                                                    Kylie
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="L.A Girl">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="234" class="brand-aggs" data-url="/shop/makeup?bids=234">
                                                    L.A Girl
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="L'OREAL">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="370" class="brand-aggs" data-url="/shop/makeup?bids=370">
                                                    L'OREAL
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="L’oreal">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="107" class="brand-aggs" data-url="/shop/makeup?bids=107">
                                                    L’oreal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Lancome">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="120" class="brand-aggs" data-url="/shop/makeup?bids=120">
                                                    Lancome
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Laneige">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="100" class="brand-aggs" data-url="/shop/makeup?bids=100">
                                                    Laneige
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Laura Mercier">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="338" class="brand-aggs" data-url="/shop/makeup?bids=338">
                                                    Laura Mercier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Le Petit Olivier">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="614" class="brand-aggs" data-url="/shop/makeup?bids=614">
                                                    Le Petit Olivier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Lily May Mac Collection">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="600" class="brand-aggs" data-url="/shop/makeup?bids=600">
                                                    Lily May Mac Collection
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Lime Crime">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="504" class="brand-aggs" data-url="/shop/makeup?bids=504">
                                                    Lime Crime
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Lipstick Queen">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="83" class="brand-aggs" data-url="/shop/makeup?bids=83">
                                                    Lipstick Queen
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Lorac">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="188" class="brand-aggs" data-url="/shop/makeup?bids=188">
                                                    Lorac
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="LUSTRE MAKEUP">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="416" class="brand-aggs" data-url="/shop/makeup?bids=416">
                                                    LUSTRE MAKEUP
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="M.A.C Cosmetics">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="286" class="brand-aggs" data-url="/shop/makeup?bids=286">
                                                    M.A.C Cosmetics
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="MacQueen">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="241" class="brand-aggs" data-url="/shop/makeup?bids=241">
                                                    MacQueen
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Macy's">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="436" class="brand-aggs" data-url="/shop/makeup?bids=436">
                                                    Macy's
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Make Up  Forever">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="236" class="brand-aggs" data-url="/shop/makeup?bids=236">
                                                    Make Up  Forever
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Marc Jacobs">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="186" class="brand-aggs" data-url="/shop/makeup?bids=186">
                                                    Marc Jacobs
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Marraine">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="240" class="brand-aggs" data-url="/shop/makeup?bids=240">
                                                    Marraine
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Maybelline">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="22" class="brand-aggs" data-url="/shop/makeup?bids=22">
                                                    Maybelline
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Milk">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="515" class="brand-aggs" data-url="/shop/makeup?bids=515">
                                                    Milk
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Missha">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="3" class="brand-aggs" data-url="/shop/makeup?bids=3">
                                                    Missha
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Morphe">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="363" class="brand-aggs" data-url="/shop/makeup?bids=363">
                                                    Morphe
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Nars">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="121" class="brand-aggs" data-url="/shop/makeup?bids=121">
                                                    Nars
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="NYX Professional Makeup">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="71" class="brand-aggs" data-url="/shop/makeup?bids=71">
                                                    NYX Professional Makeup
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Ofra">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="353" class="brand-aggs" data-url="/shop/makeup?bids=353">
                                                    Ofra
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="OHUI">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="379" class="brand-aggs" data-url="/shop/makeup?bids=379">
                                                    OHUI
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Origins">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="269" class="brand-aggs" data-url="/shop/makeup?bids=269">
                                                    Origins
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Paula's Choice">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="97" class="brand-aggs" data-url="/shop/makeup?bids=97">
                                                    Paula's Choice
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="PETITE LAEL ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="637" class="brand-aggs" data-url="/shop/makeup?bids=637">
                                                    PETITE LAEL
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Pixi by Petra">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="579" class="brand-aggs" data-url="/shop/makeup?bids=579">
                                                    Pixi by Petra
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="POP Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="578" class="brand-aggs" data-url="/shop/makeup?bids=578">
                                                    POP Beauty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="RCMA Make-up">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="358" class="brand-aggs" data-url="/shop/makeup?bids=358">
                                                    RCMA Make-up
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Revlon">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="253" class="brand-aggs" data-url="/shop/makeup?bids=253">
                                                    Revlon
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Rimmel">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="20" class="brand-aggs" data-url="/shop/makeup?bids=20">
                                                    Rimmel
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Rire">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="238" class="brand-aggs" data-url="/shop/makeup?bids=238">
                                                    Rire
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="SaengN">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="662" class="brand-aggs" data-url="/shop/makeup?bids=662">
                                                    SaengN
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Secret Key">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="4" class="brand-aggs" data-url="/shop/makeup?bids=4">
                                                    Secret Key
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Sephora">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="91" class="brand-aggs" data-url="/shop/makeup?bids=91">
                                                    Sephora
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Shiseido">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="101" class="brand-aggs" data-url="/shop/makeup?bids=101">
                                                    Shiseido
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Shu Uemura">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="365" class="brand-aggs" data-url="/shop/makeup?bids=365">
                                                    Shu Uemura
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Smashbox">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="169" class="brand-aggs" data-url="/shop/makeup?bids=169">
                                                    Smashbox
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Smith and Cult">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="489" class="brand-aggs" data-url="/shop/makeup?bids=489">
                                                    Smith and Cult
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Tarte">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="128" class="brand-aggs" data-url="/shop/makeup?bids=128">
                                                    Tarte
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="The Balm">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="114" class="brand-aggs" data-url="/shop/makeup?bids=114">
                                                    The Balm
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="THE BROWGAL">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="607" class="brand-aggs" data-url="/shop/makeup?bids=607">
                                                    THE BROWGAL
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="The Face Shop">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="133" class="brand-aggs" data-url="/shop/makeup?bids=133">
                                                    The Face Shop
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="The Saem">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="27" class="brand-aggs" data-url="/shop/makeup?bids=27">
                                                    The Saem
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Tom Ford">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="119" class="brand-aggs" data-url="/shop/makeup?bids=119">
                                                    Tom Ford
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Too Faced">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="185" class="brand-aggs" data-url="/shop/makeup?bids=185">
                                                    Too Faced
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Urban Decay">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="115" class="brand-aggs" data-url="/shop/makeup?bids=115">
                                                    Urban Decay
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="W7">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="149" class="brand-aggs" data-url="/shop/makeup?bids=149">
                                                    W7
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Wet n Wild Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="362" class="brand-aggs" data-url="/shop/makeup?bids=362">
                                                    Wet n Wild Beauty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Yves Saint Laurent">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="163" class="brand-aggs" data-url="/shop/makeup?bids=163">
                                                    Yves Saint Laurent
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
                                                50K
                                            </div>
                                            <div class="pull-right" id="filter-max-threshold">
                                                2,500K
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="text-center top-10">
                                            <div id="filter-min-select">
                                                50K
                                            </div>
                                            -
                                            <div id="filter-max-select">
                                                2,500K
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function() {
                                    $("#price-filter #price-slider").slider({
                                        range: true,
                                        min: 50,
                                        max: 2500,
                                        values: [50, 2500],
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
                                            if(min_price == 50 && max_price == 2500)
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
                                            var url = "/shop/makeup" + "?" + queryStr ;
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
                        <a href="/shop/beauty">Beauty
                            (Mua lẻ)
                        </a><i class="fa fa-caret-right"></i>
                        <a href="/shop/makeup">Makeup
                            (Trang điểm)
                        </a></div>

                    <div class="divider_title mono">
                        <span>Trang điểm</span>
                    </div>
                    <div class="pull-left top-10">
                        <strong>426</strong>
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
                                    <a href="/shop/makeup?sort=price-asc"><i class="fa fa-sort-numeric-asc"></i>
                                        Giá tăng dần
                                    </a></li>
                                <li>
                                    <a href="/shop/makeup?sort=price-desc"><i class="fa fa-sort-numeric-desc"></i>
                                        Giá giảm dần
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="top-20 box_card_container" data-source="Trang điểm" id="theme_boxes">
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8063" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/031/466/medium/1524802758.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/466/medium/1524802758.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">With just one touch, it shows vivid color.
                                        It is applied well on your lips and lasts long hours.
                                        It comes from the motive "Stilettos hills". It has a great outlook.
                                        With portable size, you can bring it anywhere.
                                        The vivid color makes you look more charming and beautiful.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/clio-rouge-heel-velvet-08-touch-moment">Clio Rouge Heel Velvet </a>

                                <div class="box_price">550,000 đ</div>
                                <a class="link-block box_link" href="/shop/clio-rouge-heel-velvet-08-touch-moment"><span>Clio Rouge Heel Velvet  - 08 Touch Moment by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8047" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/031/450/medium/1524801586.jpg" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/031/450/medium/1524801586.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/453/medium/1524801815.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/453/medium/1524801815.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/460/medium/1524802202.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/031/460/medium/1524802202.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Lip liquid with highly concentrated pigment provides watery tint at first then transforms into mad matte and power lasting lip color  </div>
                                    <div class="colors"><a class="color" style="background: #dd2b39" data-toggle="tooltip" data-container="body" title="" href="/shop/clio-mad-matte-tin-01-natalie-red" data-original-title="01 Natalie Red"></a><a class="color" style="background: #e80000" data-toggle="tooltip" data-container="body" title="" href="/shop/clio-mad-matte-tin" data-original-title="06 Eternal Coral"></a><a class="color" style="background: #e0434a" data-toggle="tooltip" data-container="body" title="" href="/shop/clio-mad-matte-tin-08-chai-tea-latte" data-original-title="08 Chai Tea Latte "></a></div>
                                </div>
                                <a class="box_name" href="/shop/clio-mad-matte-tin">Clio Mad Matte Tin - </a>

                                <div class="box_price">410,000 đ</div>
                                <a class="link-block box_link" href="/shop/clio-mad-matte-tin"><span>Clio Mad Matte Tin -  06 Eternal Coral by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8018" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/031/299/medium/1524475151.jpg" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/031/299/medium/1524475151.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/300/medium/1524475267.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/300/medium/1524475267.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/302/medium/1524475627.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/031/302/medium/1524475627.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Diorshow Pro Liner is a breakthrough eyeliner that combines the easy application of a pencil with the glide and intensity of a liquid liner. Its retractable tip hugs the lash line for an instant buildable line, from thin to thick. The beveled tip does not require sharpening and retains its ergonomic shape with each application, while a waterproof formula teams flawless hold with extraordinary glide for foolproof application. How to use: Use the beveled applicator horizontally to hug the lash line with precise control. Use it vertically to create a thick, bold line for a daring catwalk look. 0.63 oz.

                                    </div>
                                    <div class="colors"><a class="color" style="background: #bd9981" data-toggle="tooltip" data-container="body" title="" href="/shop/dior-diorshow-pro-liner-bevel-tip-waterproof-eye-liner" data-original-title="062 PRO ANTHRACITE"></a><a class="color" style="background: #5e1c80" data-toggle="tooltip" data-container="body" title="" href="/shop/dior-diorshow-pro-liner-bevel-tip-waterproof-eye-liner-182-pro-purple" data-original-title="182 PRO PURPLE"></a><a class="color" style="background: #842628" data-toggle="tooltip" data-container="body" title="" href="/shop/dior-diorshow-pro-liner-bevel-tip-waterproof-eye-liner-772-pro-mahogany" data-original-title="772 PRO MAHOGANY"></a></div>
                                </div>
                                <a class="box_name" href="/shop/dior-diorshow-pro-liner-bevel-tip-waterproof-eye-liner">Dior Diorshow Pro Liner Bevel-Tip Waterproof Eye Liner - </a>

                                <div class="box_price">775,000 đ</div>
                                <a class="link-block box_link" href="/shop/dior-diorshow-pro-liner-bevel-tip-waterproof-eye-liner"><span>Dior Diorshow Pro Liner Bevel-Tip Waterproof Eye Liner -  062 PRO ANTHRACITE by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8006" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/243/medium/1524460800.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/243/medium/1524460800.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Laura Mercier Foundation Primer - Radiance 15ml
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/laura-mercier-foundation-primer-radiance-15ml">Laura Mercier Foundation Primer - Radiance 15ml</a>

                                <div class="box_price">340,000 đ</div>
                                <a class="link-block box_link" href="/shop/laura-mercier-foundation-primer-radiance-15ml"><span>Laura Mercier Foundation Primer - Radiance 15ml by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8004" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/241/medium/1524459727.jpeg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/241/medium/1524459727.jpeg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">A highly pigmented, moisturizing lip color with a satin-matte finish. Velour Lovers Lip Colour is a revolution in matte lipstick that couples delicate mattifying powders with moisturizing mango butter that creates a velvety texture that is smooth, creamy and long-wearing. Formula is buildable, offering medium to high coverage with a satin-matte finish.
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/laura-mercier-velour-lovers-lip-colour-mini">Laura Mercier VELOUR LOVERS LIP COLOUR Mini - </a>

                                <div class="box_price">290,000 đ</div>
                                <a class="link-block box_link" href="/shop/laura-mercier-velour-lovers-lip-colour-mini"><span>Laura Mercier VELOUR LOVERS LIP COLOUR Mini -  Embrace by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8002" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/238/medium/1524457939.png" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/026/238/medium/1524457939.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/026/240/medium/1524458112.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/026/240/medium/1524458112.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">A high-shine, perfectly pigmented lip gloss with rich, long-lasting colour, and brilliant shine that creates the appearance of fuller lips. Any skin tone is virtually enhanced by creating a subtle contrast in texture. With the unique blend of moisturizing, anti-aging, anti-oxidant and plumping ingredients provided by the Laura Mercier Lip Complex, the non-sticky gloss formula applies smoothly without feathering or bleeding. Available in a variety of coverage's and finishes.
                                    </div>
                                    <div class="colors"><a class="color" style="background: #d53163" data-toggle="tooltip" data-container="body" title="" href="/shop/laura-mercier-lip-glace-mini-pink-pop" data-original-title="Pink Pop"></a><a class="color" style="background: #d42c67" data-toggle="tooltip" data-container="body" title="" href="/shop/laura-mercier-lip-glace-mini" data-original-title=""></a></div>
                                </div>
                                <a class="box_name" href="/shop/laura-mercier-lip-glace-mini">Laura Mercier Lip Glace Mini - </a>

                                <div class="box_price">210,000 đ</div>
                                <a class="link-block box_link" href="/shop/laura-mercier-lip-glace-mini"><span>Laura Mercier Lip Glace Mini -  Tulip by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7970" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/223/medium/1524132083.png" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/223/medium/1524132083.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Son Dưỡng Môi SaengN Vivid Tint Balm thuộc loại son dưỡng với màu cam đỏ cổ diển và dễ phối đồ. Với các thành phần từ thiên nhiên: là sáp ong, bơ hạt mỡ và các loại dầu thực vật làm mịn và mượt toàn bộ các rãnh môi,làm mềm lớp da môi khô bị bong tróc giúp đôi môi của bạn luôn mềm mại. Vitamin E và tinh dầu jojoba cung cáp độ ẩm cần thiết , dưỡng ẩm và chăm sóc cho môi trong 6 giờ liền. Cảm giác thoa son hơi nặng nhưng lại rất thích thú vì môi cứ mềm mịn và căng mọng .Vì là son dưỡng nên Vivid Tint Balm cho 1 màu môi tự nhiên, hồng hào.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/saengn-vivid-tint-balm">SaengN Vivid Tint Balm</a>

                                <div class="box_price">220,000 đ</div>
                                <a class="link-block box_link" href="/shop/saengn-vivid-tint-balm"><span>SaengN Vivid Tint Balm by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7959" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/163/medium/1523609973.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/163/medium/1523609973.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">BEUINS - BEAUTY IN SKIN. The origin of beauty discovered in nature
                                        BEUINS cam kết - Với tiêu chuẩn 5 KHÔNG: chất bảo quản (parapen), màu nhân tạo, TEA (Triethanolamine, Sulfate), dầu khoáng (Mineral oil), chất gây dị ứng da (Benzophenone). Made in Korea.
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/beuins-natural-skin-fit-bb-cream-spf25">Beuins Natural Skin Fit BB Cream SPF25</a>

                                <div class="box_price">164,000 đ</div>
                                <a class="link-block box_link" href="/shop/beuins-natural-skin-fit-bb-cream-spf25"><span>Beuins Natural Skin Fit BB Cream SPF25 by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7914" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/142/medium/1523439783.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/142/medium/1523439783.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">This award-winning foundation is formulated with micro-fil technology, producing a low-density product that pairs high-impact pigments with weightless texture. Inspired by the silk shantung worn by kings and emperors, this foundation glides seamlessly onto the skin leaving a finish that’s reminiscent of charmeuse silk.
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/giorgio-armani-beauty-luminous-silk-foundation">GIORGIO ARMANI BEAUTY Luminous Silk Foundation</a>

                                <div class="box_price">2,000,000 đ</div>
                                <a class="link-block box_link" href="/shop/giorgio-armani-beauty-luminous-silk-foundation"><span>GIORGIO ARMANI BEAUTY Luminous Silk Foundation by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7906" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/134/medium/1523435402.jpg" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/026/134/medium/1523435402.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/026/135/medium/1523435938.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/026/135/medium/1523435938.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/026/136/medium/1523436361.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/136/medium/1523436361.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/026/137/medium/1523436451.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/137/medium/1523436451.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">A lightweight lip stain with a revolutionary formula for ultra-matte, high impact color and a lightweight, naked-lip feel.</div>
                                    <div class="colors"><a class="color" style="background: #dd2b39" data-toggle="tooltip" data-container="body" title="" href="/shop/yves-saint-laurent-tatouage-couture-liquid-matte-lip-stain" data-original-title="1 Rouge Tatouage"></a><a class="color" style="background: #de5a33" data-toggle="tooltip" data-container="body" title="" href="/shop/yves-saint-laurent-tatouage-couture-liquid-matte-lip-stain-17-unconventional-coral" data-original-title="17 Unconventional Coral"></a><a class="color" style="background: #e00e01" data-toggle="tooltip" data-container="body" title="" href="/shop/yves-saint-laurent-tatouage-couture-liquid-matte-lip-stain-13-true-orange" data-original-title="13 True Orange"></a><a class="color" style="background: #ff0000" data-toggle="tooltip" data-container="body" title="" href="/shop/yves-saint-laurent-tatouage-couture-liquid-matte-lip-stain-12-red-tribe" data-original-title="12 Red Tribe "></a></div>
                                </div>
                                <a class="box_name" href="/shop/yves-saint-laurent-tatouage-couture-liquid-matte-lip-stain">YVES SAINT LAURENT Tatouage Couture Liquid Matte Lip Stain - </a>

                                <div class="box_price">1,000,000 đ</div>
                                <h5>
                                    <div class="label label-danger label-block">Tạm hết hàng</div>
                                </h5>
                                <a class="link-block box_link" href="/shop/yves-saint-laurent-tatouage-couture-liquid-matte-lip-stain"><span>YVES SAINT LAURENT Tatouage Couture Liquid Matte Lip Stain -  1 Rouge Tatouage by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7863" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/075/medium/1523257172.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/075/medium/1523257172.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Shade Descriptions -
                                        Tempera: Ultra-matte velvety beige
                                        Glistening: Iridescent gold with a hint of pink reflect
                                        Orange Soda: Ultra-matte pastel peach
                                        Rose Pink: Rose gold with a soft pink iridescent hue
                                        Sultry: A hybrid satin metallic finish warm chocolate brown
                                        Bronze: Metallic gold bronze
                                        Mulberry: Ultra-matte mulberry
                                        Dusty Rose: Ultra-matte dusty lilac
                                        Fairy: Multi-imensional light gold
                                        Burnt Orange: Ultra-matte deep orange
                                        Sienna: Ultra-matte earthy brown
                                        Rustic: Ultra-matte deep cinnamon brown
                                        Cyprus Umber: Ultra-matte dark coffee
                                        Noir: Ultra-matte deep carbon black</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/anastasia-beverly-hills-soft-glam-eye-shadow-palette">Anastasia Beverly Hills Soft Glam Eye Shadow Palette</a>

                                <div class="box_price">1,550,000 đ</div>
                                <a class="link-block box_link" href="/shop/anastasia-beverly-hills-soft-glam-eye-shadow-palette"><span>Anastasia Beverly Hills Soft Glam Eye Shadow Palette by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7822" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/034/medium/1522235221.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/034/medium/1522235221.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Kem che khuyết điểm dạng lỏng có hiệu ứng bắt sáng, với hiệu quả mềm mịn, tươi sáng tập trung vào các vùng da được thoa kem, cho vùng da ấy mượt hơn và sáng hơn. Kem che khuyết điểm thiết kế như cây bút đi kèm với đầu cọ của riêng mình, cho kết quả thật hoàn mỹ. Đã kiểm nghiệm và chứng nhận y khoa.

                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/deborah-correttore-illuminante-radiance-creator">DEBORAH CORRETTORE ILLUMINANTE RADIANCE CREATOR </a>

                                <div class="box_price">360,000 đ</div>
                                <a class="link-block box_link" href="/shop/deborah-correttore-illuminante-radiance-creator"><span>DEBORAH CORRETTORE ILLUMINANTE RADIANCE CREATOR  - 03 by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7815" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/023/medium/1522064388.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/023/medium/1522064388.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">
                                        Un mascara colorato per sopracciglia sempre perfette. La sua texture in gel è ideale per pettinare, fissare e definire le sopracciglia con un effetto estremamente naturale. La sua speciale formula è
                                        inoltre arricchita con fibre di Nylon ideali per riempire gli spazi tra le sopracciglia. Il suo speciale mini applicatore triangolare, dalla precisione estrema, pettina e fissa le sopracciglia
                                        con un solo gesto, per un risultato a lunga durata.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/deborah-tinted-eyebrow-mascara-brunette-02">DEBORAH TINTED EYEBROW MASCARA -  Brunette 02</a>

                                <div class="box_price">210,000 đ</div>
                                <a class="link-block box_link" href="/shop/deborah-tinted-eyebrow-mascara-brunette-02"><span>DEBORAH TINTED EYEBROW MASCARA -  Brunette 02 by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7679" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/883/medium/1520847085.jpg" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/025/883/medium/1520847085.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/887/medium/1520848003.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/025/887/medium/1520848003.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/888/medium/1520848184.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/888/medium/1520848184.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/889/medium/1520848508.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/889/medium/1520848508.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/890/medium/1520848692.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/890/medium/1520848692.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/891/medium/1520848972.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/891/medium/1520848972.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/893/medium/1520850534.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/893/medium/1520850534.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/895/medium/1520851855.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/895/medium/1520851855.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Vivid coloring like color pigment attached to lips
                                        Without the incidence or dry wrinkle is transforms to a matte lip.
                                        Power adhesion pigment. Long lasting lip color.
                                        Plump effect on lips. Completion of lips with volume</div>
                                    <div class="colors"><a class="color" style="background: #dd2b39" data-toggle="tooltip" data-container="body" title="" href="/shop/its-skin-life-color-lip-crush-matte-07-not-your-business" data-original-title="#07 Not Your Business"></a><a class="color" style="background: #ff006d" data-toggle="tooltip" data-container="body" title="" href="/shop/its-skin-life-color-lip-crush-matte" data-original-title="#01 Watch Me"></a><a class="color" style="background: #de5a33" data-toggle="tooltip" data-container="body" title="" href="/shop/its-skin-life-color-lip-crush-matte-10-what-the-heaven" data-original-title="#10 What The Heaven"></a><a class="color" style="background: linear-gradient(-45deg, #d55d59, #c13b53, #e25ca1, #ff0000)" data-toggle="tooltip" data-container="body" title="" href="/shop/its-skin-life-color-lip-crush-matte-06-drop-the-beat" data-original-title="Xem thêm"></a></div>
                                </div>
                                <a class="box_name" href="/shop/its-skin-life-color-lip-crush-matte">It's Skin Life Color Lip Crush Matte - </a>

                                <div class="box_price">210,000 đ</div>
                                <a class="link-block box_link" href="/shop/its-skin-life-color-lip-crush-matte"><span>It's Skin Life Color Lip Crush Matte -  #01 Watch Me by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7678" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/882/medium/1520846481.jpeg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/882/medium/1520846481.jpeg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Chuốt làm cong mi It's Skin Babyface Petit Mascara với đầu chuốt được thiết kế độc đáo sẽ giúp bạn dễ dàng có được hàng mi dày đẹp ấn tượng như búp bê. Không giống các loại chuốt mi khác, It's Skin Babyface Petit Mascara tiện lợi hơn với thiết kế dạng tuýp, dễ dàng mang theo để sử dụng ở bất cứ đâu. Thành phần giàu dưỡng chất chứa sáp ong tăng cường nuôi dưỡng, giúp mi khỏe, bóng đẹp.
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/its-skin-babyface-petit-mascara-no-2-volume">It's Skin Babyface Petit Mascara No. 2 - Volume </a>

                                <div class="box_price">110,000 đ</div>
                                <a class="link-block box_link" href="/shop/its-skin-babyface-petit-mascara-no-2-volume"><span>It's Skin Babyface Petit Mascara No. 2 - Volume  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7677" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/881/medium/1520845629.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/881/medium/1520845629.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Chuốt làm cong mi It's Skin Babyface Petit Mascara với đầu chuốt được thiết kế độc đáo sẽ giúp bạn dễ dàng có được hàng mi cong đẹp ấn tượng như búp bê. Không giống các loại chuốt mi khác, It's Skin Babyface Petit Mascara tiện lợi hơn với thiết kế dạng tuýp, dễ dàng mang theo để sử dụng ở bất cứ đâu. Thành phần giàu dưỡng chất chứa sáp ong tăng cường nuôi dưỡng, giúp mi khỏe, bóng đẹp.

                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/its-skin-babyface-petit-mascara-no-1-curling">It's Skin Babyface Petit Mascara No. 1 - Curling </a>

                                <div class="box_price">110,000 đ</div>
                                <a class="link-block box_link" href="/shop/its-skin-babyface-petit-mascara-no-1-curling"><span>It's Skin Babyface Petit Mascara No. 1 - Curling  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7666" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/863/medium/1520478991.jpg" class="lazyload undisplay display" src="https://upload.lixibox.com/system/pictures/files/000/025/863/medium/1520478991.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/864/medium/1520479065.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/864/medium/1520479065.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/865/medium/1520479154.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/865/medium/1520479154.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/866/medium/1520479218.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/866/medium/1520479218.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/867/medium/1520479485.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/867/medium/1520479485.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Guerlain has revolutionized second-skin effect make-up with Lingerie de Peau Aqua Nude, an intensely hydrating, long-lasting and light-textured* foundation for a more beautiful complexion. Its incredible weightless film appears to smooth and perfect the skin’s texture with a sheer finish. Infused with skincare water, its formula intensely hydrates the skin for endless comfort and a visibly replumped** appearance of the skin, day after day.</div>
                                    <div class="discount_percent">-10%</div>
                                    <div class="colors"><a class="color" style="background: #efd2b0" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-lingerie-de-peau-liquid-foundation-spf-20-01n-very-light" data-original-title="- 01N Very Light"></a><a class="color" style="background: #fed7bb" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-lingerie-de-peau-liquid-foundation-spf-20" data-original-title="- 02N Clair Light"></a><a class="color" style="background: #efcda7" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-lingerie-de-peau-liquid-foundation-spf-20-03-natural" data-original-title="- 03N Natural"></a><a class="color" style="background: linear-gradient(-45deg, #fed7bb, #efcda7, #d9ab87, #facfac)" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-lingerie-de-peau-liquid-foundation-spf-20-01w-very-light-warm" data-original-title="Xem thêm"></a></div>
                                </div>
                                <a class="box_name" href="/shop/guerlain-lingerie-de-peau-liquid-foundation-spf-20">Guerlain Lingerie De Peau Liquid Foundation SPF 20</a>

                                <div class="box_price">1,404,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    1,560,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/guerlain-lingerie-de-peau-liquid-foundation-spf-20"><span>Guerlain Lingerie De Peau Liquid Foundation SPF 20 - 02N  Light by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7660" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/857/medium/1520477205.jpg" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/025/857/medium/1520477205.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/858/medium/1520477322.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/858/medium/1520477322.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/859/medium/1520477449.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/859/medium/1520477449.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/860/medium/1520477690.png" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/860/medium/1520477690.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/861/medium/1520477810.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/861/medium/1520477810.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/862/medium/1520478261.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/025/862/medium/1520478261.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Lipstick is reinvented in an exceptional jewel with Rouge G, a subtle balance of intense colour and the comforting pleasure of a creamy lip balm. Behind this magical creation is an astounding formula: the unique combination of ruby powder for spectacular radiance, hyaluronic acid spheres for perfectly smoothed lips and wild mango butter for lasting hydration.
                                        Lips are intensely coloured, perfectly smoothed, moisturised and plumped up. For excessively perfect lips!</div>
                                    <div class="colors"><a class="color" style="background: #dd2b39" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-rouge-g-lipstick-68-gigi" data-original-title="- 68 Gigi"></a><a class="color" style="background: #f40001" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-rouge-g-lipstick-71-girly" data-original-title="- 71 Girly"></a><a class="color" style="background: #f43082" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-rouge-g-lipstick-78-gladys" data-original-title="- 78 Gladys"></a><a class="color" style="background: linear-gradient(-45deg, #f43082, #ef2e43, #d42c67, #ff0000)" data-toggle="tooltip" data-container="body" title="" href="/shop/guerlain-rouge-g-lipstick" data-original-title="Xem thêm"></a></div>
                                </div>
                                <a class="box_name" href="/shop/guerlain-rouge-g-lipstick">Guerlain Rouge G Lipstick</a>

                                <div class="box_price">1,317,500 đ - 1,550,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    1,550,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/guerlain-rouge-g-lipstick"><span>Guerlain Rouge G Lipstick - 48 Geneva by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7647" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/835/medium/1520308090.png" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/835/medium/1520308090.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">This fragrance- and flavor-free lip balm with SPF protects against harmful UVA rays as it moisturizes and soothes dry, rough lips.
                                        Non-greasy formula with no unpleasant taste
                                        Broad-spectrum sun protection</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/paulas-choice-lipscreen-spf50">Paula's Choice Lipscreen SPF50</a>

                                <div class="box_price">300,000 đ</div>
                                <a class="link-block box_link" href="/shop/paulas-choice-lipscreen-spf50"><span>Paula's Choice Lipscreen SPF50 by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7643" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/843/medium/1520339228.jpeg" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/025/843/medium/1520339228.jpeg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/025/842/medium/1520339075.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/025/842/medium/1520339075.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Origins Kisszing For Softly Color Lips - 3 gr</div>
                                    <div class="colors"><a class="color" style="background: #dc928b" data-toggle="tooltip" data-container="body" title="" href="/shop/origins-kisszing-for-softly-color-lips-3-gr-04-rosemance" data-original-title="04 Rosemance "></a><a class="color" style="background: #e25ca1" data-toggle="tooltip" data-container="body" title="" href="/shop/origins-kisszing-for-softly-color-lips-3-gr" data-original-title="01 Pink Charming"></a></div>
                                </div>
                                <a class="box_name" href="/shop/origins-kisszing-for-softly-color-lips-3-gr">Origins Kisszing For Softly Color Lips - 3 gr</a>

                                <div class="box_price">550,000 đ</div>
                                <a class="link-block box_link" href="/shop/origins-kisszing-for-softly-color-lips-3-gr"><span>Origins Kisszing For Softly Color Lips - 3 gr 01 Pink Charming by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7606" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/815/medium/1519811492.jpg" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">The high-coverage, ultra-creamy concealer with CPT technology smoothes fine lines, covers dark circles and hides imperfections as it brightens and lifts the look of skin. Cellular Plumping Technology works to smooth and relax the appearance of surface lines as it targets deeper wrinkles to firm, lift and redensify the look of skin. CPT technology also works with Eyeliss to help tighten, tone, soothe and brighten the appearance of under-eye skin while diminishing the look of sagging, puffiness and dark circles.

                                        Ceramide Triple Complex is a blend of skin-identical ceramides 1, 3 and 6, enhanced with phytosphingosine, which helps strengthen, re-texturize and hold vital moisture within the skin. The lightweight, crease-proof, full-coverage formula blends easily and lasts all day. A high level of micro-fine, light-diffusing pigments helps cover dark circles and blur the appearance of fine lines and wrinkles, leaving the skin around the eye area looking refreshed and youthfully bright. Vitamines A, C and E moisturize the skin by providing vital antioxidant protection.

                                        It is the perfect partner to Ceramide Lift and Firm Makeup Broad Spectrum Sunscreen SPF 15.</div>
                                    <div class="discount_percent">-15%</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/elizabeth-arden-ceramide-lift-and-firm-concealer-ivory-2">Elizabeth Arden Ceramide Lift and Firm Concealer</a>

                                <div class="box_price">578,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    680,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/elizabeth-arden-ceramide-lift-and-firm-concealer-ivory-2"><span>Elizabeth Arden Ceramide Lift and Firm Concealer - Ivory by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7599" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/875/medium/1520564347.jpg" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Guerlain imagines KissKiss Roselip, its first hydrating and plumping tinted lip balm boasting an expert formula infused with rose extract, moisturizing jojoba oil and hyaluronic acid.
                                        Lips as soft and smooth as petals of rose, deserve the most delicate attention and the most luminous colours. Subtly coloured, the lips are adorned with a soft and natural glow.
                                        Kiss Kiss Roselip offers 6 shades for naturally irresistible lips, inspired by the delicate hues of freshly hatched roses. Most vibrant colours for every woman and every mood: from charming red to romantic pink.</div>
                                    <div class="discount_percent">-10%</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/guerlain-kisskiss-balm">Guerlain KissKiss Balm</a>

                                <div class="box_price">846,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    940,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/guerlain-kisskiss-balm"><span>Guerlain KissKiss Balm - R371 Morning Rose by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7597" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/047/medium/1522380510.png" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">The micro-fine applicator tip glides on with ease to create a precise, calligraphy-like look directly on the lash line. The applicator is ideal for creating a range of makeup looks from delicate everyday or classic cat eye to high drama and runway-ready. The buildable formula is waterproof, smudge proof, transfer proof, sweat proof, and quick drying.</div>
                                    <div class="discount_percent">-10%</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/elizabeth-arden-new-liquid-liner">Elizabeth Arden Eyeliner NEW LIQUID </a>

                                <div class="box_price">459,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    510,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/elizabeth-arden-new-liquid-liner"><span>Elizabeth Arden Eyeliner NEW LIQUID by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7593" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/791/medium/1519799446.png" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Infused with unique skincare ingredients, including mineral pigments, silk powders and Vitamins C and E, Beautiful Color Natural Eye Brow Pencil helps define brows with the natural look of a powder and the convenience and precision of a twist-up pencil. Whether you’re filling in sparse, over-tweezed brows or creating a bold and dramatic arch, the Beautiful Color Natural Eye Brow Pencil shade range was specially developed to work seamlessly with all hair colors, and deliver long lasting, waterproof color that won’t transfer or fade. Fragrance free, paraben free, oil free.</div>
                                    <div class="discount_percent">-15%</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/elizabeth-arden-beautiful-color-natural-eye-brow-pencil">Elizabeth Arden Beautiful Color Natural Eye Brow Pencil</a>

                                <div class="box_price">480,250 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    565,000 đ
                                </div>
                                <a class="link-block box_link" href="/shop/elizabeth-arden-beautiful-color-natural-eye-brow-pencil"><span>Elizabeth Arden Beautiful Color Natural Eye Brow Pencil - Brownette by Lixibox Online</span>
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
                                    <a rel="next" href="/shop/makeup?page=2">2</a>
                                </li>

                                <li>
                                    <a href="/shop/makeup?page=3">3</a>
                                </li>

                                <li>
                                    <a href="/shop/makeup?page=4">4</a>
                                </li>

                                <li>
                                    <a href="/shop/makeup?page=5">5</a>
                                </li>

                                <li class="disabled">
                                    <a>…</a>
                                </li>

                                <li>
                                    <a rel="next" href="/shop/makeup?page=2"><i class="fa fa-play"></i>
                                    </a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="visible-xs bottom-50">
            <div class="text-center" id="load_more">
                <a class="btn btn-default" data-remote="true" href="/shop/makeup?page=2">Xem thêm</a>

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
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/023/786/medium/1504684532.jpg" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
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
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/705/medium/1519788040.png" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
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
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/471/medium/1513672160.jpg" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
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
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/470/medium/1513672044.jpg" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
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
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/809/medium/1519810488.jpg" class="lazyload" src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" draggable="false">
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
            var fbTrackOptions = JSON.parse('{\"content_name\":\"Makeup\",\"content_type\":\"browse_node\",\"content_ids\":[8063,8047,8018,8006,8004,8002,7970,7959,7914,7906,7863,7822,7815,7679,7678,7677,7666,7660,7647,7643,7606,7599,7597,7593]}');
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
                    <a class="btn facebook-btn" id="fb_login" href="/omniauth/facebook?origin=https%3A%2F%2Fwww.lixibox.com%2Fshop%2Fmakeup"><img src="https://upload.lixibox.com/assets/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de" width="30" height="30">
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
                                    <a class="btn facebook-btn" id="popup_fb_register" href="/omniauth/facebook?origin=https%3A%2F%2Fwww.lixibox.com%2Fshop%2Fmakeup"><i class="fa fa-facebook"></i>
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
                                    <form role="form" id="popup_register" class="new_user" action="/users" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="kWUNMrtz9lAYgfGkXDoHHsHb8Wm5aLj1v8gPb/WP6t4JMDqc2TGtWzv2jrEDSKFZ5xeBrLyXWVy0oK5ApzcS6A=="><input type="hidden" name="return_to" id="return_to" value="https://www.lixibox.com/shop/makeup">
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
                                    <a class="btn facebook-btn" id="popup_fb_login" href="/omniauth/facebook?origin=https%3A%2F%2Fwww.lixibox.com%2Fshop%2Fmakeup"><i class="fa fa-facebook"></i>
                                        Đăng nhập bằng Facebook
                                    </a></div>
                                <div class="top-20 divider-top" style="padding-top: 15px;">
                                    hoặc đăng nhập dùng email và mật khẩu
                                </div>
                                <div class="top-10 text-left">
                                    <form role="form" id="popup_login" class="new_user" action="/users/sign_in" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="kWUNMrtz9lAYgfGkXDoHHsHb8Wm5aLj1v8gPb/WP6t4JMDqc2TGtWzv2jrEDSKFZ5xeBrLyXWVy0oK5ApzcS6A=="><input type="hidden" name="return_to" id="return_to" value="https://www.lixibox.com/shop/makeup">
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
