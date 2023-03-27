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

            // DISPLAY
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_ready_to_print_tbl WHERE user_id = '$userId' ORDER BY order_ready_to_print_id DESC");
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
                                <img src="../../../../../g4stickerworks/asset/images/orders/'.$row["image"].'" alt="">
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
    
                    <div class="yot-mb-8 yot-flex yot-flex-jc-sb">
                        <div>
                            <h4>Message</h4>
                            <span>'.$row["message"].'</span>
                        </div>
    
                        <div>
                            <button class="yot-btn-blue1">Cancel</button>
                        </div>
                    </div>
                </div>
                ';
            }

            // DISPLAY
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_temp_plate_tbl WHERE user_id = '$userId' ORDER BY order_temp_plate_id DESC");
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
                        
                            <div class="yot-text-end">
                                <button class="yot-btn-blue1">Cancel</button>
                            </div>
                        </div>
                    ';
                }
            }

            
        }
    }
?>