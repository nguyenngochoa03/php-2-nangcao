<?php
namespace App\Controllers;
use App\Models\Categori;
use http\Header;

class CategoriController extends BaseController {
    public function __construct()
    {
        // định nghĩa khởi tạo product trong này
        $this ->categori = new Categori();
    }

    public function index()
    {
        // lấy dữ liệu từ bảng Product xuoong
        $title = "Hoa xinh đẹp đang code nhé !";
        $tieuDe = "Danh sách danh mục";
        $categoris =$this->categori->getCategori();
        // bắm dữ liệu sang view index
        $this->render('categori.index',compact('categoris','title','tieuDe'));
    }
    public function addCategori(){
        $this->render('categori.add');
    }
    public function categoriGood(){
        if (isset($_POST['them'])){
            $errors =[];// khoir tao 1 mảng loii rỗng
            // nếu chưa nhập tên sản phâme
            if (empty($_POST['usename'])){
                $errors[] =" bạn chưa nhập tên sản phâm";
            }
            // nếu chưa nhập đơn giá

            if (empty($_POST['description'])){
                $errors[]= " bạn chưa nhập mô tả";

            }
            if(empty($_POST['hinh'])){
                $errors[] =" bạn chưa nhập hình ảnh";
            }
            if (count($errors)>0){
//              $_SESSION['errors'] =$errors;
//              header("location:");
                redirect('errors',$errors,'add-categori');
            }else{
                $result = $this->categori->addCategori(null,$_POST["usename"],$_POST["hinh"],$_POST["description"]);
                redirect('success','thành công','listcategori');
//              if ($result){
//                  redirect('success','success','add-product');
//              }
            }
        }
        $this->render("categori.add");
    }
    public function editCategori($id){
        $categori = $this->categori->getDetailCategori($id);
        return $this->render('categori.edit',compact('categori'));
    }
    public function editCategoriPost($id){
        if(isset($_POST['sua'])){
            $result = $this->categori->updateCategori($id,$_POST['usename'],$_POST["hinh"],$_POST["description"]);
            if ($result){
                redirect('success','Sửa Thành công','edit-categori/'.$id);
            }
        }
//        $this->render("product.add");

    }
    public  function  DeleteCategori($id){
        if (isset($id)){
            $this->categori->deleteCategori($id);
            header("location:../listcategori");
        }
    }
}

?>
