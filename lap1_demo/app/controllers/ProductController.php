<?php
namespace App\Controllers;
use App\Models\Product;
use http\Header;

class ProductController extends BaseController {
    public function __construct()
    {
        // định nghĩa khởi tạo product trong này
        $this ->product = new Product();
    }

    public function index()
    {
       // lấy dữ liệu từ bảng Product xuoong
        $title = "Hoa xinh đẹp đang code nhé !";
        $tieuDe = "Danh sách sản phẩm ";
        $products =$this->product->getProduct();
        // bắm dữ liệu sang view index
        $this->render('product.index',compact('products','title','tieuDe'));
    }
    public function addProduct(){
       $this->render('product.add');
    }
    public function productPost(){
      if (isset($_POST['them'])){
          $errors =[];// khoir tao 1 mảng loii rỗng
          // nếu chưa nhập tên sản phâme
          if (empty($_POST['usename'])){
              $errors[] =" bạn chưa nhập tên sản phâm";
          }
 // nếu chưa nhập đơn giá
          if (empty($_POST['price'])){
              $errors[]= " bạn chưa nhập đơn giá ";

          }

          if (empty($_POST['description'])){
              $errors[]= " bạn chưa nhập mô tả";

          }
          if(empty($_POST['hinh'])){
              $errors[] =" bạn chưa nhập hình ảnh";
          }
          if (count($errors)>0){
//              $_SESSION['errors'] =$errors;
//              header("location:");
              redirect('errors',$errors,'add-product');
          }else{
              $result = $this->product->addProduct(null,$_POST["usename"],$_POST["hinh"],$_POST["price"],$_POST["description"]);
                redirect('success','thành công','test');
//              if ($result){
//                  redirect('success','success','add-product');
//              }
          }
      }
      $this->render("product.add");
    }
    public function editProduct($id){
        $product = $this->product->getDetailProduct($id);
        return $this->render('product.edit',compact('product'));
    }
    public function editProductPost($id){
        if(isset($_POST['sua'])){
            $result = $this->product->updateProduct($id,$_POST['usename'],$_POST["hinh"],$_POST["price"],$_POST["description"]);
            if ($result){
                redirect('success','Sửa Thành công','edit-product/'.$id);
            }
        }
//        $this->render("product.add");

    }
    public  function  Deletehoa($id){
        if (isset($id)){
            $this->product->deleteProduct($id);
            header("location:../test");
        }
    }
}

?>
