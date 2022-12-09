<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Progress</title>
    <link rel="stylesheet" href="Signup_Progress.css">
    <link rel="stylesheet" href="Sign2.css">

</head>
<body style="overflow: hidden">
<div>
<div class="HOME">
    <div style=" width: 130px;background-size: contain;height: 38px; display: inline-block" class="img">

    </div>
        <div class="BoDy">
        <div class="prog_Bar">
            <label title="Return" class="Return">
            <span class="view_box" onclick="Back_check()">
                <img src="icons/icons8_back_25px.png">
            </span>
            </label>

            <span class="range_text" id="range">
            </span>
            <p id="iterations" class="iterations">2/12</p>
        </div>
        <div>
        <div class="Chose_body_container" id="Chose_body_container" style="display: flex">
            <div class="Chose_body">
                <div class="Chose_body_Con">
                    <div class="Chose_body_text">
                        <p>You Have Chosen Lose Weight As Your Future Goal</p>
                        <h1>Choose Your Future physique</h1>
                    </div>
                    <div class="Chose_body_physique">
                        <div style="display: flex ; flex-flow: column;">
                            <label tabindex="0" class="lab_right1" , id="Slim Body">
                                <input type="radio" name="Physique" value="Slim Body" , class="LW" , onclick="Border_click1() , range2()">
                                <span class="span1">
                                    <span class="span11">Slim Body</span>
                                </span>
                                <span class="IMG1span">
                                    <span class="img-span1">
                                        <span>
                                            <img src="icons//SLIM_BODY.png" alt="Slim Body">
                                        </span>
                                    </span>
                                </span>
                            </label>
                            <label tabindex="0" class="lab_right1" , id="Slim Shredded">
                                <input type="radio" name="Physique" value="Slim Shredded" , class="LW" , onclick="Border_click1(), range2()">
                                <span class="span1">
                                    <span class="span11">Slim Shredded Body</span>
                                </span>
                                <span class="IMG1span">
                                    <span id="img-span1">
                                        <span>
                                            <img src="icons//SLIM_SHREDDED_BODY.png" alt="Slim Shredded">
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is for the first frame -->
        <div class="Chose_body_Type" id="Chose_body_Type" style="display: none">
            <div class="Chose_body">
                <div class="Chose_body_Con">
                    <div class="Chose_body_text">
                        <p>Now Please Choose The Shape Closest To Your Body At The Moment</p>
                        <h1>Choose Your Body Type</h1>
                    </div>
                    <div class="Chose_body_physique">
                        <div style="display: flex ; flex-flow: column;">
                            <label tabindex="0" class="lab_right1" , id="Ectomorph">
                                <input type="radio" name="Body_Type" value="Ectomorph" , class="LW" , onclick="Border_click2(), range3()">
                                <span class="span1">
                                    <span class="span11">ECTOMORPH</span>
                                    <span class="span111">Lean, Long & Fast Metabolism </span>
                                </span>
                                <span class="IMG1span">
                                    <span class="img-span1">
                                        <span>
                                            <img src="icons//Ectomorph.png" alt="Ectomorph">
                                        </span>
                                    </span>
                                </span>
                            </label>
                            <label tabindex="0" class="lab_right1" , id="Endomorph">
                                <input type="radio" name="Body_Type" value="Endomorph" , class="LW" , onclick="Border_click2(), range3()">
                                <span class="span1">
                                    <span class="span11">ENDOMORPH</span>
                                    <span class="span111">Soft, Round & Slow Metabolism </span>
                                </span>
                                <span class="IMG1span">
                                    <span class="img-span1">
                                        <span>
                                            <img src="icons//endomorph.png" alt="Endomorph">
                                        </span>
                                    </span>
                                </span>
                            </label>
                            <label tabindex="0" class="lab_right1" , id="Mesomorph">
                                <input type="radio" name="Body_Type" value="Mesomorph" , class="LW" , onclick="Border_click2(), range3()">
                                <span class="span1">
                                    <span class="span11">MESOMORPH</span>
                                    <span class="span111">Muscular, Well-Built & Average Metabolism </span>
                                </span>
                                <span class="IMG1span">
                                    <span class="img-span1">
                                        <span>
                                            <img src="icons//mesomorph.png" alt="Mesomorph">
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is for the second frame -->
        <div class = "Birth_Date_Container" id="Birth_Date_Container" style="display: none">
            <div class="Birth_Date">
                <div class="Birth_Date_CON">
                    <div class="Birth_Date_Text">
                        <h1>
                            Enter Your Date Of Birth?
                        </h1>
                    </div>
                    <div class="BD">
                        <div class="BD_data">
                            <div>
                                <p class="P">Month</p>
                                <div>
                                    <select required class="Month" type="button" title="Month" id="Month" onclick="back_rgb()">
                                        <option value="Month" selected>January</option>
                                        <option value="Month">February</option>
                                        <option value="Month">March</option>
                                        <option value="Month">April</option>
                                        <option value="Month">May</option>
                                        <option value="Month">June</option>
                                        <option value="Month">July</option>
                                        <option value="Month">August</option>
                                        <option value="Month">September</option>
                                        <option value="Month">October</option>
                                        <option value="Month">November</option>
                                        <option value="Month">December</option>
                                    </select>
<!--                                    <svg viewBox="0 0 24 24" class="Month_svg">-->
<!--                                        <use href="/_next/static/assets/Ki-lW0GBAPQRSqJdnOaoC/sprite.svg#dropdownDown-usage"></use>-->
<!--                                    </svg>-->
                                </div>
                            </div>
                            <label class="DAY">
                                <span>Day</span>
                                <span class="DD">
                                    <input required type="number" name="DD" class="DayD" pattern="[0-9]*" id="DD" onclick="back_day()">
                                </span>
                            </label>
                            <label class ="Year">
                                <span>Year</span>
                                <span class="YY">
                                    <input required type="number" name="YY" class="YearD" pattern="[0-9]*" id="YY" onclick="back_year()">
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="continue">
                        <button type="submit" title="Continue" class="Continue_B" onclick="Border_click3() , range5()">
                            <p>Continue</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is for the fourth frame -->
        <div class="Name_User" id="Name_User" style="display: none"> <!-- check the first and user name -->
            <div class="Name">
                <div class="Name_Container">
                    <div class="Name_User_text">
                        <h1>Please Enter Your Name:</h1>
                    </div>
                    <div class="Name_User_info">
                        <label class="NU_Con">
                            <span class="NU_span1">First Name:</span>
                            <span class="NU_Span2">
                                <input required type="text" name="name" class="Name_text" pattern="" id="Name_text" autocomplete="off">
                            </span>
                        </label>
                        <label class="NU_Con" style="margin-top: 10px">
                            <span class="NU_span1">Last Name:</span>
                            <span class="NU_Span2">
                                <input required type="text" name="name" class="Name_text" pattern="" id="Name_text1"  autocomplete="off">
                            </span>
                        </label>
                        <label class="NU_Con" style="margin-top: 10px">
                            <span class="NU_span1">User Name:</span>
                            <span class="NU_Span2">
                                <input required type="text" name="name" class="Name_text" pattern="" id="Name_text2" autocomplete="off">
                            </span>
                        </label>
                    </div>
                    <div class="continue1">
                        <button type="submit" title="Continue" class="Continue_N1" onclick="Border_click4() , range6()">
                            <p>Continue</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is for the fifth frame -->
        <div class="Height_Weight" id="Height_Weight" style="display: none">
            <div class="Height_Weight_Container">
                <div class="Height_Weight_Con">
                    <div class="H_W_Header">
                        <p class="H_W_P">
                            Welcome To Our Website,
                        </p>
                        <h1>
                            What's Your Height & Weight?
                        </h1>
                    </div>
                    <div class="H_W_Option_Con">
                        <div class="H_W_Option">
                            <label class="Option , imperial" tabindex="0" id="imperial" onclick="H_W_Clicked_imp()">
                                <input required name="Measure_Sys" type="radio" class="Op_imp" value="imperial">
                                <span class="OP_span">IMPERIAL</span>
                            </label>
                            <label class="Option , metric" tabindex="0" id="metric" onclick="H_W_Clicked_met()">
                                <input required name="Measure_Sys" type="radio" class="Op_imp" value="metric">
                                <span class="OP_span">METRIC</span>
                            </label>
                        </div>
                    </div>
                    <div class="Height_FT_Con" style="display: none" id="feet">
                        <label class="Con_HFT">
                            <span class="HFT_Con_text">Height (ft)</span>
                            <span class="HFT_text">
                                 <input required type="number" class="Current_Height_FT" name="currentHeightFT" pattern="[0-9]*">
                            </span>
                        </label>
                    </div>
                    <div class="Height_IN_Con" style="display: none" id="inch">
                        <label class="Con_HIN">
                            <span class="HIN_Con_text">Height (inch)</span>
                            <span class="HIN_text">
                                 <input required type="number" class="Current_Height_IN" name="currentHeightIN" pattern="[0-9]*">
                            </span>
                        </label>
                    </div>
                    <div class="Height_Con" id="cm">
                        <label class="Con_Height">
                            <span class="Height_Con_text">Height (cm)</span>
                            <span class="Height_text" id="Height_text">
                                <input required type="number" class="Current_Height" name="currentHeight" pattern="[0-9]*">
                            </span>
                        </label>
                    </div>
                    <div class="Weight_Con">
                        <label class="Con_Weight">
                            <span class="Weight_Con_text" id="weight">Weight (Kg)</span>
                            <span class="Weight_text" id="Weight_text">
                                <input type="number" class="Current_Weight" name="currentWeight" pattern="[0-9]*">
                            </span>
                        </label>
                    </div>
                    <div class="continue1">
                        <button type="submit" title="Continue" class="Continue_N1" onclick="Border_click5() , range7()">
                            <p>Continue</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is for the sixth frame -->
        <div class="Target-weight" id="Target-weight" style="display: none">
            <div class="TW_Con">
                <div class="Con_TW">
                    <div class="H_W_Header">
                        <h1>
                            What's Your Target Weight?
                        </h1>
                    </div>
                    <div class="H_W_Option_Con">
                        <div class="H_W_Option">
                            <label class="Option , imperial" tabindex="0" id="imperial_TW" onclick="TW_Clicked_imp()">
                                <input name="Measure_Sys" type="radio" class="Op_imp" value="imperial">
                                <span class="OP_span">IMPERIAL</span>
                            </label>
                            <label class="Option , metric" tabindex="0" id="metric_TW" onclick="TW_Clicked_met()">
                                <input name="Measure_Sys" type="radio" class="Op_imp" value="metric">
                                <span class="OP_span">METRIC</span>
                            </label>
                        </div>
                    </div>
                    <div class="Weight_Con">
                        <label class="Con_Weight">
                            <span class="Weight_Con_text" id="weight_TW">Weight (Kg)</span>
                            <span class="Weight_text" id="Weight_text1">
                                <input type="number" class="Current_Weight" name="currentWeight" pattern="[0-9]*">
                            </span>
                        </label>
                    </div>
                    <div class="continue1">
                        <button type="submit" title="Continue" class="Continue_N1" onclick="Border_click6() , range8()">
                            <p>Continue</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is for the seventh frame -->
        <div class="Level_Fitness" id="Level_Fitness" style="display: none">
            <div class="Level_Fitness_Con">
                <div class="Con_Level_F">
                    <div class="LF_text">
                        <p>
                            Choose your current level of fitness to align the workout plan with.
                        </p>
                        <h1>What's your level of fitness</h1>
                    </div>
                    <div class="LF_Ranger">
                        <div class="LF_Ranger_Con">
                            <input type="range" min="0" max="10" step="1" value="0">
                            <span class="value" style="color: rgb(251,91,33)">0</span>
                        </div>
                        <div class="LF_desc">
                            <p>Worst Shape</p>
                            <p>I'm On Fire</p>
                        </div>
                    </div>
                    <div class="continue1">
                        <button type="submit" title="Continue" class="Continue_N1" onclick="Border_click7() , range9()">
                            <p>Continue</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is for the eighth frame -->
        <div class="Health_issues" id="Health_issues" style="display: none">
            <div class="HI_Con">
                <div class="Con_HI">
                    <div class="HI_header">
                        <h1>ATTENTION !!</h1>
                    </div>
                    <div class="HI_Desc_Con">
                        <div class="HI_Desc">
                            <p>
                                Please Let us know if you have any health issues from the list down which you have you suffer from, so we can take the deal with you very carefully ..
                            </p>
                            <ul class="HI_List">
                                <li>benign or malignant tumor</li>
                                <li>heart disease</li>
                                <li>hypertension</li>
                                <li>severe scoliosis</li>
                                <li>spinal damages</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-100" id="mt-100">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <label>
                                            <input type="radio" class="option-input radio" name="HI_select" onclick="HI_Hide()" >
                                            None Of The Above
                                        </label>
                                        <label class="left_HI">
                                            <input type="radio" class="option-input radio" name="HI_select" onclick="HI_Hide()">
                                            Yes, I Have
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Issues_Found" id="Issues_Found" style="display: none">
                        <div class="Issues_Found_Con">
                            <h3>
                                Please Enter Your Health Issues:
                            </h3>
                        </div>
                        <div class="issues_text">
                            <textarea type="text" name="name" class="Name_text4" maxlength="200" pattern="" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="continue1">
                        <button type="submit" title="Continue" class="Continue_N1" onclick="range10(), Border_click9()">
                            <p>Continue</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- here is the 9th frame -->
        <div id="Fat_level" class="Split" style="display: none" >
            <div class="Left" id="Left" style="opacity: 1;">
                <header class="Left1">
                    <div class="Fat_image">
                        <span id="#1" class="SPAN_Fat hide">
                             <span class="Fat_IM">
                                 <img src="icons/FROM_5_TO_9.png">
                            </span>
                        </span>
                        <span id="#2" class="SPAN_Fat hide">
                             <span class="Fat_IM">
                                 <img src="icons/FROM_10_TO_14.png">
                            </span>
                        </span>
                        <span id="#3" class="SPAN_Fat hide">
                             <span class="Fat_IM">
                                 <img src="icons/FROM_15_TO_19.png">
                            </span>
                        </span>
                        <span id="#4" class="SPAN_Fat hide">
                             <span class="Fat_IM">
                                 <img src="icons/FROM_20_TO_24.png">
                            </span>
                        </span>
                        <span id="#5" class="SPAN_Fat visible">
                             <span class="Fat_IM">
                                 <img src="icons/FROM_25_TO_29.png">
                            </span>
                        </span>
                        <span id="#6" class="SPAN_Fat hide">
                             <span class="Fat_IM">
                                 <img src="icons/FROM_30_TO_34.png">
                            </span>
                        </span>
                        <span id="#7" class="SPAN_Fat hide">
                             <span class="Fat_IM">
                                 <img src="icons/FROM_35_TO_39.png">
                            </span>
                        </span>
                        <span id="#8" class="SPAN_Fat hide">
                             <span class="Fat_IM">
                                 <img src="icons/MORE_THAN_40.png">
                            </span>
                        </span>
                    </div>
                </header>
            </div>
            <div class="Right" id="Right">
                <div class="Range_fat">
                    <div class="R_F_Con">
                        <div class="R_F_text">
                            <h1>
                                Please Chose Your Body Fat Level:
                            </h1>
                        </div>
                        <div class="R_F_range">
                            <div id="form-wrapper">
                                <form >
                                    <div id="debt-amount-slider">
                                        <input type="radio" name="Fat_per" id="1" value="1" onclick="FAT_L()">
                                        <label for="1" data-debt-amount="5-9%"></label>
                                        <input type="radio" name="Fat_per" id="2" value="2" onclick="FAT_L()">
                                        <label for="2" data-debt-amount="10-14%"></label>
                                        <input type="radio" name="Fat_per" id="3" value="3" onclick="FAT_L()">
                                        <label for="3" data-debt-amount="15-19%"></label>
                                        <input type="radio" name="Fat_per" id="4" value="4" onclick="FAT_L()">
                                        <label for="4" data-debt-amount="20-24%"></label>
                                        <input type="radio" name="Fat_per" id="5" value="5" onclick="FAT_L()" checked>
                                        <label for="5" data-debt-amount="25-29%"></label>
                                        <input type="radio" name="Fat_per" id="6" value="6" onclick="FAT_L()">
                                        <label for="6" data-debt-amount="30-34%"></label>
                                        <input type="radio" name="Fat_per" id="7" value="7" onclick="FAT_L()">
                                        <label for="7" data-debt-amount="35-39%"></label>
                                        <input type="radio" name="Fat_per" id="8" value="8" onclick="FAT_L()">
                                        <label for="8" data-debt-amount=">40%"></label>
                                        <div id="debt-amount-pos"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="continue1">
                            <button type="submit" title="Continue" class="Continue_F1" onclick="Border_click8(), range4()">
                                <p>Continue</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<script>
    var x = 0 ; // to detect when change the border of month    email-send-334104
    var y = 0 ; // to detect when change the border of Day
    var z = 0 ; // to detect when change the border of year

    function Back_check(){
        var W = document.getElementById('range').className;

        if(W == "range_text1"){
            setTimeout(function (){
                document.getElementById("Chose_body_container").style.display="flex";
                document.getElementById('range').className = "range_text";
                document.getElementById('iterations').innerText = "2/12";
            },350);
            setTimeout(function (){
                document.getElementById("Chose_body_Type").style.display="none";
            },450);
        }
        if(W == "range_text2"){
            setTimeout(function (){
                document.getElementById("Chose_body_Type").style.display="flex";
                document.getElementById('range').className = "range_text1";
                document.getElementById('iterations').innerText = "3/12";
            },350);
            setTimeout(function (){
                document.getElementById("Fat_level").style.display="none";
            },450);
        }
        if(W == "range_text3"){
            setTimeout(function (){
                document.getElementById("Fat_level").style.display="flex";
                document.getElementById('range').className = "range_text2";
                document.getElementById('iterations').innerText = "4/12";
            },350);
            setTimeout(function (){
                document.getElementById("Birth_Date_Container").style.display="none";
            },450);
        }
        if(W == "range_text4"){
            setTimeout(function (){
                document.getElementById("Birth_Date_Container").style.display="flex";
                document.getElementById('range').className = "range_text3";
                document.getElementById('iterations').innerText = "5/12";
            },350);
            setTimeout(function (){
                document.getElementById("Name_User").style.display="none";
            },450);
        }
        if(W == "range_text5"){
            setTimeout(function (){
                document.getElementById("Name_User").style.display="flex";
                document.getElementById('range').className = "range_text4";
                document.getElementById('iterations').innerText = "6/12";
            },350);
            setTimeout(function (){
                document.getElementById("Height_Weight").style.display="none";
            },450);
        }
        if(W == "range_text6"){
            setTimeout(function (){
                document.getElementById("Height_Weight").style.display="flex";
                document.getElementById('range').className = "range_text5";
                document.getElementById('iterations').innerText = "7/12";
            },350);
            setTimeout(function (){
                document.getElementById("Target-weight").style.display="none";
            },450);
        }
        if(W == "range_text7"){
            setTimeout(function (){
                document.getElementById("Target-weight").style.display="flex";
                document.getElementById('range').className = "range_text6";
                document.getElementById('iterations').innerText = "8/12";
            },350);
            setTimeout(function (){
                document.getElementById("Level_Fitness").style.display="none";
            },450);
        }
        if(W == "range_text8"){
            setTimeout(function (){
                document.getElementById("Level_Fitness").style.display="flex";
                document.getElementById('range').className = "range_text7";
                document.getElementById('iterations').innerText = "9/12";
            },350);
            setTimeout(function (){
                document.getElementById("Health_issues").style.display="none";
            },450);
        }
    }
    function range2(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text1" ;
            document.getElementById('iterations').innerText = "3/12";
        },450);

    }
    function range3(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text2" ;
            document.getElementById('iterations').innerText = "4/12";
        },350);
    }
    function range4(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text3" ;
            document.getElementById('iterations').innerText = "5/12";
        },150);
    }
    function range5(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text4" ;
            document.getElementById('iterations').innerText = "6/12";
        },150);
    }
    function range6(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text5" ;
            document.getElementById('iterations').innerText = "7/12";
        },150);
    }
    function range7(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text6" ;
            document.getElementById('iterations').innerText = "8/12";
        },150);
    }
    function range8(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text7" ;
            document.getElementById('iterations').innerText = "9/12";
        },150);
    }
    function range9(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text8" ;
            document.getElementById('iterations').innerText = "10/12";
        },150);
    }
    function range10(){
        setTimeout(function (){
            document.getElementById('range').className = "range_text9" ;
            document.getElementById('iterations').innerText = "11/12";
        },150);
    }


    function HI_Hide(){
        var HI = document.getElementsByName("HI_select");
        if (HI[0].checked){
            document.getElementById("Issues_Found").style.display = "none";
            document.getElementById("mt-100").style.marginBottom = "20px";
        }
        else if(HI[1].checked){
            document.getElementById("Issues_Found").style.display = "flex";
            document.getElementById("mt-100").style.marginBottom = "0px";
        }
    }
    ////////////////////////////////
    var elem = document.querySelector('input[type="range"]');

    var rangeValue = function(){
        var newValue = elem.value;
        var target = document.querySelector('.value');
        target.innerHTML = newValue;
    }

    elem.addEventListener("input", rangeValue);

    ////////////////////////////////

    function TW_Clicked_imp(){
        document.getElementById("imperial_TW").className = "Option , metric";
        document.getElementById("metric_TW").className = "Option , imperial";
        document.getElementById("weight_TW").innerText = "Weight (lb)";
    }
    function TW_Clicked_met(){
        document.getElementById("metric_TW").className = "Option , metric";
        document.getElementById("imperial_TW").className = "Option , imperial";
        document.getElementById("weight_TW").innerText = "Weight (kg)";
    }

    function H_W_Clicked_imp(){
        document.getElementById("imperial").className = "Option , metric";
        document.getElementById("metric").className = "Option , imperial";
        document.getElementById("cm").style.display = "none";
        document.getElementById("feet").style.display = "flex";
        document.getElementById("inch").style.display = "flex";
        document.getElementById("weight").innerText = "Weight (lb)";

    }
    function H_W_Clicked_met(){
        document.getElementById("metric").className = "Option , metric";
        document.getElementById("imperial").className = "Option , imperial";
        document.getElementById("feet").style.display = "none";
        document.getElementById("inch").style.display = "none";
        document.getElementById("cm").style.display = "flex";
        document.getElementById("weight").innerText = "Weight (Kg)";
    }
    function back_rgb(){
        x = x + 1 ;
        if(x%2 == 1){
            document.getElementById("Month").className = 'Month_open' ;
        }
        else{
            document.getElementById("Month").className = 'Month' ;
        }
    }
    function back_day(){
        y = y+1 ;
        if (y%2 == 1){
            document.getElementById("DD").style.border = "2px solid rgb(251,91,33)";
        }
        else{
            document.getElementById("DD").style.border = "2px solid rgb(117,117,117)";
        }
    }
    function back_year(){
        z = z+1;
        if(z%2 == 1){
            document.getElementById("YY").style.border = "2px solid rgb(251,91,33)";
        }
        else{
            document.getElementById("YY").style.border = "2px solid rgb(117,117,117)";
        }
    }


    function Border_click1(){
        var x = document.getElementsByName("Physique");
        if(x[0].checked){
            document.getElementById(x[0].value).style.border = "rgb(251,91,33) 2px solid";
            document.getElementById(x[1].value).style.border = "2px solid transparent";
            setTimeout(function (){
                document.getElementById("Chose_body_container").style.display="none";
            },350);
            setTimeout(function (){
                document.getElementById("Chose_body_Type").style.display="flex";
            },450);

        }
        else if (x[1].checked){
            document.getElementById(x[1].value).style.border = "rgb(251,91,33) 2px solid";
            document.getElementById(x[0].value).style.border = "2px solid transparent";
            setTimeout(function (){
                document.getElementById("Chose_body_container").style.display="none";
            },350);
            setTimeout(function (){
                document.getElementById("Chose_body_Type").style.display="flex";
            },450);

        }
    }

    function Border_click2(){
        var x = document.getElementsByName("Body_Type");
        if(x[0].checked){
            document.getElementById(x[0].value).style.border = "rgb(251,91,33) 2px solid";
            document.getElementById(x[1].value).style.border = "2px solid transparent";
            document.getElementById(x[2].value).style.border = "2px solid transparent";
            setTimeout(function (){
                document.getElementById("Chose_body_Type").style.display="none";
            },300);
            setTimeout(function (){
                document.getElementById("Fat_level").style.display="flex";
            },350);
        }
        else if (x[1].checked){
            document.getElementById(x[1].value).style.border = "rgb(251,91,33) 2px solid";
            document.getElementById(x[0].value).style.border = "2px solid transparent";
            document.getElementById(x[2].value).style.border = "2px solid transparent";
            setTimeout(function (){
                document.getElementById("Chose_body_Type").style.display="none";
            },300);
            setTimeout(function (){
                document.getElementById("Fat_level").style.display="flex";
            },350);
        }
        else if (x[2].checked){
            document.getElementById(x[2].value).style.border = "rgb(251,91,33) 2px solid";
            document.getElementById(x[0].value).style.border = "2px solid transparent";
            document.getElementById(x[1].value).style.border = "2px solid transparent";
            setTimeout(function (){
                document.getElementById("Chose_body_Type").style.display="none";
            },300);
            setTimeout(function (){
                document.getElementById("Fat_level").style.display="flex";
            },350);
        }
    }

    function Border_click3(){
        setTimeout(function (){
            document.getElementById("Birth_Date_Container").style.display="none";
        },150);
        setTimeout(function (){
            document.getElementById("Name_User").style.display="flex";
        },150);

    }
    function Border_click4(){
        setTimeout(function (){
            document.getElementById("Name_User").style.display="none";
        },150);
        setTimeout(function (){
            document.getElementById("Height_Weight").style.display="flex";
        },150);

    }
    function Border_click5(){
        setTimeout(function (){
            document.getElementById("Height_Weight").style.display="none";
        },150);
        setTimeout(function (){
            document.getElementById("Target-weight").style.display="flex";
        },150);

    }
    function Border_click6(){
        setTimeout(function (){
            document.getElementById("Target-weight").style.display="none";
        },150);
        setTimeout(function (){
            document.getElementById("Level_Fitness").style.display="flex";
        },150);
    }
    function Border_click7(){
        setTimeout(function (){
            document.getElementById("Level_Fitness").style.display="none";
        },150);
        setTimeout(function (){
            document.getElementById("Health_issues").style.display="flex";
        },150);
    }
    function Border_click8(){
        setTimeout(function (){
            document.getElementById("Fat_level").style.display="none";
        },150);
        setTimeout(function (){
            document.getElementById("Birth_Date_Container").style.display="flex";
        },150);
    }
    function Border_click9(){
        setTimeout(function (){
            window.location.href='/untitled1/Email_and_pass.php' ;
        },350);
    }
    function FAT_L(){
        var x = document.getElementsByName('Fat_per')
        if(x[0].checked){
            document.getElementById("#1").className = "SPAN_Fat visible";
            document.getElementById("#2").className = "SPAN_Fat hide";
            document.getElementById("#3").className = "SPAN_Fat hide";
            document.getElementById("#4").className = "SPAN_Fat hide";
            document.getElementById("#5").className = "SPAN_Fat hide";
            document.getElementById("#6").className = "SPAN_Fat hide";
            document.getElementById("#7").className = "SPAN_Fat hide";
            document.getElementById("#8").className = "SPAN_Fat hide";
        }
        else if(x[1].checked){
            document.getElementById("#1").className = "SPAN_Fat hide";
            document.getElementById("#2").className = "SPAN_Fat visible";
            document.getElementById("#3").className = "SPAN_Fat hide";
            document.getElementById("#4").className = "SPAN_Fat hide";
            document.getElementById("#5").className = "SPAN_Fat hide";
            document.getElementById("#6").className = "SPAN_Fat hide";
            document.getElementById("#7").className = "SPAN_Fat hide";
            document.getElementById("#8").className = "SPAN_Fat hide";
        }
        else if(x[2].checked){
            document.getElementById("#1").className = "SPAN_Fat hide";
            document.getElementById("#2").className = "SPAN_Fat hide";
            document.getElementById("#3").className = "SPAN_Fat visible";
            document.getElementById("#4").className = "SPAN_Fat hide";
            document.getElementById("#5").className = "SPAN_Fat hide";
            document.getElementById("#6").className = "SPAN_Fat hide";
            document.getElementById("#7").className = "SPAN_Fat hide";
            document.getElementById("#8").className = "SPAN_Fat hide";
        }
        else if(x[3].checked){
            document.getElementById("#1").className = "SPAN_Fat hide";
            document.getElementById("#2").className = "SPAN_Fat hide";
            document.getElementById("#3").className = "SPAN_Fat hide";
            document.getElementById("#4").className = "SPAN_Fat visible";
            document.getElementById("#5").className = "SPAN_Fat hide";
            document.getElementById("#6").className = "SPAN_Fat hide";
            document.getElementById("#7").className = "SPAN_Fat hide";
            document.getElementById("#8").className = "SPAN_Fat hide";
        }
        else if(x[4].checked){
            document.getElementById("#1").className = "SPAN_Fat hide";
            document.getElementById("#2").className = "SPAN_Fat hide";
            document.getElementById("#3").className = "SPAN_Fat hide";
            document.getElementById("#4").className = "SPAN_Fat hide";
            document.getElementById("#5").className = "SPAN_Fat visible";
            document.getElementById("#6").className = "SPAN_Fat hide";
            document.getElementById("#7").className = "SPAN_Fat hide";
            document.getElementById("#8").className = "SPAN_Fat hide";
        }
        else if(x[5].checked){
            document.getElementById("#1").className = "SPAN_Fat hide";
            document.getElementById("#2").className = "SPAN_Fat hide";
            document.getElementById("#3").className = "SPAN_Fat hide";
            document.getElementById("#4").className = "SPAN_Fat hide";
            document.getElementById("#5").className = "SPAN_Fat hide";
            document.getElementById("#6").className = "SPAN_Fat visible";
            document.getElementById("#7").className = "SPAN_Fat hide";
            document.getElementById("#8").className = "SPAN_Fat hide";
        }
        else if(x[6].checked){
            document.getElementById("#1").className = "SPAN_Fat hide";
            document.getElementById("#2").className = "SPAN_Fat hide";
            document.getElementById("#3").className = "SPAN_Fat hide";
            document.getElementById("#4").className = "SPAN_Fat hide";
            document.getElementById("#5").className = "SPAN_Fat hide";
            document.getElementById("#6").className = "SPAN_Fat hide";
            document.getElementById("#7").className = "SPAN_Fat visible";
            document.getElementById("#8").className = "SPAN_Fat hide";
        }
        else if(x[7].checked){
            document.getElementById("#1").className = "SPAN_Fat hide";
            document.getElementById("#2").className = "SPAN_Fat hide";
            document.getElementById("#3").className = "SPAN_Fat hide";
            document.getElementById("#4").className = "SPAN_Fat hide";
            document.getElementById("#5").className = "SPAN_Fat hide";
            document.getElementById("#6").className = "SPAN_Fat hide";
            document.getElementById("#7").className = "SPAN_Fat hide";
            document.getElementById("#8").className = "SPAN_Fat visible";
        }
    }
</script>
</div>
</body>
</html>