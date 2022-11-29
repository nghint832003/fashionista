<!--<form method="post" enctype="multipart/form-data" action="../../../fashinista/index.php?act=signup">-->
<!--    <label>Họ tên</label>-->
<!--    <input name="name_customer" type="text">-->
<!---->
<!--    <label>Số điện thoại</label>-->
<!--    <input name="phone_customer" type="text">-->
<!---->
<!--    <label>Email</label>-->
<!--    <input name="email_customer" type="email">-->
<!---->
<!--    <label>Địa chỉ</label>-->
<!--    <input name="address_customer" type="text">-->
<!---->
<!--    <label>Ngày sinh</label>-->
<!--    <input name="birthday_customer" type="date">-->
<!---->
<!--    <label>Tên đăng nhập</label>-->
<!--    <input name="user_customer" type="text">-->
<!---->
<!--    <label>Mật khẩu</label>-->
<!--    <input name="pass_customer" type="password">-->
<!---->
<!--    <input type="submit" name="signup">-->
<!--    <h2 class="thongbao">-->
<!--        --><?php
//        if(isset($thongbao)&&($thongbao!="")){
//            echo $thongbao;
//        }
//        ?>
<!--    </h2>-->
<section class="h-screen">
    <div class="container px-6 py-12 h-full">
        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="w-full"
                        alt="Phone image"
                />
            </div>

            <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                <form method="post" enctype="multipart/form-data" action="../../../fashinista/index.php?act=signup">
                    <div class="mb-6">
                        <label>Họ và tên</label>
                        <input
                                name="name_customer"
                                type="Name"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        />
                    </div>

                    <div class="mb-6">
                        <label>Email</label>
                        <input
                                name="email_customer"
                                type="email"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        />
                    </div>

                    <div class="mb-6">
                        <label>Địa chỉ </label>
                        <input
                                name="address_customer"
                                type="Name"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        />
                    </div>

                    <div class="mb-6">
                        <label>Ngày sinh </label>
                        <input
                                name="birthday_customer"
                                type="date"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        />
                    </div>

                    <div class="mb-6">
                        <label>Ảnh đại diện</label>
                        <input
                                name="pic"
                                type="file"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        />
                    </div>

                    <div class="mb-6">
                        <label>Tên đăng nhập</label>
                        <input
                                name="user_customer"
                                type="text"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        />
                    </div>

                    <div class="mb-6">
                        <label>Mật khẩu</label>
                        <input
                                name="pass_customer"
                                type="password"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"

                        />
                    </div>

                    <div class="mb-6">
                        <label>Số điện thoại</label>
                        <input
                                name="phone_customer"
                                type="Number phone"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        />
                    </div>

<!--                    <button-->
<!--                            type="submit"-->
<!--                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"-->
<!--                            data-mdb-ripple="true"-->
<!--                            data-mdb-ripple-color="light"-->
<!--                    >-->
<!--                        <a href=""><input type="submit" name="signup" value="ĐĂNG KÝ"></a>-->
<!--                    </button>-->
                    <input class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"                                                data-mdb-ripple="true"
                            type="submit" name="signup" value="ĐĂNG KÝ">

                </form>
            </div>
        </div>
    </div>
