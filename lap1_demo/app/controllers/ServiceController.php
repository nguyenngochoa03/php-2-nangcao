<?php
namespace App\Controllers;
use App\Models\Service;
use http\Header;

class ServiceController extends BaseController {
    public function __construct()
    {
        // định nghĩa khởi tạo product trong này
        $this ->service = new Service();
    }

    public function index()
    {
        // lấy dữ liệu từ bảng Product xuoong
        $title = "Hoa xinh đẹp đang code nhé !";
        $tieuDe = "Danh sách dịch vụ ";
        $services =$this->service->getService();
        // bắm dữ liệu sang view index
        $this->render('service.index',compact('services','title','tieuDe'));
    }
    public function addService(){
        $this->render('service.add');
    }
    public function servicePost(){
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
                redirect('errors',$errors,'add-service');
            }else{
                $result = $this->service->addService(null,$_POST["usename"],$_POST["hinh"],$_POST["price"],$_POST["description"]);
                redirect('success','thành công','listservice');
//              if ($result){
//                  redirect('success','success','add-product');
//              }
            }
        }
        $this->render("service.add");
    }
    public function editService($id){
        $service = $this->service->getDetailService($id);
        return $this->render('service.edit',compact('service'));
    }
    public function editServicePost($id){
        if(isset($_POST['sua'])){
            $result = $this->service->updateService($id,$_POST['usename'],$_POST["hinh"],$_POST["price"],$_POST["description"]);
            if ($result){
                redirect('success','Sửa Thành công','edit-service/'.$id);
            }
        }
//        $this->render("product.add");

    }
    public  function  DeleteService($id){
        if (isset($id)){
            $this->service->deleteService($id);
            header("location:../listservice");
        }
    }
}

?>
