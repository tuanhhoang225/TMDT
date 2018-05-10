<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/20/2018
 * Time: 9:30 AM
 */

namespace common\helpers;

use common\models\Category;
use common\models\Image;
use common\models\OrderDetail;
use common\models\Post;
use common\models\Product;
use common\models\Setting;
use common\models\ShoppingCart;
use yii\web\BadRequestHttpException;
use fproject\components\DbHelper;
use PhpOffice\PhpSpreadsheet\IOFactory;
use common\models\Order;
use common\models\Shipping;

class FunctionHelper
{
    /**
     * @param null $limit
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    // lấy category nếu status ==1
    public static function get_categories($limit = null)
    {
        $query = Category::find()->where(['=', 'status', 1]);

        if ($limit) {
            $query->limit($limit);
        }

        //time()+7*3600;

        // date('Y-m-d H:i:s',time()+7*3600);

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param null $parent_id
     * @param null $limit
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    // Lấy dữ liệu category con
    public static function get_categories_by_parent_id($parent_id = null, $limit = null)
    {
        $query = Category::find()->where(['=', 'released', 1]);

        if ($parent_id) {
            $query->andWhere(['=', 'parent_id', $parent_id]);
        } else {
            $query->andWhere(['is', 'parent_id', NULL]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }
    public static function get_categories_by_parent_slug()
    {

    }

    /**
     * @param $slug
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_category_by_slug($slug)
    {
        return Category::find()
            ->joinWith('page')
            ->joinWith('posts')
            ->joinWith('products')
            ->where(['category.slug' => $slug])->asArray()->one();
    }


    public static function get_setting_by_key($key)
    {
        return Setting::find()
            ->where(['key' => $key])->asArray()->one();
    }


    public static function get_post_by_slug($slug)
    {
        return Post::find()
            ->joinWith('category')
            ->where(['post.slug' => $slug])->asArray()->one();
    }

    /**
     * @param $slug
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_product_by_slug($slug)
    {
        return Product::find()
            ->joinWith('category')
            ->where(['product.slug' => $slug])->asArray()->one();
    }

    /**
     * @param null $limit
     * @return mixed
     */
    public static function get_product($limit = null)
    {
        $query = Product::find();
        if ($limit) {
            $query->limit($limit);
        }
        return $limit == 1 ? $query->one() : $query->all();

    }

    public static function get_product_by_category($category_id,$limit=null){
        $query = Product::find()->where(['=','category_id',$category_id]);
        if ($limit) {
            $query->limit($limit);
        }
        return $limit == 1 ? $query->one() : $query->all();
    }

    public static function get_orderdetail_by_order($order_id,$limit=null){
        $query = OrderDetail::find()->where(['=','order_id',$order_id]);
        if ($limit) {
            $query->limit($limit);
        }
        return $limit == 1 ? $query->one() : $query->all();
    }


    /**
     * @param $str
     * @param string $strSymbol
     * @param int $case
     * @return mixed|string
     */
    public static function changeTitle($str, $strSymbol = '-', $case = MB_CASE_LOWER)
    {
        $str = trim($str);
        if ($str == "") return "";
        $str = str_replace('"', '', $str);
        $str = str_replace("'", '', $str);
        $str = FunctionHelper::stripUnicode($str);
        //$str = stripUnicode($str);
        $str = mb_convert_case($str, $case, 'utf-8');
        $str = preg_replace('/[\W|_]+/', $strSymbol, $str);
        return $str;
    }

    /**
     * @param $str
     * @return mixed|string
     */
    public static function stripUnicode($str)
    {
        if (!$str) return '';
        //$str = str_replace($a, $b, $str);
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|å|ä|æ|ā|ą|ǻ|ǎ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|Å|Ä|Æ|Ā|Ą|Ǻ|Ǎ',
            'ae' => 'ǽ',
            'AE' => 'Ǽ',
            'c' => 'ć|ç|ĉ|ċ|č',
            'C' => 'Ć|Ĉ|Ĉ|Ċ|Č',
            'd' => 'đ|ď',
            'D' => 'Đ|Ď',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|ë|ē|ĕ|ę|ė',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Ë|Ē|Ĕ|Ę|Ė',
            'f' => 'ƒ',
            'F' => '',
            'g' => 'ĝ|ğ|ġ|ģ',
            'G' => 'Ĝ|Ğ|Ġ|Ģ',
            'h' => 'ĥ|ħ',
            'H' => 'Ĥ|Ħ',
            'i' => 'í|ì|ỉ|ĩ|ị|î|ï|ī|ĭ|ǐ|į|ı',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị|Î|Ï|Ī|Ĭ|Ǐ|Į|İ',
            'ij' => 'ĳ',
            'IJ' => 'Ĳ',
            'j' => 'ĵ',
            'J' => 'Ĵ',
            'k' => 'ķ',
            'K' => 'Ķ',
            'l' => 'ĺ|ļ|ľ|ŀ|ł',
            'L' => 'Ĺ|Ļ|Ľ|Ŀ|Ł',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ö|ø|ǿ|ǒ|ō|ŏ|ő',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ö|Ø|Ǿ|Ǒ|Ō|Ŏ|Ő',
            'Oe' => 'œ',
            'OE' => 'Œ',
            'n' => 'ñ|ń|ņ|ň|ŉ',
            'N' => 'Ñ|Ń|Ņ|Ň',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|û|ū|ŭ|ü|ů|ű|ų|ǔ|ǖ|ǘ|ǚ|ǜ',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Û|Ū|Ŭ|Ü|Ů|Ű|Ų|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ',
            's' => 'ŕ|ŗ|ř',
            'R' => 'Ŕ|Ŗ|Ř',
            's' => 'ß|ſ|ś|ŝ|ş|š',
            'S' => 'Ś|Ŝ|Ş|Š',
            't' => 'ţ|ť|ŧ',
            'T' => 'Ţ|Ť|Ŧ',
            'w' => 'ŵ',
            'W' => 'Ŵ',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ|ÿ|ŷ',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ|Ÿ|Ŷ',
            'z' => 'ź|ż|ž',
            'Z' => 'Ź|Ż|Ž'
        );
        foreach ($unicode as $khongdau => $codau) {
            $arr = explode("|", $codau);
            $str = str_replace($arr, $khongdau, $str);
        }
        return $str;
    }

    /**
     * @param $table
     * @param $attributes
     * @param $file
     * @param $start
     * @param $end
     * @throws BadRequestHttpException
     */
    public static function importDataExcel($table, $attributes, $file, $start, $end)
    {
        ini_set('memory_limit', '-1');
        set_time_limit(1200);
        $inputFileName = $file;

        if (!file_exists($inputFileName)) {
            throw new BadRequestHttpException('File doesn\'t exists.');
        }

        $inputFileName = $file;

        $spreadsheet = IOFactory::load($inputFileName);

        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        $data = [];
        foreach ($sheetData as $key => $value) {
            if ($key >= $start && $key <= $end) {
                $row = [];
                foreach ($attributes as $key_att => $value_att) {
                    $row[$value_att] = $value[$key_att];
                }
                $data[] = $row;
            }
        }

        DbHelper::insertMultiple($table, $data);

    }


    /**
     * @param $id_order_detail
     * @return mixed
     */
    public static function get_cost_order_detail_by_product($id_order_detail){
        $result = OrderDetail::find()->where(['=','order_detail.id',$id_order_detail])->one();
        $product = Product::findOne($result['product_id']);
        return $result['quantily'] * $product['price'];

    }

    /**
     * @param $id_order
     * @return int|mixed
     */
    public static function get_total_cost_order_by_order_detail($id_order)
    {
        $cost_order = 0;
        $order_details = OrderDetail::find()->where(['=', 'order_id', $id_order])->all();
        for ($i = 0; $i < count($order_details); $i++) {
            $cost_order += self::get_cost_order_detail_by_product($order_details[$i]['id']);
        }
        return $cost_order;
    }
    /**
     * @param $id_customer
     * @return int|mixed
     */
    public static function get_total_cost_by_customer($id_customer)
    {
        $order = Order::find()->where(['=', 'user_id', $id_customer])->all();
        $total_cost = 0;
        for ($i = 0; $i < count($order); $i++) {
            $total_cost += self::get_total_cost_order_by_order_detail($order[$i]['id']);
        }
        return $total_cost;
    }
    /**
     * @param $id_customer
     * @return int
     */
    public static function get_total_order_by_customer($id_customer)
    {
        $order = Order::find()->where(['=', 'user_id', $id_customer])->all();
        return count($order);
    }

    /**
     * @param $province_id
     * @return string
     */
    public static function get_shipping_by_province($province_id){
        $ship = Shipping::findOne($province_id);
        return $ship->cost;
    }

    /**
     * @param $user_id
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_shopping_cart_by_user_id($user_id){
        return ShoppingCart::find()->where(['=','user_id',$user_id])->all();

    }

}