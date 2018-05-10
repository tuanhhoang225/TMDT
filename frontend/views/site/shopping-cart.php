<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 5/10/2018
 * Time: 9:36 AM
 */

use common\helpers\FunctionHelper;
use common\models\User;
use common\models\Product;
use common\models\Category;
use yii\helpers\Url;
use yii\helpers\Html;

$user = null;

if (!Yii::$app->user->isGuest) {
    $user = findU(Yii::$app->user->identity->getId());
}
function findU($id)
{
    if (($model = User::findOne($id)) !== null) {
        return $model;
    }
    return false;
}

function findProduct($id)
{
    if (($model = Product::findOne($id)) !== null) {
        return $model;
    }
    return false;
}

function findCategory($id)
{
    if (($model = Category::findOne($id)) !== null) {
        return $model;
    }
    return false;
}

$carts = FunctionHelper::get_shopping_cart_by_user_id($user['id']);
$this->title = "Giỏ Hàng";

?>
<div id="content">
    <div class="container fix_width">
        <div id="desktop_partial_carts_cart">
            <div class="mt-20 mb-30" id="cart_show">
                <div class="row" id="cart_navigation">
                    <div class="col-md-4 cart-buttons pull-right">
                        <a class="btn btn-light btn-less-border pull-left padding-sm" href="/"><i
                                    class="fa fa-arrow-left"></i>
                            Mua thêm
                        </a><a class="place-order-btn btn lx-btn-primary btn-less-border pull-right padding-width-20"
                               data-toggle="modal" href="#add_on_boxes_modal">ĐẶT HÀNG
                            <i class="fa fa-arrow-right"></i>
                        </a></div>
                    <div class="clearfix"></div>
                </div>

                <div class="row no-padding top-20 desktop-display-flex" id="cart_adjusting">
                    <div class="col-md-8 min-height-285">
                        <div class="row">
                            <div class="col-sm-12" id="desktop_cart_items">
                                <div class="col-sm-12 cart-item-list">
                                    <div class="cart-title">
                                        <i class="fa fa-shopping-cart"></i>
                                        <strong>Giỏ Hàng Của Bạn</strong>
                                        <span class="number">(<?= count($carts)?>)</span>
                                    </div>
                                    <div class="cart-items">
                                        <?php foreach ($carts as $key => $value): ?>
                                            <?php $product = findProduct($value['product_id'])?>
                                            <div box_id="5964" class="row cart-item" purchase_type="normal">
                                                <div class="cart-item-picture">
                                                    <a class="text-black"
                                                       href="<?= Url::to(['site/view', 'category_slug' => findCategory($product['category_id'])['slug'], 'content_slug' => $product['slug']]) ?>"><img
                                                                class="img-responsize"
                                                                src="<?= $product['avatar']?>"
                                                                alt="1510221994" width="70" height="47">
                                                    </a></div>
                                                <div class="cart-item-details">
                                                    <p class="text-uppercase text-bold truncate">
                                                        <a class="text-black" href="<?= Url::to(['site/view', 'category_slug' => findCategory($product['category_id'])['slug'], 'content_slug' => $product['slug']]) ?>"><?= $product['title']?></a>
                                                    </p>
                                                    <div class="col-sm-12 error-help-block">

                                                    </div>
                                                    <p></p>
                                                    <div class="row top-5">
                                                        <div class="col-md-6">
                                                            <div class="cart-item-info"><?= findCategory($product['category_id'])['title']?></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="cart-item-info"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quantity-control">
                                                    <a class="decrease text-black" disabled="disabled" href="#"><i
                                                                class="fa fa-minus"></i></a>
                                                    <span class="quantity square-30 border-1c"><?= $value['quantily']?></span>
                                                    <a id="increase_5964" class="increase text-black" data-remote="true"
                                                       rel="nofollow" data-method="post"
                                                       href=""><i
                                                                class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="price-and-action">
                                                    <p class="price text-bold">
                                                        <?= $product['price']*$value['quantily']?>
                                                    </p>
                                                    <?= Html::a(Yii::t('app', '<i class="fa fa-trash-o"></i>'), ['shopping-cart/delete', 'id' => $value['id']], [
                                                        'data' => [
                                                            'confirm' => Yii::t('app', 'Bạn chắc chắn bỏ mạt hàng này?'),
                                                            'method' => 'post',
                                                        ],
                                                    ]) ?>
                                                </div>
                                                <div class="col-sm-12 text-right">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 min-height-260">
                        <div class="border-1c padding-15 md-fullbox min-height-285" id="cart_fee">
                            <table class="table simple top-15" id="sheet_price">
                                <tbody>
                                <tr>
                                    <th class="fixed_85">Thành tiền</th>
                                    <td class="subtotal subtotal-price text-bold">1,540,000 đ</td>
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

                                </tbody>
                            </table>
                            <div class="row js_discount_form">
                                <form class="top-10 form-fat form-discount-code" action="/cart/discount_code"
                                      accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8"
                                                                                                     type="hidden"
                                                                                                     value="✓">
                                    <div class="form-group col-xs-7 discount_input padding-right-5">
                                        <input type="text" name="discount_code" id="discount_code" class="form-control"
                                               placeholder="Nhập mã giảm giá" onclick="$(this).select()">


                                    </div>
                                    <div class="col-xs-5 discount-apply-button padding-left-5">
                                        <input type="submit" name="commit" value="ÁP DỤNG"
                                               class="btn lx-btn-light lx-btn-light-gray btn-less-border btn-block"
                                               id="apply_discount_code" data-disable-with="ÁP DỤNG...">
                                    </div>
                                    <div class="clearfix"></div>
                                </form>


                            </div>
                            <div class="title total-cart-price clearfix">
                                <div class="pull-left">
                                    <strong>Tổng cộng:</strong>
                                </div>
                                <div class="pull-right">
                                    <span class="price color-pink text-bold">1,540,000 đ</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
    <div class="modal fade modal-fullscreen-mobile full-height" id="add_on_boxes_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn btn-default btn-less-border btn-padding-lg pull-left" data-dismiss="modal"
                            type="button">
                        <i class="fa fa-arrow-left"></i>
                        GIỎ HÀNG
                    </button>
                    <a class="btn lx-btn-primary btn-less-border btn-padding-lg pull-right" href="/cart/checkout">ĐẶT
                        HÀNG NGAY
                        <i class="fa fa-arrow-right"></i>
                    </a></div>
                <div class="modal-body">
                    <h4 class="text-bold">Ưu đãi hôm nay</h4>
                    <p class="bottom-20">Những sản phẩm có giá ưu đãi trong ngày dành cho bạn!</p>
                    <div class="row boxes">
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="371" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/000/398/medium/1436241443.jpg?1462704329)"></div>
                                        <div class="box_name">Banila Co Clean It Zero sherbet type 7gr</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            50 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            70 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        Banila Co. Clean It Zero là sản phẩm tẩy trang được ưa chuộng nhất tại Hàn Quốc
                                        với nhiều giải thưởng đặc biệt. Kem tẩy trang dạng balm không chảy dớt lập tức
                                        chuyển thành lớp dầu mịn màng khi được xoa lên da. Công thức sản phẩm có khả
                                        năng tẩy trang xuất sắc, cuốn sạch bụi bẩn mà không để lại nhờn dính hay làm mất
                                        đi các chất dưỡng ẩm cần thiết cho da. Công thức sản phẩm dịu nhẹ với chiết xuất
                                        Đu Đủ tự nhiên giúp tẩy sạch các tế bào chết vs chiết xuất Acerola giàu Vitamin
                                        C giúp dưỡng da trắng sáng. Sản phẩm phù hợp cho mọi loại da.
                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="371">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="3510" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/014/524/medium/1500356498.png)"></div>
                                        <div class="box_name">The Duo Rain Drop</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            200 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            250 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        Set 2 miếng mút tán kem nền đa chức năng 3 trong 1 của the Duo Rain drop. Mút có
                                        thể tán kem nền mọi vùng trên khuôn mặt: che khuyết điểm, mụn, cánh mũi, bề
                                        mặt... Cho lớp nền tiệp vào da, mịn màng, tự nhiên. Sản phẩm được các beauty
                                        guru trên thế giới hết sức ưa thích .

                                        the Duo Rain drop có thể sử dụng với mọi loại mỹ phẩm từ lỏng, gel tới kem đặc.
                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="3510">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="5677" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/286/medium/1511866900.png)"></div>
                                        <div class="box_name">OKAME Glossifying Keratin Shampoo - 500 ml</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            170 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            410 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        OKAME Glossifying Keratin Shampoo là một loại dầu gội dịu nhẹ, sẽ nhẹ nhàng làm
                                        sạch mái tóc của bạn mà không làm mất đi lượng dầu tự nhiên của da đầu. Dầu gội
                                        với thành phần chính là protein keratin được thuỷ phân, một loại protein có tác
                                        dụng bảo vệ tóc tránh khỏi những hư tổn, giúp cho mái tóc của bạn trở nên sáng
                                        bóng và khoẻ khoắn.
                                        Ngoài ra, tinh chất Keratin và Protein từ tơ tằm tạo ra một lớp mặt nạ, sẽ khoá
                                        tất cả độ ẩm của tóc, giúp nuôi dưỡng, phục hồi tóc , cho mái tóc độ mượt mà.
                                        Dầu gội OKAME Glossifying Keratin Shampoo phù hợp với mọi loại tóc, kể cả với
                                        những mái tóc hư tổn, và khô do tạo kiểu, uốn ép.


                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="5677">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="5679" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/278/medium/1511865280.png)"></div>
                                        <div class="box_name">OKAME Skin Replenishing Body Shower 500 ml</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            170 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            410 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        Sản phẩm sữa tắm OKAME Skin Replenishing Body Shower với dung dịch sữa tắm bông
                                        nhẹ, sẽ cuốn đi hết tất cả bụi bẩn và các chất gây hại đến làn da của cơ thể.
                                        Mang mùi hương tươi mát của hoa oải hương và chiết xuất hoa húng quế, sữa tắm
                                        Okame sẽ giúp duy trì độ ẩm, giảm viêm và làm sạch làn da cơ thể. Công thức của
                                        sữa tắm Okame Skin Replenishing Shower không chứa bất kì phụ phẩm từ động vật
                                        nào.

                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="5679">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="5683" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/333/medium/1512409543.png)"></div>
                                        <div class="box_name">OKAME Nourishing Hand Cream</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            100 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            120 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        Kem dưỡng tay cao cấp cung cấp dưỡng chất và sự thoải mái, bảo vệ tay bạn khỏi
                                        các ảnh hưởng độc hại từ môi trường. Khi sử dụng, chất kem thấm nhanh này sẽ
                                        khiến tay bạn trở nên mềm mại và được dưỡng ẩm một cách hoàn hảo.
                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="5683">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="5684" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/273/medium/1511859473.png)"></div>
                                        <div class="box_name">OKAME Herbal Repairing Body Lotion - 500 ml</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            170 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            410 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        Dưỡng thể cao cấp OKAME Herbal Repairing Body Lotion được phát triển với khả
                                        năng cung cấp độ ẩm cao cho cơ thể. Chất lotion lỏng nhẹ sẽ dễ dàng thấm sâu vào
                                        trong da sau khi tắm. Với thành phần bao gồm chiết xuất lá trà xanh với công
                                        dụng chống lão hoá, OKAME Herbal Body Lotion sẽ nuôi dưỡng và săn sóc làn da cơ
                                        thể, cho bạn một làn da đủ ẩm, mềm mại thoảng thoảng mùi hương nhẹ, thanh mát.

                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="5684">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="5686" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/024/283/medium/1511866646.png)"></div>
                                        <div class="box_name">OKAME Glossifying Keratin Conditioner - 500 ml</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            170 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            410 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        Dầu xả OKAME Glossifying Keratin được tạo thành với một công thức đặc biệt cung
                                        cấp liệu pháp cân bằng hoàn hảo giúp làm ẩm và suôn mượt cho tóc. Với thành phần
                                        chủ yếu là keratin và protein từ tơ tằm, sẽ giúp tái cấu trúc làm mượt các lớp
                                        biểu bì của tóc, chống lại nhiệt độ cao từ ánh nắng mặt trời, độ ẩm và các tác
                                        nhân gây hại. Ngay cả những sợi tóc hư tổn nhất sẽ trở nên bóng khoẻ, cho phép
                                        ngón tay của bạn để lướt nhẹ nhàng từ gốc đến ngọn.

                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="5686">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div box_id="5705" class="box_card">
                                <div class="toggle-card">
                                    <div class="toggle-front toggle-info">
                                        <div class="box_image"
                                             style="background-image: url(https://upload.lixibox.com/system/pictures/files/000/023/900/medium/1507883715.png)"></div>
                                        <div class="box_name">Lixibox Massaging Hair Brush</div>
                                        <div class="box_price_sm top-10">
                                            Ưu đãi:
                                            150 K
                                        </div>
                                        <s class="box_old_price">
                                            Giá gốc:
                                            200 K
                                        </s>
                                    </div>
                                    <div class="toggle-back toggle-info">
                                        Chiếc lược màu vàng nhỏ xinh với đầu gai thiết kế đặc biệt và 2 tầng lông chải
                                        mềm mại:
                                        - Gỡ rối tóc nhẹ nhàng.
                                        - Đầu gai massage giúp thư giãn da đầu, tăng tuần hoàn máu và kích thích mọc tóc
                                        hiệu quả.
                                        - Chất liệu mềm mại, nhẹ nhàng không làm đau hoặc trầy xước da đầu.
                                        - Thiết kế xinh xắn, nhỏ gọn, tiện lợi mang theo hằng ngày hoặc đi du lịch.
                                    </div>
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="5705">
                                    <input type="hidden" name="purchase_type" id="purchase_type" value="4">
                                    <input type="submit" name="commit" value="Thêm"
                                           class="btn lx-btn-primary btn-mini top-10 bottom-10" data-disable-with="...">
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        setTimeout(function () {
            window._fbq = window._fbq || [];
            var fbTrackOptions = JSON.parse('{\"num_items\":2,\"value\":1540000,\"currency\":\"VND\",\"content_name\":\"Cart\",\"content_category\":\"Cart\",\"content_ids\":[5963,5964]}');
            if (true) {
                window._fbq.push(['track', 'ViewContent', fbTrackOptions]);
            } else {
                console.log("ViewContent", fbTrackOptions);
            }
        }, 300);
    </script>

    <script>
        window.cart.showGiftModal("/cart/gift_boxes");
        $(window.initCartShow);
    </script>

</div>
