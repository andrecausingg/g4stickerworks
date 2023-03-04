<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Favicon -->
<link rel="icon" type="image/x-icon" href="./asset/images/g4works-favicon-16x16.png">

<!-- Css -->
<link rel="stylesheet" href="./asset/scss/style.css">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/3967252a9e.js" crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Header -->
    <header class="yot-header yot-bg-white yot-hide-for-desktop yot-z-index-1">
        <!-- Nav -->
        <nav class="yot-flex yot-flex-ai-c-jc-sb yot-pa-8">
            <!-- Logo -->
            <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>

            <!-- Hamburger -->
            <div class="yot-hide-for-desktop">
                <i id="hamburgerIndex" class="fa-solid fa-bars yot-tc-blue1" style="font-size: 36px;"></i>
            </div>
        </nav>
    </header>

    <!-- Overlay Mobile -->
    <div id="overlayMobileBgIndex" class="yot-overlay-bg-trans yot-bg-black1 overlayLeftSideBar yot-z-index-2" style="display:none"></div>
    <div id="overlayMobileIndex" class="yot-w-75 yot-flex yot-flex-fd-c yot-vh-100 yot-bg-white yot-overlay-left overlayLeftSideBar over-view-overlay-mobile yot-z-index-2" style="display:none;overflow-y: scroll;">
        <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="padding: 8px 16px 8px 8px">
            <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>
            <i id="hamburgerCloseIndex" class="fa-solid fa-xmark yot-tc-blue1" style="font-size: 46px; display: none;"></i>
        </div>

        <div style="padding:0px 16px">
            <!-- General -->
            <div>
                <h4 class="yot-mb-8">GENERAL</h4>
                <div class="yot-pl-48">
                    <div class="yot-mb-16">
                        <a href="overview" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Over View</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="orders" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Orders</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Visitors</a>
                    </div>
                </div>
            </div>

            <!-- Management -->
            <div>
                <h4 class="yot-mb-8">MANAGEMENT</h4>
                <div class="yot-pl-48">
                    <!-- Accounts -->
                    <div class="yot-mb-8">
                        <div class="accountPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1">
                            <span style="font-size: 24px; font-weight: bolder;">Accounts</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl"></i></span>
                        </div>
                        <div class="AdEmUsContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="admin-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Admin</a>
                            <a href="user-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Users</a>
                        </div>
                    </div>

                    <!-- Pages -->
                    <div class="yot-mb-8">
                        <div class="pagesPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Pages</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightPages"></i></span>
                        </div>
                        <div class="InPrSeGaContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
                            <a href="all-footer-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">All Footer</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office -->
            <div>
                <h4 class="yot-mb-8">OFFICE WORKS</h4>
                <div class="yot-pl-48">
                    <!-- Work -->
                    <div class="yot-mb-8">
                        <div class="workPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Work</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightWork"></i></span>
                        </div>
                        <div class="jobContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <!-- <a href="job" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a> -->
                            <a href="cut-file" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Container -->
    <div class="g-main-container yot-vh-100 yot-w-100 yot-content-space-margin-t-80 yot-content-space-margin-t-80-remove" style="padding: 0;">
        <!-- Left -->
        <div class="g-main-item-left yot-hide-for-mobile yot-bg-white yot-pa-16" style="overflow-y: scroll;">
            <div class="yot-flex yot-flex-fd-c yot-mb-16">
                <div style="width:64px; height: 64px; margin: auto auto;">
                    <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>
                </div>
            </div>
            
            <!-- General -->
            <div>
                <h4 class="yot-mb-8">GENERAL</h4>
                <div class="yot-pl-48">
                    <div class="yot-mb-16">
                        <a href="overview" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Over View</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="orders" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Orders</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Visitors</a>
                    </div>
                </div>
            </div>
    
            <!-- Management -->
            <div class="yot-mb-16">
                <h4 class="yot-mb-8">MANAGEMENT</h4>
                <div class="yot-pl-48">
                    <!-- Accounts -->
                    <div class="yot-mb-8">
                        <div class="accountPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Accounts</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRight"></i></span>
                        </div>
                        <div class="AdEmUsContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="admin-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Admin</a>
                            <a href="user-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Users</a>
                        </div>
                    </div>
                    
                    <!-- Pages -->
                    <div class="yot-mb-8">
                        <div class="pagesPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Pages</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightPages"></i></span>
                        </div>
                        <div class="InPrSeGaContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
                            <a href="all-footer-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">All Footer</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office -->
            <div>
                <h4 class="yot-mb-8">OFFICE WORKS</h4>
                <div class="yot-pl-48">
                    <!-- Work -->
                    <div class="yot-mb-8">
                        <div class="workPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Work</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightWork"></i></span>
                        </div>
                        <div class="jobContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <!-- <a href="job" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a> -->
                            <a href="cut-file" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right -->
        <div class="g-main-item-right" style="padding: 24px;">
            <!-- Title -->
            <h2 class="yot-mb-16 yot-resize-font-64">Product Page</h2>
            
            <!-- Btn Form Container -->
            <div class="over-view-container">
                <!-- Decals  -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item1 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Decals</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Full Decals</button>
                        <button class="yot-btn-white1 yot-mb-8">Stock Decals</button> 
                        <button class="yot-btn-white1 yot-mb-8">Sticker Mags</button>
                    </div>
                </div>

                <!-- Temporary Plate No  -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item2 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Temporary Plate No.</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">acrylic</button>
                        <button class="yot-btn-white1 yot-mb-8">Yero</button>
                    </div>
                </div>

                <!-- Sticker 1-->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item3 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Product Sticker Labels</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Soviener</button>
                    </div>
                </div>

                <!-- Sticker 2-->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item3 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Tarpauline</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Pack</button>
                        <button class="yot-btn-white1 yot-mb-8">Costumize</button>
                    </div>
                </div>
            </div>


            <!-- Table -->
            <div class="yot-w-100" id="displayDataTable" style="max-height:500px; overflow-y:scroll"></div>

            <!-- Product Container -->
            <div class="yot-content-space-margin-t-80 yot-container">
                <!-- Product Section -->
                <section>
                    <!-- Title And Btn -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <div class="yot-tc-blue1">
                            <h1 class="yot-resize-font-64">PRODUCTS</h1>
                        </div>

                        <!-- Select Container -->
                        <div>
                            <select class="yot-form-select yot-form-select-option" name="selectDecals" id="selectDecals">
                                <option value="">- Select Decals -</option>
                                <option value="fullDecals">Full Decals</option>
                                <option value="stockDecals">Stock Decals</option>
                                <option value="stickerMags">Sticker Mags</option>
                            </select>
                        </div>
                    </div>

                    <!-- List Of Products -->
                    <div class="yot-row">
                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Price: 1000.00</p>
                            <p>Theme: Sporty</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>

                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <div class="yot-mtb-16">
                                    <button class="yot-btn-blue1">+</button>
                                    <span class="yot-mlr-8">1</span>
                                    <button class="yot-btn-blue1">-</button>
                                </div>
                                <button class="yot-btn-blue1">Add to Cart</button>
                            </div>
                        </div>

                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Price: 1000.00</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>
                        </div>

                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Price: 1000.00</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>
                        </div>

                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Price: 1000.00</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>
                        </div>
                    </div>
                    
                </section>
            </div>
        </div>

        <!-- Create Update Delete Container Content-->
        <div id="createBgContainerContent" class="yot-overlay-bg-trans yot-bg-black1" style="display:"></div>
        <div id="createFormContainerContent" class="yot-overlay-mid-container" style="display:;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 id="titleCaption" class="yot-tc-blue1">CREATE</h2>

                    <i id="createCloseFormIconContent" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                    <h2>Full Decals</h2>
                    <select class="yot-form-select yot-form-select-option" name="selectOptionContent" id="selectOptionContent">
                        <option value="create">Create</option>
                        <option value="update">Update</option>
                        <option value="delete">Delete</option>
                    </select>
                </div>

                <!-- Create Form Container -->
                <div id="createDisplayContainerContent">
                    <form id="createFormContent">
                        <!-- Select Decals -->
                        <div class="yot-form-group">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="decals">Decals</label>
                            <select class="yot-form-select yot-form-select-option yot-w-50"  name="selectDecals" id="selectDecals">
                                <option value="">- Select Decals -</option>
                                <option value="Full Decals">Full Decals</option>
                                <option value="Stock Decals">Stock Decals</option>
                                <option value="Sticker Mags">Sticker Mags</option>
                            </select>
                        </div>

                        <!-- Select Brand -->
                        <div class="yot-form-group">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="brand">Brand</label>
                            <select class="yot-form-select yot-form-select-option yot-w-50" name="brandSelect" id="brandSelect"></select>
                        </div>

                            <!-- Select Model -->
                        <div class="yot-form-group ">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="model">Model</label>
                            <select class="yot-form-select yot-form-select-option yot-w-50" name="modelSelect" id="modelSelect"></select>
                        </div>

                        <!-- Select Input -->
                        <div class="yot-form-group">
                            <input class="yot-form-input" type="file" name="" id="">
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

                <!-- Update Container -->
                <div id="updateDisplayContainerContent" style="display:none"></div>

                <!-- Delete Container -->
                <div id="deleteDisplayContainerContent" style="display:none"></div>
            </div>
        </div>
    </div>

    <!-- Success Container-->
    <div id="createSuccessAlert" class="yot-bg-green yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Insertion:</h3>
            <i id="createSuccessAlertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully inserted.</p>
    </div>

    <!-- Delete Container-->
    <div id="deleteSuccessAlert" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Deletion:</h3>
            <i id="deleteSuccessAlertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully deleted.</p>
    </div>

    <!-- Success Update Container-->
    <div id="updateSuccessAlert" class="yot-bg-orange yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Update:</h3>
            <i id="updateSuccessAlertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully updated.</p>
    </div>

    <script src="./asset/js/all/global.js"></script>

    <script>
        $(document).ready(function(){
            var data = {
                "Honda": ["Honda BeAT", "Honda Click", "Honda Genio", "Honda PCX", "Honda ADV150", "Honda CBR150R", "Honda CB150R", "Honda CB400X", "Honda CB650R", "Honda CB1000R", "Honda CRF150L", "Honda CRF250L", "Honda CRF300L", "Honda XR150L", "Honda Supra GTR150", "Honda TMX125 Alpha", "Honda Wave110 Alpha", "Honda XRM125 Motard", "Honda RS150R", "Honda Zoomer-X"],
                "Yamaha": ["Yamaha Mio i 125", "Yamaha Mio Soul i 125", "Yamaha Nmax", "Yamaha Aerox 155", "Yamaha Sniper 150", "Yamaha MT-15", "Yamaha R15", "Yamaha XSR155", "Yamaha Tracer 900", "Yamaha Super Tenere", "Yamaha YZF-R3", "Yamaha TFX 150", "Yamaha FZi", "Yamaha FZ16", "Yamaha SZ-R", "Yamaha XTZ125", "Yamaha YTX125", "Yamaha YBR125"],
                "Suzuki Philippines": ["Suzuki Raider J Crossover", "Suzuki Skydrive Fi", "Suzuki Address", "Suzuki Burgman Street", "Suzuki Gixxer FI", "Suzuki GSX-R150", "Suzuki SV650", "Suzuki V-Strom 1050XT", "Suzuki DR200S", "Suzuki RM-Z250", "Suzuki GSX-S750", "Suzuki GSX-S1000", "Suzuki SV650X", "Suzuki GSX-R1000R", "Suzuki Hayabusa"],
                "Kawasaki Motors": ["Kawasaki Ninja 400", "Kawasaki Z400", "Kawasaki Versys-X 300", "Kawasaki W800", "Kawasaki Z650", "Kawasaki Versys 650", "Kawasaki Ninja 650", "Kawasaki Z900", "Kawasaki Z900RS", "Kawasaki Ninja 1000SX", "Kawasaki Versys 1000", "Kawasaki Z H2", "Kawasaki Vulcan S", "Kawasaki KLX150L", "Kawasaki KLX300R"],
                "Kymco": ["Kymco Like 125", "Kymco Agility 125", "Kymco Super 8 150", "Kymco X-Town CT300i", "Kymco Xciting S 400i", "Kymco AK 550", "Kymco Like 150i ABS", "Kymco Like 200i", "Kymco X-Town 300i", "Kymco Like 150 R"],
                "Motorstar": ["Motorstar Nicess 110", "Motorstar Star-X 125 II", "Motorstar Star-X 155"],
                "TVS": ["TVS XL100", "TVS Rockz 125", "TVS Dazz Prime", "TVS Apache RTR 160", "TVS Apache RTR 180", "TVS Apache RTR 200", "TVS Apache RR 310"],
                "Royal Enfield": ["Royal Enfield Classic 350", "Royal Enfield Meteor 350", "Royal Enfield Himalayan", "Royal Enfield Continental GT 650", "Royal Enfield Continental GT 650", "Royal Enfield Interceptor 650"],
                "CFMoto":["CFMoto 150NK", "CFMoto 250NK", "CFMoto 400NK", "CFMoto 650MT", "CFMoto 650GT"],
            };
            
            var brandSelect = $('#brandSelect');
            var modelSelect = $('#modelSelect');
            
            brandSelect.append('<option value="-1">- Select Model -</option>'); // add the "Select Model" option
            // loop through each key in the data object and add it as an option in the brandSelect dropdown
            for (var brand in data) {
                brandSelect.append('<option value="' + brand + '">' + brand + '</option>');
            }
            
            // Set up the change event listener for the brand dropdown
            brandSelect.change(function() {
                modelSelect.empty(); // remove all existing options from the dropdown
                var selectedBrand = $(this).val(); // get the value of the selected brand
                var models = data[selectedBrand]; // get the corresponding models from the data object

                modelSelect.append('<option value="-1">- Select Model -</option>'); // add the "Select Model" option
                for (var i = 0; i < models.length; i++) {
                    modelSelect.append('<option value="' + models[i] + '">' + models[i] + '</option>');
                }
            });
        });
    </script>
</body>
</html>