<link rel="stylesheet" href="profile2.css">


    <!-- under nav -->

    <div class="backgroundDiv w-[95%] md:w-[70%] rounded-lg shadow-xl">
        <div class="rounded-lg shadow-xl p-8  infoSection">

            <!-- user image & info under photo -->
            <div class="userPhotoDiv justify-start items-star md:justify-center">
                <!-- user photo -->
                <div class="user_info">
                    <button type="submit" id="userPhotoButton" class="">
                        <img id="userPhoto" src="./usersImg/<?php echo ($_SESSION['user']['img']) ?>" class="w-[150px]">
                    </button>

                    <!-- username -->
                    <h1 class=" font-semibold text-4xl, nameUnderPhoto"> <?php echo  $rname ?> </h1>
                    <p class="  text-2xl, nameUnderPhoto"> <?php echo  $remail ?> </p>
                </div>

            </div>
            <button id="Delete" name="Delete" data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                حذف الحساب
            </button>
        </div>
        <form id="editProfile" class="space-y-2 md:space-y-6  " action="editProfileCode.php" method="POST" enctype=multipart/form-data>

            <!-- end div1 -->


            <div data-aos="zoom-in" id="result" class="p-4 mb-4 text-center text-sm text-green-900 rounded-lg  dark:bg-gray-800 dark:text-green-400" role="alert">

            </div>
            <!-- name -->
            <div class="name">
              
                <div class="name1 w-[100%] md:w-[40%]">

                    <label for="name1" class="mb-4 text-sm font-medium  text-gray-900  dark:text-white">الاسم
                    </label>

                    <input type="text" name="name1" id="name1" class="bg-gray-50  text-gray-900 sm:text-sm rounded-md block w-full p-2.5 dark:placeholder-gray-400 dark:text-white inputBoxs" placeholder="سارة" value="<?php echo $rname  ?>">
                    <small id="name1_msg"></small>

                </div>
                <div class="uploadImg w-[100%] md:w-[40%]">

                    <label class="inline mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">تغيير الصورة</label>
                    <input id="file_input" type="file" name="UserImg" class="w-[100%] h-10 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                        JPG or GIF (MAX. 800x400px).</p>
                </div>


            </div>

            <!-- email -->
            <div class="email-phone">
                <div class="email w-[100%] md:w-[40%]">
                    <label for="email" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">الايميل</label>
                    <input type="email" name="email" id="email" class="bg-gray-50  text-gray-900 sm:text-sm rounded-md block w-full p-2.5 dark:placeholder-gray-400 dark:text-white inputBoxs" placeholder="name@google.com" value="<?php echo  $remail ?>">

                    <small id="email_msg"></small>
                    <?php

                    if (isset($errors)) {
                        if (!empty($errors)) {
                            foreach ($errors as $msg) {

                                echo   " <strong > <small > $msg </small> </strong> ";
                            }
                        }
                    }

                    ?>

                    <?php if (isset($_SESSION["emailCheckResult"])) {

                        echo " <small>" . $_SESSION["emailCheckResult"] . "</small> ";
                        }

                        unset($_SESSION['emailCheckResult']);

                        ?>







                </div>

                <!-- phone number -->
                <div class="phone w-[100%] md:w-[40%]">
                    <label for="phone" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">رقم
                        الهاتف</label>
                    <input type="tel" id="phone" name="phone" class="bg-gray-50  text-gray-900 sm:text-sm rounded-md block w-full p-2.5 dark:placeholder-gray-400 dark:text-white inputBoxs" value="<?php echo  $rphone ?> ">
                    <small id="phone_msg"></small>

                </div>
            </div>

            <!-- password -->
            <div class="password">

                <!-- pass1 -->
                <div class="pass1 w-[100%] md:w-[40%]">
                    <label for="password" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">كلمة
                        المرور</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50  text-gray-900 sm:text-sm rounded-md block w-full p-2.5 dark:placeholder-gray-400 dark:text-white inputBoxs"
                    value="<?php echo   $rpassword ?>"
                    >

                    <small id="password_msg">
                        كلمة المرور يجب أن <strong>لا تقل عن 6 أرقام</strong> ( 1 حرف صغير ,1 حرف كبير, رمز
                        وأرقام)

                    </small>

                </div>

                <!-- pass2 -->
                <div class="pass2 w-[100%] md:w-[40%]">
                    <label for="repassword" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        تأكيد كلمة المرور
                    </label>
                    <input type="password" name="repassword" id="repassword" placeholder="••••••••" class="bg-gray-50  text-gray-900 sm:text-sm rounded-md block w-full p-2.5 dark:placeholder-gray-400 dark:text-white inputBoxs"
                    value="<?php echo   $rpassword ?>"
                    >
                    <small id="repassword_msg">

                    </small>
                </div>





            </div>


            <!-- edit/cancle -->
            <div class="submit">

                <button class="editProfileButton" type="submit" id="save" name="save">حفظ</button>
            </div>
        </form>



        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg class="mx-auto mb-4 text-gray-100 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">عزيزنا العميل , هل ترغب بإتمام حذف حسابك ؟</h3>
                        <form action="deleteProfile.php" method="POST">
                            <button id="deleteAcountButton" name="submitDelete" data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                نعم, أرغب بحذف حسابي
                            </button>
                        </form>
                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">الغاء</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
    <!-- end div2 -->




    <!-- flowbite script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <!-- javascript library link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- initialize AOS library script -->
    <script>
        AOS.init();
    </script>
