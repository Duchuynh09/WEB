<?php 
class danhMuc extends controller{
    public $select;
    public function defauAction(){
        echo "Nothing!!";
        // Khi ng dùng k nhập url
    }
    
    public function dongHoNam (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNam()
        ]);
    }
    
    function dongHoNu (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNu()
        ]);
    }
    function dongHoDoi (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoDoi()
        ]);
    }

    function phuKien (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetPhuKien()
        ]);
    }

}