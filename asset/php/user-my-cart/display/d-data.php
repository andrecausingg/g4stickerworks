<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getData();

    class classDisplayData{
        public function getData(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $conn = (new classConnDB())->conn();
            $userId = (new classSessionUserID())->sessionUserID();

            $emptyTarp = 0;
            $emptyTempPlate = 0;

            // DISPLAY Tarpaulin Ready tO Print
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_ready_to_print_tbl WHERE user_id = '$userId' ORDER BY order_ready_to_print_id DESC");
            if(mysqli_num_rows($fetch_data) == 0){
                $emptyTarp = 1;
            }else{
                while($row = mysqli_fetch_assoc($fetch_data)){
                    echo'
                    <!-- Tarpauline -->
                    <div class="yot-bg-white yot-pa-16 yot-container-w-tablet-size-up" style="margin: 0 auto 8px;">
                        <div class="yot-flex">
                            <div class="yot-w-50 yot-mb-8">
                                <!-- Title -->
                                <div class="yot-text-center">
                                    <h4>TARPAULINE</h4>
                                </div>
                                <div class="image-container-RTP" style="height: 150px;">
                                    <img src="../../../../../g4stickerworks/asset/images/all-orders/'.$row["image"].'" alt="">
                                </div>
                            </div>
        
                            <div class="yot-w-50 yot-mb-8">
                                <div class="yot-flex yot-flex-fd-c yot-mb-8">
                                    <div class="yot-mb-4">
                                        <h5>Width<span style="font-size:12px">(Foot)</span></h5>
                                        <span>'.$row["width"].'</span>
                                    </div>
        
                                    <span class="yot-mlr-4"></span>
        
                                    <div class="yot-mb-4">
                                        <h5>Height<span style="font-size:12px">(Foot)</span></h5>
                                        <span>'.$row["height"].'</span>
                                    </div>
        
                                    <div class="yot-mb-4">
                                        <h5>Quantity</h5>
                                        <span>'.$row["quantity"].'</span>
                                    </div>
        
                                    <div class="yot-mb-4">
                                        <h5>Price</h5>
                                        <span>'.$row["total_price"].'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div>
                            <h4>Message</h4>
                            <span>'.$row["message"].'</span>
                        </div>
                        
                        <div class="yot-mb-8 yot-flex yot-flex-ai-c-jc-sb">
                            <div class="yot-mb-4">
                                <div>
                                    <h5>Order I.D</h5>
                                    <span>'.$row["order_id_ready_to_print"].'</span>
                                </div>
                                <div>
                                    <h5>Order Date and Time</h5>
                                    <span>'.$row["created_at_varchar"].'</span>
                                </div>
                            </div>
                        
                            <div class="yot-text-end">
                                <button class="yot-btn-blue1">Cancel</button>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            
            // DISPLAY Temporary Plate
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_temp_plate_tbl WHERE user_id = '$userId' ORDER BY order_temp_plate_id DESC");
            if(mysqli_num_rows($fetch_data) == 0){
                $emptyTempPlate = 1;
            }else{
                while($row = mysqli_fetch_assoc($fetch_data)){
                    if($row["format"] == 'FORMAT 1'){
                        echo'
                            <!-- Temporary Plate Format 1-->
                            <div class="yot-bg-white yot-pa-16 yot-container-w-tablet-size-up" style="margin: 0 auto 8px;">
                                <div class="yot-flex">
                                    <div class="yot-w-50 yot-mb-8">
                                        <!-- Title -->
                                        <div class="yot-text-center">
                                            <h4>Temporary Plate</h4>
                                            <h5>Example</h5>
                                        </div>
                                        <div class="image-container-RTP" style="height: 150px;">
                                            <img src="./asset/images/temp-plate-mvfile.png" alt="">
                                        </div>
                                    </div>
                            
                                    <div class="yot-w-50 yot-mb-8">
                                        <div class="yot-mb-4">
                                            <h5>Type of Plate</h5>
                                            <span>'.$row["type_of_plate"].'</span>
                                        </div>
    
                                        <div class="yot-flex yot-flex-fd-c yot-mb-8">
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Format</h5>
                                                    <span>'.$row["format"].'</span>
                                                </div>
                            
                                                <span class="yot-mlr-4"></span>
                            
                                                <div class="yot-mb-4">
                                                    <h5>Mv-File</h5>
                                                    <span>'.$row["mv_file"].'</span>
                                                </div>
                                            </div>
                            
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Region</h5>
                                                    <span>'.$row["region"].'</span>
                                                </div>
                            
                                                <span class="yot-mlr-4"></span>
                            
                                                <div class="yot-mb-4">
                                                    <h5>Delear</h5>
                                                    <span>'.$row["dealer"].'</span>
                                                </div>
                                            </div>
    
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Quantity</h5>
                                                    <span>'.$row["quantity"].'</span>
                                                </div>
                            
                                                <span class="yot-mlr-4"></span>
                            
                                                <div class="yot-mb-4">
                                                    <h5>Price</h5>
                                                    <span>'.$row["total_price"].'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="yot-mb-8 yot-flex yot-flex-ai-c-jc-sb">
                                    <div class="yot-mb-4">
                                        <div>
                                            <h5>Order I.D</h5>
                                            <span>'.$row["order_id_temp_plate"].'</span>
                                        </div>
                                        <div>
                                            <h5>Order Date and Time</h5>
                                            <span>'.$row["created_at_varchar"].'</span>
                                        </div>
                                    </div>
                                
                                    <div class="yot-text-end">
                                        <button class="yot-btn-blue1">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        ';
                    }else if($row["format"] == 'FORMAT 2'){
                        echo'
                            <!-- Temporary Plate Format 2-->
                            <div class="yot-bg-white yot-pa-16 yot-container-w-tablet-size-up" style="margin: 0 auto 8px;">
                                <div class="yot-flex">
                                    <div class="yot-w-50 yot-mb-8">
                                        <!-- Title -->
                                        <div class="yot-text-center">
                                            <h4>Temporary Plate</h4>
                                            <h5>Example</h5>
                                        </div>
                                        <div class="image-container-RTP" style="height: 150px;">
                                            <img src="./asset/images/temp-plate-number.png" alt="">
                                        </div>
                                    </div>
                
                                    <div class="yot-w-50 yot-mb-8">
                                        <div class="yot-flex yot-flex-fd-c yot-mb-8">
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Format</h5>
                                                    <span>'.$row["format"].'</span>
                                                </div>
                
                                                <span class="yot-mlr-4"></span>
                
                                                <div class="yot-mb-4">
                                                    <h5>Register No.</h5>
                                                    <span>'.$row["register_num"].'</span>
                                                </div>
                                            </div>
                
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Region</h5>
                                                    <span>'.$row["region"].'</span>
                                                </div>
                
                                                <span class="yot-mlr-4"></span>
                
                                                <div class="yot-mb-4">
                                                    <h5>Delear</h5>
                                                    <span>'.$row["dealer"].'</span>
                                                </div>
                                            </div>
                
                                            <div class="yot-mb-4">
                                                <h5>Quantity</h5>
                                                <span>'.$row["quantity"].'</span>
                                            </div>
                
                                            <div class="yot-mb-4">
                                                <h5>Price</h5>
                                                <span>'.$row["total_price"].'</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="yot-mb-8 yot-flex yot-flex-ai-c-jc-sb">
                                    <div class="yot-mb-4">
                                        <div>
                                            <h5>Order I.D</h5>
                                            <span>'.$row["order_id_temp_plate"].'</span>
                                        </div>
                                        <div>
                                            <h5>Order Date and Time</h5>
                                            <span>'.$row["created_at_varchar"].'</span>
                                        </div>
                                    </div>
                                
                                    <div class="yot-text-end">
                                        <button class="yot-btn-blue1">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        ';
                    }else if($row["format"] == 'FORMAT 3'){
                        echo'
                            <!-- Temporary Plate Format 3-->
                            <div class="yot-bg-white yot-pa-16 yot-container-w-tablet-size-up" style="margin: 0 auto 8px;">
                                <div class="yot-flex">
                                    <div class="yot-w-50 yot-mb-8">
                                        <!-- Title -->
                                        <div class="yot-text-center">
                                            <h4>Temporary Plate</h4>
                                            <h5>Example</h5>
                                        </div>
                                        <div class="image-container-RTP" style="height: 150px;">
                                            <img src="./asset/images/temp-plate-num-temporary-plate.png" alt="">
                                        </div>
                                    </div>
                
                                    <div class="yot-w-50 yot-mb-8">
                                        <div class="yot-flex yot-flex-fd-c yot-mb-8">
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Format</h5>
                                                    <span>'.$row["format"].'</span>
                                                </div>
                
                                                <span class="yot-mlr-4"></span>
                
                                                <div class="yot-mb-4">
                                                    <h5>Register No.</h5>
                                                    <span>'.$row["register_num"].'</span>
                                                </div>
                                            </div>
                
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Status Plate</h5>
                                                    <span>'.$row["status_plate"].'</span>
                                                </div>
                                            </div>
                
                                            <div class="yot-mb-4">
                                                <h5>Quantity</h5>
                                                <span>'.$row["quantity"].'</span>
                                            </div>
                
                                            <div class="yot-mb-4">
                                                <h5>Price</h5>
                                                <span>'.$row["total_price"].'</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="yot-mb-8 yot-flex yot-flex-ai-c-jc-sb">
                                    <div class="yot-mb-4">
                                        <div>
                                            <h5>Order I.D</h5>
                                            <span>'.$row["order_id_temp_plate"].'</span>
                                        </div>
                                        <div>
                                            <h5>Order Date and Time</h5>
                                            <span>'.$row["created_at_varchar"].'</span>
                                        </div>
                                    </div>
                                
                                    <div class="yot-text-end">
                                        <button class="yot-btn-blue1">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        ';
                    }else if($row["format"] == 'FORMAT 4'){
                        echo'
                            <!-- Temporary Plate Format 4-->
                            <div class="yot-bg-white yot-pa-16 yot-container-w-tablet-size-up" style="margin: 0 auto 8px;">
                                <div class="yot-flex">
                                    <div class="yot-w-50 yot-mb-8">
                                        <!-- Title -->
                                        <div class="yot-text-center">
                                            <h4>Temporary Plate</h4>
                                            <h5>Example</h5>
                                        </div>
                                        <div class="image-container-RTP" style="height: 150px;">
                                            <img src="./asset/images/temp-plate-num-virtual-plate.png" alt="">
                                        </div>
                                    </div>
                
                                    <div class="yot-w-50 yot-mb-8">
                                        <div class="yot-flex yot-flex-fd-c yot-mb-8">
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Format</h5>
                                                    <span>'.$row["format"].'</span>
                                                </div>
                
                                                <span class="yot-mlr-4"></span>
                
                                                <div class="yot-mb-4">
                                                    <h5>Register No.</h5>
                                                    <span>'.$row["register_num"].'</span>
                                                </div>
                                            </div>
                
                                            <div class="yot-flex yot-flex-ai-c">
                                                <div class="yot-mb-4">
                                                    <h5>Status Plate</h5>
                                                    <span>'.$row["status_plate"].'</span>
                                                </div>
                                            </div>
                
                                            <div class="yot-mb-4">
                                                <h5>Quantity</h5>
                                                <span>'.$row["quantity"].'</span>
                                            </div>
                
                                            <div class="yot-mb-4">
                                                <h5>Price</h5>
                                                <span>'.$row["total_price"].'</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="yot-mb-8 yot-flex yot-flex-ai-c-jc-sb">
                                    <div class="yot-mb-4">
                                        <div>
                                            <h5>Order I.D</h5>
                                            <span>'.$row["order_id_temp_plate"].'</span>
                                        </div>
                                        <div>
                                            <h5>Order Date and Time</h5>
                                            <span>'.$row["created_at_varchar"].'</span>
                                        </div>
                                    </div>
                                
                                    <div class="yot-text-end">
                                        <button class="yot-btn-blue1">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
            }
            
            if($emptyTarp == 1 && $emptyTempPlate == 1){
                echo '
                    <div class="yot-flex yot-flex-fd-c-ai-c">
                        <h1>Empty Cart</h1>
                        <img src="../../../../../g4stickerworks/asset/images/undraw_empty_cart_co35.svg" alt="" style="width:300px; height:300px">
                    </div>
                ';
            }
            
        }
    }
?>