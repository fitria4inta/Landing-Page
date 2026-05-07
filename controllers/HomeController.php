<?php
class HomeController extends Controller {
    public function index() {
        $menuModel = $this->model("Menu");
        $data["menu"] = $menuModel->getMenu();
        $this->view("home", $data);
    }
}