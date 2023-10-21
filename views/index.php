<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>Muối Review</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        body {
            background: url("https://www.w3schools.com/howto/img_link_tree_template2_bg.jpg");
            /* The image used for background */
        }

        .container {
            width: 100%;
            height: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .links-container {
            display: flex;
            flex-direction: column;
            jusify-content: center;
            align-items: center;
        }

        .links-container a {
            width: 90%;
        }

        .w3-theme-l1:hover {
            background-color: #f279a1 !important;
        }

        .margin-top-2 {
            margin-top: 32px;
        }

        .bottom {
            width: 100%;
            text-align: center;
            width: auto;
            font-weight: bolder;
        }

        .bottom span {
            color: #ed4d82;
        }

        .bottom svg {
            stroke: #ed4d82;
            fill: #ed4d82;
        }

        @media (min-width: 768px) {
            .link {
                width: 100%;
            }
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        .link {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Content container -->
    <div class="container">

        <!-- Image and name container. Change to your pictue here. -->
        <div style="text-align: center">
            <img src="/assets/images/salt.jpg" class="w3-margin" alt="image" width="150px" height="150px" style="border-radius: 50%;">
            <p><span class="name w3-padding w3-pink w3-round" style="font-weight: bolder;">Chào bạn, chúng tớ là Muối Review!</span></p>
            <p style="font-weight: bolder;">Các sản phẩm mà Muối dùng ở đây nha!</p>
        </div>

        <!-- Links section 1. Replace the # inside of the "" with your links. -->
        <h4 class="margin-top-2" style="text-align: center;">SẢN PHẨM REVIEW</h4>
        <div class="links-container">
            <a href="https://tndg.link/api/redirect?next=https://shope.ee/2VQTLIIXDe" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">
                <img src="/assets/images/vn-11134207-7r98o-lm09ay3m9azj83.jpg" width="40px">
                <div style="width: 100%;">2. Ly giữ nhiệt Tyeso Wonder</div>
            </a>
            <a href="https://tndg.link/api/redirect?next=https://shope.ee/7zlPahHGcc" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">
                <img src="/assets/images/vn-11134207-7qukw-lignj74y1824b2.jpg" width="40px">
                <div style="width: 100%;">1. Bật lửa cute</div>
            </a>
            <!-- <br>
            <a href="#" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">Instagram</a> -->
        </div>

        <!-- Links section 2. Replace the # inside of the "" with your links. -->
        <h4 class="margin-top-2" style="text-align: center;">KIẾM TIỀN CÙNG SHOPEE</h4>
        <div class="links-container">
            <a href="https://tndg.link/api/redirect?next=https://shope.ee/6KdBdTPxVi" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">
                <img src="/assets/images/ref.jpg" width="40px">
                <div style="width: 100%;padding: 0 10px">Trở thành Shopee KOL Affiliate</div>
            </a>
        </div>

        <!-- Bottom section 3 -->
        <div class="bottom margin-top-2 w3-padding w3-round">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
            <span style="vertical-align: 7px;"> 2023 - Muối Review</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
        </div>

    </div>
    <script>
        feather.replace()
    </script>
</body>

</html>