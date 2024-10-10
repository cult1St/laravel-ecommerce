<?php



use App\Http\Controllers\AdminController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\LgaController;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\TestController;

use App\Http\Controllers\TransactionController;

use App\Http\Controllers\TransDetailsController;

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminGuard;

use App\Models\Admin;

use Illuminate\Support\Facades\DB;



Route::middleware(["auth", "verified"])->group(function(){

    Route::post("/cart/add", [CartController::class, "addToCartByClick"])->name("add.cart.click");

    Route::get("/cart/show", [CartController::class, "show_view"])->name("cart.view");

    Route::get("/cart/remove/{id}", [CartController::class, "remove_prod"])->name("cart.remove");

    Route::post("/cart/empty", [CartController::class, "empty_cart"])->name("cart.empty");

    Route::get("/cart/checkout", [CartController::class, "show_checkout"])->name("cart.checkout");

    Route::post("/cart/checkout/payment", [CartController::class, "checkout"])->name("cart.checkout.payments");

    Route::get("/server/lga", [LgaController::class, "get_lga_for_server"])->name("server.lga");

    Route::get("/transanctions/insert", [TransactionController::class, "insert"])->name("transaction.insert");

    Route::get("/payment/insert", [PaymentController::class, "paystack"])->name("payment.insert");

    Route::get("/payment/verify", [PaymentController::class, "verify"])->name("payment.verify");

    Route::get('/order/insert', [OrderController::class, "insert"])->name("order.insert");

    Route::get("transaction/details", [TransDetailsController::class, "insert"])->name("transaction.details.insert");

    

});

Route::get("/about", function(){

        return view("ecommerce.about");

})->name("about");

Route::get("/contact", function(){

        return view("ecommerce.contact");

})->name("contact");

Route::get("/categories/{id}", [CategoryController::class, "view_categories"])->name("cartigory.single");



Route::get("/allcategories/", [CategoryController::class, "view_allcategories"])->name("allcategories");

Route::get("/product/{id}", [ProductController::class, "view_product"])->name("product.single");

Route::get("/tester", function(){

    $store_images = DB::table("store_images")->get();

    $admin = Admin::findOrFail(session("adminonline"));

    return view("test", compact('admin', 'store_images'));

});







Route::get("/admin/login", function(){

    return view("admin.login");

})->name("admin.login");

Route::post("/admin/login", [AdminController::class, "login"]);





Route::middleware(AdminGuard::class)->group(function(){

    Route::get("/admin/dashboard", [AdminController::class, "view_admin"])->name("admin.dashboard");

    Route::post('/admin/logout', [AdminController::class, "destroy"])->name("admin.logout");

    Route::get("/admin/addproduct", [ProductController::class, "show_add"])->name("admin.add.product");

    Route::post("/admin/addproduct", [ProductController::class, "add_product"])->name("admin.add.products");

    Route::post("/admin/editproduct", [ProductController::class, "show_edit"])->name("admin.edit.product");

    Route::post("/admin/editproducts", [ProductController::class, "edit_product"])->name("admin.edit.products");

    Route::get("/admin/viewproducts", [ProductController::class, "view_products"])->name("admin.view.products");

    Route::post("/admin/server/statuschange", [ProductController::class, "status_change"]);

    Route::delete("admin/delete/products", [ProductController::class, "delete"])->name("admin.delete.product");

    Route::get("/admin/view/orders", [OrderController::class, "view_orders"])->name("admin.view.orders");

    Route::get("/admin/view/test", function(){

        

        $store_images = DB::table("store_images")->where("user_id", "12")->first();

        $name = $store_images->image_name;

     

        $admin = Admin::findOrFail(session("adminonline"));

        return view("test", compact('admin', 'store_images', 'name'));

    })->name("admin.view.test");

    Route::post("/admin/server/statuschange", [TestController::class, "start"])->name("test.submit");

});

