<?php

namespace App\Models;

use CodeIgniter\Model;

class Base extends Model
{

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function select_distinct($table, $field)
    {
        return $this->db->table($table)->select($field)->distinct()->orderBy($field, 'ASC')->get()->getResultArray();
    }
    public function all_data($table, $limit = null)
    {
        if ($limit) {
            return $this->db->table($table)->orderBy('id', 'DESC')->limit($limit)->get()->getResultArray();
        } else {
            return $this->db->table($table)->orderBy('id', 'DESC')->get()->getResultArray();
        }
    }

    public function all_data_random($table, $limit = null)
    {
        if ($limit) {
            return $this->db->table($table)->orderBy('id', 'RANDOM')->limit($limit)->get()->getResultArray();
        } else {
            return $this->db->table($table)->orderBy('id', 'RANDOM')->get()->getResultArray();
        }
    }

    public function all_data_order($table, $order = null)
    {
        if ($order) {
            return $this->db->table($table)->orderBy($order, 'DESC')->get()->getResultArray();
        } else {
            return $this->db->table($table)->orderBy('id', 'DESC')->get()->getResultArray();
        }
    }


    public function jumlah($table, $column, $where = null)
    {

        if ($where) {
            return $this->db->table($table)->where($where)->selectSum($column, 'sumQuantities')->get()->getRow()->sumQuantities;
        } else {
            return $this->db->table($table)->selectSum($column, 'sumQuantities')->get()->getRow()->sumQuantities;
        }

    }

    public function data_insert($table, $data)
    {
        return $this->db->table($table)->insert($data);
    }
    public function data_where($table, $field, $value)
    {
        return $this->db->table($table)->where($field, $value)->get()->getResultArray();
    }
    public function data_where_dua($table, $field, $value, $field2, $value2)
    {
        return $this->db->table($table)->where($field, $value)->where($field2, $value2)->get()->getResultArray();
    }
    public function data_where_array($table, $data, $order = null)
    {
        if ($order) {
            return $this->db->table($table)->where($data)->orderBy($order, 'DESC')->get()->getResultArray();
        } else {
            return $this->db->table($table)->where($data)->get()->getResultArray();
        }
    }
    public function data_update($table, $data, $id)
    {
        return $this->db->table($table)->set($data)->where('id', $id)->update();
    }
    public function data_delete($table, $id)
    {
        return $this->db->table($table)->delete(['id' => $id]);
    }
    public function data_like($table, $filed, $data)
    {
        return $this->db->table($table)->like($filed, $data)->orderBy('id', 'DESC')->get()->getResultArray();
    }
    public function data_truncate($table)
    {
        return $this->db->table($table)->truncate();
    }
    public function data_avg($table, $filed, $data, $distinct = false)
    {
        if ($distinct === true) {
            return $this->db->table($table)->select('date')->where($filed . ' >=', $data[0])->where($filed . ' <=', $data[1])->distinct()->get()->getResultArray();
        } else {
            return $this->db->table($table)->where($filed . ' >=', $data[0])->where($filed . ' <=', $data[1])->get()->getResultArray();
        }
    }
    public function data_count($table, $where = null)
    {
        if ($where) {
            return $this->db->table($table)->where($where)->countAllResults();
        } else {
            return $this->db->table($table)->countAllResults();
        }
    }

    public function cekCategoryProductTotal()
    {
        return $this->db->table("category")
                    ->select('category.*, COUNT(product.id) AS total_produk')
                    ->join('product', 'product.kategori = category.id', 'left')
                    ->groupBy('category.id')
                    ->orderBy('category.id', 'ASC')
                    ->get()->getResultArray();
    }

    public function cekProdukCategory()
    {
        return $this->db->table("product")->select('product.*, category.nama AS nama_kategori')
                    ->join('category', 'category.id = product.kategori')
                    ->orderBy('product.id', 'DESC')
                    ->get()->getResultArray();
    }
    
    public function cekProdukCategoryById($id)
    {
        return $this->db->table("product")->select('product.*, category.nama AS nama_kategori')
                    ->join('category', 'category.id = product.kategori')
                    ->where('category.id', $id)
                    ->get()->getResultArray();
    }

    public function cekSatuProdukCategory($id)
    {
        return $this->db->table("product")->select('product.*, category.nama AS nama_kategori')
                    ->join('category', 'category.id = product.kategori')
                    ->where('product.id', $id)
                    ->get()->getResultArray();
    }

    public function cekCartProduct()
    {
        return $this->db->table("cart")->select('cart.*, product.nama AS nama_produk, product.harga AS harga_produk, product.foto AS foto_produk, category.nama AS nama_kategori')
                    ->join('product', 'product.id = cart.produk_id')
                    ->join('category', 'category.id = product.kategori')
                    ->orderBy('cart.id', 'DESC')
                    ->get()->getResultArray();
    }

    public function cekBannerProduct()
    {
        return $this->db->table("banner")->select('banner.*, product.nama AS nama_produk, product.harga AS harga_produk, product.foto AS foto_produk, category.nama AS nama_kategori')
                    ->join('product', 'product.id = banner.produk_id')
                    ->join('category', 'category.id = product.kategori')
                    ->orderBy('banner.id', 'DESC')
                    ->get()->getResultArray();
    }

    public function cekCartProductById($id)
    {
        return $this->db->table("cart")->select('cart.*, product.nama AS nama_produk, product.harga AS harga_produk, product.foto AS foto_produk, category.nama AS nama_kategori')
                    ->join('product', 'product.id = cart.produk_id')
                    ->join('category', 'category.id = product.kategori')
                    ->where('cart.user_id', $id)
                    ->get()->getResultArray();
    }
    
    public function cekSatuCartProduct($produk_id)
    {
        return $this->db->table("cart")->select('cart.*, product.nama AS nama_produk, product.harga AS harga_produk')
                    ->join('product', 'product.id = cart.produk_id')
                    ->where('cart.produk_id', $produk_id)
                    ->get()->getResultArray();
    }

    public function cekOrdersItemsProducts($tipe = null)
    {
        if ($tipe === 'orders') {
            return $this->db->table("orders")
                ->select("
                    orders.id,
                    orders.user_id,
                    orders.address_id,
                    orders.total,
                    orders.status,
                    orders.created_at,
                    users.nama AS nama_user,
                    users.email AS user_email,
                    GROUP_CONCAT(product.nama SEPARATOR ', ') AS nama_produk
                ")
                ->join('order_items', 'order_items.order_id = orders.id')
                ->join('product', 'product.id  = order_items.produk_id')
                ->join('users', 'users.id = orders.user_id')
                ->groupBy('orders.id')
                ->orderBy('orders.id', 'DESC')
                ->get()
                ->getResultArray();
        } else {
            return $this->db->table("order_items")
                ->select('order_items.*, product.nama AS nama_produk, product.harga AS harga_produk, product.foto AS foto_produk, users.nama AS nama_user, users.email AS user_email, product.nama AS nama_produk, orders.id AS order_id, orders.created_at AS created_at, orders.total AS total')
                ->join('product', 'product.id = order_items.produk_id')
                ->join('orders', 'orders.id = order_items.order_id')
                ->join('users', 'users.id = orders.user_id')
                ->orderBy('order_items.id', 'DESC')
                ->get()->getResultArray();
        }
    }

    public function cekOrdersCustomer($id = null)
    {
        return $this->db->table("orders")
            ->select("
                orders.id,
                orders.user_id,
                orders.address_id,
                orders.total,
                orders.status,
                orders.created_at,
                users.nama AS nama_user,
                users.email AS user_email,
                GROUP_CONCAT(product.nama SEPARATOR ', ') AS nama_produk
            ")
            ->join('order_items', 'order_items.order_id = orders.id')
            ->join('product', 'product.id  = order_items.produk_id')
            ->join('users', 'users.id = orders.user_id')
            ->where('orders.user_id', $id)
            ->groupBy('orders.id')
            ->orderBy('orders.id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function cekOrdersItemsProductsById($id)
    {
        return $this->db->table("order_items")->select('order_items.*, product.nama AS nama_produk, product.harga AS harga_produk, product.foto AS foto_produk, users.nama AS nama_user, users.email AS user_email, product.nama AS nama_produk, orders.id AS order_id, orders.created_at AS created_at, orders.total AS total, user_addresses.alamat1 AS alamat1, user_addresses.alamat2 AS alamat2, orders.status AS status')
                    ->join('product', 'product.id = order_items.produk_id')
                    ->join('orders', 'orders.id = order_items.order_id')
                    ->join('users', 'users.id = orders.user_id')
                    ->join('user_addresses', 'user_addresses.id = orders.address_id')
                    ->where('order_items.order_id', $id)
                    ->orderBy('order_items.id', 'DESC')
                    ->get()->getResultArray();
    }

    public function cekWishlistProduct($id)
    {
        return $this->db->table("wishlists")->select('wishlists.*, product.nama AS nama_produk, product.harga AS harga_produk, product.foto AS foto_produk, category.nama AS nama_kategori')
                    ->join('product', 'product.id = wishlists.product_id')
                    ->join('category', 'category.id = product.kategori')
                    ->where('wishlists.user_id', $id)
                    ->orderBy('wishlists.id', 'DESC')
                    ->get()->getResultArray();
    }

    public function upload_file($file, $path, $custome_name = false, $ex = ['png', 'jpeg', 'jpg', 'webp'], $get_original = false)
    {
        if ($file) {
            if ($file->getError() == 0) {
                if (in_array(strtolower($file->getClientExtension()), $ex)) {
                    if ($custome_name === false) {
                        $nama_file = $file->getRandomName();
                    } else {
                        $nama_file = $custome_name . '.' . $file->getClientExtension();
                    }

                    $file->move($path, $nama_file);

                    if ($get_original) {
                        return [
                            'name' => $nama_file,
                            'original' => $file->getClientName(),
                        ];
                    } else {
                        return $nama_file;
                    }

                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function cekLogin($email, $password) {
        $user = $this->db->table('users')->where('email', $email)->get()->getRowArray();

        if (empty($user)) {
            return false;
        }

        if (password_verify($password, $user['password'])) {
            unset($user['password']);
            return $user;
        }

        return false;
    }
}
