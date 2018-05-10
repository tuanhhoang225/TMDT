<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 5/10/2018
 * Time: 2:29 PM
 */
?>

<div id="content">
    <div class="container fix_width" id="cart">
        <div class="row hidden-xs">
            <div class="top-line"></div>
        </div>
        <div class="row">
            <div class="left_panel col-md-5 col-sm-12 col-xs-12" id="checkout_form">
                <div class="process-header text-bold text-center top-10">
                    <i class="fa fa-lock"></i>
                    Đặt hàng an toàn

                </div>
                <div id="lx_progress_bar">
                    <div class="steps_progress">
                        <div class="steps_backward">
                            <div class="bar col-xs-2 on-step1">
                                <div class="button"></div>
                            </div>
                            <div class="bar col-xs-3 on-step2">
                                <div class="button"></div>
                            </div>
                            <div class="bar col-xs-4 on-step3">
                                <div class="button"></div>
                            </div>
                            <div class="bar col-xs-3 on-step4">
                                <div class="button"></div>
                            </div>
                        </div>
                        <div class="process_bar"></div>
                        <div class="step-2 steps">
                            <div class="bar col-xs-2 on-step1">
                                <div class="button">
                                    <div class="core"><i class="fa fa-check"></i></div>
                                    <div class="inline">Giỏ hàng</div>
                                </div>
                            </div>
                            <div class="bar col-xs-3 on-step2">
                                <div class="button">
                                    <div class="core"><i class="fa fa-check"></i></div>
                                    <div class="inline">Địa chỉ</div>
                                </div>
                            </div>
                            <div class="bar col-xs-4 on-step3">
                                <div class="button">
                                    <div class="core"><i class="fa fa-check"></i></div>
                                    <div class="inline">Thanh toán</div>
                                </div>
                            </div>
                            <div class="bar col-xs-3 on-step4">
                                <div class="button">
                                    <div class="core"><i class="fa fa-check"></i></div>
                                    <div class="inline">Hoàn tất</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="cart-form active" id="shipping_form">
                    <div class="form-content row">
                        <form class="edit_cart" id="edit_cart_256507" action="/cart/checkout" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="BMezTWmkWJoPg0qCEqmNbOBkk0bC+lGaJQFBMSZjBBGe1uK6bVBkxv/nnF5r/IUCbUDWdDOoUZ9zOEIpyON5Hg=="><input value="true" type="hidden" name="cart[guest]" id="cart_guest">
                            <div class="col-xs-12 top-20 bottom-6 message-wrapper">
                                <div class="checkbox with-border">
                                    <label class="this_is_gift">
                                        <input name="cart[is_gift]" type="hidden" value="0"><input id="this_is_gift" type="checkbox" value="1" name="cart[is_gift]">
                                        Đây là
                                        <i class="fa fa-gift"></i>
                                        quà tặng. Tôi muốn viết lời nhắn.
                                    </label>
                                </div>
                                <div class="bottom-20 hidden" id="gift_options">
                                    <div id="gift-background"></div>
                                    <div class="messages">
                                        <p class="message-title">Lời Nhắn Viết Lên Thiệp Tặng Quà</p>
                                        <div class="form-group">
                                            <textarea class="form-control" maxlength="300" placeholder="Nhập tối đa 300 ký tự." name="cart[gift_message]" id="cart_gift_message"></textarea>
                                            <div class="heading">
                                                <div class="pull-right countdown hidden-xs" style="display: none">
                                                    Còn lại
                                                    <span class="number">300</span>
                                                    kí tự
                                                </div>
                                                <div class="pull-right bottom-10 countdown visible-xs" style="display: none">
                                                    Còn lại
                                                    <span class="number">300</span>
                                                    kí tự
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 top-10">
                                <div class="form-group">
                                    <div id="shipping_packages">
                                        <div class="shipping_package" package="standard">
                                            <label>
                                                <input type="radio" value="standard" checked="checked" name="cart[shipping_package]" id="cart_shipping_package_standard">
                                                <div class="shipping_info">
                                                    <div class="shipping_name">Giao hàng tiêu chuẩn</div>
                                                    <div class="shipping_description" id="estimate_arrival_ship_from">
                                                        Bạn sẽ nhận được hàng sau 1 - 5 ngày làm việc tùy vào địa chỉ giao hàng. Đơn hàng trên 800,000 đ sẽ được miễn phí vận chuyển
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="shipping_package" package="user_pickup">
                                            <label>
                                                <input type="radio" value="user_pickup" name="cart[shipping_package]" id="cart_shipping_package_user_pickup">
                                                <div class="shipping_info">
                                                    <div class="shipping_name">Đến store nhận hàng</div>
                                                    <div class="shipping_description" id="estimate_arrival_ship_from">
                                                        Địa chỉ: số 16 Phạm Ngọc Thạch, Quận 3, Ho Chi Minh City, Vietnam.
                                                        Thời gian nhận hàng: 1-3 ngày sau khi giao dịch thanh toán thành công. Lixibox sẽ thông báo qua SMS, email hoặc điện thoại khi đơn hàng sẵn sàng.

                                                    </div>
                                                    <br>
                                                    <div id="pickup_option_user_info" style="display: none">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                    <label for="cart_last_name">Họ và chữ đệm *</label>
                                                                    <input type="text" name="user_pickup[last_name]" id="user_pickup_last_name" class="half form-control">

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                    <label for="cart_first_name">Tên Người Nhận *</label>
                                                                    <input type="text" name="user_pickup[first_name]" id="user_pickup_first_name" class="half form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                    <label for="cart_phone">Điện Thoại Người Nhận *</label>
                                                                    <input type="text" name="user_pickup[phone]" id="user_pickup_phone" class="half form-control">

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                    <label for="cart_phone">Email Người Nhận *</label>
                                                                    <input type="text" name="user_pickup[email]" id="user_pickup_email" class="half form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="shipping_package" package="same_day" style="display: none;">
                                            <label>
                                                <input type="radio" value="same_day" name="cart[shipping_package]" id="cart_shipping_package_same_day">
                                                <div class="shipping_info">
                                                    <div class="shipping_name">
                                                        Giao hàng trong ngày
                                                    </div>
                                                    <div class="shipping_description">
                                                        Lixibox sẽ giao hàng cho bạn ngay trong ngày. Những đơn hàng xác nhận sau 10:00 sẽ được giao vào sáng ngày làm việc tiếp theo. Phí dịch vụ trong khoảng: 30,000 đ - 80,000 đ
                                                        <div>
                                                            <i>* Chỉ áp dụng cho một số quận tại TP Hồ Chí Minh</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel panel-default panel-lx-simple no-border" id="billing_login_option">
                                    <div class="panel-heading">
                                        <div class="radio">
                                            <label class="text-bold">
                                                <input type="radio" value="false" checked="checked" name="cart[guest]" id="cart_guest_false">
                                                Đăng nhập bằng tài khoản
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default panel-lx-simple no-border" id="new_billing" role="tab">
                                    <div class="panel-heading">
                                        <div class="radio">
                                            <label class="text-bold">
                                                <input type="radio" value="true" name="cart[guest]" id="cart_guest_true">
                                                Đặt hàng không cần tài khoản
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body bottom-radius-5 with-border" id="new_billing_fillin_form">
                                        <div class="col-xs-12 no-padding">
                                            <div class="form-group">
                                                <div class="col-xs-6 no-padding">
                                                    <div class="form-group">
                                                        <label for="cart_last_name">Họ và chữ đệm *</label>
                                                        <input class="half form-control" type="text" name="cart[last_name]" id="cart_last_name">

                                                    </div>
                                                </div>
                                                <div class="col-xs-6 no-padding-right">
                                                    <div class="form-group">
                                                        <label for="cart_first_name">Tên Người Nhận *</label>
                                                        <input class="half form-control" type="text" name="cart[first_name]" id="cart_first_name">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xs-12">
                                                    <label for="cart_phone">Điện Thoại Người Nhận *</label>
                                                </div>
                                                <div class="col-xs-12">
                                                    <input class="half form-control" type="text" name="cart[phone]" id="cart_phone">
                                                </div>
                                                <div class="col-xs-12">

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group row" id="shipping_email">
                                                <div class="col-xs-12">
                                                    <label for="cart_email">Email nhận thông tin đơn hàng *</label>
                                                </div>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="email" name="cart[email]" id="cart_email">
                                                </div>
                                                <div class="col-xs-12">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xs-12">
                                                    <label for="cart_address">Địa Chỉ Giao Hàng *</label>
                                                </div>
                                                <div class="col-xs-12">
                                                    <input placeholder="Số nhà, tên đường / thôn, xóm" class="form-control" type="text" name="cart[address]" id="cart_address">
                                                </div>
                                                <div class="col-xs-12">

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xs-12">
                                                    <label for="cart_province_id">Tỉnh / Thành Phố *</label>
                                                </div>
                                                <div class="col-xs-12">
                                                    <select class="form-control" name="cart[province_id]" id="cart_province_id"><option value="">Chọn Tỉnh / Thành Phố</option>
                                                        <option value="1">Hà Nội</option>
                                                        <option value="79">Hồ Chí Minh</option>
                                                        <option value="89">An Giang</option>
                                                        <option value="77">Bà Rịa - Vũng Tàu</option>
                                                        <option value="24">Bắc Giang</option>
                                                        <option value="6">Bắc Kạn</option>
                                                        <option value="95">Bạc Liêu</option>
                                                        <option value="27">Bắc Ninh</option>
                                                        <option value="83">Bến Tre</option>
                                                        <option value="74">Bình Dương</option>
                                                        <option value="52">Bình Định</option>
                                                        <option value="70">Bình Phước</option>
                                                        <option value="60">Bình Thuận</option>
                                                        <option value="96">Cà Mau</option>
                                                        <option value="92">Cần Thơ</option>
                                                        <option value="4">Cao Bằng</option>
                                                        <option value="48">Đà Nẵng</option>
                                                        <option value="66">Đắk Lắk</option>
                                                        <option value="67">Đắk Nông</option>
                                                        <option value="11">Điện Biên</option>
                                                        <option value="75">Đồng Nai</option>
                                                        <option value="87">Đồng Tháp</option>
                                                        <option value="64">Gia Lai</option>
                                                        <option value="2">Hà Giang</option>
                                                        <option value="35">Hà Nam</option>
                                                        <option value="42">Hà Tĩnh</option>
                                                        <option value="30">Hải Dương</option>
                                                        <option value="31">Hải Phòng</option>
                                                        <option value="93">Hậu Giang</option>
                                                        <option value="17">Hòa Bình</option>
                                                        <option value="33">Hưng Yên</option>
                                                        <option value="56">Khánh Hòa</option>
                                                        <option value="91">Kiên Giang</option>
                                                        <option value="62">Kon Tum</option>
                                                        <option value="12">Lai Châu</option>
                                                        <option value="68">Lâm Đồng</option>
                                                        <option value="20">Lạng Sơn</option>
                                                        <option value="10">Lào Cai</option>
                                                        <option value="80">Long An</option>
                                                        <option value="36">Nam Định</option>
                                                        <option value="40">Nghệ An</option>
                                                        <option value="37">Ninh Bình</option>
                                                        <option value="58">Ninh Thuận</option>
                                                        <option value="25">Phú Thọ</option>
                                                        <option value="54">Phú Yên</option>
                                                        <option value="44">Quảng Bình</option>
                                                        <option value="49">Quảng Nam</option>
                                                        <option value="51">Quảng Ngãi</option>
                                                        <option value="22">Quảng Ninh</option>
                                                        <option value="45">Quảng Trị</option>
                                                        <option value="94">Sóc Trăng</option>
                                                        <option value="14">Sơn La</option>
                                                        <option value="72">Tây Ninh</option>
                                                        <option value="34">Thái Bình</option>
                                                        <option value="19">Thái Nguyên</option>
                                                        <option value="38">Thanh Hóa</option>
                                                        <option value="46">Thừa Thiên - Huế</option>
                                                        <option value="82">Tiền Giang</option>
                                                        <option value="84">Trà Vinh</option>
                                                        <option value="8">Tuyên Quang</option>
                                                        <option value="86">Vĩnh Long</option>
                                                        <option value="26">Vĩnh Phúc</option>
                                                        <option value="15">Yên Bái</option></select>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-xs-6 no-padding">
                                                    <div class="form-group">
                                                        <label for="cart_Quận *">Quận *</label>
                                                        <select class="half form-control" name="cart[district_id]" id="cart_district_id"><option value="">Chọn quận / huyện</option></select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-6 no-padding-right">
                                                    <div class="form-group">
                                                        <label for="cart_Phường / xã">Phường / xã</label>
                                                        <input placeholder="Phường / xã" class="half form-control" type="text" name="cart[ward]" id="cart_ward">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group order_note_wrapper">
                                    <div class="checkbox">
                                        <label class="text-bold">
                                            <input name="cart[note]" type="hidden" value="0"><input id="note" type="checkbox" value="1" name="cart[note]">
                                            Thêm ghi chú cho đơn hàng (nếu có)
                                        </label>
                                    </div>
                                    <textarea class="form-control hidden" placeholder="Ghi chú thêm cho đơn hàng (không bắt buộc)" name="cart[note]" id="cart_note"></textarea>
                                </div>
                                <div class="form-actions top-20 bottom-20">
                                    <div class="col-xs-5 top-5 no-padding-right">
                                        <a class="btn lx-btn-light lx-btn-light-gray btn-back lx-btn-less-border btn-block" href="/"><i class="fa fa-arrow-left"></i>
                                            Mua thêm
                                        </a></div>
                                    <div class="col-xs-7 padding-left-5">
                                        <button name="button" type="submit" class="btn lx-btn-primary btn-block btn-less-border" id="continue">TIẾP TỤC
                                            <i class="fa fa-arrow-right"></i>
                                        </button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
            <div class="right_panel col-md-7 col-sm-12 col-xs-12" id="cart_info">
                <div class="row" id="order_details">
                    <div class="mobile visible-xs">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 visible-xs visible-sm top-20">
                                    <button class="btn lx-btn-outline btn-block" id="has_discount_code" style="border-radius: 3px; ">
                                        Bạn có mã giảm giá? Bấm nhập ngay.
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="title top-20" id="btn_show_cart_detail">
                            <i class="fa fa-shopping-cart"></i>
                            <strong>Giỏ Hàng Của Bạn</strong>
                            <span class="number hidden">(3) sản phẩm</span>
                            <i class="fa fa-angle-right pull-right text-bold arrow top-5"></i>
                        </div>
                    </div>
                    <div class="no-border checkout" id="cart_adjusting">
                        <div class="col-md-12 no-padding" id="cart_details">
                            <div class="body desktop hidden-xs" id="desktop_cart_items">
                                <div class="col-sm-12 cart-item-list">
                                    <div class="cart-title">
                                        <i class="fa fa-shopping-cart"></i>
                                        <strong>Giỏ Hàng Của Bạn</strong>
                                        <span class="number">(3)</span>
                                    </div>
                                    <div class="cart-items">
                                        <div box_id="5964" class="row cart-item" purchase_type="normal">
                                            <div class="cart-item-picture">
                                                <a class="text-black" href="/shop/lixibox-party-on-the-go"><img class="img-responsize" src="https://upload.lixibox.com/system/pictures/files/000/024/165/small/1510221994.jpg" alt="1510221994" width="70" height="47">
                                                </a></div>
                                            <div class="cart-item-details">
                                                <p class="text-uppercase text-bold truncate">
                                                    <a class="text-black" href="/shop/lixibox-party-on-the-go">Lixibox Favorites - Party on the go!</a>
                                                </p><div class="col-sm-12 error-help-block">

                                                </div>
                                                <p></p>
                                                <div class="row top-5">
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info">Beauty box</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity-control">
                                                <a class="decrease text-black" disabled="disabled" href="#"><i class="fa fa-minus"></i></a>
                                                <span class="quantity square-30 border-1c">1</span>
                                                <a id="increase_5964" class="increase text-black" data-remote="true" rel="nofollow" data-method="post" href="/cart/increase_box/lixibox-party-on-the-go?purchase_type=0"><i class="fa fa-plus"></i></a>
                                            </div>
                                            <div class="price-and-action">
                                                <p class="price text-bold">
                                                    550,000 đ
                                                </p>
                                                <a class="remove_box color-dark-gray" data-confirm="Bạn có chắc xóa sản phẩm khỏi giỏ hàng không?" data-remote="true" rel="nofollow" data-method="delete" href="/cart/remove_box/lixibox-party-on-the-go?purchase_type=0"><i class="fa fa-trash-o"></i> Bỏ</a>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                            </div>
                                        </div>

                                        <div box_id="5963" class="row cart-item" purchase_type="normal">
                                            <div class="cart-item-picture">
                                                <a class="text-black" href="/shop/hot-fun-in-the-summertime"><img class="img-responsize" src="https://upload.lixibox.com/system/pictures/files/000/025/705/small/1519788040.png" alt="1519788040" width="70" height="47">
                                                </a></div>
                                            <div class="cart-item-details">
                                                <p class="text-uppercase text-bold truncate">
                                                    <a class="text-black" href="/shop/hot-fun-in-the-summertime">Hot Fun In The Summertime</a>
                                                </p><div class="col-sm-12 error-help-block">

                                                </div>
                                                <p></p>
                                                <div class="row top-5">
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info">Beauty box</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity-control">
                                                <a id="decrease_5963" class="decrease text-black" data-remote="true" rel="nofollow" data-method="post" href="/cart/decrease_box/hot-fun-in-the-summertime?purchase_type=0"><i class="fa fa-minus"></i></a>
                                                <span class="quantity square-30 border-1c">2</span>
                                                <a id="increase_5963" class="increase text-black" data-remote="true" rel="nofollow" data-method="post" href="/cart/increase_box/hot-fun-in-the-summertime?purchase_type=0"><i class="fa fa-plus"></i></a>
                                            </div>
                                            <div class="price-and-action">
                                                <p class="price text-bold">
                                                    1,980,000 đ
                                                </p>
                                                <a class="remove_box color-dark-gray" data-confirm="Bạn có chắc xóa sản phẩm khỏi giỏ hàng không?" data-remote="true" rel="nofollow" data-method="delete" href="/cart/remove_box/hot-fun-in-the-summertime?purchase_type=0"><i class="fa fa-trash-o"></i> Bỏ</a>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="mobile visible-xs text-center" id="mobile_cart_items">
                                <div class="body padding-15 hidden">
                                    <div class="cart-items">
                                        <div box_id="5964" class="row cart-item" purchase_type="normal">
                                            <div class="cart-item-picture">
                                                <a class="text-black" href="/shop/lixibox-party-on-the-go"><img class="img-responsize" src="https://upload.lixibox.com/system/pictures/files/000/024/165/small/1510221994.jpg" alt="1510221994" width="70" height="47">
                                                </a></div>
                                            <div class="cart-item-details">
                                                <p class="text-uppercase text-bold truncate">
                                                    <a class="text-black" href="/shop/lixibox-party-on-the-go">Lixibox Favorites - Party on the go!</a>
                                                </p><div class="col-sm-12 error-help-block">

                                                </div>
                                                <p></p>
                                                <div class="row top-5">
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info">Beauty box</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity-control">
                                                <a class="decrease text-black" disabled="disabled" href="#"><i class="fa fa-minus"></i></a>
                                                <span class="quantity square-30 border-1c">1</span>
                                                <a id="increase_5964" class="increase text-black" data-remote="true" rel="nofollow" data-method="post" href="/cart/increase_box/lixibox-party-on-the-go?purchase_type=0"><i class="fa fa-plus"></i></a>
                                            </div>
                                            <div class="price-and-action">
                                                <p class="price text-bold">
                                                    550,000 đ
                                                </p>
                                                <a class="remove_box color-dark-gray" data-confirm="Bạn có chắc xóa sản phẩm khỏi giỏ hàng không?" data-remote="true" rel="nofollow" data-method="delete" href="/cart/remove_box/lixibox-party-on-the-go?purchase_type=0"><i class="fa fa-trash-o"></i> Bỏ</a>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                            </div>
                                        </div>

                                        <div box_id="5963" class="row cart-item" purchase_type="normal">
                                            <div class="cart-item-picture">
                                                <a class="text-black" href="/shop/hot-fun-in-the-summertime"><img class="img-responsize" src="https://upload.lixibox.com/system/pictures/files/000/025/705/small/1519788040.png" alt="1519788040" width="70" height="47">
                                                </a></div>
                                            <div class="cart-item-details">
                                                <p class="text-uppercase text-bold truncate">
                                                    <a class="text-black" href="/shop/hot-fun-in-the-summertime">Hot Fun In The Summertime</a>
                                                </p><div class="col-sm-12 error-help-block">

                                                </div>
                                                <p></p>
                                                <div class="row top-5">
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info">Beauty box</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="cart-item-info"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity-control">
                                                <a id="decrease_5963" class="decrease text-black" data-remote="true" rel="nofollow" data-method="post" href="/cart/decrease_box/hot-fun-in-the-summertime?purchase_type=0"><i class="fa fa-minus"></i></a>
                                                <span class="quantity square-30 border-1c">2</span>
                                                <a id="increase_5963" class="increase text-black" data-remote="true" rel="nofollow" data-method="post" href="/cart/increase_box/hot-fun-in-the-summertime?purchase_type=0"><i class="fa fa-plus"></i></a>
                                            </div>
                                            <div class="price-and-action">
                                                <p class="price text-bold">
                                                    1,980,000 đ
                                                </p>
                                                <a class="remove_box color-dark-gray" data-confirm="Bạn có chắc xóa sản phẩm khỏi giỏ hàng không?" data-remote="true" rel="nofollow" data-method="delete" href="/cart/remove_box/hot-fun-in-the-summertime?purchase_type=0"><i class="fa fa-trash-o"></i> Bỏ</a>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 with-promotions no-padding" id="cart_total">
                            <div class="col-sm-5 col-xs-12 promotions text-center hidden-xs">
                                <h3 style="font-size: 22px;">Bạn sẽ được nhận 2530 Lixicoin khi mua hàng</h3>
                                <p class="color-dark-gray">Thêm Lixicoin thêm nhiều ưu đãi cho box tiếp theo như được tặng sample dùng thử, mã giảm giá, free shipping, mua lẻ sản phẩm,...</p>
                            </div>
                            <div class="col-sm-7 col-xs-12 extra hidden-xs" id="cart_fee">
                                <table class="table simple top-15" id="sheet_price">
                                    <tbody><tr>
                                        <th class="fixed_85">Thành tiền</th>
                                        <td class="subtotal subtotal-price text-bold">2,530,000 đ</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Phí vận chuyển</th>
                                        <td id="order_shipping">
                                            Phí vận chuyển sẽ được tính lúc thanh toán.

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Mã giảm giá
                                        </th>
                                        <td class="js_discount_area">
                                        </td>
                                    </tr>

                                    </tbody></table>
                                <div class="row js_discount_form">
                                    <form class="top-10 form-fat form-discount-code" action="/cart/discount_code" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
                                        <div class="form-group col-xs-7 discount_input padding-right-5">
                                            <input type="text" name="discount_code" id="discount_code" class="form-control" placeholder="Nhập mã giảm giá" onclick="$(this).select()">


                                        </div>
                                        <div class="col-xs-5 discount-apply-button padding-left-5">
                                            <input type="submit" name="commit" value="ÁP DỤNG" class="btn lx-btn-light lx-btn-light-gray btn-less-border btn-block" id="apply_discount_code" data-disable-with="ÁP DỤNG...">
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>


                                </div>
                                <div class="title total-cart-price clearfix">
                                    <div class="pull-left">
                                        <strong>Tổng cộng:</strong>
                                    </div>
                                    <div class="pull-right">
                                        <span class="price color-pink text-bold">2,530,000 đ</span>
                                    </div>
                                </div>

                                <div class="row visible-xs">
                                    <div class="col-xs-12 bottom-20">
                                        <button class="btn lx-btn-primary btn-block btn-less-border" id="next_step">
                                            TIẾP TỤC
                                            <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="mobile col-xs-12 promotions text-center visible-xs">
                    <div class="messages">
                        <h3 style="font-size: 22px;">Bạn sẽ được nhận 2530 Lixicoin khi mua hàng</h3>
                        <p class="color-dark-gray">Thêm Lixicoin thêm nhiều ưu đãi cho box tiếp theo như được tặng sample dùng thử, mã giảm giá, free shipping, mua lẻ sản phẩm,...</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <script>
                $(function(){
                    if ($("#discount_code").length > 0) {
                        $("#has_discount_code").removeClass('hidden').click(function() {
                            $(this).hide();
                            $("#btn_show_cart_detail").click();
                            animateBodyScroll($('.form-discount-code').offset().top - 240);
                            $("#discount_code").css({
                                "border-color": "#333",
                                "border-width": "2px"
                            }).addClass('animated tada');
                        });
                    }
                    $("#next_step").click(function() {
                        $("#continue").click();
                    });
                });

                function makeEqualHeights() {
                    var env = findBootstrapEnvironment();
                    if ((env === 'xs') || (env === 'sm')) {
                        $("#footer").css({marginBottom: "50px"});
                        return;
                    }
                    var h1 = $("#checkout_form .panel_body").outerHeight(true) + 28,
                        h2 = $("#cart_info .panel_body").outerHeight(true) + 28,
                        h = Math.max(h1,h2);
                    //$("#checkout_form").height(h);
                    //$("#cart_info").height(h);
                }
                $(document).ready(function() {
                    $("#btn_show_cart_detail").on("click", function(){
                        $(this).find(".number").removeClass("hidden");
                        $(this).find(".fa.arrow").addClass("hidden");
                        $(this).addClass("text-center");
                        $("#cart_adjusting #cart_details .mobile .body").removeClass("hidden");
                        $("#cart_adjusting #cart_total .extra").removeClass("hidden-xs");

                    });
                    makeEqualHeights();

                    $("#cart_details .decrease").on("click", function(){
                        var quantity = $(this).closest(".item-quantity").find(".box-quantity-adjusting").val();
                        if(quantity <= 1){
                            return false;
                        }
                    });

                    $("#cart_details .increase").on("click", function(){
                        var quantity = $(this).closest(".item-quantity").find(".box-quantity-adjusting").val();
                        if(quantity > 2){
                            return false;
                        }
                    });

                    $(".form-discount-code input[type='submit']").on("click", function(){
                        var guest = $("input[name='cart[guest]']:checked").val();
                        $(".form-discount-code input[name='checkout_as_guest']").val(guest);
                        $(this).closest("form").submit();
                    });
                });
            </script>

            <div class="col-md-4 col-xs-8">
                <div class="modal" id="ask_account" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="init-block">
                                    <div class="title">
                                        <div class="text">Bạn muốn đặt hàng bằng tài khoản nào ?</div>
                                    </div>
                                    <a class="btn facebook-btn btn-block btn-less-border" href="/omniauth/facebook?origin=%2Fcart%2Fcheckout%3Fomniauth%3Dtrue"><i class="fa fa-facebook"></i>
                                        Đăng nhập bằng Facebook
                                    </a><a class="btn lx-btn-black btn-less-border btn-block" id="order_without_signed_in_btn" href="#">Đặt hàng không cần tài khoản</a>
                                    <a class="btn lx-btn-primary btn-less-border btn-block" id="account_login_btn" href="#">Đăng nhập tài khoản</a>
                                    <div class="current-cart-price">
                                        <span>Giỏ hàng của bạn:</span>
                                        2,530,000 đ
                                    </div>
                                    <div class="messages">
                                        <div class="head">BẠN CÓ BIẾT BẠN ĐƯỢC:</div>
                                        <p>Miễn phí giao hàng khi mua trên 800,000 </p>
                                        <a class="btn btn-light btn-less-border" href="/"><i class="fa fa-arrow-left"></i>
                                            Mua thêm để được giảm
                                        </a></div>
                                </div>
                                <div class="login-form clearfix hidden">
                                    <div class="title text-bold">
                                        <div class="back-icon pull-left" id="back-popup"><i class="fa fa-arrow-left"></i></div>
                                        <span class="text">Đăng Nhập</span>
                                    </div>
                                    <div class="login-register cart-form active row" id="user_register">
                                        <div class="form-content col-xs-12" id="login_form">
                                            <form role="form" class="form-fat" id="new_user" action="/users/sign_in" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="login_for" id="login_for" value="checkout">
                                                <div class="form-group error-message hidden text-center"></div>
                                                <div class="form-group">
                                                    <label for="user_Email của bạn">Email của bạn</label>
                                                    <input class="form-control" placeholder="Nhập email" type="email" name="user[email]" id="user_email">

                                                </div>
                                                <div class="form-group" id="password-field">
                                                    <label for="user_Mật khẩu">Mật khẩu</label>
                                                    <input class="form-control" placeholder="Mật khẩu" type="password" name="user[password]" id="user_password">
                                                </div>
                                                <div class="top-20 buttons" id="login_button">
                                                    <input type="submit" name="commit" value="Đăng nhập tài khoản" class="btn lx-btn-primary btn-block btn-less-border">
                                                </div>
                                                <div class="top-10 form-group row" id="helper_links">
                                                    <div class="col-xs-6 padding-right-5">
                                                        <a class="btn btn-block lx-btn-light lx-btn-light-gray btn-none-border" href="/users/password/new">Quên Mật Khẩu</a>
                                                    </div>
                                                    <div class="col-xs-6 padding-left-5 form-group">
                                                        <a class="btn btn-block lx-btn-light lx-btn-light-gray btn-none-border" href="/users/sign_up">Đăng Ký Miễn Phí</a>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <div class="or text-center">
                                                        <div class="or-text">Hoặc</div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <a class="btn facebook-btn btn-block btn-less-border" href="/omniauth/facebook?origin=%2Fcart%2Fcheckout%3Fomniauth%3Dtrue"><i class="fa fa-facebook"></i>
                                                        Đăng nhập bằng Facebook
                                                    </a></div>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function(){
                        if(true) {
                            $("#ask_account").modal({
                                keyboard: false,
                                backdrop: 'static'
                            });
                        }
                        $("#order_without_signed_in_btn").on("click", function(){
                            $("#shipping_form .panel-body").removeClass("hidden");
                            $("#cart_guest_true").prop("checked", true).trigger("change");
                            $("#ask_account").modal("hide");
                        });

                        $("#account_login_btn").on("click", function(){
                            $(this).closest(".modal-body").find(".login-form").removeClass("hidden");
                            $(this).closest(".init-block").addClass("hidden");
                            $("#back-popup").removeClass("hidden");
                        });

                        $("#back-popup").on("click", function(){
                            $(this).closest(".modal-body").find(".init-block").removeClass("hidden");
                            $(this).closest(".login-form").addClass("hidden");
                            $(this).addClass("hidden");
                        });
                    });
                </script>

            </div>
        </div>
    </div>
    <script>
        window.cart.showGiftModal("/cart/gift_boxes");
        $(document).ready(function() {
            $("#show_signup_tab").on("click", function() {
                $("#user_login").hide();
                $("#user_register").show();
                $(this).addClass("active");
                $('#show_login_tab').removeClass("active");
                return false;
            });

            $("#show_login_tab").on("click", function() {
                $("#user_register").hide();
                $("#user_login").show();
                $(this).addClass("active");
                $('#show_signup_tab').removeClass("active");
                return false;
            });

            $('#show_login_tab a, #show_signup_tab a').click(function(event) {
                event.preventDefault();
            });

            // Address system
            if($('#cart_province_id').val() != '' && $('#cart_district_id').val() == '') {
                updateDistrict($('#cart_province_id').val(), $('#cart_district_id'));
            }

            $('#cart_province_id').change(function(){
                updateDistrict($(this).val(), $('#cart_district_id'));
            });
        });
    </script>
    <script>
        setTimeout(function() {
            window._fbq = window._fbq || [];
            var fbTrackOptions = JSON.parse('{\"num_items\":2,\"value\":2530000,\"currency\":\"VND\",\"content_name\":\"Cart\",\"content_category\":\"Cart\",\"content_ids\":[5963,5964]}');
            if (true) {
                window._fbq.push(['track', 'InitiateCheckout', fbTrackOptions]);
            } else {
                console.log("InitiateCheckout", fbTrackOptions);
            }
        }, 300);
    </script>


</div>
