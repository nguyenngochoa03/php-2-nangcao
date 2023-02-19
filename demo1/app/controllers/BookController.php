<?php
namespace App\Controllers;
 use App\models\Book;
class BookController extends BaseController {
    public function __construct()
    {
        // định nghĩa khởi tạo book trong này
        $this ->book = new Book();
    }
    public function index(){
        // lấy dữ liệu từ bảng danh muc xuống
        $title = " Hoa dang học php ";
        $tieuDe = " danh muc danh mục ";
        $books = $this->book ->getBook();
        // bắn dữ liệu sang views index
        $this->render('book.index',compact('books','title','tieuDe'));
    }
}
?>