<!DOCTYPE html>
<html lang="en">

<head>
    @include("master.header")
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body>
    <div class="about-wrapper bg-gradient-ps" style="background-image: url('img/background2.svg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 1357px 813px;
    height:850px;">
        @include("tool.menu")
        <div>
            <input id="height" type="text" style="border:1px solid black;
            padding: 0px;
            font-size:20px;
            position:fixed;
            top: 249px;
            left: 217px;
            z-index:100;
            font-family: 'Barlow Semi Condensed', sans-serif;
            " placeholder="m">
        </div>
        <div>
            <input id="weight" type="text" style="border:1px solid black;
            padding: 0px;
            font-size:20px;
            position:fixed;
            top: 307px;
            left: 217px;
            z-index:100;
            font-family: 'Barlow Semi Condensed', sans-serif;
            " placeholder="kg">
        </div>
        <div>
            <input id="age" type="text" style="border:1px solid black;
            padding: 0px;
            font-size:20px;
            position:fixed;
            top: 363px;
            left: 217px;
            z-index:100;
            font-family: 'Barlow Semi Condensed', sans-serif;
            ">
        </div>
        <div>
            <div class="input" style="border:1px solid black;
            padding: 0px;
            width:213px;
            font-size:20px;
            position:fixed;
            top: 412px;
            left: 217px;
            z-index:100;
            font-family: 'Barlow Semi Condensed', sans-serif;
            ">
            <select id="gender" class="custom-select" id="gender">
                <option selected></option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
            </div>
        </div>
        <div>
            <button class="button-58" role="button" id="button">Summit</button>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js-->
    <script src="/client/vendor_assets/js/jquery/jquery-1.12.3.js"></script>
    <script src="/client/vendor_assets/js/bootstrap/popper.js"></script>
    <script src="/client/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/client/vendor_assets/js/jquery-ui.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.barrating.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.counterup.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.waypoints.min.js"></script>
    <script src="/client/vendor_assets/js/masonry.pkgd.min.js"></script>
    <script src="/client/vendor_assets/js/owl.carousel.min.js"></script>
    <script src="/client/vendor_assets/js/select2.full.min.js"></script>
    <script src="/client/vendor_assets/js/slick.min.js"></script>
    <script src="/client/theme_assets/js/locator.js"></script>
    <script src="/client/theme_assets/js/main.js"></script>
    <script src="/client/theme_assets/js/map.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                var height=$("#height").val();
                var weight=$("#weight").val();
                var age=$("#age").val();
                var sex=$("#gender").val();
                var bmi=weight/(height*height);
                var n = parseFloat(bmi);
                bmi = Math.round(n * 1000)/1000;
                var bmr;
                var message;
                if(sex==1){
                    bmr=(10*weight)+(6.25*height*100)-5*age+5;
                }
                else if(sex==2){
                    bmr=10*weight+6.25*height*100-5*age-161;
                }
                var a = parseFloat(bmr);
                bmr = Math.round(a * 1000)/1000;
                message="The minimum amount of energy you need is "+bmr+" calo.";
                if(bmi<18.5){
                    alert("you are too skinny. BMI="+bmi+"\n"+message+"\n You need eat more and go to gym");
                }
                 if(bmi>=18.5 && bmi<=24.9)
                    alert("Perfect. BMI="+bmi+"\n"+message+"\n Do exercise usually to keep fit.");
                         if(bmi>=25 && bmi<=29.9){
                            alert("You are gaining weight. BMI="+bmi+"\n"+message+"\n Do more exercise to keep BMI at about 18.5-24.9");}
                                 if(bmi>29.9){
                                    alert("You are too fat. BMI="+bmi+"\n"+message+"\n Find out some cardio exercise and go to our page to have some tips about food");
                }
            });


});
    </script>
    <!-- endinject-->
</body>

</html>
