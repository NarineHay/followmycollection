<?php
    include "header.php";
    require "config/con1.php";
    if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
        if(!empty($_COOKIE['user'])){
            $user_id=$_COOKIE['user'];
        }
            if(!empty($_SESSION['user'])){
                $user_id=$_SESSION['user'];
            }
    }
?>
<?php require "cookie.php"?>
<link rel="stylesheet" type="text/css" href="css/single_checklist.css?3">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <div class="container55">
        <div class="hash1">
           
        </div>
        <div class="hash2">
            <h2 class="text-center">LIST OF BASEBALL CHECKLIST FOR 2019-2020</h2>
        </div>
        <div class="sectione_table">
     
       
        <br>
            <div class="content_box">
                <div class="cont_box_first">
                    <div class="reload">
                            <svg width="30" height="15" viewBox="0 0 29 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4945 6.40441e-06C7.36109 6.40441e-06 1.46469 5.33915 0.609375 12.25H4.1482C4.50426 10.1398 5.49659 8.18881 6.9923 6.65828C8.48801 5.12775 10.4157 4.09079 12.5171 3.68627C14.6186 3.28176 16.7934 3.52902 18.7504 4.39492C20.7074 5.26083 22.3531 6.70404 23.4671 8.53126L19.7484 12.25H28.5V3.50001L25.9964 6.0036C24.7063 4.14871 22.9863 2.63378 20.9833 1.58829C18.9803 0.542798 16.754 -0.002155 14.4945 6.40441e-06Z" fill="#133960"/>
                            </svg>
                            <svg width="30" height="15" viewBox="0 0 29 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.1482 0.745117H0.5V9.49512L3.09 7.11129C4.38269 8.9321 6.09263 10.4169 8.07676 11.4414C10.0609 12.4659 12.2615 13.0003 14.4945 13C21.6389 13 27.526 7.64887 28.3906 0.745117H24.8518C24.4998 2.82957 23.5269 4.75926 22.0603 6.28171C20.5937 7.80415 18.7016 8.84845 16.6318 9.27798C14.5619 9.7075 12.4106 9.50225 10.4593 8.68907C8.508 7.87589 6.84759 6.49266 5.69531 4.72035L10.02 0.745117H4.1482Z" fill="#133960"/>
                            </svg>
                    </div>
                    <div class="Picture"><p class="pic_text">PICTURE</p></div>
                    <div class="year"><p class="year_text">YEAR</p></div>
                    <div class="manifuter"><p class="manifuter_text">MANUFACTURE</p></div>
                    <div class="colname"><p class="colname_text">CLLLECTION NAME</p></div>
                    <div class="picturestar"><i class="star_o i-click fa fa-star" ></i> </div>
                </div>
                <div class="cont_box_second">
                        <div class="cont_box_second_box">
                            <div class="second_box1"><div class="white_box" data-bs-toggle="modal" data-bs-target="#exampleModal"></div></div>
                            <div class="second_box2"><p class="second_box2_text">1900-1949</p></div>
                            <div class="second_box3"><p class="second_box3_text">PANINI</p></div>
                            <div class="second_box4"><p class="second_box4_text">NATIONAL TREASURES</p></div>
                            <div class="second_box5"><i class="star_o1 i-click fa fa-star" ></i></div>
                        </div>
                        <div class="cont_box_second_box">
                            <div class="second_box1"><div class="white_box" data-bs-toggle="modal" data-bs-target="#exampleModal"></div></div>
                            <div class="second_box2"><p class="second_box2_text">1900-1949</p></div>
                            <div class="second_box3"><p class="second_box3_text">PANINI</p></div>
                            <div class="second_box4"><p class="second_box4_text">NATIONAL TREASURES</p></div>
                            <div class="second_box5"><i class="star_o1 i-click fa fa-star" ></i></div>
                        </div>
                        <div class="cont_box_second_box">
                            <div class="second_box1"><div class="white_box" data-bs-toggle="modal" data-bs-target="#exampleModal"></div></div>
                            <div class="second_box2"><p class="second_box2_text">1900-1949</p></div>
                            <div class="second_box3"><p class="second_box3_text">PANINI</p></div>
                            <div class="second_box4"><p class="second_box4_text">NATIONAL TREASURES</p></div>
                            <div class="second_box5"><i class="star_o1 i-click fa fa-star" ></i></div>
                        </div>
                        <div class="cont_box_second_box">
                            <div class="second_box1"><div class="white_box" data-bs-toggle="modal" data-bs-target="#exampleModal"></div></div>
                            <div class="second_box2"><p class="second_box2_text">1900-1949</p></div>
                            <div class="second_box3"><p class="second_box3_text">PANINI</p></div>
                            <div class="second_box4"><p class="second_box4_text">NATIONAL TREASURES</p></div>
                            <div class="second_box5"><i class="star_o1 i-click fa fa-star" ></i></div>
                        </div>
                        <div class="cont_box_second_box">
                            <div class="second_box1"><div class="white_box" data-bs-toggle="modal" data-bs-target="#exampleModal"></div></div>
                            <div class="second_box2"><p class="second_box2_text">1900-1949</p></div>
                            <div class="second_box3"><p class="second_box3_text">PANINI</p></div>
                            <div class="second_box4"><p class="second_box4_text">NATIONAL TREASURES</p></div>
                            <div class="second_box5"><i class="star_o1 i-click fa fa-star" ></i></div>
                        </div>
                        <div class="cont_box_second_box">
                            <div class="second_box1"><div class="white_box" data-bs-toggle="modal" data-bs-target="#exampleModal"></div></div>
                            <div class="second_box2"><p class="second_box2_text">1900-1949</p></div>
                            <div class="second_box3"><p class="second_box3_text">PANINI</p></div>
                            <div class="second_box4"><p class="second_box4_text">NATIONAL TREASURES</p></div>
                            <div class="second_box5"><i class="star_o1 i-click fa fa-star" ></i></div>
                        </div>
                        <div class="cont_box_second_box">
                            <div class="second_box1"><div class="white_box" data-bs-toggle="modal" data-bs-target="#exampleModal" ></div></div>
                            <div class="second_box2"><p class="second_box2_text">1900-1949</p></div>
                            <div class="second_box3"><p class="second_box3_text">PANINI</p></div>
                            <div class="second_box4"><p class="second_box4_text">NATIONAL TREASURES</p></div>
                            <div class="second_box5"><i class="star_o1 i-click fa fa-star" ></i></div>
                        </div>
                </div>
            </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      Picture
                      </div>

                    </div>
                  </div>
                </div>
   
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

