<?php
/**
 * Created by PhpStorm.
 * User: Cu'c
 * Date: 08/05/2018
 * Time: 11:16 SA
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
                                Tóc
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/shop/beauty"><i class="fa fa-chevron-left"></i>
                                        Mua lẻ
                                    </a></li>
                                <div class="divider"></div>
                                <li>
                                    <a href="/shop/shampoo">Dầu gội</a>
                                </li>
                                <li>
                                    <a href="/shop/conditioner">Dầu xả</a>
                                </li>
                                <li>
                                    <a href="/shop/styling-products">Tạo kiểu</a>
                                </li>
                                <li>
                                    <a href="/shop/treatment">Dưỡng tóc</a>
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
                                    <a href="/shop/hair?sort=price-asc"><i class="fa fa-sort-numeric-asc"></i>
                                        Sắp xếp:
                                        Giá tăng dần
                                    </a></li>
                                <li>
                                    <a href="/shop/hair?sort=price-desc"><i class="fa fa-sort-numeric-desc"></i>
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="361" class="brand-checkbox-mobile">
                                                        Alterna Caviar
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="74" class="brand-checkbox-mobile">
                                                        Ciracle
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="548" class="brand-checkbox-mobile">
                                                        Drybar
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="628" class="brand-checkbox-mobile">
                                                        Evoluderm
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="608" class="brand-checkbox-mobile">
                                                        GROW GORGEOUS
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="452" class="brand-checkbox-mobile">
                                                        Living Proof
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="447" class="brand-checkbox-mobile">
                                                        Matrix
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="156" class="brand-checkbox-mobile">
                                                        Mediheal
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="517" class="brand-checkbox-mobile">
                                                        OKAME Skincare
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 brand-agg">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="611" class="brand-checkbox-mobile">
                                                        Philip Kingsley
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
                                                        <input type="checkbox" name="brand_id" id="brand_id" value="229" class="brand-checkbox-mobile">
                                                        Ulta
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
1,550K
</span>
                                            </div>
                                            <div class="top-40">
                                                <div id="price-slider-mobile" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                                <div class="pull-left" id="filter-min-threshold-mobile">
                                                    50K
                                                </div>
                                                <div class="pull-right" id="filter-max-threshold-mobile">
                                                    1,550K
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
                                $( "#price-slider-mobile" ).slider( "values", 1, 1550 );
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
                                var url = "/shop/hair" + "?" + queryStr ;
                                window.location = url;
                            });

                            $("#price-slider-mobile").slider({
                                range: true,
                                min: 50,
                                max: 1550,
                                values: [50, 1550],
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

                                    if( max_price == 1550 )
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
                                    <div browse_node_id="840" class="filter_category in_browse_tree " depth="0"><a href="/shop/beauty" class="current_node "><i class="fa fa-chevron-down"></i><span class="name">Beauty</span><span class="vn_name padleft">Mua lẻ</span></a><div class="child_nodes"><div browse_node_id="428" class="filter_category  " depth="1"><a href="/shop/makeup" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Makeup</span><span class="vn_name padleft">Trang điểm</span></a></div><div browse_node_id="422" class="filter_category in_browse_tree active" depth="1"><a href="/shop/hair" class="current_node "><i class="fa fa-chevron-down"></i><span class="name">Hair</span><span class="vn_name padleft">Tóc</span></a><div class="child_nodes"><div browse_node_id="433" class="filter_category  " depth="2"><a href="/shop/shampoo" class="current_node padleft"><span class="name">Shampoo</span><span class="vn_name ">Dầu gội</span></a></div><div browse_node_id="434" class="filter_category  " depth="2"><a href="/shop/conditioner" class="current_node padleft"><span class="name">Conditioner</span><span class="vn_name ">Dầu xả</span></a></div><div browse_node_id="435" class="filter_category  " depth="2"><a href="/shop/styling-products" class="current_node padleft"><span class="name">Styling products</span><span class="vn_name ">Tạo kiểu</span></a></div><div browse_node_id="436" class="filter_category  " depth="2"><a href="/shop/treatment" class="current_node padleft"><span class="name">Treatment</span><span class="vn_name ">Dưỡng tóc</span></a></div></div></div><div browse_node_id="429" class="filter_category  " depth="1"><a href="/shop/skin-care" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Skin Care</span><span class="vn_name padleft">Dưỡng da</span></a></div><div browse_node_id="430" class="filter_category  " depth="1"><a href="/shop/bath-body" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Bath &amp; Body</span><span class="vn_name padleft">Cơ thể</span></a></div><div browse_node_id="421" class="filter_category  " depth="1"><a href="/shop/tools-accessories" class="current_node "><i class="fa fa-chevron-right"></i><span class="name">Tools &amp; Accessories</span><span class="vn_name padleft">Cọ &amp; Phụ kiện</span></a></div><div browse_node_id="844" class="filter_category  " depth="1"><a href="/shop/new-products" class="current_node padleft"><span class="name">New Arrivals</span><span class="vn_name ">Hàng mới nhất</span></a></div><div browse_node_id="841" class="filter_category  " depth="1"><a href="/shop/bestsellers" class="current_node padleft"><span class="name">Best Sellers</span><span class="vn_name ">Hàng hot nhất</span></a></div></div></div>
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
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="439" class="brand-aggs" data-url="/shop/hair?bids=439">
                                                    3CE
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Alterna Caviar">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="361" class="brand-aggs" data-url="/shop/hair?bids=361">
                                                    Alterna Caviar
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Andalou Naturals">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="140" class="brand-aggs" data-url="/shop/hair?bids=140">
                                                    Andalou Naturals
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Ciracle">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="74" class="brand-aggs" data-url="/shop/hair?bids=74">
                                                    Ciracle
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Drybar">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="548" class="brand-aggs" data-url="/shop/hair?bids=548">
                                                    Drybar
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Evoluderm">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="628" class="brand-aggs" data-url="/shop/hair?bids=628">
                                                    Evoluderm
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="GROW GORGEOUS">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="608" class="brand-aggs" data-url="/shop/hair?bids=608">
                                                    GROW GORGEOUS
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Le Petit Olivier">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="614" class="brand-aggs" data-url="/shop/hair?bids=614">
                                                    Le Petit Olivier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Living Proof">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="452" class="brand-aggs" data-url="/shop/hair?bids=452">
                                                    Living Proof
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Matrix">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="447" class="brand-aggs" data-url="/shop/hair?bids=447">
                                                    Matrix
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Mediheal">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="156" class="brand-aggs" data-url="/shop/hair?bids=156">
                                                    Mediheal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Mise-en-scène">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="471" class="brand-aggs" data-url="/shop/hair?bids=471">
                                                    Mise-en-scène
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="OKAME Skincare">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="517" class="brand-aggs" data-url="/shop/hair?bids=517">
                                                    OKAME Skincare
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Philip Kingsley ">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="611" class="brand-aggs" data-url="/shop/hair?bids=611">
                                                    Philip Kingsley
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Radha Beauty">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="406" class="brand-aggs" data-url="/shop/hair?bids=406">
                                                    Radha Beauty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="SaengN">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="662" class="brand-aggs" data-url="/shop/hair?bids=662">
                                                    SaengN
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Secret Key">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="4" class="brand-aggs" data-url="/shop/hair?bids=4">
                                                    Secret Key
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Sephora">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="91" class="brand-aggs" data-url="/shop/hair?bids=91">
                                                    Sephora
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand-agg col-md-6 col-xs-6 col-sm-6">
                                            <div class="checkbox">
                                                <label data-tracking-category="brand_filter" data-tracking-title="Ulta">
                                                    <input type="checkbox" name="brand_id" id="brand_id" value="229" class="brand-aggs" data-url="/shop/hair?bids=229">
                                                    Ulta
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
                                                1,550K
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="text-center top-10">
                                            <div id="filter-min-select">
                                                50K
                                            </div>
                                            -
                                            <div id="filter-max-select">
                                                1,550K
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
                                        max: 1550,
                                        values: [50, 1550],
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
                                            if(min_price == 50 && max_price == 1550)
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
                                            var url = "/shop/hair" + "?" + queryStr ;
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
                        <a href="/shop/hair">Hair
                            (Tóc)
                        </a></div>

                    <div class="divider_title mono">
                        <span>Tóc</span>
                    </div>
                    <div class="pull-left top-10">
                        <strong>56</strong>
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
                                    <a href="/shop/hair?sort=price-asc"><i class="fa fa-sort-numeric-asc"></i>
                                        Giá tăng dần
                                    </a></li>
                                <li>
                                    <a href="/shop/hair?sort=price-desc"><i class="fa fa-sort-numeric-desc"></i>
                                        Giá giảm dần
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="top-20 box_card_container" data-source="Tóc" id="theme_boxes">
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8202" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/031/918/medium/1525667612.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/918/medium/1525667612.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dòng Perfect Repair Styling của Hãng MISE EN chuyện trị cho tóc khô và hư tổn. Tóc phải thường xuyên tạo kiểu (uốn nhuộm, sấy nóng).
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/mise-en-scene-perfect-serum-styling">Mise-en-scène Perfect Serum Styling</a>

                                <div class="box_price">220,000 đ</div>
                                <h5>
                                    <div class="label label-danger label-block">Tạm hết hàng</div>
                                </h5>
                                <a class="link-block box_link" href="/shop/mise-en-scene-perfect-serum-styling"><span>Mise-en-scène Perfect Serum Styling by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8084" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/031/510/medium/1524820788.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/510/medium/1524820788.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Thuốc Tẩy Dưỡng Màu Tóc Mediheal
                                        Dành cho các bạn đang muốn làm mới mình bằng cách thay đổi màu tóc.
                                        • Bạn tha hồ thay đổi màu tóc theo sở thích. Nhuộm cả ombre hay highlight đều rất chuẩn.
                                        • Không phân biệt độ tuổi, màu tóc. Nhuộm tóc Mediheal thoải mái với cả tóc bạc.
                                        • Không chỉ nhuộm mà còn dưỡng. Sau khi nhuộm với Mediheal tóc bạn sẽ bóng hơn, bồng bềnh hơn</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/mediheal-secret-change-hair-bleach">Mediheal Secret Change Hair Bleach</a>

                                <div class="box_price">65,000 đ</div>
                                <a class="link-block box_link" href="/shop/mediheal-secret-change-hair-bleach"><span>Mediheal Secret Change Hair Bleach by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="8081" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/031/504/medium/1524817699.jpg" class="lazyload undisplay" src="https://upload.lixibox.com/system/pictures/files/000/031/504/medium/1524817699.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/507/medium/1524818976.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/507/medium/1524818976.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/508/medium/1524819257.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/508/medium/1524819257.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/512/medium/1524821603.jpg" class="lazyload display" src="https://upload.lixibox.com/system/pictures/files/000/031/512/medium/1524821603.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/513/medium/1524821870.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/513/medium/1524821870.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/514/medium/1524822068.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/514/medium/1524822068.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/515/medium/1524822399.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/515/medium/1524822399.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"><img data-src="https://upload.lixibox.com/system/pictures/files/000/031/516/medium/1524822781.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/031/516/medium/1524822781.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dành cho các bạn đang muốn làm mới mình bằng cách thay đổi màu tóc.
                                        • Bạn tha hồ thay đổi màu tóc theo sở thích. Nhuộm cả ombre hay highlight đều rất chuẩn.
                                        • Không phân biệt độ tuổi, màu tóc. Nhuộm tóc Mediheal thoải mái với cả tóc bạc.
                                        • Không chỉ nhuộm mà còn dưỡng. Sau khi nhuộm với Mediheal tóc bạn sẽ bóng hơn, bồng bềnh hơn</div>
                                    <div class="colors"><a class="color" style="background: #cca79d" data-toggle="tooltip" data-container="body" title="" href="/shop/mediheal-secret-change-hair-color-cream-10gr-ash-gray" data-original-title="10GR (Ash Gray)"></a><a class="color" style="background: #bd9981" data-toggle="tooltip" data-container="body" title="" href="/shop/mediheal-secret-change-hair-color-cream-7a-ash-brown" data-original-title="7A (Ash Brown)"></a><a class="color" style="background: #dc9861" data-toggle="tooltip" data-container="body" title="" href="/shop/mediheal-secret-change-hair-color-cream-11l-sugar-gold" data-original-title="11L (Sugar Gold)"></a><a class="color" style="background: linear-gradient(-45deg, #356e79, #b84c8a, #010101, #912c16)" data-toggle="tooltip" data-container="body" title="" href="/shop/mediheal-secret-change-hair-color-cream-6mb-wine-brown" data-original-title="Xem thêm"></a></div>
                                </div>
                                <a class="box_name" href="/shop/mediheal-secret-change-hair-color-cream">Mediheal Secret Change Hair Color Cream -</a>

                                <div class="box_price">110,000 đ</div>
                                <a class="link-block box_link" href="/shop/mediheal-secret-change-hair-color-cream"><span>Mediheal Secret Change Hair Color Cream - 6N (Milk Brown) by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7963" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/230/medium/1524132882.png" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/230/medium/1524132882.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu Gội Cân Bằng Tinh Khiết SaengN Pure Balance Hair Shampoo giúp xoa dịu da đầu bị tổn thương do nhiệt độ hki uốn, duỗi nhuộm.. 100% các thành phần tự nhiên và các loại thảo mộc an toàn và tốt tuyệt đối cho cả trẻ em… Nhẹ nhành làm sạch xoa dịu lda đầu bị kích ứng Tinh chất thảo mộc với hơn 16 nguyên liệu thảo mộc quý giúp mọc tóc, trị gàu nấm ngứa, ngừa rụng tóc, giúp tóc đen, suông mượt, chống khô xơ và chẻ ngọn… Giảm ngứa sau 10 ngày sử dụng và giảm tình trạng hình thành các mảng sừng trên da đầu.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/saengn-pure-balance-hair-shampoo">SaengN Pure Balance Hair Shampoo</a>

                                <div class="box_price">195,000 đ</div>
                                <a class="link-block box_link" href="/shop/saengn-pure-balance-hair-shampoo"><span>SaengN Pure Balance Hair Shampoo by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7973" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/221/medium/1524131901.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/221/medium/1524131901.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Với các thành phần lành tính từ thiên nhiên : +Không chứa parabens, dầu khoáng, phthalate, glycol, lanolin. +Tinh dầu từ hoa cúc trắng (nuôi dưỡng tóc chắc khỏe) +Vỏ cây liễu trắng (giảm các triệu chứng kích ứng và viêm nhiễm, tình trạng bóc vảy ở da đầu ) +Bơ hạt Cacao : làm mềm mượt và cung cấp độ ẩm cho tóc, thích hợp cho các loại tóc khô, hư tổn +Tinh dầu trái sung :chống gãy rụng cho tóc chắc khỏe</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/saengn-herb-garden-shampoo">SaengN Herb Garden Shampoo</a>

                                <div class="box_price">295,000 đ</div>
                                <a class="link-block box_link" href="/shop/saengn-herb-garden-shampoo"><span>SaengN Herb Garden Shampoo by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7844" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/058/medium/1522510700.jpeg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/058/medium/1522510700.jpeg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội làm dày tóc Dalan d'Olive Olive Oil Volumizing Shampoo sử dụng những kinh nghiệm trong 70 năm nghiên cứu, ứng dụng dầu ô liu của Dalan d'Olive mang đến sản phẩm dầu gội thiên nhiên với chất lượng đảm bảo nhất. Dầu gội không chỉ làm sạch tóc và da đầu mà còn kết hợp thành phần dưỡng chất từ dầu ô liu và Protein gạo nuôi dưỡng mái tóc khỏe hơn từ sâu bên trong. Đồng thời, sản phẩm giúp tóc bóng mượt, mềm mại hơn, cải thiện rõ rệt tình trạng xơ rối, từ đó tạo cảm giác mái tóc dày khỏe, bồng bềnh hơn hẳn mà không gây nặng tóc.

                                    </div>
                                    <div class="discount_percent">-24%</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/dalan-dolive-shampoo-volumizing">Dalan d'olive Shampoo Volumizing</a>

                                <div class="box_price">130,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    170,000 đ
                                </div>
                                <h5>
                                    <div class="label label-danger label-block">Tạm hết hàng</div>
                                </h5>
                                <a class="link-block box_link" href="/shop/dalan-dolive-shampoo-volumizing"><span>Dalan d'olive Shampoo Volumizing by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7843" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/056/medium/1522510384.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/056/medium/1522510384.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dalan D'olive dầu gội dành cho tóc nhuộm bị hư tổn, có thành phần chiết xuất từ lúa mỳ và Oliu, giúp tóc mềm mại, óng mượt và và nuôi dưỡng da đầu và giữ màu tóc hiệu quả.</div>
                                    <div class="discount_percent">-24%</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/dalan-dolive-shampoo-color-protection">Dalan d'olive Shampoo Color Protection</a>

                                <div class="box_price">130,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    170,000 đ
                                </div>
                                <h5>
                                    <div class="label label-danger label-block">Tạm hết hàng</div>
                                </h5>
                                <a class="link-block box_link" href="/shop/dalan-dolive-shampoo-color-protection"><span>Dalan d'olive Shampoo Color Protection by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7842" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/057/medium/1522510527.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/057/medium/1522510527.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội cho tóc khô và hư tổn Dalan d’Olive Shampoo Repairing Care với sự kết hợp từ dầu ô-liu và lúa mạch Địa Trung Hải đã mang lại liệu pháp chăm sóc hoàn hảo cho tóc mỏng và yếu.</div>
                                    <div class="discount_percent">-24%</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/dalan-dolive-shampoo-olive-oil">Dalan d'olive Shampoo Olive Oil</a>

                                <div class="box_price">130,000 đ</div>
                                <div class="box_value">
                                    <span class="real-value-text"></span>
                                    170,000 đ
                                </div>
                                <h5>
                                    <div class="label label-danger label-block">Tạm hết hàng</div>
                                </h5>
                                <a class="link-block box_link" href="/shop/dalan-dolive-shampoo-olive-oil"><span>Dalan d'olive Shampoo Repairing Care by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7829" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/040/medium/1522295189.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/040/medium/1522295189.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội tinh dầu hạnh nhân và bơ hạt mỡ nổi tiếng với sự làm mềm nhẹ nhàng và phục hồi cho tóc, bảo vệ tóc khỏi các tác nhân gây hại hàng ngày, trả lại tính tính linh hoạt và sáng bóng của tóc.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-shampoo-protecteur-douceur-damande">EVOLUDERM SHAMPOO PROTECTEUR DOUCEUR D'AMANDE </a>

                                <div class="box_price">165,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-shampoo-protecteur-douceur-damande"><span>EVOLUDERM SHAMPOO PROTECTEUR DOUCEUR D'AMANDE  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7747" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/963/medium/1521643953.png" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/963/medium/1521643953.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Kem ủ chăm sóc tóc từ mật ong nuôi dưỡng tóc mượt và bóng Mật ong có công dụng phục hồi, củng cố lại cho mái tóc của bạn, mang đến sự mềm mại và bảo vệ tăng cường từ gốc đến ngọn. Kết quả: Mái tóc của bạn sẽ bóng mượt, giảm gẫy rụng, những sự thiếu hụt trong tóc sẽ được lấp đầy và trẻ hóa.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-masque-cheveux-fortifiant-miel-gourmand">EVOLUDERM MASQUE CHEVEUX FORTIFIANT MIEL GOURMAND</a>

                                <div class="box_price">120,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-masque-cheveux-fortifiant-miel-gourmand"><span>EVOLUDERM MASQUE CHEVEUX FORTIFIANT MIEL GOURMAND by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7748" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/962/medium/1521643516.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/962/medium/1521643516.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Mái tóc của bạn sẽ sạch và bóng mượt chỉ trong vòng 5 phút mà không cần xả lại với nước nhờ dầu gội đầu khô Evoluderm. Sản phẩm chứa các phân tử dễ thấm hút các cặn bẩn, bụi và dầu nhờn trên tóc, cho tóc suôn mượt và dễ chải.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-shampoo-sec-purifiant">EVOLUDERM SHAMPOO SEC PURIFIANT</a>

                                <div class="box_price">190,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-shampoo-sec-purifiant"><span>EVOLUDERM SHAMPOO SEC PURIFIANT by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7746" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/960/medium/1521643244.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/960/medium/1521643244.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Kem ủ dành cho tóc khô và hư tổn giúp phục hồi tóc và tạo sức sống cho tóc. Thành phần sản phẩm bao gồm các loại capillary thích hợp cho mỗi loại tóc. Với lượng glycerin dồi dào giúp bảo vệ tóc mỗi ngày. Kem ủ chiết xuất từ Argan giàu vitamin và dưỡng chất giúp phục hồi và nuôi dưỡng mái tóc. Sản phẩm 0% paraben, không hóa chất độc hại, an toàn tuyệt đối cho da và tóc.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-masque-cheveux-nourrissant-argan-divin">EVOLUDERM MASQUE CHEVEUX NOURRISSANT ARGAN DIVIN</a>

                                <div class="box_price">120,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-masque-cheveux-nourrissant-argan-divin"><span>EVOLUDERM MASQUE CHEVEUX NOURRISSANT ARGAN DIVIN by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7744" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/958/medium/1521643024.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/958/medium/1521643024.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội được làm từ bùn trắng có tác dụng hạn chế dầu thừa trên tóc, hạn chế hấp thụ bã nhờn giúp làm sạch và giảm kích ứng da dầu. Kết quả: Làm sạch và khử bụi bẩn trên tóc, mái tóc của bạn sẽ sạch và mềm mại, bồng bềnh.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-shampoo-purifiant-argile-blache">EVOLUDERM SHAMPOO PURIFIANT ARGILE BLACHE</a>

                                <div class="box_price">165,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-shampoo-purifiant-argile-blache"><span>EVOLUDERM SHAMPOO PURIFIANT ARGILE BLACHE by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7745" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/026/042/medium/1522295316.jpeg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/026/042/medium/1522295316.jpeg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Kem ủ với tinh chất Argan, hoa sơn trà và hoa lưu ly giúp bảo vệ tóc khỏi những hư tổn gây ra bởi môi trường, hóa chất và nhiệt độ, đồng thời phục hồi mái tóc bị hư tổn. Làm giảm khô xơ của đuôi tóc chẻ ngọn, giúp tóc chắc khỏe, bóng mượt và vào nếp hơn.Tinh dầu hoa argan, hoa sơn trà và hoa lưu ly. Sản phẩm không chứa chất bảo quản paraben.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-masque-cheveux-sublimateur-huilie-precieuse">EVOLUDERM MASQUE CHEVEUX SUBLIMATEUR HUILIE PRÉCIEUSE</a>

                                <div class="box_price">120,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-masque-cheveux-sublimateur-huilie-precieuse"><span>EVOLUDERM MASQUE CHEVEUX SUBLIMATEUR HUILIE PRÉCIEUSE by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7743" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/956/medium/1521642738.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/956/medium/1521642738.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Sản phẩm gội Evoluderm từ bơ hạt mỡ dưỡng bóng tóc dành cho tóc khô và dễ gãy, cho tóc dài và sáng bóng. Thành phần sản phẩm bao gồm các loại capillary thích hợp cho mỗi loại tóc.Với lượng glycerin dồi dào giúp bảo vệ tóc mỗi ngày. Sản phẩm 0% paraben, không gây kích ứng da. Sản phẩm chăm sóc tóc chiết xuất từ Bơ hạt mỡ giúp khôi phục sức sống cho mái tóc, nuôi dưỡng tận sâu bên trong chân tóc, giúp tóc óng mượt và chắc khỏe.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-shampoo-reparateur-delice-de-karite">EVOLUDERM SHAMPOO RÉPARATEUR DÉLICE DE KARITÉ</a>

                                <div class="box_price">165,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-shampoo-reparateur-delice-de-karite"><span>EVOLUDERM SHAMPOO RÉPARATEUR DÉLICE DE KARITÉ by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7741" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/954/medium/1521642193.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/954/medium/1521642193.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội dành cho tóc khô và hư tổn giúp phục hồi tóc và tạo sức sống cho tóc. Thành phần sản phẩm bao gồm các loại capillary thích hợp cho mỗi loại tóc. Với lượng glycerin dồi dào giúp bảo vệ tóc mỗi ngày. Dầu gội chiết xuất từ Argan giàu vitamin và dưỡng chất giúp phục hồi và nuôi dưỡng mái tóc. Sản phẩm 0% paraben, không hóa chất độc hại, an toàn tuyệt đối cho da và tóc.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-shampoo-nourrissant-argan-divin">EVOLUDERM SHAMPOO NOURRISSANT ARGAN DIVIN</a>

                                <div class="box_price">165,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-shampoo-nourrissant-argan-divin"><span>EVOLUDERM SHAMPOO NOURRISSANT ARGAN DIVIN by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7739" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/953/medium/1521641795.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/953/medium/1521641795.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội chiết xuất từ hoa argan giàu vitamin và dưỡng chất giúp phục hồi và nuôi dưỡng mái tóc. Cho chân tóc chắc khỏe, hồi phục hư tổn và tạo độ phồng cho tóc, nuôi dưỡng và bảo vệ tóc mỗi ngày, đồng thời phục hồi và tạo sinh lực cho da đầu. Tinh dầu hoa argan, hoa sơn trà và hoa lưu ly. Sản phẩm không chứa chất bảo quản paraben.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/shampooing-sublimateur-huile-precieuse">EVOLUDERM SHAMPOOING SUBLIMATEUR Huile Précieuse</a>

                                <div class="box_price">165,000 đ</div>
                                <a class="link-block box_link" href="/shop/shampooing-sublimateur-huile-precieuse"><span>EVOLUDERM SHAMPOOING SUBLIMATEUR Huile Précieuse by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7225" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/405/medium/1519026646.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/405/medium/1519026646.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu xả làm bóng tóc Sunflower &amp; Citrus Brilliant Shine
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/andalou-naturals-sunflower-citrus-brilliant-shine-conditioner">Andalou Naturals Sunflower &amp; Citrus Brilliant Shine Conditioner</a>

                                <div class="box_price">280,000 đ</div>
                                <a class="link-block box_link" href="/shop/andalou-naturals-sunflower-citrus-brilliant-shine-conditioner"><span>Andalou Naturals Sunflower &amp; Citrus Brilliant Shine Conditioner by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7224" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/404/medium/1519026409.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/404/medium/1519026409.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu xả làm phồng tóc Lavender &amp; Biotin Full Volume </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/andalou-naturals-lavender-biotin-full-volume-conditioner">Andalou Naturals Lavender &amp; Biotin Full Volume Conditioner</a>

                                <div class="box_price">280,000 đ</div>
                                <a class="link-block box_link" href="/shop/andalou-naturals-lavender-biotin-full-volume-conditioner"><span>Andalou Naturals Lavender &amp; Biotin Full Volume Conditioner by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7223" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/403/medium/1519026170.png" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/403/medium/1519026170.png" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội đầu Sunflower &amp; Citrus Brilliant Shine
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/andalou-naturals-sunflower-citrus-brilliant-shine-shampoo">Andalou Naturals Sunflower &amp; Citrus Brilliant Shine Shampoo</a>

                                <div class="box_price">280,000 đ</div>
                                <a class="link-block box_link" href="/shop/andalou-naturals-sunflower-citrus-brilliant-shine-shampoo"><span>Andalou Naturals Sunflower &amp; Citrus Brilliant Shine Shampoo by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="7222" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/402/medium/1519025707.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/025/402/medium/1519025707.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội đầu Lavender &amp; Biotin Full Volume
                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/andalou-naturals-lavender-biotin-full-volume-shampoo">Andalou Naturals Lavender &amp; Biotin Full Volume Shampoo</a>

                                <div class="box_price">280,000 đ</div>
                                <a class="link-block box_link" href="/shop/andalou-naturals-lavender-biotin-full-volume-shampoo"><span>Andalou Naturals Lavender &amp; Biotin Full Volume Shampoo by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="6446" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/709/medium/1515385728.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/024/709/medium/1515385728.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Nước dưỡng bóng tóc Keratine Evoluderm 300 ml
                                        Mái tóc của bạn sẽ nhanh chóng vào nếp và dễ chải hơn bao giờ hết với nước dưỡng bóng tóc Keratine. Tinh chất Keratine dồi dào giúp bảo vệ tóc mỗi ngày, không chứa chất bảo quản paraben, an toàn tuyệt đối cho tóc.
                                        Ưu điểm nổi bật: Keratin có tác dụng phục hồi làm cho mái tóc của bạn tỏa sáng và nuôi dưỡng tóc chắc khỏe.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-brume-cheveux-keratine">EVOLUDERM - BRUME CHEVEUX KERATINE</a>

                                <div class="box_price">180,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-brume-cheveux-keratine"><span>EVOLUDERM BRUME CHEVEUX KERATINE by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="6445" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/708/medium/1515385408.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/024/708/medium/1515385408.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Dầu gội dành cho tóc uốn nhuộm

                                        Nếu các sản phẩm uốn nhuộm là nguyên nhân gây ra các vấn đề về hư tổn cho tóc thì giờ đây bạn sẽ không còn phải phân vân nữa khi đã có Dầu gội dành cho tóc uốn nhuộm Evoluderm giúp phục hồi tóc hiệu quả.

                                        Để có một mái tóc óng mượt, xanh đẹp, rất nhiều người đã bỏ ra số tiền rất lớn để phục hồi lại mái tóc khô sơ, hư tổn của mình, mà hiệu quả đem lại vẫn không như mình mong muốn, Chính vì vậy hãy sử dụng Keratin phục hồi tóc hư tổn để chăm sóc và phục hồi mái tóc hư tổn của bạn.

                                        Keratin là dưỡng chất cao cấp, chuyên đặc trị tóc hư tổn trên thị trường hiện nay, với lượng protein rất lớn và quan trọng chiếm tới 70 % cấu trúc của sợ tóc, vì vậy để tránh khỏi những hư tổn của tóc, bạn cần phải bổ sung lượng keratin cần đủ cho tóc. giúp tóc khỏe mạnh, sửa chữa những tổn thương do quá trình dùng hóa chất kém chất lượng, hay các tác nhân gây hại bên ngoài.

                                        Quá trình làm tóc, khi sử dụng nhiệt độ cao, tế bào trong sợi tóc rấ dễ đứt gẫy, gây ra khô sơ, không còn lực đàn hồi dẫn tới tóc bị hư tổn tổ. Bổ sung keratin kịp thời chính là bổ sung lớp bảo vệ giúp tóc tránh khỏi quá trình đứt gẫy,khô sơ.

                                        Keratin hoạt động như một màng bảo vệ trên từng sợi tóc và giúp phục hồi các vùng tóc bị suy yếu. Ngoài ra, Ketatin còn giữ cho lớp màu nhuộm lâu phai, hạn chế xỉn màu  tóc.</div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/evoluderm-shampooing-couleur">EVOLUDERM - SHAMPOOING COULEUR </a>

                                <div class="box_price">165,000 đ</div>
                                <a class="link-block box_link" href="/shop/evoluderm-shampooing-couleur"><span>EVOLUDERM SHAMPOOING COULEUR  by Lixibox Online</span>
                                </a></div>

                        </div>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div box_id="6289" class="box_card">
                                <div class="box_image">
                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/535/medium/1513935269.jpg" class="lazyload" src="https://upload.lixibox.com/system/pictures/files/000/024/535/medium/1513935269.jpg" alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de">
                                    <div class="seo-text hidden">Kem dưỡng cho tóc khô và hư tổn Le Petit Olivier Olive Shea Argan Hair Care Cream 200ml được chiết xuất từ các thành phần trong tự nhiên, giúp làm giảm đáng kể phần tóc hư tổn, chống xơ, chẻ ngọn, đem lại cho bạn mái tóc mềm mượt chỉ trong ít phút. Kem dưỡng không gây kích ứng da, mùi thơm dễ chịu. Sản phẩm không chứa Paraben và Phenoxyethanol.

                                    </div>
                                    <div class="colors"></div>
                                </div>
                                <a class="box_name" href="/shop/le-petit-olivier-olive-shea-argan-hair-care-cream-200ml">Le Petit Olivier Olive Shea Argan Hair Care Cream 200ml</a>

                                <div class="box_price">145,000 đ</div>
                                <a class="link-block box_link" href="/shop/le-petit-olivier-olive-shea-argan-hair-care-cream-200ml"><span>Le Petit Olivier Olive Shea Argan Hair Care Cream 200ml by Lixibox Online</span>
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
                                    <a rel="next" href="/shop/hair?page=2">2</a>
                                </li>

                                <li>
                                    <a href="/shop/hair?page=3">3</a>
                                </li>

                                <li>
                                    <a rel="next" href="/shop/hair?page=2"><i class="fa fa-play"></i>
                                    </a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="visible-xs bottom-50">
            <div class="text-center" id="load_more">
                <a class="btn btn-default" data-remote="true" href="/shop/hair?page=2">Xem thêm</a>

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
            var fbTrackOptions = JSON.parse('{\"content_name\":\"Hair\",\"content_type\":\"browse_node\",\"content_ids\":[8202,8084,8081,7963,7973,7844,7843,7842,7829,7747,7748,7746,7744,7745,7743,7741,7739,7225,7224,7223,7222,6446,6445,6289]}');
            if (true) {
                window._fbq.push(['track', 'ViewContent', fbTrackOptions]);
            } else {
                console.log("ViewContent", fbTrackOptions);
            }
        }, 300);
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
